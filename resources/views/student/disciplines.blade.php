@extends('app')
@section('content')
<div class="container">
	<div class="col-md-8">
		<h4>Дисципліни групи <?= $group->title; ?></h4>
		<hr/>
		<table class="table table-hover">
			<tr>

			</tr>
			@foreach ($disciplines as $discipline)
			<tr>
				<td>
					{{ $discipline->title }}
				</td>
				<td>
				{!! Form::open(array('url' => 'report', 'method' => 'POST')) !!}
					{!! Form::hidden('student_id', $student_id) !!}
                    {!! Form::hidden('discipline_id', $discipline->id) !!}
					<input type="submit" value="Перейти до обліку" class="form-control btn btn-success">

				{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</table>
	</div>

</div>
@endsection 