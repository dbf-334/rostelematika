@extends('layouts.base')


@section('meta_name_robots')
    <meta name="robots" content="index, follow"/>
@endsection


@section('to_header')
    <link href="{{ mix('/css/sec_oborudovanie.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/sec_clients.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/sec_reviews.css') }}" rel="stylesheet">

    <style>
        .page-oborudovanie .link {
            margin-right: 10px;
            border-color: rgba(255,255,255,0.3);
            outline: none !important;
            font-style: italic;
            font-weight: 500;
            font-size: 15px;
            height: 38px;
            text-decoration: none;
            width: 150px;

            border: 1px solid #d7dfe2;
            color: #212121;
        }
        .page-oborudovanie .btn {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            text-align: center;
            transition: 0.3s;
            border-radius: 80px;
        }
        .page-oborudovanie .link:hover {
            color: #fff;
            border-color: #01aef2;
            background-color: #01aef2;
        }
    </style>
@endsection



@section('content')
    {{-- Подключаем только те модальные окна,
    которые будут использоваться на данной странице --}}
    @include('modals.compred')

    <div class="page-oborudovanie">
        {{--указатель нахождения на странице--}}
        <div class="w-100 text-center pt-5 pb-2">
            <h1 class="text-dark">{{ $page->h1 }}</h1>
        </div>

        <div class="container">
            <div class="row h-auto pb-3 pt-5">
                <h2 class="float-left m-0 mr-4">Датчики уровня топлива</h2>
                <a href="/services/kontrol-rasxoda-topliva.html#oborudovanie" class="btn link">Подробнее</a>
            </div>
        </div>
        @include('pages.inc.oborud_count',[ 'type'=>'Датчик уровня топлива', 'count'=>4 ])

        <div class="container">
            <div class="row h-auto pb-3 pt-5">
                <h2 class="float-left m-0 mr-4">Системы параллельного вождения</h2>
                <a href="/services/kursoukazateli#oborudovanie" class="btn link">Подробнее</a>
            </div>
        </div>
        @include('pages.inc.oborud_count',[ 'type'=>'Курсоуказатель', 'count'=>4 ])



        {{-- Инфа о кол-ве клиентов --}}
        @include('pages.inc.sec_clients')

        {{-- Отзывы клиентов --}}
        @include('pages.inc.sec_reviews')


    </div>
@endsection









