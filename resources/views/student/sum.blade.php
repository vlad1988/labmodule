@extends('app')
@section('content')

<div class="container">
    <h4>Web-технології - АК-11-1</h4>

    <table class="table table-hover">
        <tr>
            <th> Студент </th>
            <th>Виконано/Заплановано</th>
            <th>К-ть балів</th>
            <th></th>
        </tr>
        <tr>
            <td> Макаров Кирило </td>
            <td><span class="badge">4/4</span></td>
            <td>20</td>
            <td><button class="btn btn-default"><i class="glyphicon glyphicon-user"></i> Профіль</button></td>
        </tr>
        <tr>
            <td>Паливода Ліза </td>
            <td><span class="badge">3/4</span></td>
            <td>15</td>
            <td><button class="btn btn-default"><i class="glyphicon glyphicon-user"></i> Профіль</button></td>
        </tr>
        <tr>
            <td>Самчішин Михайло </td>
            <td><span class="badge">3/4</span></td>
            <td>15</td>
            <td><button class="btn btn-default"><i class="glyphicon glyphicon-user"></i> Профіль</button></td>
        </tr>
        <tr>
            <td>Сікорський Денис </td>
            <td><span class="badge">3/4</span></td>
            <td>15</td>
            <td><button class="btn btn-default"><i class="glyphicon glyphicon-user"></i> Профіль</button></td>
        </tr>
        <tr>
            <td>Скирда Катерина </td>
            <td><span class="badge">3/4</span></td>
            <td>15</td>
            <td><button class="btn btn-default"><i class="glyphicon glyphicon-user"></i> Профіль</button></td>
        </tr>
        <tr>
            <td>Франко Іван  </td>
            <td><span class="badge">2/4</span></td>
            <td>10</td>
            <td>
                <button class="btn btn-default"><i class="glyphicon glyphicon-user"></i> Профіль</button>
            </td>
        </tr>
        <tr>
            <td> Цимбал Ярослав  </td>
            <td><span class="badge">3/4</span></td>
            <td>15</td>
            <td>
                <button class="btn btn-default"><i class="glyphicon glyphicon-user"></i> Профіль</button>
            </td>
        </tr>
    </table>
    <button class="btn btn-default"><i class="glyphicon glyphicon-print"></i> Друк</button>
</div>

@endsection