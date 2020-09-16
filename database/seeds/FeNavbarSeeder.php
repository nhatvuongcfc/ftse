<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class FeNavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $data=[
        //     ['title'=>'TRANG CHỦ','slug'=>Str::slug('TRANG CHỦ')],
        //     ['title'=>'VỀ FASTTRACK','slug'=>Str::slug('VỀ FASTTRACK')],
        //     ['title'=>'BLOG','slug'=>Str::slug('BLOG')],
        //     ['title'=>'KHÓA HỌC','slug'=>"#"],
        //     ['title'=>'LIÊN HỆ','slug'=>Str::slug('LIÊN HỆ')],
        //     ['title'=>'ĐĂNG NHẬP','slug'=>Str::slug('ĐĂNG NHẬP')],
        // ];
        
        // $data=[
        //     ['title'=>'LỊCH KHAI GIẢNG','slug'=>Str::slug('LỊCH KHAI GIẢNG'),'parent_id'=>'4'],
        //     ['title'=>'LẬP TRÌNH VIÊN CHUYÊN NGHIỆP','slug'=>Str::slug('LẬP TRÌNH VIÊN CHUYÊN NGHIỆP'),'parent_id'=>'4'],
        //     ['title'=>'KHÓA HỌC NGẮN HẠN','slug'=>"#",'parent_id'=>'4'],
        // ];
        $data=[
            ['title'=>'LẬP TRÌNH FRONT-END','slug'=>Str::slug('LẬP TRÌNH FRONT-END'),'parent_id'=>'9'],
            ['title'=>'LẬP TRÌNH PHP','slug'=>Str::slug('LẬP TRÌNH PHP'),'parent_id'=>'9'],
            ['title'=>'LẬP TRÌNH JAVA','slug'=>Str::slug('LẬP TRÌNH JAVA'),'parent_id'=>'9'],
            ['title'=>'LẬP TRÌNH .NET','slug'=>Str::slug('LẬP TRÌNH .NET'),'parent_id'=>'9'],
        ];
        DB::table('fe-navbars')->insert($data);
    }
}
