@extends('layouts.base')


@section('to_header')
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
@endsection



@section('content')
    <div class="page-index">
        <div class="container">

            {{--указатель нахождения на странице--}}
            <div class="w-100 text-center pt-2">
                <h1 class="text-dark">{{ $page->h1 }}</h1>
            </div>




        </div>
    </div>
@endsection