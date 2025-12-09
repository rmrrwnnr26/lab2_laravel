<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Запись #{{ $appointment->id }}</title>
    <style>
        .info { max-width: 500px; margin: 20px; padding: 20px; border: 1px solid #ddd; }
        .info p { margin: 10px 0; }
    </style>
</head>
<body>
    <h2>Запись #{{ $appointment->id }}</h2>
    
    <div class="info">
        <p><strong>ID:</strong> {{ $appointment->id }}</p>
        <p><strong>Клиент:</strong> {{ $appointment->user->name }} ({{ $appointment->user->phone }})</p>
        <p><strong>Услуга:</strong> {{ $appointment->service->name }}</p>
        <p><strong>Категория услуги:</strong> {{ $appointment->service->category->name ?? 'Не указана' }}</p>
        <p><strong>Дата и время:</strong> {{ $appointment->appointment_datetime }}</p>
        <p><strong>Цена:</strong> {{ $appointment->price }} руб.</p>
        <p><strong>Создано:</strong> {{ $appointment->created_at }}</p>
        <p><strong>Обновлено:</strong> {{ $appointment->updated_at }}</p>
    </div>

    <div style="margin: 20px;">
        <a href="{{ route('appointments.edit', $appointment->id) }}">Редактировать</a>
        <a href="{{ route('appointments.index') }}" style="margin-left: 10px;">Назад к списку</a>
    </div>
</body>
</html>