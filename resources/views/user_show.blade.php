<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Details</title>
    <style>
        table { border-collapse: collapse; margin: 20px 0; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>{{ $user ? "Пользователь: {$user->name}" : 'Пользователь не найден' }}</h2>
    
    @if($user)
        <div>
            <h3>Основная информация:</h3>
            <p><strong>ID:</strong> {{ $user->id }}</p>
            <p><strong>Имя:</strong> {{ $user->name }}</p>
            <p><strong>Телефон:</strong> {{ $user->phone }}</p>
        </div>

        <div>
            <h3>Записи пользователя на услуги:</h3>
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
    @endif
</body>
</html>