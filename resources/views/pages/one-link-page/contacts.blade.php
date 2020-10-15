@extends('layouts.base')


@section('meta_name_robots')
    <meta name="robots" content="index, follow"/>
@endsection


@section('to_header')
    <link href="{{ asset('/css/contacts.css') }}" rel="stylesheet">

    <link href="{{ mix('/css/sec_yandex_map.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/sec_clients.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/sec_reviews.css') }}" rel="stylesheet">

@endsection


@section('to_footer')
    {{-- Вставляем код Яндекс-карты --}}
    @include('pages.inc.sec_yandex_map')


    <script>
        {{-- Меняем картинки в блоке / Инфа о кол-ве клиентов --}}
        $('#sec_clients .img1').attr('src', '/img/pages/about/client_013.png');
        $('#sec_clients .img2').attr('src', '/img/pages/about/client_015.png');
        $('#sec_clients .img3').attr('src', '/img/pages/about/client_016.png');
        $('#sec_clients .img6').attr('src', '/img/pages/about/client_022.png');
    </script>
@endsection



@section('content')
    {{-- Подключаем только те модальные окна,
    которые будут использоваться на данной странице --}}
    @include('modals.boss_ring')

    <div class="page-about">


        <div class="container block-2 pb-3 mt-5">
            {{--указатель нахождения на странице--}}
            <div class="w-100 text-left pb-5">
                <h1 class="text-dark" style="font-size: 30px;">{{ $page->h1 }}</h1>
            </div>

                <div class="row h-auto">

                    <div class="card">
                        <div class="card-header">
                            <div class="header_contact">
                                <div class="contact_icon">
                                    <i class="svg-icon icon-placeholder-blue"></i>
                                </div>
                                <h2 class="m-0 pl-3 pt-1">Наш адрес:</h2>
                            </div>
                        </div>
                        <div class="card-body  py-0 ml-5 pl-5">
                            <p>{{$domain->postal}}, Россия, г. {{$domain->name}}, {{$domain->address}}</p>
                            <p><strong>Время работы:</strong> {{$domain->work}}</p>
                            <p>{{ app('global')['main_phone'] }} (бесплатно по РФ)</p>
                            <p>{{$domain->tel1}}</p>
                            <p>{{$domain->email}}</p>
                        </div>
                    </div>

                    <div class="card text-center mb-3">
                        <div class="card-header">
                            <img src="/img/main/director.jpg" alt="" width="200">
                        </div>
                        <div class="card-body py-0">
                            <div class="feedback_callback locality modal-show mx-auto"
                               data-toggle="modal"
                               data-target="#modal_boss_ring">
                                Связаться с руководтсвом
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="header_contact">
                                <div class="contact_icon">
                                    <i class="svg-icon icon-user-silhouette"></i>
                                </div>
                                <h2 class="m-0 pl-3 pt-1">Реквизиты организации:</h2>
                            </div>
                        </div>
                        <div class="card-body  py-0 ml-5 pl-5">
                            <p><strong class="pr-2">ОГРН</strong> 1172651017571</p>
                            <p><strong class="pr-2">ИНН</strong> 2635229823</p>
                            <p><strong class="pr-2">КПП</strong> 263501001</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="header_contact">
                                <div class="contact_icon">
                                    <i class="svg-icon icon-wallet"></i>
                                </div>
                                <h2 class="m-0 pl-3 pt-1">Финансовый отдел/бухгалтерия:</h2>
                            </div>
                        </div>
                        <div class="card-body  py-0 ml-5 pl-5">
                            <p>8 905 499-79-45</p>
                            <p>fin@ros-telematika.ru</p>
                            <p>buh@ros-telematika.ru</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="header_contact">
                                <div class="contact_icon">
                                    <i class="svg-icon icon-shopping-cart"></i>
                                </div>
                                <h2 class="m-0 pl-3 pt-1">Отдел продаж:</h2>
                            </div>
                        </div>
                        <div class="card-body  py-0 ml-5 pl-5">
                            <p>{{ app('global')['main_phone'] }} (бесплатно по РФ)</p>
                            <p>{{$domain->tel1}}</p>
                            <p>{{$domain->tel2}}</p>
                            <p>office@ros-telematika.ru</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="header_contact">
                                <div class="contact_icon">
                                    <i class="svg-icon icon-settings"></i>
                                </div>
                                <h2 class="m-0 pl-3 pt-1">Технический отдел:</h2>
                            </div>
                        </div>
                        <div class="card-body  py-0 ml-5 pl-5">
                            <p>8 (8652) 59-90-50</p>
                            <p>8 938 654 90-50</p>
                            <p>8 903 408 82-48</p>
                            <p>support@ros-telematika.ru</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="header_contact">
                                <div class="contact_icon">
                                    <i class="svg-icon icon-question"></i>
                                </div>
                                <h2 class="m-0 pl-3 pt-1">Общие вопросы:</h2>
                            </div>
                        </div>
                        <div class="card-body  py-0 ml-5 pl-5">
                            <p>info@ros-telematika.ru</p>
                        </div>
                    </div>

                </div>



                <div class="my_hr1 mb-5 pt-5" id="map"></div>

                <div class="header_contact pb-3">
                    <div class="contact_icon">
                        <i class="svg-icon icon-placeholder-blue"></i>
                    </div>
                    <h2 class="m-0 pl-3 pt-1">Региональная сеть:</h2>
                </div>

                <div class="row h-auto pl-4">
                    @foreach(DB::table('domains')->where('name','<>', $domain->name )->orderBy('name', 'asc')->get() as $item)
                        <div class="card">
                            <div class="card-body">
                                <i class="svg-icon icon-placeholder-blue"></i>
                                <a href="//{{$item->domain}}.ros-telematika.test{{request()->getPathInfo()}}">{{$item->name}}<span> - {{$item->region}}</span></a>

                            </div>
                        </div>
                    @endforeach
                </div>

            <p>Также наши специалисты производят выезд во все населенные пункты {{$domain->postfix2}} и во многие другие.</p>
        </div>


        {{-- Вставляем код Яндекс-карты из БД --}}
        <div class="container mt-2 mb-3">
            <h2>Схема проезда:</h2>
        </div>
        <div id="map-item" style="width: 100%; height: 350px"></div>


        {{-- Инфа о кол-ве клиентов --}}
        @include('pages.inc.sec_clients')

        {{-- Отзывы клиентов --}}
        @include('pages.inc.sec_reviews')


    </div>
@endsection
