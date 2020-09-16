<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FileListeningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $data=[
        //     ['TOEIC 01.mp3','1'],
        //     ['TOEIC 02.mp3','2'],
        //     ['TOEIC 03.mp3','3'],
        //     ['TOEIC 04.mp3','1'],
        //     ['TOEIC 05.mp3','1'],
        //     ['TOEIC 06.mp3','1'],
        //     ['TOEIC 07.mp3','1'],
        //     ['TOEIC 08.mp3',''],
        //     ['TOEIC 09.mp3','9'],
        // ]
        for($i=1; $i<10; $i++){
            DB::table('file_listenings')->insert(
                ['file'=>'TOEIC 0'.$i.'.mp3', 'full_test_id'=>$i]
            );
        }
    }
}
