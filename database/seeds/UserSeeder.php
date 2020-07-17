<?php

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            ['name'=>'admin','email'=>'admin@gmail.com','password'=>bcrypt('123456789')],
            ['name'=>'manager','email'=>'manager@gmail.com','password'=>bcrypt('123456789')],
            ['name'=>'training','email'=>'training@gmail.com','password'=>bcrypt('123456789')],
            ['name'=>'accouting','email'=>'account@gmail.com','password'=>bcrypt('123456789')],
            ['name'=>'teacher','email'=>'teacher@gmail.com','password'=>bcrypt('123456789')],
            ['name'=>'student','email'=>'student@gmail.com','password'=>bcrypt('123456789')],
        ];
                DB::table('users')->insert($data);

    }
}
