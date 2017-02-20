@extends('app')

@section('content')

@include('partials.nav')

<div class="insurance-landing__banner landing__banner">
  <div class="container">

      <h1>Узнай стоимость КАСКО или ОГПО ВТС в 2 клика и оформи полис онлайн</h1>
      <H3>При оплате онлайн скидка на полис 10%</H3>

      <a href="#insurance-landing__form" class="btn btn-huge btn-white">Оформить полис</a>

  </div>
</div>

<div class="insurance-landing__anchors landing__anchors">
    <div class="container">
        <a class="insurance-landing__anchors__1" href="#insurance-landing__basic">Обзор</a>
        <a class="insurance-landing__anchors__2" href="#insurance-landing__advantages">Преимущества</a>
        <a class="insurance-landing__anchors__3" href="#insurance-landing__howtoget">Как получить</a>
        <a class="insurance-landing__anchors__4" href="#insurance-landing__form">Подобрать предложение</a>
        <!-- <a class="insurance-landing__anchors__5" href="#insurance-landing__update">Продлить страховку</a>
        <a class="insurance-landing__anchors__6" href="#insurance-landing__case">Страховой случай</a> -->
    </div>
</div>

<div id="insurance-landing__basic" class="insurance-landing__basic landing__basic landing__block padding-lg center white">

        <div class="container">
            <H2>Оформить полис автострахования просто! </H2>
            <H3>Экономия 5-10% при покупке ОГПО ВТС. Рассчитайте стоимость через калькулятор, если мы найдем предложение лучше, то передадим его вам.</H3>
        </div>

        <div class="landing__basic__partners">
            <div class="landing__basic__partners__item">
                <img src="/public/img/landings/kommesk_logo.png">
            </div>
            <div class="landing__basic__partners__item">
                <img src="/public/img/landings/centras-insurance.jpg">
                Сентрас Иншуранс
            </div>
            <div class="landing__basic__partners__item">
                <img src="/public/img/landings/eurasia-insurance.png">
            </div>
            <div class="landing__block__moar center">
                <a href="#">Все страховые партнеры</a>
            </div>
        </div>

</div>


<div id="insurance-landing__advantages" class="insurance-landing__advantages landing__advantages landing__block padding-lg center white">
    <div class="container">

        <H2>Помогаем экономить</H2>
        <div class="insurance-landing__advantages__percent"><table><tr><td>до<br /><span>10%</span></td></tr></table></div>
        <h2>от стоимости полиса</h2>
        <p class="landing__block__par">
            Мы договорились со страховыми компаниями о скидках для наших клиентов. Это выгоднее, чем напрямую обращаться в страховую фирму.
        </p>

        <H2 class="padding">Всё через интернет и бесплатно</H2>

        <div class="insurance-landing__advantages__row row">

            <div class="col-sm-12 col-md-5"><img class="landing__advantages__illustr" src="/public/img/mockup.jpg"></div>

            <div class="col-xs-12 col-md-7">
              <div class="landing__advantages__list">
                  <div class="item"><div class="left-icon">
                      <img src="/public/img/landings/gift-icon.svg" /></div>Бесплатно навсегда. <p class="gray smaller">Мы не брокер: зарабатываем на страховых, а не на вас.</p>
                  </div>
                  <div class="item"><div class="left-icon">
                      <img src="/public/img/landings/application-icon.svg" /></div>Подайте всего одну заявку. <p class="gray smaller">Вся волокита — на личном менеджере из страховой.</p>
                  </div>
                  <div class="item"><div class="left-icon">
                      <img src="/public/img/landings/internet-icon.svg" /></div>Оформление через интернет.<p class="gray smaller">Вам не нужно приезжать за страховым полисом, мы вышлем вам полис на почту, либо вы можете скачать документ после покупки, никакой лишней суеты!</p>
                  </div>
              </div>
            </div>

        </div>

    </div>
</div>

<div id="insurance-landing__howtoget" class="insurance-landing__howtoget landing__advantages landing__block padding-lg center white">
    <div class="container">

        <H2>Как работает сервис?</H2>
        <H3 class="padding-sm-btm">Два шага до оформления полиса</H3>

        <div class="insurance-landing__howtoget__steps row">
            <div class="col-xs-12 col-md-6">
                <div class="insurance-landing__howtoget__step1__btn insurance-landing__howtoget__step__btn_active insurance-landing__howtoget__step">1</div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="insurance-landing__howtoget__step2__btn insurance-landing__howtoget__step">2</div>
            </div>
        </div>

        <div class="insurance-landing__howtoget__step1">
            <div class="insurance-landing__howtoget__step__title">
                <b>Шаг 1</b><br />
                <span>Заполните онлайн-заявку и мы определим,лучшее предложение и  какие документы нужны в вашем случае</span>
            </div>
            <div class="insurance-landing__howtoget__step1__list">
                <b class="inline-block padding-sm-btm">Как правило, достаточно следующих документов:</b>
                <ul>
                    <li>Заявление-анкета <span>(заполните ее на сайте)</span></li>
                    <li>Копия водительских прав <span>(достаточно будет прикрепить две стороны в виде фотографий)</span></li>
                    <li>Свидетельство о техосмотре ТС <span>(достаточно будет прикрепить документ в виде фотографий)</span></li>
                </ul>
            </div>
        </div>

        <div class="insurance-landing__howtoget__step2">
            <div class="insurance-landing__howtoget__step__title">
                <b>Шаг 2</b><br />
                <span>Мы дадим вам рассчет от нескольких страховых фирм</span><br />
                <span class="smaller">Как правило, мы сами предлагаем наилучшие условия, но если имеется наиболее выгодное предложение, вы узнаете об этом.</span>
            </div>
        </div>

    </div>
</div>



<form id="insurance-landing__form" class="insurance-landing__form landing__form padding">
<div class="container">

  <H1 class="landing__block__title" style="margin-bottom: 15px;">Рассчитайте стоимость страхования</H1>

  <div class="landing__form__form">

      <div class="insurance-landing__form__types landing__form__types radio-btns center">
          <label class="radio-btn">
              <input type="radio" name="loan-type" class="formSwitcher" switchform="load-form-ogpo" formDocument="/public/forms/form-insurance-ogpo.html" chosenService="Страхование: ОГПО">
              <span class="radio-btn__btn">ОГПО</span>
          </label>
          <label class="radio-btn">
              <input type="radio" name="loan-type" class="formSwitcher" switchform="load-form-casco" formDocument="/public/forms/form-insurance-casco.html" chosenService="Страхование: КАСКО">
              <span class="radio-btn__btn">КАСКО</span>
          </label>
      </div>

      <div class="load-form load-form_current center padding">Чтобы рассчитать стоимость вашего страхования, выберите тип страхования выше</div>
      <div class="load-form-ogpo load-form"></div>
      <div class="load-form-casco load-form"></div>

  </div>

</div>
</form>

@include('partials.footer')

@include('partials.support')

@endsection