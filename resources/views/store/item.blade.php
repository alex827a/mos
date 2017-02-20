@extends('app')

@section('content')

@include('partials.nav')

<link href="/public/css/store.css?v=4.8" rel="stylesheet">

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
                    <li><a href="#">Фотокамеры</a></li></li>
            <li><a href="#">Видеокамеры</a></li></li>
        </ul>
        </li>
        </ul>
    </nav>
</div>


<section class="store-single padding">

    <div class="container store-single__basic-info padding-bsc">
        <div class="row row-fix">

            <div class="col-12 col-lg-8 center store-single__pics">

                <a href="/public/img/temp/sam1.jpg" data-lightbox="pics-set" data-title="Samsung Galaxy J5 SM-J510FN/DS Black"><img class="store-single__pics_current" src="/public/img/temp/sam1.jpg"></a>

                <div class="store-single__pics__thumbs row justify-content-center">
                    <div class="col-auto col-fix-sm"><img src="/public/img/temp/sam1.jpg"></div>
                    <div class="col-auto col-fix-sm"><img src="/public/img/temp/sam2.jpg"></div>
                    <div class="col-auto col-fix-sm"><img src="/public/img/temp/sam3.jpg"></div>
                    <div class="col-auto col-fix-sm"><img src="/public/img/temp/sam4.jpg"></div>
                </div>

            </div>

            <div class="col-12 col-lg-4">

                <H1 class="store-single__name margin-sm-btm">Смартфон Samsung Galaxy J5 SM-J510FN/DS Gold</H1>

                <a href="#" class="inline-block reviews-link margin-sm-btm">120 отзывов</a>

                <div class="store-single__prices">
                    <div class="store-single__prices__price">
                        <span class="store-single__prices__name">Цена: </span><b>64465</b> т
                    </div>
                    <div class="store-single__prices__loan">
                        <input type="number" class="loanSum" value="81000">
                        <span class="store-single__prices__name">В кредит: </span>
                        <span class="loanPrice"></span> т
                        <span> - <input type="number" value="24" class="loanPeriod" min="3" max="24"> мес</span>
                    </div>
                </div>

                <ul class="store-single__basic-info__list">
                    <li>Возврат в течение 14 дней</li>
                    <li>Одобрение кредита онлайн</li>
                    <li>Кредит начнет действие только после получения товара</li>
                </ul>

                <a class="btn btn-blue margin-sm full-width-xs" href="#">Выбрать продавца</a>

            </div>

        </div>
    </div>

    <div class="store-single__details container padding">

        <H2 class="store-single__name">Характеристики Samsung Galaxy J5 SM-J510FN/DS Gold</H2>

        <div class="store-single__details__title">Общие</div>
        <div class="store-single__details__row row">
            <div class="col-6 col-md-4"><b>Тип:</b></div>
            <div class="col-6 col-md-8">моноблок (классический)</div>
        </div>
        <div class="store-single__details__row row">
            <div class="col-6 col-md-4"><b>Стандарт связи:</b></div>
            <div class="col-6 col-md-8">GSM 850/900/1800/1900, 3G, 4G (LTE)</div>
        </div>
        <div class="store-single__details__row row">
            <div class="col-6 col-md-4"><b>Сим-карта:</b></div>
            <div class="col-6 col-md-8">поддержка 2-х SIM-карт, попеременный режим работы</div>
        </div>
        <div class="store-single__details__row row">
            <div class="col-6 col-md-4"><b>Цвет:</b></div>
            <div class="col-6 col-md-8">золотистый</div>
        </div>
        <div class="store-single__details__row row">
            <div class="col-6 col-md-4"><b>Цвет:</b></div>
            <div class="col-6 col-md-8">золотистый</div>
        </div>
        <div class="store-single__details__row row">
            <div class="col-6 col-md-4"><b>Интерфейсы:</b></div>
            <div class="col-6 col-md-8">Wi-Fi, Bluetooth 4.1, USB, Wi-Fi Direct</div>
        </div>
        <div class="store-single__details__row row">
            <div class="col-6 col-md-4"><b>Навигация:</b></div>
            <div class="col-6 col-md-8">GPS, ГЛОНАСС, BeiDou</div>
        </div>
        <div class="store-single__details__row row">
            <div class="col-6 col-md-4"><b>Габариты:</b></div>
            <div class="col-6 col-md-8">72.3x145.8x8.1 мм</div>
        </div>
        <div class="store-single__details__row row">
            <div class="col-6 col-md-4"><b>Вес:</b></div>
            <div class="col-6 col-md-8">159 г</div>
        </div>

        <div class="store-single__details__title">Дисплей</div>
        <div class="store-single__details__row row">
            <div class="col-6 col-md-4"><b>Тип экрана:</b></div>
            <div class="col-6 col-md-8">сенсорный, мультитач, Super AMOLED</div>
        </div>
        <div class="store-single__details__row row">
            <div class="col-6 col-md-4"><b>Диагональ:</b></div>
            <div class="col-6 col-md-8">5.2 дюйма</div>
        </div>
        <div class="store-single__details__row row">
            <div class="col-6 col-md-4"><b>Разрешение:</b></div>
            <div class="col-6 col-md-8">1280x720 пикс, 282 пикс на дюйм</div>
        </div>
        <div class="store-single__details__row row">
            <div class="col-6 col-md-4"><b>Автоматический поворот экрана:</b></div>
            <div class="col-6 col-md-8">есть</div>
        </div>

        <div class="store-single__details__title">Процессор ипамять</div>
        <div class="store-single__details__row row">
            <div class="col-6 col-md-4"><b>Процессор:</b></div>
            <div class="col-6 col-md-8">4-х ядерный, 1200 МГц</div>
        </div>
        <div class="store-single__details__row row">
            <div class="col-6 col-md-4"><b>Оперативная память:</b></div>
            <div class="col-6 col-md-8">2048 МБ</div>
        </div>
        <div class="store-single__details__row row">
            <div class="col-6 col-md-4"><b>Встроенная память:</b></div>
            <div class="col-6 col-md-8">16 ГБ</div>
        </div>

        <div class="store-single__details__title">Камера и мультимедиа</div>
        <div class="store-single__details__row row">
            <div class="col-6 col-md-4"><b>Фотокамера:</b></div>
            <div class="col-6 col-md-8">13 МПикс, светодиодная вспышка</div>
        </div>
        <div class="store-single__details__row row">
            <div class="col-6 col-md-4"><b>Функции камеры:</b></div>
            <div class="col-6 col-md-8">автофокус</div>
        </div>
        <div class="store-single__details__row row">
            <div class="col-6 col-md-4"><b>Видеосъемка:</b></div>
            <div class="col-6 col-md-8">1920x1080, частота 30 кадров/с</div>
        </div>
        <div class="store-single__details__row row">
            <div class="col-6 col-md-4"><b>Фронтальная камера:</b></div>
            <div class="col-6 col-md-8">есть, 5 Мпикс</div>
        </div>
        <div class="store-single__details__row row">
            <div class="col-6 col-md-4"><b>Форматы аудио:</b></div>
            <div class="col-6 col-md-8">WAV, AAC, MP3</div>
        </div>

        <div class="store-single__details__title">Органайзер и другие функции</div>
        <div class="store-single__details__row row">
            <div class="col-6 col-md-4"><b>Датчики:</b></div>
            <div class="col-6 col-md-8">приближения</div>
        </div>
        <div class="store-single__details__row row">
            <div class="col-6 col-md-4"><b>Режим полета:</b></div>
            <div class="col-6 col-md-8">Да</div>
        </div>
        <div class="store-single__details__row row">
            <div class="col-6 col-md-4"><b>Управление:</b></div>
            <div class="col-6 col-md-8">голосовое управление, голосовой набор</div>
        </div>


    </div>

</section>

@include('partials.footer')

@include('partials.support')

@endsection