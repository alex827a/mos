@extends('app')

@section('content')

@include('partials.user')

<header class="home-header header">

    <div class="container">
    <div class="header__main row align-items-center">

        <div class="logo header__main__box col-auto">
            <a href="{{ url('/') }}"><img src="/public/img/logo-white.svg" alt="MozQ" class="logo__img"></a>
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

  <div class="container">
           <div class="home-header__content">
              <div class="home-header__content__go center">
                  <H2>Mozq - индивидуальный финансовый помощник</H2>
                  <p>Зарегистрируйтесь сейчас и получите скидку на оформление кредита онлайн</p>
                  <a href="{{ url('/register') }}" class="btn btn-blue">Регистрация<img src="/public/img/icons/link-arrow.png" class="btn__img"></a>
              </div>
          </div>
  </div>

</header>

<section class="icon-menu">
    <nav class="container padding">

        <a class="icon-menu__item icon-menu__shop" href="{{ url('/shop') }}">
            <img src="/public/img/icons/menu_shop2.svg">
            <div class="icon-menu__name">МАГАЗИН</div>
            <p>Самый выгодный кредит</p>
        </a>
        <a class="icon-menu__item icon-menu__accounting" href="{{ url('/still-working') }}">
            <img src="/public/img/icons/menu_accounting2.svg">
            <div class="icon-menu__name">УЧЕТ</div>
            <p>Бухгалтерский учет онлайн</p>
        </a>
        <a class="icon-menu__item icon-menu__payments" href="{{ url('/payments') }}">
            <img src="/public/img/icons/menu_payments2.png">
            <div class="icon-menu__name">ПЛАТЕЖИ</div>
            <p>Почти все услуги.<br />Без комиссии.</p>
        </a>
        <a class="icon-menu__item icon-menu__loans" href="{{ url('/loans') }}">
            <img src="/public/img/icons/menu_loans.svg">
            <div class="icon-menu__name">КРЕДИТЫ</div>
            <p>На самых разных<br />условиях</p>
        </a>
        <a class="icon-menu__item icon-menu__deposits" href="{{ url('/deposit') }}">
            <img src="/public/img/icons/menu_deposits2.svg">
            <div class="icon-menu__name">ДЕПОЗИТЫ</div>
            <p>Начинай думать о будущем сейчас</p>
        </a>
        <a class="icon-menu__item icon-menu__insurance" href="{{ url('/insurance') }}">
            <img src="/public/img/icons/menu_insurance.svg">
            <div class="icon-menu__name">СТРАХОВКИ</div>
            <p>Защити себя, семью и имущество</p>
        </a>

    </nav>
</section>




<div class="container">

    <div class="home-banner__flex-row">

        <div class="home-banner__flex-row__col2 home-banner__flex-row__col">
              <div class="home-banner__loans home-banner">
                  <div class="home-banner-title">
                    <b>Кредит наличными</b>
                    <p class="smaller padding-bsc">Только по удостоверению. Без залогов, поручителей, справок и других документов.</p>
                  </div>
                  <div class="center padding-sm"><a href="{{ url('/loan') }}" class="btn btn-white">Перейти к кредитам</a></div>
              </div>
        </div>

        <div class="home-banner__flex-row__col">
            <div class="home-banner__cards home-banner center">
                      <div class="home-banner-title">Закажите карту любого банка</div>
                      <div class="home-banner__cards__pics">
                          <img src="/public/img/home-banner-card1.png">
                      </div>
                      <div class="home-banner__go">
                          <a href="{{ url('/loan') }}">Заказать карту</a>
                      </div>
              </div>
        </div>

    </div>

    <div class="home-banner__flex-row">

        <div class="home-banner__flex-row__col2 home-banner__flex-row__col">

            <div class="home-banner__slider">

                  <div class="home-banner__deposits">
                      <div class="home-banner-title">Вклады<br />
                      <p class="smaller"><br />Больше денег без лишних шагов. Прибыль от 14% до 16% в тенге и до 2% в валюте.</p>
                      </div>

                      <div class="home-banner__deposits__go">
                          <a href="{{ url('/deposit') }}" class="btn btn-white">Открыть вклад</a>
                      </div>
                  </div>

                  <div class="home-banner__insurance">
                      <div class="home-banner-title">Узнай стоимость КАСКО или ОГПО ВТС в 2 клика и оформи полис онлайн.<br />При оплате онлайн скидка на полис 10%</div>
                      <div class="home-banner__insurance__go">
                          <a href="{{ url('/insurance') }}" class="btn btn-white">Перейти к страховкам</a>
                      </div>
                  </div>

            </div>

        </div>

        <div class="home-banner__flex-row__col">
            <div class="home-banner__fines home-banner center">
              <div class="home-banner-title">Штрафы ПДД</div>
              <img src="/public/img/min-logo.png">
              <p class="home-banner__p">Проверьте есть ли у вас штрафы и оплатите их онлайн.<br />Введите свой ИИН в форму ниже.</p>
              <form class="home-banner__fines__input">
                  <input type="text" autocomplete="no" name="home-banner__fines" class="input-pin" placeholder="ИИН">
                  <input type="submit" value="">
              </form>
              </div>
        </div>

    </div>

</div>


<div class="home__transfer">
  <div class="container">
      <div class="home__transfer__wrap">

          <div class="section-title">
              ПЕРЕВОДЫ С КАРТЫ НА КАРТУ
              <p>Онлайн-перевод между любыми картами любых банков</p>
          </div>

          <form class="home__transfer__form padding-bsc">

              <div class="home__transfer__form__row1 row">

                  <div class="col-sm-12 col-lg-6">
                  <div class="home__transfer__form__block home__transfer__form__card1">
                    <label class="input">Номер карты (откуда)
                    <input type="text" name="card1" class="input-card" placeholder="000 000 000 000">
                    </label>
                  </div>
                  </div>

                  <div class="col-sm-12 col-lg-6">
                  <div class="home__transfer__form__card2 home__transfer__form__block">
                    <label class="input">Номер карты (куда)
                    <input type="text" name="card2" class="input-card" placeholder="000 000 000 000"></label>
                  </div></div>

              </div>

              <div class="home__transfer__form__row2">
                <div class="row">
                    <div class="col-sm-12 col-lg-6 overflow">
                    <div class="home__transfer__form__block home__transfer__form__card3">
                         <label class="input">Срок карты<input type="text" name="card1" class="input-card-period" placeholder="00/00"></label>
                         <label class="input">CVV (три цифры сзади)<input type="text" name="card1" class="input-card-cvv" placeholder="000"></label>
                    </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                    <div class="home__transfer__form__card4 home__transfer__form__block">
                      <label class="input">Сумма перевода (тенге)<input type="text" name="card1" placeholder="0"></label>
                    </div>
                    </div>
                </div>
              </div>

              <div class="home__transfer__form__row3">

                       <div class="home__transfer__agree">
                            <label class="loan-order__agreement form-check__label"><input type="checkbox">
                            <span></span>Согласен с <a href="#">условиями</a></label>
                       </div>

                       <input type="submit" class="btn btn-green no-shadow" value="Перевести">

              </div>

          </form>


      </div>
  </div>
</div>

<div class="home-buttons padding">
<div class="container">
    <div class="home-buttons__row">
          <a href="check-status.html" class="home-buttons__order-status home-buttons__flex"><img src="/public/img/icons/refresh-icon-black.svg">Проверить статус заявки</a>
          <a href="#" class="home-buttons__deposit home-buttons__flex"><img src="/public/img/icons/coins-icon-black.svg">Пополнить депозит</a>
          <a href="#" class="home-buttons__card home-buttons__flex"><img src="/public/img/icons/card-icon-black.svg">Пополнить карту</a>
    </div>
</div>
</div>





<section class="bottom-news light-bg padding">
<div class="container">
  <a href="{{ url('/blog') }}" class="section-title"><H2>Финансовый блог MozQ</H2></a>
  <div class="bottom-news__row row">
      <div class="bottom-news__col col-sm-12 col-md-6">
          <a class="bottom-news__item" href="{{ url('/blog1') }}">
              <img class="bottom-news__item__img" src="/public/img/blog1.jpg">
              <p class="bottom-news__item__title">5 шагов создания бизнеса</p>
          </a>

      </div>
      <div class="bottom-news__col col-sm-12 col-md-6">
          <a class="bottom-news__item" href="{{ url('/blog2') }}">
              <img class="bottom-news__item__img" src="/public/img/blog2.jpg">
              <p class="bottom-news__item__title">4 важнейших статистических факта о кросс-канальном маркетинге</p>
          </a>
      </div>
  </div>
</div>
</section>

@include('partials.footer')

@include('partials.support')

@endsection