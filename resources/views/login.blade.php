@extends('layout')
@section('title', 'Вход')

@section('content')
<style> 
    .is-invalid { 
        color: red; 
    }
    
    .success-message {
        color: green;
        background-color: #d4edda;
        border: 1px solid #c3e6cb;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 15px;
        text-align: center;
    }

    form {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .email {
        display: flex;
        flex-direction: column;
        width: 500px;
    }
    
    .item{
        margin-top: 10px;
        height: 35px;
        border-radius: 20px;
        padding-left: 10px;
        background-color: #fff;
    }

    .password {
        display: flex;
        flex-direction: column;
        width: 500px;
    }
</style>


@if(auth()->check())
    <h2>Здравствуйте, {{ auth()->user()->name }}</h2>
    <a href="{{ url('logout') }}">Выйти из системы</a>
@else
    <h2>Вход в систему</h2>
    <form method="post" action="{{ route('auth') }}">
    @csrf
    <div class="form">
        <input type="hidden" name="redirect" value= {{ request('redirect') }}/>
        <div class="email">
            <label>E-mail</label>
            <input class="item @error('email') is-invalid @enderror" type="text" name="email" value="{{ old('email') }}"/>
            @error('email')
            <div class="is-invalid">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div class="password">
            <label>Пароль</label>
            <input class="item @error('password') is-invalid @enderror" type="password" name="password"/>
            @error('password')
            <div class="is-invalid">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <input class="button" type="submit">
        
        <!-- ошибка аунтефикации -->
        @if(session('error'))
            <div class="is-invalid">{{ session('error') }}</div>
        @endif
        
        @if($errors->has('error'))
            <div class="is-invalid">{{ $errors->first('error') }}</div>
        @endif
        </form>
    </div>
    
@endif
@endsection