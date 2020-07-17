<?php

use Illuminate\Database\Seeder;
use App\Model\Course;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course=new Course();
        $course->name="2019-2020";
        $course->save();
    }
}
