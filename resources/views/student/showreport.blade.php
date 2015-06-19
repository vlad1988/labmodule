@extends('app')
@section('content')
<div class="container">
    <h4>
   <strong> {{ $discipline->title }}</strong>
        </h4>
    <h4>Перегляд звітів студента - {{ $student->name }} {{ $student->surname }}</h4>
    
    <table class="table table-hover">
        <tr>
            <th>Назва</th>
            <th>Статус</th>
            <th>Дата</th>
            <th>Файл звіту</th>
            <th>Змінити статус</th>
        </tr>
        @foreach ($reports as $report)
        <tr>
            <td>
                {{ $report->title }} 
            </td>
            <td><span>{{ $report->status }}</span></td>
            <td>{{ $report->approvedate }}</td>
            <td><a href="{{ url('download/'.$report->filepath) }}">Скачати</a></td>
            <td><a href="{{ url('editreport/'.$report->id.'/'.$discipline_id.'/'.$student_id) }}"><button class="btn btn-default btn-sm"><i class="glyphicon glyphicon-edit"></i> Перехід</button></a></td>
        </tr>
        @endforeach
    </table>
</div>
@endsection 