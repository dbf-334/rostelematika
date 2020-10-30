@extends('layouts.base')


@section('meta_name_robots')
    <meta name="robots" content="index, follow"/>
@endsection


@section('to_header')
    <link href="{{ asset('/css/about.css') }}" rel="stylesheet">

    <link href="{{ asset('/css/sec_yandex_map.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_smi_news.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_clients.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_reviews.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sec_commerce.css') }}" rel="stylesheet">

@endsection


@section('to_footer')
    {{-- Вставляем код Яндекс-карты --}}
    @include('pages.inc.sec_yandex_map')


    <script>
        {{-- Меняем картинки в блоке / Инфа о кол-ве клиентов --}}
        $('#sec_clients .img1').attr('src', '/img/pages/about/client_013.png');
        $('#sec_clients .img2').attr('src', '/img/pages/about/client_015.png');
        $('#sec_clients .img3').attr('src', '/img/pages/about/client_016.png');
        $('#sec_clients .img6').attr('src', '/img/pages/about/client_022.png');
    </script>
@endsection



@section('content')
    <div class="page-about">

        {{-- Блок данных --}}
        <div class="block-2 mb-5">
            <div class="row h-auto">
                <div class="card bodytext">
                    <div class="card-body">
                        <h1 class="text-dark pb-3">{{ $page->h1 }}</h1>
                        <p>Компания Ростелематика — молодой бренд с высоким уровнем амбиций. Головное предприятие находится в
                            городе Ставрополь. Но наши специалисты помогут вам в разных городах России и СНГ.</p>
                        <p>Наши ценности: наши люди — наше все, наши клиенты — наша гордость. Именно по такому принципу мы работаем.
                            Сотрудничая с нами, вы увидите понимание ваших целей , чуткость к запросам, грамотное проведение работ,
                            умение давать адекватную оценку ситуации.</p>
                        <p>Мы выстраиваем дружественную обстановку сотрудничества, в которой клиент может смело говорить о потребностях
                            и проблемах. Наша команда — специалисты, понимающие не только технические моменты, но и в первую очередь
                            люди, способные слышать ваши требования.</p>
                        <p>Многолетний опыт позволяет нам внедрять системы мониторинга в самые разные сферы общественной жизни. Наша
                            задача — измеримое сокращение затрат на транспорт. Мы научим вас использовать по максимуму систему мониторинга.</p>
                    </div>
                </div>

                <div class="card equipment"></div>
            </div>
        </div>


        {{-- Преимущества в цифрах --}}
        <div class="block-3 pb-5">
            <div class="container">
                <h2 class="text-center text-center pt-5 pb-3 m-0">Наши преимущества</h2>

                <div class="row w-100">

                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4"><i class="svg-icon icon-shield-blue"></i></div>
                            <p>Пожизненная гарантия на оборудование</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4"><i class="svg-icon icon-24-hours-blue"></i></div>
                            <p>Сервис 48 часов</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4"><i class="svg-icon icon-save-money-blue"></i></div>
                            <p>Экономите >5% на содержании ТС или мы вернем деньги</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4"><i class="svg-icon icon-loupe-blue"></i></div>
                            <p>Максимально прозрачный контроль</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>



        {{-- Примеры внедрения и отзывы --}}
        @include('pages.inc.sec_smi_news')


        {{-- Вставляем код Яндекс-карты из БД --}}
        <div id="map-item" style="width: 100%; height: 350px"></div>


        {{-- Инфа о кол-ве клиентов --}}
        @include('pages.inc.sec_clients')

        {{-- Отзывы клиентов --}}
        @include('pages.inc.sec_reviews')


        {{-- Форма захвата - Получить коммерческое предложение --}}
        @include('pages.inc.sec_commerce')


    </div>
@endsection
