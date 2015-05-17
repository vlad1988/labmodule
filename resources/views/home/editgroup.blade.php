@extends('app')
@section('content')
<div class="container">
    <h4>Редагування <?= $group->title; ?></h4>
    <hr/>

    {!! Form::open(['url' => 'editgroup']) !!}
    {!! Form::hidden('id', $id) !!}

    <div class="form-group">
        {!! Form::label('title', 'Змінити назву групи на:') !!}
        {!! Form::text('title', null, ['class' => 'form-control ',  ]) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Змінити', ['class' => 'btn btn-primary form-control ']) !!}
    </div>
    {!! Form::close() !!}
</div>
@endsection