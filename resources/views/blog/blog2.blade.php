@extends('app')

@include('partials.nav')

@section('content')

<article class="blog-single padding">
    <div class="container">

        <h1 class="page-title blog-single__title">4 важнейших статистических факта о кросс-канальном маркетинге </h1>

        <div class="blog-single__content">
            <img src="/public/img/blog2.jpg" class="blog-single__pic blog-single__pic_featured">
            <p>Сегодня мы поделимся с вами самыми горячими фактами кросс-канального маркетинга, о которых нельзя забывать при разработке стратегии на предстоящий год. Поехали! </p>
            <h3>1. Две трети покупателей регулярно используют более одного канала для совершения покупки </h3>
            <p>По данным исследования Wharton использование нескольких каналов при совершении покупок — норма для большинства потребителей. Также выяснилось, что 1/3 покупателей используют два канала, а другие 1/3 регулярно используют три и более каналов для совершения покупки. И только один из трех потребителей предпочитает только один канал. </p>
            <h3>2. В среднем перед покупкой потребители посещают сайт ритейлера 9,5 раз </h3>
            <p>Только представьте, людям нужно более 9 визитов на сайт, чтобы решиться на покупку. При этом большая их часть совершается с разных устройств: смартфонов, ПК и так далее. </p>
            <h3>3. Клиенты, которые используют более одного канала при совершении покупки, имеют на 30% более высокую ценность жизненного цикла </h3>
            <p>Этот факт еще раз подчеркивает необходимость наличия у компании кросс-канальной маркетинговой стратегии. Маркетологи должны укреплять свое присутствие на популярных платформах и предлагать пользователям единый качественный опыт. </p>
            <h3>4. Всего 5% маркетологов полностью готовы к реализации эффективного кросс-канального маркетинга </h3>
            <p>Это один из выводов из отчета исс. По его результатам также стало известно, что более 2/3 участвующих в опросе компаний назвали приоритетом маркетинговых активностей их интеграцию на разных каналах. Но при этом только 39% понимают путешествие клиентов и адаптируют свое присутствие на разных канал соответствующим образом.</p>
            <h3>Советы на 2017 </h3>
            <p>Маркетологи должны успевать за современными потребителями — быстрыми и непостоянными. И при этом быть впереди конкурентов. </p>
            <p>Сегодня клиенты часто взаимодействуют с брендами через разные каналы и устройства, что открывает им доступ к важным данным (адрес электронной почты, аккаунты, cookies и ID мобильных устройств. </p>
            <p>Чтобы предлагать персонализированный и единый опыт своим клиентами, бренды должны использовать эти данные, а также информацию об их предпочтениях и поведении. Только тогда они смогут соответствовать растущим требованиям современных пользователей.</p>
        </div>

    </div>
</article>

@include('partials.footer')

@include('partials.support')

<script>
    $(document).ready(function(){

        $('.deposit-landing__howtoget__step1__btn').click(function(){
            $(this).addClass('deposit-landing__howtoget__step__btn_active');
            $('.deposit-landing__howtoget__step2__btn, .deposit-landing__howtoget__step3__btn').removeClass('deposit-landing__howtoget__step__btn_active');
            $('.deposit-landing__howtoget__step2, .deposit-landing__howtoget__step3').fadeOut(200);
            $('.deposit-landing__howtoget__step1').delay(200).fadeIn(200);
        })
        $('.deposit-landing__howtoget__step2__btn').click(function(){
            $(this).addClass('deposit-landing__howtoget__step__btn_active');
            $('.deposit-landing__howtoget__step1__btn, .deposit-landing__howtoget__step3__btn').removeClass('deposit-landing__howtoget__step__btn_active');
            $('.deposit-landing__howtoget__step1, .deposit-landing__howtoget__step3').fadeOut(200);
            $('.deposit-landing__howtoget__step2').delay(200).fadeIn(200);
        })
        $('.deposit-landing__howtoget__step3__btn').click(function(){
            $(this).addClass('deposit-landing__howtoget__step__btn_active');
            $('.deposit-landing__howtoget__step1__btn, .deposit-landing__howtoget__step2__btn').removeClass('deposit-landing__howtoget__step__btn_active');
            $('.deposit-landing__howtoget__step1, .deposit-landing__howtoget__step2').fadeOut(200);
            $('.deposit-landing__howtoget__step3').delay(200).fadeIn(200);
        })

      });
    </script>

@endsection