<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-31</title>
    <style> 
        .is-invalid { 
            color: red; 
        }
        form {
            max-width: 500px;
            margin: 20px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h2>Добавление записи</h2>
    
    @if($errors->any())
        <div style="color: red; margin: 10px 0;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('appointments.store') }}">
        @csrf
        
        <label>Клиент:</label>
        <select name="id_users" class="{{ $errors->has('id_users') ? 'is-invalid' : '' }}">
            <option value="">Выберите клиента</option>
            @foreach($users as $user)
                <option value="{{ $user->id }}" 
                    {{ old('id_users') == $user->id ? 'selected' : '' }}>
                    {{ $user->name }} ({{ $user->phone }})
                </option>
            @endforeach
        </select>
        @error('id_users')
            <div class="is-invalid">{{ $message }}</div>
        @enderror
        <br>

        <label>Услуга:</label>
        <select name="id_service" class="{{ $errors->has('id_service') ? 'is-invalid' : '' }}">
            <option value="">Выберите услугу</option>
            @foreach($services as $service)
                <option value="{{ $service->id }}" 
                    {{ old('id_service') == $service->id ? 'selected' : '' }}>
                    {{ $service->name }} - {{ $service->price }} руб.
                </option>
            @endforeach
        </select>
        @error('id_service')
            <div class="is-invalid">{{ $message }}</div>
        @enderror
        <br>

        <label>Дата и время записи:</label>
        <input type="datetime-local" 
               name="appointment_datetime" 
               value="{{ old('appointment_datetime') }}"
               class="{{ $errors->has('appointment_datetime') ? 'is-invalid' : '' }}">
        @error('appointment_datetime')
            <div class="is-invalid">{{ $message }}</div>
        @enderror
        <br>

        <label>Цена:</label>
        <input type="number" 
               name="price" 
               step="0.01"
               value="{{ old('price') }}"
               class="{{ $errors->has('price') ? 'is-invalid' : '' }}">
        @error('price')
            <div class="is-invalid">{{ $message }}</div>
        @enderror
        <br>

        <input type="submit" value="Создать запись">
    </form>
</body>
</html>