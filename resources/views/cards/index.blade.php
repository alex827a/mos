@extends('app')

@section('content')

@include('partials.nav')

<div class="padding">
    <div class="tabs container">
        <div class="row">
            <div class="tabs__tab tabs__tab_current formSwitcherNoAjax col-12 col-sm" switchtab="cards__debit-cards">Дебетовые карты</div>
            <div class="tabs__tab formSwitcherNoAjax col-12 col-sm" switchtab="cards__credit-cards">Кредитные карты</div>
        </div>
    </div>
</div>
<div style="min-height: 500px;">


    <section class="tabs__content tabs__content_current cards__banners cards__debit-cards">

        <div class="padding-sm center section-title">Дебетовые карты</div>

        <a target="_blank" class="cards__banner" href="http://qazkom.kz/personal-banking/cards/master-card-standard-visa-classic">
            <div class="row">
                <div class="col-12 col-md-4 flex-md-last cards__banner__pic">
                    <img src="/public/img/temp/cards-qk1.png">
                </div>
                <div class="col-12 col-md-8">
                    <div class="cards__banner__title">
                        <b>Qazkom: </b>
                        Карта для Путешествий
                        <p>Visa Classic | MasterCard Standard</p>
                    </div>
                    <div class="cards__banner__list margin-btm">
                        <p>Стоимость обслуживания: от 5 900 тенге в первый год</p>
                        <p>Возможность выпуска дополнительных карт для карточного счета</p>
                        <p>Возможность выпуска карты с бесконтактной технологией оплаты MasterCard PayPass | Visa payWave</p>
                    </div>
                    <div class="btn btn-blue no-shadow full-width-xs">Открыть карту</div>
                </div>
            </div>
        </a>

        <a target="_blank" class="cards__banner" href="http://qazkom.kz/personal-banking/cards/visa-classic-master-card-standard">
            <div class="row">
                <div class="col-12 col-md-4 flex-md-last cards__banner__pic">
                    <img src="/public/img/temp/cards-qk2.png">
                </div>
                <div class="col-12 col-md-8">
                    <div class="cards__banner__title"><b>Qazkom: </b>Карта для Покупок<p>Visa Classic | MasterCard Standard</p></div>
                    <div class="cards__banner__list margin-btm">
                        <p>Обслуживание в первый год 990 тенге</p>
                        <p>Обслуживание во 2-ой и последующие годы​ 800 тенге</p>
                        <p>Возможность выпуска дополнительных карт для карточного счета</p>
                        <p>Возможность выпуска карты с бесконтактной технологией оплаты MasterCard PayPass | Visa payWave</p>
                    </div>
                    <div class="btn btn-blue no-shadow full-width-xs">Открыть карту</div>
                </div>
            </div>
        </a>

        <a target="_blank" class="cards__banner" href="http://qazkom.kz/personal-banking/cards/master-card-gold-visa-gold">
            <div class="row">
                <div class="col-12 col-md-4 flex-md-last cards__banner__pic">
                    <img src="/public/img/temp/cards-qk3.png">
                </div>
                <div class="col-12 col-md-8">
                    <div class="cards__banner__title">
                        <b>Qazkom: </b>
                        Золотая 2в1 Visa Gold + MasterCard Gold
                        <p>Visa Gold + MasterCard Gold</p>
                    </div>
                    <div class="cards__banner__list margin-btm">
                        <p>Стоимость обслуживания: 24 900 тенге в первый год</p>
                        <p>Возможность выпуска дополнительных карт MasterCard Gold или Visa Gold для карточного счета</p>
                        <p>Консьерж-сервис Premium (ISOS): эксклюзивные услуги по всему миру, 24 часа в сутки 7 дней в неделю</p>
                    </div>
                    <div class="btn btn-blue no-shadow full-width-xs">Открыть карту</div>
                </div>
            </div>
        </a>

        <a target="_blank" class="cards__banner" href="http://qazkom.kz/personal-banking/cards/master-card-platinum-visa-platinum">
            <div class="row">
                <div class="col-12 col-md-4 flex-md-last cards__banner__pic">
                    <img src="/public/img/temp/cards-qk4.png">
                </div>
                <div class="col-12 col-md-8">
                    <div class="cards__banner__title">
                        <b>Qazkom: </b>
                        Платиновая 3в1 Visa Platinum + MasterCard Platinum + Visa Gold
                        <p>Visa Platinum + MasterCard Platinum + Gold Card</p>
                    </div>
                    <div class="cards__banner__list margin-btm">
                        <p>Стоимость обслуживания: 79 900 тенге в первый год</p>
                        <p>Возможность выпуска дополнительных карт MasterCard Gold или Visa Gold для карточного счета</p>
                        <p>Международный страховой полис Allianz Global Assistance с покрытием до 12 миллионов тенге</p>
                    </div>
                    <div class="btn btn-blue no-shadow full-width-xs">Открыть карту</div>
                </div>
            </div>
        </a>

        <a target="_blank" class="cards__banner" href="http://qazkom.kz/personal-banking/cards/mastercard-sinooil">
            <div class="row">
                <div class="col-12 col-md-4 flex-md-last cards__banner__pic">
                    <img src="/public/img/temp/cards-qk5.png">
                </div>
                <div class="col-12 col-md-8">
                    <div class="cards__banner__title">
                        <b>Qazkom: </b>
                        Топливная карта World MasterCard Sinooil
                        <p>World MasterCard Sinooil</p>
                    </div>
                    <div class="cards__banner__list margin-btm">
                        <p>Уникальная карта совместно с MasterCard и сетью АЗС Sinooil</p>
                        <p>Дополнительные 4% бонусов при каждой оплате в сети АЗС Sinooil</p>
                        <p>Бесконтактные платежи с технологией PayPass от MasterCard</p>
                        <p>Стоимость выпуска и первый год обслуживания: 990 тенге</p>
                    </div>
                    <div class="btn btn-blue no-shadow full-width-xs">Открыть карту</div>
                </div>
            </div>
        </a>

        <a target="_blank" class="cards__banner" href="http://qazkom.kz/personal-banking/cards/visa-angel-keeper">
            <div class="row">
                <div class="col-12 col-md-4 flex-md-last cards__banner__pic">
                    <img src="/public/img/temp/cards-qk6.png">
                </div>
                <div class="col-12 col-md-8">
                    <div class="cards__banner__title">
                        <b>Qazkom: </b>
                        Благотворительная карта Visa Classic
                        <p>Visa Classic</p>
                    </div>
                    <div class="cards__banner__list margin-btm">
                        <p>Станьте ангелом-хранителем новорожденных детей, которые нуждаются в экстренной помощи</p>
                        <p>Карта выпускается совместно с Visa и благотворительным фондом "Кус Жолы", который спасает жизни новорожденных по всему Казахстану</p>
                        <p>При каждой оплате покупок и услуг картой 0,15 % от суммы транзакции направляются на счет проекта «Ангел-хранитель» дляпокупки дорогостоящего оборудования в родильные отделения наиболее нуждающихся городских, сельских и районных больниц Казахстана</p>
                        <p>Помимо собранной с помощью платежных карт суммы QAZKOM добавляет еще две трети из собственных средств в качестве благотворительного взноса</p>
                    </div>
                    <div class="btn btn-blue no-shadow full-width-xs">Открыть карту</div>
                </div>
            </div>
        </a>

        <a target="_blank" class="cards__banner" href="http://qazkom.kz/personal-banking/cards/visa-angel-keeper">
            <div class="row">
                <div class="col-12 col-md-4 flex-md-last cards__banner__pic">
                    <img src="/public/img/temp/cards-qk7.png">
                </div>
                <div class="col-12 col-md-8">
                    <div class="cards__banner__title">
                        <b>Qazkom: </b>
                        Виртуальная карта за 1 секунду
                        <p>Виртуальная карта</p>
                    </div>
                    <div class="cards__banner__list margin-btm">
                        <p>Виртуальная карта для совершения безопасных Интернет-платежей</p>
                        <p>Для получения карты вы уже должны иметь карточный счет в нашем банке</p>
                        <p>Стоимость карты: от 1 тенге</p>
                    </div>
                    <div class="btn btn-blue no-shadow full-width-xs">Открыть карту</div>
                </div>
            </div>
        </a>

    </section>


    <section class="tabs__content cards__banners cards__credit-cards">

        <div class="padding-sm center section-title">Кредитные карты</div>

        <a target="_blank" class="cards__banner" href="http://qazkom.kz/personal-banking/cards/credit-card/my-card">
            <div class="row">
                <div class="col-12 col-md-4 flex-md-last cards__banner__pic">
                    <img src="/public/img/temp/cards-qk8.png">
                </div>
                <div class="col-12 col-md-8">
                    <div class="cards__banner__title">
                        <b>Qazkom: </b>
                        My!Card
                        <p>Авиабонусы на все авиакомпании</p>
                    </div>
                    <div class="cards__banner__list margin-btm">
                        <p>Авиа бонусы - 3% на все авиаперелеты</p>
                        <p>Обслуживание карты - 0 тенге для Клиентов QAZKOM</p>
                        <p>Ставка вознаграждения - 0% в льготный период</p>
                        <p>Кредитный лимит - до 1 500 000 тенге</p>
                    </div>
                    <div class="btn btn-blue no-shadow full-width-xs">Открыть карту</div>
                </div>
            </div>
        </a>

        <a target="_blank" class="cards__banner" href="https://www.bankastana.kz/ru/individual/astana-cards">
            <div class="row">
                <div class="col-12 col-md-4 flex-md-last cards__banner__pic">
                    <img src="/public/img/temp/cards-astana1.png">
                </div>
                <div class="col-12 col-md-8">
                    <div class="cards__banner__title">
                        <b>Astana Banki: </b>
                        Кредитные карты Банка Астаны
                        <p>MasterCard</p>
                    </div>
                    <div class="cards__banner__list margin-btm">
                        <p>Интернет-транзакции – 0 тенге</p>
                        <p>Оплата через POS-терминалы (в том числе и за рубежом) – 0 тенге</p>
                        <p>Оплата в Мобильном и Интернет-Банкинге – 0 тенге</p>
                        <p>Доставка в офис или домой - 0 тенге</p>
                    </div>
                    <div class="btn btn-blue no-shadow full-width-xs">Открыть карту</div>
                </div>
            </div>
        </a>

    </section>



</div>

@include('partials.footer')

@include('partials.support')

@endsection