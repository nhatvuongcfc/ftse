<?php

use Illuminate\Database\Seeder;
use App\Model\Question;
class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for($i=1; $i<=60; $i++){
            if($i<=20){
                DB::table('questions')
                ->insert([
                    'content'=>$faker->text,
                    'topic_id'=>random_int(1,5),
                    'difficult_id'=>random_int(1,4),
                ]);
            }
            else{
                DB::table('questions')
                ->insert([
                    'content'=>$faker->text,
                    'topic_id'=>random_int(1,5),
                    'difficult_id'=>random_int(1,3),
                ]);
            }
        }
    }
}
