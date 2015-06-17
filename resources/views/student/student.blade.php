@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            
        </div>
        <div class="col-md-6">
            <h4>{{ $student->name }} {{ $student->surname }}</h4>
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
                        {!! Form::open(array('url' => 'report/'.$student->id.'/'.$discipline->id.'/', 'method' => 'GET')) !!}
                        <input type="submit" value="Перейти до обліку" class="form-control btn btn-success">
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </table>

        </div>

    </div>

</div>
@endsection