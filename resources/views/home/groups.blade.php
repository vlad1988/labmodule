@extends('app')
@section('content')
<div class="container">
    <div class="content row">
        <div class="col-md-8">
            <h4 class="title">Групи</h4> 
            <hr>
            <table class="table table-striped">
                @foreach($groups as $group)
                <tr>

                    <td><a href="{{ url('group/' . $group->id) }}">{{ $group->title }}</a></td> 
                    <td></td>
                    <td><a href="edit/{{$group->id}}" class="">Редагувати</a> </td>
                    <td><a href="delete/{{$group->id}}" class="">Видалити</a></td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="col-md-4">
            <h4 class="title">Додати группу</h4>
            <hr>
            {!! Form::open(['url' => 'groups']) !!}
            <div class="form-group">
                {!! Form::label('title', 'Назва:') !!}
                {!! Form::text('title', null, ['class' => 'form-control ']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('title', 'Факультет:') !!}
                <select name="departament" class="form-control">
                    @foreach($departaments as $departament)
                    <option value="{{ $departament->id }}">{{ $departament->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                {!! Form::submit('Додати групу', ['class' => 'btn btn-primary form-control ']) !!}
            </div>
            {!! Form::close() !!}
        </div>


    </div>
</div>
@endsection