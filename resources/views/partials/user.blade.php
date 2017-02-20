<div class="user-bar user-bar_not-logged-in">
    @if (!Auth::check())
        <div class="container">
            <a href="{{ url('/register') }}">Регистрация</a>
            <a href="{{ url('/login') }}">Вход</a>
        </div>
    @else
        <div class="container">
            <div class="row align-items-center justify-content-end">

                <div class="user-bar__notif__parent user-bar__item col-auto">
                    <div class="user-bar__notif user-bar__notif_new dropdown-icon"><span>12</span></div>
                    <div class="user-bar__notif__dropdown dropdown-content-expand">
                        <a class="user-bar__notif__item user-bar__notif__item_new" href="my-profile-order.html">
                            Ваша заявка на микрокредит от 12 декабря 2016 была <b>одобрена</b>
                        </a>
                        <a class="user-bar__notif__item user-bar__notif__item_new" href="my-profile-order.html">
                            Ваша заявка на ипотеку от 12 декабря 2016 была <b>отклонена</b>
                        </a>
                        <a class="user-bar__notif__item user-bar__notif__item_new" href="my-profile-order.html">
                            Ваша заявка на микрокредит от 12 декабря 2016 была <b>одобрена</b>
                        </a>
                        <a class="user-bar__notif__item" href="my-profile-order.html">
                            Ваша заявка на ипотеку от 12 декабря 2016 была <b>отклонена</b>
                        </a>
                        <a class="user-bar__notif__item" href="my-profile-order.html">
                            Поздравляем! Ваш профиль заполнен на 100%. Теперь вам доступны все возможности сервиса.
                        </a>
                    </div>
                </div>

                <div class="user-bar__lm__parent user-bar__item col-auto">
                    <div class="user-bar__lm user-bar__lm_new dropdown-icon"><span>1</span></div>
                    <div class="user-bar__lm__dropdown dropdown-content-expand">
                        <a class="user-bar__lm__item user-bar__lm__item_new" href="lm.html">
                            <div class="user-bar__lm__details">
                                <img class="user-bar__lm__details__pic" src="/public/img/people/boi.jpg">
                                <b>Малик</b>
                                <span>Сегодня в 12:30</span>
                            </div>
                            <p class="user-bar__lm__item__message">Алмаз, где верстка? Не успеваем!</p>
                        </a>
                        <a class="user-bar__lm__item" href="lm.html">
                            <div class="user-bar__lm__details">
                                <img class="user-bar__lm__details__pic" src="/public/img/people/boi.jpg">
                                <b>Малик</b>
                                <span>Сегодня в 12:30</span>
                            </div>
                            <p class="user-bar__lm__item__message">Алмаз, где верстка? Не успеваем!</p>
                        </a>
                        <a class="user-bar__lm__item" href="lm.html">
                            <div class="user-bar__lm__details">
                                <img class="user-bar__lm__details__pic" src="/public/img/people/boi.jpg">
                                <b>Малик</b>
                                <span>Сегодня в 12:30</span>
                            </div>
                            <p class="user-bar__lm__item__message">Алмаз, где верстка? Не успеваем!</p>
                        </a>
                    </div>
                </div>

                <div class="user-bar__name__parent user-bar__item col-auto">
                    <div class="user-bar__name">{{ Auth::user()->email }}</div>
                    <img class="user-bar__pic" src="/public/img/people/boi.jpg">

                    <div class="dropdown">

                        <div class="dropdown-icon dropdown-icon_black"></div>

                        <div class="dropdown-content dropdown-content-expand">
                            <a href="my-profile.html">Мой профиль</a>
                            <a href="user-dashboard.html">Мои услуги</a>
                            <a href="{{ url('/logout') }}">Выход</a>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    @endif
</div>

