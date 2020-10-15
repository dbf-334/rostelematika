@inject('tbl_page', 'App\Models\Page')
@extends('layouts.base')



@section('meta_name_robots')
    <meta name="robots" content="index, follow"/>
@endsection



@section('to_header')
    <style>
        .page-sitemap .container div ul {
            list-style: none;
        }
        .page-sitemap .container div ul li .secondary li {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            list-style: none;
        }
        .page-sitemap .container div ul li .secondary li i {
            margin-right: 15px;
        }
    </style>
@endsection



@section('content')
    <div class="page-sitemap">
        <div class="container">

            {{--указатель нахождения на странице--}}
            <div class="w-100 text-center my-5">
                <h1 class="text-dark">{{ $page->h1 }}</h1>
            </div>

            <div class="w-100 h-auto pb-5">
                <ul>
                    @foreach ( $tbl_page::select('id_category')->where('id_category','<>','0')->distinct()->get() as $category )

                        @php $flag=0 @endphp

                        @foreach ( $tbl_page::where('id_category', $category->id_category )->get() as $item_page )
                            @php
                                if ($flag==0) {
                                    $flag=1;
                                    echo '<li><h3><a href="'.$item_page->url.'">'.$item_page->h1.'</a></h3><li>';
                                    echo '<ul class="secondary">';
                                } else {
                                    echo '<li><i class="svg-icon icon-tick"></i><a href="'.$item_page->url.'">'.$item_page->h1.'</a></li>';
                                }
                            @endphp

                        @endforeach

                        @php
                            if ($flag==1) {
                                echo '</ul>';
                            }
                        @endphp

                    @endforeach
                </ul>
            </div>

        </div>
    </div>

@endsection




