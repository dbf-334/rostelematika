@extends('layouts.base')


@section('meta_name_robots')
    <meta name="robots" content="index, follow"/>
@endsection


@section('to_header')
    <link href="{{ asset('/css/sec_oborudovanie.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_clients.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_reviews.css') }}" rel="stylesheet">
@endsection



@section('content')
    {{-- Подключаем только те модальные окна,
    которые будут использоваться на данной странице --}}
    @include('modals.compred')

    <div class="page-oborudovanie">
        {{--указатель нахождения на странице--}}
        <div class="w-100 text-center pt-5 pb-2">
            <h1 class="text-dark">Все GPS Маяки</h1>
        </div>


        @include('pages.inc.oborud_all',[ 'type'=>'GPS Маяк'])



        {{-- Инфа о кол-ве клиентов --}}
        @include('pages.inc.sec_clients')

        {{-- Отзывы клиентов --}}
        @include('pages.inc.sec_reviews')


    </div>
@endsection









