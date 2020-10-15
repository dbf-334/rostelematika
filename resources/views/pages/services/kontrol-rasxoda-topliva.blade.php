@extends('layouts.base')


@section('meta_name_robots')
    <meta name="robots" content="index, follow"/>
@endsection


@section('to_header')
    <link href="{{ asset('css/kontrol-rasxoda-topliva.css') }}" rel="stylesheet">

    <link href="{{ asset('css/sec_main_slide.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sec_advantages.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/sec_calculator.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/sec_portfolio.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/sec_clients.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/sec_reviews.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/sec_steps.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/sec_commerce.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/sec_oborudovanie.css') }}" rel="stylesheet">
@endsection


@section('to_footer')
    <script src="{{ asset('js/sec_calculator.js') }}"></script>

    <script>
        {{-- Меняем картинки в блоке / Инфа о кол-ве клиентов --}}
        $('#sec_clients .img4').attr('src', '/img/pages/kontrol-rasxoda-topliva/client_013.png');
        $('#sec_clients .img2').attr('src', '/img/pages/kontrol-rasxoda-topliva/client_022.png');
        $('#sec_clients .img6').attr('src', '/img/pages/kontrol-rasxoda-topliva/client_018.png');
    </script>
@endsection



@section('content')
    {{-- Подключаем только те модальные окна,
    которые будут использоваться на данной странице --}}
    @include('modals.compred')

    <div class="page-kontrol-rasxoda-topliva">

        {{-- главный слайдер + форма захвата --}}
        @include('pages.inc.sec_main_slide', [ 'img_slide'=>'slider_fuel_control.jpg',
            'text_slide'=>["Полный контроль топлива, учет заправок и сливов",
                "Оптимизация работы автопарка и снижение потерь"] ])


        {{-- Блок данных --}}
        <div class="block-1">
            <div class="row h-auto">
                <div class="card laptop">

                </div>

                <div class="card bodytext">
                    <div class="card-body">
                        <p>Система контроля расхода топлива (или сокращенно СКРТ) - это комплекс оборудования, который позволяет
                            дистанционно наблюдать за изменением уровня горючего в топливном баке. Такие устройства могут устанавливаться
                            на любые виды транспорта, оборудованного двигателем внутреннего сгорания. Они эффективно применяются на
                            воздушной (в первую очередь на самолетах и вертолетах) и водной технике, а также различных типах сухопутного транспорта.</p>

                        <p>Большинство владельцев транспортных компаний сталкиваются со следующими проблемами:</p>

                        <ul>
                            <li><i class="svg-icon icon-tick"></i>Водители обналичивают заправочные карты и сливают бензин из бака;</li>
                            <li><i class="svg-icon icon-tick"></i>Наблюдается повышенный расход ГСМ;</li>
                            <li><i class="svg-icon icon-tick"></i>Сотрудники заправляются на нерекомендуемых АЗС, из-за чего могут
                                происходить поломки.</li>
                        </ul>

                        <p>Все это оказывает существенное влияние на работу организации. В некоторых случаях расходы на обслуживание
                            машин могут возрастать в несколько раз. Решить обозначенные проблемы позволяет мониторинг транспорта и
                            топлива с использованием систем GPS и Глонасс.</p>
                    </div>
                </div>

            </div>
        </div>

        {{-- Блок данных --}}
        <div class="block-2">
            <div class="row h-auto">

                <div class="card bodytext">
                    <div class="card-body">
                        <h2>Как это работает</h2>

                        <p>Большинство устройств, осуществляющих контроль топлива, работают в системе Глонасс или GPS. Для
                            вычисления времени и координат, по которым расположена машина, используется спутниковое оборудование.
                            Собранные данные (а также информация с датчиков) записывается на встроенную память, после чего они
                            отправляются на серверы. Для этого используется стандарт GSM. Это универсальный стандарт, который
                            применяется для работы современных телефонов. Поэтому данные будут отправляться из любой точки в
                            зоне покрытия операторов связи.</p>
                    </div>
                </div>

                <div class="card equipment"></div>

            </div>
        </div>

        {{-- Преимущества в цифрах --}}
        <div class="block-3 pb-5">
            <div class="container">
                <div class="my_hr1"></div>
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

        {{-- Из чего состоит решение --}}
        <div class="block-4 py-5">
            <div class="container">
                <div class="row h-auto">
                    <div class="card bodytext">
                        <h3>Из чего состоит система</h3>
                        <p>Владелец автомобиля может получать информацию несколькими способами. Основной и наиболее удобный
                            из них – это веб-сайт с приватным доступом. С их помощью можно наблюдать за перемещением машины,
                            определять маршруты, следить за расходом горючего и т.д. Часть информации можно получить через
                            текстовые сообщения, которые будут посылаться по СМС или на электронную почту. Таким образом,
                            для слежения за машинами даже не обязательно иметь выход в интернет.</p>
                    </div>

                    <div class="card element">
                        <div class="card-img">
                            <img src="/img/pages/kontrol-rasxoda-topliva/solution_2.png" alt="">
                        </div>
                        <div class="card-body">
                            Датчик уровня топлива
                            <p>Установить отдельный контроль топлива, который монтируется в бензобак</p>
                        </div>
                    </div>

                    <div class="card element">
                        <div class="card-img">
                            <img src="/img/pages/kontrol-rasxoda-topliva/solution_3.png" alt="">
                        </div>
                        <div class="card-body">
                            Датчик зажигания
                            <p class="mt-4">Внедрить устройство отключения или блокировки зажигания</p>
                        </div>
                    </div>

                    <div class="card element">
                        <div class="card-img">
                            <img src="/img/pages/kontrol-rasxoda-topliva/solution_12.png" alt="">
                        </div>
                        <div class="card-body">
                            Счетчик моточасов
                        </div>
                    </div>

                </div>
            </div>
        </div>


        {{-- Сферы применения --}}
        <div class="block-5 py-3">
            <div class="container p-3">
                <p>Владелец может не только следить за маршрутами передвижения и уровнем горючего, но и узнавать о количестве
                    моточасов, наличии в салоне пассажиров, времени работы дополнительного оборудования.</p>

                <p>Установка такого оборудования дает владельцу компании целый ряд преимуществ, которые, в конечном итоге,
                    позволяют увеличить прибыль организации. Вот лишь некоторые из них:</p>

                <ul>
                    <li><i class="svg-icon icon-tick"></i>
                        Системы позволяют в режиме реального времени получать данные о передвижении автомобилей, составлять
                        маршруты и узнавать о нарушениях скоростного режима.</li>
                    <li><i class="svg-icon icon-tick"></i>
                        Устройства дают возможность осуществлять подробный контроль топлива на транспорте (узнавать о среднем
                        расходе горючего, времени и месте заправок/сливов бензина и т.д.);</li>
                    <li><i class="svg-icon icon-tick"></i>
                        Наблюдать за работой дополнительного оборудования (в зависимости от установленных датчиков, владелец
                        может узнавать о температуре в рефрижераторе, количестве циклов работы кузова самосвала и т.д.).</li>
                </ul>

                <p>Устройства, обеспечивающие контроль расхода топлива, оснащены средствами защиты. Поэтому владелец сможет
                    узнать о любых махинациях и попытках обмануть систему со стороны своих сотрудников.</p>

                <h2>Установка датчиков уровня топлива</h2>

                <p>Для установки трекера на автотранспорт владельцы машин могут обращаться в компанию Ростелематика. Мы предлагаем
                    низкие цены и работаем в Ставрополе и по всей территории Ставропольского края.</p>

                <p>Наше оборудование позволяет эффективно контролировать километраж и самостоятельно проверять уровень бензина в баке.
                    Благодаря таким системам можно экономить от 5 до 50% без особых затрат на обслуживание устройств.</p>

                <p>Чтобы установить оборудование, требуется только оставить заявку по телефону или на сайте компании. В скором времени
                    с Вами свяжутся наши сотрудники для обсуждения деталей. После этого необходимо только заключить договор и произвести
                    оплату услуг. В течение нескольких дней на место выедут наши специалисты для выполнения монтажа. Далее владельцу
                    машины останется только проверить работу системы и пройти обучение.</p>

                <p>Компания Ростелематика осуществляет поддержку всего установленного оборудования. Поэтому любые возможные сбои и
                    нарушения в работе будут устранены в самые короткие сроки. Мы отвечаем за качество своих устройств, поэтому
                    можем предложить клиентам пожизненную гарантию.</p>
            </div>
        </div>

        {{-- Цены на покупку оборудования --}}
        <div class="block-6 pt-3 pb-5">
            <div class="container">
                <div class="row h-auto">
                    <div class="card pricebox">

                        <h3>Цены на покупку оборудования</h3>
                        <div class="row h-auto">
                            <div class="card">
                                <div class="price">9 190 Р</div>
                                <ul>
                                    <li><i class="svg-icon icon-tick"></i>Глонас GPS трекер</li>
                                    <li><i class="svg-icon icon-tick"></i>Датчик уровня топлива (штатный ТС)</li>
                                </ul>
                            </div>

                            <div class="card">
                                <div class="price">16 400 Р</div>
                                <ul>
                                    <li><i class="svg-icon icon-tick"></i>Глонас GPS трекер</li>
                                    <li><i class="svg-icon icon-tick"></i>Датчик уровня топлива</li>
                                </ul>
                            </div>

                            <div class="card">
                                <div class="price">24 230 Р</div>
                                <ul>
                                    <li><i class="svg-icon icon-tick"></i>Глонас GPS трекер</li>
                                    <li><i class="svg-icon icon-tick"></i>Датчик уровня топлива</li>
                                    <li><i class="svg-icon icon-tick"></i>Датчик моточасов</li>
                                    <li><i class="svg-icon icon-tick"></i>Датчик зажигания</li>
                                </ul>
                            </div>

                        </div>

                    </div>


                    <div class="card tarif">
                        <div class="card-header">
                            <div class="title">Тариф премиум</div>
                            <div class="price text-center">
                                <span class="sum">450 Р</span>
                                <span class="badge badge-pill">в месяц</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="font-weight-bold">В стоимость тарифного плана входит:</div>
                            <ul>
                                <li><i class="svg-icon icon-tick"></i>Оплата сим-карты.</li>
                                <li><i class="svg-icon icon-tick"></i>Техническая поддержка.</li>
                                <li><i class="svg-icon icon-tick"></i>Доступ к системе 24/7.</li>
                                <li><i class="svg-icon icon-tick"></i>Обучение сотрудников клиента.</li>
                                <li><i class="svg-icon icon-tick"></i>Создание разноранговых учетных записей (у клиента будет
                                    несколько кабинетов для разных уровней доступа к информации).</li>
                                <li><i class="svg-icon icon-tick"></i>Маршруты (перемещение ТС, остановки, стоянки, простои).</li>
                                <li><i class="svg-icon icon-tick"></i>Мобильное приложение.</li>
                                <li><i class="svg-icon icon-tick"></i>Геозоны.</li>
                                <li><i class="svg-icon icon-tick"></i>Мониторинг перемещения ТС в он-лайн режиме.</li>
                                <li><i class="svg-icon icon-tick"></i>Выгрузка информации по пробегу ТС за произвольный интервал времени.</li>
                                <li><i class="svg-icon icon-tick"></i>Отчеты - формаирование, отправка на почту в удобных форматах (pdf, exel).</li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <a class="catalog__btn btn btn_bg-red btn_border-red btn_italic btn_small"
                               data-theme="Тариф - Премиум"
                               data-toggle="modal"
                               data-target="#modal_compred">
                                Оформить сейчас
                            </a>

                        </div>
                    </div>


                    <div class="card tarif">
                        <div class="card-header">
                            <div class="title bg-danger">Тариф VIP</div>
                            <div class="price text-center">
                                <span class="sum text-danger">550 Р</span>
                                <span class="badge badge-pill bg-danger">в месяц</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="font-weight-bold">В стоимость тарифного плана входит:</div>
                            <ul>
                                <li><i class="svg-icon icon-tick"></i>Оплата сим-карты.</li>
                                <li><i class="svg-icon icon-tick"></i>Техническая поддержка.</li>
                                <li><i class="svg-icon icon-tick"></i>Доступ к системе 24/7.</li>
                                <li><i class="svg-icon icon-tick"></i>Обучение сотрудников клиента.</li>
                                <li><i class="svg-icon icon-tick"></i>Создание разноранговых учетных записей (у клиента будет несколько кабинетов для разных уровней доступа к информации).</li>
                                <li><i class="svg-icon icon-tick"></i>Маршруты (перемещение ТС, остановки, стоянки, простои).</li>
                                <li><i class="svg-icon icon-tick"></i><span>Бесплатное отключение на срок 3 месяца (зимний период)</span></li>
                                <li><i class="svg-icon icon-tick"></i><span>Eco drive (модуль оценки качества вождения водителя)</span></li>
                                <li><i class="svg-icon icon-tick"></i>Мобильное приложение.</li>
                                <li><i class="svg-icon icon-tick"></i>Геозоны.</li>
                                <li><i class="svg-icon icon-tick"></i>Мониторинг перемещения ТС в он-лайн режиме.</li>
                                <li><i class="svg-icon icon-tick"></i>Выгрузка информации по пробегу ТС за произвольный интервал времени.</li>
                                <li><i class="svg-icon icon-tick"></i>Отчеты - формаирование, отправка на почту в удобных форматах (pdf, exel).</li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <a class="catalog__btn btn btn_bg-red btn_border-red btn_italic btn_small"
                               data-theme="Тариф - VIP"
                               data-toggle="modal"
                               data-target="#modal_compred">
                                Оформить сейчас
                            </a>

                        </div>
                    </div>


                </div>
            </div>
        </div>


        {{-- Оборудование для навигации --}}
        <div class="container" id="oborudovanie">
            <h2>Датчики уровня топлива</h2>
        </div>
        @include('pages.inc.oborud_all',['type'=>'Датчик уровня топлива'])


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