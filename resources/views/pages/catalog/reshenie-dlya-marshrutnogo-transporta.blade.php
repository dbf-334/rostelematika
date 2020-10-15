@extends('layouts.base')


@section('meta_name_robots')
    <meta name="robots" content="index, follow"/>
@endsection


@section('to_header')
    <link href="{{ asset('css/reshenie-dlya-marshrutnogo-transporta.css') }}" rel="stylesheet">

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
        $('#sec_clients .img1').attr('src', '/img/pages/reshenie-dlya-marshrutnogo-transporta/client_015.png');
        $('#sec_clients .img3').attr('src', '/img/pages/reshenie-dlya-marshrutnogo-transporta/client_017.png');
        $('#sec_clients .img6').attr('src', '/img/pages/reshenie-dlya-marshrutnogo-transporta/client_022.png');
    </script>
@endsection



@section('content')
    <div class="page-reshenie-dlya-marshrutnogo-transporta">

        {{-- главный слайдер + форма захвата --}}
        @include('pages.inc.sec_main_slide', [ 'img_slide'=>'slider-marshrutki.jpg',
            'text_slide'=>["создание остановок, оптимизация маршрутов, распределение ТС по рейсам, контроль следования по
            расписанию, детальная отчетность, гибкая система прав доступа"] ])

        
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
                            Добавьте или импортируйте остановки
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img circle-container">
                            <div class="circlestat" data-dimension="70" data-text="02" data-width="4" data-fontsize="28"
                                 data-percent="45" data-fgcolor="#01aef2" data-bgcolor="#ddd" data-fill="#fff"></div>
                        </div>
                        <div class="card-body">
                            Создайте маршрут, задайте расписания и назначьте объекты
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img circle-container">
                            <div class="circlestat" data-dimension="70" data-text="03" data-width="4" data-fontsize="28"
                                 data-percent="60" data-fgcolor="#01aef2" data-bgcolor="#ddd" data-fill="#fff"></div>
                        </div>
                        <div class="card-body">
                            Планируйте рейсы
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img circle-container">
                            <div class="circlestat" data-dimension="70" data-text="04" data-width="4" data-fontsize="28"
                                 data-percent="93" data-fgcolor="#01aef2" data-bgcolor="#ddd" data-fill="#fff"></div>
                        </div>
                        <div class="card-body">
                            Отслеживайте передвижения в реальном времени
                        </div>
                    </div>

                </div>
                <div class="font-weight-bold text-center pb-4">Получайте детальную отчетность!</div>
            </div>
        </div>




        {{-- Блок данных --}}
        <div class="block-2 pb-5">
            <h2 class="text-center">Функциональные возможности</h2>

            <div class="row h-auto">
                <div class="card equipment"></div>

                <div class="card bodytext">
                    <div class="card-body">

                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="heading1">
                                    <button class="btn" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        Остановки
                                        <div class="ml-auto"><i class="svg-icon icon-down-arrow"></i></div>
                                    </button>
                                </div>

                                <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Создание или импорт остановок с разделением по видам транспорта, поиском и подробным описанием.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="heading2">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse2"
                                                aria-expanded="false" aria-controls="collapse2">
                                            Маршруты
                                            <div class="ml-auto"><i class="svg-icon icon-down-arrow"></i></div>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Создайте маршрут, задайте расписания и назначьте объекты</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="heading3">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse3"
                                                aria-expanded="false" aria-controls="collapse3">
                                            Рейсы
                                            <div class="ml-auto"><i class="svg-icon icon-down-arrow"></i></div>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Планируйте рейсы</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="heading4">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse4"
                                                aria-expanded="false" aria-controls="collapse4">
                                            Слежение
                                            <div class="ml-auto"><i class="svg-icon icon-down-arrow"></i></div>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Отслеживайте передвижения в реальном времени</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="block-8 pt-3 pb-5">
            <div class="container">
                <h2 class="font-weight-normal text-center">Для чего это решение?</h2>
                <p>Помогает организовать работу автопарка пассажирского транспорта:</p>
                
                <div class="row h-auto">
                    <div class="card text_box">

                        <div class="card">
                            <div class="card-img">
                                <img src="/img/pages/reshenie-dlya-marshrutnogo-transporta/pic1.png" alt="">
                            </div>
                            <div class="card-body">
                                <h5 class="mt-0">Остановки</h5>
                                Создавайте новые остановки или импортируйте из сторонних систем
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-img">
                                <img src="/img/pages/reshenie-dlya-marshrutnogo-transporta/pic2.png" alt="">
                            </div>
                            <div class="card-body">
                                <h5 class="mt-0">Маршруты</h5>
                                Планируйте маршруты из последовательности остановок, задавайте расписания и назначайте объекты
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-img">
                                <img src="/img/pages/reshenie-dlya-marshrutnogo-transporta/pic3.png" alt="">
                            </div>
                            <div class="card-body">
                                <h5 class="mt-0">Рейсы</h5>
                                Автоматически создавайте рейсы на основе расписаний и схем действия активных маршрутов
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-img">
                                <img src="/img/pages/reshenie-dlya-marshrutnogo-transporta/pic4.png" alt="">
                            </div>
                            <div class="card-body">
                                <h5 class="mt-0">Слежение</h5>
                                Контролируйте выполнение рейса в реальном времени, отслеживайте опоздания, опережения,
                                отклонения от маршрута
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-img">
                                <img src="/img/pages/reshenie-dlya-marshrutnogo-transporta/pic5.png" alt="">
                            </div>
                            <div class="card-body">
                                <h5 class="mt-0">Отчеты</h5>
                                Получайте доступ к истории прохождения рейсов, оценивайте качество их выполнения в разрезе
                                объектов и маршрутов
                            </div>
                        </div>

                    </div>

                    <div class="card equipment">
                        <div class="card-img"></div>
                    </div>


                </div>
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


        {{-- Из чего состоит решение --}}
        <div class="block-10 py-3">
            <div class="container">
                <h2 class="text-center">Как наше решение меняет бизнес? </h2>
                <div class="row h-auto">
                    <div class="card">
                        <div class="card-img">
                            <div class="img">
                                <img src="/img/pages/reshenie-dlya-marshrutnogo-transporta/topseo1.jpg" alt="">
                            </div>
                            <div class="text">Держит вас в курсе</div>
                        </div>
                        <div class="card-body">
                            Уведомления рассказывают о ходе выполнения рейсов и привлекут внимание диспетчера к ситуациям, требующим реагирования
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img">
                            <div class="img">
                                <img src="/img/pages/reshenie-dlya-marshrutnogo-transporta/topseo2.jpg" alt="">
                            </div>
                            <div class="text">Становится платформой для разработки</div>
                        </div>
                        <div class="card-body">
                            Открытый API помогает создать уникальные решения в сфере пассажирских перевозок
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img">
                            <div class="img">
                                <img src="/img/pages/reshenie-dlya-marshrutnogo-transporta/topseo3.jpg" alt="">
                            </div>
                            <div class="text">Информирует пассажиров</div>
                        </div>
                        <div class="card-body">
                            Инструмент «Локатор» используется, чтобы делиться местоположением и передвижениями транспорта с пассажирами
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img">
                            <div class="img">
                                <img src="/img/pages/reshenie-dlya-marshrutnogo-transporta/topseo4.jpg" alt="">
                            </div>
                            <div class="text">Сохраняет историю</div>
                        </div>
                        <div class="card-body">
                            Данные по рейсам для отчетности доступны в течение 100 дней
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