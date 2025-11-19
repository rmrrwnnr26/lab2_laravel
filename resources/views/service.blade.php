<!DOCTYPE html>
<html>
<head>
    <title>Услуга {{ $service->name }}</title>
</head>
<body>
    <h1>Услуга: {{ $service->name }}</h1>
    
    <h2>Информация об услуге:</h2>
    <p><strong>ID:</strong> {{ $service->id }}</p>
    <p><strong>Название:</strong> {{ $service->name }}</p>
    <p><strong>Категория:</strong> {{ $service->category->name }}</p>
    <p><strong>Время выполнения:</strong> {{ $service->service_time }}</p>
    <p><strong>Цена:</strong> {{ $service->price }} руб.</p>
</body>
</html>