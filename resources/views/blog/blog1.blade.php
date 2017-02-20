@extends('app')

@include('partials.nav')

@section('content')

<article class="blog-single padding">
    <div class="container">

        <h1 class="page-title blog-single__title">5 шагов создания бизнеса</h1>

        <div class="blog-single__content">
            <img src="/public/img/blog1.jpg" class="blog-single__pic blog-single__pic_featured">

            <p>Хватит планировать и откладывать улучшение вашей собственной жизни на потом. Вы можете все сделать уже в этом году. Эти 5 шагов помогут вам направить себя на правильный путь. Сохраните их к себе, чтобы не потерять. </p>
            <h3>1. Входите туда, где вы нужны </h3>
            <p>Современные технологии позволяют вам тщательно исследовать буквально любую нишу. Если вы придумали невероятную бизнес-идею, не спешите заходить с ней на рынок. Для начала внимательно проанализируйте рынок и убедитесь, что ваше предложение будет интересно аудитории. </p>
            <p>Используйте онлайн-инструменты, чтобы проверить спрос на ваш продукт и проанализировать конкурентов. Не отчаивайтесь, если в этой теме уже есть большая конкуренция. Это хороший знак! То, что в выбранной нише уже есть много игроков, значит, что она имеет спрос. </p>
            <h3>2. Используйте интернет-маркетинг для продвижения </h3>
            <p>Сегодня буквально все можно купить в интернете. Более того, статистика показывает, что с каждым годом все больше людей используют интернет для покупок. Вплоть до продуктов питания. </p>
            <p>Продвигая бизнес в интернете, вы можете максимально быстро получить первых клиентов и сильно расширить аудиторию. Например, вам не нужно арендовать помещение и нанимать персонал, чтобы открыть магазин. Онлайн-площадка будет пользоваться не меньшим спросом, при правильном продвижении. </p>
            <h3>3. Много общайтесь со своими клиентами </h3>
            <p>Это позволит вам лучше понимать целевую аудиторию. Зная, чем интересуются ваши клиенты, и понимая их проблемы, вы можете создавать предложения, которые бьют точно в цель. Регулярно собирайте обратную связь от ваших клиентов всеми возможными способами — от групп в соцсетях до личного общения по телефону. </p>
            <h3>4. Будьте готовы к резким изменениям </h3>
            <p>Тенденции в бизнесе меняются очень динамично. Особенно, если вы используете онлайн-маркетинг. То, что работало вчера, возможно, уже не сработает завтра. Поэтому вы должны быть готовы быстро изменить план действий при первой же необходимости. В наше время большого успеха добиваются только гибкие бизнесы. Учитесь подстраиваться под рынок и вашу аудиторию.</p>
            <h3>5. Ставьте краткосрочные и долгосрочные цели</h3>
            <p>Возьмите лист бумаги и напишите, каким вы хотите бизнес через месяц/полгода/год. Под каждым пунктом в деталях распишите, что нужно сделать для достижения цели. Визуализация задач поможет вам точно понимать, какое действие к какому результату приведет.
                Так вы сможете измерять свою продуктивность и понимать, что нужно изменить, чтобы улучшить показатели.</p>
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