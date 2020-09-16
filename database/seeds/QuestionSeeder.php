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
        for($i=1; $i<=200; $i++){
                DB::table('questions')
                ->insert([
                    'content'=>$faker->text,
                    'topic_id'=>random_int(1,24),
                    'difficult_id'=>random_int(1,3),
                ]);
        }
    }
}
