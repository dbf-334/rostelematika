@extends('layouts.base')


@section('meta_name_robots')
    <meta name="robots" content="index, follow"/>
@endsection


@section('to_header')
    <link href="{{ asset('/css/monitoring-transporta.css') }}" rel="stylesheet">

    <link href="{{ asset('/css/sec_main_slide.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_advantages.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_calculator.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_portfolio.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_clients.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_reviews.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_steps.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_commerce.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_oborudovanie.css') }}" rel="stylesheet">

@endsection


@section('to_footer')
    <script src="{{ asset('/js/sec_calculator.js') }}"></script>

    <script>
        {{-- Меняем картинки в блоке / Инфа о кол-ве клиентов --}}
        $('#sec_clients .img4').attr('src', '/img/pages/monitoring-transporta/client_013.png');
        $('#sec_clients .img5').attr('src', '/img/pages/monitoring-transporta/client_015.png');
        $('#sec_clients .img6').attr('src', '/img/pages/monitoring-transporta/client_016.png');
    </script>
@endsection



@section('content')
    {{-- Подключаем только те модальные окна,
    которые будут использоваться на данной странице --}}
    @include('modals.compred')

    <div class="page-monitoring-transporta">

        {{-- главный слайдер + форма захвата --}}
        @include('pages.inc.sec_main_slide', [ 'img_slide'=>'monitoring-transporta.jpg',
            'text_slide'=>["Полный контроль топлива, учет заправок и сливов",
                "Оптимизация работы автопарка и снижение потерь"] ])



        {{-- Блок данных --}}
        <div class="block-1">
            <div class="row h-auto">
                <div class="card laptop">

                </div>

                <div class="card bodytext">
                    <div class="card-body">
                        <p>Системы спутникового мониторинга транспорта позволяют владельцам компаний получать полную информацию
                            о состоянии автопарка (в том числе данные о расходе топлива, нарушениях водителями скоростного режима
                            и несоблюдении режима работы). Их установка дает возможность экономить на обслуживании машин от 5% до 50%.</p>

                        <p>Системы Глонасс мониторинга состоят из следующего набора оборудования:</p>

                        <ul>
                            <li>
                                <i class="svg-icon icon-tick"></i>
                                Трекера слежения за автомобилем;
                            </li>
                            <li>
                                <i class="svg-icon icon-tick"></i>
                                Программного обеспечения;
                            </li>
                            <li>
                                <i class="svg-icon icon-tick"></i>
                                Набора необходимых датчиков (датчик уровня топлива, наличия пассажира и т.д.).
                            </li>
                        </ul>

                        <p>Мониторинг автотранспорта осуществляется с использованием наземного и космического оборудования.
                            Во время движения трекер, ориентируясь по положению спутников, определяет широту и долготу, на
                            которых находится авто. Также оборудование записывает информацию с установленных на автомобиле датчиков.
                            Через определенные промежутки времени собранные данные отправляются на сервер (для этого применяется
                            стандарт связи GSM).</p>

                        <p>Сам пользователь может осуществлять мониторинг автотранспорта Глонасс через личный кабинет. Также для
                            этого может быть использована электронная почта или СМС-сообщения.</p>
                    </div>
                </div>

            </div>
        </div>

        {{-- Блок данных --}}
        <div class="block-2">
            <div class="row h-auto">

                <div class="card bodytext">
                    <div class="card-body">
                        <h2>Решаемые задачи</h2>

                        <p>Системы мониторинга транспорта позволяют дистанционно осуществлять контроль за соблюдением водителями их обязанностей. В результате владелец компаний избавляется от целого ряда проблем, таких как:</p>

                        <ul>
                            <li><i class="svg-icon icon-tick"></i>Сливы топлива из бака;</li>
                            <li><i class="svg-icon icon-tick"></i>Накрутка пробега;</li>
                            <li><i class="svg-icon icon-tick"></i>Использование корпоративных автомобилей в личных целях;</li>
                            <li><i class="svg-icon icon-tick"></i>Нарушение скоростного режима и несоблюдение ПДД.</li>
                        </ul>

                        <p>Установив на компьютер специальное программное обеспечение, владелец может отслеживать маршруты передвижения автомобилей, места заправок и слива топлива и т.д. Некоторую информацию можно получать и через текстовые сообщения (как по электронной почте, так и SMS).</p>
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
                            <div class="b3-head">100%</div>
                            <p>Выявление стиля вождения</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="b3-head">до 15%</div>
                            <p>Снижение износа ТС</p>
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
                        <h3>Из чего состоит решение</h3>
                        <p>Также владелец может получать и другую информацию об автомобиле, в зависимости от
                            установленных на машине датчиков.</p>
                        <p>Глонасс и GPS позволяют существенно повысить уровень безопасности корпоративного автопарка.
                            Ведь при ДТП экстренные службы в короткие сроки смогут получить информацию о месте происшествия.
                            А в случае угона транспортного средства, владелец сможет отыскать его по установленному маяку.</p>
                    </div>

                    <div class="card element">
                        <div class="card-img">
                            <img src="/img/pages/monitoring-transporta/treker.jpg" alt="">
                        </div>
                        <div class="card-body">
                            Глонасс/GPS трекер
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- Сферы применения --}}
        <div class="block-5 py-3">
            <div class="container">
                <h2>Сферы применения</h2>
                <p>Трекеры Glonass и GPS, отслеживающие расположение машины по спутнику, могут устанавливаться почти на
                    любые виды сухопутного транспорта.</p>
                <p>Кроме того, они могут применяться на водном и воздушном транспорте. В зависимости от типа машины, перечень
                    и количество установленных датчиков тоже может изменяться.</p>
                <h2>В чем преимущество нашей системы мониторинга транспорта</h2>
                <p>Компания Ростелематика устанавливает маяки и средства слежения за автомобилями в Ставрополе и Ставропольском
                    крае. Стоимость установки нашего оборудования существенно ниже чем у конкурентов, а его качество ничем при
                    этом не уступает.</p>
                <p>Вот еще несколько причин, по которым стоит проводить монтаж систем именно в компании Ростелематика:</p>
                <ul>
                    <li>
                        <i class="svg-icon icon-tick"></i>
                        Наше оборудование позволит оптимизировать расходы, снизив затраты на обслуживание машин до 50%;
                    </li>
                    <li>
                        <i class="svg-icon icon-tick"></i>
                        Оно позволит повысить уровень дисциплины водителей;
                    </li>
                    <li>
                        <i class="svg-icon icon-tick"></i>
                        Обеспечит круглосуточное наблюдение за любым видом транспортных средств.
                    </li>
                </ul>
                <p>Наши устройства отличаются высокой точностью передаваемых данных. Погрешность измерений не превышает
                    1-2 метров и с каждым годом все уменьшается.</p>
                <h2>Внедрение системы спутникового мониторинга транспорта</h2>
                <p>Системы Глонасс и GPS мониторинга позволяют правильно организовать работу транспортной компании. И все
                    это при минимальных затратах на установку и обслуживание оборудования. Поэтому такие устройства все
                    чаще устанавливаются на машины корпоративного автопарка. Обмануть их почти невозможно, так как разработчики
                    оборудования постоянно совершенствуют свою продукцию и устраняют все лазейки, которыми могут воспользоваться
                    недобросовестные водители.</p>
                <p>Чтобы провести установку оборудования для мониторинга транспорта в Ставрополе, достаточно оставить заявку
                    на сайте компании Ростелематика или по телефону. Наши сотрудники свяжутся с Вами в короткие сроки для
                    обсуждения подробной информации об автопарке организации. После заключения договора и оплаты, на место
                    выедут специалисты. Они проведут установку и обучат заказчика использованию систем.</p>
                <p>На все оборудование компания Ростелематика предоставляет пожизненную гарантию. Кроме того, мы осуществляем
                    полную техническую поддержку устройств.</p>
            </div>
        </div>


        {{-- Оборудование для навигации --}}
        <div class="container" id="oborudovanie">
            <h2>GPS/ГЛОНАСС Трекеры (Терминалы)</h2>
        </div>
        @include('pages.inc.oborud_all',['type'=>'GPS/ГЛОНАСС Трекер'])

        <div class="container" id="oborudovanie">
            <h2 class="float-left m-0 mr-4">Также у нас есть GPS Маяки</h2>
            <a href="/oborudovanie/all-gps-mayaki.html" class="btn link">Подробнее</a>
        </div>
        @include('pages.inc.oborud_count',[ 'type'=>'GPS Маяк', 'count'=>4 ])


        {{-- Цены на покупку оборудования --}}
        <div class="block-6 pt-3 pb-5">
            <div class="container">
                <div class="row h-auto">
                    <div class="card pricebox">

                        <h3>Цены на покупку оборудования</h3>
                        <div class="row h-auto">
                            <div class="card">
                                <div class="price">4 390 Р</div>
                                <ul>
                                    <li><i class="svg-icon icon-tick"></i>Глонас GPS трекер</li>
                                </ul>
                            </div>

                            <div class="card">
                                <div class="price">5 200 Р</div>
                                <ul>
                                    <li><i class="svg-icon icon-tick"></i>Глонас GPS трекер</li>
                                    <li>
                                        <i class="svg-icon icon-tick"></i>
                                        Считывание информации с бортового компьютера автомобиля (уровень топлива, пробег)
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="card tarif">
                        <div class="card-header">
                            <div class="title">Тариф стандарт</div>
                            <div class="price text-center">
                                <span class="sum">350 Р</span>
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
                                <li><i class="svg-icon icon-tick"></i>Создание разноранговых учетных записей (у клиента будет несколько
                                    кабинетов для разных уровней доступа к информации).</li>
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
                               data-theme="Тариф - Стандарт"
                               data-toggle="modal"
                               data-target="#modal_compred">
                                Оформить сейчас
                            </a>

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
                                <li><i class="svg-icon icon-tick"></i>Создание разноранговых учетных записей (у клиента
                                    будет несколько кабинетов для разных уровней доступа к информации).</li>
                                <li><i class="svg-icon icon-tick"></i>Маршруты (перемещение ТС, остановки, стоянки, простои).</li>
                                <li>
                                    <i class="svg-icon icon-tick"></i>
                                    <span>Контроль топлива (заправки, перерасход, хищение топлива).</span>
                                </li>
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