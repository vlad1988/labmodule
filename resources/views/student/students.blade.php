@extends('app')
@section('content')

<div class="container">
    <div class="col-md-6">

    </div>
    <div class="col-lg-6">
        <h4>Додати студента</h4>
        <hr/>
        {!! Form::open(array('url' => 'foo/bar')) !!}
        <div class="form-group">
            {!! Form::label('name', 'Імя:') !!}
            {!! Form::text('name', null, ['class' => 'form-control ']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('surname', 'Прізвище:') !!}
            {!! Form::text('surname', null, ['class' => 'form-control ']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', null, ['class' => 'form-control ']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('group_id', 'Оберіть групу:') !!}
            <select class="form-control" name="group_id">
                @foreach($groups as $group)
                <option value="{{ $group->id }}">{{ $group->title }}</option>
                @endforeach
            </select>
        </div>
	<div class="form-group">
		{!! Form::submit('Додати', ['class' => 'btn btn-primary form-control ']) !!}
	</div>

        {!! Form::close() !!}

    </div>
</div>

@endsection