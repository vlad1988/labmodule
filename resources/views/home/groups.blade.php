@extends('app')
@section('content')

<div class="container">
    <div class="content row">
        <div class="col-md-6">
            <h4 class="title">Групи</h4>
            @foreach($groups as $group)
            {{ $group->title }}
            @endforeach
        </div>
        <div class="col-md-6">
            <h4 class="title">Додати группу</h4>
            {!! Form::open(['url' => 'articles']) !!}
            <div class="form-group">
                {!! Form::label('title', 'Назва:') !!}
                {!! Form::text('title', null, ['class' => 'form-control ']) !!}
            </div>
            {!! Form::close() !!}
        </div>


    </div>
</div>
@endsection