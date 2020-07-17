<?php

use Illuminate\Database\Seeder;
use App\Model\Difficult;
class DifficultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $difficult= new Difficult();
        $difficult->code="NB";
        $difficult->name="Nhận biết";
        $difficult->save();

        $difficult= new Difficult();
        $difficult->code="TH";
        $difficult->name="Thông hiểu";
        $difficult->save();

        $difficult= new Difficult();
        $difficult->code="VD";
        $difficult->name="Vận dụng";
        $difficult->save();

        $difficult= new Difficult();
        $difficult->code="VC";
        $difficult->name="Vận dụng cao";
        $difficult->save();
    }
}
