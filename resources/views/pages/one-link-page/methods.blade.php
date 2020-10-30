@extends('layouts.base')


@section('meta_name_robots')
    <meta name="robots" content="index, follow"/>
@endsection


@section('to_header')
    <link href="{{ asset('/css/methods.css') }}" rel="stylesheet">

    <link href="{{ asset('/css/sec_yandex_map.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_smi_news.css') }}" rel="stylesheet">
@endsection


@section('to_footer')
    {{-- Вставляем код Яндекс-карты --}}
    @include('pages.inc.sec_yandex_map')

@endsection



@section('content')
    <div class="page-methods">

        <div class="container pb-4">
            {{--указатель нахождения на странице--}}
            <div class="w-100 text-left pb-3 pt-5">
                <h1 class="text-dark" style="font-size: 30px;">{{ $page->h1 }}</h1>
            </div>

            <p>Мы предлагаем для работы с нами самый удобный способ оплаты, который не доставляет неудобств – по безналичному расчету.</p>
            <p>Оплачивать просто – наш менеджер вышлет Вам счет, а Вам останется всего лишь его оплатить.</p>
        </div>


        {{-- Преимущества в цифрах --}}
        <div class="block-3 pb-5">
            <div class="container">
                <h2 class="text-center text-center pt-5 pb-3 m-0">Наши преимущества</h2>

                <div class="row w-100">

                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4"><i class="svg-icon icon-shield-blue"></i></div>
                            <p>Пожизненная гарантия на оборудование</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4"><i class="svg-icon icon-24-hours-blue"></i></div>
                            <p>Сервис 48 часов</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4"><i class="svg-icon icon-save-money-blue"></i></div>
                            <p>Экономите >5% на содержании ТС или мы вернем деньги</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4"><i class="svg-icon icon-loupe-blue"></i></div>
                            <p>Максимально прозрачный контроль</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>



        {{-- Примеры внедрения и отзывы --}}
        @include('pages.inc.sec_smi_news')


        {{-- Вставляем код Яндекс-карты из БД --}}
        <div id="map-item" style="width: 100%; height: 350px"></div>


    </div>
@endsection


