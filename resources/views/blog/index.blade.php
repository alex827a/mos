@extends('app')

@include('partials.nav')

@section('content')

<div class="container padding">
    <h1 class="page-title">Финансовый блог MozQ</h1>
    <p class="page-title__sub">Блог о том, о том и о том</p>
</div>

<section class="blog padding">
    <div class="container overflow">


        <div class="blog__items">

            <div class="blog__item__wrap">
                <a class="blog__item" href="{{ url('blog2') }}">
                    <img src="/public/img/blog2.jpg">
                    <div class="blog__item__details"><span class="blog__item__date">27.01.2017</span></div>
                    <p class="blog__item__title">4 важнейших статистических факта о кросс-канальном маркетинге</p>
                </a>
            </div>

            <div class="blog__item__wrap">
                <a class="blog__item" href="{{ url('blog1') }}">
                    <img src="/public/img/blog1.jpg">
                    <div class="blog__item__details"><span class="blog__item__date">27.01.2017</span></div>
                    <p class="blog__item__title">5 шагов создания бизнеса</p>
                </a>
            </div>

        </div>


        <div class="blog__pages padding">
            <a class="btn btn-blue disabled" href="/blog/page/1">1</a>
            <!--             <a class="btn btn-blue" href="/blog/page/2">2</a>
                        <a class="btn btn-blue" href="/blog/page/3">3</a>
                        <a class="btn btn-blue" href="/blog/page/4">4</a>
                        <a class="btn btn-blue" href="/blog/page/5">5</a> -->
            <a class="btn btn-blue disabled" href="/blog/page/2">Следующая</a>
        </div>


    </div>
</section>

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