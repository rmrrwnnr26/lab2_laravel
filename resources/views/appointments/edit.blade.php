<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Редактирование записи</title>
    <style>
        .is-invalid { color: red; }
        .error { color: red; font-size: 12px; }
        form { max-width: 500px; margin: 20px; }
        label { display: block; margin: 10px 0 5px; }
        input, select { width: 100%; padding: 8px; margin-bottom: 5px; }
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

    <form method="POST" action="/appointments/{{ $appointment->id }}">
        @csrf
        @method('PUT')
        
        <div>
            <label for="id_users">Клиент:</label>
            <select name="id_users" id="id_users" class="{{ $errors->has('id_users') ? 'is-invalid' : '' }}">
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

        <div>
            <label for="id_service">Услуга:</label>
            <select name="id_service" id="id_service" class="{{ $errors->has('id_service') ? 'is-invalid' : '' }}">
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

        <div>
            <label for="appointment_datetime">Дата и время:</label>
            <input type="datetime-local" 
                   name="appointment_datetime" 
                   id="appointment_datetime"
                   value="{{ old('appointment_datetime', $appointment->appointment_datetime) }}"
                   class="{{ $errors->has('appointment_datetime') ? 'is-invalid' : '' }}">
            @error('appointment_datetime')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="price">Цена:</label>
            <input type="number" 
                   name="price" 
                   id="price"
                   step="0.01"
                   value="{{ old('price', $appointment->price) }}"
                   class="{{ $errors->has('price') ? 'is-invalid' : '' }}">
            @error('price')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div style="margin-top: 20px;">
            <button type="submit">Обновить запись</button>
            <a href="{{ route('appointments.index') }}" style="margin-left: 10px;">Отмена</a>
        </div>
    </form>
</body>
</html>