@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6">
		<table class="table table-hover">
		<tr>
			<th>Назва</th>
			<th>Статус</th>
			<th>Надіслано</th>
			<th>Файл звіту</th>
		</tr>
			@foreach ($reports as $report)
				<tr>
					<td>{{ $report->title }}</td>
					<td>{{ $report->status }}</td>
					<td>{{ $report->approvedate }}</td>
					<td><a href="{{ url('download/'.$report->filepath) }}">Скачати</a></td>

				</tr>
			@endforeach
		</table>
					
		</div>
		<div class="col-md-6">
			{!! Form::open(array('url' => 'createreport', 'method' => 'POST', 'files'=> true)) !!}
                    {!! Form::hidden('discipline_id', $discipline_id) !!}
                    {!! Form::hidden('student_id', $student_id) !!}

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
				{!! Form::label('comment', 'Коментар:') !!}
				{!! Form::textarea('comment', null, ['class' => 'form-control ']) !!}
			</div>
			<div class="form-group">
				{!! Form::submit('Надіслати', ['class' => 'btn btn-primary form-control ']) !!}
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection 