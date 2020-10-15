@extends('layouts.base')


@section('meta_name_robots')
    <meta name="robots" content="index, follow"/>
@endsection


@section('to_header')
    <link href="{{ asset('css/services.css') }}" rel="stylesheet">
@endsection



@section('content')
    {{-- Подключаем только те модальные окна,
    которые будут использоваться на данной странице --}}
    @include('modals.compred')

    <div class="page-services">
        <div class="container">

            {{--указатель нахождения на странице--}}
            <div class="w-100 text-center py-4">
                <h1 class="text-dark">{{ $page->h1 }}</h1>
            </div>

            <div class="row h-auto pb-5">
                <div class="card">
                    <div class="card-img">
                        <img src="/img/pages/services/services_1.jpg" alt="">
                    </div>
                    <div class="card-body">
                        <h3>Мониторинг транспорта</h3>
                        <p>
                            Система мониторинга транспорта позволит предотвратить неэффективное и неправомерное использование
                            транспортного средства, а также предоставит возможность отслеживания важных рабочих параметров
                            транспорта. В составе системы мониторинга транспорта используется высокоточное измерительное
                            оборудование, в том числе GPS и ГЛОНАСС-антенны, датчики и трекер.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="/services/monitoring-transporta.html"
                           class="catalog__btn btn btn_border-gray btn_hover-bg-blue btn_small btn_italic">Подробнее</a>
                        <a class="catalog__btn btn btn_bg-red btn_border-red btn_italic btn_small"
                           data-theme="Мониторинг транспорта"
                           data-toggle="modal"
                           data-target="#modal_compred">
                            Получить КП
                        </a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img">
                        <img src="/img/pages/services/services_2.jpg" alt="">
                    </div>
                    <div class="card-body">
                        <h3>Контроль расхода топлива</h3>
                        <p>
                            Система контроля расхода топлива позволит эффективно контролировать количество топлива в баке Вашего ТС,
                            следить за его расходом, предотвратить нерациональное использование горючего, а также неправомерные действия
                            водителя в виде "слива" топлива. Гарантируется высокий уровень точности измерений, а также безопасная и
                            долгосрочная работа оборудования.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="/services/kontrol-rasxoda-topliva.html"
                           class="catalog__btn btn btn_border-gray btn_hover-bg-blue btn_small btn_italic">Подробнее</a>
                        <a class="catalog__btn btn btn_bg-red btn_border-red btn_italic btn_small"
                           data-theme="Контроль расхода топлива"
                           data-toggle="modal"
                           data-target="#modal_compred">
                            Получить КП
                        </a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img">
                        <img src="/img/pages/services/services_3.jpg" alt="">
                    </div>
                    <div class="card-body">
                        <h3>Системы видеонаблюдения для транспорта</h3>
                        <p>
                            Система видеонаблюдения для транспорта существенно повысит уровень безопасности и дисциплины,
                            предотвратит слив топлива из бака, пресечет недобросовестное исполнение должностных обязанностей
                            водителем, воровство транспортируемого груза, нерациональное использование транспортного средства
                            (например, в личных целях). Гарантируется высокий уровень качества изображения и соблюдение всех прав
                            законодательства.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="/services/sistemyi-videonablyudeniya-dlya-transporta.html"
                           class="catalog__btn btn btn_border-gray btn_hover-bg-blue btn_small btn_italic">Подробнее</a>
                        <a class="catalog__btn btn btn_bg-red btn_border-red btn_italic btn_small"
                           data-theme="Системы видеонаблюдения"
                           data-toggle="modal"
                           data-target="#modal_compred">
                            Получить КП
                        </a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img">
                        <img src="/img/pages/services/services_4.jpg" alt="">
                    </div>
                    <div class="card-body">
                        <h3>Курсоуказатели</h3>
                        <p>
                            Данное оборудование позволяет создать комфортные условия работы на сельскохозяйственной технике
                            в условиях недостаточной видимости, а также оно повышает эффективность использования ТС. Использование
                            курсоуказателей способствует значительному уменьшению расхода удобрений, ГСМ, а также время проведения
                            работ. Установка такого оборудования является экономически выгодным решением.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="/services/kursoukazateli/"
                           class="catalog__btn btn btn_border-gray btn_hover-bg-blue btn_small btn_italic">Подробнее</a>
                        <a class="catalog__btn btn btn_bg-red btn_border-red btn_italic btn_small"
                           data-theme="Курсоуказатели"
                           data-toggle="modal"
                           data-target="#modal_compred">
                            Получить КП
                        </a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img">
                        <img src="/img/pages/services/services_5.jpg" alt="">
                    </div>
                    <div class="card-body">
                        <h3>Обслуживание систем</h3>
                        <p>
                            Если Вы не довольны результатом системы, Вы не можете грамотно настроить работу, исходя из Ваших
                            требований, хотите получить еще большую экономическую выгоду, то рекомендуем воспользоваться услугой
                            "обслуживание систем" – мониторинга, контроля расхода топлива, видеонаблюдения и других.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="/services/obsluzhivanie-sistem.html"
                           class="catalog__btn btn btn_border-gray btn_hover-bg-blue btn_small btn_italic">Подробнее</a>
                        <a class="catalog__btn btn btn_bg-red btn_border-red btn_italic btn_small"
                           data-theme="Обслуживание систем"
                           data-toggle="modal"
                           data-target="#modal_compred">
                            Получить КП
                        </a>
                    </div>
                </div>

            </div>


        </div>
    </div>
@endsection