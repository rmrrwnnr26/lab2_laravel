    @extends('layout')
    @section('title', '609-31')
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

        .actions a {
            display: inline-block;
            margin-right: 8px;
            padding: 5px 10px;
            border-radius: 4px;
            text-decoration: none;
        }

        .view-btn {
            background: #e8f4ff;
            color: #0066cc;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }

        .edit-btn {
            background: #fff8e1;
            color: #b06d00;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }

        .delete-btn {
            background: #ffeaea;
            color: #cc0000;
            border: none;
            cursor: pointer;
            font-size: 14px;
            margin-right: 8px;
            padding: 5px 10px;
            border-radius: 4px;
        }

        .pagination-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
            margin-top: 50px;
            margin-bottom: 30px; /* Отступ снизу */
        }

        .pagination {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
            gap: 5px;
        }

        /* .pagination li {
            display: inline-block;
        } */

        .pagination li a,
        .pagination li span {
            display: block;
            padding: 8px 12px;
            border-radius: 5px;
            text-decoration: none;
            background: white;
            color: #333;
            border: 1px solid #ddd;
            /* transition: all 0.2s; */
            font-size: 14px;
        }

        .pagination li a:hover {
            background: #EBC9E5;
            color: #333;
            border-color: #EBC9E5;
        }

        .pagination .active span {
            background: #EBC9E5;
            color: #333;
            border-color: #EBC9E5;
            font-weight: bold;
        }

        .pagination .page-link[rel="prev"],
        .pagination .page-link[rel="next"] {
            font-weight: bold;
        }

        .empty-message {
            text-align: center;
            padding: 40px;
            color: #777;
        }
    </style>
    <div class="container">
        <h2>Список записей на услуги</h2>
        
        @if(session('success'))
            <div style="background:#d4edda; color:#155724; padding:15px; border-radius:5px; margin:20px auto; max-width:1000px; text-align:center;">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-wrapper">
            @if($appointments->isEmpty())
                <p class="empty-message">Записей пока нет</p>
            @else
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
                                <a href="/appointments/{{ $appointment->id }}" class="view-btn">Просмотр</a>
                                <a href="/appointments/{{ $appointment->id }}/edit" class="edit-btn">Редактировать</a>
                                <form method="POST" action="/appointments/{{ $appointment->id }}" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete-btn" onclick="return confirm('Удалить запись?')">Удалить</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>

        @if(!$appointments->isEmpty())
            <div class="pagination-container">
                {{ $appointments->links() }}
            </div>
        @endif
    </div>
    @endsection
