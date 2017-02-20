@extends('app')

@section('content')

    <section class="reg-form">
        <div class="container">

            <div class="center center-logo"><a href="{{ url('/') }}"><img src="/public/img/logo-black.svg"></a></div>

            <form class="reg-form__form" autocomplete="autocomplete" method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}
                <h3>Зарегистрируйтесь, чтобы получить возможность пользоваться услугами наших партнеров</h3>
                <label class="reg-form__input input full-width">
                    <div class="input__title">Email</div>
                    <input type="email" id="input-email" name="email" placeholder="mail@example.com" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </label>
                <label class="reg-form__input input full-width">
                    <div class="input__title">Пароль</div>
                    <input type="password" id="input-pass" name="password" placeholder="Придумайте пароль" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </label>
                <label class="reg-form__input input full-width">
                    <div class="input__title">Пароль</div>
                    <input type="password" id="input-pass" name="password_confirmation" placeholder="Придумайте пароль" required>
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </label>
                <label class="full-width reg-form__submit">
                    <input type="submit" class="btn btn-blue no-shadow reg-form__submit full-width" value="Зарегистрироваться">
                </label>
            </form>

        </div>
    </section>
@endsection