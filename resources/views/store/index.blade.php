@extends('app')

@section('content')

@include('partials.nav')

<div class="store__top service__top padding">
    <div class="container">

        <div class="page-title margin-btm">Магазин</div>

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
                <input type="search" placeholder="Поиск товара или производителя">
                <input type="submit" value="">
            </div>

        </div>

    </div>
</div>

<div class="section-menu">
    <nav class="section-menu__menu container">
        <ul class="clearfix">

            <li>
                <a>Телефоны и гаджеты <span class="arrow">&#9660;</span></a>
                <ul class="section-menu__sub-menu">
                    <li><a href="#">Телефоны</a></li>
                    <li><a href="#">Планшеты</a></li>
                    <li><a href="#">Гаджеты</a></li>
                </ul>
            </li>

            <li>
                <a>Компьютеры <span class="arrow">&#9660;</span></a>
                <ul class="section-menu__sub-menu">
                    <li><a href="#">Настольные ПК</a></li>
                    <li><a href="#">Ноутбуки</a></li>
                    <li><a href="#">Комплектующие</a></li>
                    <li><a href="#">Принтеры и устройства</a></li>
                </ul>
            </li>
            <li>
                <a>Для дома <span class="arrow">&#9660;</span></a>
                <ul class="section-menu__sub-menu">
                    <li><a href="#">Пылесосы</a></li>
                    <li><a href="#">Стиральные машины</a></li>
                    <li><a href="#">Кондиционеры и обогреватели</a></li>
                    <li><a href="#">Техника для красоты</a></li>
                    <li><a href="#">Утюги и прочее</a></li>
                </ul>
            </li>
            <li>
                <a>Для кухни <span class="arrow">&#9660;</span></a>
                <ul class="section-menu__sub-menu">
                    <li><a href="#">Холодильники</a></li>
                    <li><a href="#">Кухонные приборы</a></li>
                    <li><a href="#">Плиты</a></li>
                </ul>
            </li>
            <li>
                <a>ТВ и аудио <span class="arrow">&#9660;</span></a>
                <ul class="section-menu__sub-menu">
                    <li><a href="#">Телевизоры</a></li>
                    <li><a href="#">Видеотехника</a></li>
                    <li><a href="#">Аудиотехника</a></li>
                    <li><a href="#">Приставки и игры</a></li>
                </ul>
            </li>
            <li>
                <a>Автотовары <span class="arrow">&#9660;</span></a>
                <ul class="section-menu__sub-menu">
                    <li><a href="#">Автоэлектроника</a></li>
                    <li><a href="#">Автоакустика</a></li>
                </ul>
            </li>
            <li>
                <a>Детские товары <span class="arrow">&#9660;</span></a>
                <ul class="section-menu__sub-menu">
                    <li><a href="#">Детские автокресла</a></li>
                    <li><a href="#">Коляски</a></li>
                    <li><a href="#">Детская мебель</a></li>
                    <li><a href="#">Игрушки</a></li>
                    <li><a href="#">Товары для ухода за ребенком</a></li>
                </ul>
            </li>
            <li>
                <a>Фото и видео <span class="arrow">&#9660;</span></a>
                <ul class="section-menu__sub-menu">
                    <li><a href="#">Фотокамеры</a></li>
                    <li><a href="#">Видеокамеры</a></li>
                </ul>
        </li>
        </ul>
    </nav>
</div>


<section class="store__popular padding">
    <div class="container">

        <a class="section-title" href="store-popular.html">Популярные</a>

        <div class="row store__items-row">

            <div class="col-12 col-sm-6 col-md-4">
                <a class="store__item" href="{{ url('/store/item/1') }}">
                    <img src="/public/img/temp/1.jpg">
                    <p class="store__item__name">Samsung Galaxy J5 SM-J510FN/DS Black</p>
                    <div class="store__item__reviews reviews-link">15 отзывов</div>
                    <div class="store__item__prices">
                        <p class="store__item__price"><span>Цена: </span><b>64 465 т</b></p>
                        <p class="store__item__loan"><span>В кредит: </span><b>3 391 т <span>x 24 мес</span></b></p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <a class="store__item" href="{{ url('/store/item/1') }}">
                    <img src="/public/img/temp/1.jpg">
                    <p class="store__item__name">Samsung Galaxy J5 SM-J510FN/DS Black</p>
                    <div class="store__item__reviews reviews-link">15 отзывов</div>
                    <div class="store__item__prices">
                        <p class="store__item__price"><span>Цена: </span><b>64 465 т</b></p>
                        <p class="store__item__loan"><span>В кредит: </span><b>3 391 т <span>x 24 мес</span></b></p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <a class="store__item" href="{{ url('/store/item/1') }}">
                    <img src="/public/img/temp/1.jpg">
                    <p class="store__item__name">Samsung Galaxy J5 SM-J510FN/DS Black</p>
                    <div class="store__item__reviews reviews-link">15 отзывов</div>
                    <div class="store__item__prices">
                        <p class="store__item__price"><span>Цена: </span><b>64 465 т</b></p>
                        <p class="store__item__loan"><span>В кредит: </span><b>3 391 т <span>x 24 мес</span></b></p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <a class="store__item" href="{{ url('/store/item/1') }}">
                    <img src="/public/img/temp/1.jpg">
                    <p class="store__item__name">Samsung Galaxy J5 SM-J510FN/DS Black</p>
                    <div class="store__item__reviews reviews-link">15 отзывов</div>
                    <div class="store__item__prices">
                        <p class="store__item__price"><span>Цена: </span><b>64 465 т</b></p>
                        <p class="store__item__loan"><span>В кредит: </span><b>3 391 т <span>x 24 мес</span></b></p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <a class="store__item" href="{{ url('/store/item/1') }}">
                    <img src="/public/img/temp/1.jpg">
                    <p class="store__item__name">Samsung Galaxy J5 SM-J510FN/DS Black</p>
                    <div class="store__item__reviews reviews-link">15 отзывов</div>
                    <div class="store__item__prices">
                        <p class="store__item__price"><span>Цена: </span><b>64 465 т</b></p>
                        <p class="store__item__loan"><span>В кредит: </span><b>3 391 т <span>x 24 мес</span></b></p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <a class="store__item" href="{{ url('/store/item/1') }}">
                    <img src="/public/img/temp/1.jpg">
                    <p class="store__item__name">Samsung Galaxy J5 SM-J510FN/DS Black</p>
                    <div class="store__item__reviews reviews-link">15 отзывов</div>
                    <div class="store__item__prices">
                        <p class="store__item__price"><span>Цена: </span><b>64 465 т</b></p>
                        <p class="store__item__loan"><span>В кредит: </span><b>3 391 т <span>x 24 мес</span></b></p>
                    </div>
                </a>
            </div>

        </div>

    </div>
</section>



<section class="store__popular padding">
    <div class="container">

        <a class="section-title" href="store-new.html">Новинки</a>

        <div class="row store__items-row">

            <div class="col-12 col-sm-6 col-md-4">
                <a class="store__item" href="{{ url('/store/item/1') }}">
                    <img src="/public/img/temp/1.jpg">
                    <p class="store__item__name">Samsung Galaxy J5 SM-J510FN/DS Black</p>
                    <div class="store__item__reviews reviews-link">15 отзывов</div>
                    <div class="store__item__prices">
                        <p class="store__item__price"><span>Цена: </span><b>64 465 т</b></p>
                        <p class="store__item__loan"><span>В кредит: </span><b>3 391 т <span>x 24 мес</span></b></p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <a class="store__item" href="{{ url('/store/item/1') }}">
                    <img src="/public/img/temp/1.jpg">
                    <p class="store__item__name">Samsung Galaxy J5 SM-J510FN/DS Black</p>
                    <div class="store__item__reviews reviews-link">15 отзывов</div>
                    <div class="store__item__prices">
                        <p class="store__item__price"><span>Цена: </span><b>64 465 т</b></p>
                        <p class="store__item__loan"><span>В кредит: </span><b>3 391 т <span>x 24 мес</span></b></p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <a class="store__item" href="{{ url('/store/item/1') }}">
                    <img src="/public/img/temp/1.jpg">
                    <p class="store__item__name">Samsung Galaxy J5 SM-J510FN/DS Black</p>
                    <div class="store__item__reviews reviews-link">15 отзывов</div>
                    <div class="store__item__prices">
                        <p class="store__item__price"><span>Цена: </span><b>64 465 т</b></p>
                        <p class="store__item__loan"><span>В кредит: </span><b>3 391 т <span>x 24 мес</span></b></p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <a class="store__item" href="{{ url('/store/item/1') }}">
                    <img src="/public/img/temp/1.jpg">
                    <p class="store__item__name">Samsung Galaxy J5 SM-J510FN/DS Black</p>
                    <div class="store__item__reviews reviews-link">15 отзывов</div>
                    <div class="store__item__prices">
                        <p class="store__item__price"><span>Цена: </span><b>64 465 т</b></p>
                        <p class="store__item__loan"><span>В кредит: </span><b>3 391 т <span>x 24 мес</span></b></p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <a class="store__item" href="{{ url('/store/item/1') }}">
                    <img src="/public/img/temp/1.jpg">
                    <p class="store__item__name">Samsung Galaxy J5 SM-J510FN/DS Black</p>
                    <div class="store__item__reviews reviews-link">15 отзывов</div>
                    <div class="store__item__prices">
                        <p class="store__item__price"><span>Цена: </span><b>64 465 т</b></p>
                        <p class="store__item__loan"><span>В кредит: </span><b>3 391 т <span>x 24 мес</span></b></p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <a class="store__item" href="{{ url('/store/item/1') }}">
                    <img src="/public/img/temp/1.jpg">
                    <p class="store__item__name">Samsung Galaxy J5 SM-J510FN/DS Black</p>
                    <div class="store__item__reviews reviews-link">15 отзывов</div>
                    <div class="store__item__prices">
                        <p class="store__item__price"><span>Цена: </span><b>64 465 т</b></p>
                        <p class="store__item__loan"><span>В кредит: </span><b>3 391 т <span>x 24 мес</span></b></p>
                    </div>
                </a>
            </div>

        </div>

    </div>
</section>

@include('partials.footer')

@include('partials.support')

@endsection