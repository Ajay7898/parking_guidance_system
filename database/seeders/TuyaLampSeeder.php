<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TuyaLampSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tuya_lamps')->insert([

            // B1 126 Lamp
            // 26 Lamps
            ['name'=>'B1_A01-A02','lamp_device_id'=>'d7c425ca710b809ed6xcy5'],
            ['name'=>'B1_A02-A03','lamp_device_id'=>'d74945d641d3a5f4b0whiz'],
            ['name'=>'B1_A03-A04','lamp_device_id'=>'d739ec5927f27b036fd7lx'],
            ['name'=>'B1_A04-A05','lamp_device_id'=>'d743f37096752542fcxrwg'],
            ['name'=>'B1_A05-A06','lamp_device_id'=>'d7716077aa57e94c98sq6y'],
            ['name'=>'B1_A06-A07','lamp_device_id'=>'d79786da9ab8007d73wlss'],
            ['name'=>'B1_A07-A08','lamp_device_id'=>'d7d428ee73650995095mgs'],
            ['name'=>'B1_A08-A09','lamp_device_id'=>'d79c1b67f19a1237d70i1y'],
            ['name'=>'B1_A09-A10','lamp_device_id'=>'d79e4a341c3bb5ae4d3ma5'],
            ['name'=>'B1_A10-A11_D18','lamp_device_id'=>'d7db7802960b99c448j4s7'],
            ['name'=>'B1_A12-A13_D18','lamp_device_id'=>'d7e7c9f441700d8c950pzm'],
            ['name'=>'B1_A13-A14','lamp_device_id'=>'d71fef9f737e59d19fgbpm'],
            ['name'=>'B1_A14-A15','lamp_device_id'=>'d7dbeb01115f7718c42dea'],
            ['name'=>'B1_A15_A16_D18','lamp_device_id'=>'d7a2033af13d425eablnly'],
            ['name'=>'B1_A16-A17','lamp_device_id'=>'d7e4591438e42ed031veja'],
            ['name'=>'B1_A17-A18','lamp_device_id'=>'d72f98ee4fd18b9eb3m7oe'],
            ['name'=>'B1_A18-A19','lamp_device_id'=>'d7a0ce61c7299f92c2dogr'],
            ['name'=>'B1_A19-A20','lamp_device_id'=>'d77220129909f4a1a6egxp'],
            ['name'=>'B1_A22-A23','lamp_device_id'=>'d737c4b9741e65369eaxlw'],
            ['name'=>'B1_A23-A24','lamp_device_id'=>'d755261e4fdf3068fafgdb'],
            ['name'=>'B1_A25-A26','lamp_device_id'=>'d78b753c3d3f4cecdfnerw'],
            ['name'=>'B1_A26-A27','lamp_device_id'=>'d75627f52f40f2ffa2mhig'],
            ['name'=>'B1_A27-A28','lamp_device_id'=>'d797b74005f38a9847ngzo'],
            ['name'=>'B1_A28-A29','lamp_device_id'=>'d717d45e9b9272469ajm3b'],
            ['name'=>'B1_A29-A30','lamp_device_id'=>'d7fafdb72626f3d589nrv9'],
            ['name'=>'B1_A30-A31','lamp_device_id'=>'d7732aaf1313baec21yxcw'],

            // 25 Lamps
            ['name'=>'B1_B01-B02','lamp_device_id'=>'d7d8fbb9149a1754c8oody'],
            ['name'=>'B1_B02-B03','lamp_device_id'=>'d721a0bd6b5e7c3838u6pw'],
            ['name'=>'B1_B03-B04','lamp_device_id'=>'d76cadac76dc7e1171ubax'],
            ['name'=>'B1_B04-B05','lamp_device_id'=>'d7deb4520dc8cf06c4eqx1'],
            ['name'=>'B1_B06-B07','lamp_device_id'=>'d7f96c260aabec3585f9t5'],
            ['name'=>'B1_B07-B08','lamp_device_id'=>'d7b7597880b14e7788etmz'],
            ['name'=>'B1_B08-B09','lamp_device_id'=>'d79e7b9ede39c20e75kchl'],
            ['name'=>'B1_B09-B10','lamp_device_id'=>'d779a0952fc4bb2f32jfka'],
            ['name'=>'B1_B10-B11','lamp_device_id'=>'d76314d9b734864211p7pf'],
            ['name'=>'B1_B11-B12','lamp_device_id'=>'d7bc12ce76864821e3oydo'],
            ['name'=>'B1_B12-B13','lamp_device_id'=>'d74ba887a235a44e5fveni'],
            ['name'=>'B1_B16-B17','lamp_device_id'=>'d791f1278bdd4afc3f0s36'],
            ['name'=>'B1_B17-B18_D18','lamp_device_id'=>'d7ceb4ab7330f0cf7cuof7'],
            ['name'=>'B1_B18-B19','lamp_device_id'=>'d7848992f19cd3a394h8x8'],
            ['name'=>'B1_B19-B20','lamp_device_id'=>'d7b43578ddbd38dd04wyle'],
            ['name'=>'B1_B20-B21_D18','lamp_device_id'=>'d7ee3b624e4babaa58m7bd'],
            ['name'=>'B1_B21-B22','lamp_device_id'=>'d7eb44f66e6f6a3ed0aegx'],
            ['name'=>'B1_B22-B23','lamp_device_id'=>'d74f33e8434f48362165ac'],
            ['name'=>'B1_B23-B24','lamp_device_id'=>'d753cce271e2414b97frlf'],
            ['name'=>'B1_B24-B25','lamp_device_id'=>'d77a4e3232d47e947dhs2a'],
            ['name'=>'B1_B25-B26','lamp_device_id'=>'d781292aee1d807962jc4e'],
            ['name'=>'B1_B27-B28','lamp_device_id'=>'d7cd9d331051aaaa5aoxfq'],
            ['name'=>'B1_B28-B29','lamp_device_id'=>'d7a720b1806ee095f4ustn'],
            ['name'=>'B1_B29-B30','lamp_device_id'=>'d7ec045127da40a370a7yu'],
            ['name'=>'B1_B06-C06','lamp_device_id'=>'d7b767a75e25f2f517wsdq'],
            

            // 17 Lamps one niche hia
            ['name'=>'B1_C01-C02','lamp_device_id'=>'d7049abe8f4f78736ciamb'],
            ['name'=>'B1_C02-C03','lamp_device_id'=>'d7804e57b50196d4f1uj5u'],
            ['name'=>'B1_C03-C04','lamp_device_id'=>'d7c3fa962bb3d43d06dthc'],
            ['name'=>'B1_C04-C05','lamp_device_id'=>'d77d16c134e10b306exwix'],
            ['name'=>'B1_C06-D06','lamp_device_id'=>'d7022ac162802e511eccf4'],
            ['name'=>'B1_C14-D14','lamp_device_id'=>'d78c6d1d657c60d72ejfkd'],
            ['name'=>'B1_C17-C18','lamp_device_id'=>'d74eaa4c18f48e0270dnhp'],
            ['name'=>'B1_C21-C22','lamp_device_id'=>'d71452b8a7f3ef9734lck7'],
            ['name'=>'B1_C20-C21','lamp_device_id'=>'d7420f43cdae693dd8nl4x'],
            ['name'=>'B1_C22-C23','lamp_device_id'=>'d7133f14fa0dbd7ef0okvs'],
            ['name'=>'B1_C23-C24','lamp_device_id'=>'d7728a1eceb7eec141vyqv'],
            ['name'=>'B1_C24-C25','lamp_device_id'=>'d786201ce8663c417aykrl'],
            ['name'=>'B1_C25-C26','lamp_device_id'=>'d725c6d1257259716dbagl'],
            ['name'=>'B1_C27-C28','lamp_device_id'=>'d7656ecd60070201d2x1q9'],
            ['name'=>'B1_C28-C29','lamp_device_id'=>'d779977390af918daaxeiq'],
            ['name'=>'B1_C29-C30','lamp_device_id'=>'d7551dfbf18ec9afc2babb'],

            // 7 Lamps
            ['name'=>'B1_D04-D05','lamp_device_id'=>'d7121befb8f360cc6bvveq'],
            ['name'=>'B1_D16-D17_D18','lamp_device_id'=>'d7274fee4596bfc510aajv'],
            ['name'=>'B1_D24-D25','lamp_device_id'=>'d7442283733fc6f33e7aoq'],
            ['name'=>'B1_D26-D27','lamp_device_id'=>'d7db5ce66223580819oblq'],
            ['name'=>'B1_D27-D28','lamp_device_id'=>'d728931a9cddf65dcdhiwk'],
            ['name'=>'B1_D30-D31','lamp_device_id'=>'d739730ffde73adb9b4mwh'],
            ['name'=>'B1_D14-E14','lamp_device_id'=>'d7a8f5fd59af3e325fs2fa'],

            // 2 Lamps
            ['name'=>'B1_E04-E05','lamp_device_id'=>'d7eb7c3add5ea6b40cqote'],
            ['name'=>'B1_E14-F14','lamp_device_id'=>'d7a68baea9e36d24d3aceo'],

            // 7 Lamps
            ['name'=>'B1_F01-F02','lamp_device_id'=>'d76365a36cb7657df4n6di'],
            ['name'=>'B1_F02-F03','lamp_device_id'=>'d76fb4fed8a45232fbbjto'],
            ['name'=>'B1_F03-F04','lamp_device_id'=>'d7a60d750f54846d8fwz20'],
            ['name'=>'B1_F04-F05','lamp_device_id'=>'d71ec19dcc19413805n0gm'],
            ['name'=>'B1_F06-F07','lamp_device_id'=>'d7ebfb92be841eb4c8vdee'],
            ['name'=>'B1_F07-F08','lamp_device_id'=>'d779ef3ee884279d28dmgz'],
            ['name'=>'B1_F14-G14','lamp_device_id'=>'d7bf36d3a2c1cb3ba3vraf'],

            // 12 Lamps
            ['name'=>'B1_G01-G02','lamp_device_id'=>'d76efd102a8057c74ardnr'],
            ['name'=>'B1_G02-G03','lamp_device_id'=>'d7f025378e2bcea69dzbjp'],
            ['name'=>'B1_G03-G04','lamp_device_id'=>'d75477d297155c8c94gre5'],
            ['name'=>'B1_G04-G05','lamp_device_id'=>'d723de7be9cec3286bospt'],
            ['name'=>'B1_G06-G07','lamp_device_id'=>'d715843693fdb42785ms8d'],
            ['name'=>'B1_G07-G08','lamp_device_id'=>'d725102e5e67c7ac38bqza'],
            ['name'=>'B1_G08-G09','lamp_device_id'=>'d76e66aae631d490e5vaik'],
            ['name'=>'B1_G09-G10','lamp_device_id'=>'d7d7f1d4b2354324e8jpy8'],
            ['name'=>'B1_G10-G11','lamp_device_id'=>'d7c742f4a6bcb79d0bekqb'],
            ['name'=>'B1_G11-G12','lamp_device_id'=>'d7aded05caf209037cjlvs'],
            ['name'=>'B1_G12-G13','lamp_device_id'=>'d76cf178026890b1d9k7nn'],
            ['name'=>'B1_G14-H14','lamp_device_id'=>'d79c60046d3f102ca4ifuk'],

            // 12 Lamps
            ['name'=>'B1_H01-H02','lamp_device_id'=>'d75822ba2af2020779fsau'],
            ['name'=>'B1_H02-H03','lamp_device_id'=>'d74697c0ab60b6b43euqgs'],
            ['name'=>'B1_H03-H04','lamp_device_id'=>'d761818a35358eb8d83m9a'],
            ['name'=>'B1_H04-H05','lamp_device_id'=>'d7261dde2c85936debzycw'],
            ['name'=>'B1_H06-H07','lamp_device_id'=>'d72a1ae6685c7491664lnu'],
            ['name'=>'B1_H07-H08','lamp_device_id'=>'d7fcb0023f8fd522c24bke'],
            ['name'=>'B1_H08-H09','lamp_device_id'=>'d793c65de9d1bc45f9nwdx'],
            ['name'=>'B1_H09-H10','lamp_device_id'=>'d75712232be7c3ded7b7n3'],
            ['name'=>'B1_H10-H11','lamp_device_id'=>'d723a417606349566f1nia'],
            ['name'=>'B1_H11-H12','lamp_device_id'=>'d7cf9a27a6af20064drqto'],
            ['name'=>'B1_H12-H13','lamp_device_id'=>'d7bad59f775c733d5bwoh5'],
            ['name'=>'B1_H14-J14','lamp_device_id'=>'d7f9138b6d67004272htkk'],

            // 12 Lamps
            ['name'=>'B1_J01-J02','lamp_device_id'=>'d746f7456198d23bfasshy'],
            ['name'=>'B1_J02-J03','lamp_device_id'=>'d73534bf555f3e6ab9prww'],
            ['name'=>'B1_J03-J04','lamp_device_id'=>'d791becc345deff97fhewi'],
            ['name'=>'B1_J04-J05','lamp_device_id'=>'d7ea9763c8e99cc8d8oixp'],
            ['name'=>'B1_J06-J07','lamp_device_id'=>'d7836812cb58bf14f4tci6'],
            ['name'=>'B1_J07-J08','lamp_device_id'=>'d72151780e085518ffm7ie'],
            ['name'=>'B1_J08-J09','lamp_device_id'=>'d76c27500d9fed7329sqai'],
            ['name'=>'B1_J09-J10','lamp_device_id'=>'d75d6478feccea0655czbj'],
            ['name'=>'B1_J10-J11','lamp_device_id'=>'d765689cb84a43079bvpxs'],
            ['name'=>'B1_J11-J12','lamp_device_id'=>'d7c79a2362fdc50fa1qr0i'],
            ['name'=>'B1_J12-J13','lamp_device_id'=>'d788a822d78c8429d7celg'],
            ['name'=>'B1_J14-K14','lamp_device_id'=>'d7e38dca2a8a9d22249n1o'],

            // 7 Lamps
            ['name'=>'B1_K01-K02','lamp_device_id'=>'d7f50a7227d9b570aetmn9'],
            ['name'=>'B1_K02-K03','lamp_device_id'=>'d7cc1c6c3bbc60e484zctb'],
            ['name'=>'B1_K03-K04','lamp_device_id'=>'d741cb00b83de3fe08q361'],
            ['name'=>'B1_K04-K05','lamp_device_id'=>'d7d707067e08819ad6d9zz'],
            ['name'=>'B1_K05-K06','lamp_device_id'=>'d7dbcf2aba825fa1c6qraj'],
            ['name'=>'B1_K07-K08','lamp_device_id'=>'d7d7fc48351a5e1ab0kyne'],
            ['name'=>'B1_K09-K10','lamp_device_id'=>'d7faa410648a6b163es9qo'],

            //B1 Reamning Lamps
            ['name'=>'B1_C19-C20','lamp_device_id'=>'d794ffbe300496fe12xhvw'],

            // B2 Lamps Mapping
            // 13 Lamps
            ['name'=>'B2_A06-A07','lamp_device_id'=>'d79fd1ef437de78d73dkst'],
            ['name'=>'B2_A07-A08','lamp_device_id'=>'d7c472ecfcb4bbc44a52bt'],
            ['name'=>'B2_A08-A09','lamp_device_id'=>'d72c56f2a0160e91f4mvkj'],
            ['name'=>'B2_A09-A10','lamp_device_id'=>'d734dc4d8a03dd98392okg'],
            ['name'=>'B2_A28-A29','lamp_device_id'=>'d72b68ca469f346500kaxy'],
            ['name'=>'B2_A29-A30','lamp_device_id'=>'d769e98b925173469b9dc4'],
            ['name'=>'B2_A32-A33','lamp_device_id'=>'d74600b023b0c55d71mafw'],
            ['name'=>'B2_A33-A34','lamp_device_id'=>'d79aef96e8509e3d63stlc'],
            ['name'=>'B2_A34-A35','lamp_device_id'=>'d7a5c31533e4d253788ga6'],
            ['name'=>'B2_A35-A36','lamp_device_id'=>'d79d6adf8d403a817fkzpd'],
            ['name'=>'B2_A36-A37','lamp_device_id'=>'d7d1b079997a053f77klyy'],
            ['name'=>'B2_A37-A38','lamp_device_id'=>'d7a4eeec0a72baf170by2i'],
            ['name'=>'B2_A38-A39','lamp_device_id'=>'d7537967bc7ede03e1prji'],

            // 30 Lamps
            ['name'=>'B2_B05-B06','lamp_device_id'=>'d7362c16041b3cdb80qcof'],
            ['name'=>'B2_B06-B07','lamp_device_id'=>'d71e6c1ca591a30a67zr62'],
            ['name'=>'B2_B11-B12','lamp_device_id'=>'d7046e3f4e77b99f1epd56'],
            ['name'=>'B2_B12-B13','lamp_device_id'=>'d7e487153a0a799cdcgocs'],
            ['name'=>'B2_B13-B14','lamp_device_id'=>'d7ea1b3fd68a244371s73d'],
            ['name'=>'B2_B14-B15','lamp_device_id'=>'d774b178a0e170a1331sjq'],
            ['name'=>'B2_B15-B16','lamp_device_id'=>'d71b989d00de22c03ejc8g'],
            ['name'=>'B2_B16-B17','lamp_device_id'=>'d79e4c195d45fe9b0ei5es'],
            ['name'=>'B2_B17-B18','lamp_device_id'=>'d710ef66d6aae78670pnpy'],
            ['name'=>'B2_B18-B19','lamp_device_id'=>'d7170e216832ff8a65utug'],
            ['name'=>'B2_B19-B20','lamp_device_id'=>'d79e65dffa4bd73317xi3k'],
            ['name'=>'B2_B20-B21','lamp_device_id'=>'d7996c5fb3997dc4024q5p'],
            ['name'=>'B2_B21-B22','lamp_device_id'=>'d7d578560c853e4a93nizw'],
            ['name'=>'B2_B22-B23','lamp_device_id'=>'d7a28d8daea68e63f0hraq'],
            ['name'=>'B2_B24-B25','lamp_device_id'=>'d7bc8e64b83aafbf56ud02'],
            ['name'=>'B2_B25-B26','lamp_device_id'=>'d70de47794faa272c7dv0u'],
            ['name'=>'B2_B26-B27','lamp_device_id'=>'d7911fe1186846a40agcap'],
            ['name'=>'B2_B27-B28','lamp_device_id'=>'d7b899c514c34f837c1nd2'],
            ['name'=>'B2_B28-B29','lamp_device_id'=>'d7e34a9f7b38baf7f960yq'],
            ['name'=>'B2_B29-B30','lamp_device_id'=>'d720a0e6b5c7fcc71batmt'],
            ['name'=>'B2_B30-B31','lamp_device_id'=>'d790c564039bb9ebf7d6ge'],
            ['name'=>'B2_B31-B32','lamp_device_id'=>'d78797da45196a6700elbz'],
            ['name'=>'B2_B32-B33','lamp_device_id'=>'d712d3bc69ff95cc1aoykg'],
            ['name'=>'B2_B33-B34','lamp_device_id'=>'d70218adaba7a7d771g7fv'],
            ['name'=>'B2_B34-B35','lamp_device_id'=>'d7f830bad1acc281465jop'],
            ['name'=>'B2_B35-B36','lamp_device_id'=>'d7382bd0437fb3481a9uru'],
            ['name'=>'B2_B36-B37','lamp_device_id'=>'d774bf6c7ceb4717a1jyth'],
            ['name'=>'B2_B37-B38','lamp_device_id'=>'d79e7ffb4e6c860c6elyyo'],
            ['name'=>'B2_B38-B39','lamp_device_id'=>'d7ae97e09a6d1751796i8i'],

            ['name'=>'B2_B40-C40','lamp_device_id'=>'d7d8f72be14a7329c3pyvu'],

            // 35 Lamps
            ['name'=>'B2_C00-C01','lamp_device_id'=>'d7ea40d38ac6bd570amzqn'],
            ['name'=>'B2_C01-C02','lamp_device_id'=>'d799834405a1478451z0be'],
            ['name'=>'B2_C02-C03','lamp_device_id'=>'d766674d685f3c754evzzy'],
            ['name'=>'B2_C04-C05','lamp_device_id'=>'d7e9337e79f6785fbd9lgz'],
            ['name'=>'B2_C05-C06','lamp_device_id'=>'d7533916b5331b472dr3cw'],
            ['name'=>'B2_C08-C09','lamp_device_id'=>'d7d0014fe7a8c7be2eu900'],
            ['name'=>'B2_C09-C10','lamp_device_id'=>'d799d85ea174c494a8az44'],

            ['name'=>'B2_C10-C11','lamp_device_id'=>'d77301d2d120d1f04dafrl'],
            ['name'=>'B2_C11-C12','lamp_device_id'=>'d79c5f7569c0036f3djiuf'],
            ['name'=>'B2_C12-C13','lamp_device_id'=>'d756bb7efa4d762f33gfa7'],
            ['name'=>'B2_C13-C14','lamp_device_id'=>'d79b72a5733404e09bhcyw'],
            ['name'=>'B2_C14-C15','lamp_device_id'=>'d7a22f1ad3a15b1e3266gc'],
            ['name'=>'B2_C15-C16','lamp_device_id'=>'d742fa6edc96bad0fevwod'],
            ['name'=>'B2_C16-C17','lamp_device_id'=>'d771fa008ca45e14b61h7r'],
            ['name'=>'B2_C17-C18','lamp_device_id'=>'d7b08aa585e7c444f4egd9'],
            ['name'=>'B2_C18-C19','lamp_device_id'=>'d72f847fc1e21b6392qspr'],

            ['name'=>'B2_C20-C21','lamp_device_id'=>'d7c6052c8b32dde403jycn'],
            ['name'=>'B2_C21-C22','lamp_device_id'=>'d7c741b00a1a230926zucf'],
            ['name'=>'B2_C22-C23','lamp_device_id'=>'d7ed6107b706c290cbanhu'],
            ['name'=>'B2_C24-C25','lamp_device_id'=>'d7b5fc6b303d4c6597mbxt'],
            ['name'=>'B2_C25-C26','lamp_device_id'=>'d7ac94ce5e53b5886b36t1'],
            ['name'=>'B2_C26-C27','lamp_device_id'=>'d7c13a3b6e081ffc83ya3l'],
            ['name'=>'B2_C27-C28','lamp_device_id'=>'d75228b71b445ecc4dhcd2'],
            ['name'=>'B2_C28-C29','lamp_device_id'=>'d74cee8035ae562f17jxgu'],
            ['name'=>'B2_C29-C30','lamp_device_id'=>'d71defc101ffd0ef6ezjxr'],

            ['name'=>'B2_C30-C31','lamp_device_id'=>'d7dca067494cfdf5ecwwui'],
            ['name'=>'B2_C31-C32','lamp_device_id'=>'d75ca80ffc2e55880cuqtw'],
            ['name'=>'B2_C32-C33','lamp_device_id'=>'d7517610df054e954bi8at'],
            ['name'=>'B2_C33-C34','lamp_device_id'=>'d77bf57ed7323c17benskv'],
            ['name'=>'B2_C34-C35','lamp_device_id'=>'d72f270f5aecb90677rtqa'],
            ['name'=>'B2_C35-C36','lamp_device_id'=>'d74c7fbeb41fa88352inma'],
            ['name'=>'B2_C36-C37','lamp_device_id'=>'d73c76c71001dbbe4atuuh'],
            ['name'=>'B2_C37-C38','lamp_device_id'=>'d7f3d63792009f0fca1z5s'],
            ['name'=>'B2_C38-C39','lamp_device_id'=>'d7e083f6361b69e830avgc'],
            ['name'=>'B2_C40-D40','lamp_device_id'=>'d7e0472a655bba5344epo5'],

            // 24 Lamps 
            ['name'=>'B2_D02-D03','lamp_device_id'=>'d76dfe7e6b73e975855hyh'],
            ['name'=>'B2_D04-D05','lamp_device_id'=>'d79120a43fca3319558fpf'],
            ['name'=>'B2_D09-D10','lamp_device_id'=>'d78c6282fc8db37831vvd2'],
            ['name'=>'B2_D10-D11','lamp_device_id'=>'d70f45d5a59fcc357aijlr'],
            ['name'=>'B2_D12-D13','lamp_device_id'=>'d7f5e026ceab959a91ua6i'],
            ['name'=>'B2_D14-D15','lamp_device_id'=>'d72f60291babe5236c3tzv'],
            ['name'=>'B2_D15-D16','lamp_device_id'=>'d7b22e8293d30ac462dmow'],
            ['name'=>'B2_D16-D17','lamp_device_id'=>'d73dda43c929718e1fgaed'],
            ['name'=>'B2_D19-D20','lamp_device_id'=>'d76265339fecbb4e22dtoo'],
            ['name'=>'B2_D20-D21','lamp_device_id'=>'d7ae55ca64d8334eb9qa9y'],
            ['name'=>'B2_D21-D22','lamp_device_id'=>'d7c790bd6786a4a266mat9'],
            ['name'=>'B2_D24-D25','lamp_device_id'=>'d78a40082ed551a40am25r'],
            ['name'=>'B2_D25-D26','lamp_device_id'=>'d775b656a1366034actxhb'],
            ['name'=>'B2_D27-D28','lamp_device_id'=>'d72eca287561c8f1b2ghjx'],
            ['name'=>'B2_D28-D29','lamp_device_id'=>'d7b34708e2a68d4d0eazev'],
            ['name'=>'B2_D29-D30','lamp_device_id'=>'d70d67164fdda980cbuk6r'],
            ['name'=>'B2_D31-D32','lamp_device_id'=>'d7ba703a7519d77e9cwk6n'],
            ['name'=>'B2_D33-D32','lamp_device_id'=>'d78cf5eef65dbe22b18dsy'],
            ['name'=>'B2_D33-D34','lamp_device_id'=>'d730c0aa1054dbe544mqnl'],
            ['name'=>'B2_D34-D35','lamp_device_id'=>'d7f33c798dea8363d6vfns'],
            ['name'=>'B2_D35-D36','lamp_device_id'=>'d72eaf5862d57459ccvbqc'],
            ['name'=>'B2_D36-D37','lamp_device_id'=>'d770944a04077054a8vpci'],
            ['name'=>'B2_D38-D39','lamp_device_id'=>'d74221a649884ed163tm6t'], 
            ['name'=>'B2_D40-E40','lamp_device_id'=>'d7b0661e421e33892cp27q'],

            // 26 Lamps
            ['name'=>'B2_E01-E02','lamp_device_id'=>'d7ff35b5d59e2607b7dyyv'],
            ['name'=>'B2_E03-E04','lamp_device_id'=>'d7bd233f7bdcb91362nlnu'],
            ['name'=>'B2_E06-E07','lamp_device_id'=>'d7f6c3c1bb9a18c1d4twrw'],
            ['name'=>'B2_E07-E08','lamp_device_id'=>'d77febda5eb8346989d7cd'],
            ['name'=>'B2_E08-E09','lamp_device_id'=>'d7ef5e05fa662f5761wmqb'],
            ['name'=>'B2_E09-E10','lamp_device_id'=>'d7f524f00e897ec528pxi0'],
            ['name'=>'B2_E10-E11','lamp_device_id'=>'d75d40c2512f1c29d0vmuh'], 
            ['name'=>'B2_E12-E13','lamp_device_id'=>'d776a2621e4948562eoopd'],  
            ['name'=>'B2_E19-E20','lamp_device_id'=>'d7a9be704ed936a893dppo'],

            ['name'=>'B2_E20-E21','lamp_device_id'=>'d7f8a267dfb78cffdbq1j8'],
            ['name'=>'B2_E21-E22','lamp_device_id'=>'d71dea3de8f16d69fasodr'],
            ['name'=>'B2_E23-E24','lamp_device_id'=>'d7d083bbcba91c18aeyv6r'],
            ['name'=>'B2_E24-E25','lamp_device_id'=>'d76e25f1384b36bf40w5pm'],
            ['name'=>'B2_E25-E26','lamp_device_id'=>'d7ca4ade8e46ff63e6365t'],
            ['name'=>'B2_E27-E28','lamp_device_id'=>'d78c86a6b2cc4d57b5wepf'], 
            ['name'=>'B2_E28-E29','lamp_device_id'=>'d72bb6e44bb4a20a9clwda'],
            ['name'=>'B2_E29-E30','lamp_device_id'=>'d77055f9163f790314r0tb'],

            ['name'=>'B2_E30-E31','lamp_device_id'=>'d7ed577566981fc7e1guwd'], 
            ['name'=>'B2_E31-E32','lamp_device_id'=>'d7483318a677941e9duc8c'],
            ['name'=>'B2_E32-E33','lamp_device_id'=>'d736f9a539e67dbb40djyv'],
            ['name'=>'B2_E33-E34','lamp_device_id'=>'d75869cbf9be85f75flpas'], 
            ['name'=>'B2_E35-E36','lamp_device_id'=>'d7fa7a9211425fb693gbyr'], 
            ['name'=>'B2_E36-E37','lamp_device_id'=>'d7ea4e7d8b1735649cj5gl'],
            ['name'=>'B2_E37-E38','lamp_device_id'=>'d765c63400baa09eb6efuy'],
            ['name'=>'B2_E38-E39','lamp_device_id'=>'d74f6fd64e87c836906izg'],
            ['name'=>'B2_E40-F40','lamp_device_id'=>'d79bd1726cf94252dddoga'],

            // 27 Lamps
            ['name'=>'B2_F01-F02','lamp_device_id'=>'d799a024bea458ca66axjo'],
            ['name'=>'B2_F03-F04','lamp_device_id'=>'d77cea3fb039f67dd1cau7'],
            ['name'=>'B2_F04-F05','lamp_device_id'=>'d7d58adedb4d8ae2dbjhvx'],
            ['name'=>'B2_F08-F09','lamp_device_id'=>'d70d9ff7ca8b652b156gvt'],

            ['name'=>'B2_F13-F14','lamp_device_id'=>'d76de0c657f71c5186ipkv'],
            ['name'=>'B2_F14-F15','lamp_device_id'=>'d72123771a1687c5130q69'],
            ['name'=>'B2_F15-F16','lamp_device_id'=>'d7e1a7856297bf05685aua'],
            ['name'=>'B2_F16-F17','lamp_device_id'=>'d72e88826b43290651oczl'],
            ['name'=>'B2_F17-F18','lamp_device_id'=>'d7b86839ae1eda97f5astw'],
            ['name'=>'B2_F18-F19','lamp_device_id'=>'d70fe51addd087d6d4akab'],

            ['name'=>'B2_F20-F21','lamp_device_id'=>'d784c086f42fd3eb07x3rx'], 
            ['name'=>'B2_F21-F22','lamp_device_id'=>'d770e04f1e70031510ftvu'],
            ['name'=>'B2_F22-F23','lamp_device_id'=>'d7889d202b024ee20edtbw'],
            ['name'=>'B2_F24-F25','lamp_device_id'=>'d7cdbbc71016ef7c2datog'],
            ['name'=>'B2_F25-F26','lamp_device_id'=>'d72643971d1cb3e565fqba'],
            ['name'=>'B2_F27-F28','lamp_device_id'=>'d74d5b25809a2b8330rtju'],
            ['name'=>'B2_F28-F29','lamp_device_id'=>'d76f1b1447d6189361gveu'],
            ['name'=>'B2_F29-F30','lamp_device_id'=>'d7d952ce855353895csvoi'],
            ['name'=>'B2_F30-F31','lamp_device_id'=>'d701c4eed2f14ffb0fdpc3'],
            ['name'=>'B2_F32-F33','lamp_device_id'=>'d7d097e1030ab1262f2yqh'],
            ['name'=>'B2_F33-F34','lamp_device_id'=>'d7f21e977aa3824901jujm'], 
            ['name'=>'B2_F34-F35','lamp_device_id'=>'d71ed6726af47fcc62vi26'],
            ['name'=>'B2_F35-F36','lamp_device_id'=>'d7983534b6e7dce3c9mh9m'], 
            ['name'=>'B2_F36-F37','lamp_device_id'=>'d7f6e2b211f1ca6c59nm7c'],
            ['name'=>'B2_F37-F38','lamp_device_id'=>'d79ced4c28b050497euciu'],
            ['name'=>'B2_F38-F39','lamp_device_id'=>'d7b610a0237edd71a5m1bp'],
            ['name'=>'B2_F40-G40','lamp_device_id'=>'d7a1b06357d3afcc90zrje'],

            // 18 Lamps
            ['name'=>'B2_G02-G03','lamp_device_id'=>'d73a01e7a7dc6ff6b0char'],
            ['name'=>'B2_G03-G04','lamp_device_id'=>'d7827e568c75c5b07b0bb9'], 
            ['name'=>'B2_G04-G05','lamp_device_id'=>'d73bf5d7518079e64fiuzh'],
            ['name'=>'B2_G07-G08','lamp_device_id'=>'d79cd1e9b7b48d57b1jeku'],

            ['name'=>'B2_G13-G14','lamp_device_id'=>'d796b5bd22a90bb342blni'], 
            
            ['name'=>'B2_G22-G23','lamp_device_id'=>'d7bfd7963e30a5ef50xgxf'],
            ['name'=>'B2_G28-G29','lamp_device_id'=>'d7bb8082f6bd816aacu1hg'],
            ['name'=>'B2_G29-G30','lamp_device_id'=>'d775629d27c2a92c106ah3'], 
            ['name'=>'B2_G30-G31','lamp_device_id'=>'d7894500adf738cdb98gqg'],
            ['name'=>'B2_G31-G32','lamp_device_id'=>'d712af30a12cf68b47x7oc'],
            ['name'=>'B2_G32-G33','lamp_device_id'=>'d75774649861a9792aih2v'],
            ['name'=>'B2_G33-G34','lamp_device_id'=>'d713f95d6c54aff6ecdylm'], 
            ['name'=>'B2_G34-G35','lamp_device_id'=>'d7802f67ee27a96191jupf'],
            ['name'=>'B2_G35-G36','lamp_device_id'=>'d798c0c23bc4206c74n1vy'],
            ['name'=>'B2_G36-G37','lamp_device_id'=>'d7aad55d7baafada5bxyxy'],
            ['name'=>'B2_G37-G38','lamp_device_id'=>'d7e4cbe620f10edd8cok4y'],
            ['name'=>'B2_G38-G39','lamp_device_id'=>'d70b71dda9e2c855cfwago'],
            ['name'=>'B2_G40-H40','lamp_device_id'=>'d7d6c26ad38b52c225gr7q'],

            // 10 Lamps
            ['name'=>'B2_H30-H31','lamp_device_id'=>'d7663378262714f2d6nvei'],
            ['name'=>'B2_H32-H33','lamp_device_id'=>'d71e3d7e8e9b646214f8ac'], 
            ['name'=>'B2_H33-H34','lamp_device_id'=>'d7c7b35d24f933f236gnlj'],
            ['name'=>'B2_H34-H35','lamp_device_id'=>'d7d4b014b277c50a7cocg8'], 
            ['name'=>'B2_H35-H36','lamp_device_id'=>'d7cefc344daccfcb94hvp2'],
            ['name'=>'B2_H36-H37','lamp_device_id'=>'d713039ece18281015yjpd'],
            ['name'=>'B2_H37-H38','lamp_device_id'=>'d7107406726cc2c783o9fc'],
            ['name'=>'B2_H38-H39','lamp_device_id'=>'d74235bbdbd71bf9866njq'],
            ['name'=>'B2_H39-I40','lamp_device_id'=>'d71b64ff32c292648cnzyv'],
            ['name'=>'B2_H20-J20','lamp_device_id'=>'d70f73cee372b8ba0eu8u3'],

            // 2 Lamps
            ['name'=>'B2_J20-K20','lamp_device_id'=>'d78897ec6f83a8033cgfjg'],
            ['name'=>'B2_J10-J11','lamp_device_id'=>'d78b91421b445710f2eqyk'],

            // 11 Lamps
            ['name'=>'B2_K01-K02','lamp_device_id'=>'d7b74f606dde766d02pybd'],
            ['name'=>'B2_K02-K03','lamp_device_id'=>'d739363e29b33a5832ruju'],
            ['name'=>'B2_K03-K04','lamp_device_id'=>'d7822bee2e832aa5b2eopm'],
            ['name'=>'B2_K07-K08','lamp_device_id'=>'d724117bee3b043746oqks'],
            ['name'=>'B2_K08-K09','lamp_device_id'=>'d794655213d3540fefaa82'], 
            ['name'=>'B2_K09-K10','lamp_device_id'=>'d751c6be1cb7fd6949hos7'],
            ['name'=>'B2_K10-K11','lamp_device_id'=>'d71f726976db79b6a7zl6l'],
            ['name'=>'B2_K12-K13','lamp_device_id'=>'d79791a7a273b11f67vvpg'],
            ['name'=>'B2_K13-K14','lamp_device_id'=>'d767d3c84f6446f0bcvdmy'],
            ['name'=>'B2_K14-K15','lamp_device_id'=>'d7296d06221b706ddfxyvi'],
            ['name'=>'B2_K20-L20','lamp_device_id'=>'d71ce0f5c75cd26065byzt'],

            // 13 Lamps
            ['name'=>'B2_L01-L02','lamp_device_id'=>'d77e945b4d1e5fc3692nhc'],
            ['name'=>'B2_L02-L03','lamp_device_id'=>'d74c4f51b49970649fynzg'],
            ['name'=>'B2_L03-L04','lamp_device_id'=>'d7dee420a8a230a8dagjuv'],
            ['name'=>'B2_L07-L08','lamp_device_id'=>'d7cd5730b5329eb912pe9x'],
            ['name'=>'B2_L08-L09','lamp_device_id'=>'d7e1ac41581eae163eg2wj'],
            ['name'=>'B2_L09-L10','lamp_device_id'=>'d7215ebc668af7c0daydra'],
            ['name'=>'B2_L10-L11','lamp_device_id'=>'d75ef3e2b9a183ad08c5bj'], 
            ['name'=>'B2_L12-L13','lamp_device_id'=>'d7e424a9f6a449ced7gcnm'],
            ['name'=>'B2_L13-L14','lamp_device_id'=>'d72c27d6b74ecc9b70obvl'],
            ['name'=>'B2_L14-L15','lamp_device_id'=>'d7e32e4aee69f2ce928la5'],
            ['name'=>'B2_L15-L16','lamp_device_id'=>'d7789432d8213e3c44v5rt'], 
            ['name'=>'B2_L16-L17','lamp_device_id'=>'d76a721c542587cde84afi'],
            ['name'=>'B2_L18-L19','lamp_device_id'=>'d7c8507e05980dadd4dvfv'], 

             // 16 Lamps
            ['name'=>'B2_M01-M02','lamp_device_id'=>'d7726be5533d45e06bwpuj'],
            ['name'=>'B2_M02-M03','lamp_device_id'=>'d762a23ae3c56a9ed9mtdw'], 
            ['name'=>'B2_M03-M04','lamp_device_id'=>'d7c98cbeb5e1f262b1zrh9'],
            ['name'=>'B2_M04-M05','lamp_device_id'=>'d709a84e468d9d4a9e90le'],
            ['name'=>'B2_M05-L05','lamp_device_id'=>'d7e64b39e72cd57f96gxds'],
            ['name'=>'B2_M07-M08','lamp_device_id'=>'d76e0deb88e3f55700ylle'],
            ['name'=>'B2_M08-M09','lamp_device_id'=>'d7534db6363048544ckwwh'],
            ['name'=>'B2_M09-M10','lamp_device_id'=>'d79035ea86849f99bangjl'],
            ['name'=>'B2_M10-M11','lamp_device_id'=>'d7dab3663926381002ymiw'],
            ['name'=>'B2_M12-M13','lamp_device_id'=>'d7259ca05fc0efee40owit'],
            ['name'=>'B2_M13-M14','lamp_device_id'=>'d79cc5cc8c49ee6c5cf9f5'],
            ['name'=>'B2_M15-M16','lamp_device_id'=>'d74806b854953835951dzp'],
            ['name'=>'B2_M16-M17','lamp_device_id'=>'d75c5897393025135e4ira'],
            ['name'=>'B2_M17-M18','lamp_device_id'=>'d72cb526eec48b61457nac'],
            ['name'=>'B2_M18-M19','lamp_device_id'=>'d75938bd63ccb928e2qy98'],
            ['name'=>'B2_M20-N20','lamp_device_id'=>'d7d0344fb4874e4f5ffgyl'], 

            // 16 Lamps
            ['name'=>'B2_N01-N02','lamp_device_id'=>'d7dec2c54596c3833ea8n5'],
            ['name'=>'B2_N02-N03','lamp_device_id'=>'d77bd8a77b52ddab51waaf'],
            ['name'=>'B2_N03-N04','lamp_device_id'=>'d71b8b314665c1bf57jl8b'],
            ['name'=>'B2_N04-N05','lamp_device_id'=>'d730025d7c696017ee91tu'],
            ['name'=>'B2_N05-N06','lamp_device_id'=>'d70479d566f23d8bb1mw3o'],
            ['name'=>'B2_N07-N08','lamp_device_id'=>'d7070195a68a90dbe3ceko'],
            ['name'=>'B2_N08-N09','lamp_device_id'=>'d78d9fa193a4e841e9ghzf'],
            ['name'=>'B2_N09-N10','lamp_device_id'=>'d7cb7e575e2568adf9ic1a'],
            ['name'=>'B2_N10-N11','lamp_device_id'=>'d704f23841d0c70b6451hf'], 
            ['name'=>'B2_N12-N13','lamp_device_id'=>'d7be82833ae9b488553z3c'],
            ['name'=>'B2_N13-N14','lamp_device_id'=>'d7bc515e8aa3bde415t11u'],
            ['name'=>'B2_N14-N15','lamp_device_id'=>'d796c2d95d4d2edff8pyxe'],
            ['name'=>'B2_N15-N16','lamp_device_id'=>'d792b450831c541d96mulr'],
            ['name'=>'B2_N16-N17','lamp_device_id'=>'d7131e0d5c46fcdd12yyme'], 
            ['name'=>'B2_N17-N18','lamp_device_id'=>'d7f9e32a9f79ec520180hl'],
            ['name'=>'B2_N18-N19','lamp_device_id'=>'d7d9fa404e363744a6wlty'],

            // 11 Lamps
            ['name'=>'B2_P00-P01','lamp_device_id'=>'d717b58ebfa312faa9x8un'],
            ['name'=>'B2_P04-P05','lamp_device_id'=>'d7276dda409d19abf7supl'], 
            ['name'=>'B2_P05-P06','lamp_device_id'=>'d7db377b152016792asnl1'],
            ['name'=>'B2_P06-P07','lamp_device_id'=>'d7fd38efc0ee560596pjcw'],
            ['name'=>'B2_P08-P09','lamp_device_id'=>'d77503e20a3f787f15vpyw'],
            ['name'=>'B2_P09-P10','lamp_device_id'=>'d7a7d5413dfa11a139vclx'],
            ['name'=>'B2_P10-P11','lamp_device_id'=>'d7d6febe3b51aa10d54fbg'],
            ['name'=>'B2_P15-P16','lamp_device_id'=>'d7e06832b1ea19e442e6vn'],
            ['name'=>'B2_P16-P17','lamp_device_id'=>'d78797fa956a4dd8381krq'],
            ['name'=>'B2_P17-P18','lamp_device_id'=>'d774b307ac1fc1bae0xaa5'],
            ['name'=>'B2_P18-P19','lamp_device_id'=>'d7b8444266ba909efelvnp'],

            // Reamaing Lamps
            ['name'=>'B1_A11-A12','lamp_device_id'=>'d7c4ecc98df7f75b4aw1ee'],
            ['name'=>'B2_G27-G28','lamp_device_id'=>'d7d311ca643f1bd974jfm0'],
            ['name'=>'B2_F31-F32','lamp_device_id'=>'d71097cdfb2362882bjkaa'],
            ['name'=>'B2_E34-E35','lamp_device_id'=>'d7cfead3ab937dd2f2kezu'],
            ['name'=>'B2_F10-F11','lamp_device_id'=>'d7517b50f15940b780aarh'],
            ['name'=>'B2_H10-H11','lamp_device_id'=>'d706e15412400a9104akim'],
            ['name'=>'B2_G6-G7','lamp_device_id'=>'d7ec43d235643edf58sx4v'],
            ['name'=>'B2_E14-E15','lamp_device_id'=>'d722ec7da111125518jt1i'],
            ['name'=>'B2_G12-G13','lamp_device_id'=>'d7584ca205f413f507njzk'],
            ['name'=>'B2_G14-G15','lamp_device_id'=>'d7d8e9898c1ce30112aikw'],
            ['name'=>'B2_G9-G10','lamp_device_id'=>'d7ed2dd3dac81ee147i7q1'],
            ['name'=>'B2_F9-F10','lamp_device_id'=>'d7c7575e6e11be723bm4hs'],
            ['name'=>'B2_F12-F13','lamp_device_id'=>'d7ad1f22c9d41c3846bnoz'],
            ['name'=>'B2_G10-G11','lamp_device_id'=>'d7362fac181386178fv2gu'],
            ['name'=>'B2_F7-F8','lamp_device_id'=>'d74dbac802ae2157b56v8u'],
            ['name'=>'B2_E11-E12','lamp_device_id'=>'d78a7c545daf645154gzd7'],
            ['name'=>'B2_G8-G9','lamp_device_id'=>'d7a90fb001760b8cb2rgeb'],
            ['name'=>'B2_D11-D12','lamp_device_id'=>'d766be836c181abf4evz6k'],
            ['name'=>'B2_B10-B11','lamp_device_id'=>'d7576f9c03975b54b6m3ds'],
            ['name'=>'B2_H22-H23','lamp_device_id'=>'d77bb7f42ee07bde0ce1kt'],
            ['name'=>'B2_H20-H21','lamp_device_id'=>'d7622b40e1740f75dffhwg'],
            ['name'=>'B2_G20-G21','lamp_device_id'=>'d7498f969f9c397f3a74im'],
            ['name'=>'B2_G21-G22','lamp_device_id'=>'d789d7b93dda97c251gwaw'],
            ['name'=>'B2_L17-L18','lamp_device_id'=>'d7fbfa7da222fd030f7w7h'],
            ['name'=>'B2_E16-E17','lamp_device_id'=>'d79e4bb86988cca5f61cms'],
            ['name'=>'B2_E15-E16','lamp_device_id'=>'d7da67f6d979dfbf61owj8'],
            ['name'=>'B2_E18-E19','lamp_device_id'=>'d7825426e63ff6d1ffkgcs'],
            ['name'=>'B2_H1-H2','lamp_device_id'=>'d79ae0441e7da3b798oijw'],
            ['name'=>'B2_E17-E18','lamp_device_id'=>'d7013c5a2e02a2c497ttxi'],
            ['name'=>'B2_J1-J2','lamp_device_id'=>'d712586a5a5715378ajda9'],
            ['name'=>'B2_E2-E3','lamp_device_id'=>'d7d10c3e3adda09122zvm5'],
            ['name'=>'B2_F2-F3','lamp_device_id'=>'d76a79c4e6a79505fbtmul'],
            ['name'=>'B2_G1-G2','lamp_device_id'=>'d76f69bf996129f6a4pbyr'],
            ['name'=>'B2_H21-H22','lamp_device_id'=>'d73729de00ad44f0d6emfy'],
            ['name'=>'B2_A15-A16','lamp_device_id'=>'d785c621fa1fc6e848shlr'],
            ['name'=>'B2_A11-A12','lamp_device_id'=>'d7b41d8be54d267711a0wa'],
            ['name'=>'B2_A12-A13','lamp_device_id'=>'d7606d35079d6a67736nut'],
            ['name'=>'B2_D17-D18','lamp_device_id'=>'d733b79a6e1b5152ccmpec'],
            ['name'=>'B2_H03-H04','lamp_device_id'=>'d7f03c7a620c1d94a4dlnn'],
            ['name'=>'B2_B08-B09','lamp_device_id'=>'d74d4df80a7ecde72efbiz'],

            ['name'=>'B2_B09-B10','lamp_device_id'=>'d75e86d1f4f54f2fe8mh04'],
            ['name'=>'B2_D06-D07','lamp_device_id'=>'d788b311d82c17fd1eeljh'],

            // A03 and B03 slots
            ['name'=>'B2_A3-B3','lamp_device_id'=>'d75ad179e30fbe65bafpqz'],
            ['name'=>'B2_D01-D02','lamp_device_id'=>'d77efb72443956808e1r0f'],
            // A03 and B03 slots
            ['name'=>'B2_A4-B4','lamp_device_id'=>'d775a5400de213a4a6qcmp'],
            ['name'=>'B2_E4-E5','lamp_device_id'=>'d7d23c4d6327a81c21naha'],
            ['name'=>'B2_C06-CO7','lamp_device_id'=>'d7eb0ca953f30a8877ow8u'],
            ['name'=>'B2_A40-B40','lamp_device_id'=>'d79e039a8519911ec56ioh'],
            ['name'=>'B2_F6-F7','lamp_device_id'=>'d75d2605d184e9b902agxl'],
            ['name'=>'B2_DO7-DO8','lamp_device_id'=>'d729d98a74436251f0k85p'],
            ['name'=>'B2_M14-M15','lamp_device_id'=>'d79bef45a82c050ba28uz8'],
            ['name'=>'B2_L20-M20','lamp_device_id'=>'d7f7e1cd3ac2244e72gmph'],
            ['name'=>'B2_C19-C20','lamp_device_id'=>'d7ccfeda9c69762de7krrw'],
            ['name'=>'B1_C16-C17','lamp_device_id'=>'d787e01fd539cd481fspwu'],
            ['name'=>'B1_C18-C19','lamp_device_id'=>'d78d64daa695f15b60ryi9'],
            
            
            
           
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            

            
            






            
            

        ]);
    }
}