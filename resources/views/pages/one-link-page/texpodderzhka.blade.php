@extends('layouts.base')


@section('meta_name_robots')
    <meta name="robots" content="index, follow"/>
@endsection


@section('to_header')
    <link href="{{ asset('/css/texpodderzhka.css') }}" rel="stylesheet">

    <link href="{{ asset('/css/sec_clients.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_reviews.css') }}" rel="stylesheet">

@endsection


@section('to_footer')


    <script>
        {{-- Меняем картинки в блоке / Инфа о кол-ве клиентов --}}
        $('#sec_clients .img3').attr('src', '/img/pages/texpodderzhka/client_013.png');
        $('#sec_clients .img5').attr('src', '/img/pages/texpodderzhka/client_015.png');
        $('#sec_clients .img6').attr('src', '/img/pages/texpodderzhka/client_022.png');
    </script>
@endsection



@section('content')
    {{-- Подключаем только те модальные окна,
    которые будут использоваться на данной странице --}}
    @include('modals.boss_ring')

    <div class="page-texpodderzhka">


        <div class="container">
            {{--указатель нахождения на странице--}}
            <div class="w-100 text-left pt-5 pb-2">
                <h1 class="text-dark" style="font-size: 30px;">{{ $page->h1 }}</h1>
            </div>
        </div>

        {{-- Блок данных --}}
        <div class="block-1 pb-3">
            <div class="row h-auto">
                <div class="card bodytext">
                    <div class="card-body">
                        <p>Всем клиентам использующим Виалон, доступно бесплатное многоязычное приложение для Android и iOs устройств.
                            Мобильная версия Wialon позволяет работать со списком объектов мониторинга, обеспечивая оперативное получение
                            важнейшей информации по всем Вашим транспортным средствам в режиме реального времени.</p>
                        <p>Благодаря удобной навигации и дружелюбному интерфейсу пользователи без труда освоят функционал мобильной
                            версии Виалон, адаптированной под смартфоны и планшеты.</p>
                        <p><img src="/img/pages/texpodderzhka/wigin-hosting.png" alt=""></p>
                    </div>
                </div>

                <div class="card laptop">
                    <div class="card-img">
                        <img src="/img/pages/texpodderzhka/apps.png" alt="">
                    </div>
                    <div class="card-body">
                        <div class="footer__apps">
                            <a href="https://play.google.com/store/apps/details?id=com.gurtam.wialon_client&amp;hl=ru/ " target="_blank" class="footer__app">
                                <img src="/img/main/google-play.png" alt="">
                            </a>
                            <a href="https://itunes.apple.com/ru/app/wialon/id960699792?mt=8/" target="_blank" class="footer__app">
                                <img src="/img/main/app-store.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Блок данных --}}
        <div class="block-2">
            <div class="row h-auto">
                <div class="card equipment"></div>

                <div class="card bodytext">
                    <div class="card-body">
                        <h2 class="m-0">Наш сервис</h2>
                        <div class="row h-auto">
                            <div class="card">
                                <div class="title">7 из 10</div>
                                <p>заявок получили оценку 5</p>
                            </div>
                            <div class="card">
                                <div class="title">8 минут</div>
                                <p>среднее время решения заявки</p>
                            </div>
                            <div class="card">
                                <div class="title">{{ app('global')['client_count'] }}</div>
                                <p>Клиентов «Ростелематика» по всей России</p>
                            </div>
                            <div class="card">
                                <div class="title">48 часов</div>
                                <p>если любая проблема с оборудованием не будет решена в течение 2-х суток, то Ваше ТС
                                    обслуживается бесплатно целый год.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Блок данных --}}
        <div class="block-3 mb-5">
            <div class="row h-auto">
                <div class="card info">
                    <div class="card-body">
                        <h2 class="m-0 pb-4">Обратная связь</h2>
                        <div class="header_contact">
                            <div class="contact_icon">
                                <i class="svg-icon icon-call-answer"></i>
                            </div>
                            <div class="contact_content">
                                <div class="contact_title">городской номер:</div>
                                <div class="contact_text"><a href="tel:+78652599050"> 8 (8652) 59-90-50</a></div>
                            </div>
                        </div>

                        <div class="header_contact">
                            <div class="contact_icon">
                                <i class="svg-icon icon-mobile-phone"></i>
                            </div>
                            <div class="contact_content">
                                <div class="contact_title">мобильный номер:</div>
                                <div class="contact_text"><a href="tel:+79386549050">8 938 654 90-50</a></div>
                                <div class="contact_text"><a href="tel:+79034088248">8 903 408 82-48</a></div>
                            </div>
                        </div>

                        <div class="header_contact">
                            <div class="contact_icon">
                                <i class="svg-icon icon-mail"></i>
                            </div>
                            <div class="contact_content">
                                <div class="contact_title">Элетронная почта:</div>
                                <div class="contact_text"><a href="mailto:support@ros-telematika.ru">support@ros-telematika.ru</a></div>
                            </div>
                        </div>

                    </div>
                </div>



                <div class="card form mt-5">
                    <p class="py-3 text-center px-3">Вы также можете отправить сообщение через форму обратной связи и мы обязательно ответим</p>
                    <form id="support_form" class="form__body row h-auto">
                        {{ csrf_field() }}
                        <div class="form__input input input_border-gray input_large">
                            <label class="input__title">Ваше имя</label>
                            <input type="text" class="input__wrap" name="name" placeholder="Иван">
                        </div>
                        <div class="form__input input input_border-gray input_large input_phone">
                            <label class="input__title">телефон</label>
                            <input type="text" class="input__wrap" name="phone" placeholder="Телефон" maxlength="18">
                        </div>
                        <div class="form__input input">
                            <label class="input__title">E-mail</label>
                            <input type="text" class="input__wrap" name="email" placeholder="E-mail">
                        </div>
                        <div class="form__input input">
                            <label class="input__title">Сообщение</label>
                            <textarea type="text" class="input__wrap pt-3" style="height: 100px;" name="comment"
                                      id="" cols="30" rows="10" placeholder="Текст сообщения"></textarea>
                        </div>

                        {{--указываем тип заявки--}}
                        <input type="hidden" name="type_order" value="SUPPORT">
                        {{--указываем с какой страницы была вызвана форма--}}
                        <input type="hidden" name="url" value="{{$domain->domain}}.ros-telematika.test{{request()->getPathInfo()}}">

                        <div onclick="sendOrder('support')"
                             class="form__btn btn btn_bg-red">Отправить</div>
                    </form>

                    <div class="card-footer">
                        <div id="result_send_order_support" class="result_send_order"></div>
                        Нажимая кнопку «Отправить», вы даете согласие на обработку персональных данных в соответствии с
                        <a class="locality modal-show"
                           data-toggle="modal"
                           data-target="#modal-policy">Политикой конфиденциальности</a>
                    </div>
                </div>
            </div>
        </div>


        {{-- Инфа о кол-ве клиентов --}}
        @include('pages.inc.sec_clients')

        {{-- Отзывы клиентов --}}
        @include('pages.inc.sec_reviews')


    </div>
@endsection
