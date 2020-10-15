@extends('layouts.base')


@section('meta_name_robots')
    <meta name="robots" content="index, follow"/>
@endsection


@section('to_header')
    <link href="{{ asset('css/toplivozapravshhiki.css') }}" rel="stylesheet">

    <link href="{{ mix('css/sec_main_slide.css') }}" rel="stylesheet">
    <link href="{{ mix('css/sec_advantages.css') }}" rel="stylesheet">
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
        $('#sec_clients .img3').attr('src', '/img/pages/toplivozapravshhiki/client_015.png');
        $('#sec_clients .img4').attr('src', '/img/pages/toplivozapravshhiki/client_017.png');
        $('#sec_clients .img5').attr('src', '/img/pages/toplivozapravshhiki/client_018.png');
        $('#sec_clients .img6').attr('src', '/img/pages/toplivozapravshhiki/client_022.png');
    </script>
@endsection



@section('content')
    <div class="page-toplivozapravshhiki">

        {{-- главный слайдер + форма захвата --}}
        @include('pages.inc.sec_main_slide', [ 'img_slide'=>'slider-bensovoz.jpg',
            'text_slide'=>["Контроль местоположения транспорта в режиме реального времени",
                "Контроль и  учет бензина, поступающего в цистерну и топливный бак"] ])


        {{-- Блок данных --}}
        <div class="block-5 py-3 mt-5">
            <div class="container">
                <p>Бензовозы и топливозаправщики являются наиболее опасной категорией грузового транспорта. Правильно организовать
                    работу таких машин и избежать махинаций со стороны водителей поможет установка спутниковой системы мониторинга.</p>
                <h2>Как происходит контроль топливозаправщика</h2>
                <p>Многим владельцам транспортных компаний хорошо знакома проблема халатного отношения сотрудников к своим обязательствам.
                    Недобросовестные водители нарушают скоростной режим и используют машины в личных целях, что только увеличивает
                    опасность транспортировки. Кроме того, существует множество способов хищения топлива, которыми некоторые сотрудники
                    успешно пользуются. В результате предприятиям приходится терпеть огромные убытки.</p>
                <p>Чтобы не допустить подобных ситуаций, достаточно установить на машину систему Глонасс или GPS контроль бензовоза. Она позволит:</p>
                <ul>
                    <li><i class="svg-icon icon-tick"></i>Отслеживать маршруты и скорость движение транспортного средства;</li>
                    <li><i class="svg-icon icon-tick"></i>Контролировать и вести учет бензина, поступающего в цистерну и топливный бак;</li>
                    <li><i class="svg-icon icon-tick"></i>Вести контроль отгрузок топлива.</li>
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
                <p>Основной элемент системы – это GPS трекер, отслеживающий по спутникам время и положение транспорта. Помимо
                    этого, на машину устанавливается датчик уровня топлива, который позволяет определять местоположение заправок
                    и сливов. Также могут быть установлены дополнительные датчики.</p>
                <p>Вся собранная информация накапливается на внутреннем носителе и периодически отправляется на серверы. Пользователь
                    может следить за этими данными через личный кабинет, а также получать сообщения по электронной почте или через СМС.</p>
                <h2>Способы хищений топлива</h2>
                <p>Недобросовестные водители используют множество способов хищения топлива - от самых простых до сложных и изощренных.
                    Некоторые сотрудники просто недоливают цистерну, а некоторые - заливают топливо повышенной температуры. Кроме того,
                    часто встречаются сливы из топливного бака и использование заправочной карты в личных целях.</p>
                <p>Мониторинг бензовозов позволяет решить все эти проблемы. Обмануть оборудование крайне сложно, ведь производители
                    предусмотрели все основные способы мошенничества. Дополнительно приборы оборудованы пломбами.</p>
            </div>
        </div>


        {{-- Блок данных --}}
        <div class="block-2">
            <div class="row h-auto">
                <div class="card equipment"></div>

                <div class="card bodytext">
                    <div class="card-body">
                        <h2>Для кого подходит данная система</h2>
                        <p>Системы мониторинга устанавливаются на многих видах транспорта. Они эффективно применяются в сельском
                            хозяйстве, на спецтехнике, такси и коммерческих авто. Однако наибольшее распространение они получили
                            на грузовом транспорте. В частности, на бензовозах и топливозаправщиках.</p>
                        <p>Компания Ростелематика готова произвести монтаж систем, специально предназначенных для установки на
                            цистерны. Наши устройства передают данные с минимальной погрешностью и полностью безопасны в использовании.</p>
                        <p>Экономия от установки оборудования составляет около 5%. А в отдельных случаях это значение может
                            достигать 50%. Поэтому монтаж окупается уже после нескольких месяцев эксплуатации.</p>
                    </div>
                </div>
            </div>
        </div>


        {{-- Из чего состоит решение --}}
        <div class="block-4 py-5">
            <div class="container">
                <div class="row h-auto">
                    <div class="card bodytext">
                        <h3>Оборудование для мониторинга бензовозов и топливозаправщиков</h3>
                        <p>Также на машине могут быть установлены камеры видеонаблюдения, которые также будут выводить изображение
                            в режиме реального времени.</p>
                        <p>Но для того, чтобы система работала хорошо, необходимо правильно ее смонтировать. В Ставрополе и
                            Ставропольском крае владельцы транспортных компаний могут обратиться в компанию Ростелематика.</p>
                    </div>

                    <div class="card block-box">
                        <div class="row h-auto">
                            <div class="card element">
                                <div class="card-img">
                                    <img src="/img/pages/toplivozapravshhiki/solution_1.png" alt="">
                                </div>
                                <div class="card-body">
                                    GPS/ГЛОНАСС трекер
                                </div>
                            </div>

                            <div class="card element">
                                <div class="card-img">
                                    <img src="/img/pages/toplivozapravshhiki/solution_2.png" alt="">
                                </div>
                                <div class="card-body">
                                    Датчик уровня топлива
                                </div>
                            </div>

                            <div class="card element">
                                <div class="card-img">
                                    <img src="/img/pages/toplivozapravshhiki/solution_3.png" alt="">
                                </div>
                                <div class="card-body">
                                    Датчик зажигания
                                </div>
                            </div>

                            <div class="card element">
                                <div class="card-img">
                                    <img src="/img/pages/toplivozapravshhiki/solution_4.png" alt="">
                                </div>
                                <div class="card-body">
                                    Счетчик отгрузки топлива
                                </div>
                            </div>

                            <div class="card element">
                                <div class="card-img">
                                    <img src="/img/pages/toplivozapravshhiki/solution_5.png" alt="">
                                </div>
                                <div class="card-body">
                                    Электронная пломба
                                </div>
                            </div>

                            <div class="card element">
                                <div class="card-img">
                                    <img src="/img/pages/toplivozapravshhiki/solution_6.png" alt="">
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


        {{-- Сферы применения --}}
        <div class="block-5 pb-3">
            <div class="container">
                <p>Мы специализируемся на установке систем мониторинга и контроля топлива на различные виды транспорта. Качество
                    наших услуг уже успели оценить более 3000 клиентов.</p>
                <p>Для того, чтобы провести монтаж, достаточно оставить заявку по телефону или на сайте. Наши специалисты свяжутся
                    с Вами в кротчайшие сроки для уточнения деталей проведения работ. Далее необходимо будет оформить документацию
                    и оплатить услуги компании.</p>
                <p>Наши специалисты выезжают на объекты по всей территории Ставропольского края. Они не только готовы провести
                    монтаж оборудования, но и могут обучить клиента использованию системы.</p>
                <p>На все устройства компания Ростелематика предоставляет пожизненную гарантию. Также мы предоставляем клиенту
                    техническую поддержку и обслуживание: контроль отпуска топлива, датчик уровня топлива и других элементов
                    системы. Поэтому заказчик может быть уверен в исправности и точности всех устройств.</p>
                <p>Мы предлагаем выгодные тарифы, а также удобные способы оплаты.</p>
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


