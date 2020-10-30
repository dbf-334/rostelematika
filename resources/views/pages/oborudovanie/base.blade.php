@extends('layouts.base')


@section('meta_name_robots')
    <meta name="robots" content="index, follow"/>
@endsection


@section('to_header')
    {{-- Загружаем стили - Галерея изображений --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />

    <link href="{{ asset('/css/oborudovanie.css') }}" rel="stylesheet">

    {{-- Подключаем стили секций/блоков, которые используются на данной странице --}}
    <link href="{{ asset('/css/sec_reviews.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_clients.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_oborudovanie.css') }}" rel="stylesheet">

    <style>
        .box-opis ul li::before {
            content: "";
            background-image: url(/img/svg/tick.svg);
            width: 18px;
            height: 18px;
            margin-right: 15px;
            padding: 9px;
        }
    </style>
@endsection


@section('to_footer')
    {{-- Загружаем скрипт - Галерея изображений --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>
@endsection


@section('content')
    {{-- Подключаем только те модальные окна,
    которые будут использоваться на данной странице --}}
    @include('modals.buy')

    <div class="page-oborudovanie">
        <div class="container">

            {{--указатель нахождения на странице--}}
            <div class="w-100 text-left pt-5 pb-2">
                <h1 class="text-dark">{{$equipments->type}} {{$equipments->model}}</h1>
            </div>

            <div class="row h-auto pb-5">
                <div class="card box-menu bg-light">
                    <div class="card-header font-weight-bold p-3">
                        Другое наше оборудование
                    </div>
                    <div class="card-body p-3">
                        @foreach(DB::table('pages')->where('id_category','=',4)->where('url','<>','oborudovanie')->get() as $item)
                            <div class="pb-2"><a href="/{{$item->url}}">{{$item->h1}}</a></div>
                        @endforeach
                    </div>
                </div>

                <div class="card box-info">
                    <div class="row h-auto">
                        <div class="card box-image">
                            <a data-fancybox href="/img/oborudovanie/{{$equipments->img}}">
                                <img src="/img/oborudovanie/{{$equipments->img}}" alt="" class="img-thumbnail">
                            </a>
                        </div>
                        <div class="card w-50 box-link">
                            <a class="locality modal-show btn btn_bg-red btn_animate text-uppercase"
                               data-theme="{{$equipments->type}} {{$equipments->model}}"
                               data-toggle="modal"
                               data-target="#modal_buy">
                                Купить {{$equipments->type}} {{$equipments->model}}
                            </a>
                        </div>
                        <div class="card box-opis mt-5">
                            {{--ссылка на документацию--}}
                            @if ( $equipments->pdf != NULL )
                                <div class="pdf-icon">
                                    <a target="_blank" href="/files/equipment/{{$equipments->pdf}}">
                                        Инструкция на {{$equipments->type .' '. $equipments->model}}</a>
                                </div>
                            @endif

                            {{-- тело страницы --}}
                            {!! $equipments->opis !!}

                            {{--ссылка на документацию (дубль) --}}
                            @if ( $equipments->pdf != NULL )
                                <div class="pdf-icon">
                                    <a target="_blank" href="/files/equipment/{{$equipments->pdf}}">
                                        Инструкция на {{$equipments->type .' '. $equipments->model}}</a>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

            <div class="card w-100 text-center">
                <div class="card-header text-uppercase font-weight-bold bg-info">
                    <h3 class="text-white m-0">Внимание!</h3>
                </div>
                <div class="card-body bg-light">
                    Для оформления заказа заполните онлайн заявку нажав кнопку <strong>"КУПИТЬ"</strong> или звоните на бесплатную горячую линию:
                    <div class="font-weight-bold"><h3 class="m-0 mt-3">{{ app('global')['main_phone'] }}</h3></div>
                </div>
            </div>

        </div>

        {{-- Оборудование для навигации --}}
        <div class="container">
            <h2>Другие популярные модели</h2>
        </div>
        @include('pages.inc.oborud_count',['type' => $equipments->type])


        {{-- Инфа о кол-ве клиентов --}}
        @include('pages.inc.sec_clients')

        {{-- Отзывы клиентов --}}
        @include('pages.inc.sec_reviews')

    </div>
@endsection