<?php

use Illuminate\Database\Seeder;
use App\Model\Exam;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exam= new Exam();
        $exam->name="Kiểm tra giữa kì";
        $exam->date='2020-06-17';
        $exam->factor='2';
        $exam->save();
        
        $exam= new Exam();
        $exam->name="Kiểm tra cuối kì";
        $exam->date='2020-06-20';
        $exam->factor='3';
        $exam->save();
        
    }
}
