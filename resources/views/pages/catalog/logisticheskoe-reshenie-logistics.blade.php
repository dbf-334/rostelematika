@extends('layouts.base')


@section('meta_name_robots')
    <meta name="robots" content="index, follow"/>
@endsection


@section('to_header')
    <link href="{{ asset('css/logisticheskoe-reshenie-logistics.css') }}" rel="stylesheet">

    <link href="{{ asset('css/sec_main_slide.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/sec_clients.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/sec_reviews.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/sec_steps.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/sec_commerce.css') }}" rel="stylesheet">

@endsection


@section('to_footer')
    <script src="{{ asset('js/circle_anim.js') }}"></script>

    <script>
        {{-- Меняем картинки в блоке / Инфа о кол-ве клиентов --}}
        $('#sec_clients .img1').attr('src', '/img/pages/logisticheskoe-reshenie-logistics/client_013.png');
        $('#sec_clients .img4').attr('src', '/img/pages/logisticheskoe-reshenie-logistics/client_015.png');
        $('#sec_clients .img6').attr('src', '/img/pages/logisticheskoe-reshenie-logistics/client_016.png');
    </script>
@endsection



@section('content')
    <div class="page-logisticheskoe-reshenie-logistics">

        {{-- главный слайдер + форма захвата --}}
        @include('pages.inc.sec_main_slide', [ 'img_slide'=>'slider-logistics.jpg',
            'text_slide'=>["Logistics предназначен для контроля всех этапов работы служб доставки. Сервис помогает решать
            такие задачи, как организация перевозок, оптимизация транспортных процессов и сокращение издержек. Logistics
            состоит из двух приложений — веб-версии и мобильной версии."] ])


        <div class="block-7 py-3 my-5">
            <div class="container">
                <h2 class="text-center">Как это работает?</h2>
                <div class="row h-auto mb-5">

                    <div class="card">
                        <div class="card-img circle-container">
                            <div class="circlestat" data-dimension="70" data-text="01" data-width="4" data-fontsize="28"
                                 data-percent="70" data-fgcolor="#01aef2" data-bgcolor="#ddd" data-fill="#fff"></div>
                        </div>
                        <div class="card-body">
                            Добавление заявок
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img circle-container">
                            <div class="circlestat" data-dimension="70" data-text="02" data-width="4" data-fontsize="28"
                                 data-percent="45" data-fgcolor="#01aef2" data-bgcolor="#ddd" data-fill="#fff"></div>
                        </div>
                        <div class="card-body">
                            Распределение заявок
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img circle-container">
                            <div class="circlestat" data-dimension="70" data-text="03" data-width="4" data-fontsize="28"
                                 data-percent="60" data-fgcolor="#01aef2" data-bgcolor="#ddd" data-fill="#fff"></div>
                        </div>
                        <div class="card-body">
                            Мониторинг доставки
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img circle-container">
                            <div class="circlestat" data-dimension="70" data-text="04" data-width="4" data-fontsize="28"
                                 data-percent="93" data-fgcolor="#01aef2" data-bgcolor="#ddd" data-fill="#fff"></div>
                        </div>
                        <div class="card-body">
                            Создание счетов
                        </div>
                    </div>

                </div>
                <div class="font-weight-bold text-center pb-4">Получайте детальную отчетность!</div>
            </div>
        </div>




        {{-- Блок данных --}}
        <div class="block-2 pb-5">
            <h2 class="text-center">Функциональные возможности Веб-версии Logistics</h2>

            <div class="row h-auto">
                <div class="card equipment"></div>

                <div class="card bodytext">
                    <div class="card-body">

                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="heading1">
                                    <button class="btn" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        Заявки
                                        <div class="ml-auto"><i class="svg-icon icon-down-arrow"></i></div>
                                    </button>
                                </div>

                                <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Создание/импорт заявок с подробным описанием заказа.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="heading2">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse2"
                                                aria-expanded="false" aria-controls="collapse2">
                                            Планирование маршрута
                                            <div class="ml-auto"><i class="svg-icon icon-down-arrow"></i></div>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Выбор необходимых заявок и транспортных средств, формирование предварительных маршрутов
                                            с планируемым пробегом и временем прибытия.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="heading3">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse3"
                                                aria-expanded="false" aria-controls="collapse3">
                                            Контроль маршрутов
                                            <div class="ml-auto"><i class="svg-icon icon-down-arrow"></i></div>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Онлайн мониторинг прохождения маршрутов, оперативная связь с водителем по телефону или через чат.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="heading4">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse4"
                                                aria-expanded="false" aria-controls="collapse4">
                                            Отчет по заявкам
                                            <div class="ml-auto"><i class="svg-icon icon-down-arrow"></i></div>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Автоматическое создание маршрутных листов и отчетов по заявкам.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        {{-- Блок данных --}}
        <div class="block-2b pb-5 pt-4">
            <h2 class="text-center">Мобильная версия Logistics</h2>

            <div class="row h-auto">

                <div class="card bodytext">
                    <div class="card-body">

                        <div id="accordion2">
                            <div class="card">
                                <div class="card-header" id="heading1b">
                                    <button class="btn" data-toggle="collapse" data-target="#collapse1b" aria-expanded="true" aria-controls="collapse1b">
                                        Статусы заявок и звонок клиенту
                                        <div class="ml-auto"><i class="svg-icon icon-down-arrow"></i></div>
                                    </button>
                                </div>

                                <div id="collapse1b" class="collapse show" aria-labelledby="heading1b" data-parent="#accordion2">
                                    <div class="card-body">
                                        <p>Выставление статуса заявки «подтвердить»/«отклонить» и кнопка вызова клиента.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="heading2b">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse2b"
                                                aria-expanded="false" aria-controls="collapse2b">
                                            Маршрут всегда под рукой
                                            <div class="ml-auto"><i class="svg-icon icon-down-arrow"></i></div>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse2b" class="collapse" aria-labelledby="heading2b" data-parent="#accordion2">
                                    <div class="card-body">
                                        <p>Построение маршрута к заявке через стороннюю навигационную программу.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="heading3b">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse3b"
                                                aria-expanded="false" aria-controls="collapse3b">
                                            Детальная информация по каждой заявке
                                            <div class="ml-auto"><i class="svg-icon icon-down-arrow"></i></div>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse3b" class="collapse" aria-labelledby="heading3b" data-parent="#accordion2">
                                    <div class="card-body">
                                        <p>Адрес, время прибытия, объем и вес товара, стоимость и т.д.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="heading4b">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse4b"
                                                aria-expanded="false" aria-controls="collapse4b">
                                            Комментарии с фотографиями
                                            <div class="ml-auto"><i class="svg-icon icon-down-arrow"></i></div>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse4b" class="collapse" aria-labelledby="heading4b" data-parent="#accordion2">
                                    <div class="card-body">
                                        <p>Отправка комментариев и фотографий диспетчеру в режиме онлайн.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="heading5b">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse5b"
                                                aria-expanded="false" aria-controls="collapse5b">
                                            Чат для связи с диспетчером
                                            <div class="ml-auto"><i class="svg-icon icon-down-arrow"></i></div>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse5b" class="collapse" aria-labelledby="heading5b" data-parent="#accordion2">
                                    <div class="card-body">
                                        <p>Возможность сообщить диспетчеру о возможных проблемах, связанных с выполнением заявки.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="card equipment"></div>

            </div>
        </div>



        {{-- Из чего состоит решение --}}
        <div class="block-9 py-3">
            <div class="container">
                <h2 class="text-center">Для кого это решение?</h2>
                <div class="row h-auto">
                    <div class="card">
                        <div class="card-img pic1"></div>
                        <div class="card-body">
                            <h5 class="pb-2">Диспетчер</h5>
                            Контролирует выполнение рейсов онлайн и оперативно реагирует на нештатные ситуации
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img pic2"></div>
                        <div class="card-body">
                            <h5 class="pb-2">Управляющий автопарком</h5>
                            Сокращает пробег, время простоя, расходы на топливо и ликвидирует левые рейсы
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img pic3"></div>
                        <div class="card-body">
                            <h5 class="pb-2">Владелец автопарка</h5>
                            Принимает решения на основании объективных данных в отчетах
                        </div>
                    </div>
                </div>
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