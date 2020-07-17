<?php

use Illuminate\Database\Seeder;
use App\Model\Subject;
class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=new Subject();
        $data->name='Toán';
        $data->save();
        $data=new Subject();
        $data->name='Lý';
        $data->save();
        $data=new Subject();
        $data->name='Hóa';
        $data->save();
        $data=new Subject();
        $data->name='Sinh';
        $data->save();
        $data=new Subject();
        $data->name='Tiếng Anh';
        $data->save();
    }
}
