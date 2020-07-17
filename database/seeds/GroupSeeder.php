<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=10; $i <=12 ; $i++) { 
            DB::table('groups')->insert([
                'name'=>$i
            ]);
        }
    }
}
