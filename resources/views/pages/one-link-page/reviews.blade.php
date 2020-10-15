@extends('layouts.base')


@section('meta_name_robots')
    <meta name="robots" content="index, follow"/>
@endsection


@section('to_header')
    {{-- Подключаем стили секций/блоков, которые используются на данной странице --}}
    <link href="{{ mix('/css/sec_clients.css') }}" rel="stylesheet">

    <style>
        .card-reviews {max-width: 200px;}
    </style>
@endsection


@section('content')
    <div class="page-reviews">
        <div class="container">

            {{--указатель нахождения на странице--}}
            <div class="w-100 text-left pt-5 pb-2">
                <h1 class="text-dark">{{ $page->h1 }}</h1>
            </div>

            <div class="row pb-5 h-auto">
                @foreach(DB::table('reviews')->where('type','0')->where('visible','=','1')->orderBy('id', 'desc')->get() as $item)
                    <div class="card card-reviews border-0 text-center">
                        <a href="/reviews/{{$item->id}}.html">
                            <div class="card-img pt-2">
                                <img src="/img/reviews/{{$item->img}}" alt="" width="200" height="280"
                                     class="border border-secondary border-2 rounded">
                            </div>
                            <div class="card-body p-0 mt-3">
                                {{$item->title}}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

        </div>

        {{-- Отзывы клиентов --}}
        {{--<div class="w-100 text-center">
            <h2 class="m-0">Благодарственные письма наших Клиентов</h2>
        </div>
        @include('pages.inc.sec_reviews')--}}

        {{-- Инфа о кол-ве клиентов --}}
        @include('pages.inc.sec_clients')
        <div class="my_hr1"></div>


    </div>
@endsection