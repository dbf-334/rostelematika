@extends('layouts.base')


@section('to_header')
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
@endsection



@section('content')
    <div class="page-index">

        {{-- главный слайдер + форма захвата --}}
        <div class="main-slide">
            <div class="container case">

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

                        <form action="" method="post" class="ajax_form form__body row">
                            <div class="form__input input input_border-gray input_large">
                                <label class="input__title" for="input-1">Ваше имя</label>
                                <input type="text" class="input__wrap" name="name" placeholder="Иван" id="input-1">
                            </div>
                            <div class="form__input input input_border-gray input_large input_phone">
                                <label class="input__title" for="input-2">телефон</label>
                                <input type="tel" class="input__wrap" name="tel" placeholder="+7 (   )" maxlength="18" id="input-2">
                            </div>
                            <button class="form__btn btn btn_bg-red btn_border-red btn_uppercase btn_large btn_animate">Попробовать</button>


                            <input type="hidden" name="af_action" value="c869cdf324ff15410ed451a08f993359">
                        </form>
                        <div class="form__foot">
                            <div class="form__policy policy">
                                Нажимая кнопку «Отправить», вы даете согласие на обработку персональных данных в соответствии с
                                <!--a data-fancybox="" data-src="#popup-policy" href="javascript:;">Политикой конфиденциальности</a-->
                                <a class="locality modal-show"
                                   data-toggle="modal"
                                   data-target="#modal-policy">
                                    Политикой конфиденциальности
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        {{-- 1-блок -------------------------------------------------------------------}}
        <div class="block-1">
        <div class="row w-100 ">

            <div class="b1-image"></div>

            <div class="card b1-text">

                    <div class="card">
                        <div class="card-body">
                            <h2>Спутниковая система Глонасс мониторинга позовляет в режиме реального времени получать
                                полную информацию о работе корпоративного парка ТС.</h2>
                            <p>Она одинаково эффективно применяется на легковых и грузовых автомобилях. автобусах. спецтехнике,
                                водном и воздушном транспорте. При небольшой цене ГЛОНАСС, установка оборудования позволяет
                                оптимизировать расходы компании.</p>
                        </div>
                    </div>

                    <div class="card b1-icon">
                        <div class="card-body">
                            <i class="svg-icon icon-certificate"></i>
                            <div>Пожизненная гарантия на оборудование</div>
                        </div>
                    </div>
                    <div class="card b1-icon">
                        <div class="card-body">
                            <i class="svg-icon icon-search-user"></i>
                            <div>Максимально прозрачный контроль</div>
                        </div>
                    </div>
                    <div class="card b1-icon">
                        <div class="card-body">
                            <i class="svg-icon icon-time-24-7"></i>
                            <div>Сервис 48 часов. Все вопросы решаем за 2 суток</div>
                        </div>
                    </div>
                    <div class="card b1-icon">
                        <div class="card-body">
                            <i class="svg-icon icon-finance"></i>
                            <div>Экономите &gt;5%  на содержание ТС или мы вернем деньги</div>
                        </div>
                    </div>

            </div>
        </div>
        </div>

        {{-- 2-блок -------------------------------------------------------------------}}
        <div class="block-2 pb-5">
            <div class="container">
                <h2 class="text-center text-center pt-5 pb-3 m-0">Стоимость установки ГЛОНАСС. <br>Готовые решения</h2>

                <div class="row w-100">

                    <div class="b2-group-box">
                        <div class="card b2-box-1">
                            <div class="card-img" style="background-image: url('/img/main/1.jpg');"></div>
                            <div class="card-body">
                                <div class="b2-head">
                                    <a href="/catalog/gruzoviki.html" title="Грузовики">Грузовой транспорт</a>
                                </div>
                                <p>Получайте информацию о местоположении и скорости движения автомобиля.</p>
                                <div class="i-mid">
                                    <a href="/catalog/gruzoviki.html"
                                       class="catalog__btn btn btn_border-gray btn_hover-bg-blue btn_small btn_italic">Подробнее</a>
                                    <a data-fancybox="" data-src="#popup-kp" href="javascript:;"
                                       class="catalog__btn btn btn_bg-red btn_border-red btn_italic  btn_small">Получить КП</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="b2-group-box">
                        <div class="card b2-box-2">
                            <div class="card-img" style="background-image: url('/img/main/2.jpg');"></div>
                            <div class="card-body">
                                <div class="b2-head">
                                    <a href="/catalog/specz-texnika.html" title="Спец. техника">Спец. техника</a>
                                </div>
                                <p>Узнайте больше о работе машины и установленного на ней оборудования.</p>
                                <div class="i-mid">
                                    <a href="/catalog/specz-texnika.html"
                                       class="b2-small catalog__btn btn btn_border-gray btn_hover-bg-blue btn_small btn_italic">...</a>
                                    <a data-fancybox="" data-src="#popup-kp" href="javascript:;"
                                       class="catalog__btn btn btn_bg-red btn_border-red btn_italic  btn_small">Получить КП</a>
                                </div>
                            </div>
                        </div>

                        <div class="card b2-box-2">
                            <div class="card-img" style="background-image: url('/img/main/3.jpg');"></div>
                            <div class="card-body">
                                <div class="b2-head">
                                    <a href="/catalog/toplivozapravshhiki.html" title="Топливозаправщики">Топливозаправщики</a>
                                </div>
                                <p>Получайте точные данные об уровне топлива как в бензобаке, так и в цистерне.</p>
                                <div class="i-mid">
                                    <a href="/catalog/toplivozapravshhiki.html"
                                       class="b2-small catalog__btn btn btn_border-gray btn_hover-bg-blue btn_small btn_italic">...</a>
                                    <a data-fancybox="" data-src="#popup-kp" href="javascript:;"
                                       class="catalog__btn btn btn_bg-red btn_border-red btn_italic  btn_small">Получить КП</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="b2-group-box">
                        <div class="card b2-box-1">
                            <div class="card-img" style="background-image: url('/img/main/4.jpg');"></div>
                            <div class="card-body">
                                <div class="b2-head">
                                    <a href="/catalog/traktoryi-i-sx-texnika.html" title="Сельхоз техника">Сельхоз техника</a>
                                </div>
                                <p>Сократите расходы, установив на ТС функцию параллельного вождения.</p>
                                <div class="i-mid">
                                    <a href="/catalog/traktoryi-i-sx-texnika.html"
                                       class="catalog__btn btn btn_border-gray btn_hover-bg-blue btn_small btn_italic">Подробнее</a>
                                    <a data-fancybox="" data-src="#popup-kp" href="javascript:;"
                                       class="catalog__btn btn btn_bg-red btn_border-red btn_italic  btn_small">Получить КП</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="b2-group-box">
                        <div class="card b2-box-1">
                            <div class="card-img" style="background-image: url('/img/main/5.jpg');"></div>
                            <div class="card-body">
                                <div class="b2-head">
                                    <a href="/catalog/vozdushnyij-transport.html" title="Воздушный транспорт">Воздушный транспорт</a>
                                </div>
                                <p>Узнайте о маршрутах движения самолетов и вертолетов.</p>
                                <div class="i-mid">
                                    <a href="/catalog/vozdushnyij-transport.html"
                                       class="catalog__btn btn btn_border-gray btn_hover-bg-blue btn_small btn_italic">Подробнее</a>
                                    <a data-fancybox="" data-src="#popup-kp" href="javascript:;"
                                       class="catalog__btn btn btn_bg-red btn_border-red btn_italic  btn_small">Получить КП</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="b2-group-box">
                        <div class="card b2-box-2">
                            <div class="card-img" style="background-image: url('/img/main/6.jpg');"></div>
                            <div class="card-body">
                                <div class="b2-head">
                                    <a href="/catalog/taksi.html" title="Такси">Такси</a>
                                </div>
                                <p>Убедитесь, что водители соблюдают скоростной режим и используют ТС по назначению. </p>
                                <div class="i-mid">
                                    <a href="/catalog/taksi.html"
                                       class="b2-small catalog__btn btn btn_border-gray btn_hover-bg-blue btn_small btn_italic">...</a>
                                    <a data-fancybox="" data-src="#popup-kp" href="javascript:;"
                                       class="catalog__btn btn btn_bg-red btn_border-red btn_italic  btn_small">Получить КП</a>
                                </div>
                            </div>
                        </div>

                        <div class="card b2-box-2">
                            <div class="card-img" style="background-image: url('/img/main/7.jpg');"></div>
                            <div class="card-body">
                                <div class="b2-head">
                                    <a href="/catalog/poezda.html" title="Поезда">Поезда</a>
                                </div>
                                <p></p>
                                <div class="i-mid">
                                    <a href="/catalog/poezda.html"
                                       class="b2-small catalog__btn btn btn_border-gray btn_hover-bg-blue btn_small btn_italic">...</a>
                                    <a data-fancybox="" data-src="#popup-kp" href="javascript:;"
                                       class="catalog__btn btn btn_bg-red btn_border-red btn_italic  btn_small">Получить КП</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="b2-group-box">
                        <div class="card b2-box-1">
                            <div class="card-img" style="background-image: url('/img/main/8.jpg');"></div>
                            <div class="card-body">
                                <div class="b2-head">
                                    <a href="/catalog/legkovoj-transport.html" title="Легковой транспорт">Легковой транспорт</a>
                                </div>
                                <p>Сократите расходы на обслуживание легкового автопарка. </p>
                                <div class="i-mid">
                                    <a href="/catalog/legkovoj-transport.html"
                                       class="catalog__btn btn btn_border-gray btn_hover-bg-blue btn_small btn_italic">Подробнее</a>
                                    <a data-fancybox="" data-src="#popup-kp" href="javascript:;"
                                       class="catalog__btn btn btn_bg-red btn_border-red btn_italic  btn_small">Получить КП</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


        {{-- Калькулятор -------------------------------------------------------------------}}
        <div class="block-calculator pb-5">
            <div class="container">
                <!--h2 class="text-center text-center pt-5 pb-3 m-0">Давайте рассчитаем эффективность внедрения наших решений?</h2-->

                <div id="calc">
                    <!--example-component>*</example-component-->
                    <vue-calc>ops</vue-calc>
                </div>



            </div>
        </div>



        <div class="row">
            <h2>qwer</h2>
        </div>

    </div>
@endsection