@include('partials.user')

<header class="header">

    <div class="container">
        <div class="header__main row align-items-center">

            <div class="logo header__main__box col-auto">
                <a href="{{ url('/') }}"><img src="/public/img/logo-black.svg" alt="MozQ" class="logo__img"></a>
            </div>

            <div class="top-menu header__main__box col">
                <div class="top-menu__btn"></div>
                <div class="top-menu__btn_close"></div>
                <nav class="top-menu__links">
                    <a class="top-menu__item" href="{{ url('/store') }}">Магазин</a>
                    <a class="top-menu__item" href="{{ url('/payments') }}">Платежи</a>
                    <a class="top-menu__item" href="{{ url('/loans') }}">Кредиты</a>
                    <a class="top-menu__item" href="{{ url('/deposit') }}">Вклады</a>
                    <a class="top-menu__item" href="{{ url('/insurance') }}">Страхование</a>
                    <a class="top-menu__item" href="{{ url('/cards') }}">Карты</a>
                    <a class="top-menu__item" href="{{ url('/still-working') }}">Инвестиции</a>
                    <a class="top-menu__item" href="{{ url('/travel') }}">Путешествия</a>
                    <a class="top-menu__item" href="{{ url('/still-working') }}">Бизнесу</a>
                </nav>
            </div>

        </div>
    </div>

</header>