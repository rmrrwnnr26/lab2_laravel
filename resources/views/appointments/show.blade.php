@extends('layout')
@section('title', 'Запись')
@section('content')
    <style>
        .info {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .button_serv {
            display: flex;
            justify-content: center;
            margin: 20px;
        }
    </style>
    <h2>Запись #{{ $appointment->id }}</h2>
    
    <div class="info">
        <p ><strong>ID:</strong> {{ $appointment->id }}</p>
        <p><strong>Клиент:</strong> {{ $appointment->user->name }} ({{ $appointment->user->phone }})</p>
        <p><strong>Услуга:</strong> {{ $appointment->service->name }}</p>
        <p><strong>Категория услуги:</strong> {{ $appointment->service->category->name ?? 'Не указана' }}</p>
        <p><strong>Дата и время:</strong> {{ $appointment->appointment_datetime }}</p>
        <p><strong>Цена:</strong> {{ $appointment->price }} руб.</p>
        <p><strong>Создано:</strong> {{ $appointment->created_at }}</p>
        <p><strong>Обновлено:</strong> {{ $appointment->updated_at }}</p>
    </div>

    <div class="button_serv">
        <a class="btn btn-logout ms-2" href="{{ route('appointments.edit', $appointment->id) }}">Редактировать</a>
        <a class="btn btn-logout ms-2" href="{{ route('appointments.index') }}" style="margin-left: 10px;">Назад к списку</a>
    </div>
