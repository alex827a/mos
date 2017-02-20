@extends('app')

@section('content')

@include('partials.nav')

<div class="padding">
    <div class="tabs container">
        <div class="row">
            <div class="formSwitcher tabs__tab formSwitcher_current col-12 col-sm" switchform="travel__avia" formDocument="/public/forms/travel-avia.html">Авиабилеты</div>
            <div class="formSwitcher tabs__tab col-12 col-sm" switchform="travel__train" formDocument="/public/forms/travel-train.html">Поезда</div>
            <div class="formSwitcher tabs__tab col-12 col-sm" switchform="travel__hotels" formDocument="/public/forms/travel-hotels.html">Отели</div>
        </div>
    </div>
</div>


<div class="travel__avia load-form load-form_current"></div>
<script>$('.travel__avia').load('public/forms/travel-avia.html');</script>

<div class="travel__train load-form"></div>
<div class="travel__hotels load-form"></div>

@include('partials.footer')

@include('partials.support')

@endsection