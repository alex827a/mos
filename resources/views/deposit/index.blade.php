@extends('app')

@include('partials.nav')

@section('content')

<div class="deposit-landing__banner landing__banner">
  <div class="container">

      <h1>Вклады.</h1>
      <H3>Больше денег,без лишних шагов. Прибыль от 14% до 16% в тенге и до 2% в валюте</H3>

      <a href="#deposit-landing__form" class="btn btn-huge btn-white">Открыть счет</a>

  </div>
</div>

<div class="deposit-landing__anchors landing__anchors">
    <div class="container">
        <a href="#deposit-landing__basic">Обзор</a>
        <a href="#deposit-landing__advantages">Преимущества</a>
        <a href="#deposit-landing__form">Подобрать предложение</a>
<!--         <a href="#deposit-landing__topup">Пополнить вклад</a>
        <a href="#deposit-landing__withdraw">Снять с вклада</a> -->
    </div>
</div>

<div id="deposit-landing__basic" class="deposit-landing__basic landing__basic landing__block padding-lg center white">
        
        <div class="container">
            <H2>Депозит от 14% в тенге</H2>
            <H3>Вы получаете предложение от нескольких крупных казахстанских банков, а потом сами выбираете банк с подходящими условиями.</H3>
        </div>

        <div class="landing__basic__partners">
            <a href="partner-qazkom.html" class="landing__basic__partners__item block">
                <img src="/public/img/brands/qazkom-logo.jpg">
                QAZKOM
            </a>
            <a href="partner-astana-banki.html" class="landing__basic__partners__item block">
                <img src="/public/img/brands/astana-banki-logo.jpeg">
                Банк Астаны
            </a>
        </div>
        <div class="bigger center">
              <a href="partners-banks.html">Все банки-партнеры</a>
        </div>

</div>

<div id="deposit-landing__advantages" class="deposit-landing__advantages landing__advantages landing__block padding-lg center white">
    <div class="container">

        <H2>Помогаем подобрать лучший депозит для вас</H2>
        <p class="landing__block__par">
            Мы договорились с банками о подарках для наших клиентов. Это выгоднее, чем напрямую обращаться в банк-партнер.
        </p>

        <H2 class="padding">Всё через интернет и бесплатно</H2>

        <div class="deposit-landing__advantages__row row">

            <div class="col-sm-12 col-md-5"><img class="landing__advantages__illustr" src="/public/img/mockup.jpg"></div>

            <div class="col-xs-12 col-md-7">
              <div class="landing__advantages__list">
                  <div class="item"><div class="left-icon">
                      <img src="/public/img/landings/gift-icon.svg" /></div>Бесплатно навсегда. <p class="gray smaller">Мы не брокер: зарабатываем на банках партнёрах, а не на вас</p>
                  </div>
                  <div class="item"><div class="left-icon">
                      <img src="/public/img/landings/application-icon.svg" /></div>Подайте всего одну заявку. <p class="gray smaller">Весь процесс - на личном менеджере из банка-партнера.</p>
                  </div>
                  <div class="item"><div class="left-icon">
                      <img src="/public/img/landings/internet-icon.svg" /></div>Оформление через интернет.<p class="gray smaller">Вам не нужно приезжать в отделение банка, мы вышлем документы по почте, а открытие и зачисление денежных средств  на счёт происходит онлайн.</p>
                  </div>   
              </div>
            </div>

        </div>

    </div>
</div>

<div id="deposit-landing__howtoget" class="deposit-landing__howtoget landing__advantages landing__block padding-lg center white">
    <div class="container">

        <H2>Как работает сервис?</H2>
        <H3 class="padding-sm-btm">Два шага до открытия вклада.</H3>
  
        <div class="deposit-landing__howtoget__steps row">
            <div class="col-xs-12 col-md-4">
                <div class="deposit-landing__howtoget__step1__btn deposit-landing__howtoget__step__btn_active deposit-landing__howtoget__step">1</div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="deposit-landing__howtoget__step2__btn deposit-landing__howtoget__step">2</div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="deposit-landing__howtoget__step3__btn deposit-landing__howtoget__step">3</div>
            </div>
        </div>

        <div class="deposit-landing__howtoget__step1">
            <div class="deposit-landing__howtoget__step__title">
                <b>Шаг 1</b><br />
                <span>Заполните анкету и мы определим, какие предложения наиболее выгодные на рынке</span>
            </div>
            <div class="deposit-landing__howtoget__step1__list">
                <b class="inline-block padding-sm-btm">Как правило, достаточно следующих документов:</b>
                <ul>
                    <li>Заявление-анкета <span>(заполните ее на сайте)</span></li>
                    <li>ИИН или данные паспорта <span>(прикрепите к заявке)</span></li>
                </ul>
            </div>
        </div>
        <div class="deposit-landing__howtoget__step2">
            <div class="deposit-landing__howtoget__step__title">
                <b>Шаг 2</b><br />
                <span>Мы передадим заявку в несколько банков-партнеров</span><br />
                <span class="smaller">Как правило, мы передаем вашу заявку к партнерам с наилучшими условиями, они будут принимать решения параллельно.</span>
            </div>
        </div>
        <div class="deposit-landing__howtoget__step3">
            <div class="deposit-landing__howtoget__step__title">
                <b>Шаг 3</b><br />
                <span>Теперь вы выбираете предложение, которое подходит вам</span><br />
                <span class="smaller">Когда определитесь сможете выбрать тот банк, который предложит наилучшие условия.</span>
            </div>
        </div>

    </div>
</div>

<form id="deposit-landing__form" class="deposit-landing__form landing__form padding white">
    <div class="container">

        <H1 class="landing__block__title" style="margin-bottom: 15px;">Заявка на открытие счета<br /><br /></H1>

        <div class="load-form load-form_current landing__form__form padding-sm">
            <div id="form-deposit-micro" class="form form-deposit form-deposit-micro" autocomplete="autocomplete">
                <div class="container">

                    <div class="deposit-landing__form__sum landing__form__slider landing__form__block deposit-landing__form__block_full">
                        <b>Сумма</b>
                        <div class="deposit-landing__form__sum__slider slider-padding">
                            <div class="layout-slider">
                                <input id="depositLandingSumSlider" type="slider" name="area" value="0;10000000" />
                            </div>
                            <script type="text/javascript" charset="utf-8">
                                jQuery("#depositLandingSumSlider").slider({ from: 0, to: 10000000, scale: [0, 10000000], limits: false, step: 1, dimension: ' тенге', skin: "round_plastic" });
                            </script>
                        </div>
                    </div>

                    <div class="deposit-landing__form__period landing__form__slider landing__form__block landing__form__block_full deposit-landing__form__block_full">
                        <b>Желаемый срок</b>
                        <div class="deposit-landing__form__period__slider slider-padding">
                            <div class="layout-slider">
                                <input id="depositLandingPeriodSlider" type="slider" name="area" value="0;120" />
                            </div>
                            <script type="text/javascript" charset="utf-8">
                                jQuery("#depositLandingPeriodSlider").slider({ from: 0, to: 120, scale: [0, 120], limits: false, step: 1, dimension: ' месяцев', skin: "round_plastic" });
                            </script>
                        </div>
                    </div>

                    <div class="center padding-sm">
                        <label class="radio-btn">
                            <input type="radio" name="deposit-type" checked="checked">
                            <span class="radio-btn__btn">В тенге</span>
                        </label>
                        <label class="radio-btn">
                            <input type="radio" name="deposit-type">
                            <span class="radio-btn__btn">В рублях</span>
                        </label>
                        <label class="radio-btn">
                            <input type="radio" name="deposit-type">
                            <span class="radio-btn__btn">В долларах</span>
                        </label>
                        <label class="radio-btn">
                            <input type="radio" name="deposit-type">
                            <span class="radio-btn__btn">В другой валюте</span>
                        </label>
                    </div>

                    <div class="landing__form__block landing__form__block_half deposit-landing__form__block">
                        <div class="input"><label class="input__label">
                                <span class="input__title input_required">ФИО</span>
                                <input type="text" name="deposit-name" placeholder="Иванов Иван Иванович" required>
                            </label></div>
                    </div>

                    <div class="landing__form__block landing__form__block_half deposit-landing__form__block">
                        <div class="input"><label class="input__label">
                                <span class="input__title input_required">Телефон</span>
                                <input type="text" class="input-phone" name="deposit-phone" placeholder="+7 777 777-77-77" required>
                            </label></div>
                    </div>

                    <div class="landing__form__block landing__form__block_half deposit-landing__form__block">
                        <div class="input"><label class="input__label">
                                <span class="input__title">Email</span>
                                <input type="text" name="deposit-email" placeholder="example@mail.ru">
                            </label></div>
                    </div>

                    <div class="landing__form__block landing__form__block_half deposit-landing__form__block_full">
                        <div class="input"><label class="input__label">
                                <span class="input__title">ИИН</span>
                                <input type="text" class="input-pin" name="deposit-pin" placeholder="000 000 000 000" required>
                            </label></div>
                    </div>

                    <div class="landing__form__submit center padding-sm">
                        <input type="submit" class="btn btn-huge btn-blue" value="Отправить заявку"><br />
                        <label class="landing__form__agree form-check__label"><input type="checkbox" required>
                            <span></span>Согласен с <a href="#">условиями</a>
                        </label>
                    </div>


                </div>
            </div>
        </div>
    </div>
</form>

@include('partials.footer')

@include('partials.support')

@endsection