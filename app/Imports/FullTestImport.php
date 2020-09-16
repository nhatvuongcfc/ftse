<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Model\FullTest;
use App\Model\Question;
use App\Model\Answer;
use DB;

class FullTestImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        $full_test=FullTest::select('id')->orderBy('id', 'DESC')->first();
        $full_test_id=$full_test->id;
        $part;
        for($i=1; $i<32; $i++){
            if($i<7){
                $part=1;
            }
            else{
                $part=2;
            }
            $question=new Question();
            $question->index=$i;
            $question->part_id=$part;
            $question->full_test_id=$full_test_id;
            $question->save();
        }
        foreach($collection as $key =>$value){
            if($key>0){
                switch(true){
                    case $value[0] <71 :
                        $part=3;
                    break;
                    case $value[0]>=70 && $value[0] <101 :
                        $part=4;
                    break;
                    case $value[0] >=101 && $value[0] <131 :
                        $part=5;
                    break;
                    case $value[0] >=131 && $value[0] < 148 :
                        $part=6;
                    break;
                    case $value[0] >=148  :
                        $part=7;
                    break;
                    default: 
                    return false;
                    break;
                }
                $question=new Question();
                $question->index=$value[0];
                $question->content=$value[1];
                $question->part_id=$part;
                $question->full_test_id=$full_test_id;
                $question->save();
                $question_id=$question->id;
                $answer=new Answer();
                $answer->A=$value[2];
                $answer->B=$value[3];
                $answer->C=$value[4];
                $answer->D=$value[5];
                $answer->question_id=$question_id;
                $answer->save();
            }
        }
        
    }
}
