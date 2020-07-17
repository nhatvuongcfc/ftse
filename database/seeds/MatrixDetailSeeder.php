<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatrixDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            ['matrix_id'=>'1','topic_id'=>'1','NB'=>'1','TH'=>'1','VD'=>'1','VC'=>'1'],
            ['matrix_id'=>'1','topic_id'=>'2','NB'=>'1','TH'=>'1','VD'=>'1','VC'=>'1'],
            ['matrix_id'=>'1','topic_id'=>'3','NB'=>'1','TH'=>'1','VD'=>'1','VC'=>'1'],
            ['matrix_id'=>'1','topic_id'=>'4','NB'=>'1','TH'=>'1','VD'=>'1','VC'=>'1'],
            ['matrix_id'=>'2','topic_id'=>'1','NB'=>'2','TH'=>'3','VD'=>'4','VC'=>'1'],
            ['matrix_id'=>'2','topic_id'=>'2','NB'=>'2','TH'=>'3','VD'=>'4','VC'=>'1'],
            ['matrix_id'=>'2','topic_id'=>'3','NB'=>'2','TH'=>'3','VD'=>'4','VC'=>'1'],
            ['matrix_id'=>'2','topic_id'=>'4','NB'=>'2','TH'=>'3','VD'=>'4','VC'=>'1'],
        ];
        DB::table('matrices_detail')->insert($data);
    }
}
