<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Model\CorrectAnswer;
use App\Model\FullTest;

class CorrectAnswerImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        $full_test=FullTest::select('id')->orderBy('id', 'DESC')->first();
        $full_test_id=$full_test->id;
        
        foreach($collection as $key =>$value){
            if($key>0){
                $correct=new CorrectAnswer();
                $correct->index=$value[0];
                $correct->answer=$value[1];
                $correct->full_test_id=$full_test_id;
                $correct->save();
            }
        }

    }
}
