
<div class="container header"> {{-- my_hr2 d-none d-lg-block --}}
    <div class="row">
        <header id="header">

            <div class="card header-logo">
                <div class="card-body">
                    <div class="logo">
                        <a href="/"><img src="/img/main/logo.png" title="" alt="Ростелематика - ГЛОНАСС/GPS мониторинг транспорта" width="118"></a>
                    </div>
                    <!--div class="podpis">ГЛОНАСС/GPS мониторинг транспорта <br>контроль расхода топлива, видеомониторинг</div-->
                </div>
            </div>

            <div class="card header-links "> <!-- d-none d-lg-block -->
                <div class="card-body">
                    <a class="header_link" href="http://gps.nav-system.ru/">
                        <i class="svg-icon icon-cloud-blue"></i>
                        <span>Демо доступ</span>
                    </a>
                    <a class="header_link" href="texpodderzhka.html">
                        <i class="svg-icon icon-headset-blue"></i>
                        <span>Тех. поддержка</span>
                    </a>
                </div>
            </div>

            <div class="card header-contacts">
                <div class="card-body">

                    <div class="header_contact">
                        <div class="contact_content" style="height: 25px;  margin-top: -5px;">
                            <div class="cities">

                                <a class="locality modal-show"
                                   data-toggle="modal"
                                   data-target="#modal-all-city">
                                    {{$domain->name}}
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="header_contact">
                        <div class="contact_icon">
                            <i class="svg-icon icon-placeholder-blue"></i>
                        </div>
                        <div class="contact_content">
                            <div class="contact_title">адрес:</div>
                            <div class="contact_text"><a href="contacts.html">{{$domain->address}}</a></div>
                        </div>
                    </div>
                    <div class="header_contact">
                        <div class="contact_icon">
                            <i class="svg-icon icon-mail"></i>
                        </div>
                        <div class="contact_content">
                            <div class="contact_title">контактный e-mail:</div>
                            <div class="contact_text"><a href="mailto:office@ros-telematika.ru">{{$domain->email}}</a></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card header-cities">
                <div class="card-body">
                    <div class="header_feedback">
                        <div class="feedback_phone">
                            <i class="svg-icon icon-phone-call"></i>
                            <div>8 (800) 550-85-62</div>
                        </div>
                        <div class="feedback_phone">
                            {{$domain->tel1}}
                        </div>

                        <div class="feedback_time">Пн-Пт с 9:00 до 17:00</div>

                        <div class="feedback_btns">
                            <!--a data-fancybox="" data-src="#popup-callback"
                               class="feedback_callback">Вам перезвонить?</a-->
                            <a class="feedback_callback"
                               data-toggle="modal"
                               data-comment=""
                               data-directionid="2"
                               data-target="#zakaz_ring">Вам перезвонить?</a>


                            <div class="feedback_messagers">
                                    <div>
                                        <a href="skype:info_595897">
                                            <i class="svg-icon icon-skype"></i>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="https://api.whatsapp.com/send?phone=79383502688" target="_blank">
                                            <i class="svg-icon icon-whatsapp"></i>
                                        </a>
                                    </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



        </header>
    </div>
</div>


