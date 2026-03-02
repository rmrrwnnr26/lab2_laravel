@extends('layout')
@section('title', 'Услуги')
@section('content')
    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .table-wrapper {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin: 0 auto;
            width: 1200px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto;
        }

        th {
            background-color: #EBC9E5;
            padding: 15px;
            text-align: left;
            color: #333;
        }

        td {
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
        }

        tr:hover {
            background-color: #f9f9f9;
        }
    </style>
    <div class="container">
        <h2>Список услуг:</h2>
        <div class="table-wrapper"> 
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Наименование</th>
                        <th>Цена</th>
                        <th>Категория</th>
                    </tr>
                </thead>
            @foreach ($services as $service)
                <tr>
                    <td>{{$service->id}}</td>
                    <td>{{$service->name}}</td>
                    <td>{{$service->price}}</td>
                    <td>{{$service->category->name}}</td>
                </tr>
            @endforeach
            </table>
        </div>
    </div>
@endsection