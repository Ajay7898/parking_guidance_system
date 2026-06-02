<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DeleteOldCameraFolders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:delete-old-camera-folders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $basePath = '/home/parkinbial_pgs/srv/SFTP_camera_images';

        $today = now()->format('Y-m-d'); // Only keep this

        if (!is_dir($basePath)) 
        {
            $this->error("Base path not found!");
            return;
        }

        $cameras = scandir($basePath);

        foreach ($cameras as $cameraFolder) 
        {

            if ($cameraFolder === '.' || $cameraFolder === '..') 
            {
                continue;
            }

            $cameraPath = $basePath . '/' . $cameraFolder;

            if (!is_dir($cameraPath)) 
            {
                continue;
            }

            // Scan all date folders inside camera
            $dateFolders = scandir($cameraPath);

            foreach ($dateFolders as $dateFolder) 
            {

                if ($dateFolder === '.' || $dateFolder === '..') 
                {
                    continue;
                }

                $dateFolderPath = $cameraPath . '/' . $dateFolder;

                // Skip non-directories
                if (!is_dir($dateFolderPath)) 
                {
                    continue;
                }

                // 🔥 Delete everything except today's folder
                if ($dateFolder !== $today) 
                {
                    $this->deleteFolder($dateFolderPath);
                    $this->info("Deleted: " . $dateFolderPath);
                }
            }
        }

        $this->info("All old folders deleted. Only today remains.");
    }

    // public function handle()
    // {
    //     $basePath = '/home/parkinbial_pgs/srv/SFTP_camera_images';

    //     $today = now()->format('Y-m-d');
    //     $currentHour = now()->format('H');

    //     if (!is_dir($basePath)) 
    //     {
    //         $this->error("Base path not found!");
    //         return;
    //     }

    //     $cameras = scandir($basePath);

    //     foreach ($cameras as $cameraFolder) 
    //     {
    //         if ($cameraFolder === '.' || $cameraFolder === '..') 
    //         {
    //             continue;
    //         }

    //         $cameraPath = $basePath . '/' . $cameraFolder;

    //         if (!is_dir($cameraPath)) 
    //         {
    //             continue;
    //         }

    //         $dateFolders = scandir($cameraPath);

    //         foreach ($dateFolders as $dateFolder) 
    //         {
    //             if ($dateFolder === '.' || $dateFolder === '..') 
    //             {
    //                 continue;
    //             }

    //             $datePath = $cameraPath . '/' . $dateFolder;

    //             if (!is_dir($datePath)) 
    //             {
    //                 continue;
    //             }

    //             // Delete old dates
    //             if ($dateFolder !== $today) 
    //             {
    //                 $this->deleteFolder($datePath);
    //                 continue;
    //             }

    //             // Handle TODAY folder
    //             $hourFolders = scandir($datePath);

    //             foreach ($hourFolders as $hourFolder) 
    //             {
    //                 if ($hourFolder === '.' || $hourFolder === '..') 
    //                 {
    //                     continue;
    //                 }

    //                 $hourPath = $datePath . '/' . $hourFolder;

    //                 if (!is_dir($hourPath)) 
    //                 {
    //                     continue;
    //                 }

    //                 // Delete non-current hour folders
    //                 if ($hourFolder !== $currentHour) 
    //                 {
    //                     $this->deleteFolder($hourPath);
    //                     continue;
    //                 }

    //                 // Inside current hour → keep only last 20 images
    //                 // $this->keepLastTwentyImages($hourPath);
    //             }
    //         }
    //     }

    //     $this->info("Cleanup completed successfully.");
    // }

    private function deleteFolder($folderPath)
    {
        if (!is_dir($folderPath)) 
        {
            return;
        }

        $files = scandir($folderPath);

        foreach ($files as $file) 
        {
            if ($file != '.' && $file != '..') {
                $fullPath = $folderPath . '/' . $file;

                if (is_dir($fullPath)) 
                {
                    $this->deleteFolder($fullPath);
                } 
                else 
                {
                    unlink($fullPath);
                }
            }
        }

        rmdir($folderPath);
    }

    private function keepLastTwentyImages($hourPath)
    {
        $files = glob($hourPath . '/*.*');

        if (!$files) 
        {
            return;
        }

        // Sort by modified time (latest first)
        usort($files, function ($a, $b) 
        {
            return filemtime($b) - filemtime($a);
        });

        $keep = array_slice($files, 0, 20);
        $delete = array_slice($files, 20);

        foreach ($delete as $file) 
        {
            unlink($file);
        }
    }
}
