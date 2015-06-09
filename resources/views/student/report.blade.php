@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6">
			
		</div>
		<div class="col-md-6">
			{!! Form::open(array('url' => 'createreport', 'method' => 'POST')) !!}
			<div class="form-group">
				{!! Form::label('schema', 'Оберіть блок:') !!}
				<select name="schema" class="form-control">
					@foreach ($schemes as $schema)
						<option value="{{ $schema->id }}">{{ $schema->title }}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				{!! Form::label('file', 'Оберіть файл:') !!}
				{!! Form::file('file') !!}
			</div>
			<div class="form-group">
				{!! Form::label('uuid', 'Коментар:') !!}
				{!! Form::textarea('uuid', null, ['class' => 'form-control ']) !!}
			</div>
			<div class="form-group">
				{!! Form::submit('Надіслати', ['class' => 'btn btn-primary form-control ']) !!}
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection 