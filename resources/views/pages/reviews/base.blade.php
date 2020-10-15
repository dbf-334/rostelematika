@extends('layouts.base')


@section('meta_name_robots')
    <meta name="robots" content="index, follow"/>
@endsection


@section('to_header')
    {{-- Подключаем стили секций/блоков, которые используются на данной странице --}}
    <link href="{{ mix('/css/sec_reviews.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/sec_clients.css') }}" rel="stylesheet">

    <style>
        p {text-indent: 20px;}
        #sec_reviews h2 {display: none;}
    </style>
@endsection


@section('content')
    <div class="page-reviews">
        <div class="container">

            {{--указатель нахождения на странице--}}
            <div class="w-100 text-left pt-5 pb-2">
                <h1 class="text-dark">Отзыв от {{ $reviews->title }}</h1>
            </div>

            <div class="w-100 pb-5">
                <div class="text-center pt-2">
                    <img src="/img/reviews/{{$reviews->img}}" alt="" class="w-50 border border-secondary border-2 rounded">
                </div>
                <div class="w-100 pt-5">
                    <div class="w-75 mx-auto">{!! $reviews->body !!}</div>
                    <div class="w-75 mx-auto text-right pt-3"><em>{{ $reviews->position }} / {{ $reviews->fio }}</em></div>
                </div>
            </div>

        </div>

        {{-- Инфа о кол-ве клиентов --}}
        @include('pages.inc.sec_clients')


        {{-- Отзывы клиентов --}}
        <div class="w-100 text-center">
            <h2 class="m-0 mt-5">Смотрите другие отзывы</h2>
        </div>
        @include('pages.inc.sec_reviews')

    </div>
@endsection