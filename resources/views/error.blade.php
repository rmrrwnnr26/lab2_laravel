@extends('layout')
@section('title', 'Ошибка доступа')
@section('content')
    <style>
        a{
            text-align: center;
        }
    </style>
    <h2>{{ session('message') }}</h2>
    <a href="{{ url()->previous() }}">Назад</a>
    <div class="container" style="margin-top: 80px">
        @error('email')
        <div class="alert alert-warning" role="alert">
            {{ $message }}
        </div>
        @enderror
        
        @error('password')
        <div class="alert alert-warning" role="alert">
            {{ $message }}
        </div>
        @enderror
        
        @error('error')
        <div class="alert alert-warning" role="alert">
            {{ $message }}
        </div>
        @enderror
        
        @error('success')
        <div class="alert alert-success" role="alert">
            {{ $message }}
        </div>
        @enderror
    </div>
@endsection