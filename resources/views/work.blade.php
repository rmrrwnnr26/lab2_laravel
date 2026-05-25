@extends('layout')
@section('title', 'Информация об услуге')
@section('content')
    <style>
        .works {
            width: 1200px;
            
            .works-item {
                background-color: #F6F6F6;
                border-style: solid;
                border-radius: 20px;
                border-color: #F6F6F6;
                padding-top: 26px;
                margin-bottom: 40px;

                h3 {
                    font-family: "Bruno Ace", sans-serif;
                    font-size: 30px;
                    text-align: center;
                    margin-bottom: 26px;
                }

                .images {
                    display: flex;
                    gap: 5px;
                    justify-content: center;
                    margin-bottom: 57px;
                }
            }
        }

    </style>
    <div class="container">
        <h2>МОИ РАБОТЫ</h2>
        <div class="works">
            <div class="works-item">
                <h3>НАРАЩИВАНИЕ</h3>
                <div class="images">
                    <img src="/images/n1.svg" alt="">   
                    <img src="/images/n2.svg" alt="">
                    <img src="/images/n3.svg" alt="">
                    <img src="/images/n4.svg" alt="">
                </div>
            </div>
            <div class="works-item">
                <h3>ОДНОТОН</h3>
                <div class="images">
                    <img src="/images/o1.svg" alt="">   
                    <img src="/images/o2.svg" alt="">
                    <img src="/images/o3.svg" alt="">
                    <img src="/images/o4.svg" alt="">
                </div>
            </div>
            <div class="works-item">
                <h3>КОРОТКИЕ НОГТИ</h3>
                <div class="images">
                    <img src="/images/kor1.svg" alt="">   
                    <img src="/images/kor2.svg" alt="">
                    <img src="/images/kor3.svg" alt="">
                    <img src="/images/kor4.svg" alt="">
                </div>
            </div>
            <div class="works-item">
                <h3>КРЕАТИВНЫЕ ДИЗАЙНЫ</h3>
                <div class="images">
                    <img src="/images/k1.svg" alt="">   
                    <img src="/images/k2.svg" alt="">
                    <img src="/images/k3.svg" alt="">
                    <img src="/images/k4.svg" alt="">
                </div>
            </div>
            <p style="text-align: center; margin-bottom:40px;">БОЛЬШЕ ИНТЕРЕСНОГО В ТЕЛЕГРАМ КАНАЛЕ!</p>
            <div class="networks">
                <div class="btn_links">
                    <a class="link" href="https://t.me/rmrrwnna1ls">ТЕЛЕГРАМ</a>
                    <a class="link" href="https://mastapp.online/m/rmrrwnnr">ЗАПИСАТЬСЯ</a>
                </div>
            </div>    
        </div>
    </div>
    
@endsection