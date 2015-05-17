@extends('app')
@section('content')

<div class="container">
    <div class="col-md-6">
        <table class="table table-hover">
            <h4>Дисципліни</h4>
            @foreach ($disciplines as $discipline)
            <tr>
                <td>
                    {{ $discipline->title }}
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
            {!! Form::submit('Додати', ['class' => 'btn btn-primary form-control ']) !!}
        </div>
        {!! Form::close() !!}

    </div>


</div>

@endsection
