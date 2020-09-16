<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            ['name'=>'fasttrack'],
            ['name'=>'Tuyển dụng'],
            ['name'=>'Chuyện Coder'],
            ['name'=>'Chuyện Coding'],
        ];
        DB::table('categories')->insert($data);
        
    }
}
