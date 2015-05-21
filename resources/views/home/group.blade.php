@extends('app')

@section('content')
<div class="container">

    <table class="table table-condensed">
        <tr>
            <th>Прізвище</th>
            <th>Імя</th>
            <th>UUID</th>
            <th>Email</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>
                {{ $student->surname}}
            </td>
            <td>
                {{ $student->name}}
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

@endsection
