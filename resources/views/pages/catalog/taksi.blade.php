@extends('layouts.base')


@section('meta_name_robots')
    <meta name="robots" content="index, follow"/>
@endsection


@section('to_header')
    <link href="{{ asset('css/taksi.css') }}" rel="stylesheet">

    <link href="{{ asset('css/sec_main_slide.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sec_advantages.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/sec_calculator.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/sec_portfolio.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/sec_clients.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/sec_reviews.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/sec_steps.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/sec_commerce.css') }}" rel="stylesheet">

@endsection


@section('to_footer')
    <script src="{{ asset('js/sec_calculator.js') }}"></script>

    <script>
        {{-- Меняем картинки в блоке / Инфа о кол-ве клиентов --}}
        $('#sec_clients .img1').attr('src', '/img/pages/taksi/client_013.png');
        $('#sec_clients .img4').attr('src', '/img/pages/taksi/client_015.png');
        $('#sec_clients .img6').attr('src', '/img/pages/taksi/client_022.png');
    </script>
@endsection



@section('content')
    <div class="page-taksi">

        {{-- главный слайдер + форма захвата --}}
        @include('pages.inc.sec_main_slide', [ 'img_slide'=>'slider-taxi.jpg',
            'text_slide'=>["Контроль местоположения транспорта в режиме реального времени",
                "Определение мест заправок и сливов топлива, а также следить за средним расходом бензина."] ])


        {{-- Блок данных --}}
        <div class="block-5 py-3 mt-5">
            <div class="container">
                <p>Для каждого владельца таксомоторного парка очень важен тщательный контроль деятельности водителей. Ведь
                    нередко сотрудники плохо выполняют свои обязанности и используют автотранспорт не по назначению. Здесь
                    сможет помочь установка системы спутникового слежения на базе Глонасс/GPS.</p>
                <h2>Возможности GPS трекера для такси</h2>
                <p>Основная функция любой системы мониторинга - это отслеживание местоположения машины онлайн (в режиме
                    реального времени). Для этого устройство снабжается Глонасс/GPS трекером. Такое оборудование ориентируется
                    на спутники, что позволяет определять время и точные координаты автомобиля. Полученные данные сохраняются в памяти прибора.</p>
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
                <p>В зависимости от вида транспорта (устройство может монтироваться не только на такси, но также на спецтехнику,
                    автобусы, коммерческий транспорт, грузовики и даже воздушную технику), прибор снабжается дополнительными датчиками.
                    Они могут следить за уровнем топлива в баке и его расходом, показаниями тахографа, работой двигателя и определять
                    наличие пассажиров в салоне.</p>
                <p>Собранная информация через короткие промежутки времени поступает на единый сервер, откуда их и получает владелец ТС.
                    С помощью личного кабинет это позволяет отслеживать маршруты передвижения машин по навигатору, а также узнавать
                    подробные данные о работе техники. Некоторая информация также может быть отправлена в виде уведомления в мобильном
                    приложении или по электронной почте.</p>
            </div>
        </div>


        {{-- Блок данных --}}
        <div class="block-2">
            <div class="row h-auto">
                <div class="card equipment"></div>

                <div class="card bodytext">
                    <div class="card-body">
                        <h2>Установка систем мониторинга на такси</h2>
                        <p>Чтобы оборудование для слежения работало корректно, требуется правильно выполнить его монтаж.
                            Сделать это способна компания Ростелематика.</p>
                        <p>Мы находимся в Ставрополе и действуем по всей территории Ставропольского края. У нас работают
                            грамотные специалисты, готовые выполнить монтаж оборудования на любые виды транспортных средств.
                            При этом цена установки у нас ниже, чем во многих других компаниях из России.</p>
                        <p>Владельцу автопарка достаточно заключить официальный договор и оплатить услуги. Наши сотрудники
                            сами разработают схему расположения датчиков и, после согласования ее с клиентом, выедут на место
                            для проведения монтажа. При необходимости, они также могут обучить владельца использованию приборов
                            (чтобы полностью изучить функционал систем достаточно 30 минут). Наша компания предоставляет техподдержку
                            всего установленного оборудования.</p>
                    </div>
                </div>
            </div>
        </div>


        {{-- Из чего состоит решение --}}
        <div class="block-4 py-5">
            <div class="container">
                <div class="row h-auto">
                    <div class="card bodytext">
                        <h3>Из чего состоит решение для такси?</h3>
                        <p>Приборы, установленные компанией Ростелематика, используют для работы стандарт связи GSM. Поэтому
                            они работают везде в зоне покрытия операторов связи. Обмануть GPS трекер для такси невозможно -
                            владелец сразу же узнает о попытки мошенничества (для дополнительной защиты приборы пломбируются).</p>
                    </div>

                    <div class="card block-box">
                        <div class="row h-auto">
                            <div class="card element">
                                <div class="card-img">
                                    <img src="/img/pages/taksi/solution_1.png" alt="">
                                </div>
                                <div class="card-body">
                                    GPS/ГЛОНАСС трекер
                                </div>
                            </div>

                            <div class="card element">
                                <div class="card-img">
                                    <img src="/img/pages/taksi/solution_10.png" alt="">
                                </div>
                                <div class="card-body">
                                    Датчик пассажира
                                </div>
                            </div>

                            <div class="card element">
                                <div class="card-img">
                                    <img src="/img/pages/taksi/solution_12.png" alt="">
                                </div>
                                <div class="card-body">
                                    Датчик блокировки двигателя
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>


        {{-- Сферы применения --}}
        <div class="block-5 pb-3">
            <div class="container">
                <p>Чтобы заказать установку GPS для такси, необходимо оставить заявку на сайте. После этого наши сотрудники
                    свяжутся с Вами для обсуждения деталей проекта.</p>
                <h2>Выгоды от внедрения GPS мониторинга</h2>
                <p>На обслуживание автомобилей владельцы таксомоторных компаний ежегодно тратят огромные суммы. Но большинство
                    из них даже не представляет, насколько эти расходы зависят от честности самих водителей. Ведь недобросовестные
                    сотрудники могут сливать топливо, использовать машины для своих нужд, а также по своему усмотрению использовать
                    заправочные карты. В результате затраты на покупку бензина, а также техническое обслуживание транспорта возрастают
                    в несколько раз. И владелец таксопарка недосчитывается сотен тысяч рублей каждый год.</p>
                <p>Мониторинг такси позволяет:</p>
                <ul>
                    <li><i class="svg-icon icon-tick"></i>В реальном времени узнавать местоположение машин, а также составлять
                        подробные маршруты их передвижения;</li>
                    <li><i class="svg-icon icon-tick"></i>Определять места заправок и сливов топлива, а также следить за средним расходом бензина;</li>
                    <li><i class="svg-icon icon-tick"></i>Узнавать, когда таксист использует машину для личных целей;</li>
                    <li><i class="svg-icon icon-tick"></i>Получать данные о превышениях скорости и других нарушениях ПДД.</li>
                    <li><i class="svg-icon icon-tick"></i>Удаленная блокировка двигателя (через СМС)</li>
                </ul>
                <p>Кроме того, оборудование позволяет повысить безопасность такси. Например, если автомобиль попадет в ДТП, система
                    сама отправит сигнал экстренным службам. А при угоне машины ее легко можно будет отследить по установленному маяку.</p>
                <p>В зависимости от условий использования, после установки трекеров экономия может составить до 50%. Компания Ростелематика
                    может гарантировать, что минимальная выгода от монтажа наших систем составляет 5%. Поэтому оборудование окупается
                    уже после нескольких месяцев эксплуатации.</p>
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