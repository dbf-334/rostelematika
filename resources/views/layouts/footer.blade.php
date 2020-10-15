
<footer class="footer">
    <div class="footer__body">
        <div class="container row">

            <div class="footer__logo logo">
                <a href="https://www.ros-telematika.ru/"><img src="/img/main/logo.png" alt=""></a>
            </div>

            <div class="footer__nav">
                <ul class="no__list">
                    <li><a href="/about.html">О компании</a></li>
                    <li><a href="/catalog">Готовые решения «под ключ»</a></li>
                    <li><a href="/price.html">Стоимость внедрения и срок окупаемости</a></li>
                    <li><a href="/bye.html">Как купить?</a></li>
                    <li><a href="/methods.html">Способы оплаты</a></li>
                    <li><a href="/delivery.html">Доставка и установка</a></li>
                    <li><a href="/guarantees.html">Гарантии</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <div class="footer__address">
                    <div class="footer__address-text">
                        {{$domain->postal}}, Россия, г. {{$domain->name}}, {{$domain->address}}
                    </div>
                    <div class="footer__address-link">
                        <a href="/contacts.html#map">Все адреса представительств «Ростелематика»</a>
                    </div>
                </div>
                <div class="footer__feedback feedback">
                    <div class="feedback__phone">
                        <i class="svg-icon icon-phone-call"></i>
                        <a href="tel:@if ($domain->tel1 === '')
                                        {{ app('global')['main_phone'] }}
                                    @else
                                        {{$domain->tel1}}
                                    @endif">
                            @if ($domain->tel1 === '')
                                {{ app('global')['main_phone'] }}
                            @else
                                {{$domain->tel1}}
                            @endif
                        </a>
                    </div>
                    <div class="feedback__time">{{$domain->work}}</div>
                    <div class="feedback__btns row i-mid">

                        <a class="feedback__callback btn btn_bg-red btn_border-red btn_italic btn_small modal-show"
                           data-toggle="modal"
                           data-target="#modal_zakaz_ring">
                            Вам перезвонить?
                        </a>

                        <div class="feedback_messagers">
                            <div>
                                <a href="skype:{{ app('global')['skype_id'] }}">
                                    <i class="svg-icon icon-skype"></i>
                                </a>
                            </div>
                            <div>
                                <a href="https://api.whatsapp.com/send?phone={{ app('global')['whatsapp_phone'] }}" target="_blank">
                                    <i class="svg-icon icon-whatsapp"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer__blank-links">
                <div class="footer__apps">
                    <a href="https://play.google.com/store/apps/details?id=com.gurtam.wialon_client&amp;hl=ru/ " target="_blank" class="footer__app">
                        <img src="/img/main/google-play.png" alt="">
                    </a>
                    <a href="https://itunes.apple.com/ru/app/wialon/id960699792?mt=8/" target="_blank" class="footer__app">
                        <img src="/img/main/app-store.png" alt="">
                    </a>

                    <!-- Индекс качества сайта - отражает востребованность сайта пользователями -->
                    <div class="text-center">
                        <a rel="nofollow" target="_blank" href="https://webmaster.yandex.ru/sqi?host=www.ros-telematika.ru" title="Индекс качества сайта - отражает востребованность сайта пользователями">
                            <img alt="" src="https://yandex.ru/cycounter?www.ros-telematika.ru&amp;theme=light&amp;lang=ru" width="88" height="31" border="0">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer__foot">
        <div class="container row">
            <div class="footer__desc">
                Информация, представленная на сайте, не является публичной офертой <span> | </span>
                <a class="locality modal-show"
                   data-toggle="modal"
                   data-target="#modal-policy">Политика обработки персональных данных</a>
            </div>
            <div class="footer__socials socials">
                <ul class="no__list">
                    <li>
                        <a href="{{ app('global')['vk_url'] }}" target="_blank">
                            <i class="svg-icon icon-vk-gray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ app('global')['instagram_url'] }}" target="_blank">
                            <i class="svg-icon icon-instagram-gray"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>