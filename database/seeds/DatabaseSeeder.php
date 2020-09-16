<?php

use Illuminate\Database\Seeder;
use App\Model\Exam;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserRoleSeeder::class);
        // $this->call(CategorySeeder::class);
        $this->call(ProgramSeeder::class);
        // $this->call(BlogSeeder::class);
        // $this->call(PartSeeder::class);
        // $this->call(FileImageSeeder::class);
        // $this->call(FileListeningSeeder::class);
        // $this->call(DifficultSeeder::class);
        // $this->call(ExamSeeder::class);
        // $this->call(SubjectSeeder::class);
        // $this->call(TestSeeder::class);
        // $this->call(CourseSeeder::class);
        // $this->call(GroupSeeder::class);
        // $this->call(ClasesSeeder::class);
        // $this->call(TopicSeeder::class);
        // $this->call(MatrixSeeder::class);
        // $this->call(MatrixDetailSeeder::class);
        // $this->call(QuestionSeeder::class);
        // $this->call(AnswerSeeder::class);
        // $this->call(FeNavbarSeeder::class);
        
    }
}
