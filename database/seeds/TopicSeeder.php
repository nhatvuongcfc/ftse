<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            ['name'=>'Hàm số','subject_id'=>'1','group_id'=>'3'],
            ['name'=>'Mũ-Logarit','subject_id'=>'1','group_id'=>'3'],
            ['name'=>'Hình không gian','subject_id'=>'1','group_id'=>'3'],
            ['name'=>'Khối tròn xoay','subject_id'=>'1','group_id'=>'3'],
            ['name'=>'Tích phân','subject_id'=>'1','group_id'=>'3'],
            ['name'=>'Số phức','subject_id'=>'1','group_id'=>'3'],
            ['name'=>'Hình học xyz','subject_id'=>'1','group_id'=>'3'],
            ['name'=>'Lượng giác','subject_id'=>'1','group_id'=>'2'],
            ['name'=>'Tổ hợp - Xác xuất','subject_id'=>'1','group_id'=>'2'],
            ['name'=>'Dãy số','subject_id'=>'1','group_id'=>'2'],
            ['name'=>'Giới hạn','subject_id'=>'1','group_id'=>'2'],
            ['name'=>'Đạo hàm','subject_id'=>'1','group_id'=>'2'],
            ['name'=>'Dao động điều hòa','subject_id'=>'2','group_id'=>'3'],
            ['name'=>'Sóng cơ','subject_id'=>'2','group_id'=>'3'],
            ['name'=>'Dòng điện xoay chiều','subject_id'=>'2','group_id'=>'3'],
            ['name'=>'Dao động và sóng điện từ','subject_id'=>'2','group_id'=>'3'],
            ['name'=>'Sóng ánh sáng','subject_id'=>'2','group_id'=>'3'],
            ['name'=>'Lượng tử ánh sáng','subject_id'=>'2','group_id'=>'3'],
            ['name'=>'Hạt nhân nguyên tử','subject_id'=>'2','group_id'=>'3'],
            ['name'=>'Điện tích. Điện trường','subject_id'=>'2','group_id'=>'2'],
            ['name'=>'Dòng điện không đổi','subject_id'=>'2','group_id'=>'2'],
            ['name'=>'Dòng điện trong các môi trường','subject_id'=>'2','group_id'=>'2'],
            ['name'=>'Từ trường','subject_id'=>'2','group_id'=>'2'],
            ['name'=>'Cảm ứng điện từ','subject_id'=>'2','group_id'=>'2'],
        ];
        DB::table('topics')->insert($data);
    }
}
