@extends('app')

@section('content')

    <section class="reg-form">
        <div class="container">

            <div class="center center-logo"><a href="{{ url('/') }}"><img src="/public/img/logo-black.svg"></a></div>

            <form class="reg-form__form" autocomplete="autocomplete" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <h3 class="center">Вход в систему</h3>
                <label class="reg-form__input input full-width">
                    <div class="input__title">Email</div>
                    <input type="email" id="input-email" name="email" value="{{ old('email') }}" required="" placeholder="mail@example.com">
                </label>
                <label class="reg-form__input input full-width">
                    <div class="input__title">Пароль</div>
                    <input type="password" id="input-pass" name="password" required="" placeholder="Придумайте пароль">
                </label>
                <label class="full-width reg-form__submit">
                    <input type="submit" class="btn btn-blue no-shadow reg-form__submit full-width" value="Войти">
                </label>
            </form>

        </div>
    </section>
@endsection
