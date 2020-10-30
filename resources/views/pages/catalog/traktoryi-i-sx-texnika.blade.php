@extends('layouts.base')


@section('meta_name_robots')
    <meta name="robots" content="index, follow"/>
@endsection


@section('to_header')
    <link href="{{ asset('/css/traktoryi-i-sx-texnika.css') }}" rel="stylesheet">

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
        $('#sec_clients .img1').attr('src', '/img/pages/traktoryi-i-sx-texnika/client_016.png');
        $('#sec_clients .img2').attr('src', '/img/pages/traktoryi-i-sx-texnika/client_017.png');
    </script>
@endsection



@section('content')
    <div class="page-traktoryi-i-sx-texnika">

        {{-- главный слайдер + форма захвата --}}
        @include('pages.inc.sec_main_slide', [ 'img_slide'=>'slider-sh.jpg',
            'text_slide'=>["Контроль местоположения транспорта в режиме реального времени",
                "Контроль соблюдение сроков выполнения работ"] ])


        {{-- Блок данных --}}
        <div class="block-5 py-3 mt-5">
            <div class="container">
                <p>Сельское хозяйство является одной из старейших и наиболее развитых отраслей в нашей стране. Однако постоянный
                    рост цен на удобрения, топливо и комплектующие для техники ведет к снижению доходов фермерского хозяйства,
                    что может серьезно отразиться на его работе. В этом случае есть только одно решение – установить спутниковую
                    систему, выполняющую мониторинг сельхозтехники.</p>
                <h2>Возможности системы спутникового контроля сельхозтехники</h2>
                <p>Современные фермеры сталкиваются с множеством проблем, связанных с использованием сельскохозяйственных
                    машин. Это, в частности:</p>
                <ul>
                    <li><i class="svg-icon icon-tick"></i>Нецелевое использование техники;</li>
                    <li><i class="svg-icon icon-tick"></i>Сливы топлива;</li>
                    <li><i class="svg-icon icon-tick"></i>Длительные простои;</li>
                    <li><i class="svg-icon icon-tick"></i>Превышение технологической скорости;</li>
                    <li><i class="svg-icon icon-tick"></i>Несоблюдение сроков выполнения работ.</li>
                    <li><i class="svg-icon icon-tick"></i>Приписывание работ</li>
                </ul>

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
                <p>Мониторинг комбайнов и трактаров позволяют свести эти проблемы к минимуму. Ведь владелец фермерского
                    хозяйства сможет в режиме реального времени узнавать место расположения машин, уровень топлива в баке
                    и его расход, скорость движения и т.д. Собранные данные хранятся на серверах и доступны для просмотра в течение года.</p>
                <h2>Принцип действия GPS-слежения</h2>
                <p>Устройства для GPS-отслеживания уже давно применяются в сфере автотранспорта. Основным элементом здесь
                    является трекер, который определяет точное время и положение машины (для этого он ориентируется на
                    искусственные спутники Земли). Датчики также собирают информацию о работе техники, после чего она сохраняется
                    на внутренней памяти устройства.</p>
            </div>
        </div>


        {{-- Блок данных --}}
        <div class="block-2">
            <div class="row h-auto">
                <div class="card equipment"></div>

                <div class="card bodytext">
                    <div class="card-body">
                        <p>Все эти данные отправляются на сервер с использованием стандарта GSM. Этот стандарт используется
                            для работы операторов сотовой связи, поэтому проблем с отправкой информации обычно не возникает
                            (если же техника окажется вне зоны покрытия, данные будут посланы сразу после того, как появится сигнал).</p>
                        <p>Владелец сельскохозяйственных машин может следить за показаниями приборов, положении и маршрутах
                            передвижения техники онлайн через личный кабинет на нашем сайте. При необходимости, можно также
                            посмотреть аналитику за определенный промежуток времени (данные хранятся в течение года). Помимо
                            этого, владелец может получать текстовые уведомления на телефон или электронную почту.</p>
                        <p>Системы GPS/Глонасс контроля – это удобный инструмент, способный упростить работу фермера. Такое
                            оборудование позволяет снизить затраты и приводит к существенному росту прибыли.</p>
                    </div>
                </div>
            </div>
        </div>


        {{-- Из чего состоит решение --}}
        <div class="block-4 py-5">
            <div class="container">
                <div class="row h-auto">
                    <div class="card bodytext">
                        <h3>Из чего состоит комплекс</h3>
                        <p>Система может быть адаптирована под вид техники (приборы устанавливаются не только на различные
                            виды с/х машин, но и на такси, коммерческий транспорт, спецтехнику, грузовые автомобили и т.д.) и
                            нужды ее владельца. Стандартный же набор включает:</p>
                    </div>

                    <div class="card block-box">
                        <div class="row h-auto">
                            <div class="card element">
                                <div class="card-img">
                                    <img src="/img/pages/traktoryi-i-sx-texnika/solution_1.png" alt="">
                                </div>
                                <div class="card-body">
                                    GPS/ГЛОНАСС трекер
                                </div>
                            </div>

                            <div class="card element">
                                <div class="card-img">
                                    <img src="/img/pages/traktoryi-i-sx-texnika/solution_2.png" alt="">
                                </div>
                                <div class="card-body">
                                    Датчик уровня топлива
                                </div>
                            </div>

                            <div class="card element">
                                <div class="card-img">
                                    <img src="/img/pages/traktoryi-i-sx-texnika/solution_3.png" alt="">
                                </div>
                                <div class="card-body">
                                    Датчик зажигания
                                </div>
                            </div>

                            <div class="card element">
                                <div class="card-img">
                                    <img src="/img/pages/traktoryi-i-sx-texnika/solution_7.png" alt="">
                                </div>
                                <div class="card-body">
                                    Датчик выгрузки
                                </div>
                            </div>

                            <div class="card element">
                                <div class="card-img">
                                    <img src="/img/pages/traktoryi-i-sx-texnika/solution_8.png" alt="">
                                </div>
                                <div class="card-body">
                                    Датчик уровня бункера
                                </div>
                            </div>

                            <div class="card element">
                                <div class="card-img">
                                    <img src="/img/pages/traktoryi-i-sx-texnika/solution_9.png" alt="">
                                </div>
                                <div class="card-body">
                                    RFID считыватель
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
                <p>Дополнительно можно установить кнопку тревоги и комплект, обеспечивающий связь с водителем. Все соединения
                    пломбируются, чтобы предотвратить попытки обмануть прибор со стороны водителей.</p>
                <h2>Преимущества GPS-мониторинга сельхозтехники</h2>
                <p>Контроль сельхозтехники Глонасс имеет сразу несколько преимуществ. Они позволяют:</p>
                <ul class="list-ok">
                    <li><i class="svg-icon icon-tick"></i>Предотвратить хищение топлива трактористами;</li>
                    <li><i class="svg-icon icon-tick"></i>Избежать простоев оборудования;</li>
                    <li><i class="svg-icon icon-tick"></i>Не допустить нецелевого использования техники;</li>
                    <li><i class="svg-icon icon-tick"></i>Предотвратить превышения технологической скорости;</li>
                    <li><i class="svg-icon icon-tick"></i>Обеспечить соблюдение сроков проведения работ.</li>
                </ul>
                <p>В результате существенно снижаются расходы на техническое обслуживание машин (иногда до 30%). В некоторых
                    случаях оборудование также позволяет в 2 раз сократить затраты на покупку топлива.</p>
                <p>Спутниковый контроль сельхозтехники подходит для любых видов машин. Они могут быть установлены на комбайны,
                    трактора и грузовики. Однако для корректной работы требуется правильно выполнить монтаж оборудования.</p>
                <p>В Ставрополе и Ставропольском крае монтаж Глонасс и GPS оборудования может выполнить компания Ростелематика.
                    У нас работают специалисты с огромным опытом, готовые в короткие сроки провести установку системы.</p>
                <p>Фермеру достаточно оставить заявку на сайте, и наши сотрудники свяжутся с ним по телефону для обсуждения деталей.
                    Далее нужно будет заключить договор и оплатить услуги компании. В течение трех дней после этого наши специалисты
                    сами выедут на место для проведения монтажа. Также они могут обучить владельца правильной эксплуатации системы.</p>
                <p>На все оборудование компания Ростелематика предоставляет пожизненную гарантию. Также мы осуществляем техподдержку
                    устройств. Поэтому владелец может быть уверен в их исправной работе. При этом цены у нас ниже, чем в большинстве
                    компаний-конкурентов.</p>
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
