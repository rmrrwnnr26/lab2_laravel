@extends('layout')
@section('title', 'Редактирование записи')
@section('content')
    <style>
        .is-invalid { color: red; }
        .error { color: red; font-size: 12px; }
        form { max-width: 500px; margin: 20px; }
        label { display: block; margin: 10px 0 5px; }
        input, select { width: 100%; padding: 8px; margin-bottom: 5px; }

        form {
            max-width: 500px;
            margin: 20px;
        }

        .update_app {
            justify-content: center;
            display: flex;
            align-items: center;
        }

        .points {
            display: flex;
            flex-direction: column;
            width: 500px;
        }

        .form-contr {
            border: 1px solid #ced4da;
            transition: border-color 0.3s ease;
            height: 38px;
            width: 500px;
            border-radius: 3px;
            padding-left: 15px;
            padding-right: 10px;
        }
    </style>
</head>
<body>
    <h2>Редактирование записи #{{ $appointment->id }}</h2>
    
    @if($errors->any())
        <div style="color: red; background: #ffeeee; padding: 10px; margin: 10px 0;">
            <strong>Исправьте следующие ошибки:</strong>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="update_app">
            <form method="POST" action="/appointments/{{ $appointment->id }}">
                @csrf
                @method('PUT')
                
                <div class="points">
                    <label for="id_users">Клиент:</label>
                    <select name="id_users" id="id_users" class="form-contr {{ $errors->has('id_users') ? 'is-invalid' : '' }}">
                        <option value="">Выберите клиента</option>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}" 
                                {{ (old('id_users', $appointment->id_users) == $user->id) ? 'selected' : '' }}>
                                {{ $user->name }} ({{ $user->phone }})
                            </option>
                        @endforeach
                    </select>
                    @error('id_users')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="points">
                    <label for="id_service">Услуга:</label>
                    <select name="id_service" id="id_service" class="form-contr {{ $errors->has('id_service') ? 'is-invalid' : '' }}">
                        <option value="">Выберите услугу</option>
                        @foreach($services as $service)
                            <option value="{{ $service->id }}" 
                                {{ (old('id_service', $appointment->id_service) == $service->id) ? 'selected' : '' }}>
                                {{ $service->name }} - {{ $service->price }} руб.
                            </option>
                        @endforeach
                    </select>
                    @error('id_service')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="points">
                    <label for="appointment_datetime">Дата и время:</label>
                    <input type="datetime-local" 
                        name="appointment_datetime" 
                        id="appointment_datetime"
                        value="{{ old('appointment_datetime', $appointment->appointment_datetime) }}"
                        class=" form-contr {{ $errors->has('appointment_datetime') ? 'is-invalid' : '' }}">
                    @error('appointment_datetime')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="points">
                    <label for="price">Цена:</label>
                    <input type="number" 
                        name="price" 
                        id="price"
                        step="0.01"
                        value="{{ old('price', $appointment->price) }}"
                        class="form-contr {{ $errors->has('price') ? 'is-invalid' : '' }}">
                    @error('price')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="bottom" style="margin-top: 20px;">
                    <button class="button" type="submit">Обновить запись</button>
                    <a href="{{ route('appointments.index') }}" style="margin-left: 225px">Отмена</a>
                </div>
            </form>
        </div>
@endsection