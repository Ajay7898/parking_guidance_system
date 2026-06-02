<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use App\Helpers\TuyaApiHelper;

class TuyaApiService
{
    protected $accessId;
    protected $appSecret;
    protected $baseUrl;
    protected $accessToken;

    public function __construct()
    {
        $this->accessId = env('TUYA_CLIENT_ID');
        $this->appSecret = env('TUYA_SECRET');
        $this->baseUrl = env('TUYA_API_URL');

        $this->accessToken = $this->getAccessToken();
    }

    /** ALWAYS generate fresh timestamp & nonce */
    private function generateAuthData()
    {
        return [
            'timestamp' => TuyaApiHelper::getCurrentTimestamp(),
            'nonce' => TuyaApiHelper::generateNonce()
        ];
    }

    private function getHeaders($signature, $timestamp, $nonce, $accessToken = null)
    {
        return [
            'client_id' => $this->accessId,
            'sign' => $signature,
            't' => $timestamp,
            'nonce' => $nonce,
            'sign_method' => 'HMAC-SHA256',
            'access_token' => $accessToken
        ];
    }

    /** TOKEN CACHING (MAIN FIX) */
    public function getAccessToken()
    {
        return Cache::remember('tuya_access_token', 7000, function () 
        {

            $path = '/v1.0/token';
            $url = $this->baseUrl . $path;

            $auth = $this->generateAuthData();

            $stringToSign = TuyaApiHelper::generateStringToSign('grant_type=1', $path);

            $signature = TuyaApiHelper::calculateSignature(
                $this->accessId,
                null,
                $auth['timestamp'],
                $auth['nonce'],
                $stringToSign,
                $this->appSecret
            );

            $response = Http::timeout(5)
                ->withHeaders($this->getHeaders($signature, $auth['timestamp'], $auth['nonce']))
                ->get($url, ['grant_type' => 1]);

            $data = $response->json();

            if (!$response->successful() || !isset($data['result']['access_token'])) 
            {
                \Log::error('Tuya Token Error', [
                    'response' => $data
                ]);

                throw new \Exception('Tuya token failed: ' . ($data['msg'] ?? 'Unknown error'));
            }

            return $data['result']['access_token'];
        });
    }

    /** COMMON REQUEST HANDLER (AUTO RETRY ON TOKEN FAIL) */
    private function sendRequest($method, $path, $body = [])
    {
        $url = $this->baseUrl . $path;

        $auth = $this->generateAuthData();

        $bodyJson = !empty($body) ? json_encode($body) : '';

        $stringToSign = TuyaApiHelper::generateStringToSignSetColor($bodyJson, $path);

        $signature = TuyaApiHelper::calculateSignature(
            $this->accessId,
            $this->accessToken,
            $auth['timestamp'],
            $auth['nonce'],
            $stringToSign,
            $this->appSecret
        );

        $response = Http::timeout(5)
            ->retry(2, 100)
            ->withHeaders($this->getHeaders($signature, $auth['timestamp'], $auth['nonce'], $this->accessToken))
            ->$method($url, $body);

        $data = $response->json();

        // AUTO TOKEN REFRESH
        if (($data['code'] ?? null) == 1010) 
        {

            Cache::forget('tuya_access_token');

            $this->accessToken = $this->getAccessToken();

            // retry once
            return $this->sendRequest($method, $path, $body);
        }

        return $data;
    }

    /** SET DEVICE COLOR (FAST + SAFE) */
    public function setDeviceInteraction($code, $value, $deviceId)
    {
        $path = "/v1.0/devices/{$deviceId}/commands";

        return $this->sendRequest('post', $path, [
            'commands' => [
                [
                    'code' => $code,
                    'value' => $value
                ]
            ]
        ]);
    }

    /** GET DEVICE INFO */
    public function getDeviceInfo($deviceId)
    {
        $path = "/v1.0/devices/{$deviceId}";

        return $this->sendRequest('get', $path);
    }
}