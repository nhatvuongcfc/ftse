<?php

use Illuminate\Database\Seeder;
use App\Model\Test;
class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=new Test();
        $data->name='Kiểm tra 1 tiết môn Toán';
        $data->timer='2020-06-17 09-30-00';
        $data->time='60';
        $data->number_question='20';
        $data->exam_id='2';
        $data->subject_id='1';
        $data->save();
        
        $data=new Test();
        $data->name='Kiểm tra học kỳ môn Toán';
        $data->timer='2020-06-17 09-30-00';
        $data->time='120';
        $data->number_question='40';
        $data->exam_id='1';
        $data->subject_id='1';
        $data->save();

    }
}
