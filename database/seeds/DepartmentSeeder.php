<?php

use Illuminate\Database\Seeder;
use App\Model\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=new Department();
        $data->name="Tài vụ";
        $data->save();
        $data=new Department();
        $data->name="Đào tạo";
        $data->save();
        $data=new Department();
        $data->name="Giáo viên";
        $data->save();

    }
}
