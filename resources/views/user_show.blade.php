@extends('layout')
@section('title', 'Детали клиента')
@section('content')

    <style>
        table { border-collapse: collapse; margin: 20px 0; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>

    <h2>{{ $user ? "Пользователь: {$user->name}" : 'Пользователь не найден' }}</h2>
    
    @if($user)
    <div class="user">
        <div>
            <h4>Основная информация:</h4>
            <p><strong>ID:</strong> {{ $user->id }}</p>
            <p><strong>Имя:</strong> {{ $user->name }}</p>
            <p><strong>Телефон:</strong> {{ $user->phone }}</p>
        </div>

        <div>
            <h4>Записи пользователя на услуги:</h4>
            @if($user->services->count() > 0)
                <table>
                    <tr>
                        <th>ID услуги</th>
                        <th>Название услуги</th>
                        <th>Категория</th>
                        <th>Время выполнения</th>
                        <th>Дата записи</th>
                        <th>Цена в записи</th>
                    </tr>
                    @foreach ($user->services as $service)
                    <tr>
                        <td>{{ $service->id }}</td>
                        <td>{{ $service->name }}</td>
                        <td>{{ $service->category->name ?? 'Не указана' }}</td>
                        <td>{{ $service->service_time }}</td>
                        <td>{{ $service->pivot->appointment_datetime }}</td>
                        <td>{{ $service->pivot->price }}</td>
                    </tr>
                    @endforeach
                </table>
            @else
                <p>У пользователя нет записей на услуги</p>
            @endif
        </div>
    </div>
        
    @endif
