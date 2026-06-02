<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ParkinSlotSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('parking_slots')->insert([

            // A Block
            ['block_id'=>1,'camera_id'=>61,'slot_number'=>'A01-a','parking_location'=>'Basement -1','tuya_lamp_id'=>1],
            ['block_id'=>1,'camera_id'=>61,'slot_number'=>'A01-b','parking_location'=>'Basement -1','tuya_lamp_id'=>1],
            ['block_id'=>1,'camera_id'=>61,'slot_number'=>'A01-c','parking_location'=>'Basement -1','tuya_lamp_id'=>1],

            ['block_id'=>1,'camera_id'=>83,'slot_number'=>'A02-a','parking_location'=>'Basement -1','tuya_lamp_id'=>2],
            ['block_id'=>1,'camera_id'=>83,'slot_number'=>'A02-b','parking_location'=>'Basement -1','tuya_lamp_id'=>2],

            ['block_id'=>1,'camera_id'=>60,'slot_number'=>'A03-a','parking_location'=>'Basement -1','tuya_lamp_id'=>3],
            ['block_id'=>1,'camera_id'=>60,'slot_number'=>'A03-b','parking_location'=>'Basement -1','tuya_lamp_id'=>3],
            ['block_id'=>1,'camera_id'=>60,'slot_number'=>'A03-c','parking_location'=>'Basement -1','tuya_lamp_id'=>3],

            ['block_id'=>1,'camera_id'=>62,'slot_number'=>'A04-a','parking_location'=>'Basement -1','tuya_lamp_id'=>4],
            ['block_id'=>1,'camera_id'=>62,'slot_number'=>'A04-b','parking_location'=>'Basement -1','tuya_lamp_id'=>4],
            ['block_id'=>1,'camera_id'=>62,'slot_number'=>'A04-c','parking_location'=>'Basement -1','tuya_lamp_id'=>4],

            ['block_id'=>1,'camera_id'=>75,'slot_number'=>'A05-a','parking_location'=>'Basement -1','tuya_lamp_id'=>5],
            ['block_id'=>1,'camera_id'=>75,'slot_number'=>'A05-c','parking_location'=>'Basement -1','tuya_lamp_id'=>5],

            ['block_id'=>1,'camera_id'=>66,'slot_number'=>'A06-a-not-slot','parking_location'=>'Basement -1','tuya_lamp_id'=>null],

            ['block_id'=>1,'camera_id'=>78,'slot_number'=>'A07-a','parking_location'=>'Basement -1','tuya_lamp_id'=>7],
            ['block_id'=>1,'camera_id'=>78,'slot_number'=>'A07-b','parking_location'=>'Basement -1','tuya_lamp_id'=>7],

            ['block_id'=>1,'camera_id'=>63,'slot_number'=>'A08-a','parking_location'=>'Basement -1','tuya_lamp_id'=>8],
            ['block_id'=>1,'camera_id'=>63,'slot_number'=>'A08-b','parking_location'=>'Basement -1','tuya_lamp_id'=>8],
            ['block_id'=>1,'camera_id'=>63,'slot_number'=>'A08-c','parking_location'=>'Basement -1','tuya_lamp_id'=>8],


            ['block_id'=>1,'camera_id'=>1,'slot_number'=>'A09-a','parking_location'=>'Basement -1','tuya_lamp_id'=>9],
            ['block_id'=>1,'camera_id'=>1,'slot_number'=>'A09-b','parking_location'=>'Basement -1','tuya_lamp_id'=>9],
            ['block_id'=>1,'camera_id'=>1,'slot_number'=>'A09-c','parking_location'=>'Basement -1','tuya_lamp_id'=>9],

            ['block_id'=>1,'camera_id'=>2,'slot_number'=>'A10-a','parking_location'=>'Basement -1','tuya_lamp_id'=>10],
            ['block_id'=>1,'camera_id'=>2,'slot_number'=>'A10-b','parking_location'=>'Basement -1','tuya_lamp_id'=>10],
            ['block_id'=>1,'camera_id'=>2,'slot_number'=>'A10-c','parking_location'=>'Basement -1','tuya_lamp_id'=>10],

            ['block_id'=>1,'camera_id'=>3,'slot_number'=>'A11-a','parking_location'=>'Basement -1','tuya_lamp_id'=>380],
            ['block_id'=>1,'camera_id'=>3,'slot_number'=>'A11-b','parking_location'=>'Basement -1','tuya_lamp_id'=>380],
            ['block_id'=>1,'camera_id'=>3,'slot_number'=>'A11-c','parking_location'=>'Basement -1','tuya_lamp_id'=>380],

            ['block_id'=>1,'camera_id'=>4,'slot_number'=>'A12-a','parking_location'=>'Basement -1','tuya_lamp_id'=>11],
            ['block_id'=>1,'camera_id'=>4,'slot_number'=>'A12-b','parking_location'=>'Basement -1','tuya_lamp_id'=>11],
            ['block_id'=>1,'camera_id'=>4,'slot_number'=>'A12-c','parking_location'=>'Basement -1','tuya_lamp_id'=>11],

            ['block_id'=>1,'camera_id'=>5,'slot_number'=>'A13-a','parking_location'=>'Basement -1','tuya_lamp_id'=>12],
            ['block_id'=>1,'camera_id'=>5,'slot_number'=>'A13-b','parking_location'=>'Basement -1','tuya_lamp_id'=>12],
            ['block_id'=>1,'camera_id'=>5,'slot_number'=>'A13-c','parking_location'=>'Basement -1','tuya_lamp_id'=>12],

            ['block_id'=>1,'camera_id'=>6,'slot_number'=>'A14-a','parking_location'=>'Basement -1','tuya_lamp_id'=>13],
            ['block_id'=>1,'camera_id'=>6,'slot_number'=>'A14-b','parking_location'=>'Basement -1','tuya_lamp_id'=>13],
            ['block_id'=>1,'camera_id'=>6,'slot_number'=>'A14-c','parking_location'=>'Basement -1','tuya_lamp_id'=>13],

            ['block_id'=>1,'camera_id'=>7,'slot_number'=>'A15-a','parking_location'=>'Basement -1','tuya_lamp_id'=>14],
            ['block_id'=>1,'camera_id'=>7,'slot_number'=>'A15-b','parking_location'=>'Basement -1','tuya_lamp_id'=>14],
            ['block_id'=>1,'camera_id'=>7,'slot_number'=>'A15-c','parking_location'=>'Basement -1','tuya_lamp_id'=>14],

            ['block_id'=>1,'camera_id'=>8,'slot_number'=>'A16-a','parking_location'=>'Basement -1','tuya_lamp_id'=>15],
            ['block_id'=>1,'camera_id'=>8,'slot_number'=>'A16-b','parking_location'=>'Basement -1','tuya_lamp_id'=>15],
            ['block_id'=>1,'camera_id'=>8,'slot_number'=>'A16-c','parking_location'=>'Basement -1','tuya_lamp_id'=>15],

            ['block_id'=>1,'camera_id'=>9,'slot_number'=>'A17-a','parking_location'=>'Basement -1','tuya_lamp_id'=>16],
            ['block_id'=>1,'camera_id'=>9,'slot_number'=>'A17-b','parking_location'=>'Basement -1','tuya_lamp_id'=>16],
            ['block_id'=>1,'camera_id'=>9,'slot_number'=>'A17-c','parking_location'=>'Basement -1','tuya_lamp_id'=>16],

            ['block_id'=>1,'camera_id'=>10,'slot_number'=>'A18-a','parking_location'=>'Basement -1','tuya_lamp_id'=>17],
            ['block_id'=>1,'camera_id'=>10,'slot_number'=>'A18-b','parking_location'=>'Basement -1','tuya_lamp_id'=>17],
            ['block_id'=>1,'camera_id'=>10,'slot_number'=>'A18-c','parking_location'=>'Basement -1','tuya_lamp_id'=>17],

            ['block_id'=>1,'camera_id'=>11,'slot_number'=>'A19-a','parking_location'=>'Basement -1','tuya_lamp_id'=>18],
            ['block_id'=>1,'camera_id'=>11,'slot_number'=>'A19-b','parking_location'=>'Basement -1','tuya_lamp_id'=>18],
            ['block_id'=>1,'camera_id'=>11,'slot_number'=>'A19-c','parking_location'=>'Basement -1','tuya_lamp_id'=>18],

            ['block_id'=>1,'camera_id'=>43,'slot_number'=>'A22-b','parking_location'=>'Basement -1','tuya_lamp_id'=>19],
            ['block_id'=>1,'camera_id'=>43,'slot_number'=>'A22-c','parking_location'=>'Basement -1','tuya_lamp_id'=>19],

            ['block_id'=>1,'camera_id'=>45,'slot_number'=>'A23-a','parking_location'=>'Basement -1','tuya_lamp_id'=>20],
            ['block_id'=>1,'camera_id'=>45,'slot_number'=>'A23-b','parking_location'=>'Basement -1','tuya_lamp_id'=>20],
            ['block_id'=>1,'camera_id'=>45,'slot_number'=>'A23-c','parking_location'=>'Basement -1','tuya_lamp_id'=>20],

            ['block_id'=>1,'camera_id'=>46,'slot_number'=>'A25-a','parking_location'=>'Basement -1','tuya_lamp_id'=>21],

            ['block_id'=>1,'camera_id'=>44,'slot_number'=>'A26-a','parking_location'=>'Basement -1','tuya_lamp_id'=>22],
            ['block_id'=>1,'camera_id'=>44,'slot_number'=>'A26-b','parking_location'=>'Basement -1','tuya_lamp_id'=>22],
            ['block_id'=>1,'camera_id'=>44,'slot_number'=>'A26-c','parking_location'=>'Basement -1','tuya_lamp_id'=>22],

            ['block_id'=>1,'camera_id'=>54,'slot_number'=>'A27-a','parking_location'=>'Basement -1','tuya_lamp_id'=>23],
            ['block_id'=>1,'camera_id'=>54,'slot_number'=>'A27-b','parking_location'=>'Basement -1','tuya_lamp_id'=>23],
            ['block_id'=>1,'camera_id'=>54,'slot_number'=>'A27-c','parking_location'=>'Basement -1','tuya_lamp_id'=>23],

            ['block_id'=>1,'camera_id'=>40,'slot_number'=>'A28-a','parking_location'=>'Basement -1','tuya_lamp_id'=>24],
            ['block_id'=>1,'camera_id'=>40,'slot_number'=>'A28-b','parking_location'=>'Basement -1','tuya_lamp_id'=>24],
            ['block_id'=>1,'camera_id'=>40,'slot_number'=>'A28-c','parking_location'=>'Basement -1','tuya_lamp_id'=>24],

            ['block_id'=>1,'camera_id'=>50,'slot_number'=>'A29-a','parking_location'=>'Basement -1','tuya_lamp_id'=>25],
            ['block_id'=>1,'camera_id'=>50,'slot_number'=>'A29-b','parking_location'=>'Basement -1','tuya_lamp_id'=>25],
            ['block_id'=>1,'camera_id'=>50,'slot_number'=>'A29-c','parking_location'=>'Basement -1','tuya_lamp_id'=>25],

            ['block_id'=>1,'camera_id'=>39,'slot_number'=>'A30-a','parking_location'=>'Basement -1','tuya_lamp_id'=>26],
            ['block_id'=>1,'camera_id'=>39,'slot_number'=>'A30-b','parking_location'=>'Basement -1','tuya_lamp_id'=>26],
            ['block_id'=>1,'camera_id'=>39,'slot_number'=>'A30-c','parking_location'=>'Basement -1','tuya_lamp_id'=>26],

            // B Block'parking_location'=>'Basement -1',
            ['block_id'=>2,'camera_id'=>64,'slot_number'=>'B01-a','parking_location'=>'Basement -1','tuya_lamp_id'=>27],
            ['block_id'=>2,'camera_id'=>64,'slot_number'=>'B01-b','parking_location'=>'Basement -1','tuya_lamp_id'=>27],
            ['block_id'=>2,'camera_id'=>64,'slot_number'=>'B01-c','parking_location'=>'Basement -1','tuya_lamp_id'=>27],

            ['block_id'=>2,'camera_id'=>74,'slot_number'=>'B02-a','parking_location'=>'Basement -1','tuya_lamp_id'=>28],
            ['block_id'=>2,'camera_id'=>74,'slot_number'=>'B02-b','parking_location'=>'Basement -1','tuya_lamp_id'=>28],
            ['block_id'=>2,'camera_id'=>74,'slot_number'=>'B02-c','parking_location'=>'Basement -1','tuya_lamp_id'=>28],

            ['block_id'=>2,'camera_id'=>65,'slot_number'=>'B03-a','parking_location'=>'Basement -1','tuya_lamp_id'=>29],
            ['block_id'=>2,'camera_id'=>65,'slot_number'=>'B03-b','parking_location'=>'Basement -1','tuya_lamp_id'=>29],
            ['block_id'=>2,'camera_id'=>65,'slot_number'=>'B03-c','parking_location'=>'Basement -1','tuya_lamp_id'=>29],

            ['block_id'=>2,'camera_id'=>73,'slot_number'=>'B04-a','parking_location'=>'Basement -1','tuya_lamp_id'=>30],
            ['block_id'=>2,'camera_id'=>73,'slot_number'=>'B04-b','parking_location'=>'Basement -1','tuya_lamp_id'=>30],
            ['block_id'=>2,'camera_id'=>73,'slot_number'=>'B04-c','parking_location'=>'Basement -1','tuya_lamp_id'=>30],

            ['block_id'=>2,'camera_id'=>79,'slot_number'=>'B06-a','parking_location'=>'Basement -1','tuya_lamp_id'=>31],
            ['block_id'=>2,'camera_id'=>79,'slot_number'=>'B06-b','parking_location'=>'Basement -1','tuya_lamp_id'=>31],
            ['block_id'=>2,'camera_id'=>79,'slot_number'=>'B06-c','parking_location'=>'Basement -1','tuya_lamp_id'=>31],

            ['block_id'=>2,'camera_id'=>82,'slot_number'=>'B07-a','parking_location'=>'Basement -1','tuya_lamp_id'=>32],
            ['block_id'=>2,'camera_id'=>82,'slot_number'=>'B07-b','parking_location'=>'Basement -1','tuya_lamp_id'=>32],

            ['block_id'=>2,'camera_id'=>85,'slot_number'=>'B08-a','parking_location'=>'Basement -1','tuya_lamp_id'=>33],
            ['block_id'=>2,'camera_id'=>85,'slot_number'=>'B08-b','parking_location'=>'Basement -1','tuya_lamp_id'=>33],

            ['block_id'=>2,'camera_id'=>19,'slot_number'=>'B09-a','parking_location'=>'Basement -1','tuya_lamp_id'=>34],
            ['block_id'=>2,'camera_id'=>19,'slot_number'=>'B09-b','parking_location'=>'Basement -1','tuya_lamp_id'=>34],

            ['block_id'=>2,'camera_id'=>18,'slot_number'=>'B10-a','parking_location'=>'Basement -1','tuya_lamp_id'=>35],
            ['block_id'=>2,'camera_id'=>18,'slot_number'=>'B10-b','parking_location'=>'Basement -1','tuya_lamp_id'=>35],

            ['block_id'=>2,'camera_id'=>17,'slot_number'=>'B11-a','parking_location'=>'Basement -1','tuya_lamp_id'=>36],
            ['block_id'=>2,'camera_id'=>17,'slot_number'=>'B11-b','parking_location'=>'Basement -1','tuya_lamp_id'=>36],

            ['block_id'=>2,'camera_id'=>16,'slot_number'=>'B12-a','parking_location'=>'Basement -1','tuya_lamp_id'=>37],
            ['block_id'=>2,'camera_id'=>16,'slot_number'=>'B12-b','parking_location'=>'Basement -1','tuya_lamp_id'=>37],

            ['block_id'=>2,'camera_id'=>15,'slot_number'=>'B16-a','parking_location'=>'Basement -1','tuya_lamp_id'=>38],
            ['block_id'=>2,'camera_id'=>15,'slot_number'=>'B16-b','parking_location'=>'Basement -1','tuya_lamp_id'=>38],
            ['block_id'=>2,'camera_id'=>15,'slot_number'=>'B16-c','parking_location'=>'Basement -1','tuya_lamp_id'=>38],

            ['block_id'=>2,'camera_id'=>14,'slot_number'=>'B17-a','parking_location'=>'Basement -1','tuya_lamp_id'=>39],
            ['block_id'=>2,'camera_id'=>14,'slot_number'=>'B17-b','parking_location'=>'Basement -1','tuya_lamp_id'=>39],
            ['block_id'=>2,'camera_id'=>14,'slot_number'=>'B17-c','parking_location'=>'Basement -1','tuya_lamp_id'=>39],

            ['block_id'=>2,'camera_id'=>13,'slot_number'=>'B18-a','parking_location'=>'Basement -1','tuya_lamp_id'=>40],
            ['block_id'=>2,'camera_id'=>13,'slot_number'=>'B18-b','parking_location'=>'Basement -1','tuya_lamp_id'=>40],
            ['block_id'=>2,'camera_id'=>13,'slot_number'=>'B18-c','parking_location'=>'Basement -1','tuya_lamp_id'=>40],

            ['block_id'=>2,'camera_id'=>12,'slot_number'=>'B19-a','parking_location'=>'Basement -1','tuya_lamp_id'=>41],
            ['block_id'=>2,'camera_id'=>12,'slot_number'=>'B19-b','parking_location'=>'Basement -1','tuya_lamp_id'=>41],
            ['block_id'=>2,'camera_id'=>12,'slot_number'=>'B19-c','parking_location'=>'Basement -1','tuya_lamp_id'=>41],

            ['block_id'=>2,'camera_id'=>48,'slot_number'=>'B20-a','parking_location'=>'Basement -1','tuya_lamp_id'=>42],
            ['block_id'=>2,'camera_id'=>48,'slot_number'=>'B20-b','parking_location'=>'Basement -1','tuya_lamp_id'=>42],
            ['block_id'=>2,'camera_id'=>48,'slot_number'=>'B20-c','parking_location'=>'Basement -1','tuya_lamp_id'=>42],

            ['block_id'=>2,'camera_id'=>47,'slot_number'=>'B21-a','parking_location'=>'Basement -1','tuya_lamp_id'=>43],
            ['block_id'=>2,'camera_id'=>47,'slot_number'=>'B21-b','parking_location'=>'Basement -1','tuya_lamp_id'=>43],
            ['block_id'=>2,'camera_id'=>47,'slot_number'=>'B21-c','parking_location'=>'Basement -1','tuya_lamp_id'=>43],

            ['block_id'=>2,'camera_id'=>38,'slot_number'=>'B22-a','parking_location'=>'Basement -1','tuya_lamp_id'=>44],
            ['block_id'=>2,'camera_id'=>38,'slot_number'=>'B22-b','parking_location'=>'Basement -1','tuya_lamp_id'=>44],
            ['block_id'=>2,'camera_id'=>38,'slot_number'=>'B22-c','parking_location'=>'Basement -1','tuya_lamp_id'=>44],

            ['block_id'=>2,'camera_id'=>49,'slot_number'=>'B23-a','parking_location'=>'Basement -1','tuya_lamp_id'=>45],
            ['block_id'=>2,'camera_id'=>49,'slot_number'=>'B23-b','parking_location'=>'Basement -1','tuya_lamp_id'=>45],
            ['block_id'=>2,'camera_id'=>49,'slot_number'=>'B23-c','parking_location'=>'Basement -1','tuya_lamp_id'=>45],

            ['block_id'=>2,'camera_id'=>53,'slot_number'=>'B24-a','parking_location'=>'Basement -1','tuya_lamp_id'=>46],
            ['block_id'=>2,'camera_id'=>53,'slot_number'=>'B24-b','parking_location'=>'Basement -1','tuya_lamp_id'=>46],
            ['block_id'=>2,'camera_id'=>53,'slot_number'=>'B24-c','parking_location'=>'Basement -1','tuya_lamp_id'=>46],

            ['block_id'=>2,'camera_id'=>41,'slot_number'=>'B25-a','parking_location'=>'Basement -1','tuya_lamp_id'=>47],
            ['block_id'=>2,'camera_id'=>41,'slot_number'=>'B25-b','parking_location'=>'Basement -1','tuya_lamp_id'=>47],
            ['block_id'=>2,'camera_id'=>41,'slot_number'=>'B25-c','parking_location'=>'Basement -1','tuya_lamp_id'=>47],

            ['block_id'=>2,'camera_id'=>null,'slot_number'=>'not-slot','parking_location'=>'Basement -1','tuya_lamp_id'=>null],
            ['block_id'=>2,'camera_id'=>null,'slot_number'=>'not-slot','parking_location'=>'Basement -1','tuya_lamp_id'=>null],
            ['block_id'=>2,'camera_id'=>null,'slot_number'=>'not-slot','parking_location'=>'Basement -1','tuya_lamp_id'=>null],

            ['block_id'=>2,'camera_id'=>125,'slot_number'=>'B27-a','parking_location'=>'Basement -1','tuya_lamp_id'=>48],
            ['block_id'=>2,'camera_id'=>125,'slot_number'=>'B27-b','parking_location'=>'Basement -1','tuya_lamp_id'=>48],
            ['block_id'=>2,'camera_id'=>125,'slot_number'=>'B27-c','parking_location'=>'Basement -1','tuya_lamp_id'=>48],

            ['block_id'=>2,'camera_id'=>42,'slot_number'=>'B28-a','parking_location'=>'Basement -1','tuya_lamp_id'=>49],
            ['block_id'=>2,'camera_id'=>42,'slot_number'=>'B28-b','parking_location'=>'Basement -1','tuya_lamp_id'=>49],
            ['block_id'=>2,'camera_id'=>42,'slot_number'=>'B28-c','parking_location'=>'Basement -1','tuya_lamp_id'=>49],

            ['block_id'=>2,'camera_id'=>51,'slot_number'=>'B29-a','parking_location'=>'Basement -1','tuya_lamp_id'=>50],
            ['block_id'=>2,'camera_id'=>51,'slot_number'=>'B29-b','parking_location'=>'Basement -1','tuya_lamp_id'=>50],
            ['block_id'=>2,'camera_id'=>51,'slot_number'=>'B29-c','parking_location'=>'Basement -1','tuya_lamp_id'=>50],

            // C Block'parking_location'=>'Basement -1', 

            ['block_id'=>3,'camera_id'=>86,'slot_number'=>'C01-a','parking_location'=>'Basement -1','tuya_lamp_id'=>52],
            ['block_id'=>3,'camera_id'=>86,'slot_number'=>'C01-b','parking_location'=>'Basement -1','tuya_lamp_id'=>52],
            ['block_id'=>3,'camera_id'=>86,'slot_number'=>'C01-c','parking_location'=>'Basement -1','tuya_lamp_id'=>52],

            ['block_id'=>3,'camera_id'=>81,'slot_number'=>'C02-a','parking_location'=>'Basement -1','tuya_lamp_id'=>53],
            ['block_id'=>3,'camera_id'=>81,'slot_number'=>'C02-b','parking_location'=>'Basement -1','tuya_lamp_id'=>53],
            ['block_id'=>3,'camera_id'=>81,'slot_number'=>'C02-c','parking_location'=>'Basement -1','tuya_lamp_id'=>53],

            ['block_id'=>3,'camera_id'=>84,'slot_number'=>'C03-a','parking_location'=>'Basement -1','tuya_lamp_id'=>54],
            ['block_id'=>3,'camera_id'=>84,'slot_number'=>'C03-b','parking_location'=>'Basement -1','tuya_lamp_id'=>54],
            ['block_id'=>3,'camera_id'=>84,'slot_number'=>'C03-c','parking_location'=>'Basement -1','tuya_lamp_id'=>54],

            ['block_id'=>3,'camera_id'=>442,'slot_number'=>'C04-a','parking_location'=>'Basement -1','tuya_lamp_id'=>55],
            ['block_id'=>3,'camera_id'=>442,'slot_number'=>'C04-b','parking_location'=>'Basement -1','tuya_lamp_id'=>55],
            ['block_id'=>3,'camera_id'=>442,'slot_number'=>'C04-c','parking_location'=>'Basement -1','tuya_lamp_id'=>55],

            ['block_id'=>3,'camera_id'=>26,'slot_number'=>'C16-a','parking_location'=>'Basement -1','tuya_lamp_id'=>433],
            ['block_id'=>3,'camera_id'=>26,'slot_number'=>'C16-b','parking_location'=>'Basement -1','tuya_lamp_id'=>433],
            ['block_id'=>3,'camera_id'=>26,'slot_number'=>'C16-c','parking_location'=>'Basement -1','tuya_lamp_id'=>433],

            ['block_id'=>3,'camera_id'=>27,'slot_number'=>'C17-a','parking_location'=>'Basement -1','tuya_lamp_id'=>58],
            ['block_id'=>3,'camera_id'=>27,'slot_number'=>'C17-b','parking_location'=>'Basement -1','tuya_lamp_id'=>58],
            ['block_id'=>3,'camera_id'=>27,'slot_number'=>'C17-c','parking_location'=>'Basement -1','tuya_lamp_id'=>58],

            ['block_id'=>3,'camera_id'=>28,'slot_number'=>'C18-a','parking_location'=>'Basement -1','tuya_lamp_id'=>434],
            ['block_id'=>3,'camera_id'=>28,'slot_number'=>'C18-b','parking_location'=>'Basement -1','tuya_lamp_id'=>434],
            ['block_id'=>3,'camera_id'=>28,'slot_number'=>'C18-c','parking_location'=>'Basement -1','tuya_lamp_id'=>434],

            ['block_id'=>3,'camera_id'=>29,'slot_number'=>'C19-a','parking_location'=>'Basement -1','tuya_lamp_id'=>127],
            ['block_id'=>3,'camera_id'=>29,'slot_number'=>'C19-b','parking_location'=>'Basement -1','tuya_lamp_id'=>127],
            ['block_id'=>3,'camera_id'=>29,'slot_number'=>'C19-c','parking_location'=>'Basement -1','tuya_lamp_id'=>127],

            ['block_id'=>3,'camera_id'=>30,'slot_number'=>'C20-a','parking_location'=>'Basement -1','tuya_lamp_id'=>60],
            ['block_id'=>3,'camera_id'=>30,'slot_number'=>'C20-b','parking_location'=>'Basement -1','tuya_lamp_id'=>60],
            ['block_id'=>3,'camera_id'=>30,'slot_number'=>'C20-c','parking_location'=>'Basement -1','tuya_lamp_id'=>60],

            ['block_id'=>3,'camera_id'=>31,'slot_number'=>'C21-a','parking_location'=>'Basement -1','tuya_lamp_id'=>59],
            ['block_id'=>3,'camera_id'=>31,'slot_number'=>'C21-b','parking_location'=>'Basement -1','tuya_lamp_id'=>59],
            ['block_id'=>3,'camera_id'=>31,'slot_number'=>'C21-c','parking_location'=>'Basement -1','tuya_lamp_id'=>59],

            ['block_id'=>3,'camera_id'=>32,'slot_number'=>'C22-a','parking_location'=>'Basement -1','tuya_lamp_id'=>61],
            ['block_id'=>3,'camera_id'=>32,'slot_number'=>'C22-b','parking_location'=>'Basement -1','tuya_lamp_id'=>61],
            ['block_id'=>3,'camera_id'=>32,'slot_number'=>'C22-c','parking_location'=>'Basement -1','tuya_lamp_id'=>61],

            ['block_id'=>3,'camera_id'=>33,'slot_number'=>'C23-a','parking_location'=>'Basement -1','tuya_lamp_id'=>62],
            ['block_id'=>3,'camera_id'=>33,'slot_number'=>'C23-b','parking_location'=>'Basement -1','tuya_lamp_id'=>62],
            ['block_id'=>3,'camera_id'=>33,'slot_number'=>'C23-c','parking_location'=>'Basement -1','tuya_lamp_id'=>62],

            ['block_id'=>3,'camera_id'=>34,'slot_number'=>'C24-a','parking_location'=>'Basement -1','tuya_lamp_id'=>63],
            ['block_id'=>3,'camera_id'=>34,'slot_number'=>'C24-b','parking_location'=>'Basement -1','tuya_lamp_id'=>63],
            ['block_id'=>3,'camera_id'=>34,'slot_number'=>'C24-c','parking_location'=>'Basement -1','tuya_lamp_id'=>63],

            ['block_id'=>3,'camera_id'=>35,'slot_number'=>'C25-a','parking_location'=>'Basement -1','tuya_lamp_id'=>64],
            ['block_id'=>3,'camera_id'=>35,'slot_number'=>'C25-b','parking_location'=>'Basement -1','tuya_lamp_id'=>64],
            ['block_id'=>3,'camera_id'=>35,'slot_number'=>'C25-c','parking_location'=>'Basement -1','tuya_lamp_id'=>64],

            ['block_id'=>3,'camera_id'=>57,'slot_number'=>'C27-a','parking_location'=>'Basement -1','tuya_lamp_id'=>65],
            ['block_id'=>3,'camera_id'=>57,'slot_number'=>'C27-b','parking_location'=>'Basement -1','tuya_lamp_id'=>65],
            ['block_id'=>3,'camera_id'=>57,'slot_number'=>'C27-c','parking_location'=>'Basement -1','tuya_lamp_id'=>65],

            ['block_id'=>3,'camera_id'=>52,'slot_number'=>'C28-a','parking_location'=>'Basement -1','tuya_lamp_id'=>66],
            ['block_id'=>3,'camera_id'=>52,'slot_number'=>'C28-b','parking_location'=>'Basement -1','tuya_lamp_id'=>66],
            ['block_id'=>3,'camera_id'=>52,'slot_number'=>'C28-c','parking_location'=>'Basement -1','tuya_lamp_id'=>66],

            ['block_id'=>3,'camera_id'=>58,'slot_number'=>'C29-a','parking_location'=>'Basement -1','tuya_lamp_id'=>67],
            ['block_id'=>3,'camera_id'=>58,'slot_number'=>'C29-b','parking_location'=>'Basement -1','tuya_lamp_id'=>67],
            ['block_id'=>3,'camera_id'=>58,'slot_number'=>'C29-c','parking_location'=>'Basement -1','tuya_lamp_id'=>67],

            // D Block'parking_location'=>'Basement -1', 

            ['block_id'=>4,'camera_id'=>76,'slot_number'=>'D04-a','parking_location'=>'Basement -1','tuya_lamp_id'=>68],
            ['block_id'=>4,'camera_id'=>76,'slot_number'=>'D04-b','parking_location'=>'Basement -1','tuya_lamp_id'=>68],
            ['block_id'=>4,'camera_id'=>76,'slot_number'=>'D04-c','parking_location'=>'Basement -1','tuya_lamp_id'=>68],

            ['block_id'=>4,'camera_id'=>37,'slot_number'=>'D16-a','parking_location'=>'Basement -1','tuya_lamp_id'=>69],
            ['block_id'=>4,'camera_id'=>37,'slot_number'=>'D16-b','parking_location'=>'Basement -1','tuya_lamp_id'=>69],

            ['block_id'=>4,'camera_id'=>36,'slot_number'=>'D24-b','parking_location'=>'Basement -1','tuya_lamp_id'=>70],
            ['block_id'=>4,'camera_id'=>36,'slot_number'=>'D24-c','parking_location'=>'Basement -1','tuya_lamp_id'=>70],

            ['block_id'=>4,'camera_id'=>55,'slot_number'=>'D26-b','parking_location'=>'Basement -1','tuya_lamp_id'=>71],
            ['block_id'=>4,'camera_id'=>55,'slot_number'=>'D26-c','parking_location'=>'Basement -1','tuya_lamp_id'=>71],

            ['block_id'=>4,'camera_id'=>56,'slot_number'=>'D27-b','parking_location'=>'Basement -1','tuya_lamp_id'=>72],
            ['block_id'=>4,'camera_id'=>56,'slot_number'=>'D27-c','parking_location'=>'Basement -1','tuya_lamp_id'=>72],

            ['block_id'=>4,'camera_id'=>59,'slot_number'=>'D29-b','parking_location'=>'Basement -1','tuya_lamp_id'=>null],
            ['block_id'=>4,'camera_id'=>59,'slot_number'=>'D29-c','parking_location'=>'Basement -1','tuya_lamp_id'=>null],

            ['block_id'=>4,'camera_id'=>126,'slot_number'=>'D30-a','parking_location'=>'Basement -1','tuya_lamp_id'=>73],
            ['block_id'=>4,'camera_id'=>126,'slot_number'=>'D30-b','parking_location'=>'Basement -1','tuya_lamp_id'=>73],

            // E Block'parking_location'=>'Basement -1',

            ['block_id'=>5,'camera_id'=>68,'slot_number'=>'E04-a','parking_location'=>'Basement -1','tuya_lamp_id'=>75],
            ['block_id'=>5,'camera_id'=>68,'slot_number'=>'E04-b','parking_location'=>'Basement -1','tuya_lamp_id'=>75],
            ['block_id'=>5,'camera_id'=>68,'slot_number'=>'E04-c','parking_location'=>'Basement -1','tuya_lamp_id'=>75],

            // F Block'parking_location'=>'Basement -1',

            ['block_id'=>6,'camera_id'=>80,'slot_number'=>'F01-a','parking_location'=>'Basement -1','tuya_lamp_id'=>77],
            ['block_id'=>6,'camera_id'=>80,'slot_number'=>'F01-b','parking_location'=>'Basement -1','tuya_lamp_id'=>77],
            ['block_id'=>6,'camera_id'=>80,'slot_number'=>'F01-c','parking_location'=>'Basement -1','tuya_lamp_id'=>77],

            ['block_id'=>6,'camera_id'=>70,'slot_number'=>'F02-a','parking_location'=>'Basement -1','tuya_lamp_id'=>78],
            ['block_id'=>6,'camera_id'=>70,'slot_number'=>'F02-b','parking_location'=>'Basement -1','tuya_lamp_id'=>78],
            ['block_id'=>6,'camera_id'=>70,'slot_number'=>'F02-c','parking_location'=>'Basement -1','tuya_lamp_id'=>78],

            ['block_id'=>6,'camera_id'=>77,'slot_number'=>'F03-a','parking_location'=>'Basement -1','tuya_lamp_id'=>79],
            ['block_id'=>6,'camera_id'=>77,'slot_number'=>'F03-b','parking_location'=>'Basement -1','tuya_lamp_id'=>79],
            ['block_id'=>6,'camera_id'=>77,'slot_number'=>'F03-c','parking_location'=>'Basement -1','tuya_lamp_id'=>79],

            ['block_id'=>6,'camera_id'=>67,'slot_number'=>'F04-a','parking_location'=>'Basement -1','tuya_lamp_id'=>80],
            ['block_id'=>6,'camera_id'=>67,'slot_number'=>'F04-b','parking_location'=>'Basement -1','tuya_lamp_id'=>80],
            ['block_id'=>6,'camera_id'=>67,'slot_number'=>'F04-c','parking_location'=>'Basement -1','tuya_lamp_id'=>80],

            // Now F6 and F7 pickup point'parking_location'=>'Basement -1',
            ['block_id'=>6,'camera_id'=>71,'slot_number'=>'F06-a','parking_location'=>'Basement -1','tuya_lamp_id'=>81],
            ['block_id'=>6,'camera_id'=>71,'slot_number'=>'F06-b','parking_location'=>'Basement -1','tuya_lamp_id'=>81],
            ['block_id'=>6,'camera_id'=>71,'slot_number'=>'F06-c','parking_location'=>'Basement -1','tuya_lamp_id'=>81],

            ['block_id'=>6,'camera_id'=>72,'slot_number'=>'F07-a','parking_location'=>'Basement -1','tuya_lamp_id'=>82],
            ['block_id'=>6,'camera_id'=>72,'slot_number'=>'F07-b','parking_location'=>'Basement -1','tuya_lamp_id'=>82],
    
            // G Block'parking_location'=>'Basement -1',

            ['block_id'=>7,'camera_id'=>104,'slot_number'=>'G01-a','parking_location'=>'Basement -1','tuya_lamp_id'=>84],
            ['block_id'=>7,'camera_id'=>104,'slot_number'=>'G01-b','parking_location'=>'Basement -1','tuya_lamp_id'=>84],
            ['block_id'=>7,'camera_id'=>104,'slot_number'=>'G01-c','parking_location'=>'Basement -1','tuya_lamp_id'=>84],

            ['block_id'=>7,'camera_id'=>111,'slot_number'=>'G02-a','parking_location'=>'Basement -1','tuya_lamp_id'=>85],
            ['block_id'=>7,'camera_id'=>111,'slot_number'=>'G02-b','parking_location'=>'Basement -1','tuya_lamp_id'=>85],
            ['block_id'=>7,'camera_id'=>111,'slot_number'=>'G02-c','parking_location'=>'Basement -1','tuya_lamp_id'=>85],

            ['block_id'=>7,'camera_id'=>124,'slot_number'=>'G03-a','parking_location'=>'Basement -1','tuya_lamp_id'=>86],
            ['block_id'=>7,'camera_id'=>124,'slot_number'=>'G03-b','parking_location'=>'Basement -1','tuya_lamp_id'=>86],
            ['block_id'=>7,'camera_id'=>124,'slot_number'=>'G03-c','parking_location'=>'Basement -1','tuya_lamp_id'=>86],

            ['block_id'=>7,'camera_id'=>120,'slot_number'=>'G04-a','parking_location'=>'Basement -1','tuya_lamp_id'=>87],
            ['block_id'=>7,'camera_id'=>120,'slot_number'=>'G04-b','parking_location'=>'Basement -1','tuya_lamp_id'=>87],
            ['block_id'=>7,'camera_id'=>120,'slot_number'=>'G04-c','parking_location'=>'Basement -1','tuya_lamp_id'=>87],

            ['block_id'=>7,'camera_id'=>112,'slot_number'=>'G06-a','parking_location'=>'Basement -1','tuya_lamp_id'=>88],
            ['block_id'=>7,'camera_id'=>112,'slot_number'=>'G06-b','parking_location'=>'Basement -1','tuya_lamp_id'=>88],
            ['block_id'=>7,'camera_id'=>112,'slot_number'=>'G06-c','parking_location'=>'Basement -1','tuya_lamp_id'=>88],

            ['block_id'=>7,'camera_id'=>93,'slot_number'=>'G07-a','parking_location'=>'Basement -1','tuya_lamp_id'=>89],
            ['block_id'=>7,'camera_id'=>93,'slot_number'=>'G07-b','parking_location'=>'Basement -1','tuya_lamp_id'=>89],
            ['block_id'=>7,'camera_id'=>93,'slot_number'=>'G07-c','parking_location'=>'Basement -1','tuya_lamp_id'=>89],

            ['block_id'=>7,'camera_id'=>110,'slot_number'=>'G08-a','parking_location'=>'Basement -1','tuya_lamp_id'=>90],
            ['block_id'=>7,'camera_id'=>110,'slot_number'=>'G08-b','parking_location'=>'Basement -1','tuya_lamp_id'=>90],

            ['block_id'=>7,'camera_id'=>91,'slot_number'=>'G09-a','parking_location'=>'Basement -1','tuya_lamp_id'=>91],
            ['block_id'=>7,'camera_id'=>91,'slot_number'=>'G09-b','parking_location'=>'Basement -1','tuya_lamp_id'=>91],

            ['block_id'=>7,'camera_id'=>89,'slot_number'=>'G10-a','parking_location'=>'Basement -1','tuya_lamp_id'=>92],
            ['block_id'=>7,'camera_id'=>89,'slot_number'=>'G10-b','parking_location'=>'Basement -1','tuya_lamp_id'=>92],

            ['block_id'=>7,'camera_id'=>99,'slot_number'=>'G11-a','parking_location'=>'Basement -1','tuya_lamp_id'=>93],
            ['block_id'=>7,'camera_id'=>99,'slot_number'=>'G11-b','parking_location'=>'Basement -1','tuya_lamp_id'=>93],

            ['block_id'=>7,'camera_id'=>null,'slot_number'=>'G14-a-not slot','parking_location'=>'Basement -1','tuya_lamp_id'=>null],
            ['block_id'=>7,'camera_id'=>null,'slot_number'=>'G14-b-not slot','parking_location'=>'Basement -1','tuya_lamp_id'=>null],
            ['block_id'=>7,'camera_id'=>null,'slot_number'=>'G14-c-not slot','parking_location'=>'Basement -1','tuya_lamp_id'=>null],

            // H Block'parking_location'=>'Basement -1',

            ['block_id'=>8,'camera_id'=>107,'slot_number'=>'H01-a','parking_location'=>'Basement -1','tuya_lamp_id'=>96],
            ['block_id'=>8,'camera_id'=>107,'slot_number'=>'H01-b','parking_location'=>'Basement -1','tuya_lamp_id'=>96],
            ['block_id'=>8,'camera_id'=>107,'slot_number'=>'H01-c','parking_location'=>'Basement -1','tuya_lamp_id'=>96],

            ['block_id'=>8,'camera_id'=>100,'slot_number'=>'H02-a','parking_location'=>'Basement -1','tuya_lamp_id'=>97],
            ['block_id'=>8,'camera_id'=>100,'slot_number'=>'H02-b','parking_location'=>'Basement -1','tuya_lamp_id'=>97],
            ['block_id'=>8,'camera_id'=>100,'slot_number'=>'H02-c','parking_location'=>'Basement -1','tuya_lamp_id'=>97],

            ['block_id'=>8,'camera_id'=>121,'slot_number'=>'H03-a','parking_location'=>'Basement -1','tuya_lamp_id'=>98],
            ['block_id'=>8,'camera_id'=>121,'slot_number'=>'H03-b','parking_location'=>'Basement -1','tuya_lamp_id'=>98],
            ['block_id'=>8,'camera_id'=>121,'slot_number'=>'H03-c-not-slot','parking_location'=>'Basement -1','tuya_lamp_id'=>null],

            ['block_id'=>8,'camera_id'=>103,'slot_number'=>'H04-a','parking_location'=>'Basement -1','tuya_lamp_id'=>99],
            ['block_id'=>8,'camera_id'=>103,'slot_number'=>'H04-b','parking_location'=>'Basement -1','tuya_lamp_id'=>99],
            ['block_id'=>8,'camera_id'=>103,'slot_number'=>'H04-c','parking_location'=>'Basement -1','tuya_lamp_id'=>99],

            // H11, H9, H10, H6 , H12 is pickup point'parking_location'=>'Basement -1',

            ['block_id'=>8,'camera_id'=>113,'slot_number'=>'H06-a','parking_location'=>'Basement -1','tuya_lamp_id'=>100],
            ['block_id'=>8,'camera_id'=>113,'slot_number'=>'H06-b','parking_location'=>'Basement -1','tuya_lamp_id'=>100],
            ['block_id'=>8,'camera_id'=>113,'slot_number'=>'H06-c','parking_location'=>'Basement -1','tuya_lamp_id'=>100],

            ['block_id'=>8,'camera_id'=>114,'slot_number'=>'H07-a','parking_location'=>'Basement -1','tuya_lamp_id'=>101],
            ['block_id'=>8,'camera_id'=>114,'slot_number'=>'H07-b','parking_location'=>'Basement -1','tuya_lamp_id'=>101],
            ['block_id'=>8,'camera_id'=>114,'slot_number'=>'H07-c','parking_location'=>'Basement -1','tuya_lamp_id'=>101],

            ['block_id'=>8,'camera_id'=>108,'slot_number'=>'H09-a','parking_location'=>'Basement -1','tuya_lamp_id'=>103],
            ['block_id'=>8,'camera_id'=>108,'slot_number'=>'H09-b','parking_location'=>'Basement -1','tuya_lamp_id'=>103],
            ['block_id'=>8,'camera_id'=>108,'slot_number'=>'H09-c','parking_location'=>'Basement -1','tuya_lamp_id'=>103],

            ['block_id'=>8,'camera_id'=>123,'slot_number'=>'H10-a','parking_location'=>'Basement -1','tuya_lamp_id'=>104],
            ['block_id'=>8,'camera_id'=>123,'slot_number'=>'H10-c','parking_location'=>'Basement -1','tuya_lamp_id'=>104],

            ['block_id'=>8,'camera_id'=>25,'slot_number'=>'H11-a','parking_location'=>'Basement -1','tuya_lamp_id'=>105],
            ['block_id'=>8,'camera_id'=>25,'slot_number'=>'H11-b','parking_location'=>'Basement -1','tuya_lamp_id'=>105],
            ['block_id'=>8,'camera_id'=>25,'slot_number'=>'H11-c','parking_location'=>'Basement -1','tuya_lamp_id'=>105],

            ['block_id'=>8,'camera_id'=>24,'slot_number'=>'H12-a','parking_location'=>'Basement -1','tuya_lamp_id'=>106],
            ['block_id'=>8,'camera_id'=>24,'slot_number'=>'H12-b','parking_location'=>'Basement -1','tuya_lamp_id'=>106],
            ['block_id'=>8,'camera_id'=>24,'slot_number'=>'H12-c','parking_location'=>'Basement -1','tuya_lamp_id'=>106],

            // J Block'parking_location'=>'Basement -1',

            ['block_id'=>9,'camera_id'=>98,'slot_number'=>'J01-a','parking_location'=>'Basement -1','tuya_lamp_id'=>108],
            ['block_id'=>9,'camera_id'=>98,'slot_number'=>'J01-b','parking_location'=>'Basement -1','tuya_lamp_id'=>108],
            ['block_id'=>9,'camera_id'=>98,'slot_number'=>'J01-c','parking_location'=>'Basement -1','tuya_lamp_id'=>108],

            ['block_id'=>9,'camera_id'=>119,'slot_number'=>'J02-a','parking_location'=>'Basement -1','tuya_lamp_id'=>109],
            ['block_id'=>9,'camera_id'=>119,'slot_number'=>'J02-b','parking_location'=>'Basement -1','tuya_lamp_id'=>109],
            ['block_id'=>9,'camera_id'=>119,'slot_number'=>'J02-c','parking_location'=>'Basement -1','tuya_lamp_id'=>109],

            ['block_id'=>9,'camera_id'=>105,'slot_number'=>'J03-a','parking_location'=>'Basement -1','tuya_lamp_id'=>110],
            ['block_id'=>9,'camera_id'=>105,'slot_number'=>'J03-b','parking_location'=>'Basement -1','tuya_lamp_id'=>110],
            ['block_id'=>9,'camera_id'=>105,'slot_number'=>'J03-c','parking_location'=>'Basement -1','tuya_lamp_id'=>110],

            ['block_id'=>9,'camera_id'=>109,'slot_number'=>'J04-a','parking_location'=>'Basement -1','tuya_lamp_id'=>111],
            ['block_id'=>9,'camera_id'=>109,'slot_number'=>'J04-b','parking_location'=>'Basement -1','tuya_lamp_id'=>111],
            ['block_id'=>9,'camera_id'=>109,'slot_number'=>'J04-c','parking_location'=>'Basement -1','tuya_lamp_id'=>111],

            ['block_id'=>9,'camera_id'=>null,'slot_number'=>'J05-not-slot','parking_location'=>'Basement -1','tuya_lamp_id'=>null],
            ['block_id'=>9,'camera_id'=>null,'slot_number'=>'J05-not-slot','parking_location'=>'Basement -1','tuya_lamp_id'=>null],
            ['block_id'=>9,'camera_id'=>null,'slot_number'=>'J05-not-slot','parking_location'=>'Basement -1','tuya_lamp_id'=>null],

            ['block_id'=>9,'camera_id'=>106,'slot_number'=>'J06-a','parking_location'=>'Basement -1','tuya_lamp_id'=>112],
            ['block_id'=>9,'camera_id'=>106,'slot_number'=>'J06-b','parking_location'=>'Basement -1','tuya_lamp_id'=>112],
            ['block_id'=>9,'camera_id'=>106,'slot_number'=>'J06-c','parking_location'=>'Basement -1','tuya_lamp_id'=>112],

            ['block_id'=>9,'camera_id'=>95,'slot_number'=>'J07-a','parking_location'=>'Basement -1','tuya_lamp_id'=>113],
            ['block_id'=>9,'camera_id'=>95,'slot_number'=>'J07-b','parking_location'=>'Basement -1','tuya_lamp_id'=>113],
            ['block_id'=>9,'camera_id'=>95,'slot_number'=>'J07-c','parking_location'=>'Basement -1','tuya_lamp_id'=>113],

            ['block_id'=>9,'camera_id'=>96,'slot_number'=>'J08-a','parking_location'=>'Basement -1','tuya_lamp_id'=>114],
            ['block_id'=>9,'camera_id'=>96,'slot_number'=>'J08-b','parking_location'=>'Basement -1','tuya_lamp_id'=>114],
            ['block_id'=>9,'camera_id'=>96,'slot_number'=>'J08-c','parking_location'=>'Basement -1','tuya_lamp_id'=>114],

            ['block_id'=>9,'camera_id'=>97,'slot_number'=>'J09-a','parking_location'=>'Basement -1','tuya_lamp_id'=>115],
            ['block_id'=>9,'camera_id'=>97,'slot_number'=>'J09-b','parking_location'=>'Basement -1','tuya_lamp_id'=>115],
            ['block_id'=>9,'camera_id'=>97,'slot_number'=>'J09-c','parking_location'=>'Basement -1','tuya_lamp_id'=>115],

            ['block_id'=>9,'camera_id'=>116,'slot_number'=>'J10-a','parking_location'=>'Basement -1','tuya_lamp_id'=>116],
            ['block_id'=>9,'camera_id'=>116,'slot_number'=>'J10-b','parking_location'=>'Basement -1','tuya_lamp_id'=>116],

            ['block_id'=>9,'camera_id'=>118,'slot_number'=>'J11-a','parking_location'=>'Basement -1','tuya_lamp_id'=>117],
            ['block_id'=>9,'camera_id'=>118,'slot_number'=>'J11-b','parking_location'=>'Basement -1','tuya_lamp_id'=>117],
            ['block_id'=>9,'camera_id'=>118,'slot_number'=>'J11-c','parking_location'=>'Basement -1','tuya_lamp_id'=>117],

            ['block_id'=>9,'camera_id'=>94,'slot_number'=>'J12-a','parking_location'=>'Basement -1','tuya_lamp_id'=>118],
            ['block_id'=>9,'camera_id'=>94,'slot_number'=>'J12-b','parking_location'=>'Basement -1','tuya_lamp_id'=>118],
            ['block_id'=>9,'camera_id'=>94,'slot_number'=>'J12-c','parking_location'=>'Basement -1','tuya_lamp_id'=>118],

            // K Block'parking_location'=>'Basement -1',

            ['block_id'=>10,'camera_id'=>122,'slot_number'=>'K01-a','parking_location'=>'Basement -1','tuya_lamp_id'=>120],
            ['block_id'=>10,'camera_id'=>122,'slot_number'=>'K01-b','parking_location'=>'Basement -1','tuya_lamp_id'=>120],
            ['block_id'=>10,'camera_id'=>122,'slot_number'=>'K01-c','parking_location'=>'Basement -1','tuya_lamp_id'=>120],

            ['block_id'=>10,'camera_id'=>115,'slot_number'=>'K02-a','parking_location'=>'Basement -1','tuya_lamp_id'=>121],
            ['block_id'=>10,'camera_id'=>115,'slot_number'=>'K02-b','parking_location'=>'Basement -1','tuya_lamp_id'=>121],

            ['block_id'=>10,'camera_id'=>88,'slot_number'=>'K03-a','parking_location'=>'Basement -1','tuya_lamp_id'=>122],
            ['block_id'=>10,'camera_id'=>88,'slot_number'=>'K03-b','parking_location'=>'Basement -1','tuya_lamp_id'=>122],
            ['block_id'=>10,'camera_id'=>88,'slot_number'=>'K03-c','parking_location'=>'Basement -1','tuya_lamp_id'=>122],

            ['block_id'=>10,'camera_id'=>90,'slot_number'=>'K04-a','parking_location'=>'Basement -1','tuya_lamp_id'=>123],
            ['block_id'=>10,'camera_id'=>90,'slot_number'=>'K04-b','parking_location'=>'Basement -1','tuya_lamp_id'=>123],
            ['block_id'=>10,'camera_id'=>90,'slot_number'=>'K04-c','parking_location'=>'Basement -1','tuya_lamp_id'=>123],

            ['block_id'=>10,'camera_id'=>443,'slot_number'=>'K05-a','parking_location'=>'Basement -1','tuya_lamp_id'=>124],
            ['block_id'=>10,'camera_id'=>443,'slot_number'=>'K05-b','parking_location'=>'Basement -1','tuya_lamp_id'=>124],
            ['block_id'=>10,'camera_id'=>443,'slot_number'=>'K05-c','parking_location'=>'Basement -1','tuya_lamp_id'=>124],

            ['block_id'=>10,'camera_id'=>101,'slot_number'=>'K07-a','parking_location'=>'Basement -1','tuya_lamp_id'=>125],

            ['block_id'=>10,'camera_id'=>102,'slot_number'=>'K09-a','parking_location'=>'Basement -1','tuya_lamp_id'=>126],
            ['block_id'=>10,'camera_id'=>null,'slot_number'=>'not-slot','parking_location'=>'Basement -1','tuya_lamp_id'=>null],

            //B5 - C5 piller camera'parking_location'=>'Basement -1',
            ['block_id'=>3,'camera_id'=>87,'slot_number'=>'BC06-c','parking_location'=>'Basement -1','tuya_lamp_id'=>51],

            //C5 - D5 piller camera'parking_location'=>'Basement -1',
            ['block_id'=>4,'camera_id'=>69,'slot_number'=>'CD06-a','parking_location'=>'Basement -1','tuya_lamp_id'=>56],
            ['block_id'=>4,'camera_id'=>69,'slot_number'=>'CD06-b','parking_location'=>'Basement -1','tuya_lamp_id'=>56],
            ['block_id'=>4,'camera_id'=>69,'slot_number'=>'CD06-c','parking_location'=>'Basement -1','tuya_lamp_id'=>56],

            //C13 - D13 piller camera'parking_location'=>'Basement -1',
            ['block_id'=>3,'camera_id'=>20,'slot_number'=>'CD14-a','parking_location'=>'Basement -1','tuya_lamp_id'=>57],
            ['block_id'=>3,'camera_id'=>20,'slot_number'=>'CD14-b','parking_location'=>'Basement -1','tuya_lamp_id'=>57],
            ['block_id'=>3,'camera_id'=>20,'slot_number'=>'CD14-c','parking_location'=>'Basement -1','tuya_lamp_id'=>57],

            //D13 - E13 piller camera'parking_location'=>'Basement -1',
            ['block_id'=>4,'camera_id'=>21,'slot_number'=>'DE14-a','parking_location'=>'Basement -1','tuya_lamp_id'=>74],
            ['block_id'=>4,'camera_id'=>21,'slot_number'=>'DE14-b','parking_location'=>'Basement -1','tuya_lamp_id'=>74],
            ['block_id'=>4,'camera_id'=>21,'slot_number'=>'DE14-c','parking_location'=>'Basement -1','tuya_lamp_id'=>74],

            //E13 - F13 piller camera'parking_location'=>'Basement -1',
            ['block_id'=>5,'camera_id'=>22,'slot_number'=>'EF14-a','parking_location'=>'Basement -1','tuya_lamp_id'=>76],
            ['block_id'=>5,'camera_id'=>22,'slot_number'=>'EF14-b','parking_location'=>'Basement -1','tuya_lamp_id'=>76],
            ['block_id'=>5,'camera_id'=>22,'slot_number'=>'EF14-c','parking_location'=>'Basement -1','tuya_lamp_id'=>76],

            //F13 - G13 piller camera'parking_location'=>'Basement -1',
            ['block_id'=>6,'camera_id'=>23,'slot_number'=>'FG14-a','parking_location'=>'Basement -1','tuya_lamp_id'=>83],
            ['block_id'=>6,'camera_id'=>23,'slot_number'=>'FG14-b','parking_location'=>'Basement -1','tuya_lamp_id'=>83],
            ['block_id'=>6,'camera_id'=>23,'slot_number'=>'FG14-c','parking_location'=>'Basement -1','tuya_lamp_id'=>83],

            //H13 - J13 piller camera'parking_location'=>'Basement -1',
            ['block_id'=>8,'camera_id'=>92,'slot_number'=>'HJ14-a','parking_location'=>'Basement -1','tuya_lamp_id'=>107],
            ['block_id'=>8,'camera_id'=>92,'slot_number'=>'HJ14-b','parking_location'=>'Basement -1','tuya_lamp_id'=>107],
            ['block_id'=>8,'camera_id'=>92,'slot_number'=>'HJ14-c','parking_location'=>'Basement -1','tuya_lamp_id'=>107],

            //J13 - K13 piller camera'parking_location'=>'Basement -1',
            ['block_id'=>9,'camera_id'=>117,'slot_number'=>'JK14-a','parking_location'=>'Basement -1','tuya_lamp_id'=>119],
            ['block_id'=>9,'camera_id'=>117,'slot_number'=>'JK14-b','parking_location'=>'Basement -1','tuya_lamp_id'=>119],

            //G13 - H13 piller camera'parking_location'=>'Basement -1',
            ['block_id'=>7,'camera_id'=>441,'slot_number'=>'GH14-a','parking_location'=>'Basement -1','tuya_lamp_id'=>95],
            ['block_id'=>7,'camera_id'=>441,'slot_number'=>'GH14-b','parking_location'=>'Basement -1','tuya_lamp_id'=>95],
            ['block_id'=>7,'camera_id'=>441,'slot_number'=>'GH14-c','parking_location'=>'Basement -1','tuya_lamp_id'=>95],

            ['block_id'=>7,'camera_id'=>127,'slot_number'=>'G12-a','parking_location'=>'Basement -1','tuya_lamp_id'=>94],
            ['block_id'=>7,'camera_id'=>127,'slot_number'=>'G12-b','parking_location'=>'Basement -1','tuya_lamp_id'=>94],
            ['block_id'=>7,'camera_id'=>127,'slot_number'=>'G12-c-not-slot','parking_location'=>'Basement -1','tuya_lamp_id'=>null],

            //Basement-2 Slot mapping -----------------------------------------------------------------------------------

            //H27 piller camera
            ['block_id'=>17,'camera_id'=>250,'slot_number'=>'G27-a','parking_location'=>'Basement -2','tuya_lamp_id'=>381],
            ['block_id'=>17,'camera_id'=>250,'slot_number'=>'G27-b','parking_location'=>'Basement -2','tuya_lamp_id'=>381],
            ['block_id'=>17,'camera_id'=>250,'slot_number'=>'G27-c','parking_location'=>'Basement -2','tuya_lamp_id'=>381],

            //H29 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>17,'camera_id'=>246,'slot_number'=>'G29-a','parking_location'=>'Basement -2','tuya_lamp_id'=>290],
            ['block_id'=>17,'camera_id'=>246,'slot_number'=>'G29-b','parking_location'=>'Basement -2','tuya_lamp_id'=>290],
            ['block_id'=>17,'camera_id'=>246,'slot_number'=>'G29-c','parking_location'=>'Basement -2','tuya_lamp_id'=>290],

            //H30 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>17,'camera_id'=>252,'slot_number'=>'G30-a','parking_location'=>'Basement -2','tuya_lamp_id'=>291],
            ['block_id'=>17,'camera_id'=>252,'slot_number'=>'G30-b','parking_location'=>'Basement -2','tuya_lamp_id'=>291],
            ['block_id'=>17,'camera_id'=>252,'slot_number'=>'G30-c','parking_location'=>'Basement -2','tuya_lamp_id'=>291],

            //H31 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>17,'camera_id'=>233,'slot_number'=>'G31-a','parking_location'=>'Basement -2','tuya_lamp_id'=>292],
            ['block_id'=>17,'camera_id'=>233,'slot_number'=>'G31-b','parking_location'=>'Basement -2','tuya_lamp_id'=>292],
            ['block_id'=>17,'camera_id'=>233,'slot_number'=>'G31-c','parking_location'=>'Basement -2','tuya_lamp_id'=>292],

            //H32 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>17,'camera_id'=>238,'slot_number'=>'G32-a','parking_location'=>'Basement -2','tuya_lamp_id'=>293],
            ['block_id'=>17,'camera_id'=>238,'slot_number'=>'G32-b','parking_location'=>'Basement -2','tuya_lamp_id'=>293],
            ['block_id'=>17,'camera_id'=>238,'slot_number'=>'G32-c','parking_location'=>'Basement -2','tuya_lamp_id'=>293],

            //H33 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>17,'camera_id'=>253,'slot_number'=>'G33-a','parking_location'=>'Basement -2','tuya_lamp_id'=>294],
            ['block_id'=>17,'camera_id'=>253,'slot_number'=>'G33-b','parking_location'=>'Basement -2','tuya_lamp_id'=>294],
            ['block_id'=>17,'camera_id'=>253,'slot_number'=>'G33-c','parking_location'=>'Basement -2','tuya_lamp_id'=>294], 

            //H34 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>17,'camera_id'=>242,'slot_number'=>'G34-a','parking_location'=>'Basement -2','tuya_lamp_id'=>295],
            ['block_id'=>17,'camera_id'=>242,'slot_number'=>'G34-b','parking_location'=>'Basement -2','tuya_lamp_id'=>295],
            ['block_id'=>17,'camera_id'=>242,'slot_number'=>'G34-c','parking_location'=>'Basement -2','tuya_lamp_id'=>295],

            //H35 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>17,'camera_id'=>243,'slot_number'=>'G35-a','parking_location'=>'Basement -2','tuya_lamp_id'=>296],
            ['block_id'=>17,'camera_id'=>243,'slot_number'=>'G35-b','parking_location'=>'Basement -2','tuya_lamp_id'=>296],
            ['block_id'=>17,'camera_id'=>243,'slot_number'=>'G35-c','parking_location'=>'Basement -2','tuya_lamp_id'=>296],

            //H36 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>17,'camera_id'=>239,'slot_number'=>'G36-a','parking_location'=>'Basement -2','tuya_lamp_id'=>297],
            ['block_id'=>17,'camera_id'=>239,'slot_number'=>'G36-b','parking_location'=>'Basement -2','tuya_lamp_id'=>297],
            ['block_id'=>17,'camera_id'=>239,'slot_number'=>'G36-c','parking_location'=>'Basement -2','tuya_lamp_id'=>297],

            //H37 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>17,'camera_id'=>245,'slot_number'=>'G37-a','parking_location'=>'Basement -2','tuya_lamp_id'=>298],
            ['block_id'=>17,'camera_id'=>245,'slot_number'=>'G37-b','parking_location'=>'Basement -2','tuya_lamp_id'=>298],
            ['block_id'=>17,'camera_id'=>245,'slot_number'=>'G37-c','parking_location'=>'Basement -2','tuya_lamp_id'=>298],

            //G30 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>18,'camera_id'=>240,'slot_number'=>'H30-a','parking_location'=>'Basement -2','tuya_lamp_id'=>301],
            ['block_id'=>18,'camera_id'=>240,'slot_number'=>'H30-b','parking_location'=>'Basement -2','tuya_lamp_id'=>301],

            //G33 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>18,'camera_id'=>234,'slot_number'=>'H33-a','parking_location'=>'Basement -2','tuya_lamp_id'=>303],
            ['block_id'=>18,'camera_id'=>234,'slot_number'=>'H33-b','parking_location'=>'Basement -2','tuya_lamp_id'=>303],
            ['block_id'=>18,'camera_id'=>234,'slot_number'=>'H33-c','parking_location'=>'Basement -2','tuya_lamp_id'=>303],

            //G34 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>18,'camera_id'=>244,'slot_number'=>'H34-a','parking_location'=>'Basement -2','tuya_lamp_id'=>304],
            ['block_id'=>18,'camera_id'=>244,'slot_number'=>'H34-b','parking_location'=>'Basement -2','tuya_lamp_id'=>304],
            ['block_id'=>18,'camera_id'=>244,'slot_number'=>'H34-c','parking_location'=>'Basement -2','tuya_lamp_id'=>304],

            //G36 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>18,'camera_id'=>236,'slot_number'=>'H36-a','parking_location'=>'Basement -2','tuya_lamp_id'=>306],
            ['block_id'=>18,'camera_id'=>236,'slot_number'=>'H36-b','parking_location'=>'Basement -2','tuya_lamp_id'=>306],
            ['block_id'=>18,'camera_id'=>236,'slot_number'=>'H36-c','parking_location'=>'Basement -2','tuya_lamp_id'=>306],
            
            //G37 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>18,'camera_id'=>241,'slot_number'=>'H37-a','parking_location'=>'Basement -2','tuya_lamp_id'=>307],
            ['block_id'=>18,'camera_id'=>241,'slot_number'=>'H37-b','parking_location'=>'Basement -2','tuya_lamp_id'=>307],
            ['block_id'=>18,'camera_id'=>null,'slot_number'=>'not-slot','parking_location'=>'Basement -2','tuya_lamp_id'=>null],

            //H40 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>18,'camera_id'=>247,'slot_number'=>'H39-a','parking_location'=>'Basement -2','tuya_lamp_id'=>309],  

            //G38 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>18,'camera_id'=>248,'slot_number'=>'H38-a','parking_location'=>'Basement -2','tuya_lamp_id'=>308],
            ['block_id'=>18,'camera_id'=>248,'slot_number'=>'H38-b','parking_location'=>'Basement -2','tuya_lamp_id'=>308],
            ['block_id'=>18,'camera_id'=>248,'slot_number'=>'H38-c','parking_location'=>'Basement -2','tuya_lamp_id'=>308],

            //G35 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>18,'camera_id'=>249,'slot_number'=>'H35-a','parking_location'=>'Basement -2','tuya_lamp_id'=>305],
            ['block_id'=>18,'camera_id'=>249,'slot_number'=>'H35-b','parking_location'=>'Basement -2','tuya_lamp_id'=>305],
            ['block_id'=>18,'camera_id'=>249,'slot_number'=>'H35-c','parking_location'=>'Basement -2','tuya_lamp_id'=>305],

            //G32 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>18,'camera_id'=>251,'slot_number'=>'H32-b','parking_location'=>'Basement -2','tuya_lamp_id'=>302],
            ['block_id'=>18,'camera_id'=>251,'slot_number'=>'H32-c','parking_location'=>'Basement -2','tuya_lamp_id'=>302],

            //E37 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>16,'camera_id'=>257,'slot_number'=>'F37-a','parking_location'=>'Basement -2','tuya_lamp_id'=>280],
            ['block_id'=>16,'camera_id'=>257,'slot_number'=>'F37-b','parking_location'=>'Basement -2','tuya_lamp_id'=>280],
            ['block_id'=>16,'camera_id'=>257,'slot_number'=>'F37-c','parking_location'=>'Basement -2','tuya_lamp_id'=>280],

            //F33 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>15,'camera_id'=>258,'slot_number'=>'E33-a','parking_location'=>'Basement -2','tuya_lamp_id'=>250],
            ['block_id'=>15,'camera_id'=>258,'slot_number'=>'E33-b','parking_location'=>'Basement -2','tuya_lamp_id'=>250],
            ['block_id'=>15,'camera_id'=>258,'slot_number'=>'E33-c','parking_location'=>'Basement -2','tuya_lamp_id'=>250],

            //E35 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>16,'camera_id'=>259,'slot_number'=>'F35-a','parking_location'=>'Basement -2','tuya_lamp_id'=>278],
            ['block_id'=>16,'camera_id'=>259,'slot_number'=>'F35-b','parking_location'=>'Basement -2','tuya_lamp_id'=>278],
            ['block_id'=>16,'camera_id'=>259,'slot_number'=>'F35-c','parking_location'=>'Basement -2','tuya_lamp_id'=>278],

            //F36 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>15,'camera_id'=>260,'slot_number'=>'E36-a','parking_location'=>'Basement -2','tuya_lamp_id'=>252],
            ['block_id'=>15,'camera_id'=>260,'slot_number'=>'E36-b','parking_location'=>'Basement -2','tuya_lamp_id'=>252],
            ['block_id'=>15,'camera_id'=>260,'slot_number'=>'E36-c','parking_location'=>'Basement -2','tuya_lamp_id'=>252],

            //E34 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>16,'camera_id'=>261,'slot_number'=>'F34-a','parking_location'=>'Basement -2','tuya_lamp_id'=>277],
            ['block_id'=>16,'camera_id'=>261,'slot_number'=>'F34-b','parking_location'=>'Basement -2','tuya_lamp_id'=>277],
            ['block_id'=>16,'camera_id'=>261,'slot_number'=>'F34-c','parking_location'=>'Basement -2','tuya_lamp_id'=>277],

            //F37 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>15,'camera_id'=>263,'slot_number'=>'E37-a','parking_location'=>'Basement -2','tuya_lamp_id'=>253],
            ['block_id'=>15,'camera_id'=>263,'slot_number'=>'E37-b','parking_location'=>'Basement -2','tuya_lamp_id'=>253],

            //E27 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>16,'camera_id'=>264,'slot_number'=>'F27-a','parking_location'=>'Basement -2','tuya_lamp_id'=>271],
            ['block_id'=>16,'camera_id'=>264,'slot_number'=>'F27-b','parking_location'=>'Basement -2','tuya_lamp_id'=>271],
            ['block_id'=>16,'camera_id'=>264,'slot_number'=>'F27-c','parking_location'=>'Basement -2','tuya_lamp_id'=>271],

            //E32 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>16,'camera_id'=>265,'slot_number'=>'F32-a','parking_location'=>'Basement -2','tuya_lamp_id'=>275],
            ['block_id'=>16,'camera_id'=>265,'slot_number'=>'F32-b','parking_location'=>'Basement -2','tuya_lamp_id'=>275],
            ['block_id'=>16,'camera_id'=>265,'slot_number'=>'F32-c','parking_location'=>'Basement -2','tuya_lamp_id'=>275],

            //E38 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>16,'camera_id'=>266,'slot_number'=>'F38-a','parking_location'=>'Basement -2','tuya_lamp_id'=>281],
            ['block_id'=>16,'camera_id'=>266,'slot_number'=>'F38-b','parking_location'=>'Basement -2','tuya_lamp_id'=>281],
            ['block_id'=>16,'camera_id'=>266,'slot_number'=>'F38-c','parking_location'=>'Basement -2','tuya_lamp_id'=>281],

            //E31 piller camera
            ['block_id'=>16,'camera_id'=>267,'slot_number'=>'F31-a','parking_location'=>'Basement -2','tuya_lamp_id'=>382],
            ['block_id'=>16,'camera_id'=>267,'slot_number'=>'F31-b','parking_location'=>'Basement -2','tuya_lamp_id'=>382],
            ['block_id'=>16,'camera_id'=>267,'slot_number'=>'F31-c','parking_location'=>'Basement -2','tuya_lamp_id'=>382],

            //E36 piller 
            ['block_id'=>16,'camera_id'=>268,'slot_number'=>'F36-a','parking_location'=>'Basement -2','tuya_lamp_id'=>279],
            ['block_id'=>16,'camera_id'=>268,'slot_number'=>'F36-b','parking_location'=>'Basement -2','tuya_lamp_id'=>279],
            ['block_id'=>16,'camera_id'=>268,'slot_number'=>'F36-c','parking_location'=>'Basement -2','tuya_lamp_id'=>279],

            //F35 piller 
            ['block_id'=>15,'camera_id'=>269,'slot_number'=>'E35-a','parking_location'=>'Basement -2','tuya_lamp_id'=>251],
            ['block_id'=>15,'camera_id'=>269,'slot_number'=>'E35-b','parking_location'=>'Basement -2','tuya_lamp_id'=>251],
            ['block_id'=>15,'camera_id'=>269,'slot_number'=>'E35-c','parking_location'=>'Basement -2','tuya_lamp_id'=>251],

            //F34 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>15,'camera_id'=>270,'slot_number'=>'E34-a','parking_location'=>'Basement -2','tuya_lamp_id'=>383],
            ['block_id'=>15,'camera_id'=>270,'slot_number'=>'E34-b','parking_location'=>'Basement -2','tuya_lamp_id'=>383],
            ['block_id'=>15,'camera_id'=>270,'slot_number'=>'E34-c','parking_location'=>'Basement -2','tuya_lamp_id'=>383],

            //F28 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>15,'camera_id'=>271,'slot_number'=>'E28-a','parking_location'=>'Basement -2','tuya_lamp_id'=>245],
            ['block_id'=>15,'camera_id'=>271,'slot_number'=>'E28-b','parking_location'=>'Basement -2','tuya_lamp_id'=>245],
            ['block_id'=>15,'camera_id'=>271,'slot_number'=>'E28-c','parking_location'=>'Basement -2','tuya_lamp_id'=>245],

            //F32 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>15,'camera_id'=>272,'slot_number'=>'E32-a','parking_location'=>'Basement -2','tuya_lamp_id'=>249],
            ['block_id'=>15,'camera_id'=>272,'slot_number'=>'E32-b','parking_location'=>'Basement -2','tuya_lamp_id'=>249],
            ['block_id'=>15,'camera_id'=>272,'slot_number'=>'E32-c','parking_location'=>'Basement -2','tuya_lamp_id'=>249],

            //F31 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>15,'camera_id'=>273,'slot_number'=>'E31-c','parking_location'=>'Basement -2','tuya_lamp_id'=>248],

            //E33 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>16,'camera_id'=>275,'slot_number'=>'F33-a','parking_location'=>'Basement -2','tuya_lamp_id'=>276],
            ['block_id'=>16,'camera_id'=>275,'slot_number'=>'F33-b','parking_location'=>'Basement -2','tuya_lamp_id'=>276],
            ['block_id'=>16,'camera_id'=>275,'slot_number'=>'F33-c','parking_location'=>'Basement -2','tuya_lamp_id'=>276],

            //E29 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>16,'camera_id'=>276,'slot_number'=>'F29-a','parking_location'=>'Basement -2','tuya_lamp_id'=>273],
            ['block_id'=>16,'camera_id'=>276,'slot_number'=>'F29-b','parking_location'=>'Basement -2','tuya_lamp_id'=>273],
            ['block_id'=>16,'camera_id'=>276,'slot_number'=>'F29-c','parking_location'=>'Basement -2','tuya_lamp_id'=>273],

            //E28 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>16,'camera_id'=>277,'slot_number'=>'F28-a','parking_location'=>'Basement -2','tuya_lamp_id'=>272],
            ['block_id'=>16,'camera_id'=>277,'slot_number'=>'F28-b','parking_location'=>'Basement -2','tuya_lamp_id'=>272],
            ['block_id'=>16,'camera_id'=>277,'slot_number'=>'F28-c','parking_location'=>'Basement -2','tuya_lamp_id'=>272],

            //F38 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>15,'camera_id'=>278,'slot_number'=>'E38-a','parking_location'=>'Basement -2','tuya_lamp_id'=>254],
            ['block_id'=>15,'camera_id'=>278,'slot_number'=>'E38-b','parking_location'=>'Basement -2','tuya_lamp_id'=>254],
            ['block_id'=>15,'camera_id'=>278,'slot_number'=>'E38-c','parking_location'=>'Basement -2','tuya_lamp_id'=>254],

            //E30 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>16,'camera_id'=>279,'slot_number'=>'F30-a','parking_location'=>'Basement -2','tuya_lamp_id'=>274],
            ['block_id'=>16,'camera_id'=>279,'slot_number'=>'F30-b','parking_location'=>'Basement -2','tuya_lamp_id'=>274],
            ['block_id'=>16,'camera_id'=>279,'slot_number'=>'F30-c','parking_location'=>'Basement -2','tuya_lamp_id'=>274],

            //F27 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>15,'camera_id'=>280,'slot_number'=>'E27-a','parking_location'=>'Basement -2','tuya_lamp_id'=>244],
            ['block_id'=>15,'camera_id'=>280,'slot_number'=>'E27-b','parking_location'=>'Basement -2','tuya_lamp_id'=>244],
            ['block_id'=>15,'camera_id'=>280,'slot_number'=>'E27-c','parking_location'=>'Basement -2','tuya_lamp_id'=>244],

            //A24 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>12,'camera_id'=>281,'slot_number'=>'B24-a','parking_location'=>'Basement -2','tuya_lamp_id'=>155],
            ['block_id'=>12,'camera_id'=>281,'slot_number'=>'B24-b','parking_location'=>'Basement -2','tuya_lamp_id'=>155],
            ['block_id'=>12,'camera_id'=>281,'slot_number'=>'B24-c','parking_location'=>'Basement -2','tuya_lamp_id'=>155],

            //B34 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>11,'camera_id'=>282,'slot_number'=>'A34-a','parking_location'=>'Basement -2','tuya_lamp_id'=>136],
            ['block_id'=>11,'camera_id'=>282,'slot_number'=>'A34-b','parking_location'=>'Basement -2','tuya_lamp_id'=>136],
            ['block_id'=>11,'camera_id'=>282,'slot_number'=>'A34-c','parking_location'=>'Basement -2','tuya_lamp_id'=>136],

            //A35 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>12,'camera_id'=>284,'slot_number'=>'B35-a','parking_location'=>'Basement -2','tuya_lamp_id'=>166],
            ['block_id'=>12,'camera_id'=>284,'slot_number'=>'B35-b','parking_location'=>'Basement -2','tuya_lamp_id'=>166],
            ['block_id'=>12,'camera_id'=>284,'slot_number'=>'B35-c','parking_location'=>'Basement -2','tuya_lamp_id'=>166],

            //A31 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>12,'camera_id'=>285,'slot_number'=>'B31-a','parking_location'=>'Basement -2','tuya_lamp_id'=>162],
            ['block_id'=>12,'camera_id'=>285,'slot_number'=>'B31-b','parking_location'=>'Basement -2','tuya_lamp_id'=>162],
            ['block_id'=>12,'camera_id'=>285,'slot_number'=>'B31-c','parking_location'=>'Basement -2','tuya_lamp_id'=>162],

            //A29 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>12,'camera_id'=>286,'slot_number'=>'B29-a','parking_location'=>'Basement -2','tuya_lamp_id'=>160],
            ['block_id'=>12,'camera_id'=>286,'slot_number'=>'B29-b','parking_location'=>'Basement -2','tuya_lamp_id'=>160],
            ['block_id'=>12,'camera_id'=>286,'slot_number'=>'B29-c','parking_location'=>'Basement -2','tuya_lamp_id'=>160],

            //B39-C39 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>12,'camera_id'=>287,'slot_number'=>'BC40-a','parking_location'=>'Basement -2','tuya_lamp_id'=>170],    
            ['block_id'=>12,'camera_id'=>287,'slot_number'=>'BC40-b','parking_location'=>'Basement -2','tuya_lamp_id'=>170],   
            ['block_id'=>12,'camera_id'=>287,'slot_number'=>'BC40-c','parking_location'=>'Basement -2','tuya_lamp_id'=>170],    

            //A30 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>12,'camera_id'=>288,'slot_number'=>'B30-a','parking_location'=>'Basement -2','tuya_lamp_id'=>161],
            ['block_id'=>12,'camera_id'=>288,'slot_number'=>'B30-b','parking_location'=>'Basement -2','tuya_lamp_id'=>161],
            ['block_id'=>12,'camera_id'=>288,'slot_number'=>'B30-c','parking_location'=>'Basement -2','tuya_lamp_id'=>161],

            //A26 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>12,'camera_id'=>289,'slot_number'=>'B26-a','parking_location'=>'Basement -2','tuya_lamp_id'=>157],
            ['block_id'=>12,'camera_id'=>289,'slot_number'=>'B26-b','parking_location'=>'Basement -2','tuya_lamp_id'=>157],
            ['block_id'=>12,'camera_id'=>289,'slot_number'=>'B26-c','parking_location'=>'Basement -2','tuya_lamp_id'=>157],

            //A28 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>12,'camera_id'=>290,'slot_number'=>'B28-a','parking_location'=>'Basement -2','tuya_lamp_id'=>159],
            ['block_id'=>12,'camera_id'=>290,'slot_number'=>'B28-b','parking_location'=>'Basement -2','tuya_lamp_id'=>159],
            ['block_id'=>12,'camera_id'=>290,'slot_number'=>'B28-c','parking_location'=>'Basement -2','tuya_lamp_id'=>159],

            //A25 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>12,'camera_id'=>291,'slot_number'=>'B25-a','parking_location'=>'Basement -2','tuya_lamp_id'=>156],
            ['block_id'=>12,'camera_id'=>291,'slot_number'=>'B25-b','parking_location'=>'Basement -2','tuya_lamp_id'=>156],
            ['block_id'=>12,'camera_id'=>291,'slot_number'=>'B25-c','parking_location'=>'Basement -2','tuya_lamp_id'=>156],

            //A34 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>12,'camera_id'=>292,'slot_number'=>'B34-a','parking_location'=>'Basement -2','tuya_lamp_id'=>165],
            ['block_id'=>12,'camera_id'=>292,'slot_number'=>'B34-b','parking_location'=>'Basement -2','tuya_lamp_id'=>165],
            ['block_id'=>12,'camera_id'=>292,'slot_number'=>'B34-c','parking_location'=>'Basement -2','tuya_lamp_id'=>165],

            //A32 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>12,'camera_id'=>293,'slot_number'=>'B32-a','parking_location'=>'Basement -2','tuya_lamp_id'=>163],
            ['block_id'=>12,'camera_id'=>293,'slot_number'=>'B32-b','parking_location'=>'Basement -2','tuya_lamp_id'=>163],
            ['block_id'=>12,'camera_id'=>293,'slot_number'=>'B32-c','parking_location'=>'Basement -2','tuya_lamp_id'=>163],

            //B32 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>11,'camera_id'=>294,'slot_number'=>'A32-b','parking_location'=>'Basement -2','tuya_lamp_id'=>134],
            ['block_id'=>11,'camera_id'=>294,'slot_number'=>'A32-c','parking_location'=>'Basement -2','tuya_lamp_id'=>134],

            //A39-B39 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>11,'camera_id'=>295,'slot_number'=>'AB40-a','parking_location'=>'Basement -2','tuya_lamp_id'=>427],   
            ['block_id'=>11,'camera_id'=>295,'slot_number'=>'AB40-b','parking_location'=>'Basement -2','tuya_lamp_id'=>427],   

            //B37 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>11,'camera_id'=>296,'slot_number'=>'A37-a','parking_location'=>'Basement -2','tuya_lamp_id'=>139],
            ['block_id'=>11,'camera_id'=>296,'slot_number'=>'A37-b','parking_location'=>'Basement -2','tuya_lamp_id'=>139],
            ['block_id'=>11,'camera_id'=>296,'slot_number'=>'A37-c','parking_location'=>'Basement -2','tuya_lamp_id'=>139],

            //B36 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>11,'camera_id'=>297,'slot_number'=>'A36-a','parking_location'=>'Basement -2','tuya_lamp_id'=>138],
            ['block_id'=>11,'camera_id'=>297,'slot_number'=>'A36-b','parking_location'=>'Basement -2','tuya_lamp_id'=>138],
            ['block_id'=>11,'camera_id'=>297,'slot_number'=>'A36-c','parking_location'=>'Basement -2','tuya_lamp_id'=>138],

            //A36 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>12,'camera_id'=>298,'slot_number'=>'B36-a','parking_location'=>'Basement -2','tuya_lamp_id'=>167],
            ['block_id'=>12,'camera_id'=>298,'slot_number'=>'B36-b','parking_location'=>'Basement -2','tuya_lamp_id'=>167],
            ['block_id'=>12,'camera_id'=>298,'slot_number'=>'B36-c','parking_location'=>'Basement -2','tuya_lamp_id'=>167],

            //B29 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>11,'camera_id'=>299,'slot_number'=>'A29-a','parking_location'=>'Basement -2','tuya_lamp_id'=>133],
            ['block_id'=>11,'camera_id'=>299,'slot_number'=>'A29-b','parking_location'=>'Basement -2','tuya_lamp_id'=>133],
            ['block_id'=>11,'camera_id'=>299,'slot_number'=>'A29-c','parking_location'=>'Basement -2','tuya_lamp_id'=>133],

            //B35 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>11,'camera_id'=>300,'slot_number'=>'A35-a','parking_location'=>'Basement -2','tuya_lamp_id'=>137],
            ['block_id'=>11,'camera_id'=>300,'slot_number'=>'A35-b','parking_location'=>'Basement -2','tuya_lamp_id'=>137],
            ['block_id'=>11,'camera_id'=>300,'slot_number'=>'A35-c','parking_location'=>'Basement -2','tuya_lamp_id'=>137],

            //C34 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>14,'camera_id'=>308,'slot_number'=>'D34-a','parking_location'=>'Basement -2','tuya_lamp_id'=>225],
            ['block_id'=>14,'camera_id'=>308,'slot_number'=>'D34-b','parking_location'=>'Basement -2','tuya_lamp_id'=>225],
            ['block_id'=>14,'camera_id'=>308,'slot_number'=>'D34-c','parking_location'=>'Basement -2','tuya_lamp_id'=>225],

            //C35 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>14,'camera_id'=>309,'slot_number'=>'D35-a','parking_location'=>'Basement -2','tuya_lamp_id'=>226],
            ['block_id'=>14,'camera_id'=>309,'slot_number'=>'D35-b','parking_location'=>'Basement -2','tuya_lamp_id'=>226],
            ['block_id'=>14,'camera_id'=>309,'slot_number'=>'D35-c','parking_location'=>'Basement -2','tuya_lamp_id'=>226],

            //D35 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>13,'camera_id'=>310,'slot_number'=>'C35-a','parking_location'=>'Basement -2','tuya_lamp_id'=>201],
            ['block_id'=>13,'camera_id'=>310,'slot_number'=>'C35-b','parking_location'=>'Basement -2','tuya_lamp_id'=>201],
            ['block_id'=>13,'camera_id'=>310,'slot_number'=>'C35-c','parking_location'=>'Basement -2','tuya_lamp_id'=>201],

            //D33 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>13,'camera_id'=>311,'slot_number'=>'C33-a','parking_location'=>'Basement -2','tuya_lamp_id'=>199],
            ['block_id'=>13,'camera_id'=>311,'slot_number'=>'C33-b','parking_location'=>'Basement -2','tuya_lamp_id'=>199],
            ['block_id'=>13,'camera_id'=>311,'slot_number'=>'C33-c','parking_location'=>'Basement -2','tuya_lamp_id'=>199],

            //D38 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>13,'camera_id'=>312,'slot_number'=>'C38-a','parking_location'=>'Basement -2','tuya_lamp_id'=>204],
            ['block_id'=>13,'camera_id'=>312,'slot_number'=>'C38-b','parking_location'=>'Basement -2','tuya_lamp_id'=>204],
            ['block_id'=>13,'camera_id'=>312,'slot_number'=>'C38-c','parking_location'=>'Basement -2','tuya_lamp_id'=>204],

            //C33 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>14,'camera_id'=>314,'slot_number'=>'D33-a','parking_location'=>'Basement -2','tuya_lamp_id'=>224],
            ['block_id'=>14,'camera_id'=>314,'slot_number'=>'D33-b','parking_location'=>'Basement -2','tuya_lamp_id'=>224],
            ['block_id'=>14,'camera_id'=>314,'slot_number'=>'D33-c','parking_location'=>'Basement -2','tuya_lamp_id'=>224],

            //C28 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>14,'camera_id'=>315,'slot_number'=>'D28-a','parking_location'=>'Basement -2','tuya_lamp_id'=>220],
            ['block_id'=>14,'camera_id'=>315,'slot_number'=>'D28-b','parking_location'=>'Basement -2','tuya_lamp_id'=>220],
            ['block_id'=>14,'camera_id'=>315,'slot_number'=>'D28-c','parking_location'=>'Basement -2','tuya_lamp_id'=>220],

            //C32 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>14,'camera_id'=>317,'slot_number'=>'D32-a','parking_location'=>'Basement -2','tuya_lamp_id'=>223],
            ['block_id'=>14,'camera_id'=>317,'slot_number'=>'D32-b','parking_location'=>'Basement -2','tuya_lamp_id'=>223],
            ['block_id'=>14,'camera_id'=>317,'slot_number'=>'D32-c','parking_location'=>'Basement -2','tuya_lamp_id'=>223],

            //C27 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>14,'camera_id'=>319,'slot_number'=>'D27-a','parking_location'=>'Basement -2','tuya_lamp_id'=>219],
            ['block_id'=>14,'camera_id'=>319,'slot_number'=>'D27-b','parking_location'=>'Basement -2','tuya_lamp_id'=>219],
            ['block_id'=>14,'camera_id'=>319,'slot_number'=>'D27-c','parking_location'=>'Basement -2','tuya_lamp_id'=>219],

            //C29 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>14,'camera_id'=>320,'slot_number'=>'D29-a','parking_location'=>'Basement -2','tuya_lamp_id'=>221],
            ['block_id'=>14,'camera_id'=>320,'slot_number'=>'D29-b','parking_location'=>'Basement -2','tuya_lamp_id'=>221],
            ['block_id'=>14,'camera_id'=>320,'slot_number'=>'D29-c','parking_location'=>'Basement -2','tuya_lamp_id'=>221],

            //D32 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>13,'camera_id'=>321,'slot_number'=>'C32-a','parking_location'=>'Basement -2','tuya_lamp_id'=>198],
            ['block_id'=>13,'camera_id'=>321,'slot_number'=>'C32-b','parking_location'=>'Basement -2','tuya_lamp_id'=>198],
            ['block_id'=>13,'camera_id'=>321,'slot_number'=>'C32-c','parking_location'=>'Basement -2','tuya_lamp_id'=>198],

            //D28 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>13,'camera_id'=>322,'slot_number'=>'C28-a','parking_location'=>'Basement -2','tuya_lamp_id'=>194],
            ['block_id'=>13,'camera_id'=>322,'slot_number'=>'C28-b','parking_location'=>'Basement -2','tuya_lamp_id'=>194],
            ['block_id'=>13,'camera_id'=>322,'slot_number'=>'C28-c','parking_location'=>'Basement -2','tuya_lamp_id'=>194],

            //D31 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>13,'camera_id'=>323,'slot_number'=>'C31-a','parking_location'=>'Basement -2','tuya_lamp_id'=>197],
            ['block_id'=>13,'camera_id'=>323,'slot_number'=>'C31-b','parking_location'=>'Basement -2','tuya_lamp_id'=>197],
            ['block_id'=>13,'camera_id'=>323,'slot_number'=>'C31-c','parking_location'=>'Basement -2','tuya_lamp_id'=>197],

            //C39-D39 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>13,'camera_id'=>325,'slot_number'=>'CD40-a','parking_location'=>'Basement -2','tuya_lamp_id'=>205],   
            ['block_id'=>13,'camera_id'=>325,'slot_number'=>'CD40-b','parking_location'=>'Basement -2','tuya_lamp_id'=>205],   

            //D39-E39 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>14,'camera_id'=>326,'slot_number'=>'DE40-a','parking_location'=>'Basement -2','tuya_lamp_id'=>229],   
            ['block_id'=>14,'camera_id'=>326,'slot_number'=>'DE40-b','parking_location'=>'Basement -2','tuya_lamp_id'=>229],  
            ['block_id'=>14,'camera_id'=>326,'slot_number'=>'DE40-c','parking_location'=>'Basement -2','tuya_lamp_id'=>229],   

            //D37 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>13,'camera_id'=>327,'slot_number'=>'C37-a','parking_location'=>'Basement -2','tuya_lamp_id'=>203],
            ['block_id'=>13,'camera_id'=>327,'slot_number'=>'C37-b','parking_location'=>'Basement -2','tuya_lamp_id'=>203],
            ['block_id'=>13,'camera_id'=>327,'slot_number'=>'C37-c','parking_location'=>'Basement -2','tuya_lamp_id'=>203],

            //D29 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>13,'camera_id'=>328,'slot_number'=>'C29-a','parking_location'=>'Basement -2','tuya_lamp_id'=>195],
            ['block_id'=>13,'camera_id'=>328,'slot_number'=>'C29-b','parking_location'=>'Basement -2','tuya_lamp_id'=>195],
            ['block_id'=>13,'camera_id'=>328,'slot_number'=>'C29-c','parking_location'=>'Basement -2','tuya_lamp_id'=>195],

            //D27 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>13,'camera_id'=>329,'slot_number'=>'C27-a','parking_location'=>'Basement -2','tuya_lamp_id'=>193],
            ['block_id'=>13,'camera_id'=>329,'slot_number'=>'C27-b','parking_location'=>'Basement -2','tuya_lamp_id'=>193],
            ['block_id'=>13,'camera_id'=>329,'slot_number'=>'C27-c','parking_location'=>'Basement -2','tuya_lamp_id'=>193],

            //D34 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>13,'camera_id'=>330,'slot_number'=>'C34-a','parking_location'=>'Basement -2','tuya_lamp_id'=>200],
            ['block_id'=>13,'camera_id'=>330,'slot_number'=>'C34-b','parking_location'=>'Basement -2','tuya_lamp_id'=>200],
            ['block_id'=>13,'camera_id'=>330,'slot_number'=>'C34-c','parking_location'=>'Basement -2','tuya_lamp_id'=>200],

            //D36 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>13,'camera_id'=>331,'slot_number'=>'C36-a','parking_location'=>'Basement -2','tuya_lamp_id'=>202],
            ['block_id'=>13,'camera_id'=>331,'slot_number'=>'C36-b','parking_location'=>'Basement -2','tuya_lamp_id'=>202],
            ['block_id'=>13,'camera_id'=>331,'slot_number'=>'C36-c','parking_location'=>'Basement -2','tuya_lamp_id'=>202],

            //C31 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>14,'camera_id'=>332,'slot_number'=>'D31-c','parking_location'=>'Basement -2','tuya_lamp_id'=>222],

            //C38 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>14,'camera_id'=>333,'slot_number'=>'D38-a','parking_location'=>'Basement -2','tuya_lamp_id'=>228],
            ['block_id'=>14,'camera_id'=>333,'slot_number'=>'D38-b','parking_location'=>'Basement -2','tuya_lamp_id'=>228],
            ['block_id'=>14,'camera_id'=>333,'slot_number'=>'D38-c','parking_location'=>'Basement -2','tuya_lamp_id'=>228],

            //C36 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>14,'camera_id'=>335,'slot_number'=>'D36-a','parking_location'=>'Basement -2','tuya_lamp_id'=>227],
            ['block_id'=>14,'camera_id'=>335,'slot_number'=>'D36-b','parking_location'=>'Basement -2','tuya_lamp_id'=>227],
            ['block_id'=>14,'camera_id'=>335,'slot_number'=>'D36-c','parking_location'=>'Basement -2','tuya_lamp_id'=>227],

            //E10 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>16,'camera_id'=>336,'slot_number'=>'F10-a','parking_location'=>'Basement -2','tuya_lamp_id'=>384],
            ['block_id'=>16,'camera_id'=>336,'slot_number'=>'F10-b','parking_location'=>'Basement -2','tuya_lamp_id'=>384],
            ['block_id'=>16,'camera_id'=>336,'slot_number'=>'F10-c','parking_location'=>'Basement -2','tuya_lamp_id'=>384],

            //E6 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>16,'camera_id'=>337,'slot_number'=>'F06-a','parking_location'=>'Basement -2','tuya_lamp_id'=>428],
            ['block_id'=>16,'camera_id'=>337,'slot_number'=>'F06-b','parking_location'=>'Basement -2','tuya_lamp_id'=>428],
            ['block_id'=>16,'camera_id'=>337,'slot_number'=>'F06-c','parking_location'=>'Basement -2','tuya_lamp_id'=>428],

            //C14 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>14,'camera_id'=>339,'slot_number'=>'D14-a-not-slot','parking_location'=>'Basement -2','tuya_lamp_id'=>null],
            ['block_id'=>14,'camera_id'=>339,'slot_number'=>'D14-b','parking_location'=>'Basement -2','tuya_lamp_id'=>211],
            ['block_id'=>14,'camera_id'=>339,'slot_number'=>'D14-c','parking_location'=>'Basement -2','tuya_lamp_id'=>211],

            //C12 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>14,'camera_id'=>340,'slot_number'=>'D12-a','parking_location'=>'Basement -2','tuya_lamp_id'=>210],

            //E15 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>16,'camera_id'=>342,'slot_number'=>'F15-a','parking_location'=>'Basement -2','tuya_lamp_id'=>262],
            ['block_id'=>16,'camera_id'=>342,'slot_number'=>'F15-b','parking_location'=>'Basement -2','tuya_lamp_id'=>262],
            ['block_id'=>16,'camera_id'=>null,'slot_number'=>'not-slots','parking_location'=>'Basement -2','tuya_lamp_id'=>null],

            //G10 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>18,'camera_id'=>343,'slot_number'=>'H10-a','parking_location'=>'Basement -2','tuya_lamp_id'=>385],
            ['block_id'=>18,'camera_id'=>343,'slot_number'=>'H10-b','parking_location'=>'Basement -2','tuya_lamp_id'=>385],
            ['block_id'=>18,'camera_id'=>343,'slot_number'=>'H10-c','parking_location'=>'Basement -2','tuya_lamp_id'=>385],

            //H6 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>17,'camera_id'=>344,'slot_number'=>'G06-a','parking_location'=>'Basement -2','tuya_lamp_id'=>386],
            ['block_id'=>17,'camera_id'=>344,'slot_number'=>'G06-b','parking_location'=>'Basement -2','tuya_lamp_id'=>386],
            ['block_id'=>17,'camera_id'=>344,'slot_number'=>'G06-c','parking_location'=>'Basement -2','tuya_lamp_id'=>386],

            //F14 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>15,'camera_id'=>345,'slot_number'=>'E14-a','parking_location'=>'Basement -2','tuya_lamp_id'=>387],
            ['block_id'=>15,'camera_id'=>345,'slot_number'=>'E14-b','parking_location'=>'Basement -2','tuya_lamp_id'=>387],
            ['block_id'=>15,'camera_id'=>345,'slot_number'=>'E14-c','parking_location'=>'Basement -2','tuya_lamp_id'=>387],

            //H12 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>17,'camera_id'=>346,'slot_number'=>'G12-a','parking_location'=>'Basement -2','tuya_lamp_id'=>388],
            ['block_id'=>17,'camera_id'=>346,'slot_number'=>'G12-b','parking_location'=>'Basement -2','tuya_lamp_id'=>388],
            ['block_id'=>17,'camera_id'=>346,'slot_number'=>'G12-c','parking_location'=>'Basement -2','tuya_lamp_id'=>388],

            //E14 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>16,'camera_id'=>347,'slot_number'=>'F14-a','parking_location'=>'Basement -2','tuya_lamp_id'=>261],
            ['block_id'=>16,'camera_id'=>347,'slot_number'=>'F14-b','parking_location'=>'Basement -2','tuya_lamp_id'=>261],
            ['block_id'=>16,'camera_id'=>347,'slot_number'=>'F14-c','parking_location'=>'Basement -2','tuya_lamp_id'=>261],

            //D14 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>13,'camera_id'=>348,'slot_number'=>'C14-a','parking_location'=>'Basement -2','tuya_lamp_id'=>182],
            ['block_id'=>13,'camera_id'=>348,'slot_number'=>'C14-b','parking_location'=>'Basement -2','tuya_lamp_id'=>182],
            ['block_id'=>13,'camera_id'=>348,'slot_number'=>'C14-c','parking_location'=>'Basement -2','tuya_lamp_id'=>182],

            //D12 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>15,'camera_id'=>349,'slot_number'=>'E08-a','parking_location'=>'Basement -2','tuya_lamp_id'=>234],    
            ['block_id'=>15,'camera_id'=>349,'slot_number'=>'E08-b','parking_location'=>'Basement -2','tuya_lamp_id'=>234],   
            
            //E18 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>16,'camera_id'=>351,'slot_number'=>'F18-a','parking_location'=>'Basement -2','tuya_lamp_id'=>265],
            ['block_id'=>16,'camera_id'=>351,'slot_number'=>'F18-b','parking_location'=>'Basement -2','tuya_lamp_id'=>265],

            //D13 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>13,'camera_id'=>352,'slot_number'=>'C13-a','parking_location'=>'Basement -2','tuya_lamp_id'=>181],
            ['block_id'=>13,'camera_id'=>352,'slot_number'=>'C13-b','parking_location'=>'Basement -2','tuya_lamp_id'=>181],
            ['block_id'=>13,'camera_id'=>352,'slot_number'=>'C13-c','parking_location'=>'Basement -2','tuya_lamp_id'=>181],

            //H13 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>17,'camera_id'=>353,'slot_number'=>'G13-a','parking_location'=>'Basement -2','tuya_lamp_id'=>287],
            ['block_id'=>17,'camera_id'=>353,'slot_number'=>'G13-b','parking_location'=>'Basement -2','tuya_lamp_id'=>287],
            ['block_id'=>17,'camera_id'=>353,'slot_number'=>'G13-c','parking_location'=>'Basement -2','tuya_lamp_id'=>287],

            //H14 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>17,'camera_id'=>354,'slot_number'=>'G14-a','parking_location'=>'Basement -2','tuya_lamp_id'=>389],
            ['block_id'=>17,'camera_id'=>354,'slot_number'=>'G14-b-not-slot','parking_location'=>'Basement -2','tuya_lamp_id'=>null],
            ['block_id'=>17,'camera_id'=>354,'slot_number'=>'G14-c-not-slot','parking_location'=>'Basement -2','tuya_lamp_id'=>null],

            //F9 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>15,'camera_id'=>355,'slot_number'=>'E09-a','parking_location'=>'Basement -2','tuya_lamp_id'=>235],
            ['block_id'=>15,'camera_id'=>355,'slot_number'=>'E09-b','parking_location'=>'Basement -2','tuya_lamp_id'=>235],
            ['block_id'=>15,'camera_id'=>355,'slot_number'=>'E09-c','parking_location'=>'Basement -2','tuya_lamp_id'=>235],

            //F7 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>15,'camera_id'=>356,'slot_number'=>'E07-a','parking_location'=>'Basement -2','tuya_lamp_id'=>233],
            ['block_id'=>15,'camera_id'=>356,'slot_number'=>'E07-b','parking_location'=>'Basement -2','tuya_lamp_id'=>233],
            ['block_id'=>15,'camera_id'=>356,'slot_number'=>'E07-c','parking_location'=>'Basement -2','tuya_lamp_id'=>233],

            //E13 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>16,'camera_id'=>357,'slot_number'=>'F13-a','parking_location'=>'Basement -2','tuya_lamp_id'=>260],
            ['block_id'=>16,'camera_id'=>357,'slot_number'=>'F13-b','parking_location'=>'Basement -2','tuya_lamp_id'=>260],
            ['block_id'=>16,'camera_id'=>357,'slot_number'=>'F13-c','parking_location'=>'Basement -2','tuya_lamp_id'=>260],

            //F6 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>15,'camera_id'=>358,'slot_number'=>'E06-a','parking_location'=>'Basement -2','tuya_lamp_id'=>232],
            ['block_id'=>15,'camera_id'=>358,'slot_number'=>'E06-b','parking_location'=>'Basement -2','tuya_lamp_id'=>232],
            ['block_id'=>15,'camera_id'=>358,'slot_number'=>'E06-c','parking_location'=>'Basement -2','tuya_lamp_id'=>232],

            //H9 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>17,'camera_id'=>359,'slot_number'=>'G09-a','parking_location'=>'Basement -2','tuya_lamp_id'=>390],
            ['block_id'=>17,'camera_id'=>359,'slot_number'=>'G09-b','parking_location'=>'Basement -2','tuya_lamp_id'=>390],
            ['block_id'=>17,'camera_id'=>359,'slot_number'=>'G09-c','parking_location'=>'Basement -2','tuya_lamp_id'=>390],

            //E8 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>16,'camera_id'=>360,'slot_number'=>'F08-a','parking_location'=>'Basement -2','tuya_lamp_id'=>259],
            ['block_id'=>16,'camera_id'=>360,'slot_number'=>'F08-b','parking_location'=>'Basement -2','tuya_lamp_id'=>259],
            ['block_id'=>16,'camera_id'=>360,'slot_number'=>'F08-c','parking_location'=>'Basement -2','tuya_lamp_id'=>259],

            //E9 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>16,'camera_id'=>361,'slot_number'=>'F09-a','parking_location'=>'Basement -2','tuya_lamp_id'=>391],
            ['block_id'=>16,'camera_id'=>361,'slot_number'=>'F09-b','parking_location'=>'Basement -2','tuya_lamp_id'=>391],
            ['block_id'=>16,'camera_id'=>361,'slot_number'=>'F09-c','parking_location'=>'Basement -2','tuya_lamp_id'=>391],

            //E17 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>16,'camera_id'=>362,'slot_number'=>'F17-a','parking_location'=>'Basement -2','tuya_lamp_id'=>264],
            ['block_id'=>16,'camera_id'=>362,'slot_number'=>'F17-b','parking_location'=>'Basement -2','tuya_lamp_id'=>264],

            //E16 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>16,'camera_id'=>363,'slot_number'=>'F16-a','parking_location'=>'Basement -2','tuya_lamp_id'=>263],
            ['block_id'=>16,'camera_id'=>363,'slot_number'=>'F16-b','parking_location'=>'Basement -2','tuya_lamp_id'=>263],

            //E12 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>16,'camera_id'=>364,'slot_number'=>'F12-a','parking_location'=>'Basement -2','tuya_lamp_id'=>392],
            ['block_id'=>16,'camera_id'=>364,'slot_number'=>'F12-b','parking_location'=>'Basement -2','tuya_lamp_id'=>392],
            ['block_id'=>16,'camera_id'=>364,'slot_number'=>'F12-c','parking_location'=>'Basement -2','tuya_lamp_id'=>392],

            //H10 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>17,'camera_id'=>366,'slot_number'=>'G10-a','parking_location'=>'Basement -2','tuya_lamp_id'=>393],
            ['block_id'=>17,'camera_id'=>366,'slot_number'=>'G10-b','parking_location'=>'Basement -2','tuya_lamp_id'=>393],
            ['block_id'=>17,'camera_id'=>366,'slot_number'=>'G10-c','parking_location'=>'Basement -2','tuya_lamp_id'=>393],

            //F10 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>15,'camera_id'=>367,'slot_number'=>'E10-a','parking_location'=>'Basement -2','tuya_lamp_id'=>236],
            ['block_id'=>15,'camera_id'=>367,'slot_number'=>'E10-b','parking_location'=>'Basement -2','tuya_lamp_id'=>236],
            ['block_id'=>15,'camera_id'=>367,'slot_number'=>'E10-c','parking_location'=>'Basement -2','tuya_lamp_id'=>236],

            //H7 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>17,'camera_id'=>368,'slot_number'=>'G07-a','parking_location'=>'Basement -2','tuya_lamp_id'=>286],
            ['block_id'=>17,'camera_id'=>368,'slot_number'=>'G07-b','parking_location'=>'Basement -2','tuya_lamp_id'=>286],
            ['block_id'=>17,'camera_id'=>368,'slot_number'=>'G07-c','parking_location'=>'Basement -2','tuya_lamp_id'=>286],

            //F12 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>15,'camera_id'=>369,'slot_number'=>'E12-a','parking_location'=>'Basement -2','tuya_lamp_id'=>237],

            //E7 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>16,'camera_id'=>370,'slot_number'=>'F07-a','parking_location'=>'Basement -2','tuya_lamp_id'=>394],
            ['block_id'=>16,'camera_id'=>370,'slot_number'=>'F07-b','parking_location'=>'Basement -2','tuya_lamp_id'=>394],
            ['block_id'=>16,'camera_id'=>370,'slot_number'=>'F07-c','parking_location'=>'Basement -2','tuya_lamp_id'=>394],

            //F11 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>15,'camera_id'=>371,'slot_number'=>'E11-a','parking_location'=>'Basement -2','tuya_lamp_id'=>395],
            ['block_id'=>15,'camera_id'=>371,'slot_number'=>'E11-b','parking_location'=>'Basement -2','tuya_lamp_id'=>395],
            ['block_id'=>15,'camera_id'=>371,'slot_number'=>'E11-c','parking_location'=>'Basement -2','tuya_lamp_id'=>395],

            //H8 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>17,'camera_id'=>372,'slot_number'=>'G08-a','parking_location'=>'Basement -2','tuya_lamp_id'=>396],
            ['block_id'=>17,'camera_id'=>372,'slot_number'=>'G08-b','parking_location'=>'Basement -2','tuya_lamp_id'=>396],
            ['block_id'=>17,'camera_id'=>372,'slot_number'=>'G08-c','parking_location'=>'Basement -2','tuya_lamp_id'=>396],

            //B6 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>11,'camera_id'=>373,'slot_number'=>'A06-a','parking_location'=>'Basement -2','tuya_lamp_id'=>128],
            ['block_id'=>11,'camera_id'=>373,'slot_number'=>'A06-b','parking_location'=>'Basement -2','tuya_lamp_id'=>128],
            ['block_id'=>11,'camera_id'=>373,'slot_number'=>'A06-c','parking_location'=>'Basement -2','tuya_lamp_id'=>128],

            //B15 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>11,'camera_id'=>374,'slot_number'=>'A15-c','parking_location'=>'Basement -2','tuya_lamp_id'=>414],

            //A6 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>12,'camera_id'=>375,'slot_number'=>'B06-a','parking_location'=>'Basement -2','tuya_lamp_id'=>142],
            ['block_id'=>12,'camera_id'=>375,'slot_number'=>'B06-b','parking_location'=>'Basement -2','tuya_lamp_id'=>142],
            ['block_id'=>12,'camera_id'=>375,'slot_number'=>'B06-c','parking_location'=>'Basement -2','tuya_lamp_id'=>142],

            //B8 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>11,'camera_id'=>376,'slot_number'=>'A08-a','parking_location'=>'Basement -2','tuya_lamp_id'=>130],
            ['block_id'=>11,'camera_id'=>376,'slot_number'=>'A08-b','parking_location'=>'Basement -2','tuya_lamp_id'=>130],
            ['block_id'=>11,'camera_id'=>376,'slot_number'=>'A08-c','parking_location'=>'Basement -2','tuya_lamp_id'=>130],

            //B7 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>11,'camera_id'=>377,'slot_number'=>'A07-a','parking_location'=>'Basement -2','tuya_lamp_id'=>129],
            ['block_id'=>11,'camera_id'=>377,'slot_number'=>'A07-b','parking_location'=>'Basement -2','tuya_lamp_id'=>129],
            ['block_id'=>11,'camera_id'=>377,'slot_number'=>'A07-c','parking_location'=>'Basement -2','tuya_lamp_id'=>129],

            //B12 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>11,'camera_id'=>379,'slot_number'=>'A12-a','parking_location'=>'Basement -2','tuya_lamp_id'=>416],
            ['block_id'=>11,'camera_id'=>379,'slot_number'=>'A12-b','parking_location'=>'Basement -2','tuya_lamp_id'=>416],
            ['block_id'=>11,'camera_id'=>379,'slot_number'=>'A12-c','parking_location'=>'Basement -2','tuya_lamp_id'=>416],

            //B11 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>11,'camera_id'=>381,'slot_number'=>'A11-a','parking_location'=>'Basement -2','tuya_lamp_id'=>415],
            ['block_id'=>11,'camera_id'=>381,'slot_number'=>'A11-b','parking_location'=>'Basement -2','tuya_lamp_id'=>415],
            ['block_id'=>11,'camera_id'=>381,'slot_number'=>'A11-c','parking_location'=>'Basement -2','tuya_lamp_id'=>415],

            //D9 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>13,'camera_id'=>383,'slot_number'=>'C09-a','parking_location'=>'Basement -2','tuya_lamp_id'=>177],
            ['block_id'=>13,'camera_id'=>383,'slot_number'=>'C09-b','parking_location'=>'Basement -2','tuya_lamp_id'=>177],
            ['block_id'=>13,'camera_id'=>383,'slot_number'=>'C09-c','parking_location'=>'Basement -2','tuya_lamp_id'=>177],

            //C4 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>14,'camera_id'=>384,'slot_number'=>'D04-a','parking_location'=>'Basement -2','tuya_lamp_id'=>207],
            ['block_id'=>14,'camera_id'=>384,'slot_number'=>'D04-b','parking_location'=>'Basement -2','tuya_lamp_id'=>207],
            ['block_id'=>14,'camera_id'=>384,'slot_number'=>'D04-c','parking_location'=>'Basement -2','tuya_lamp_id'=>207],

            //A9 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>12,'camera_id'=>385,'slot_number'=>'B09-a','parking_location'=>'Basement -2','tuya_lamp_id'=>420],
            ['block_id'=>12,'camera_id'=>385,'slot_number'=>'B09-b','parking_location'=>'Basement -2','tuya_lamp_id'=>420],
            ['block_id'=>12,'camera_id'=>385,'slot_number'=>'B09-c','parking_location'=>'Basement -2','tuya_lamp_id'=>420],

            //A12 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>12,'camera_id'=>386,'slot_number'=>'B12-a','parking_location'=>'Basement -2','tuya_lamp_id'=>144],
            ['block_id'=>12,'camera_id'=>386,'slot_number'=>'B12-b','parking_location'=>'Basement -2','tuya_lamp_id'=>144],
            ['block_id'=>12,'camera_id'=>386,'slot_number'=>'B12-c','parking_location'=>'Basement -2','tuya_lamp_id'=>144],

            //C9 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>14,'camera_id'=>387,'slot_number'=>'D09-a','parking_location'=>'Basement -2','tuya_lamp_id'=>208],
            ['block_id'=>14,'camera_id'=>387,'slot_number'=>'D09-b','parking_location'=>'Basement -2','tuya_lamp_id'=>208],
            ['block_id'=>14,'camera_id'=>387,'slot_number'=>'D09-c','parking_location'=>'Basement -2','tuya_lamp_id'=>208],

            //C7 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>14,'camera_id'=>388,'slot_number'=>'D07-a','parking_location'=>'Basement -2','tuya_lamp_id'=>429],
            ['block_id'=>14,'camera_id'=>388,'slot_number'=>'D07-b','parking_location'=>'Basement -2','tuya_lamp_id'=>429],
            ['block_id'=>14,'camera_id'=>388,'slot_number'=>'D07-c','parking_location'=>'Basement -2','tuya_lamp_id'=>429],

            //C11 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>14,'camera_id'=>389,'slot_number'=>'D11-a','parking_location'=>'Basement -2','tuya_lamp_id'=>397],
            ['block_id'=>14,'camera_id'=>389,'slot_number'=>'D11-b','parking_location'=>'Basement -2','tuya_lamp_id'=>397],
            ['block_id'=>14,'camera_id'=>389,'slot_number'=>'D11-c','parking_location'=>'Basement -2','tuya_lamp_id'=>397],

            //C10 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>14,'camera_id'=>390,'slot_number'=>'D10-a','parking_location'=>'Basement -2','tuya_lamp_id'=>209],
            ['block_id'=>14,'camera_id'=>390,'slot_number'=>'D10-b','parking_location'=>'Basement -2','tuya_lamp_id'=>209],
            ['block_id'=>14,'camera_id'=>390,'slot_number'=>'D10-c','parking_location'=>'Basement -2','tuya_lamp_id'=>209],

            //C6 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>14,'camera_id'=>391,'slot_number'=>'D06-a','parking_location'=>'Basement -2','tuya_lamp_id'=>421],
            ['block_id'=>14,'camera_id'=>391,'slot_number'=>'D06-b','parking_location'=>'Basement -2','tuya_lamp_id'=>421],
            ['block_id'=>14,'camera_id'=>391,'slot_number'=>'D06-c','parking_location'=>'Basement -2','tuya_lamp_id'=>421],

            //A13 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>12,'camera_id'=>392,'slot_number'=>'B13-a','parking_location'=>'Basement -2','tuya_lamp_id'=>145],
            ['block_id'=>12,'camera_id'=>392,'slot_number'=>'B13-b','parking_location'=>'Basement -2','tuya_lamp_id'=>145],
            ['block_id'=>12,'camera_id'=>392,'slot_number'=>'B13-c','parking_location'=>'Basement -2','tuya_lamp_id'=>145],

            //D8 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>13,'camera_id'=>393,'slot_number'=>'C08-a','parking_location'=>'Basement -2','tuya_lamp_id'=>176],
            ['block_id'=>13,'camera_id'=>393,'slot_number'=>'C08-b','parking_location'=>'Basement -2','tuya_lamp_id'=>176],
            ['block_id'=>13,'camera_id'=>393,'slot_number'=>'C08-c','parking_location'=>'Basement -2','tuya_lamp_id'=>176],

            //D10 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>13,'camera_id'=>394,'slot_number'=>'C10-a','parking_location'=>'Basement -2','tuya_lamp_id'=>178],
            ['block_id'=>13,'camera_id'=>394,'slot_number'=>'C10-b','parking_location'=>'Basement -2','tuya_lamp_id'=>178],
            ['block_id'=>13,'camera_id'=>394,'slot_number'=>'C10-c','parking_location'=>'Basement -2','tuya_lamp_id'=>178],

            //A11 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>12,'camera_id'=>395,'slot_number'=>'B11-a','parking_location'=>'Basement -2','tuya_lamp_id'=>143],
            ['block_id'=>12,'camera_id'=>395,'slot_number'=>'B11-b','parking_location'=>'Basement -2','tuya_lamp_id'=>143],
            ['block_id'=>12,'camera_id'=>395,'slot_number'=>'B11-c','parking_location'=>'Basement -2','tuya_lamp_id'=>143],

            //D11 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>13,'camera_id'=>396,'slot_number'=>'C11-a','parking_location'=>'Basement -2','tuya_lamp_id'=>179],
            ['block_id'=>13,'camera_id'=>396,'slot_number'=>'C11-b','parking_location'=>'Basement -2','tuya_lamp_id'=>179],
            ['block_id'=>13,'camera_id'=>396,'slot_number'=>'C11-c','parking_location'=>'Basement -2','tuya_lamp_id'=>179],

            //A10 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>12,'camera_id'=>397,'slot_number'=>'B10-a','parking_location'=>'Basement -2','tuya_lamp_id'=>398],
            ['block_id'=>12,'camera_id'=>397,'slot_number'=>'B10-b','parking_location'=>'Basement -2','tuya_lamp_id'=>398],
            ['block_id'=>12,'camera_id'=>397,'slot_number'=>'B10-c','parking_location'=>'Basement -2','tuya_lamp_id'=>398],

            //D4 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>13,'camera_id'=>398,'slot_number'=>'C04-a','parking_location'=>'Basement -2','tuya_lamp_id'=>174],
            ['block_id'=>13,'camera_id'=>398,'slot_number'=>'C04-b','parking_location'=>'Basement -2','tuya_lamp_id'=>174],
            ['block_id'=>13,'camera_id'=>398,'slot_number'=>'C04-c','parking_location'=>'Basement -2','tuya_lamp_id'=>174],

            //D5 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>13,'camera_id'=>399,'slot_number'=>'C05-a','parking_location'=>'Basement -2','tuya_lamp_id'=>175],
            ['block_id'=>13,'camera_id'=>399,'slot_number'=>'C05-b','parking_location'=>'Basement -2','tuya_lamp_id'=>175],
            ['block_id'=>13,'camera_id'=>399,'slot_number'=>'C05-c','parking_location'=>'Basement -2','tuya_lamp_id'=>175],

            //D6 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>13,'camera_id'=>400,'slot_number'=>'C06-a','parking_location'=>'Basement -2','tuya_lamp_id'=>426],
            ['block_id'=>13,'camera_id'=>400,'slot_number'=>'C06-b','parking_location'=>'Basement -2','tuya_lamp_id'=>426],
            ['block_id'=>13,'camera_id'=>400,'slot_number'=>'C06-c','parking_location'=>'Basement -2','tuya_lamp_id'=>426],

            //C1 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>14,'camera_id'=>401,'slot_number'=>'D01-a','parking_location'=>'Basement -2','tuya_lamp_id'=>423],
            ['block_id'=>14,'camera_id'=>401,'slot_number'=>'D01-b','parking_location'=>'Basement -2','tuya_lamp_id'=>423],
            ['block_id'=>14,'camera_id'=>401,'slot_number'=>'D01-c','parking_location'=>'Basement -2','tuya_lamp_id'=>423],

            //B2 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>11,'camera_id'=>402,'slot_number'=>'A04-a','parking_location'=>'Basement -2','tuya_lamp_id'=>424], 
            ['block_id'=>12,'camera_id'=>402,'slot_number'=>'B04-b','parking_location'=>'Basement -2','tuya_lamp_id'=>424],  

            //B4 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>11,'camera_id'=>403,'slot_number'=>'A03-a','parking_location'=>'Basement -2','tuya_lamp_id'=>422],  
            ['block_id'=>12,'camera_id'=>403,'slot_number'=>'B03-a','parking_location'=>'Basement -2','tuya_lamp_id'=>422],  

            //A8 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>12,'camera_id'=>404,'slot_number'=>'B08-a','parking_location'=>'Basement -2','tuya_lamp_id'=>419],
            ['block_id'=>12,'camera_id'=>404,'slot_number'=>'B08-b','parking_location'=>'Basement -2','tuya_lamp_id'=>419],
            ['block_id'=>12,'camera_id'=>404,'slot_number'=>'B08-c','parking_location'=>'Basement -2','tuya_lamp_id'=>419],

            //C2 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>14,'camera_id'=>405,'slot_number'=>'D02-a','parking_location'=>'Basement -2','tuya_lamp_id'=>206],
            ['block_id'=>14,'camera_id'=>405,'slot_number'=>'D02-b','parking_location'=>'Basement -2','tuya_lamp_id'=>206],
            ['block_id'=>14,'camera_id'=>405,'slot_number'=>'D02-c','parking_location'=>'Basement -2','tuya_lamp_id'=>206],

            //A5 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>12,'camera_id'=>406,'slot_number'=>'B05-a','parking_location'=>'Basement -2','tuya_lamp_id'=>141],
            ['block_id'=>12,'camera_id'=>406,'slot_number'=>'B05-b','parking_location'=>'Basement -2','tuya_lamp_id'=>141],
            ['block_id'=>12,'camera_id'=>null,'slot_number'=>'B05-not-slot','parking_location'=>'Basement -2','tuya_lamp_id'=>null],

            //A14 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>12,'camera_id'=>407,'slot_number'=>'B14-a','parking_location'=>'Basement -2','tuya_lamp_id'=>146],
            ['block_id'=>12,'camera_id'=>407,'slot_number'=>'B14-b','parking_location'=>'Basement -2','tuya_lamp_id'=>146],
            ['block_id'=>12,'camera_id'=>407,'slot_number'=>'B14-c','parking_location'=>'Basement -2','tuya_lamp_id'=>146],

            //N17 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>24,'camera_id'=>408,'slot_number'=>'P17-a','parking_location'=>'Basement -2','tuya_lamp_id'=>378],
            ['block_id'=>24,'camera_id'=>408,'slot_number'=>'P17-b','parking_location'=>'Basement -2','tuya_lamp_id'=>378],
            ['block_id'=>24,'camera_id'=>408,'slot_number'=>'P17-c','parking_location'=>'Basement -2','tuya_lamp_id'=>378],

            //P16 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>23,'camera_id'=>409,'slot_number'=>'N16-a','parking_location'=>'Basement -2','tuya_lamp_id'=>366],
            ['block_id'=>23,'camera_id'=>null,'slot_number'=>'not-slot','parking_location'=>'Basement -2','tuya_lamp_id'=>null],
            ['block_id'=>23,'camera_id'=>409,'slot_number'=>'N16-c','parking_location'=>'Basement -2','tuya_lamp_id'=>366],

            //P17 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>23,'camera_id'=>410,'slot_number'=>'N17-a','parking_location'=>'Basement -2','tuya_lamp_id'=>367],
            ['block_id'=>23,'camera_id'=>410,'slot_number'=>'N17-b','parking_location'=>'Basement -2','tuya_lamp_id'=>367],
            ['block_id'=>23,'camera_id'=>410,'slot_number'=>'N17-c','parking_location'=>'Basement -2','tuya_lamp_id'=>367],

            //L17 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>22,'camera_id'=>411,'slot_number'=>'M17-a','parking_location'=>'Basement -2','tuya_lamp_id'=>350],
            ['block_id'=>22,'camera_id'=>411,'slot_number'=>'M17-b','parking_location'=>'Basement -2','tuya_lamp_id'=>350],
            ['block_id'=>22,'camera_id'=>411,'slot_number'=>'M17-c','parking_location'=>'Basement -2','tuya_lamp_id'=>350],

            //N16 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>24,'camera_id'=>414,'slot_number'=>'P16-a','parking_location'=>'Basement -2','tuya_lamp_id'=>377],
            ['block_id'=>24,'camera_id'=>414,'slot_number'=>'P16-b','parking_location'=>'Basement -2','tuya_lamp_id'=>377],
            ['block_id'=>24,'camera_id'=>414,'slot_number'=>'P16-c','parking_location'=>'Basement -2','tuya_lamp_id'=>377],

            //N15 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>24,'camera_id'=>415,'slot_number'=>'P15-b','parking_location'=>'Basement -2','tuya_lamp_id'=>376],
            ['block_id'=>24,'camera_id'=>415,'slot_number'=>'P15-c-not-slot','parking_location'=>'Basement -2','tuya_lamp_id'=>376],

            //N18 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>24,'camera_id'=>416,'slot_number'=>'P18-a','parking_location'=>'Basement -2','tuya_lamp_id'=>379],
            ['block_id'=>24,'camera_id'=>416,'slot_number'=>'P18-b','parking_location'=>'Basement -2','tuya_lamp_id'=>379],
            ['block_id'=>24,'camera_id'=>416,'slot_number'=>'P18-c','parking_location'=>'Basement -2','tuya_lamp_id'=>379],

            //M18 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>21,'camera_id'=>417,'slot_number'=>'L18-a','parking_location'=>'Basement -2','tuya_lamp_id'=>336],
            ['block_id'=>21,'camera_id'=>417,'slot_number'=>'L18-b','parking_location'=>'Basement -2','tuya_lamp_id'=>336],

            //M15 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>21,'camera_id'=>418,'slot_number'=>'L15-a','parking_location'=>'Basement -2','tuya_lamp_id'=>334],
            ['block_id'=>21,'camera_id'=>418,'slot_number'=>'L15-b','parking_location'=>'Basement -2','tuya_lamp_id'=>334],

            //P18 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>23,'camera_id'=>419,'slot_number'=>'N18-a','parking_location'=>'Basement -2','tuya_lamp_id'=>368],
            ['block_id'=>23,'camera_id'=>419,'slot_number'=>'N18-b','parking_location'=>'Basement -2','tuya_lamp_id'=>368],
            ['block_id'=>23,'camera_id'=>419,'slot_number'=>'N18-c','parking_location'=>'Basement -2','tuya_lamp_id'=>368],

            //L18 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>22,'camera_id'=>420,'slot_number'=>'M18-a','parking_location'=>'Basement -2','tuya_lamp_id'=>351],
            ['block_id'=>22,'camera_id'=>420,'slot_number'=>'M18-b','parking_location'=>'Basement -2','tuya_lamp_id'=>351],
            ['block_id'=>22,'camera_id'=>420,'slot_number'=>'M18-c','parking_location'=>'Basement -2','tuya_lamp_id'=>351],

            //P15 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>23,'camera_id'=>421,'slot_number'=>'N15-a','parking_location'=>'Basement -2','tuya_lamp_id'=>365],
            ['block_id'=>23,'camera_id'=>421,'slot_number'=>'N15-b','parking_location'=>'Basement -2','tuya_lamp_id'=>365],
            ['block_id'=>23,'camera_id'=>421,'slot_number'=>'N15-c','parking_location'=>'Basement -2','tuya_lamp_id'=>365],

            //G22 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>18,'camera_id'=>null,'slot_number'=>'H23-not-slot','parking_location'=>'Basement -2','tuya_lamp_id'=>null],
            ['block_id'=>18,'camera_id'=>null,'slot_number'=>'H23-not-slot','parking_location'=>'Basement -2','tuya_lamp_id'=>null],

            //G21 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>18,'camera_id'=>422,'slot_number'=>'H22-a','parking_location'=>'Basement -2','tuya_lamp_id'=>399],
            ['block_id'=>18,'camera_id'=>422,'slot_number'=>'H22-b','parking_location'=>'Basement -2','tuya_lamp_id'=>399],

            //H19-J19 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>18,'camera_id'=>424,'slot_number'=>'HJ20-a','parking_location'=>'Basement -2','tuya_lamp_id'=>310],   
            ['block_id'=>18,'camera_id'=>424,'slot_number'=>'HJ20-b','parking_location'=>'Basement -2','tuya_lamp_id'=>310],   
            ['block_id'=>18,'camera_id'=>424,'slot_number'=>'HJ20-c','parking_location'=>'Basement -2','tuya_lamp_id'=>310],   

            //G20 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>18,'camera_id'=>425,'slot_number'=>'H20-a','parking_location'=>'Basement -2','tuya_lamp_id'=>400],    

            //L19-M19 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>21,'camera_id'=>426,'slot_number'=>'LM20-a','parking_location'=>'Basement -2','tuya_lamp_id'=>431],    
            ['block_id'=>21,'camera_id'=>426,'slot_number'=>'LM20-b','parking_location'=>'Basement -2','tuya_lamp_id'=>431],   
            ['block_id'=>21,'camera_id'=>426,'slot_number'=>'LM20-c','parking_location'=>'Basement -2','tuya_lamp_id'=>431],   

            //H22 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>17,'camera_id'=>427,'slot_number'=>'G22-a','parking_location'=>'Basement -2','tuya_lamp_id'=>288],
            ['block_id'=>17,'camera_id'=>427,'slot_number'=>'G22-b','parking_location'=>'Basement -2','tuya_lamp_id'=>288],
            ['block_id'=>17,'camera_id'=>427,'slot_number'=>'G22-c','parking_location'=>'Basement -2','tuya_lamp_id'=>288],

            //H20 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>17,'camera_id'=>428,'slot_number'=>'G20-a','parking_location'=>'Basement -2','tuya_lamp_id'=>401],
            ['block_id'=>17,'camera_id'=>428,'slot_number'=>'G20-b','parking_location'=>'Basement -2','tuya_lamp_id'=>401],
            ['block_id'=>17,'camera_id'=>428,'slot_number'=>'G20-c','parking_location'=>'Basement -2','tuya_lamp_id'=>401],

            //E20 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>16,'camera_id'=>429,'slot_number'=>'F20-a','parking_location'=>'Basement -2','tuya_lamp_id'=>266],
            ['block_id'=>16,'camera_id'=>429,'slot_number'=>'F20-b','parking_location'=>'Basement -2','tuya_lamp_id'=>266],
            ['block_id'=>16,'camera_id'=>429,'slot_number'=>'F20-c','parking_location'=>'Basement -2','tuya_lamp_id'=>266],

            //H21 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>17,'camera_id'=>430,'slot_number'=>'G21-a','parking_location'=>'Basement -2','tuya_lamp_id'=>402],
            ['block_id'=>17,'camera_id'=>430,'slot_number'=>'G21-b','parking_location'=>'Basement -2','tuya_lamp_id'=>402],
            ['block_id'=>17,'camera_id'=>430,'slot_number'=>'G21-c','parking_location'=>'Basement -2','tuya_lamp_id'=>402],

            //E24 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>16,'camera_id'=>431,'slot_number'=>'F24-a','parking_location'=>'Basement -2','tuya_lamp_id'=>269],
            ['block_id'=>16,'camera_id'=>431,'slot_number'=>'F24-b','parking_location'=>'Basement -2','tuya_lamp_id'=>269],

            //L15 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>22,'camera_id'=>433,'slot_number'=>'M15-a','parking_location'=>'Basement -2','tuya_lamp_id'=>348],
            ['block_id'=>22,'camera_id'=>433,'slot_number'=>'M15-b','parking_location'=>'Basement -2','tuya_lamp_id'=>348],
            ['block_id'=>22,'camera_id'=>433,'slot_number'=>'M15-c','parking_location'=>'Basement -2','tuya_lamp_id'=>348],

            //M17 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>21,'camera_id'=>434,'slot_number'=>'L17-a','parking_location'=>'Basement -2','tuya_lamp_id'=>403],
            ['block_id'=>21,'camera_id'=>434,'slot_number'=>'L17-b','parking_location'=>'Basement -2','tuya_lamp_id'=>403],

            //M19-N19 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>22,'camera_id'=>435,'slot_number'=>'MN20-a','parking_location'=>'Basement -2','tuya_lamp_id'=>352],    
            ['block_id'=>22,'camera_id'=>435,'slot_number'=>'MN20-b','parking_location'=>'Basement -2','tuya_lamp_id'=>352],    
            ['block_id'=>22,'camera_id'=>435,'slot_number'=>'MN20-c','parking_location'=>'Basement -2','tuya_lamp_id'=>352],    

            //J19-K19 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>19,'camera_id'=>436,'slot_number'=>'JK20-a','parking_location'=>'Basement -2','tuya_lamp_id'=>311],    
            ['block_id'=>19,'camera_id'=>436,'slot_number'=>'JK20-b','parking_location'=>'Basement -2','tuya_lamp_id'=>311],    
            ['block_id'=>19,'camera_id'=>436,'slot_number'=>'JK20-c','parking_location'=>'Basement -2','tuya_lamp_id'=>311],    

            //E21 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>16,'camera_id'=>437,'slot_number'=>'F21-a','parking_location'=>'Basement -2','tuya_lamp_id'=>267],
            ['block_id'=>16,'camera_id'=>437,'slot_number'=>'F21-b','parking_location'=>'Basement -2','tuya_lamp_id'=>267],
            ['block_id'=>16,'camera_id'=>437,'slot_number'=>'F21-c','parking_location'=>'Basement -2','tuya_lamp_id'=>267],

            //K19-L19 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>20,'camera_id'=>438,'slot_number'=>'KL20-a','parking_location'=>'Basement -2','tuya_lamp_id'=>323],    
            ['block_id'=>20,'camera_id'=>438,'slot_number'=>'KL20-b','parking_location'=>'Basement -2','tuya_lamp_id'=>323],    
            ['block_id'=>20,'camera_id'=>438,'slot_number'=>'KL20-c','parking_location'=>'Basement -2','tuya_lamp_id'=>323],    

            //E22 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>16,'camera_id'=>439,'slot_number'=>'F22-a','parking_location'=>'Basement -2','tuya_lamp_id'=>268],
            ['block_id'=>16,'camera_id'=>439,'slot_number'=>'F22-b','parking_location'=>'Basement -2','tuya_lamp_id'=>268],
            ['block_id'=>16,'camera_id'=>439,'slot_number'=>'F22-c','parking_location'=>'Basement -2','tuya_lamp_id'=>268],

            //E25 piller camera'parking_location'=>'Basement -2',
            ['block_id'=>16,'camera_id'=>440,'slot_number'=>'F25-a','parking_location'=>'Basement -2','tuya_lamp_id'=>270],
            ['block_id'=>16,'camera_id'=>440,'slot_number'=>'F25-b','parking_location'=>'Basement -2','tuya_lamp_id'=>270],

            // C23 Rack slots
            //D19 pilar Camera
            ['block_id'=>null,'camera_id'=>null,'slot_number'=>'not-slot','parking_location'=>'Basement -2','tuya_lamp_id'=>null],  

            //F16 Pilar Camera
            ['block_id'=>15,'camera_id'=>154,'slot_number'=>'E16-a,','parking_location'=>'Basement -2','tuya_lamp_id'=>404],  
            ['block_id'=>15,'camera_id'=>154,'slot_number'=>'E16-b,','parking_location'=>'Basement -2','tuya_lamp_id'=>404],  
            ['block_id'=>15,'camera_id'=>154,'slot_number'=>'E16-c,','parking_location'=>'Basement -2','tuya_lamp_id'=>404],  

            //A22 pilar Camera
            ['block_id'=>12,'camera_id'=>155,'slot_number'=>'B22-a','parking_location'=>'Basement -2','tuya_lamp_id'=>154],
            ['block_id'=>12,'camera_id'=>155,'slot_number'=>'B22-b','parking_location'=>'Basement -2','tuya_lamp_id'=>154],
            ['block_id'=>12,'camera_id'=>155,'slot_number'=>'B22-c','parking_location'=>'Basement -2','tuya_lamp_id'=>154],

            //F19 Pilar Camera
            ['block_id'=>15,'camera_id'=>157,'slot_number'=>'E19-a','parking_location'=>'Basement -2','tuya_lamp_id'=>238],
            ['block_id'=>15,'camera_id'=>157,'slot_number'=>'E19-b','parking_location'=>'Basement -2','tuya_lamp_id'=>238],
            ['block_id'=>15,'camera_id'=>157,'slot_number'=>'E19-c','parking_location'=>'Basement -2','tuya_lamp_id'=>238],

            //F15 Pilar Camera
            ['block_id'=>15,'camera_id'=>158,'slot_number'=>'E15-a','parking_location'=>'Basement -2','tuya_lamp_id'=>405],
            ['block_id'=>15,'camera_id'=>158,'slot_number'=>'E15-b','parking_location'=>'Basement -2','tuya_lamp_id'=>405],
            ['block_id'=>15,'camera_id'=>158,'slot_number'=>'E15-c','parking_location'=>'Basement -2','tuya_lamp_id'=>405],

            //F25 Pilar Camera
            ['block_id'=>15,'camera_id'=>159,'slot_number'=>'E25-a','parking_location'=>'Basement -2','tuya_lamp_id'=>243],
            ['block_id'=>15,'camera_id'=>159,'slot_number'=>'E25-b','parking_location'=>'Basement -2','tuya_lamp_id'=>243],
            ['block_id'=>15,'camera_id'=>159,'slot_number'=>'E25-c','parking_location'=>'Basement -2','tuya_lamp_id'=>243],

            //A15 Pilar Camera
            ['block_id'=>12,'camera_id'=>160,'slot_number'=>'B15-a','parking_location'=>'Basement -2','tuya_lamp_id'=>147],
            ['block_id'=>12,'camera_id'=>160,'slot_number'=>'B15-b','parking_location'=>'Basement -2','tuya_lamp_id'=>147],
            ['block_id'=>12,'camera_id'=>160,'slot_number'=>'B15-c','parking_location'=>'Basement -2','tuya_lamp_id'=>147],

            //F24 Pilar Camera
            ['block_id'=>15,'camera_id'=>161,'slot_number'=>'E24-a','parking_location'=>'Basement -2','tuya_lamp_id'=>242],
            ['block_id'=>15,'camera_id'=>161,'slot_number'=>'E24-b','parking_location'=>'Basement -2','tuya_lamp_id'=>242],
            ['block_id'=>15,'camera_id'=>161,'slot_number'=>'E24-c','parking_location'=>'Basement -2','tuya_lamp_id'=>242],

            //F18 Pilar Camera
            ['block_id'=>15,'camera_id'=>162,'slot_number'=>'E18-a','parking_location'=>'Basement -2','tuya_lamp_id'=>406],

            //A19 Pilar Camera
            ['block_id'=>12,'camera_id'=>163,'slot_number'=>'B19-a','parking_location'=>'Basement -2','tuya_lamp_id'=>151],
            ['block_id'=>12,'camera_id'=>163,'slot_number'=>'B19-b','parking_location'=>'Basement -2','tuya_lamp_id'=>151],
            ['block_id'=>12,'camera_id'=>163,'slot_number'=>'B19-c','parking_location'=>'Basement -2','tuya_lamp_id'=>151],

            //F21 Pilar Camera
            ['block_id'=>15,'camera_id'=>164,'slot_number'=>'E21-a','parking_location'=>'Basement -2','tuya_lamp_id'=>240],
            ['block_id'=>15,'camera_id'=>164,'slot_number'=>'E21-b','parking_location'=>'Basement -2','tuya_lamp_id'=>240],
            ['block_id'=>15,'camera_id'=>164,'slot_number'=>'E21-c','parking_location'=>'Basement -2','tuya_lamp_id'=>240],

            //D22 Pilar Camera
            ['block_id'=>13,'camera_id'=>165,'slot_number'=>'C22-a','parking_location'=>'Basement -2','tuya_lamp_id'=>189],
            ['block_id'=>13,'camera_id'=>165,'slot_number'=>'C22-b','parking_location'=>'Basement -2','tuya_lamp_id'=>189],
            ['block_id'=>13,'camera_id'=>165,'slot_number'=>'C22-c','parking_location'=>'Basement -2','tuya_lamp_id'=>189],

            //D26 Pilar Camera
            ['block_id'=>13,'camera_id'=>166,'slot_number'=>'C26-a','parking_location'=>'Basement -2','tuya_lamp_id'=>192],
            ['block_id'=>13,'camera_id'=>166,'slot_number'=>'C26-b','parking_location'=>'Basement -2','tuya_lamp_id'=>192],
            ['block_id'=>13,'camera_id'=>166,'slot_number'=>'C26-c','parking_location'=>'Basement -2','tuya_lamp_id'=>192],

            //D25 Pilar Camera
            ['block_id'=>13,'camera_id'=>167,'slot_number'=>'C25-a','parking_location'=>'Basement -2','tuya_lamp_id'=>191],
            ['block_id'=>13,'camera_id'=>167,'slot_number'=>'C25-b','parking_location'=>'Basement -2','tuya_lamp_id'=>191],
            ['block_id'=>13,'camera_id'=>167,'slot_number'=>'C25-c','parking_location'=>'Basement -2','tuya_lamp_id'=>191],

            //C16 Pilar Camera
            ['block_id'=>14,'camera_id'=>168,'slot_number'=>'D16-a','parking_location'=>'Basement -2','tuya_lamp_id'=>216],
            ['block_id'=>14,'camera_id'=>168,'slot_number'=>'D16-b','parking_location'=>'Basement -2','tuya_lamp_id'=>216],
            ['block_id'=>14,'camera_id'=>168,'slot_number'=>'D16-c','parking_location'=>'Basement -2','tuya_lamp_id'=>216],

            //C17 Pilar Camera
            ['block_id'=>14,'camera_id'=>169,'slot_number'=>'D17-a','parking_location'=>'Basement -2','tuya_lamp_id'=>417],

            //C15 Pilar Camera
            ['block_id'=>14,'camera_id'=>170,'slot_number'=>'D15-a','parking_location'=>'Basement -2','tuya_lamp_id'=>212],
            ['block_id'=>14,'camera_id'=>170,'slot_number'=>'D15-b','parking_location'=>'Basement -2','tuya_lamp_id'=>212],
            ['block_id'=>14,'camera_id'=>170,'slot_number'=>'D15-c','parking_location'=>'Basement -2','tuya_lamp_id'=>212],

            //D24 Pilar Camera
            ['block_id'=>13,'camera_id'=>171,'slot_number'=>'C24-a','parking_location'=>'Basement -2','tuya_lamp_id'=>190],
            ['block_id'=>13,'camera_id'=>171,'slot_number'=>'C24-b','parking_location'=>'Basement -2','tuya_lamp_id'=>190],
            ['block_id'=>13,'camera_id'=>171,'slot_number'=>'C24-c','parking_location'=>'Basement -2','tuya_lamp_id'=>190],

            //C19 Pilar Camera
            ['block_id'=>14,'camera_id'=>172,'slot_number'=>'D19-a','parking_location'=>'Basement -2','tuya_lamp_id'=>214],
            ['block_id'=>14,'camera_id'=>172,'slot_number'=>'D19-b','parking_location'=>'Basement -2','tuya_lamp_id'=>214],
            ['block_id'=>14,'camera_id'=>172,'slot_number'=>'D19-c','parking_location'=>'Basement -2','tuya_lamp_id'=>214],

            //C25 Pilar Camera
            ['block_id'=>14,'camera_id'=>173,'slot_number'=>'D25-a','parking_location'=>'Basement -2','tuya_lamp_id'=>218],
            ['block_id'=>14,'camera_id'=>173,'slot_number'=>'D25-b','parking_location'=>'Basement -2','tuya_lamp_id'=>218],
            ['block_id'=>14,'camera_id'=>173,'slot_number'=>'D25-c','parking_location'=>'Basement -2','tuya_lamp_id'=>218],

            //C20 Pilar Camera
            ['block_id'=>14,'camera_id'=>174,'slot_number'=>'D20-a','parking_location'=>'Basement -2','tuya_lamp_id'=>215],
            ['block_id'=>14,'camera_id'=>174,'slot_number'=>'D20-b','parking_location'=>'Basement -2','tuya_lamp_id'=>215],
            ['block_id'=>14,'camera_id'=>174,'slot_number'=>'D20-c','parking_location'=>'Basement -2','tuya_lamp_id'=>215],

            //C24 Pilar Camera
            ['block_id'=>14,'camera_id'=>175,'slot_number'=>'D24-a','parking_location'=>'Basement -2','tuya_lamp_id'=>217],
            ['block_id'=>14,'camera_id'=>175,'slot_number'=>'D24-b','parking_location'=>'Basement -2','tuya_lamp_id'=>217],
            ['block_id'=>14,'camera_id'=>175,'slot_number'=>'D24-c','parking_location'=>'Basement -2','tuya_lamp_id'=>217],

            //C21 Pilar Camera
            ['block_id'=>14,'camera_id'=>176,'slot_number'=>'D21-a','parking_location'=>'Basement -2','tuya_lamp_id'=>216],
            ['block_id'=>14,'camera_id'=>176,'slot_number'=>'D21-b','parking_location'=>'Basement -2','tuya_lamp_id'=>216],
            ['block_id'=>14,'camera_id'=>176,'slot_number'=>'D21-c','parking_location'=>'Basement -2','tuya_lamp_id'=>216],

            //D15 Pilar Camera
            ['block_id'=>13,'camera_id'=>177,'slot_number'=>'C15-a','parking_location'=>'Basement -2','tuya_lamp_id'=>183],
            ['block_id'=>13,'camera_id'=>177,'slot_number'=>'C15-b','parking_location'=>'Basement -2','tuya_lamp_id'=>183],
            ['block_id'=>13,'camera_id'=>177,'slot_number'=>'C15-c','parking_location'=>'Basement -2','tuya_lamp_id'=>183],

            //F17 piller camera
            ['block_id'=>15,'camera_id'=>179,'slot_number'=>'E17-a','parking_location'=>'Basement -2','tuya_lamp_id'=>408],
            ['block_id'=>15,'camera_id'=>179,'slot_number'=>'E17-b','parking_location'=>'Basement -2','tuya_lamp_id'=>408],
            ['block_id'=>15,'camera_id'=>179,'slot_number'=>'E17-c','parking_location'=>'Basement -2','tuya_lamp_id'=>408],

            //D18 piller camera
            ['block_id'=>13,'camera_id'=>180,'slot_number'=>'C18-a','parking_location'=>'Basement -2','tuya_lamp_id'=>186],
            ['block_id'=>13,'camera_id'=>180,'slot_number'=>'C18-b','parking_location'=>'Basement -2','tuya_lamp_id'=>186],
            ['block_id'=>13,'camera_id'=>180,'slot_number'=>'C18-c','parking_location'=>'Basement -2','tuya_lamp_id'=>186],

            //A21 piller camera
            ['block_id'=>12,'camera_id'=>181,'slot_number'=>'B21-a','parking_location'=>'Basement -2','tuya_lamp_id'=>153],
            ['block_id'=>12,'camera_id'=>181,'slot_number'=>'B21-b','parking_location'=>'Basement -2','tuya_lamp_id'=>153],
            ['block_id'=>12,'camera_id'=>181,'slot_number'=>'B21-c','parking_location'=>'Basement -2','tuya_lamp_id'=>153],

            //D16 piller camera
            ['block_id'=>13,'camera_id'=>182,'slot_number'=>'C16-a','parking_location'=>'Basement -2','tuya_lamp_id'=>184],
            ['block_id'=>13,'camera_id'=>182,'slot_number'=>'C16-b','parking_location'=>'Basement -2','tuya_lamp_id'=>184],
            ['block_id'=>13,'camera_id'=>182,'slot_number'=>'C16-c','parking_location'=>'Basement -2','tuya_lamp_id'=>184],

            //D20 piller camera
            ['block_id'=>13,'camera_id'=>183,'slot_number'=>'C20-a','parking_location'=>'Basement -2','tuya_lamp_id'=>187],
            ['block_id'=>13,'camera_id'=>183,'slot_number'=>'C20-b','parking_location'=>'Basement -2','tuya_lamp_id'=>187],
            ['block_id'=>13,'camera_id'=>183,'slot_number'=>'C20-c','parking_location'=>'Basement -2','tuya_lamp_id'=>187],

            //D17 piller camera
            ['block_id'=>13,'camera_id'=>184,'slot_number'=>'C17-a','parking_location'=>'Basement -2','tuya_lamp_id'=>185],
            ['block_id'=>13,'camera_id'=>184,'slot_number'=>'C17-b','parking_location'=>'Basement -2','tuya_lamp_id'=>185],
            ['block_id'=>13,'camera_id'=>184,'slot_number'=>'C17-c','parking_location'=>'Basement -2','tuya_lamp_id'=>185],

            //A18 piller camera
            ['block_id'=>12,'camera_id'=>185,'slot_number'=>'B18-a','parking_location'=>'Basement -2','tuya_lamp_id'=>150],
            ['block_id'=>12,'camera_id'=>185,'slot_number'=>'B18-b','parking_location'=>'Basement -2','tuya_lamp_id'=>150],
            ['block_id'=>12,'camera_id'=>185,'slot_number'=>'B18-c','parking_location'=>'Basement -2','tuya_lamp_id'=>150],

            //A16 piller camera
            ['block_id'=>12,'camera_id'=>186,'slot_number'=>'B16-a','parking_location'=>'Basement -2','tuya_lamp_id'=>148],
            ['block_id'=>12,'camera_id'=>186,'slot_number'=>'B16-b','parking_location'=>'Basement -2','tuya_lamp_id'=>148],
            ['block_id'=>12,'camera_id'=>186,'slot_number'=>'B16-c','parking_location'=>'Basement -2','tuya_lamp_id'=>148],

            //A20 piller camera
            ['block_id'=>12,'camera_id'=>187,'slot_number'=>'B20-a','parking_location'=>'Basement -2','tuya_lamp_id'=>152],
            ['block_id'=>12,'camera_id'=>187,'slot_number'=>'B20-b','parking_location'=>'Basement -2','tuya_lamp_id'=>152],
            ['block_id'=>12,'camera_id'=>187,'slot_number'=>'B20-c','parking_location'=>'Basement -2','tuya_lamp_id'=>152],

            //A17 piller camera
            ['block_id'=>12,'camera_id'=>188,'slot_number'=>'B17-a','parking_location'=>'Basement -2','tuya_lamp_id'=>149],
            ['block_id'=>12,'camera_id'=>188,'slot_number'=>'B17-b','parking_location'=>'Basement -2','tuya_lamp_id'=>149],
            ['block_id'=>12,'camera_id'=>188,'slot_number'=>'B17-c','parking_location'=>'Basement -2','tuya_lamp_id'=>149],

            //D21 piller camera
            ['block_id'=>13,'camera_id'=>191,'slot_number'=>'C21-a','parking_location'=>'Basement -2','tuya_lamp_id'=>188],
            ['block_id'=>13,'camera_id'=>191,'slot_number'=>'C21-b','parking_location'=>'Basement -2','tuya_lamp_id'=>188],
            ['block_id'=>13,'camera_id'=>191,'slot_number'=>'C21-c','parking_location'=>'Basement -2','tuya_lamp_id'=>188],

            // Rack p03 slots mapping

            //N4 piller Camera
            ['block_id'=>24,'camera_id'=>193,'slot_number'=>'P04-a','parking_location'=>'Basement -2','tuya_lamp_id'=>370],
            ['block_id'=>24,'camera_id'=>193,'slot_number'=>'P04-b','parking_location'=>'Basement -2','tuya_lamp_id'=>370],

            //N5 piller Camera
            ['block_id'=>24,'camera_id'=>194,'slot_number'=>'P05-a','parking_location'=>'Basement -2','tuya_lamp_id'=>371],
            ['block_id'=>24,'camera_id'=>194,'slot_number'=>'P05-b','parking_location'=>'Basement -2','tuya_lamp_id'=>371],
            ['block_id'=>24,'camera_id'=>194,'slot_number'=>'P05-c','parking_location'=>'Basement -2','tuya_lamp_id'=>371],

            //N6 piller Camera
            ['block_id'=>24,'camera_id'=>195,'slot_number'=>'P06-a','parking_location'=>'Basement -2','tuya_lamp_id'=>372],
            ['block_id'=>24,'camera_id'=>195,'slot_number'=>'P06-b','parking_location'=>'Basement -2','tuya_lamp_id'=>372],
            ['block_id'=>24,'camera_id'=>195,'slot_number'=>'P06-c','parking_location'=>'Basement -2','tuya_lamp_id'=>372],

            //P1 piller Camera
            ['block_id'=>23,'camera_id'=>196,'slot_number'=>'N01-a','parking_location'=>'Basement -2','tuya_lamp_id'=>353],
            ['block_id'=>23,'camera_id'=>196,'slot_number'=>'N01-b','parking_location'=>'Basement -2','tuya_lamp_id'=>353],
            ['block_id'=>23,'camera_id'=>196,'slot_number'=>'N01-c','parking_location'=>'Basement -2','tuya_lamp_id'=>353],

            //P2 piller Camera
            ['block_id'=>23,'camera_id'=>197,'slot_number'=>'N02-a','parking_location'=>'Basement -2','tuya_lamp_id'=>354],
            ['block_id'=>23,'camera_id'=>197,'slot_number'=>'N02-b','parking_location'=>'Basement -2','tuya_lamp_id'=>354],
            ['block_id'=>23,'camera_id'=>197,'slot_number'=>'N02-c','parking_location'=>'Basement -2','tuya_lamp_id'=>354],

            //P3 piller Camera
            ['block_id'=>23,'camera_id'=>198,'slot_number'=>'N03-a','parking_location'=>'Basement -2','tuya_lamp_id'=>355],
            ['block_id'=>23,'camera_id'=>198,'slot_number'=>'N03-b','parking_location'=>'Basement -2','tuya_lamp_id'=>355],
            ['block_id'=>23,'camera_id'=>198,'slot_number'=>'N03-c','parking_location'=>'Basement -2','tuya_lamp_id'=>355],

            //P4 piller Camera
            ['block_id'=>23,'camera_id'=>199,'slot_number'=>'N04-a','parking_location'=>'Basement -2','tuya_lamp_id'=>356],
            ['block_id'=>23,'camera_id'=>199,'slot_number'=>'N04-b','parking_location'=>'Basement -2','tuya_lamp_id'=>356],
            ['block_id'=>23,'camera_id'=>199,'slot_number'=>'N04-c','parking_location'=>'Basement -2','tuya_lamp_id'=>356],

            //P5 piller Camera
            ['block_id'=>23,'camera_id'=>200,'slot_number'=>'N05-a','parking_location'=>'Basement -2','tuya_lamp_id'=>357],
            ['block_id'=>23,'camera_id'=>200,'slot_number'=>'N05-b','parking_location'=>'Basement -2','tuya_lamp_id'=>357],
            ['block_id'=>23,'camera_id'=>200,'slot_number'=>'N05-c','parking_location'=>'Basement -2','tuya_lamp_id'=>357],

            //M1 piller Camera
            ['block_id'=>21,'camera_id'=>203,'slot_number'=>'L01-a','parking_location'=>'Basement -2','tuya_lamp_id'=>324],
            ['block_id'=>21,'camera_id'=>203,'slot_number'=>'L01-b','parking_location'=>'Basement -2','tuya_lamp_id'=>324],
            ['block_id'=>21,'camera_id'=>203,'slot_number'=>'L01-c','parking_location'=>'Basement -2','tuya_lamp_id'=>324],

            //M2 piller Camera
            ['block_id'=>21,'camera_id'=>204,'slot_number'=>'L02-a','parking_location'=>'Basement -2','tuya_lamp_id'=>325],
            ['block_id'=>21,'camera_id'=>204,'slot_number'=>'L02-b','parking_location'=>'Basement -2','tuya_lamp_id'=>325],
            ['block_id'=>21,'camera_id'=>204,'slot_number'=>'L02-c','parking_location'=>'Basement -2','tuya_lamp_id'=>325],

            //Rack K02 slots mapping

            //G1 piller Camera
            ['block_id'=>18,'camera_id'=>207,'slot_number'=>'H01-a','parking_location'=>'Basement -2','tuya_lamp_id'=>407],
            ['block_id'=>18,'camera_id'=>207,'slot_number'=>'H01-b','parking_location'=>'Basement -2','tuya_lamp_id'=>407],
            ['block_id'=>18,'camera_id'=>207,'slot_number'=>'H01-c','parking_location'=>'Basement -2','tuya_lamp_id'=>407],

            //L3 piller Camera
            ['block_id'=>22,'camera_id'=>208,'slot_number'=>'M03-a','parking_location'=>'Basement -2','tuya_lamp_id'=>339],
            ['block_id'=>22,'camera_id'=>208,'slot_number'=>'M03-b','parking_location'=>'Basement -2','tuya_lamp_id'=>339],
            ['block_id'=>22,'camera_id'=>208,'slot_number'=>'M03-c','parking_location'=>'Basement -2','tuya_lamp_id'=>339],

            //J2 piller Camera
            ['block_id'=>20,'camera_id'=>209,'slot_number'=>'K02-a','parking_location'=>'Basement -2','tuya_lamp_id'=>314],
            ['block_id'=>20,'camera_id'=>209,'slot_number'=>'K02-b','parking_location'=>'Basement -2','tuya_lamp_id'=>314],
            ['block_id'=>20,'camera_id'=>209,'slot_number'=>'K02-c','parking_location'=>'Basement -2','tuya_lamp_id'=>314],

            //L4-M4 piller Camera
            ['block_id'=>22,'camera_id'=>211,'slot_number'=>'LM5-a','parking_location'=>'Basement -2','tuya_lamp_id'=>341],

            //K1 piller Camera
            ['block_id'=>20,'camera_id'=>212,'slot_number'=>'J01-a','parking_location'=>'Basement -2','tuya_lamp_id'=>409],
            ['block_id'=>20,'camera_id'=>212,'slot_number'=>'J01-b','parking_location'=>'Basement -2','tuya_lamp_id'=>409],
            ['block_id'=>20,'camera_id'=>212,'slot_number'=>'J01-c','parking_location'=>'Basement -2','tuya_lamp_id'=>409],

            //G3 piller Camera
            ['block_id'=>18,'camera_id'=>213,'slot_number'=>'H03-a','parking_location'=>'Basement -2','tuya_lamp_id'=>418],
            ['block_id'=>18,'camera_id'=>213,'slot_number'=>'H03-b','parking_location'=>'Basement -2','tuya_lamp_id'=>418],
            ['block_id'=>18,'camera_id'=>213,'slot_number'=>'H03-c','parking_location'=>'Basement -2','tuya_lamp_id'=>418],

            //L4 piller Camera
            ['block_id'=>22,'camera_id'=>214,'slot_number'=>'M04-a','parking_location'=>'Basement -2','tuya_lamp_id'=>340],
            ['block_id'=>22,'camera_id'=>214,'slot_number'=>'M04-b','parking_location'=>'Basement -2','tuya_lamp_id'=>340],
            ['block_id'=>22,'camera_id'=>214,'slot_number'=>'M04-c','parking_location'=>'Basement -2','tuya_lamp_id'=>340],

            //E4 piller Camera
            ['block_id'=>16,'camera_id'=>215,'slot_number'=>'F04-a','parking_location'=>'Basement -2','tuya_lamp_id'=>258],
            ['block_id'=>16,'camera_id'=>215,'slot_number'=>'F04-b','parking_location'=>'Basement -2','tuya_lamp_id'=>258],
            ['block_id'=>16,'camera_id'=>215,'slot_number'=>'F04-c','parking_location'=>'Basement -2','tuya_lamp_id'=>258],

            //H2 piller Camera
            ['block_id'=>17,'camera_id'=>216,'slot_number'=>'G02-a','parking_location'=>'Basement -2','tuya_lamp_id'=>283],
            ['block_id'=>17,'camera_id'=>216,'slot_number'=>'G02-b','parking_location'=>'Basement -2','tuya_lamp_id'=>283],
            ['block_id'=>17,'camera_id'=>216,'slot_number'=>'G02-c','parking_location'=>'Basement -2','tuya_lamp_id'=>283],

            //H3 piller Camera
            ['block_id'=>17,'camera_id'=>218,'slot_number'=>'G03-a','parking_location'=>'Basement -2','tuya_lamp_id'=>284],
            ['block_id'=>17,'camera_id'=>218,'slot_number'=>'G03-b','parking_location'=>'Basement -2','tuya_lamp_id'=>284],
            ['block_id'=>17,'camera_id'=>218,'slot_number'=>'G03-c','parking_location'=>'Basement -2','tuya_lamp_id'=>284],

            //F2 piller Camera
            ['block_id'=>15,'camera_id'=>221,'slot_number'=>'E02-a','parking_location'=>'Basement -2','tuya_lamp_id'=>410],
            ['block_id'=>15,'camera_id'=>221,'slot_number'=>'E02-b','parking_location'=>'Basement -2','tuya_lamp_id'=>410],
            ['block_id'=>15,'camera_id'=>221,'slot_number'=>'E02-c','parking_location'=>'Basement -2','tuya_lamp_id'=>410],

            //J1 piller Camera
            ['block_id'=>20,'camera_id'=>222,'slot_number'=>'K01-a','parking_location'=>'Basement -2','tuya_lamp_id'=>313],
            ['block_id'=>20,'camera_id'=>222,'slot_number'=>'K01-b','parking_location'=>'Basement -2','tuya_lamp_id'=>313],
            ['block_id'=>20,'camera_id'=>222,'slot_number'=>'K01-c','parking_location'=>'Basement -2','tuya_lamp_id'=>313],

            //E2 piller Camera
            ['block_id'=>16,'camera_id'=>223,'slot_number'=>'F02-a','parking_location'=>'Basement -2','tuya_lamp_id'=>411],
            ['block_id'=>16,'camera_id'=>223,'slot_number'=>'F02-b','parking_location'=>'Basement -2','tuya_lamp_id'=>411],
            ['block_id'=>16,'camera_id'=>223,'slot_number'=>'F02-c','parking_location'=>'Basement -2','tuya_lamp_id'=>411],

            //H1 piller Camera
            ['block_id'=>17,'camera_id'=>225,'slot_number'=>'G01-a','parking_location'=>'Basement -2','tuya_lamp_id'=>412],
            ['block_id'=>17,'camera_id'=>225,'slot_number'=>'G01-b','parking_location'=>'Basement -2','tuya_lamp_id'=>412],
            ['block_id'=>17,'camera_id'=>225,'slot_number'=>'G01-c','parking_location'=>'Basement -2','tuya_lamp_id'=>412],

            //H4 piller Camera
            ['block_id'=>17,'camera_id'=>226,'slot_number'=>'G04-a','parking_location'=>'Basement -2','tuya_lamp_id'=>285],
            ['block_id'=>17,'camera_id'=>226,'slot_number'=>'G04-b','parking_location'=>'Basement -2','tuya_lamp_id'=>285],
            ['block_id'=>17,'camera_id'=>226,'slot_number'=>'G04-c','parking_location'=>'Basement -2','tuya_lamp_id'=>285],

            //F3 piller Camera
            ['block_id'=>15,'camera_id'=>227,'slot_number'=>'E03-a','parking_location'=>'Basement -2','tuya_lamp_id'=>231],
            ['block_id'=>15,'camera_id'=>227,'slot_number'=>'E03-b','parking_location'=>'Basement -2','tuya_lamp_id'=>231],

            //F4 piller Camera
            ['block_id'=>15,'camera_id'=>228,'slot_number'=>'E04-a','parking_location'=>'Basement -2','tuya_lamp_id'=>425],
            ['block_id'=>15,'camera_id'=>228,'slot_number'=>'E04-b','parking_location'=>'Basement -2','tuya_lamp_id'=>425],
            ['block_id'=>15,'camera_id'=>228,'slot_number'=>'E04-c','parking_location'=>'Basement -2','tuya_lamp_id'=>425],

            //E3 piller Camera
            ['block_id'=>16,'camera_id'=>229,'slot_number'=>'F03-a','parking_location'=>'Basement -2','tuya_lamp_id'=>257],
            ['block_id'=>16,'camera_id'=>229,'slot_number'=>'F03-b','parking_location'=>'Basement -2','tuya_lamp_id'=>257],
            ['block_id'=>16,'camera_id'=>229,'slot_number'=>'F03-c','parking_location'=>'Basement -2','tuya_lamp_id'=>257],

            //E1 piller Camera
            ['block_id'=>16,'camera_id'=>230,'slot_number'=>'F01-a','parking_location'=>'Basement -2','tuya_lamp_id'=>256],
            ['block_id'=>16,'camera_id'=>230,'slot_number'=>'F01-b','parking_location'=>'Basement -2','tuya_lamp_id'=>256],
            ['block_id'=>16,'camera_id'=>230,'slot_number'=>'F01-c','parking_location'=>'Basement -2','tuya_lamp_id'=>256],

            //Rack K13 Slots Mapping

            //J10 piller Camera
            ['block_id'=>20,'camera_id'=>128,'slot_number'=>'K10-a','parking_location'=>'Basement -2','tuya_lamp_id'=>319],
            ['block_id'=>20,'camera_id'=>128,'slot_number'=>'K10-b','parking_location'=>'Basement -2','tuya_lamp_id'=>319],
            ['block_id'=>20,'camera_id'=>128,'slot_number'=>'K10-c','parking_location'=>'Basement -2','tuya_lamp_id'=>319],

            //P12 piller Camera
            ['block_id'=>23,'camera_id'=>129,'slot_number'=>'N12-a','parking_location'=>'Basement -2','tuya_lamp_id'=>362],
            ['block_id'=>23,'camera_id'=>129,'slot_number'=>'N12-b','parking_location'=>'Basement -2','tuya_lamp_id'=>362],
            ['block_id'=>23,'camera_id'=>129,'slot_number'=>'N12-c','parking_location'=>'Basement -2','tuya_lamp_id'=>362],

            //P14 piller Camera
            ['block_id'=>23,'camera_id'=>130,'slot_number'=>'N14-a','parking_location'=>'Basement -2','tuya_lamp_id'=>364],
            ['block_id'=>23,'camera_id'=>130,'slot_number'=>'N14-b','parking_location'=>'Basement -2','tuya_lamp_id'=>364],
            ['block_id'=>23,'camera_id'=>130,'slot_number'=>'N14-c','parking_location'=>'Basement -2','tuya_lamp_id'=>364],

            //P13 piller Camera
            ['block_id'=>23,'camera_id'=>131,'slot_number'=>'N13-a','parking_location'=>'Basement -2','tuya_lamp_id'=>363],
            ['block_id'=>23,'camera_id'=>131,'slot_number'=>'N13-b','parking_location'=>'Basement -2','tuya_lamp_id'=>363],
            ['block_id'=>23,'camera_id'=>131,'slot_number'=>'N13-c','parking_location'=>'Basement -2','tuya_lamp_id'=>363],

            //J12 piller Camera
            ['block_id'=>20,'camera_id'=>132,'slot_number'=>'K12-a','parking_location'=>'Basement -2','tuya_lamp_id'=>320],
            ['block_id'=>20,'camera_id'=>132,'slot_number'=>'K12-b','parking_location'=>'Basement -2','tuya_lamp_id'=>320],
            ['block_id'=>20,'camera_id'=>132,'slot_number'=>'K12-c','parking_location'=>'Basement -2','tuya_lamp_id'=>320],

            //K10 piller Camera
            ['block_id'=>19,'camera_id'=>133,'slot_number'=>'J10-a','parking_location'=>'Basement -2','tuya_lamp_id'=>312],
            ['block_id'=>19,'camera_id'=>133,'slot_number'=>'J10-b','parking_location'=>'Basement -2','tuya_lamp_id'=>312],
            ['block_id'=>19,'camera_id'=>133,'slot_number'=>'J10-c','parking_location'=>'Basement -2','tuya_lamp_id'=>312],

            //J13 piller Camera
            ['block_id'=>20,'camera_id'=>134,'slot_number'=>'K13-a','parking_location'=>'Basement -2','tuya_lamp_id'=>321],
            ['block_id'=>20,'camera_id'=>134,'slot_number'=>'K13-b','parking_location'=>'Basement -2','tuya_lamp_id'=>321],
            ['block_id'=>20,'camera_id'=>134,'slot_number'=>'K13-c','parking_location'=>'Basement -2','tuya_lamp_id'=>321],

            //L7 piller Camera
            ['block_id'=>22,'camera_id'=>135,'slot_number'=>'M07-a','parking_location'=>'Basement -2','tuya_lamp_id'=>342],
            ['block_id'=>22,'camera_id'=>135,'slot_number'=>'M07-b','parking_location'=>'Basement -2','tuya_lamp_id'=>342],
            ['block_id'=>22,'camera_id'=>135,'slot_number'=>'M07-c','parking_location'=>'Basement -2','tuya_lamp_id'=>342],

            //J9 piller Camera
            ['block_id'=>20,'camera_id'=>137,'slot_number'=>'K09-a','parking_location'=>'Basement -2','tuya_lamp_id'=>318],
            ['block_id'=>20,'camera_id'=>137,'slot_number'=>'K09-b','parking_location'=>'Basement -2','tuya_lamp_id'=>318],
            ['block_id'=>20,'camera_id'=>137,'slot_number'=>'K09-c','parking_location'=>'Basement -2','tuya_lamp_id'=>318],

            //L10 piller Camera
            ['block_id'=>22,'camera_id'=>138,'slot_number'=>'M10-a','parking_location'=>'Basement -2','tuya_lamp_id'=>345],
            ['block_id'=>22,'camera_id'=>138,'slot_number'=>'M10-b','parking_location'=>'Basement -2','tuya_lamp_id'=>345],
            ['block_id'=>22,'camera_id'=>138,'slot_number'=>'M10-c','parking_location'=>'Basement -2','tuya_lamp_id'=>345],

            //M8 piller Camera
            ['block_id'=>21,'camera_id'=>139,'slot_number'=>'L08-a','parking_location'=>'Basement -2','tuya_lamp_id'=>328],
            ['block_id'=>21,'camera_id'=>139,'slot_number'=>'L08-b','parking_location'=>'Basement -2','tuya_lamp_id'=>328],
            ['block_id'=>21,'camera_id'=>139,'slot_number'=>'L08-c','parking_location'=>'Basement -2','tuya_lamp_id'=>328],

            //J8 piller Camera
            ['block_id'=>20,'camera_id'=>140,'slot_number'=>'K08-a','parking_location'=>'Basement -2','tuya_lamp_id'=>317],
            ['block_id'=>20,'camera_id'=>140,'slot_number'=>'K08-b','parking_location'=>'Basement -2','tuya_lamp_id'=>317],
            ['block_id'=>20,'camera_id'=>140,'slot_number'=>'K08-c','parking_location'=>'Basement -2','tuya_lamp_id'=>317],

            //P7 piller Camera
            ['block_id'=>23,'camera_id'=>141,'slot_number'=>'N07-a','parking_location'=>'Basement -2','tuya_lamp_id'=>358],
            ['block_id'=>23,'camera_id'=>141,'slot_number'=>'N07-b','parking_location'=>'Basement -2','tuya_lamp_id'=>358],
            ['block_id'=>23,'camera_id'=>141,'slot_number'=>'N07-c','parking_location'=>'Basement -2','tuya_lamp_id'=>358],

            //L13 piller Camera
            ['block_id'=>22,'camera_id'=>147,'slot_number'=>'M13-a','parking_location'=>'Basement -2','tuya_lamp_id'=>347],
            ['block_id'=>22,'camera_id'=>147,'slot_number'=>'M13-b','parking_location'=>'Basement -2','tuya_lamp_id'=>347],
            ['block_id'=>22,'camera_id'=>147,'slot_number'=>'M13-c','parking_location'=>'Basement -2','tuya_lamp_id'=>347],

            //L12 piller Camera
            ['block_id'=>22,'camera_id'=>148,'slot_number'=>'M12-a','parking_location'=>'Basement -2','tuya_lamp_id'=>346],
            ['block_id'=>22,'camera_id'=>148,'slot_number'=>'M12-b','parking_location'=>'Basement -2','tuya_lamp_id'=>346],
            ['block_id'=>22,'camera_id'=>148,'slot_number'=>'M12-c','parking_location'=>'Basement -2','tuya_lamp_id'=>346],

            //P8 piller Camera
            ['block_id'=>23,'camera_id'=>149,'slot_number'=>'N08-a','parking_location'=>'Basement -2','tuya_lamp_id'=>359],
            ['block_id'=>23,'camera_id'=>149,'slot_number'=>'N08-b','parking_location'=>'Basement -2','tuya_lamp_id'=>359],
            ['block_id'=>23,'camera_id'=>149,'slot_number'=>'N08-c','parking_location'=>'Basement -2','tuya_lamp_id'=>359],

            //L8 piller Camera
            ['block_id'=>22,'camera_id'=>150,'slot_number'=>'M08-a','parking_location'=>'Basement -2','tuya_lamp_id'=>343],
            ['block_id'=>22,'camera_id'=>150,'slot_number'=>'M08-b','parking_location'=>'Basement -2','tuya_lamp_id'=>343],
            ['block_id'=>22,'camera_id'=>150,'slot_number'=>'M08-c','parking_location'=>'Basement -2','tuya_lamp_id'=>343],

            //L14 piller Camera
            ['block_id'=>22,'camera_id'=>151,'slot_number'=>'M14-a','parking_location'=>'Basement -2','tuya_lamp_id'=>430],
            ['block_id'=>22,'camera_id'=>151,'slot_number'=>'M14-b','parking_location'=>'Basement -2','tuya_lamp_id'=>430],

            //M12 piller Camera
            ['block_id'=>21,'camera_id'=>152,'slot_number'=>'L12-a','parking_location'=>'Basement -2','tuya_lamp_id'=>331],
            ['block_id'=>21,'camera_id'=>152,'slot_number'=>'L12-b','parking_location'=>'Basement -2','tuya_lamp_id'=>331],
            ['block_id'=>21,'camera_id'=>152,'slot_number'=>'L12-c','parking_location'=>'Basement -2','tuya_lamp_id'=>331],

            //B9.5 piller Camera
            ['block_id'=>11,'camera_id'=>382,'slot_number'=>'A09-a','parking_location'=>'Basement -2','tuya_lamp_id'=>131],
            ['block_id'=>11,'camera_id'=>382,'slot_number'=>'A09-b','parking_location'=>'Basement -2','tuya_lamp_id'=>131],
            ['block_id'=>11,'camera_id'=>382,'slot_number'=>'A09-c','parking_location'=>'Basement -2','tuya_lamp_id'=>131],

            //B28.5 piller Camera
            ['block_id'=>11,'camera_id'=>302,'slot_number'=>'A28-b','parking_location'=>'Basement -2','tuya_lamp_id'=>132],
            ['block_id'=>11,'camera_id'=>302,'slot_number'=>'A28-c','parking_location'=>'Basement -2','tuya_lamp_id'=>132],

            //B33.5 piller Camera
            ['block_id'=>11,'camera_id'=>307,'slot_number'=>'A33-a','parking_location'=>'Basement -2','tuya_lamp_id'=>135],
            ['block_id'=>11,'camera_id'=>307,'slot_number'=>'A33-b','parking_location'=>'Basement -2','tuya_lamp_id'=>135],
            ['block_id'=>11,'camera_id'=>307,'slot_number'=>'A33-c','parking_location'=>'Basement -2','tuya_lamp_id'=>135],

            //B38.5 piller Camera
            ['block_id'=>11,'camera_id'=>301,'slot_number'=>'A38-a','parking_location'=>'Basement -2','tuya_lamp_id'=>140],
            ['block_id'=>11,'camera_id'=>301,'slot_number'=>'A38-b','parking_location'=>'Basement -2','tuya_lamp_id'=>140],
            ['block_id'=>11,'camera_id'=>301,'slot_number'=>'A38-c','parking_location'=>'Basement -2','tuya_lamp_id'=>140],

            //A27.5 piller Camera
            ['block_id'=>12,'camera_id'=>303,'slot_number'=>'B27-a','parking_location'=>'Basement -2','tuya_lamp_id'=>158],
            ['block_id'=>12,'camera_id'=>303,'slot_number'=>'B27-b','parking_location'=>'Basement -2','tuya_lamp_id'=>158],
            ['block_id'=>12,'camera_id'=>303,'slot_number'=>'B27-c','parking_location'=>'Basement -2','tuya_lamp_id'=>158],

            //A28.5 piller Camera
            ['block_id'=>12,'camera_id'=>null,'slot_number'=>'B28-not-slot','parking_location'=>'Basement -2','tuya_lamp_id'=>null],
            ['block_id'=>12,'camera_id'=>null,'slot_number'=>'B28-not-slot','parking_location'=>'Basement -2','tuya_lamp_id'=>null],
            ['block_id'=>12,'camera_id'=>null,'slot_number'=>'B28-not-slot','parking_location'=>'Basement -2','tuya_lamp_id'=>null],

            //A33.5 piller Camera
            ['block_id'=>12,'camera_id'=>306,'slot_number'=>'B33-a','parking_location'=>'Basement -2','tuya_lamp_id'=>164],
            ['block_id'=>12,'camera_id'=>306,'slot_number'=>'B33-b','parking_location'=>'Basement -2','tuya_lamp_id'=>164],
            ['block_id'=>12,'camera_id'=>306,'slot_number'=>'B33-c','parking_location'=>'Basement -2','tuya_lamp_id'=>164],

            //A37.5 piller Camera
            ['block_id'=>12,'camera_id'=>304,'slot_number'=>'B37-a','parking_location'=>'Basement -2','tuya_lamp_id'=>168],
            ['block_id'=>12,'camera_id'=>304,'slot_number'=>'B37-b','parking_location'=>'Basement -2','tuya_lamp_id'=>168],
            ['block_id'=>12,'camera_id'=>304,'slot_number'=>'B37-c','parking_location'=>'Basement -2','tuya_lamp_id'=>168],

            //A38.5 piller Camera
            ['block_id'=>12,'camera_id'=>305,'slot_number'=>'B38-a','parking_location'=>'Basement -2','tuya_lamp_id'=>169],
            ['block_id'=>12,'camera_id'=>305,'slot_number'=>'B38-b','parking_location'=>'Basement -2','tuya_lamp_id'=>169],
            ['block_id'=>12,'camera_id'=>305,'slot_number'=>'B38-c','parking_location'=>'Basement -2','tuya_lamp_id'=>169],

            //C12.5 piller Camera
            ['block_id'=>13,'camera_id'=>338,'slot_number'=>'C12-a','parking_location'=>'Basement -2','tuya_lamp_id'=>180],
            ['block_id'=>13,'camera_id'=>338,'slot_number'=>'C12-b','parking_location'=>'Basement -2','tuya_lamp_id'=>180],
            ['block_id'=>13,'camera_id'=>338,'slot_number'=>'C12-c','parking_location'=>'Basement -2','tuya_lamp_id'=>180],

            //C12.5 piller Camera
            ['block_id'=>13,'camera_id'=>219,'slot_number'=>'C00-a','parking_location'=>'Basement -2','tuya_lamp_id'=>171],
            ['block_id'=>13,'camera_id'=>219,'slot_number'=>'C00-b','parking_location'=>'Basement -2','tuya_lamp_id'=>171],

            //C12.5 piller Camera
            ['block_id'=>13,'camera_id'=>220,'slot_number'=>'C01-a','parking_location'=>'Basement -2','tuya_lamp_id'=>172],
            ['block_id'=>13,'camera_id'=>220,'slot_number'=>'C01-b','parking_location'=>'Basement -2','tuya_lamp_id'=>172],
            ['block_id'=>13,'camera_id'=>220,'slot_number'=>'C01-c','parking_location'=>'Basement -2','tuya_lamp_id'=>172],

            //C12.5 piller Camera
            ['block_id'=>13,'camera_id'=>217,'slot_number'=>'C02-a','parking_location'=>'Basement -2','tuya_lamp_id'=>173],
            ['block_id'=>13,'camera_id'=>217,'slot_number'=>'C02-b','parking_location'=>'Basement -2','tuya_lamp_id'=>173],
            ['block_id'=>13,'camera_id'=>217,'slot_number'=>'C02-c','parking_location'=>'Basement -2','tuya_lamp_id'=>173],

            //D19 pilar Camera
            ['block_id'=>13,'camera_id'=>153,'slot_number'=>'C19-a','parking_location'=>'Basement -2','tuya_lamp_id'=>432], 
            ['block_id'=>13,'camera_id'=>153,'slot_number'=>'C19-b','parking_location'=>'Basement -2','tuya_lamp_id'=>432], 
            ['block_id'=>13,'camera_id'=>153,'slot_number'=>'C19-c','parking_location'=>'Basement -2','tuya_lamp_id'=>432],  

            //C12.5 piller Camera
            ['block_id'=>13,'camera_id'=>313,'slot_number'=>'C30-a','parking_location'=>'Basement -2','tuya_lamp_id'=>196],
            ['block_id'=>13,'camera_id'=>313,'slot_number'=>'C30-b','parking_location'=>'Basement -2','tuya_lamp_id'=>196],
            ['block_id'=>13,'camera_id'=>313,'slot_number'=>'C30-c','parking_location'=>'Basement -2','tuya_lamp_id'=>196],

            //C12.5 piller Camera
            ['block_id'=>15,'camera_id'=>224,'slot_number'=>'E01-a','parking_location'=>'Basement -2','tuya_lamp_id'=>230],
            ['block_id'=>15,'camera_id'=>224,'slot_number'=>'E01-b','parking_location'=>'Basement -2','tuya_lamp_id'=>230],
            ['block_id'=>15,'camera_id'=>224,'slot_number'=>'E01-c','parking_location'=>'Basement -2','tuya_lamp_id'=>230],

            //C12.5 piller Camera
            ['block_id'=>17,'camera_id'=>null,'slot_number'=>'not-slot','parking_location'=>'Basement -2','tuya_lamp_id'=>null],
            ['block_id'=>17,'camera_id'=>null,'slot_number'=>'not-slot','parking_location'=>'Basement -2','tuya_lamp_id'=>null],
            ['block_id'=>17,'camera_id'=>null,'slot_number'=>'not-slot','parking_location'=>'Basement -2','tuya_lamp_id'=>null],

            //C12.5 piller Camera
            ['block_id'=>20,'camera_id'=>210,'slot_number'=>'K03-a','parking_location'=>'Basement -2','tuya_lamp_id'=>315],
            ['block_id'=>20,'camera_id'=>210,'slot_number'=>'K03-b','parking_location'=>'Basement -2','tuya_lamp_id'=>315],
            ['block_id'=>20,'camera_id'=>210,'slot_number'=>'K03-c','parking_location'=>'Basement -2','tuya_lamp_id'=>315],

            //C12.5 piller Camera
            ['block_id'=>21,'camera_id'=>205,'slot_number'=>'L03-a','parking_location'=>'Basement -2','tuya_lamp_id'=>326],
            ['block_id'=>21,'camera_id'=>205,'slot_number'=>'L03-b','parking_location'=>'Basement -2','tuya_lamp_id'=>326],
            ['block_id'=>21,'camera_id'=>205,'slot_number'=>'L03-c','parking_location'=>'Basement -2','tuya_lamp_id'=>326],

            //C12.5 piller Camera
            ['block_id'=>21,'camera_id'=>null,'slot_number'=>'not-slot','parking_location'=>'Basement -2','tuya_lamp_id'=>null],

            //C12.5 piller Camera
            ['block_id'=>22,'camera_id'=>201,'slot_number'=>'M01-a','parking_location'=>'Basement -2','tuya_lamp_id'=>337],
            ['block_id'=>22,'camera_id'=>201,'slot_number'=>'M01-b','parking_location'=>'Basement -2','tuya_lamp_id'=>337],
            ['block_id'=>22,'camera_id'=>201,'slot_number'=>'M01-c','parking_location'=>'Basement -2','tuya_lamp_id'=>337],

            //C12.5 piller Camera
            ['block_id'=>22,'camera_id'=>202,'slot_number'=>'M02-a','parking_location'=>'Basement -2','tuya_lamp_id'=>338],
            ['block_id'=>22,'camera_id'=>202,'slot_number'=>'M02-b','parking_location'=>'Basement -2','tuya_lamp_id'=>338],
            ['block_id'=>22,'camera_id'=>202,'slot_number'=>'M02-c','parking_location'=>'Basement -2','tuya_lamp_id'=>338],

            //P9.5 piller Camera
            ['block_id'=>23,'camera_id'=>142,'slot_number'=>'N09-a','parking_location'=>'Basement -2','tuya_lamp_id'=>360],
            ['block_id'=>23,'camera_id'=>142,'slot_number'=>'N09-b','parking_location'=>'Basement -2','tuya_lamp_id'=>360],
            ['block_id'=>23,'camera_id'=>142,'slot_number'=>'N09-c','parking_location'=>'Basement -2','tuya_lamp_id'=>360],

            //P10.5 piller Camera
            ['block_id'=>23,'camera_id'=>445,'slot_number'=>'N10-a','parking_location'=>'Basement -2','tuya_lamp_id'=>361],
            ['block_id'=>23,'camera_id'=>445,'slot_number'=>'N10-b','parking_location'=>'Basement -2','tuya_lamp_id'=>361],
            ['block_id'=>23,'camera_id'=>445,'slot_number'=>'N10-c','parking_location'=>'Basement -2','tuya_lamp_id'=>361],

            ['block_id'=>24,'camera_id'=>192,'slot_number'=>'P00-a','parking_location'=>'Basement -2','tuya_lamp_id'=>369],
            ['block_id'=>24,'camera_id'=>192,'slot_number'=>'P00-b','parking_location'=>'Basement -2','tuya_lamp_id'=>369],
            ['block_id'=>24,'camera_id'=>192,'slot_number'=>'P00-c','parking_location'=>'Basement -2','tuya_lamp_id'=>369],

            ['block_id'=>24,'camera_id'=>143,'slot_number'=>'P08-a','parking_location'=>'Basement -2','tuya_lamp_id'=>373],
            ['block_id'=>24,'camera_id'=>143,'slot_number'=>'P08-b','parking_location'=>'Basement -2','tuya_lamp_id'=>373],

            ['block_id'=>24,'camera_id'=>145,'slot_number'=>'P09-a','parking_location'=>'Basement -2','tuya_lamp_id'=>374],
            ['block_id'=>24,'camera_id'=>145,'slot_number'=>'P09-b','parking_location'=>'Basement -2','tuya_lamp_id'=>374],

            ['block_id'=>24,'camera_id'=>446,'slot_number'=>'P10-a','parking_location'=>'Basement -2','tuya_lamp_id'=>375],
            ['block_id'=>24,'camera_id'=>446,'slot_number'=>'P10-b','parking_location'=>'Basement -2','tuya_lamp_id'=>375],
            ['block_id'=>24,'camera_id'=>446,'slot_number'=>'P10-c','parking_location'=>'Basement -2','tuya_lamp_id'=>375],

            ['block_id'=>21,'camera_id'=>447,'slot_number'=>'L07-a','parking_location'=>'Basement -2','tuya_lamp_id'=>327],
            ['block_id'=>21,'camera_id'=>447,'slot_number'=>'L07-b','parking_location'=>'Basement -2','tuya_lamp_id'=>327],
            ['block_id'=>21,'camera_id'=>447,'slot_number'=>'L07-c','parking_location'=>'Basement -2','tuya_lamp_id'=>327],

            ['block_id'=>21,'camera_id'=>448,'slot_number'=>'L09-a','parking_location'=>'Basement -2','tuya_lamp_id'=>329],
            ['block_id'=>21,'camera_id'=>448,'slot_number'=>'L09-b','parking_location'=>'Basement -2','tuya_lamp_id'=>329],
            ['block_id'=>21,'camera_id'=>448,'slot_number'=>'L09-c','parking_location'=>'Basement -2','tuya_lamp_id'=>329],

            ['block_id'=>21,'camera_id'=>449,'slot_number'=>'L10-a','parking_location'=>'Basement -2','tuya_lamp_id'=>330],
            ['block_id'=>21,'camera_id'=>449,'slot_number'=>'L10-b','parking_location'=>'Basement -2','tuya_lamp_id'=>330],
            ['block_id'=>21,'camera_id'=>449,'slot_number'=>'L10-c','parking_location'=>'Basement -2','tuya_lamp_id'=>330],

            ['block_id'=>21,'camera_id'=>450,'slot_number'=>'L13-a','parking_location'=>'Basement -2','tuya_lamp_id'=>332],
            ['block_id'=>21,'camera_id'=>450,'slot_number'=>'L13-b','parking_location'=>'Basement -2','tuya_lamp_id'=>332],
            ['block_id'=>21,'camera_id'=>450,'slot_number'=>'L13-c','parking_location'=>'Basement -2','tuya_lamp_id'=>332],

            ['block_id'=>21,'camera_id'=>144,'slot_number'=>'L14-a','parking_location'=>'Basement -2','tuya_lamp_id'=>333],
            ['block_id'=>21,'camera_id'=>144,'slot_number'=>'L14-b','parking_location'=>'Basement -2','tuya_lamp_id'=>333],
            ['block_id'=>21,'camera_id'=>144,'slot_number'=>'L14-c','parking_location'=>'Basement -2','tuya_lamp_id'=>333],

            ['block_id'=>21,'camera_id'=>413,'slot_number'=>'L16-a','parking_location'=>'Basement -2','tuya_lamp_id'=>335],
            ['block_id'=>21,'camera_id'=>413,'slot_number'=>'L16-b','parking_location'=>'Basement -2','tuya_lamp_id'=>335],

            ['block_id'=>22,'camera_id'=>146,'slot_number'=>'M09-a','parking_location'=>'Basement -2','tuya_lamp_id'=>344],
            ['block_id'=>22,'camera_id'=>146,'slot_number'=>'M09-b','parking_location'=>'Basement -2','tuya_lamp_id'=>344],
            ['block_id'=>22,'camera_id'=>146,'slot_number'=>'M09-c','parking_location'=>'Basement -2','tuya_lamp_id'=>344],

            ['block_id'=>22,'camera_id'=>412,'slot_number'=>'M16-a','parking_location'=>'Basement -2','tuya_lamp_id'=>349],
            ['block_id'=>22,'camera_id'=>412,'slot_number'=>'M16-b','parking_location'=>'Basement -2','tuya_lamp_id'=>349],

            ['block_id'=>20,'camera_id'=>136,'slot_number'=>'K07-a','parking_location'=>'Basement -2','tuya_lamp_id'=>316],
            ['block_id'=>20,'camera_id'=>136,'slot_number'=>'K07-b','parking_location'=>'Basement -2','tuya_lamp_id'=>316],
            ['block_id'=>20,'camera_id'=>136,'slot_number'=>'K07-c','parking_location'=>'Basement -2','tuya_lamp_id'=>316],

            ['block_id'=>15,'camera_id'=>316,'slot_number'=>'EF40-b','parking_location'=>'Basement -2','tuya_lamp_id'=>255],
            ['block_id'=>15,'camera_id'=>316,'slot_number'=>'EF40-c','parking_location'=>'Basement -2','tuya_lamp_id'=>255],

            ['block_id'=>16,'camera_id'=>324,'slot_number'=>'FG40-b','parking_location'=>'Basement -2','tuya_lamp_id'=>282],
            ['block_id'=>16,'camera_id'=>324,'slot_number'=>'FG40-c','parking_location'=>'Basement -2','tuya_lamp_id'=>282],

            ['block_id'=>23,'camera_id'=>237,'slot_number'=>'GH40-a','parking_location'=>'Basement -2','tuya_lamp_id'=>300],
            ['block_id'=>23,'camera_id'=>237,'slot_number'=>'GH40-b','parking_location'=>'Basement -2','tuya_lamp_id'=>300],

            ['block_id'=>23,'camera_id'=>423,'slot_number'=>'H21-a','parking_location'=>'Basement -2','tuya_lamp_id'=>413],
            ['block_id'=>23,'camera_id'=>423,'slot_number'=>'H21-b','parking_location'=>'Basement -2','tuya_lamp_id'=>413],

            ['block_id'=>15,'camera_id'=>178,'slot_number'=>'E20-a','parking_location'=>'Basement -2','tuya_lamp_id'=>239],
            ['block_id'=>15,'camera_id'=>178,'slot_number'=>'E20-b','parking_location'=>'Basement -2','tuya_lamp_id'=>239],
            ['block_id'=>15,'camera_id'=>178,'slot_number'=>'E20-c','parking_location'=>'Basement -2','tuya_lamp_id'=>239],

            ['block_id'=>17,'camera_id'=>254,'slot_number'=>'G28-a','parking_location'=>'Basement -2','tuya_lamp_id'=>289],
            ['block_id'=>17,'camera_id'=>254,'slot_number'=>'G28-b','parking_location'=>'Basement -2','tuya_lamp_id'=>289],
            ['block_id'=>17,'camera_id'=>254,'slot_number'=>'G28-c','parking_location'=>'Basement -2','tuya_lamp_id'=>289],

            ['block_id'=>17,'camera_id'=>235,'slot_number'=>'G38-a','parking_location'=>'Basement -2','tuya_lamp_id'=>299],
            ['block_id'=>17,'camera_id'=>235,'slot_number'=>'G38-b','parking_location'=>'Basement -2','tuya_lamp_id'=>299],
            ['block_id'=>17,'camera_id'=>235,'slot_number'=>'G38-c','parking_location'=>'Basement -2','tuya_lamp_id'=>299],

            ['block_id'=>15,'camera_id'=>274,'slot_number'=>'E29-a','parking_location'=>'Basement -2','tuya_lamp_id'=>246],
            ['block_id'=>15,'camera_id'=>274,'slot_number'=>'E29-b','parking_location'=>'Basement -2','tuya_lamp_id'=>246],
            ['block_id'=>15,'camera_id'=>274,'slot_number'=>'E29-c','parking_location'=>'Basement -2','tuya_lamp_id'=>246],

            ['block_id'=>15,'camera_id'=>262,'slot_number'=>'E30-a','parking_location'=>'Basement -2','tuya_lamp_id'=>247],
            ['block_id'=>15,'camera_id'=>262,'slot_number'=>'E30-b','parking_location'=>'Basement -2','tuya_lamp_id'=>247],

            ['block_id'=>15,'camera_id'=>156,'slot_number'=>'E23-a','parking_location'=>'Basement -2','tuya_lamp_id'=>241],
            ['block_id'=>15,'camera_id'=>156,'slot_number'=>'E23-b','parking_location'=>'Basement -2','tuya_lamp_id'=>241],

            ['block_id'=>15,'camera_id'=>444,'slot_number'=>'K14-a','parking_location'=>'Basement -2','tuya_lamp_id'=>322],
            ['block_id'=>15,'camera_id'=>444,'slot_number'=>'K14-b','parking_location'=>'Basement -2','tuya_lamp_id'=>322],

            ['block_id'=>8,'camera_id'=>451,'slot_number'=>'H08-b','parking_location'=>'Basement -1','tuya_lamp_id'=>102],
            ['block_id'=>8,'camera_id'=>451,'slot_number'=>'H08-c','parking_location'=>'Basement -1','tuya_lamp_id'=>102],

       ]);
    }
}