@extends('layout')
@section('title', 'Добавление товара')
@section('content')
<style>
    .invalid-feedback {
        color: red;
        font-size: 0.875em;
        margin-top: 0.25rem;
    }
    .form-text {
        font-size: 0.875em;
        color: #6c757d;
        margin-top: 0.25rem;
    }
    .form-label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 500;
    }
    .form-select, .form-control {
        display: block;
        width: 100%;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        color: #212529;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 20px;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
    .form-select:focus, .form-control:focus {
        border-color: #86b7fe;
        outline: 0;
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    }
    .is-invalid {
        border-color: #dc3545 !important;
    }
    .mb-3 {
        margin-bottom: 1rem;
    }

    form {
        max-width: 500px;
        margin: 20px;
    }

    .add_service {
        display: flex;
        justify-content: center;
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
@extends('navbar')
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
<div class="add_service">
    <form method="POST" action="{{ route('appointments.store') }}">
        @csrf
        
        <div class="points">
            <div class="mb-3">
                <label for="id_users" class="form-label">Клиент</label>
                <select class="form-select {{ $errors->has('id_users') ? 'is-invalid' : '' }}" 
                        id="id_users" 
                        name="id_users" 
                        aria-describedby="userHelp">
                    <option value="">Выберите клиента</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}"
                            @if(old('id_users') == $user->id) selected @endif>
                            {{ $user->name }} ({{ $user->phone }})
                        </option>
                    @endforeach
                </select>
                <div id="userHelp" class="form-text">Выберите клиента из списка</div>
                @error('id_users')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        
        <div class="points">
            <div class="mb-3">
                    <label for="id_service" class="form-label">Услуга</label>
                    <select class="form-select {{ $errors->has('id_service') ? 'is-invalid' : '' }}" 
                            id="id_service" 
                            name="id_service" 
                            aria-describedby="serviceHelp">
                        <option value="">Выберите услугу</option>
                        @foreach($services as $service)
                            <option value="{{ $service->id }}"
                                @if(old('id_service') == $service->id) selected @endif>
                                {{ $service->name }} - {{ $service->price }} руб.
                            </option>
                        @endforeach
                    </select>
                    <div id="serviceHelp" class="form-text">Выберите услугу из списка</div>
                    @error('id_service')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
            </div>
        </div>
        
        <div class="points">
            <div class="mb-3">
                <label for="appointment_datetime" class="form-label">Дата и время записи</label>
                <input type="datetime-local" 
                    class="form-contr {{ $errors->has('appointment_datetime') ? 'is-invalid' : '' }}" 
                    id="appointment_datetime" 
                    name="appointment_datetime" 
                    value="{{ old('appointment_datetime') }}"
                    aria-describedby="datetimeHelp">
                <div id="datetimeHelp" class="form-text">Выберите дату и время записи</div>
                @error('appointment_datetime')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        
        <div class="points">
            <div class="mb-3">
                <label for="price" class="form-label">Цена</label>
                <input type="number" 
                    class="form-contr {{ $errors->has('price') ? 'is-invalid' : '' }}" 
                    id="price" 
                    name="price" 
                    step="0.01"
                    value="{{ old('price') }}"
                    aria-describedby="priceHelp">
                <div id="priceHelp" class="form-text">Введите цену услуги</div>
                @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        

        <button type="submit" class="button ">Добавить</button>
    </form>
</div>
@endsection