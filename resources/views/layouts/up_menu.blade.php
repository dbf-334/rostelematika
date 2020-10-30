{{--верхнее меню для больших экранов (полоска доп.меню) --}}
<div class="up-menu w-100 d-none d-lg-block bg-dark">
    <div class="container">


        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbar2">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="/price.html">Стоимость </a>
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
                </ul>

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link up-menu-secondary" href="https://hosting.wialon.com/" target="_blank">Вход для клиентов</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link up-menu-secondary" href="/mobilnyie-prilozheniya.html">Мобильное приложение</a>
                    </li>
                </ul>

                {{-- ICONS --}}
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link up-menu-icon" target="_blank"
                           href="{{ app('global')['vk_url'] }}">
                            <i class="svg-icon icon-vk-gray"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link up-menu-icon" target="_blank"
                           href="{{ app('global')['instagram_url'] }}">
                            <i class="svg-icon icon-instagram-gray"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link up-menu-icon"
                           href="/sitemap.html" title="Карта сайта">
                            <i class="svg-icon icon-sitemap-gray"></i>
                        </a>
                    </li>
                </ul>

            </div>
        </nav>

    </div>
</div>