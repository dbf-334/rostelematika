@extends('layouts.base')


@section('meta_name_robots')
    <meta name="robots" content="index, follow"/>
@endsection


@section('to_header')
    <link href="{{ asset('css/monitoring-raboty-musorovozov.css') }}" rel="stylesheet">

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
        $('#sec_clients .img2').attr('src', '/img/pages/monitoring-raboty-musorovozov/client_016.png');
        $('#sec_clients .img3').attr('src', '/img/pages/monitoring-raboty-musorovozov/client_018.png');
    </script>
@endsection



@section('content')
    <div class="page-monitoring-raboty-musorovozov">

        {{-- главный слайдер + форма захвата --}}
        @include('pages.inc.sec_main_slide', [ 'img_slide'=>'slider-trash.jpg',
            'text_slide'=>["Контроль местоположения транспорта в режиме реального времени",
                "Контроль соблюдения графика"] ])


        {{-- Блок данных --}}
        <div class="block-5 py-3 mt-5">
            <div class="container">
                <p>Как и любой другой вид спецтехники, мусоровозы требуют обслуживания и грамотного контроля. Однако нарушение
                    правил эксплуатации машин и халатность водителей могут приводить к существенному росту затрат. Избежать
                    лишних расходов поможет установка на мусоровозы системы спутниковой навигации.</p>
                <h2>Возможности контроля мусоровозов</h2>
                <p>Своевременная уборка твердых бытовых отходов – одна из важнейших составляющих в жизни любого населенного
                    пункта. Однако недобросовестные водители могут не выполнять свои обязательства, что приводит к накоплению
                    мусора и штрафам для работодателя. Бороться с этим поможет установки системы мониторинга. Такое оборудование
                    позволяет обнаружить и устранить:</p>
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
                <ul>
                    <li><i class="svg-icon icon-tick"></i>Несоблюдение сотрудниками графика вывоза мусора;</li>
                    <li><i class="svg-icon icon-tick"></i>Пропуск площадок с контейнерами;</li>
                    <li><i class="svg-icon icon-tick"></i>Использование техники в собственных целях;</li>
                    <li><i class="svg-icon icon-tick"></i>Сливы и махинации с топливом;</li>
                    <li><i class="svg-icon icon-tick"></i>Отклонения от намеченного маршрута.</li>
                </ul>
                <p>После установки оборудования владелец техники сможет получать подробную информацию о ее работе и вести
                    контроль вывоза ТБО, что позволит в несколько раз сократить затраты на обслуживание ТС.</p>
                <p>Кроме того, согласно законодательству России, машины, осуществляющие вывоз мусора, в обязательном порядке
                    должны быть оборудованы системой слежения Глонасс.</p>
            </div>
        </div>


        {{-- Блок данных --}}
        <div class="block-2">
            <div class="row h-auto">
                <div class="card equipment"></div>

                <div class="card bodytext">
                    <div class="card-body">
                        <h2>Как работает мониторинг вывоза мусора</h2>
                        <p>Для того, чтобы начать отслеживание ТС, требуется установить на него специальное оборудование.
                            Основным и обязательным элементом любой системы является Глонасс трекер. Связываясь со спутниками,
                            он определяет положение машины с высокой точностью (обычно погрешность не превышает нескольких десятков сантиметров).</p>
                        <p>Данные с трекера, а также с других установленных на машине датчиков, записывается на внутреннюю память
                            устройства. Несколько раз в секунду эти данные отправляются на серверы посредством GSM-связи (это
                            международный стандарт, который используется телефонными операторами, что обеспечивает широкую область работы устройств).</p>
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
                        <p>Основой для любой системы слежения является Глонасс трекер. Помимо этого, стандартный набор
                            оборудования включает:</p>
                    </div>

                    <div class="card block-box">
                        <div class="row h-auto">
                            <div class="card element">
                                <div class="card-img">
                                    <img src="/img/pages/monitoring-raboty-musorovozov/solution_2.png" alt="">
                                </div>
                                <div class="card-body">
                                    Датчик для определения уровня топлива в баке
                                </div>
                            </div>

                            <div class="card element">
                                <div class="card-img">
                                    <img src="/img/pages/monitoring-raboty-musorovozov/solution_3.png" alt="">
                                </div>
                                <div class="card-body">
                                    Датчик зажигания
                                </div>
                            </div>

                            <div class="card element">
                                <div class="card-img">
                                    <img src="/img/pages/monitoring-raboty-musorovozov/solution_66.png" alt="">
                                </div>
                                <div class="card-body">
                                    Датчик работы дополнительного оборудования
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
                <p>Чтобы владелец смог отследить передвижение машин, ему требуется компьютер с браузером или мобильный телефон с
                    установленным специальным приложением. Здесь он сможет найти подробную информацию о работе основных устройств,
                    а также узнать о местонахождении и маршруте, пройденном мусоровозом.</p>
                <p>Часть данных также может быть получена в виде текстовых сообщений. Они могут быть отправлены как на электронную
                    почту, так и через СМС.</p><p>По желанию клиента, на машину могут быть смонтированы и другие датчики (например,
                    датчик, отслеживающий показания тахографа). Помимо этого, для транспорта доступна система видеофиксации.</p>
                <h2>Результаты от внедрения</h2>
                <p>Использование системы Глонасс отслеживания мусоровозов помогает существенно снизить расходы на обслуживание
                    мусоровозов. Ведь ее внедрение позволяет:</p>
                <ul>
                    <li><i class="svg-icon icon-tick"></i>Обеспечить правильную и эффективную работу машин;</li>
                    <li><i class="svg-icon icon-tick"></i>Предотвратить хищения топлива водителями;</li>
                    <li><i class="svg-icon icon-tick"></i>Избежать нецелевого использования ТС;</li>
                    <li><i class="svg-icon icon-tick"></i>Обеспечить соблюдение работниками маршрутов и графиков вывоза мусора.</li>
                </ul>
                <p>Эффективность работы оборудования зависит от многих факторов. Но в отдельных случаях дальнейшая экономия на
                    эксплуатации ТС достигает 50%.</p>
                <p>Кроме того, системы спутникового слежения способны решать и ряд других задач. Например, они могут быть полезны
                    в случае ДТП: после аварии устройство самостоятельно уведомит о случившемся экстренные службы и сообщит им о
                    местонахождении ТС (также водитель сможет воспользоваться для этого тревожной кнопкой). Помимо этого, наличие
                    на машине системы слежения помогает существенно упростить ее поиск в случае угона.</p>
                <p>В Ставрополе установку на оборудования Глонасс для мусоровозов осуществляет компания Ростелематика. Мы можем
                    самостоятельно разработать систему с учетом требований клиента, а также готовы предложить монтаж готовой системы «под ключ».</p>
                <p>Оставить заявку можно по телефону, а также через форму на сайте. Далее наши сотрудники свяжутся с заказчиком
                    для обсуждения деталей проекта. После заключения договора специалисты компании Ростелематика сами выедут на
                    объект для установки оборудования. Мы работаем по всей территории Ставропольского края. При необходимости,
                    мы можем бесплатно обучить клиента использованию устройства.</p>
                <p>Наша компания предлагает пожизненную гарантию и техподдержку установленного оборудования. Также мы можем
                    гарантировать, что после монтажа системы GPS контроля мусоровозов заказчик сможет сэкономить не менее 5% на обслуживании ТС.</p>
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