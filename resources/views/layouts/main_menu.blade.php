
{{--главное меню для больших экранов (серая полоска меню) d-none d-lg-block --}}
<div class="w-100 main-menu ">
<div class="container">

    <nav class="navbar navbar-expand-lg navbar-inverse bg-inverse">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1"
                aria-expanded="false" aria-label="Toggle navigation">

            <i class="svg-icon icon-menu"></i>
        </button>



        <div class="collapse navbar-collapse" id="navbar1">

            <ul class="navbar-nav mr-auto">

                {{--ГОРОДА (для перехода по ним в мобильной версии) --------------------------------------------------}}
                {{--<div class="d-block d-lg-none">
                    <li class="nav-item bord dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="select_domains" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <small>Выбрать город:</small><br>
                            <span class="text-warning">{{$domain->name}}</span>
                        </a>
                        <div class="dropdown-menu bg-white text-dark" aria-labelledby="select_domains">
                            <!-- формируем список городов -->
                            @foreach(\App\Models\Domain::orderBy('name', 'asc')->get() as $domain_item)
                                <a class="dropdown-item"  href="//{{$domain_item->domain}}.ros-telematika.test{{request()->getPathInfo()}}">
                                    {{$domain_item->name}}
                                </a>
                            @endforeach
                        </div>
                    </li>
                </div>--}}

                {{--Главная----------------------------------------------------------------------------------------}}
                <li class="nav-item">
                    <a class="nav-link" href="/">Главная<span class="sr-only">(current)</span></a>
                </li>

                {{--Услуги-------------------------------------------------------------------------------------------}}
                <li class="nav-item bord dropdown">
                    <a class="nav-link dropdown-toggle" href="/services" id="menu_services" role="button" data-toggle="dropdown">
                        Услуги</a>
                    <div class="dropdown-menu bg-white text-dark" aria-labelledby="menu_services">
                        <a class="dropdown-item"  href="/services">Все услуги</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item"  href="/services/monitoring-transporta.html">Мониторинг транспорта</a>
                        <a class="dropdown-item"  href="/services/kontrol-rasxoda-topliva.html">Контроль расхода топлива</a>
                        <a class="dropdown-item"  href="/services/sistemyi-videonablyudeniya-dlya-transporta.html">Системы видеонаблюдения для транспорта</a>
                        <a class="dropdown-item"  href="/services/kursoukazateli/">Курсоуказатели</a>
                        <a class="dropdown-item"  href="/services/obsluzhivanie-sistem.html">Обслуживание систем</a>
                        <!--div class="dropdown-divider"></div-->

                    </div>
                </li>

                {{-- решения ---------------------------------------------------------------------------------}}
                <li class="nav-item bord dropdown">
                    <a class="nav-link dropdown-toggle" href="/catalog" id="menu_resheniya" role="button" data-toggle="dropdown">
                       Готовые решения «под ключ»</a>
                    <div class="dropdown-menu bg-white" aria-labelledby="menu_resheniya">
                        <a class="dropdown-item"  href="/catalog">Все решения</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item"  href="/catalog/legkovoj-transport.html">Легковой транспорт</a>
                        <a class="dropdown-item"  href="/catalog/gruzoviki.html">Грузовики</a>
                        <a class="dropdown-item"  href="/catalog/kontrol-temperatury-v-refrizheratore.html">Рефрижераторы</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item"  href="/catalog/traktoryi-i-sx-texnika.html">Тракторы и с/х техника</a>
                        <a class="dropdown-item"  href="/catalog/reshenie-dlya-agrobiznesov.html">Решение для агробизнеса</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item"  href="/catalog/taksi.html">Такси</a>
                        <a class="dropdown-item"  href="/catalog/monitoring-obshchestvennogo-transporta.html">Общественный транспорт</a>
                        <a class="dropdown-item"  href="/catalog/reshenie-dlya-marshrutnogo-transporta.html">Маршрутный транспорт</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item"  href="/catalog/specz-texnika.html">Спец. техника</a>
                        <a class="dropdown-item"  href="/catalog/toplivozapravshhiki.html">Топливозаправщики</a>
                        <a class="dropdown-item"  href="/catalog/monitoring-raboty-musorovozov.html">Мусоровозы</a>
                        <a class="dropdown-item"  href="/catalog/vozdushnyij-transport.html">Воздушный транспорт</a>
                        <a class="dropdown-item"  href="/catalog/poezda.html">Поезда</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item"  href="/catalog/personalnyii-monitoring.html">Персональный мониторинг</a>
                        <a class="dropdown-item"  href="/catalog/logisticheskoe-reshenie-logistics.html">Логистическое решение Logistics</a>

                    </div>
                </li>

                {{-- Оборудование ---------------------------------------------------------------------------------}}
                <li class="nav-item bord dropdown">
                    <a class="nav-link dropdown-toggle" href="/oborudovanie" id="menu_oborudovanie" role="button" data-toggle="dropdown">
                        Оборудование</a>
                    <div class="dropdown-menu bg-white" aria-labelledby="menu_oborudovanie">
                        <a class="dropdown-item"  href="/oborudovanie">Всё оборудование</a>
                        <div class="dropdown-divider"></div>
                        @foreach(DB::table('pages')->where('id_category','=',4)->where('url','<>','oborudovanie')->get() as $item)
                            <a class="dropdown-item" href="/{{$item->url}}">{{$item->h1}}</a>
                        @endforeach
                    </div>
                </li>

                {{-- О компании ---------------------------------------------------------------------------------}}
                <li class="nav-item">
                    <a class="nav-link" href="/about.html">О компании</a>
                </li>
                {{-- Контакты ---------------------------------------------------------------------------------}}
                <li class="nav-item">
                    <a class="nav-link" href="/contacts.html">Контакты</a>
                </li>


                {{--дополнительное меню--}}
                <div class="d-block d-lg-none">
                    <li class="nav-item">
                        <a class="nav-link" href="/price.html">Стоимость внедрения и срок</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/bye.html">Как купить?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/methods.html">Способы оплаты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/delivery.html">Доставка и установка</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/guarantees.html">Гарантии</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://hosting.wialon.com/" target="_blank">Вход для клиентов</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/mobilnyie-prilozheniya.html">Мобильное приложение</a>
                    </li>
                </div>

            </ul>
        </div>


    </nav>
</div>
</div>





