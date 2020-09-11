<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$page->title}} {{$domain->postfix1}}</title>
    <meta name="description" content="{{$page->description}} {{$domain->postfix2}}">
    <meta charset="utf-8">
    <meta name="author" content="Ростелематика | www.ros-telematika.ru">

    <meta name="app_domain" content="{{$domain->domain}}.ros-telematika.ru">



    <script src="{{ asset('js/app.js') }}" defer></script>
    <!--link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet"-->

    <!-- Базовые стили -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Стили структуры шаблона -->
    <link href="{{ mix('/css/svg.css') }}" rel="stylesheet">            <!-- стили SVG иконок -->
    <link href="{{ mix('/css/up_menu.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/head.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/main_menu.css') }}" rel="stylesheet">

    {{-- стили модальных окон --}}
    <link href="{{ mix('/css/modal-base-form.css') }}" rel="stylesheet">


    @stack('css')
    @yield('to_header')

</head>
<body>
    <div id="app">
        {{-- мобильное меню ------------------------------------------}}
        @include('layouts.mobile_menu')
        {{-- верхнее меню ------------------------------------------}}
        @include('layouts.up_menu')
        {{-- заголовок страниц ------------------------------------------}}
        @include('layouts.head')
        {{-- основное меню ------------------------------------------}}
        @include('layouts.main_menu')

        {{-- боковое меню ------------------------------------------}}
        {{--@include('layouts.left_menu')--}}

            @include('modals.all_city')
            @include('modals.policy')


        {{--данные страницы--}}
        @yield('content')





    <!-- Scripts ------------------------------------------------------------------------------------------------------>
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-tools/1.2.7/jquery.tools.min.js" ></script>
            {{--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>--}}
            {{--<script src="/js/jquery.min.js"></script>--}}


    {{-- боковое меню ------------------------------------------}}
    <script>
        $("#main_menu").hide();
        $("#main_menu").toggleClass("toggled");

        $("#menu-toggle").click(function() {
            $("#main_menu").show();
            $("#main_menu").toggleClass("toggled");
        });
    </script>

</body>
</html>