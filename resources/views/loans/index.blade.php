@extends('app')

@section('content')

@include('partials.nav')

<div class="loan-landing__banner landing__banner">
  <div class="container">

      <h1>Кредит наличными</h1>
      <H3>Только по удостоверению. Без залогов, поручителей, справок и других документов.</H3>

      <a href="#loan-landing__form" class="btn btn-huge btn-white">Оформить кредит</a>

  </div>
</div>




<div class="loan-landing__anchors landing__anchors">
    <div class="container">
        <a class="loan-landing__anchors__1" href="#loan-landing__basic">Обзор</a>
        <a class="loan-landing__anchors__2" href="#loan-landing__advantages">Преимущества</a>
        <a class="loan-landing__anchors__3" href="#loan-landing__howtoget">Как получить</a>
        <a class="loan-landing__anchors__4" href="#loan-landing__form">Подобрать предложение</a>
    </div>
</div>

<div id="loan-landing__basic" class="loan-landing__basic landing__basic landing__block padding-lg center white">
    <div class="container">

        <H2>Кредит от 14% в тенге</H2>
        <H3>Вы получаете одобрение от нескольких крупных казахстанских банков и МФО, а потом сами выбираете банк или МФО с подходящими условиями</H3>

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

        <div class="landing__basic__partners">
            <div class="landing__basic__partners__item">
                <img src="/public/img/landings/mfo-credit24.png">
            </div>
            <div class="landing__basic__partners__item">
                <img src="/public/img/landings/mfo-zaymer.png">
            </div>
            <div class="landing__basic__partners__item">
                <img src="/public/img/landings/mfo-moneyman.png">
            </div>
            <div class="bigger center">
                <a href="#">Все МФО-партнеры</a>
            </div>
        </div>

    </div>
</div>

<div id="loan-landing__advantages" class="loan-landing__advantages landing__advantages landing__block padding-lg center white">
    <div class="container">

        <H2>Помогаем экономить</H2>
        <div class="loan-landing__advantages__percent"><table><tr><td>до <span>1%</span></td></tr></table></div>
        <h2>от ставки банка</h2>
        <p class="landing__block__par">
        Мы договорились с банками и МФО о скидках для наших клиентов. Это выгоднее, чем обращаться напрямую в банк-партнер или МФО.
        </p>

        <H2 class="padding">Всё через интернет и бесплатно</H2>

        <div class="loan-landing__advantages__row row">

            <div class="col-sm-12 col-md-5"><img class="landing__advantages__illustr" src="/public/img/mockup.jpg"></div>

            <div class="col-sm-12 col-md-7">
              <div class="landing__advantages__list">
                  <div class="item"><div class="left-icon"><img src="/public/img/landings/gift-icon.svg" /></div>Бесплатно навсегда. <p class="gray smaller">Мы не брокер: зарабатываем на банках-партнерах, а не на вас.</p></div>
                  <div class="item"><div class="left-icon"><img src="/public/img/landings/application-icon.svg" /></div>Подайте всего одну заявку. <p class="gray smaller">Вся волокита — на личном менеджере из банка партнера или МФО.</p></div>
                  <div class="item"><div class="left-icon"><img src="/public/img/landings/internet-icon.svg" /></div>Оформление через интернет.<p class="gray smaller">Вам не нужно выбирать время на посещение офисов.</p> </div>
              </div>
            </div>

        </div>

    </div>
</div>

<div id="loan-landing__howtoget" class="loan-landing__howtoget landing__advantages landing__block padding-lg center white">
    <div class="container">

        <H2>Как работает сервис?</H2>
        <H3 class="padding-sm-btm"> Три шага до одобрения заявки</H3>
  
        <div class="loan-landing__howtoget__steps row">
            <div class="col-xs-12 col-md-4"><div class="loan-landing__howtoget__step1__btn loan-landing__howtoget__step__btn_active loan-landing__howtoget__step">1</div></div>
            <div class="col-xs-12 col-md-4"><div class="loan-landing__howtoget__step2__btn loan-landing__howtoget__step">2</div></div>
            <div class="col-xs-12 col-md-4"><div class="loan-landing__howtoget__step3__btn loan-landing__howtoget__step">3</div></div>
        </div>

        <div class="loan-landing__howtoget__step1">
            <div class="loan-landing__howtoget__step__title">
                <b>Шаг 1</b><br />
                <span>Заполните онлайн-заявку и мы определим, какие документы нужны в вашем случае</span>
            </div>
            <div class="loan-landing__howtoget__step1__list">
                <b class="inline-block padding-sm-btm">Как правило, достаточно следующих документов:</b>
                <ul>
                    <li>Заявление-анкета <span>(заполните ее на сайте)</span></li>
                    <li>Копия трудовой книжки <span>(ее нужно заверить у работодателя)</span></li>
                    <li>Копия удостоверения <span>(обе стороны)</span></li>
                    <li>Справка о доходах <span>(можете получить ее в ЦОНе)</span></li>
                </ul>
            </div>
        </div>

        <div class="loan-landing__howtoget__step2">
            <div class="loan-landing__howtoget__step__title">
                <b>Шаг 2</b><br />
                <span>Мы передадим заявку в несколько банков-партнеров или МФО.</span><br />
                <span class="smaller">Как правило, мы передаем вашу заявку к партнерам с наилучшими условиями, они будут принимать решения параллельно.</span>
            </div>
        </div>

        <div class="loan-landing__howtoget__step3">
            <div class="loan-landing__howtoget__step__title">
                <b>Шаг 3</b><br />
                <span>Теперь вы выбираете предложение, которое подходит вам.</span><br />
                <span class="smaller">Когда определитесь, можете выбрать тот банк или МФО, который предложит вам наилучшие условия.</span>
            </div>
        </div>

    </div>
</div>

<form id="loan-landing__form" class="loan-landing__form landing__form padding">
    <div class="container">

        <H1 class="landing__block__title" style="margin-bottom: 15px;">Заявка</H1>
        <p class="center" style="margin-bottom: 45px;">Чтобы узнать, какой банк или МФО выдаст вам кредит, оставьте заявку</p>

        <div class="landing__form__form">

            <p class="bigger center padding-sm">Для начала выберите желаемый тип кредитования</p>

            <div class="loan-landing__form__types landing__form__types radio-btns center">
                <label class="radio-btn">
                    <input type="radio" name="loan-type" class="formSwitcher" switchform="load-form-micro"  formDocument="/public/forms/form-loan-micro.html" chosenService="Кредиты: Микрозайм">
                    <span class="radio-btn__btn">Микрозайм</span>
                </label>
                <label class="radio-btn">
                    <input type="radio" name="loan-type" class="formSwitcher" switchform="load-form-consumer" formDocument="/public/forms/form-loan-consumer.html" chosenService="Кредиты: Потребительский">
                    <span class="radio-btn__btn">Потребительский</span>
                </label>
                <label class="radio-btn">
                    <input type="radio" name="loan-type" class="formSwitcher" switchform="load-form-secured" formDocument="/public/forms/form-loan-secured.html" chosenService="Кредиты: Кредит под залог">
                    <span class="radio-btn__btn">Кредит под залог</span>
                </label>
                <label class="radio-btn">
                    <input type="radio" name="loan-type" class="formSwitcher" switchform="load-form-mortgage" formDocument="/public/forms/form-loan-mortgage.html" chosenService="Кредиты: Ипотека">
                    <span class="radio-btn__btn">Ипотека</span>
                </label>
                <label class="radio-btn">
                    <input type="radio" name="loan-type" class="formSwitcher" switchform="load-form-islam" formDocument="/public/forms/form-loan-islam.html" chosenService="Кредиты: Исламский кредит">
                    <span class="radio-btn__btn">Исламский кредит</span>
                </label>
                <label class="radio-btn">
                    <input type="radio" name="loan-type" class="formSwitcher" switchform="load-form-auto" formDocument="/public/forms/form-loan-auto.html" chosenService="Кредиты: Автокредит">
                    <span class="radio-btn__btn">Автокредит</span>
                </label>
            </div>

            <div class="load-form load-form_current center padding">Чтобы начать заполнять заявку, выберите тип кредитования выше</div>
            <div class="load-form-micro load-form"></div>
            <div class="load-form-consumer load-form"></div>
            <div class="load-form-secured load-form"></div>
            <div class="load-form-mortgage load-form"></div>
            <div class="load-form-islam load-form"></div>
            <div class="load-form-auto load-form"></div>

          </div>

    </div>
</form>

@include('partials.footer')

@include('partials.support')

@endsection