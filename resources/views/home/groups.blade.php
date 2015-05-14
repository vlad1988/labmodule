@extends('app')
@section('content')

<div class="container">
    <div class="content row">
        <div class="col-md-6">
            <h4 class="title">Групи</h4> 
            <table class="table table-striped">
                <tr>
                    @foreach($groups as $group)
                    <td>{{ $group->title }}</td>
                    @endforeach
                </tr>

            </table>
        </div>
        <div class="col-md-6">
            <h4 class="title">Додати группу</h4>
            {!! Form::open(['url' => 'articles']) !!}
            <div class="form-group">
                {!! Form::label('title', 'Назва:') !!}
                {!! Form::text('title', null, ['class' => 'form-control ']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Додати групу', ['class' => 'btn btn-primary form-control ']) !!}
            </div>
            {!! Form::close() !!}
        </div>


    </div>
</div>
@endsection