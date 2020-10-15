@extends('layouts.base')


@section('meta_name_robots')
    <meta name="robots" content="index, follow"/>
@endsection


@section('to_header')
    <link href="{{ asset('css/personalnyii-monitoring.css') }}" rel="stylesheet">

    <link href="{{ asset('css/sec_main_slide.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/sec_clients.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/sec_reviews.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/sec_steps.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/sec_commerce.css') }}" rel="stylesheet">

@endsection


@section('to_footer')
    <script>
        {{-- Меняем картинки в блоке / Инфа о кол-ве клиентов --}}
        $('#sec_clients .img1').attr('src', '/img/pages/personalnyii-monitoring/client_015.png');
        $('#sec_clients .img5').attr('src', '/img/pages/personalnyii-monitoring/client_018.png');
        $('#sec_clients .img6').attr('src', '/img/pages/personalnyii-monitoring/client_022.png');
    </script>
@endsection



@section('content')
    <div class="page-personalnyii-monitoring">

        {{-- главный слайдер + форма захвата --}}
        @include('pages.inc.sec_main_slide', [ 'img_slide'=>'slider-mobile.jpg',
            'text_slide'=>["Приложение WiaTag предназначено для эффективного управления мобильным персоналом. За счет точного
            определения скорости и детальной истории передвижения объекта WiaTag позволяет контролировать и оптимизировать
            работы мобильных сотрудников.", "Приложение доступно для бесплатного скачивания."] ])


        {{-- Блок данных --}}
        <div class="block-1 pt-3 pb-5">
            <div class="title text-center mx-auto">
                <h2>Области применения</h2>
                <p>WiaTag выводит эффективность управления мобильным персоналом в любой сфере бизнеса на новый уровень</p>
            </div>

            <div class="row h-auto">
                <div class="card">
                    <img src="/img/pages/personalnyii-monitoring/pic1.jpg" alt="">
                </div>
                <div class="card">
                    <img src="/img/pages/personalnyii-monitoring/pic2.jpg" alt="">
                </div>
                <div class="card">
                    <img src="/img/pages/personalnyii-monitoring/pic3.jpg" alt="">
                </div>
                <div class="card">
                    <img src="/img/pages/personalnyii-monitoring/pic4.jpg" alt="">
                </div>
                <div class="card">
                    <img src="/img/pages/personalnyii-monitoring/pic5.jpg" alt="">
                </div>
                <div class="card">
                    <img src="/img/pages/personalnyii-monitoring/pic6.jpg" alt="">
                </div>
            </div>
        </div>




        {{-- Блок данных --}}
        <div class="block-2 pb-5">
            <div class="title text-center mx-auto">
                <h2>Функциональные возможности WiaTag</h2>
                <p>Полностью контролируйте, направляйте и инструктируйте мобильных сотрудников на выездах</p>
            </div>

            <div class="row h-auto">

                <div class="card bodytext">
                    <div class="card-body">

                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="heading1">
                                    <button class="btn" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        Актуальные данные
                                        <div class="ml-auto"><i class="svg-icon icon-down-arrow"></i></div>
                                    </button>
                                </div>

                                <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Просматривайте ключевые параметры на главном экране для экономии времени. Информация
                                            автоматически обновляется на основании последних сообщений от объекта.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="heading2">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse2"
                                                aria-expanded="false" aria-controls="collapse2">
                                            Данные от сотрудников
                                            <div class="ml-auto"><i class="svg-icon icon-down-arrow"></i></div>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Сотрудники могут посылать фото, SOS-сообщения или данные о местоположении. Будьте в курсе,
                                            если им потребуется помощь или дополнительная информация.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="heading3">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse3"
                                                aria-expanded="false" aria-controls="collapse3">
                                            Статусы пользователя
                                            <div class="ml-auto"><i class="svg-icon icon-down-arrow"></i></div>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Адаптируйте приложение к нуждам бизнеса. Создавайте нужные статусы, получайте сообщения
                                            с пользовательскими параметрами, чтобы знать, что происходит на выезде.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="heading4">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse4"
                                                aria-expanded="false" aria-controls="collapse4">
                                            Использование QR-кодов
                                            <div class="ml-auto"><i class="svg-icon icon-down-arrow"></i></div>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Предоставьте сотрудникам возможность авторизации через QR-код. Пусть они сканируют QR-код
                                            в определенных местах или обстоятельствах (например, в конце маршрута).</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="heading5">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse5"
                                                aria-expanded="false" aria-controls="collapse5">
                                            Экономия заряда батареи
                                            <div class="ml-auto"><i class="svg-icon icon-down-arrow"></i></div>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Переключайте пользовательские режимы для контроля расхода батареи. Режим энергосбережения
                                            позволяет устройствам работать дольше.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="heading6">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse6"
                                                aria-expanded="false" aria-controls="collapse6">
                                            Режимы пользователя
                                            <div class="ml-auto"><i class="svg-icon icon-down-arrow"></i></div>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Выбор предустановленного режима пользователя (Актив/Стандарт/Лайт) или создание
                                            собственного (Произвольный).</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading7">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse7"
                                                aria-expanded="false" aria-controls="collapse7">
                                            Удаленное управление
                                            <div class="ml-auto"><i class="svg-icon icon-down-arrow"></i></div>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Отправляйте запрос на снимок камерой или остановку работы, а также удаленно меняйте
                                            настройки для управления сотрудниками.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading8">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse8"
                                                aria-expanded="false" aria-controls="collapse8">
                                            Общение с сотрудниками
                                            <div class="ml-auto"><i class="svg-icon icon-down-arrow"></i></div>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Посылайте и получайте различные типы сообщений от работников для эффективной ежедневной коммуникации.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="card equipment"></div>

            </div>
        </div>




        {{-- Инфа о кол-ве клиентов --}}
        @include('pages.inc.sec_clients')

        {{-- Отзывы клиентов --}}
        @include('pages.inc.sec_reviews')

        {{-- Этапы работ --}}
        <div class="my_hr1"></div>
        @include('pages.inc.sec_steps')

        {{-- Форма захвата - Получить коммерческое предложение --}}
        @include('pages.inc.sec_commerce')


    </div>
@endsection