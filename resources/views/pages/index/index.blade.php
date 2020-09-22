@extends('layouts.base')



@section('meta_name_robots')
    <meta name="robots" content="index, follow"/>
@endsection



@section('to_header')
    {{-- Базовые стили текущей страницы --}}
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">

    {{-- Подключаем стили секций/блоков, которые используются на данной странице --}}
    <link href="{{ mix('/css/sec_portfolio.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/sec_clients.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/sec_steps.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/sec_commerce.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/sec_raskhodi.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/sec_services.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/sec_advantages.css') }}" rel="stylesheet">
@endsection



@section('content')
    {{-- Подключаем только те модальные окна,
    которые будут использоваться на данной странице --}}
    @include('modals.compred')

    <div class="page-index">

        {{-- главный слайдер + форма захвата --}}
        <div class="main-slide">
            <div class="container">

                <div class="main-slide__wrap">

                    <div class="main-slide__title main-title">
                        <h1 class="text-dark">{{ $page->h1 }} {{$domain->postfix3}}</h1>
                    </div>
                    <ul class="main-slide__offer d-none d-md-block">
                        <li class="main-slide__offer__item">
                            <i class="svg-icon icon-tick"></i><p>Вы оставляете заявку</p>
                        </li><li class="main-slide__offer__item">
                            <i class="svg-icon icon-tick"></i><p>Мы бесплатно устанавливаем систему мониторинга на 1 ТС</p>
                        </li><li class="main-slide__offer__item">
                            <i class="svg-icon icon-tick"></i><p>Обучаем и консультируем по всем вопросам</p>
                        </li><li class="main-slide__offer__item">
                            <i class="svg-icon icon-tick"></i><p>Вы видите результат экономии, благодаря нашей системе</p>
                        </li>
                    </ul>

                </div>
                <div class="main-slide__bottom">
                    <div class="main-slide__desc">бесплатно на 7 дней</div>
                    <div class="main-slide__form form">

                        <form id="test_drive_form" class="ajax_form form__body row">
                            {{ csrf_field() }}
                            <div class="form__input input input_border-gray input_large">
                                <label class="input__title">Ваше имя</label>
                                <input type="text" class="input__wrap" name="name" placeholder="Иван">
                            </div>
                            <div class="form__input input input_border-gray input_large input_phone">
                                <label class="input__title">телефон</label>
                                <input type="text" class="input__wrap" name="phone" placeholder="Телефон" maxlength="18">
                            </div>

                            {{--указываем тип заявки--}}
                            <input type="hidden" name="type_order" value="TESTDRIVE">
                            {{--комментарий к заявке--}}
                            <input type="hidden" name="comment" value="{{ $page->h1 }}">
                            {{--указываем с какой страницы была вызвана форма--}}
                            <input type="hidden" name="url" value="{{$domain->domain}}.ros-telematika.test{{request()->getPathInfo()}}">

                            <div onclick="sendOrder('test_drive')"
                                 class="form__btn btn btn_bg-red btn_border-red btn_uppercase btn_large btn_animate">Попробовать</div>
                        </form>

                        <div class="form__foot">
                            <div class="form__policy policy">
                                <div id="result_send_order_test_drive" class="result_send_order"></div>
                                Нажимая кнопку «Попробовать», вы даете согласие на обработку персональных данных в соответствии с
                                <a class="locality modal-show"
                                   data-toggle="modal"
                                   data-target="#modal-policy">Политикой конфиденциальности</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>


        {{-- Инфо-блок - Спутниковая система Глонасс --}}
        @include('pages.inc.sec_advantages')

        {{-- Стоимость установки ГЛОНАСС. Готовые решения --}}
        @include('pages.inc.sec_services')



        {{-- Калькулятор -------------------------------------------------------------------}}
        <div class="block-calculator pb-5">
            <div class="container bg-success">
                <!--h2 class="text-center text-center pt-5 pb-3 m-0">Давайте рассчитаем эффективность внедрения наших решений?</h2-->
                   Здесь будет калькулятор

            </div>
        </div>


        {{-- Сокращение расходов и гибкая логистика --}}
        @include('pages.inc.sec_raskhodi')


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

        {{-- Примеры внедрения и отзывы --}}
        @include('pages.inc.sec_clients')

        {{-- Этапы работ --}}
        @include('pages.inc.sec_steps')

        {{-- Форма захвата - Получить коммерческое предложение --}}
        @include('pages.inc.sec_commerce')


    </div>
@endsection