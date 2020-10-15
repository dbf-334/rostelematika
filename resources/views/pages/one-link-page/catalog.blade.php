@extends('layouts.base')


@section('meta_name_robots')
    <meta name="robots" content="index, follow"/>
@endsection


@section('to_header')
    {{-- Подключаем стили секций/блоков, которые используются на данной странице --}}
    <link href="{{ mix('/css/sec_services.css') }}" rel="stylesheet">

    <style>
        /*** корректировка стилей блока ***/
        #sec_services {
            background-color: transparent;
        }
        #sec_services .container h2 {
            display: none;
        }
    </style>
@endsection


@section('content')
    <div class="page-catalog">
        <div class="container">

            {{--указатель нахождения на странице--}}
            <div class="w-100 text-left pt-5 pb-2">
                <h1 class="text-dark" style="font-size: 30px;">{{ $page->h1 }}</h1>
            </div>


        </div>

        {{-- Стоимость установки ГЛОНАСС. Готовые решения --}}
        @include('pages.inc.sec_services')

    </div>
@endsection