@extends('app')
@section('content')

<div class="container">
    <div class="col-md-6">
        <table class="table table-hover">
            <tr>
                <th>Ім'я Прізвище</th>
                <th>Email</th>
                <th>UUID</th>
            </tr>
            @foreach ($students as $student)
            <tr>
                <td>
                    <a href="{{action('StudentController@show', [$student->id])}}">
                    {{ $student->surname }} {{ $student->name }}
                    </a>
                </td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->guid }}</td>
            </tr>
            @endforeach
        </table>

    </div>
    <div class="col-lg-6">
        <h4>Додати студента</h4>
        <hr/>
        {!! Form::open(array('url' => 'create/student')) !!}
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