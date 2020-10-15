@extends('layouts.base')


@section('meta_name_robots')
    <meta name="robots" content="index, follow"/>
@endsection


@section('to_header')
    <link href="{{ asset('css/vozdushnyij-transport.css') }}" rel="stylesheet">

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
        $('#sec_clients .img1').attr('src', '/img/pages/vozdushnyij-transport/client_013.png');
        $('#sec_clients .img2').attr('src', '/img/pages/vozdushnyij-transport/client_016.png');
        $('#sec_clients .img3').attr('src', '/img/pages/vozdushnyij-transport/client_018.png');
        $('#sec_clients .img5').attr('src', '/img/pages/vozdushnyij-transport/client_022.png');
    </script>
@endsection



@section('content')
    <div class="page-vozdushnyij-transport">

        {{-- главный слайдер + форма захвата --}}
        @include('pages.inc.sec_main_slide', [ 'img_slide'=>'slider-air.jpg',
            'text_slide'=>["Контроль местоположения транспорта в режиме реального времени",
                "Повышение уровня безопасности"] ])


        {{-- Блок данных --}}
        <div class="block-5 py-3 mt-5">
            <div class="container">
                <p>Одним из самых важных видов транспорта является воздушный. Именно он позволяет в кратчайшие сроки переместиться
                    в заданную местность, организовать скорейшую доставку груза.</p>
                <p>И чтобы это мероприятие было максимально безопасным, информативным, не потребовало много лишних трат, необходимо
                    установить качественную систему мониторинга, которая позволит не только отслеживать местоположение, но и следить
                    за тем, что происходит на борту воздушного транспорта.</p>
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
                <p><strong>Какая компания может предложить Вам самое лучшее решение?</strong></p>
                <p>Специализированная организация «Ростелематика» - это команда настоящих профессионалов своего дела, которые
                    готовы предложить установку качественной системы мониторинга, в составе которой могут использоваться следующие компоненты:</p>
                <ul>
                    <li><i class="svg-icon icon-tick"></i>ГЛОНАСС-трекер/GPS.</li>
                    <li><i class="svg-icon icon-tick"></i>Всевозможные датчики – зажигания, уровня топлива и многие другие.</li>
                    <li><i class="svg-icon icon-tick"></i>Специальные пломбы.</li>
                    <li><i class="svg-icon icon-tick"></i>Система видеонаблюдения (в том числе, реального времени).</li>
                </ul>
                <p>Весь этот комплекс оборудования самым заметным образом повышает уровень безопасности и способствует комфортному
                    и экономичному полету.</p>
            </div>
        </div>


        {{-- Блок данных --}}
        <div class="block-2">
            <div class="row h-auto">
                <div class="card equipment"></div>

                <div class="card bodytext">
                    <div class="card-body">
                        <h2>Почему Вам стоит воспользоваться нашим специальным предложением?</h2>
                        <p>Все дело в том, что мы предлагаем следующие выгоды:</p>
                        <p><strong>1. Выгодные тарифы.</strong></p>
                        <p>Установка ГЛОНАСС стоит всего от 8500 рублей. За 23800 р Вы получите в дополнение к нему еще и датчики
                            уровня топлива и отслеживания.</p>
                        <p><strong>2. Удобная оплата.</strong></p>
                        <p>По безналичному расчету – так удобно всем.</p>
                        <p><strong>3. Быстрая доставка и качественный монтаж.</strong></p>
                        <p>В течение 3 дней наши специалисты выедут к Вам на место и произведут профессиональную установку.</p>
                        <p>Хотите воспользоваться предложением сейчас?</p>
                        <p>Тогда оставьте заявку, дождитесь звонка от менеджера, оговорите с ним условия, оплатите и ждите в течение
                            3 дней наших специалистов для установки.</p>
                    </div>
                </div>
            </div>
        </div>


        {{-- Из чего состоит решение --}}
        <div class="block-4 py-5">
            <div class="container">
                <div class="row h-auto">
                    <div class="card bodytext">
                        <h3>Из чего состоит решение для воздушного транспорта?</h3>
                    </div>

                    <div class="card block-box">
                        <div class="row h-auto">
                            <div class="card element">
                                <div class="card-img">
                                    <img src="/img/pages/vozdushnyij-transport/solution_1.png" alt="">
                                </div>
                                <div class="card-body">
                                    GPS/ГЛОНАСС трекер
                                </div>
                            </div>

                            <div class="card element">
                                <div class="card-img">
                                    <img src="/img/pages/vozdushnyij-transport/solution_2.png" alt="">
                                </div>
                                <div class="card-body">
                                    Датчик уровня топлива
                                </div>
                            </div>

                            <div class="card element">
                                <div class="card-img">
                                    <img src="/img/pages/vozdushnyij-transport/solution_6.png" alt="">
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