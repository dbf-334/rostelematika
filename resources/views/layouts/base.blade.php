<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{$page->description}} {{$domain->postfix2}}">
    <meta charset="utf-8">
    <meta name="author" content="Ростелематика | www.ros-telematika.ru">
    <meta name="app_domain" content="{{$domain->domain}}.ros-telematika.ru">
    <meta name="viewport" content="width=1000">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Вставляем мета тег для роботов --}}
    @yield('meta_name_robots')

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$page->title}} {{$domain->postfix1}}</title>

    {{-- Указываем файл карты-сайта для роботов --}}
    <link href='{{ url('sitemap.xml') }}' rel='alternate' title='Sitemap' type='application/rss+xml'/>

    {{-- Базовый шрифт FiraSans --}}
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500&display=swap" rel="stylesheet">

    {{-- Базовые стили для всех страниц --}}
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    {{-- Базовые стили модальных окон --}}
    <link href="{{ asset('/css/modal-base-form.css') }}" rel="stylesheet">



    {{--@stack('css')--}}

    <!-- Подгружаем стили текущей страницы -->
    @yield('to_header')

</head>
<body>
    <div id="app">
        {{-- верхнее меню ------------------------------------------}}
        @include('layouts.up_menu')
        {{-- заголовок страниц ------------------------------------------}}
        @include('layouts.head')
        {{-- основное меню ------------------------------------------}}
        @include('layouts.main_menu')


            @include('modals.all_city')
            @include('modals.policy')
            @include('modals.zakaz_ring')


        {{--вставляем тело страницы--}}
        @yield('content')

        {{-- подвал страницы ------------------------------------------}}
        @include('layouts.footer')
    </div>

    {{-- Scripts -----------------------------------------------------------------------------------------------------}}
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/widjet_bitrix.js') }}"></script> {{-- Код вставки Битрикс-виджета для онлайн чата --}}

    {{-- Скрипт счетчика Яндекс-Метрики.
    Использовать подключение скрипта только через шаблонизатор include, т.к. только там можно вставить номер "счетчика"
    из БД для текущего поддомена (в упаковщике mix.js подстановка не работает).--}}
    @include('pages.inc.sec_yandex_metrika')

    <!-- Подгружаем JS/JQuery текущей страницы -->
    @yield('to_footer')






    <script>
        /*** Отправка днанных их всех форм на сервер ***/
        function sendOrder(name_modal_order) {
            var data = $('#' + name_modal_order + '_form').serialize();

            jQuery.ajax({
                url: '/api/send_order',
                type: "POST",
                data: data,
                success: function (response) {
                    document.getElementById('result_send_order_' + name_modal_order).innerHTML = "Сообщение успешно отправлено...";
                    document.getElementById('result_send_order_' + name_modal_order).style.color = "#090";
                    $("#" + name_modal_order + "_form").find('input:text').val(''); //очищаем все поля у форм
                    $("#" + name_modal_order + "_form").find('textarea').val(''); //очищаем все поля у форм
                },
                error: function (error) { //Если ошибка
                    let msgs = error.responseJSON.errors;

                    for (let key in msgs) {
                        document.getElementById('result_send_order_' + name_modal_order).innerHTML = msgs[key][0];
                        document.getElementById('result_send_order_' + name_modal_order).style.color = "#f00";
                        break;
                    }
                }
            });
        }
    </script>

    <script>
        /*** Обработчик тематики модального окна по COMMPRED/Коммерческому предложению ***/
        $(document).ready(function () {
            $('#modal_compred').on('show.bs.modal', function ($event) {
                var button = $($event.relatedTarget) // Кнопка, что спровоцировала модальное окно
                var recipient = button.data('theme') // Извлечение информации из атрибутов кнопки data-theme
                var modal = $(this)
                modal.find('.modal-title-theme').text(recipient) // Вставляем атрибут data-theme в заголовок формы h3
                modal.find('.modal-title-theme').val(recipient) // Вставляем атрибут data-theme в скрытое поле формы input:comment
            });
        });
    </script>

    <script>
        /*** Обработчик тематики модального окна по BUY/Заявка на покупку ***/
        $(document).ready(function () {
            $('#modal_buy').on('show.bs.modal', function ($event) {
                var button = $($event.relatedTarget) // Кнопка, что спровоцировала модальное окно
                var recipient = button.data('theme') // Извлечение информации из атрибутов кнопки data-theme
                var modal = $(this)
                modal.find('.modal-title-theme').text(recipient) // Вставляем атрибут data-theme в заголовок формы h3
                modal.find('.modal-title-theme').val(recipient) // Вставляем атрибут data-theme в скрытое поле формы input:comment
            });
        });
    </script>


    <script>
        //отправка данных из формы Калькулятора --------------------------------------------------------
        function calcSendOrder(name_modal_order) {
            var temp_nofuel = '';

            if ( ( $('.calc_body_step1 input[name=calc_check_amount]:checked').val() == 4 ) ||
                ( $('.calc_body_step1 input[name=calc_check_amount]:checked').val() == 6 ) )
            {} else {
                temp_nofuel = ' | Стоимость решения без контроля топлива от: ' + $('.calc_rez_total_nofuel').html();
            }

            //пересобираем все данные
            $('.calc_rez_comment').html('Данные из формы калькулятора, выбраны параметры расчета => Категория ТС: ' +
                calc_data.type[ $('.calc_body_step1 input[name=calc_check_amount]:checked').val() ].name + ' | ' +
                'Количество ТС: ' + $('.calc_step2_count').val() + ' | ' +
                'Пробег в месяц, км: ' + $('.calc_step3_count').val() + ' | ' +
                'Стоимость литра топлива, руб: ' + $('.calc_step4_count').val() + ' | ' +
                'Тариф: ' + calc_data.tarif[ $('.calc_body_step5 input[name=calc_check_tarif]:checked').val() ].name + '-'
                + calc_data.tarif[ $('.calc_body_step5 input[name=calc_check_tarif]:checked').val() ].price + 'р. Результат расчета => ' +
                'Экономия за месяц: ' + $('.calc_rez_month').html() + ' | ' +
                'Экономия за год: ' + $('.calc_rez_year').html() + ' | ' +
                'Стоимость обслуживания: ' + $('.calc_rez_service').html() + ' | ' +
                'Стоимость решения с контролем топлива от: ' + $('.calc_rez_total').html() + temp_nofuel
            );

            //вызываем базовую функцию отправки данных из формы
            sendOrder(name_modal_order);
        }
    </script>

    <script>
        //хак для открытия модальных окон поверх других (Политика конф.) ----------------------------------------------
        $(document).ready(function () {
            /*var modal_lv = 0;
            $('.modal').on('shown.bs.modal', function (e) {
                $('.modal-backdrop:last').css('zIndex',1051+modal_lv);
                $(e.currentTarget).css('zIndex',1052+modal_lv);
                modal_lv++
            });

            $('.modal').on('hidden.bs.modal', function (e) {
                modal_lv--
            });*/

            $('.modal').on('shown.bs.modal', function () {
                $('body').addClass('modal-open');
                // BS adds some padding-right to acomodate the scrollbar at right
                $('body').removeAttr('style');
            });

            $(".modal [data-toggle='modal']").click(function(){
                $(this).closest(".modal").modal('hide');
            });
        });
    </script>

</body>
</html>




















