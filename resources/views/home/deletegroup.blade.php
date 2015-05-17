@extends('app')
@section('content')
<div class="container">
    <h3>Ви бажаєте видалити групу {{$title}} ?</h3>
    <hr/>
    {!! Form::open(['url' => 'deletegroup']) !!}
    {!! Form::hidden('id', $id) !!}

    <div class="form-group row">
        <div class="col-md-6">
            {!! Form::submit('Видалити', ['class' => 'btn btn-warning form-control ']) !!}
        </div>
        <div class="col-md-6">
            <a href="{{ url('/groups') }}">{!! Form::button('Відмінити', ['class' => 'btn btn-danger form-control ']) !!}</a>
    </div>
    {!! Form::close() !!}

</div>
@endsection