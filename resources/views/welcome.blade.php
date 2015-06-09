@extends('app')
@section('content')

<div class="container">
	<div class="content">
		<div class="title">Модуль обліку роботи студента </div>
		<div class="quote">Littera scripta manet</div>
		<hr/>
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
@endsection
