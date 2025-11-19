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
    <h2>Список категорий:</h2>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>Наименование</th>
            </tr>
            @foreach ($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
            </tr>
            @endforeach
        </thead>
    </table>
</body>
</html>