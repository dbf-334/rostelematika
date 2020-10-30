@extends('layouts.base')


@section('meta_name_robots')
    <meta name="robots" content="index, follow"/>
@endsection


@section('to_header')
    <link href="{{ asset('/css/kontrol-temperatury-v-refrizheratore.css') }}" rel="stylesheet">

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
        $('#sec_clients .img4').attr('src', '/img/pages/kontrol-temperatury-v-refrizheratore/client_016.png');
    </script>
@endsection



@section('content')
    <div class="page-kontrol-temperatury-v-refrizheratore">

        {{-- главный слайдер + форма захвата --}}
        @include('pages.inc.sec_main_slide', [ 'img_slide'=>'slider-freeze.jpg',
            'text_slide'=>["Контроль местоположения транспорта в режиме реального времени",
                "Удаленный контроль температурного режима"] ])


        {{-- Блок данных --}}
        <div class="block-5 py-3 mt-5">
            <div class="container">
                <p>Многие категории товаров (в частности, продукты питания, лекарства, химия и т.д.) требуют соблюдения определенного
                    температурного режима во время транспортировки. Поэтому для их перевозки используются рефрижераторы. Однако для
                    правильной работы такого оборудования требуется его правильная настройка и постоянный контроль. В этом может
                    помочь установка на транспорт систем IQFreeze.</p>
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
                <h2>Что такое система контроля рефрижератора</h2>
                <p>Правильно организовать транспортировку скоропортящихся грузов может быть достаточно сложно. По статистике,
                    во время перевозки производители теряют в среднем от 5 до 10% товаров. Причем основная причина подобных
                    проблем – нарушения температурного режима, вызванные неправильной работой рефрижератора. Снизить затраты
                    позволит установка на транспортное средство контрольного оборудования.</p>
            </div>
        </div>


        {{-- Блок данных --}}
        <div class="block-2">
            <div class="row h-auto">
                <div class="card equipment"></div>

                <div class="card bodytext">
                    <div class="card-body">
                        <p>В настоящее время наибольшую популярность получили системы IQFreeze. Они имеют небольшую стоимость
                            (по сравнению с большинством европейских аналогов) и подходят для различных типов холодильного оборудования.
                            Использование таких систем позволяет:</p>
                        <ul>
                            <li><i class="svg-icon icon-tick"></i>Контролировать температуру как внутри, так и снаружи рефрижератора на всем пути;</li>
                            <li><i class="svg-icon icon-tick"></i>Вести наблюдение за работой самой установки;</li>
                            <li><i class="svg-icon icon-tick"></i>При необходимости, внести изменения, позволяющие предотвратить порчу товаров.</li>
                        </ul>
                        <p>Внедрение подобных устройств позволяет существенно сократить издержки и увеличить прибыль транспортной компании.</p>
                    </div>
                </div>
            </div>
        </div>


        {{-- Из чего состоит решение --}}
        <div class="block-4 py-5">
            <div class="container">
                <div class="row h-auto">
                    <div class="card bodytext">
                        <h3>Из чего состоит решение IQFreeze контроля рефрижераторов</h3>
                    </div>

                    <div class="card block-box">
                        <div class="row h-auto">
                            <div class="card element">
                                <div class="card-img">
                                    <img src="/img/pages/kontrol-temperatury-v-refrizheratore/solution_1.png" alt="">
                                </div>
                                <div class="card-body">
                                    GPS/ГЛОНАСС трекер
                                </div>
                            </div>

                            <div class="card element">
                                <div class="card-img">
                                    <img src="/img/pages/kontrol-temperatury-v-refrizheratore/solution_2.png" alt="">
                                </div>
                                <div class="card-body">
                                    Датчик уровня топлива
                                </div>
                            </div>

                            <div class="card element">
                                <div class="card-img">
                                    <img src="/img/pages/kontrol-temperatury-v-refrizheratore/solution_3.png" alt="">
                                </div>
                                <div class="card-body">
                                    Датчик зажигания
                                </div>
                            </div>

                            <div class="card element">
                                <div class="card-img">
                                    <img src="/img/pages/kontrol-temperatury-v-refrizheratore/solution_4.png" alt="">
                                </div>
                                <div class="card-body">
                                    Температурный регистратор
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
                <p>Использование системы IQFreeze подразумевает установку сразу нескольких датчиков. Они позволяют контролировать:</p>
                <ul class="list-ok">
                    <li><i class="svg-icon icon-tick"></i>Температуру внутри холодильной установки;</li>
                    <li><i class="svg-icon icon-tick"></i>Температуру окружающей среды;</li>
                    <li><i class="svg-icon icon-tick"></i>Заданное значение температуры;</li>
                    <li><i class="svg-icon icon-tick"></i>Открытие и закрытие дверей фургона;</li>
                    <li><i class="svg-icon icon-tick"></i>Количество моточасов работы рефрежератора;</li>
                    <li><i class="svg-icon icon-tick"></i>Режим работы рефрижераторного двигателя и напряжение от батареи холодильной установки.</li>
                </ul>
                <p>Кроме того, после установки IQFreeze владелец сможет получать информацию об ошибках системы.</p>
                <p>Вся собранная информация передается в систему спутникового мониторинга автомобиля (которая, в свою очередь,
                    позволяет отслеживать маршруты передвижения ТС по GPS, уровень топлива и т.д.). В дальнейшем она отправляется
                    на серверы с использованием стандарта связи GSM.</p>
                <p>Для получения собранных данных требуется установить ПК с браузером или смартфон с предустановленным приложением.
                    Также производитель систем подготовил удобное приложение, которое позволяет получить основную информацию о работе
                    устройства. Оно может быть установлено на смартфоны или планшеты на базе Android.</p>
                <p>Кроме того, владелец холодильной установки сможет получать текстовые оповещения. Они могут приходить как на электронную
                    почту, так и в виде СМС.</p>
                <h2>Установка системы контроля температуры в рефрижераторе</h2>
                <p>Использование систем контроля работы холодильных установок позволяет правильно организовать и упростить транспортировку
                    скоропортящихся грузов. Такие устройства серьезно снижают расходы и окупаются уже после нескольких месяцев эксплуатации.
                    Однако для максимально эффективного использования подобного оборудования, его требуется правильно установить.</p>
                <p>Установку систем IQFreeze в Ставрополе готова выполнить компания Ростелематика. Мы предлагаем готовые решения «под ключ»
                    и действуем по всей территории Ставропольского края.</p>
                <p>Оставить заявку на монтаж можно с помощью соответствующей формы на сайте. Наши сотрудники сами свяжутся с Вами, чтобы
                    обсудить особенности проекта.</p>
                <p>После заключения договора и оплаты, специалисты компании Ростелематика выедут на объект для установки и настройки
                    оборудования. Если потребуется, они не только выполнят монтаж, но и научат владельца, как правильно использовать
                    устройство (причем все это совершенно бесплатно).</p>
                <p>IQFreeze – это оптимальное решение для любой транспортной компании, занимающейся перевозками скоропортящихся товаров.
                    Такое оборудование будет удобно и полезно не только владельцу ТС, но и его водителю. А результаты внедрения системы
                    не заставят себя долго ждать.</p>
                <p>Мы уверены в качестве своих систем, поэтому на каждое устройство предоставляем своим клиентам пожизненную гарантию.
                    Также мы выполняем техническую поддержку систем мониторинга температуры в рефрижераторе, так что владелец может не
                    беспокоиться об исправности оборудования.</p>
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