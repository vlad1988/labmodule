@extends('app')
@section('content')

<div class="container">
    <div class="content">
        <div class="jumbotron">
            <div class="container">
                <h1>Модуль обліку успішності студентів</h1>

                {!! Form::open(array('url' => 'studentlist', 'method' => 'POST')) !!}
                <div class="form-group">
                    {!! Form::label('uuid', 'Ваш UUID:') !!}
                    {!! Form::text('uuid', null, ['class' => 'form-control ']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Перегляд обліку', ['class' => 'btn btn-primary form-control ']) !!}
                </div>
                {!! Form::close() !!}


            </div>
        </div>
        <hr/>


    </div>
</div>
@endsection
