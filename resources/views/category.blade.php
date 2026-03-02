<!DOCTYPE html>
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
    <h2>{{$category ? "Список товаров категории ".$category->name : 'Неверный ID категории' }}</h2>
    @if($category)
    <table border="1">
        <tr>
            <th>id</th>
            <th>Наименование</th>
            <th>Цена</th>
        </tr>
        @foreach ($category->services as $service)
            <tr>
                <td>{{$service->id}}</td>
                <td>{{$service->name}}</td>
                <td>{{$service->price}}</td>
            </tr>
        @endforeach
    </table>
    @endif
</body>
</html>
