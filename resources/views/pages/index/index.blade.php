@extends('layouts.base')



@section('meta_name_robots')
    <meta name="robots" content="index, follow"/>
@endsection



@section('to_header')
    {{-- Базовые стили текущей страницы --}}
    <link href="{{ asset('/css/index.css') }}" rel="stylesheet">

    {{-- Подключаем стили секций/блоков, которые используются на данной странице --}}
    <link href="{{ asset('/css/sec_main_slide.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_portfolio.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_clients.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_steps.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_commerce.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_services.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_advantages.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_calculator.css') }}" rel="stylesheet">

@endsection



@section('to_footer')
    <script src="{{ asset('/js/sec_calculator.js') }}"></script>
@endsection



@section('content')
    {{-- Подключаем только те модальные окна,
    которые будут использоваться на данной странице --}}
    @include('modals.compred')

    <div class="page-index">

        {{-- главный слайдер + форма захвата --}}
        @include('pages.inc.sec_main_slide', [ 'img_slide'=>'home-slider-1.jpg',
            'text_slide'=>["Вы оставляете заявку",
                "Мы бесплатно устанавливаем систему мониторинга на 1 ТС",
                "Обучаем и консультируем по всем вопросам",
                "Вы видите результат экономии, благодаря нашей системе"] ])


        {{-- Инфо-блок - Спутниковая система Глонасс --}}
        @include('pages.inc.sec_advantages')

        {{-- Стоимость установки ГЛОНАСС. Готовые решения --}}
        @include('pages.inc.sec_services')

        {{-- Калькулятор -------------------------------------------------------------------}}
        @include('pages.inc.sec_calculator')


        {{-- Сокращение расходов и гибкая логистика --}}
        <div class="block-3 pb-5">
            <div class="container">
                <h2 class="text-center text-center pt-5 pb-3 m-0">Сокращение расходов и гибкая логистика</h2>

                <div class="row w-100">

                    <div class="card">
                        <div class="card-body">
                            <div class="b3-head">99,9%</div>
                            <p>Обнаружение сливов</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="b3-head">до 25%</div>
                            <p>Снижение расходов на топливо</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="b3-head">до 19%</div>
                            <p>Снижение расходов на обслуживание</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="b3-head">до 40%</div>
                            <p>Снижение пробега</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        {{-- Как работает система -------------------------------------------------------------------}}
        <div class="row h-auto">
            <div class="container px-5">
                <h2 class="text-center">Как работает система</h2>
                <p>Это глобальная система, которая использует не только наземные, но и космические станции позиционирования.
                    При ее работе трекер определяет точные координаты авто, основываясь на положении спутников. Полученные
                    данные применяются для расчета скорости, маршрута движения и т.д. (при монтаже соответствующих датчиков,
                    трекер также может собирать информацию о расходе топлива и работе агрегатов).</p>
                <p>Информация передается на серверы с помощью стандарта GSM (именно он является основным стандартом сотовой
                    связи, поэтому устройство способно работать по всей зоне покрытия операторов). Уже отсюда данные выводятся
                    пользователю онлайн. Удобнее всего для этого использовать специальное программное обеспечение на компьютере.
                    Однако, при необходимости, сделать запрос можно и посредством СМС-сообщения.</p>
            </div>
        </div>


        {{-- 4-блок -------------------------------------------------------------------}}
        <div class="block-4 pb-5">
            <div class="container">
                <h2 class="text-center">Часто задаваемые вопросы</h2>

                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                                <button class="btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Как купить систему ГЛОНАСС?
                                    <div class="ml-auto"><i class="svg-icon icon-down-arrow"></i></div>
                                </button>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <p>Чтобы приобрести устройство контроля и отслеживания автомобилей, достаточно оставить заявку
                                удобным для вас способом. Наши сотрудники свяжутся с Вами для уточнения деталей покупки. После
                                заключения договора и оплаты достаточно дождаться выезда монтажника на объект. Специалист проведет
                                установку всех элементов и обучение персонала. Далее наша компания будет оказывать полное информационное
                                и техническое сопровождение продукта.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Где лучше установить ГЛОНАСС на автомобиль?
                                    <div class="ml-auto"><i class="svg-icon icon-down-arrow"></i></div>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <p><span style="text-transform: capitalize">{{$domain->postfix3}}</span> установку комплекса для контроллинга
                                    автотранспорта выполняет компания Ростелематика. Мы предоставляем пожизненную гарантию на оборудование и
                                    предлагаем техническую поддержку {{$domain->work}}.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Как работает ГЛОНАСС в автомобиле?
                                    <div class="ml-auto"><i class="svg-icon icon-down-arrow"></i></div>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <p>Основное назначение систем мониторинга транспорта - определение местоположения ТС (погрешность
                                    измерений не превышает 3-4 м и с каждым годом только сокращается). Для этого на автомобиль
                                    устанавливается трекер, который, собирая данные со спутника, передает их на серверы. Пользователь
                                    может получать информацию на ПО (например, через платформу Wialon) или на мобильный в виде СМС.</p>
                                <p>Существенно расширить функциональность системы позволяет установка дополнительного оборудования.
                                    С его помощью пользователь может получать информацию об уровне топлива, показаниях тахографа и т.д.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    На какие автомобили устанавливается система мониторинга?
                                    <div class="ml-auto"><i class="svg-icon icon-down-arrow"></i></div>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">
                                <p>Оборудование для мониторинга может устанавливаться на любые виды транспортных средств. В частности, это может быть:</p>
                                <ul>
                                    <li>
                                        <i class="svg-icon icon-tick"></i>
                                        Спецтехника;
                                    </li>
                                    <li>
                                        <i class="svg-icon icon-tick"></i>
                                        Грузовые ТС;
                                    </li>
                                    <li>
                                        <i class="svg-icon icon-tick"></i>
                                        Легковые автомобили;
                                    </li>
                                    <li>
                                        <i class="svg-icon icon-tick"></i>
                                        Пассажирский;
                                    </li>
                                    <li>
                                        <i class="svg-icon icon-tick"></i>
                                        Сельскохозяйственное оборудование;
                                    </li>
                                    <li>
                                        <i class="svg-icon icon-tick"></i>
                                        Такси.
                                    </li>
                                </ul>
                                <p>Кроме того, оборудование можно устанавливать на многие виды водного и воздушного транспорта.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        {{-- Примеры внедрения и отзывы --}}
        @include('pages.inc.sec_portfolio')

        {{-- Инфа о кол-ве клиентов --}}
        @include('pages.inc.sec_clients')

        {{-- Этапы работ --}}
        @include('pages.inc.sec_steps')

        {{-- Форма захвата - Получить коммерческое предложение --}}
        @include('pages.inc.sec_commerce')


    </div>
@endsection