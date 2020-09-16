<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use DB;
class ToeicScaleImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach($collection as $key =>$value){
            if($key>0){
                DB::table('toeic_scales')->insert([
                    'number_correct'=>$value[0],
                    'score_listening'=>$value[1],
                    'score_reading'=>$value[2],
                ]);
            }
        }
        // dd($collection);
    }
}
