@extends('app')
@section('content')

<div class="container">
    <div class="col-md-6">
    <h4>Дисципліни </h4>
        <hr/>
        <table class="table table-hover">
        <tr>
            
        </tr>
            @foreach ($disciplines as $discipline)
            <tr>
                <td>
                    <a href="{{url('discipline/show/'.$discipline->id)}}">{{ $discipline->title }}</a>
                </td>
                <td>
                    {{ $discipline->group_name }}
                </td>
                <td>
                    <a href="{{url('discipline/edit/'.$discipline->id)}}" >
                        <button class="btn btn-warning  btn-xs form-control">Редагувати</button>
                    </a>
                </td>
                <td>
                    {!! Form::open(['url' => 'discipline/remove/'.$discipline->id]) !!}
                    {!! Form::hidden('discipline_id', $discipline->id) !!}
                    <div class="form-group">
                        {!! Form::submit('Видалити', ['class' => 'btn btn-danger btn-xs form-control ']) !!}
                    </div>   
                    {!! Form::close() !!}
                </td>

            </tr>
            @endforeach
        </table>
    </div>
    <div class="col-md-6">
        <h4>Додати дисципліну</h4>
        <hr/>
        {!! Form::open(array('url' => 'create/discipline')) !!}
        {!! Form::hidden('user_id', Auth::id()) !!}
        <div class="form-group">
            {!! Form::label('title', 'Назва:') !!}
            {!! Form::text('title', null, ['class' => 'form-control ']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('group_id', 'Оберіть групу:') !!}
            <select class="form-control" name="group_id">
                @foreach($groups as $group)
                <option value="{{ $group->title}}|{{$group->id}}">{{ $group->title }}</option>
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
