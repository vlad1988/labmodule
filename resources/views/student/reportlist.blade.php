@extends('app')
@section('content')
<div class="container">
    <h4>Перегляд звітів студентів </h4>
	<table class="table table-hover">
            <tr>
                <th>Ім'я Прізвище</th>
                <th>Email</th>
                <th>UUID</th>
            </tr>
            @foreach ($students as $student)
            <tr>
                <td>
                    {{ $student->surname }} {{ $student->name }}
                </td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->guid }}</td>

            </tr>
            @endforeach
        </table>
</div>
@endsection 