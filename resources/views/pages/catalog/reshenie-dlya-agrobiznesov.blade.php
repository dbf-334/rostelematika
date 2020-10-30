@extends('layouts.base')


@section('meta_name_robots')
    <meta name="robots" content="index, follow"/>
@endsection


@section('to_header')
    <link href="{{ asset('/css/reshenie-dlya-agrobiznesov.css') }}" rel="stylesheet">

    <link href="{{ asset('/css/sec_main_slide.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_clients.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_reviews.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_steps.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_commerce.css') }}" rel="stylesheet">

@endsection


@section('to_footer')
    <script src="{{ asset('/js/circle_anim.js') }}"></script>

    <script>
        {{-- Меняем картинки в блоке / Инфа о кол-ве клиентов --}}
        $('#sec_clients .img1').attr('src', '/img/pages/reshenie-dlya-agrobiznesov/client_015.png');
        $('#sec_clients .img4').attr('src', '/img/pages/reshenie-dlya-agrobiznesov/client_017.png');
        $('#sec_clients .img5').attr('src', '/img/pages/reshenie-dlya-agrobiznesov/client_018.png');
    </script>
@endsection



@section('content')
    <div class="page-reshenie-dlya-agrobiznesov">

        {{-- главный слайдер + форма захвата --}}
        @include('pages.inc.sec_main_slide', [ 'img_slide'=>'slider-agro.jpg',
            'text_slide'=>["Отслеживание полевых работ на основе телематических данных",
            "Эффективное планирование и совершенствование процессов агробизнеса"] ])

        {{-- Из чего состоит решение --}}
        <div class="block-10 py-3">
            <div class="container">
                <div class="row h-auto">
                    <div class="card">
                        <div class="card-img">
                            <div class="img">
                                <img src="/img/pages/reshenie-dlya-agrobiznesov/topseo1.jpg" alt="">
                            </div>
                            <div class="text">Контроль спецтехники</div>
                        </div>
                        <div class="card-body">
                            Клиент получает ясные данные о качестве и объеме полевых работ, а также о действиях сельхозтехники и механизаторов
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img">
                            <div class="img">
                                <img src="/img/pages/reshenie-dlya-agrobiznesov/topseo2.jpg" alt="">
                            </div>
                            <div class="text">Достоверность данных</div>
                        </div>
                        <div class="card-body">
                            Точный подсчет площади обработки полей сложных форм, учет перекрытий, пропусков и некультивируемые
                            зоны внутри полей
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img">
                            <div class="img">
                                <img src="/img/pages/reshenie-dlya-agrobiznesov/topseo3.jpg" alt="">
                            </div>
                            <div class="text">Автоматизация учета</div>
                        </div>
                        <div class="card-body">
                            Приложение рассчитывает площади обработок полей, затраты топлива, пробег, скорость и другие
                            параметры, экономя время сотрудников.
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img">
                            <div class="img">
                                <img src="/img/pages/reshenie-dlya-agrobiznesov/topseo4.jpg" alt="">
                            </div>
                            <div class="text">Интеграция через API</div>
                        </div>
                        <div class="card-body">
                            Передавайте и используйте данные в 1С и других учетных системах при помощи технологии API
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="block-7 py-3 my-5">
            <div class="container">
                <h2 class="text-center">Как это работает?</h2>
                <div class="row h-auto mb-5">

                    <div class="card">
                        <div class="card-img circle-container">
                            <div class="circlestat" data-dimension="70" data-text="01" data-width="4" data-fontsize="28"
                                 data-percent="70" data-fgcolor="#01aef2" data-bgcolor="#ddd" data-fill="#fff"></div>
                        </div>
                        <div class="card-body">
                            Импортируйте геозоны в качестве полей; настраивайте прицепы, водителей и объекты
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img circle-container">
                            <div class="circlestat" data-dimension="70" data-text="02" data-width="4" data-fontsize="28"
                                 data-percent="45" data-fgcolor="#01aef2" data-bgcolor="#ddd" data-fill="#fff"></div>
                        </div>
                        <div class="card-body">
                            Заполняйте справочники культур, операций и севооборота
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img circle-container">
                            <div class="circlestat" data-dimension="70" data-text="03" data-width="4" data-fontsize="28"
                                 data-percent="60" data-fgcolor="#01aef2" data-bgcolor="#ddd" data-fill="#fff"></div>
                        </div>
                        <div class="card-body">
                            Принимайте или отклоняйте найденные обработки полей
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img circle-container">
                            <div class="circlestat" data-dimension="70" data-text="04" data-width="4" data-fontsize="28"
                                 data-percent="93" data-fgcolor="#01aef2" data-bgcolor="#ddd" data-fill="#fff"></div>
                        </div>
                        <div class="card-body">
                            Генерируйте и экспортируйте отчеты по полевым работам
                        </div>
                    </div>

                </div>
            </div>
        </div>


        {{-- Блок данных --}}
        <div class="block-2 pb-5">
            <h2 class="text-center">Функциональные возможности</h2>

            <div class="row h-auto">
                <div class="card equipment"></div>

                <div class="card bodytext">
                    <div class="card-body">

                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="heading1">
                                    <button class="btn" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        Поля и культуры
                                        <div class="ml-auto"><i class="svg-icon icon-down-arrow"></i></div>
                                    </button>
                                </div>

                                <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Импорт или создание полей. Удобный контроль севооборота, список культур и подробная
                                            история операций по каждому полю.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="heading2">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse2"
                                                aria-expanded="false" aria-controls="collapse2">
                                            Обработки полей
                                            <div class="ml-auto"><i class="svg-icon icon-down-arrow"></i></div>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Поиск новых обработок полей. Опции редактирования и подтверждения обработок перед добавлением в базу.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="heading3">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse3"
                                                aria-expanded="false" aria-controls="collapse3">
                                            Спецтехника и водители
                                            <div class="ml-auto"><i class="svg-icon icon-down-arrow"></i></div>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Использование водителей, объектов и прицепов, созданных в Wialon. Расчет показателей
                                            топлива, скорости, пробега для каждой обработки поля.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="heading4">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse4"
                                                aria-expanded="false" aria-controls="collapse4">
                                            Отчеты
                                            <div class="ml-auto"><i class="svg-icon icon-down-arrow"></i></div>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Простая генерация отчетов по водителям, полям, операциям и объектам. Импорт отчетов в csv.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="block-3 py-3">
            <div class="container">
                <div class="title text-center mx-auto">
                    <h2>Контроль всего цикла расхода топлива от АЗС до полевой техники</h2>
                </div>

                <div class="row h-auto">
                    <div class="card">
                        <div class="card-img pic1"></div>
                        <div class="card-body">
                            АЗС - объем хранимих нефтепродуктов на нефтебазе, отпуск и прием
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img pic2"></div>
                        <div class="card-body">
                            Топливозаправщик - контроль приема топлива, хранения и отпуска
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img pic3"></div>
                        <div class="card-body">
                            Полевая техника - контроль приема топлива с АЗС или топливозаправщика, расхода и сливов
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- Из чего состоит решение --}}
        <div class="block-9 py-3">
            <div class="container">
                <h2 class="text-center">Для кого это решение?</h2>
                <div class="row h-auto">
                    <div class="card">
                        <div class="card-img pic1"></div>
                        <div class="card-body">
                            <h5 class="pb-2">Диспетчер</h5>
                            Ежедневный контроль качества и объема работ сельскохозяйственной техники Обработка отчетов о выполненных работах
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img pic2"></div>
                        <div class="card-body">
                            <h5 class="pb-2">Агроном</h5>
                            Контроль посевов и операций над ними
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img pic3"></div>
                        <div class="card-body">
                            <h5 class="pb-2">Бухгалтер</h5>
                            Работа с данными полученными из системы мониторинга, в 1С или иную систему учета
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img pic4"></div>
                        <div class="card-body">
                            <h5 class="pb-2">Руководитель</h5>
                            Принятие управленческих решений на основе достоверной информации. Планирование и совершенствование процессов агробизнеса
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="block-5 py-3">
            <div class="container">
                <h2>Примеры внедрения</h2>
                <ul>
                    <li><i class="svg-icon icon-tick"></i>Сверка расходов на ГСМ с прошлым годом при одинаковых полевых работах</li>
                    <li><i class="svg-icon icon-tick"></i>Привлечение водителя к дисциплинарной ответственности за пропуски и перекрытия на полях</li>
                    <li><i class="svg-icon icon-tick"></i>Автоматическое заполнение путевых листов</li>
                    <li><i class="svg-icon icon-tick"></i>Реализация тарифицирования полевых работ для расчета заработной платы</li>
                    <li><i class="svg-icon icon-tick"></i>Расчет оплаты за аренду сельхозтехники</li>
                    <li><i class="svg-icon icon-tick"></i>Расчет сроков планового ТО сельхозтехники</li>
                    <li><i class="svg-icon icon-tick"></i>Расчет стоимости 1 км пути или 1 Га обрабатываемой площади</li>
                </ul>
            </div>
        </div>



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