@extends('layout')
@section('title', 'Информация об услуге')
@section('content')
    <h2>Услуга: {{ $service->name }}</h2>
    
    <h3>Информация об услуге:</h3>
    <p><strong>ID:</strong> {{ $service->id }}</p>
    <p><strong>Название:</strong> {{ $service->name }}</p>
    <p><strong>Категория:</strong> {{ $service->category->name }}</p>
    <p><strong>Время выполнения:</strong> {{ $service->service_time }}</p>
    <p><strong>Цена:</strong> {{ $service->price }} руб.</p>
@endsection