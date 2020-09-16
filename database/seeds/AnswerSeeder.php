<?php

use Illuminate\Database\Seeder;
use App\Model\Answer;
class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for($i=1; $i<=200; $i++){
            for($j=1; $j<=4; $j++){
                if($j==1){
                    DB::table('answers')
                    ->insert([
                        'content' => $faker->text,
                        'question_id' => $i,
                        'isTrue'=>$j
                    ]);
                }
                else{
                    DB::table('answers')
                    ->insert([
                        'content' => $faker->text,
                        'question_id' => $i,
                    ]);
                }
            }
        }


    }
}
