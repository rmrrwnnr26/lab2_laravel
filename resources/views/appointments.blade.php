<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-31</title>
    <style>
        table { border-collapse: collapse; margin: 20px 0; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Список записей:</h2>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>Клиент</th>
                <th>Название услуги</th>
                <th>Дата и время записи</th>
                <th>Цена</th>
            </tr>
        </thead>
    @foreach ($appointments as $appointment)
        <tr>
            <td>{{$appointment->id}}</td>
            <td>{{$appointment->user->name}}</td>
            <td>{{$appointment->service->name}}</td>
            <td>{{$appointment->appointment_datetime}}</td>
            <td>{{$appointment->price}}</td>
        </tr>
    @endforeach
    </table>
</body>
</html> -->


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Список записей</title>
    <style>
        table { border-collapse: collapse;  margin: 20px 0; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .success { color: green; background: #eeffee; padding: 8px; }
        .actions { white-space: nowrap; }
        .actions a, .actions button { 
            margin: 0 5px; 
            padding: 5px 10px; 
            text-decoration: none;
            border: 1px solid #ddd;
            background: #f5f5f5;
            cursor: pointer;
        }
        .actions form { display: inline; }
    </style>
</head>
<body>
    <h2>Список записей на услуги</h2>
    
    @if(session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('appointments.create') }}" style="display: inline-block; margin: 10px 0; padding: 10px; background: #4CAF50; color: white; text-decoration: none;">
        + Создать новую запись
    </a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Клиент</th>
                <th>Услуга</th>
                <th>Дата и время</th>
                <th>Цена</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach($appointments as $appointment)
            <tr>
                <td>{{ $appointment->id }}</td>
                <td>{{ $appointment->user->name ?? 'Неизвестно' }}</td>
                <td>{{ $appointment->service->name ?? 'Неизвестно' }}</td>
                <td>{{ $appointment->appointment_datetime }}</td>
                <td>{{ $appointment->price }} руб.</td>
                <td class="actions">
                    
                    <a href="/appointments/{{ $appointment->id }}">Просмотр</a>
                    <a href="/appointments/{{ $appointment->id }}/edit">Редактировать</a>
                    <form method="POST" action="/appointments/{{ $appointment->id }}" 
                        onsubmit="return confirm('Удалить запись #{{ $appointment->id }}?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Удалить</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    @if($appointments->isEmpty())
        <p>Записей пока нет</p>
    @endif

    {{ $appointments->links() }}
</body>
</html>