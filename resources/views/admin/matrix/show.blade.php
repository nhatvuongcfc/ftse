@extends('templates.admin.index')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/form_crud.css') }}">
@endsection
@section('content')

<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <h2>{{ $matrix->name." môn ".$matrix->subject->name." khối ".$matrix->group->name }}</h2>
            </div>
            <table  class="table  table-hover table-bordered">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Chuyên đề <i class="fa fa-sort"></i></th>
                        <th>Nhận biết</th>
                        <th>Thông hiểu</th>
                        <th>Vận dụng</th>
                        <th>Vận dụng cao</th>
                        <th>Số câu</th>
                        <th>%</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @for($i = 0; $i <count($details); $i++)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td >{{ $details[$i]->topic->name }}</td>
                        <td class="cell_number">{{ $details[$i]->TH }}</td>
                        <td class="cell_number">{{ $details[$i]->NB }}</td>
                        <td class="cell_number">{{ $details[$i]->VD }}</td>
                        <td class="cell_number">{{ $details[$i]->VC }}</td>
                        @for($j = $i; $j<=$i && $j<count($sum_topic); $j++)
                        <td class="cell_number">{{ $sum_topic[$j] }}</td>
                        @endfor
                        @for($k = $i; $k<=$i && $k<count($per_topic); $k++)
                        <td class="cell_number">{{ $per_topic[$k]."%" }}</td>
                        @endfor
                    </tr>    
                    
                    @endfor
                   
                    <tr>
                        <th colspan="2" style="text-align: center">Tổng số câu</th>
                        @foreach ($sum_difficult as $item)
                            <th class="cell_number" style="font-size: 18px">{{ $item }}</th>    
                        @endforeach
                        <th class="cell_number" >{{ $number_question }}</th>
                        <th></th>
                    </tr>
                    <tr>
                        <th colspan="2"  style="text-align: center">%</th>
                        @foreach ($per_difficult as $item)
                            <th class="cell_number" style="font-size: 18px">{{ $item."%" }}</th>    
                        @endforeach
                        <th></th>
                        <th  class="cell_number">100%</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection