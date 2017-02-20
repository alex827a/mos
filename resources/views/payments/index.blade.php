@extends('app')

@section('content')

@include('partials.nav')

    <div class="payments__top service__top padding">
        <div class="container">

            <div class="page-title margin-btm">Платежи</div>

            <div class="row justify-content-between align-items-center">

                <div class="service__top__city col-lg">
                    <span>Ваш город: </span>
                    <select>
                        <option>Астана</option>
                        <option selected>Алматы</option>
                        <option>Караганда</option>
                        <option>Усть-Каменогорск</option>
                        <option>Город</option>
                        <option>Город</option>
                    </select>
                </div>

                <div class="service__top__search col-lg-auto">
                    <input type="search" placeholder="Поиск услуги, например Билайн">
                    <input type="submit" value="">
                </div>

            </div>

        </div>
    </div>

    <div class="payments__banners service__banners">
        <div class="container">

            <div class="row">

                <div class="col-lg-6 overflow">
                    <div class="payments__banner__mobile service__banner">
                        <div class="service__banner__title center-xs">Пополнить баланс мобильного</div>
                        <div class="payments__banner__mobile__brands padding-sm">
                            <img src="/public/img/services/beeline.png">
                            <img src="/public/img/services/activ.png">
                        </div>
                        <div class="payments__banner__mobile__form row">
                            <div class="col-sm col-12"><input type="tel" name="mobilePaymentNumber" class="input-phone" placeholder="+7 (___) ___-__-__" size="18" /></div>
                            <div class="col-sm-auto col-12 center-xs"><button class="btn btn-blue">Пополнить</button></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 overflow">
                    <div class="payments__banner__utilities service__banner">
                        <div class="service__banner__title center-xs">Оплатить ком. услуги</div>
                        <br /><br />
                        <a href="#" class="btn btn-black">Интернет</a>
                        <a href="#" class="btn btn-black">Элекричество</a>
                        <a href="#" class="btn btn-black">Газ</a>
                        <a href="#" class="btn btn-black-ghost">Еще</a>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <div class="payments__cats padding-lg">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-6 col-lg-3 col-sm-4 payments__cats__item">
                    <a href="pay-comm.html">
                        <img src="/public/img/services/pay-internet.svg">
                        <p>Телефон и интернет</p>
                    </a>
                </div>
                <div class="col-6 col-lg-3 col-sm-4 payments__cats__item">
                    <a href="pay-utilities.html">
                        <img src="/public/img/services/pay-utilities.svg">
                        <p>Коммунальные услуги</p>
                    </a>
                </div>
                <div class="col-6 col-lg-3 col-sm-4 payments__cats__item">
                    <a href="pay-tv.html">
                        <img src="/public/img/services/pay-tv.svg">
                        <p>Телевидение</p>
                    </a>
                </div>
                <div class="col-6 col-lg-3 col-sm-4 payments__cats__item">
                    <a href="pay-loan.html">
                        <img src="/public/img/services/pay-loan.svg">
                        <p>Погашение кредитов</p>
                    </a>
                </div>
                <div class="col-6 col-lg-3 col-sm-4 payments__cats__item">
                    <a href="pay-deposit.html">
                        <img src="/public/img/services/pay-deposit.svg">
                        <p>Пополнение депозитов</p>
                    </a>
                </div>
                <div class="col-6 col-lg-3 col-sm-4 payments__cats__item">
                    <a href="pay-transport.html">
                        <img src="/public/img/services/pay-transport.svg">
                        <p>Общественный транспорт</p>
                    </a>
                </div>
                <div class="col-6 col-lg-3 col-sm-4 payments__cats__item">
                    <a href="pay-study.html">
                        <img src="/public/img/services/pay-study.svg">
                        <p>Образование</p>
                    </a>
                </div>
                <div class="col-6 col-lg-3 col-sm-4 payments__cats__item">
                    <a href="pay-games.html">
                        <img src="/public/img/services/pay-games.svg">
                        <p>Игры и развлечения</p>
                    </a>
                </div>
                <div class="col-6 col-lg-3 col-sm-4 payments__cats__item">
                    <a href="pay-gov.html">
                        <img src="/public/img/services/pay-gov.svg">
                        <p>Госуслуги</p>
                    </a>
                </div>
                <div class="col-6 col-lg-3 col-sm-4 payments__cats__item">
                    <a href="pay-charity.html">
                        <img src="/public/img/services/pay-charity.svg">
                        <p>Благотворительность</p>
                    </a>
                </div>
            </div>


        </div>
    </div>


@include('partials.footer')

@include('partials.support')

@endsection