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

    <!-- Вставляем мета тег для роботов -->
    @yield('meta_name_robots')

    <link href='{{ url('sitemap.xml') }}' rel='alternate' title='Sitemap' type='application/rss+xml'/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$page->title}} {{$domain->postfix1}}</title>

    <!-- Базовый шрифт FiraSans -->
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500&display=swap" rel="stylesheet">

    <!-- Базовые стили -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Стили структуры шаблона -->
    {{--<link href="{{ mix('/css/svg.css') }}" rel="stylesheet">            <!-- стили SVG иконок -->
    <link href="{{ mix('/css/up_menu.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/head.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/main_menu.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/footer.css') }}" rel="stylesheet">--}}

    {{-- стили модальных окон --}}
    <link href="{{ mix('/css/modal-base-form.css') }}" rel="stylesheet">



    {{--@stack('css')--}}

    <!-- Подгружаем стили текущей страницы -->
    @yield('to_header')

</head>
<body>
    <div id="app">
        {{-- мобильное меню ------------------------------------------}}
        @include('layouts.mobile_menu')
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

        {{-- подал страницы ------------------------------------------}}
        @include('layouts.footer')
    </div>





    <!-- Scripts ------------------------------------------------------------------------------------------------------>
    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        $(document).ready(function(){

            /**
             * Отправка днанных их всех форм на сервер
             * @param name_modal_order
             */
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

        });
    </script>

    <script>
        /**
         * Обработчик тематики модального окна по COMMPRED/Коммерческому предложению
         */

        $('#modal_compred').on('show.bs.modal', function ($event) {
            var button = $($event.relatedTarget) // Кнопка, что спровоцировала модальное окно
            var recipient = button.data('theme') // Извлечение информации из атрибутов кнопки data-theme
            var modal = $(this)
            modal.find('.modal-title-theme').text(recipient) // Вставляем атрибут data-theme в заголовок формы h3
            modal.find('.modal-title-theme').val(recipient) // Вставляем атрибут data-theme в скрытое поле формы input:comment
        });
    </script>


    <script>
        /**
         * Обработчик калькулятора на странице
         */

        var step=1; //номер текущего окна в форме

        $('#button23').click(function(){
            //убираем оформление прогресс-бара на прошлом шаге
            $(".calc_progress_step"+step+" .calc__progress__number").css({'color':'#dcdcdc', 'opacity':'0'});
            //скрываем старую форму
            $(".calc_body_step"+step).css({'display':'none'});

            //пошаговый переход на форме
            if ( step != 5 ) {
                step++; //прибавляем шаг

                //делаем новое оформление прогресс-бара на новом шаге
                $(".calc_progress_step"+step+" .calc__progress__line").css({'background-color':'#f93446'});
                $(".calc_progress_step"+step+" .calc__progress__number").css({'color':'#f93446', 'opacity':'1'});
                //показываем новую форму
                $(".calc_body_step"+step).css({'display':'block'});

            } else {
                step=1; //сбрасываем шаг
            }

            //$("#block444").html(step);

        });

        $('.ts__checkbox__box').click(function($event){
            event.html('ok');
        });

    </script>

</body>
</html>




















