@extends('app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-4">
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
            </tr>
            @endforeach
        </table>
        </div>
        <div class="col-md-8">

            <table class="table table-condensed">
                <tr>
                    <th>Прізвище Ім'я</th>
                    <th>UUID</th>
                    <th>Email</th>
                </tr>
                @foreach ($students as $student)
                <tr>
                    <td>
                       {{ $student->surname}} {{ $student->name}}
                   </td>
                   <td>
                    {{ $student->guid}}
                </td>
                <td>
                    {{ $student->email}}
                </td>
            </tr>
            @endforeach
        </table>


    </div>
</div>


</div>

@endsection
