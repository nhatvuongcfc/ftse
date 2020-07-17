<?php

use Illuminate\Database\Seeder;
use App\Model\Matrix;

class MatrixSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matrix=new Matrix();
        $matrix->name='Kiểm tra 1 tiết';
        $matrix->number_question='40';
        $matrix->subject_id='1';
        $matrix->group_id='3';
        $matrix->save();
        
        $matrix=new Matrix();
        $matrix->name='Kiểm tra học kì 1';
        $matrix->number_question='40';
        $matrix->subject_id='1';
        $matrix->group_id='3';
        $matrix->save();
    }
}
