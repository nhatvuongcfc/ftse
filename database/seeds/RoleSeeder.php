<?php

use Illuminate\Database\Seeder;
use App\Model\Role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=new Role();
        $admin->name='Admin';
        $admin->slug='admin';
        $admin->save();

        $admin=new Role();
        $admin->name='Manager';
        $admin->slug='manager';
        $admin->save();

        $admin=new Role();
        $admin->name='Training Department';
        $admin->slug='training';
        $admin->save();

        $admin=new Role();
        $admin->name='Accouting Department';
        $admin->slug='accouting';
        $admin->save();

        $admin=new Role();
        $admin->name='Teacher';
        $admin->slug='teacher';
        $admin->save();

        $admin=new Role();
        $admin->name='Student';
        $admin->slug='student';
        $admin->save();
    }
}
