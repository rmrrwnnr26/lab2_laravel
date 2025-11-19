<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Service Details</title>
    <style>
        table { border-collapse: collapse; margin: 20px 0; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>{{ $service ? "Информация об услуге: {$service->name}" : 'Услуга не найдена' }}</h2>
    
    @if($service)
        <div>
            <h3>Основная информация:</h3>
            <p><strong>ID:</strong> {{ $service->id }}</p>
            <p><strong>Название:</strong> {{ $service->name }}</p>
            <p><strong>Время выполнения:</strong> {{ $service->service_time }}</p>
            <p><strong>Цена услуги:</strong> {{ $service->price }}</p>
            <p><strong>Категория:</strong> {{ $service->category->name ?? 'Не указана' }}</p>
        </div>

        <div>
            <h3>Пользователи, записанные на эту услугу:</h3>
            @if($service->users->count() > 0)
                <table>
                    <tr>
                        <th>ID пользователя</th>
                        <th>Имя пользователя</th>
                        <th>Телефон</th>
                        <th>Дата записи</th>
                        <th>Цена в записи</th>
                    </tr>
                    @foreach ($service->users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->pivot->appointment_datetime }}</td>
                        <td>{{ $user->pivot->price }}</td>
                    </tr>
                    @endforeach
                </table>
            @else
                <p>Нет записей на эту услугу</p>
            @endif
        </div>
    @endif
</body>
</html>