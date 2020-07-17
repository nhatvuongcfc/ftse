<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $data=[
        //     ['user_id'=]
        // ]
        for ($i=1; $i <=6 ; $i++) { 
            $data=['user_id'=>$i,'role_id'=>$i];
            DB::table('role_user')->insert($data);
        }
    }
}
