@extends('layout')
@section('title', 'RMRNAI1S')
@section('content')
    <style>
        /* .body {
            background-image: url('/images/main.svg');
            height: 500px;
            width: 100%;
        } */
        .main {
            display: flex;
            flex-direction: column;
            align-items: end;
            justify-content: center;
            margin-right: 700px;
            margin-top: 100px;
            margin-bottom: 100px;
        }
        h1{
            font-size: 86px;
            color: #333 !important;
            letter-spacing: 1px;
            font-family: "Bruno Ace", sans-serif;
            font-style: normal;
            margin-bottom: 30px;
        }
        h2{
            font-size: 40px;
            color: #333 !important;
            letter-spacing: 1px;
            font-family: "Bruno Ace", sans-serif;
            font-style: normal;
            margin-bottom: 30px;
        }
        h5 {
            font-size: 20px;
            color: #333 !important;
            letter-spacing: 1px;
            font-family: "Bruno Ace", sans-serif;
            font-style: normal;
        }

        .item {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        img {
            width: 473px;
            height: 631px;
            margin-right: 85px;
        }

        li {
            font-size: 15px;
            color: #333 !important;
            letter-spacing: 1px;
            font-family: "Bruno Ace", sans-serif;
            font-style: normal;
            /* padding-bottom: 15px; */

        }

        ul {
            list-style-type: square;
        }
    </style>
    <div class="body">
        <div class="main">
            <!-- <img src="/public/images/main.svg" alt=""> -->
            <h1>RMRNAI1S</h1>
            <h5>МАСТЕР МАНИКЮРА</h5>
            <h5>& НАРАЩИВАНИЯ</h5>
        </div>
        <div class="about">
            <h2>ОБО МНЕ</h2>
            <div class="item">
                <img src="/images/me.svg" alt="">
                <ul>
                    <li style="padding-bottom: 30px;">ПРИВЕТ! Я ВИКА, ЗАНИМАЮСЬ НОГТЯМИ С 2021 ГОДА</li> 
                    <li style="padding-bottom: 30px;">СДЕЛАЮ НА ВАШИХ РУЧКАХ ВСЕ, ЧТО ЗАХОТИТЕ</li>
                    <li style="padding-bottom: 30px;">ПОБОЛТАЕМ НА ВСЕ ИНТЕРЕСУЮЩИЕ ТЕМЫ</li>
                    <li style="padding-bottom: 30px;">ЛЮБЛЮ КРЕАТИВ, НО И ОТ КЛАССИЧЕСКОГО ФРЕНЧА НЕ ОТКАЖУСЬ</li>
                </ul>
            </div>
            
        </div>
    </div>

    

@endsection