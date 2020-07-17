<?php

use Illuminate\Database\Seeder;
use App\Model\Clases;
use Illuminate\Support\Facades\DB;


class ClasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $key=1;
        for ($i=10; $i <=12 ; $i++) { 
            for ($j=1; $j <=10 ; $j++) {
                
                DB::table('clases')->insert([
                    'name'=>$i."/".$j,
                    'course_id'=>'1',
                    'group_id'=> $key
                ]);
            }
            $key++;
        }
    }
}
