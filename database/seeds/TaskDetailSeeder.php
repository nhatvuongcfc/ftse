<?php

use Illuminate\Database\Seeder;
use App\Model\DetailTask;
class DetailTaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=new DetailTask();
        $data->question_id='1';
        $data->answer_id='1';
        $data->task_id='1';
        $data->save();
    }
}
