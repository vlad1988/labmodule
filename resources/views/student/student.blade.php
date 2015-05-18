@extends('app')
@section('content')
<div class="container">
    <div class="col-md-6">
        <h4>{{ $student->name }} {{ $student->surname }}</h4>
        <hr/>
        <table class="table">
            @foreach ($disciplines as $discipline)
            <tr>
                <td data-pivot="{{$discipline->pivot->discipline_id}}">{{$discipline->title}}</td>
                <td>
                    {!! Form::open(['url' => 'item/remove']) !!}
                    {!! Form::hidden('student_id', $id) !!}
                    {!! Form::hidden('discipline_id', $discipline->pivot->discipline_id) !!}
                    <div class="form-group">
                        {!! Form::submit('Видалити', ['class' => 'btn btn-warning btn-xs form-control ']) !!}
                    </div>                    
                    {!! Form::close() !!}

                </td>
            </tr>
            @endforeach
        </table>
    </div>

    <div class="col-md-6">
        <h4>Додати дисципліну до списку</h4>
        <hr/>
        {!! Form::open(['url' => 'addtolist']) !!}
        {!! Form::hidden('student_id', $id) !!}
        <div class="form-group">
            <select name="discipline_id" class="form-control">
                <option>  </option>
                @foreach ($discipline_list as $item)
                <option id="{{ $item->id }}" value="{{ $item->id }}"> {{ $item->title }} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {!! Form::submit('Додати дисципліну до списку', ['class' => 'btn btn-primary form-control ']) !!}
        </div>
        {!! Form::close() !!}
    </div>



</div>
@endsection