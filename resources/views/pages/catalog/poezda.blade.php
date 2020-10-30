@extends('layouts.base')


@section('meta_name_robots')
    <meta name="robots" content="index, follow"/>
@endsection


@section('to_header')
    <link href="{{ asset('/css/poezda.css') }}" rel="stylesheet">

    <link href="{{ asset('/css/sec_main_slide.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_advantages.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_calculator.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_portfolio.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_clients.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_reviews.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_steps.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_commerce.css') }}" rel="stylesheet">

@endsection


@section('to_footer')
    <script src="{{ asset('/js/sec_calculator.js') }}"></script>

    <script>
        {{-- Меняем картинки в блоке / Инфа о кол-ве клиентов --}}
        $('#sec_clients .img2').attr('src', '/img/pages/poezda/client_015.png');
        $('#sec_clients .img4').attr('src', '/img/pages/poezda/client_022.png');
    </script>
@endsection



@section('content')
    <div class="page-poezda">

        {{-- главный слайдер + форма захвата --}}
        @include('pages.inc.sec_main_slide', [ 'img_slide'=>'slider-poesda.jpg',
            'text_slide'=>["Контроль местоположения транспорта в режиме реального времени",
                "Повышение безопасности и надежности грузоперевозок"] ])


        {{-- Блок данных --}}
        <div class="block-5 py-3 mt-5">
            <div class="container">
                <p>Железнодорожная индустрия в современном мире претерпевает ряд модификаций, изменений, которые направлены на
                    существенное увеличение комфорта перевозок – как грузовых, так и пассажирских.</p>
                <p>И чтобы самым лучшим образом повысить уровень безопасности, обладать возможностью отслеживания и получить
                    выгоду с этого, Вам потребуется установить специальную систему мониторинга.</p>
                <p>Профессиональная система, установка которой будет производиться специалистами нашей организации, которая
                    уже успела произвести огромное количество подобных операций.</p>
            </div>
        </div>


        {{-- Преимущества в цифрах --}}
        <div class="block-3 pb-5">
            <div class="container">
                <h2 class="text-center text-center pt-5 pb-3 m-0">Преимущества в цифрах</h2>

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


        {{-- Блок данных --}}
        <div class="block-5 py-3 my-4">
            <div class="container">
                <p>В ее комплекс входит такое оборудование, как:</p>
                <ul>
                    <li><i class="svg-icon icon-tick"></i>Разнообразные датчики.</li>
                    <li><i class="svg-icon icon-tick"></i>ГЛОНАСС/GPS.</li>
                    <li><i class="svg-icon icon-tick"></i>Пломбы.</li>
                    <li><i class="svg-icon icon-tick"></i>Система видеонаблюдения.</li>
                </ul>
                <p>Все это оборудование, работая в совокупности существенно повышает безопасность и препятствует противоправным
                    действиям, как итог – заказчик с легкостью может отслеживать груз и осуществлять другие операции.</p>
            </div>
        </div>


        {{-- Блок данных --}}
        <div class="block-2">
            <div class="row h-auto">
                <div class="card equipment"></div>

                <div class="card bodytext">
                    <div class="card-body">
                        <h2>Почему Вам стоит выбрать именно наше предложение?</h2>
                        <p>На это есть несколько причин:</p>
                        <p><strong>Во-первых, мы предлагаем Вам выгодные тарифы.</strong></p>
                        <p>За 8500 рублей Вы получите установку системы ГЛОНАСС, за 23800 – еще большее количество элементов.</p>
                        <p><strong>Во-вторых, мы установим максимально быстро.</strong></p>
                        <p>После оформления заявки и достижения договоренности с Вами, в течение 3 дней наши специалисты выедут к Вам
                            и осуществят качественный монтаж</p>
                        <p><strong>В-третьих, мы предлагаем удобный способ оплаты.</strong></p>
                        <p>По безналичному расчету.</p>
                        <p>Хотите воспользоваться нашим предложением прямо сейчас?</p>
                        <p>Тогда оставьте заявку, дождитесь звонка нашего специалиста, оговорите условия, оплатите, и тогда наши
                            мастера в течение 3 дней произведут качественную установку.</p>
                    </div>
                </div>
            </div>
        </div>


        {{-- Из чего состоит решение --}}
        <div class="block-4 py-5">
            <div class="container">
                <div class="row h-auto">
                    <div class="card bodytext">
                        <h3>Из чего состоит решение для поезда?</h3>
                    </div>

                    <div class="card block-box">
                        <div class="row h-auto">
                            <div class="card element">
                                <div class="card-img">
                                    <img src="/img/pages/poezda/solution_1.png" alt="">
                                </div>
                                <div class="card-body">
                                    GPS/ГЛОНАСС трекер
                                </div>
                            </div>

                            <div class="card element">
                                <div class="card-img">
                                    <img src="/img/pages/poezda/solution_2.png" alt="">
                                </div>
                                <div class="card-body">
                                    Датчик уровня топлива
                                </div>
                            </div>

                            <div class="card element">
                                <div class="card-img">
                                    <img src="/img/pages/poezda/solution_3.png" alt="">
                                </div>
                                <div class="card-body">
                                    Датчик зажигания
                                </div>
                            </div>

                            <div class="card element">
                                <div class="card-img">
                                    <img src="/img/pages/poezda/solution_4.png" alt="">
                                </div>
                                <div class="card-body">
                                    Датчик нагрузки на ось
                                </div>
                            </div>

                            <div class="card element">
                                <div class="card-img">
                                    <img src="/img/pages/poezda/solution_5.png" alt="">
                                </div>
                                <div class="card-body">
                                    Электронная пломба
                                </div>
                            </div>

                            <div class="card element">
                                <div class="card-img">
                                    <img src="/img/pages/poezda/solution_6.png" alt="">
                                </div>
                                <div class="card-body">
                                    Видеонаблюдение
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>



        {{-- Инфо-блок - Спутниковая система Глонасс --}}
        @include('pages.inc.sec_advantages')

        {{-- Калькулятор -------------------------------------------------------------------}}
        @include('pages.inc.sec_calculator')

        {{-- Примеры внедрения и отзывы --}}
        @include('pages.inc.sec_portfolio')

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