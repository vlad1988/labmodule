@extends('app')
@section('content')

<div class="container ">
    <h4><?= $discipline[0]->title; ?></h4>
    <div class="row">
        <div class="col-md-6">
        <h4>Блоки оцінювання</h4>

        <table class="table table-hover">
        <tr>
            <th>Назва</th>
            <th>Тип</th>
            <th>Дата подання</th>
        </tr>
            @foreach ($schemes as $scheme)
            <tr>
                <td>{{ $scheme->title }}</td>
                <td>{{ $scheme->type }}</td>
                <td>{{ $scheme->expiredate }}</td>
            </tr>
            @endforeach
        </table>

        </div>
        <div class="col-md-6">
            <h4>Додати блок оцінювання студента</h4>
            <hr/>
            {!! Form::open(array('url' => 'create/scheme')) !!}
            {!! Form::hidden('discipline_id', $discipline_id) !!}
            <div class="form-group">
                {!! Form::label('title', 'Назва:') !!}
                {!! Form::text('title', null, ['class' => 'form-control ']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('type', 'Оберіть тип блоку:') !!}
                <select class="form-control" name="type">
                    <option></option>
                    <option value="Лабораторна робота">Лабораторна робота</option>
                    <option value="Розрахункова-графічна робота">Розрахункова-графічна робота</option>
                    <option value="Самостійна робота">Самостійна робота</option>
                    <option value="Інше">Інше</option>
                </select>
            </div>
            <div class="form-group">
                {!! Form::label('expiredate', 'Оберіть дату завершення:') !!}
                <input class="form-control" type="date" name="expiredate">
            </div>
            <div class="form-group">
                {!! Form::submit('Додати', ['class' => 'btn btn-primary form-control ']) !!}
            </div>
            {!! Form::close() !!}

        </div>
    </div>
</div>

@endsection
