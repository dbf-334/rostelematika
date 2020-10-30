@extends('layouts.base')


@section('meta_name_robots')
    <meta name="robots" content="index, follow"/>
@endsection


@section('to_header')
    <link href="{{ asset('/css/mobilnyie-prilozheniya.css') }}" rel="stylesheet">

    <link href="{{ asset('/css/sec_yandex_map.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_smi_news.css') }}" rel="stylesheet">
@endsection


@section('to_footer')
    {{-- Вставляем код Яндекс-карты --}}
    @include('pages.inc.sec_yandex_map')

@endsection



@section('content')
    <div class="page-mobilnyie-prilozheniya">

        <div class="container pb-4">
            {{--указатель нахождения на странице--}}
            <div class="w-100 text-left pb-3 pt-5">
                <h1 class="text-dark" style="font-size: 30px;">{{ $page->h1 }}</h1>
            </div>
        </div>

        {{-- Блок данных --}}
        <div class="block-1 pb-3">
            <div class="row h-auto">
                <div class="card bodytext">
                    <div class="card-body">
                        <p>Всем клиентам использующим Виалон, доступно бесплатное многоязычное приложение для Android и iOs устройств.
                            Мобильная версия Wialon позволяет работать со списком объектов мониторинга, обеспечивая оперативное получение
                            важнейшей информации по всем Вашим транспортным средствам в режиме реального времени.</p>
                        <p>Благодаря удобной навигации и дружелюбному интерфейсу пользователи без труда освоят функционал мобильной
                            версии Виалон, адаптированной под смартфоны и планшеты.</p>
                        <p><img src="/img/pages/mobilnyie-prilozheniya/wigin-hosting.png" alt=""></p>
                    </div>
                </div>

                <div class="card laptop">
                    <div class="card-img">
                        <img src="/img/pages/mobilnyie-prilozheniya/apps.png" alt="">
                    </div>
                    <div class="card-body">
                        <div class="footer__apps">
                            <a href="https://play.google.com/store/apps/details?id=com.gurtam.wialon_client&amp;hl=ru/ " target="_blank" class="footer__app">
                                <img src="/img/main/google-play.png" alt="">
                            </a>
                            <a href="https://itunes.apple.com/ru/app/wialon/id960699792?mt=8/" target="_blank" class="footer__app">
                                <img src="/img/main/app-store.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
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


