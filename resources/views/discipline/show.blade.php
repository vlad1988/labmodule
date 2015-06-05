@extends('app')
@section('content')

<div class="container">
    {!! Form::open(array('url' => 'discipline/store')) !!}

    <div class="form-group">
        {!! Form::label('group_id', 'Оберіть групу:') !!}
        <select class="form-control" name="discipline_id">
            @foreach($disciplines as $discipline)
            <option value="{{ $discipline->id }}">{{ $discipline->title }}</option>
            @endforeach
        </select>
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
        {!! Form::submit('Зв\'язати', ['class' => 'btn btn-primary form-control ']) !!}
    </div>
    {!! Form::close() !!}

</div>

@endsection
