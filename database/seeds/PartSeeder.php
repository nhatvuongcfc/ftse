<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            ['name'=>'Part 1', 'content'=>'Photo'],
            ['name'=>'Part 2', 'content'=>'Question response'],
            ['name'=>'Part 3', 'content'=>'Short conversation'],
            ['name'=>'Part 4', 'content'=>'Short talk'],
            ['name'=>'Part 5', 'content'=>'Incomplete sentence'],
            ['name'=>'Part 6', 'content'=>'Text completion'],
            ['name'=>'Part 7', 'content'=>'Reading comprehen'],
        ];
        DB::table('parts')->insert($data);
    }
}
