@extends('layouts.base')


@section('meta_name_robots')
    <meta name="robots" content="index, follow"/>
@endsection


@section('to_header')
    <link href="{{ asset('css/obsluzhivanie-sistem.css') }}" rel="stylesheet">

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
        $('#sec_clients .img2').attr('src', '/img/pages/obsluzhivanie-sistem/client_018.png');
    </script>
@endsection



@section('content')
    {{-- Подключаем только те модальные окна,
    которые будут использоваться на данной странице --}}
    @include('modals.compred')

    <div class="page-obsluzhivanie-sistem">

        {{-- главный слайдер + форма захвата --}}
        @include('pages.inc.sec_main_slide', [ 'img_slide'=>'slider_service.jpg',
            'text_slide'=>["Полный контроль топлива, учет заправок и сливов",
                "Оптимизация работы автопарка и снижение потерь"] ])


        {{-- Блок данных --}}
        <div class="block-1">
            <div class="row h-auto">
                <div class="card laptop"></div>

                <div class="card bodytext">
                    <div class="card-body">
                        <p>Системы мониторинга транспорта – это отличное решение для владельцев транспортных компаний. Оборудование
                            может быть установлено на грузовые и легковые автомобили, а также строительную и сельскохозяйственную
                            технику. Оно позволяет вести дистанционное наблюдение за всеми основными показателями работы машины.
                            В результате затраты на ремонт и эксплуатацию транспорта снижаются, а доходы – растут.</p>
                        <p>Но для правильной работы требуется качественное техническое обслуживание Глонасс. Выполнить данную
                            услуги готова компания Ростелематика.</p>
                        <p>Системы Глонасс и GPS работают на стандарте связи GSM. Таким образом, информация с датчиков будет
                            отправляться по всей зоне покрытия операторов связи. Обмануть оборудование практически невозможно –
                            производители предусмотрели эффективные способы защиты, а при монтаже все соединения пломбируются
                            (поэтому в ходе обслуживания мониторинга транспорта все нарушения могут быть легко обнаружены).</p>
                    </div>
                </div>

            </div>
        </div>

        {{-- Блок данных --}}
        <div class="block-2">
            <div class="row h-auto">

                <div class="card bodytext">
                    <div class="card-body">
                        <h2>Составные части системы контроля топлива</h2>
                        <p>Структура системы Glonass мониторинга может меняться, в зависимости от типа транспортного средства и
                            целей его владельца. Но обычно она состоит из следующих элементов:</p>
                        <ul class="list-ok">
                            <li><i class="svg-icon icon-tick"></i>Трекер слежения. Это основной компонент любого оборудования.
                                Основываясь на положении спутников,
                                он определяет координаты машины с точностью до нескольких метров.</li>
                            <li><i class="svg-icon icon-tick"></i>Датчик топлива. Позволяет в реальном времени контролировать
                                количество топлива в баке, его расход,
                                а также места заправок и сливов.</li>
                            <li><i class="svg-icon icon-tick"></i>Датчик наличия пассажиров. Позволяет узнать, когда водитель
                                использует машину для перевозки третьих лиц.</li>
                        </ul>
                        <p>В зависимости от типа транспортного средства, на него может быть смонтировано и дополнительное оборудование.
                            Например, на строительную технику можно установить датчик положения ковша. А на грузовой автомобиль – датчик
                            заполнения цистерны.</p>
                    </div>
                </div>

                <div class="card equipment"></div>

            </div>
        </div>


        {{-- Преимущества в цифрах --}}
        <div class="block-3 pb-5">
            <div class="container">
                <div class="my_hr1"></div>
                <h2 class="text-center text-center pt-5 pb-3 m-0">Преимущества в цифрах и фактах</h2>

                <div class="row w-100">

                    <div class="card">
                        <div class="card-body">
                            <div class="b3-head">48 часов</div>
                            <p>На устранение неисправностей или месяц обслуживания бесплатно</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="b3-head">14 дней теста</div>
                            <p>Бесплатная тестовая эксплуатация в течение двух недель</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="b3-head">28 центров</div>
                            <p>Закажите установку в удобном для вас городе</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="b3-head">Погрешность в 1%</div>
                            <p>Нами была разработана уникальная система настройки и калибровки для датчиков уровня топлива.
                                В результате точность достигает 99%</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="b3-head">Универсальность</div>
                            <p>Для работы с навигационным оборудованием мы используем уникальный алгоритм, благодаря которому
                                точность полученных данных достигает максимума</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{-- Из чего состоит решение --}}
        <div class="block-4 pt-5">
            <div class="container">
                <div class="row h-auto">
                    <div class="card bodytext">
                        <h3>Из чего состоит система</h3>
                        <p>В зависимости от типа транспортного средства, на него может быть смонтировано и дополнительное
                            оборудование. Например, на строительную технику можно установить датчик положения ковша. А на
                            грузовой автомобиль – датчик заполнения цистерны.</p>
                    </div>

                    <div class="card element">
                        <div class="card-img">
                            <img src="/img/pages/obsluzhivanie-sistem/solution_2.png" alt="">
                        </div>
                        <div class="card-body">
                            Датчик уровня топлива
                            <p>Установить отдельный контроль топлива, который монтируется в бензобак</p>
                        </div>
                    </div>

                    <div class="card element">
                        <div class="card-img">
                            <img src="/img/pages/obsluzhivanie-sistem/solution_3.png" alt="">
                        </div>
                        <div class="card-body">
                            Датчик зажигания
                            <p class="mt-4">Внедрить устройство отключения или блокировки зажигания</p>
                        </div>
                    </div>

                    <div class="card element">
                        <div class="card-img">
                            <img src="/img/pages/obsluzhivanie-sistem/solution_12.png" alt="">
                        </div>
                        <div class="card-body">
                            Счетчик моточасов
                        </div>
                    </div>

                </div>
            </div>
        </div>


        {{-- Сферы применения --}}
        <div class="block-5 py-3 mt-3">
            <div class="container">
                <h2>Техническое обслуживание системы мониторинга транспорта</h2>
                <p>Монтаж оборудования для GPS-отслеживания транспорта – достаточно трудоемкая процедура, требующая от специалиста
                    хорошего знания конструкции машины и архитектуры самой системы. Однако устройство необходимо не только правильно
                    установить, но и грамотно настроить. Кроме того, в процессе эксплуатации может потребоваться дополнительная
                    регулировка, а в случае повреждения – еще и ремонт оборудования.</p>
                <p>Наша компания не только может выполнить монтаж, но и произвести настройку системы GPS-слежения. Также мы готовы
                    бесплатно обучить владельца правилам использования устройств. Компания Ростелематика предоставляет на все системы
                    пожизненную гарантию, а также выполняет техническую поддержку (аутсорсинг).</p>
                <p>Установка систем мониторинга не требует больших затрат. Однако использование оборудования позволяет существенно
                    сократить расходы на обслуживание машин. Теперь владелец сможет узнать точные маршруты передвижения транспорта,
                    количество затраченных моточасов, расход топлива, а также места его заправок и сливов.</p>
                <p>Все эти данные позволят оптимизировать работу предприятия и сократить затраты не менее, чем на 5%. А в отдельных
                    случаях экономия может достигать 50%. Кроме того, в случае ДТП система самостоятельно оповестит о происшествии
                    экстренные службы. А если автомобиль попытаются угнать – владелец сможет узнать его положение по трекеру.</p>
                <p>Контролировать работу машины владелец может с помощью специального ПО на компьютер. Часть информации также можно
                    получать через СМС или на электронную почту в виде текстовых сообщений.</p>
                <h2>Преимущества работы с компанией Ростелематика</h2>
                <p>Установку систем спутникового слежения на транспорт осуществляет компания Ростелематика. Мы работаем в Ставрополе
                    и выезжаем на объекты по всей территории Ставропольского края. Своим клиентам мы готовы предложить высокий уровень
                    сервиса, техподдержку оборудования, а также пожизненную гарантию на него.</p>
                <p>Мы выполняем абонентское обслуживание Глонасс на любых видах наземного и воздушного транспорта. Обращаясь к нам,
                    Вы гарантированно сэкономите не менее 5% на дальнейшем обслуживании машин. В этом уже успели убедиться более 3000 клиентов.</p>
                <p>Оставьте заявку на сайте прямо сейчас, и наши сотрудники сами свяжутся с Вами в удобное время! Цены на обслуживание
                    Глонасс в месяц здесь ниже, чем у большинства конкурентов.</p>
            </div>
        </div>

        {{-- Цены на покупку оборудования --}}
        <div class="block-6 pt-3 pb-5">
            <div class="container">
                <div class="row h-auto">

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
                                <li><i class="svg-icon icon-tick"></i><span>Контроль топлива (заправки, перерасход, хищение топлива).</span></li>
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