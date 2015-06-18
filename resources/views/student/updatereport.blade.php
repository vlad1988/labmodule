@extends('app')
@section('content')
<div class="container">
    <h4>Статус - {{ $report[0]->title }}</h4>
    {!! Form::open(array('url' => 'updatereport', 'method' => 'POST')) !!}
    {!! Form::hidden('report_id', $report_id) !!}
    {!! Form::hidden('discipline_id', $discipline_id) !!}
    {!! Form::hidden('student_id', $student_id) !!}

    <div class="form-group">
        {!! Form::label('status', 'Оберіть статус:') !!}
        <select name="status" class="form-control">
            <option value="Розглядається">Розглядається</option>
            <option value="Схвалено">Схвалено</option>
            <option value="На доопрацювання">На доопрацювання</option>

        </select>
    </div>
    <div class="form-group">
        {!! Form::submit('Надіслати', ['class' => 'btn btn-primary form-control ']) !!}
    </div>

    {!! Form::close() !!}
</div>
@endsection 