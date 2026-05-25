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
            margin-bottom: 70px;
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

        .me {
            width: 473px;
            height: 631px;
            margin-right: 85px;
        }


        p {
            font-size: 15px;
            color: #333 !important;
            letter-spacing: 1px;
            font-family: "Bruno Ace", sans-serif;
            font-style: normal;

        }

        .points {
            display: flex;
            align-items: flex-end;
            gap: 20px;
            
        }

        ul {
            list-style-type: square;

        }

        .works {
            display: flex;
            align-items: center;
            flex-direction: column;

            .works_img {
                display: flex;
                justify-content: center;
                gap: 42px;
                margin-bottom: 70px;
            }

            
        }

        .price {
            .price_list {
                font-family: "Bruno Ace", sans-serif;
                display: flex;
                justify-content: center;
                gap: 70px;

                .list {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    gap: 40px;

                    .item_list {

                        .item {
                            width: 522px;
                            display: flex; 
                            align-items: stretch;
                            justify-content: space-between;

                            .number {
                                color: #000;
                            }
                        }

                    }
                }

                h3 {
                    font-size: 28px;
                }
            }
        }

        .adress {
            margin-bottom: 70px;

            .info {
                display: flex;
                align-items: center;
                flex-direction: column;

                .map {
                    width: 1200px;
                    height: 500px;
                    border-style: solid;
                    border-radius: 30px;
                    border-color: none;
                }

                .adress_info {
                    margin-top: 40px;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                }
            }
        }


        
    </style>
    <div class="body">
        <div class="main">
            <h1>RMRNAI1S</h1>
            <h5>МАСТЕР МАНИКЮРА</h5>
            <h5>& НАРАЩИВАНИЯ</h5>
        </div>
        <div class="about" style="margin-bottom: 70px;">
            <h2>ОБО МНЕ</h2>
            <div class="item">
                <img class="me" src="/images/me.svg" alt="">
                <ul>
                    <div class="points" style="margin-bottom: 60px;"><img class="star" src="/images/star.svg"><p>ПРИВЕТ! Я ВИКА, ЗАНИМАЮСЬ НОГТЯМИ С 2021 ГОДА</p> </div>
                    <div class="points" style="margin-bottom: 60px;"><img class="star" src="/images/star.svg"><p>СДЕЛАЮ НА ВАШИХ РУЧКАХ ВСЕ, ЧТО ЗАХОТИТЕ</p> </div>
                    <div class="points" style="margin-bottom: 60px;"><img class="star" src="/images/star.svg"><p>ПОБОЛТАЕМ НА ВСЕ ИНТЕРЕСУЮЩИЕ ТЕМЫ</p> </div>
                    <div class="points"><img class="star" src="/images/star.svg"><p>ЛЮБЛЮ КРЕАТИВ, НО И ОТ КЛАССИЧЕСКОГО ФРЕНЧА НЕ ОТКАЖУСЬ</p> </div>
                </ul>
            </div>
        </div>
        <div class="works" style="margin-bottom: 70px;">
            <h2>МОИ РАБОТЫ</h2>
            <div class="works_img">
                <img src="/images/1.svg" alt="">
                <img src="/images/2.svg" alt="">
                <img src="/images/3.svg" alt="">
            </div>
            <a class="view_more" href="{{ url('works') }}">ПОКАЗАТЬ БОЛЬШЕ</a>
        </div>
        <div class="price" style="margin-bottom: 70px;">
            <h2>ПРАЙС</h2>
            <div class="price_list">
                <div class="list">
                    <h3>МАНИКЮР</h3>
                    <div class="item_list">
                        <div class="item">
                            <p>МАНИКЮР БЕЗ ПОКРЫТИЯ</p>
                            <div class="number">800</div>
                        </div>
                        <div class="item">
                            <p>МАНИКЮР С ПОКРЫТИЕМ</p>
                            <div class="number">2000</div>
                        </div>
                    </div>
                </div>
                <div class="list">
                    <h3>НАРАЩИВАРНИЕ</h3>
                    <div class="item_list">
                        <div class="item">
                            <p>ДО 3-КИ</p>
                            <div class="number">2300</div>
                        </div>
                        <div class="item">
                            <p>ОТ 4-КИ ДО 7-КИ</p>
                            <div class="number">2500</div>
                        </div>
                        <div class="item">
                            <p>ОТ 8-КИ</p>
                            <div class="number">2700</div>
                        </div>
                        <div class="item">
                            <p>КОРРЕКЦИЯ НАРАЩИВАНИЯ</p>
                            <div class="number">2200</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="adress">
            <h2>АДРЕС</h2>
            <div class="info">
                <!-- <img src="/images/adress.svg" alt=""> -->
                <iframe class="map" src="https://yandex.ru/map-widget/v1/?um=constructor%3Aa870abe802fdaa5eda6813638404e3fb1cf71789edce99dea82d4e75deb268f8&amp;source=constructor" frameborder="0"></iframe>
                <div class="adress_info">
                    <p>Г. СУРГУТ</p>
                    <p>УЛ. СЕМЕНА БИЛЕЦКОГО 2</p>
                </div>
                
            </div>
            
        </div>
        <div class="networks">
            <h2>СВЯЗЬ СО МНОЙ</h2>
            <div class="btn_links">
                <a class="link" href="https://t.me/rmrrwnna1ls">ТЕЛЕГРАМ</a>
                <a class="link" href="https://mastapp.online/m/rmrrwnnr">ЗАПИСАТЬСЯ</a>
            </div>
        </div>    
            
    </div>

    

@endsection