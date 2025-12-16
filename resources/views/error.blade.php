<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-31</title>
</head>
<body>
     <h2>{{ session('message') ?? $message ?? 'Ошибка доступа' }}</h2>
    <a href="{{ url()->previous() }}">Назад</a>
</body>
</html>