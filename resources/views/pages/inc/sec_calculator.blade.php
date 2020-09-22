{{--<style>
    .showFormOverlay {
        width: 720px;
        visibility: visible;
    }
    .wrapper_overlay {
        position: absolute;
        height: 900%;
    }
    #formaSendAjax .ramkaFonPage {
        width: 720px;
        visibility: hidden;
    }
    .showFormOverlay .close {
        visibility: visible;
        right: 15px;
        top: 15px;
        z-index: 100;
    }
    #formOprosnik_controlAutopark {
        visibility: visible;
        width: 720px;
    }
</style>





<form  id="formOprosnik_controlAutopark" class="initShowFormForAnalytics formOprosnik">

    <fieldset>
        <div class="step-form-left-panel">
            <h2 class="fs-title">К какой категории относятся транспортные средства Вашей организации?</h2>
            <h3 class="fs-subtitle">Шаг: 1 из 4</h3>



            <label class="radio">
                <input id="radio-1" class="radio" name="radio" type="radio" value="Грузоперевозки" checked>
                <div class="radio__text">Грузоперевозки</div>
            </label>
            <label class="radio">
                <input id="radio-2" class="radio" name="radio" type="radio" value="Пассажироперевозки" >
                <div class="radio__text">Пассажироперевозки</div>
            </label>
            <label class="radio">
                <input id="radio-3" class="radio" name="radio" type="radio" value="Сельхозтехника" >
                <div class="radio__text">Сельхозтехника</div>
            </label>
            <label class="radio">
                <input id="radio-4" class="radio" name="radio" type="radio" value="Такси" >
                <div class="radio__text">Такси</div>
            </label>
            <label class="radio">
                <input id="radio-5" class="radio" name="radio" type="radio" value="Спецтехника" >
                <div class="radio__text">Спецтехника</div>
            </label>
            <label class="radio">
                <input id="radio-6" class="radio" name="radio" type="radio" value="Логистика и дистрибуция" >
                <div class="radio__text">Логистика и дистрибуция</div>
            </label>
            <label class="radio">
                <input id="radio-4" class="radio" name="radio" type="radio" value="ЖКХ" >
                <div class="radio__text">ЖКХ</div>
            </label>
            <label class="radio">
                <input id="radio-4" class="radio" name="radio" type="radio" value="Нефть и Газ" >
                <div class="radio__text">Нефть и Газ</div>
            </label>
            <label class="radio">
                <input id="radio-4" class="radio" name="radio" type="radio" value="Перевозка опасных грузов" >
                <div class="radio__text">Перевозка опасных грузов</div>
            </label>
            <label class="radio">
                <input id="radio-4" class="radio" name="radio" type="radio" value="Другое" >
                <div class="radio__text">Другое</div>
            </label>

        </div>

        <input type="button" name="next" class="ftw_next button orange" value="Вперёд" />

        <div class="step-form-right-panel">
            <div class="user">
                <div class="foto">
                    <img src="/img/main/step-form-user.jpg" alt="" width="80">
                </div>
                <div class="name">
                    Олег
                    <p>Эксперт по технологии ГЛОНАСС/GPS</p>
                </div>
            </div>
            <div class="name">
                <p style="padding: 0 10px;">Специфика бизнеса очень важна для подбора готового решения. Хотя оборудование и универсально,
                    существуют нюансы, которые всплывают только в процессе работы. Опыт 8 лет поможет нам!</p>
            </div>
        </div>
    </fieldset>


    <fieldset>
        <div class="step-form-left-panel">
            <h2 class="fs-title">Какое количество ТС Вы планируете оснастить<br> системой ГЛОНАСС/GPS</h2>
            <h3 class="fs-subtitle">Шаг: 2 из 4</h3>


            <input id="rng" name="rng" type="range" min="1" max="51" value="1" oninput="
                            if (this.value == 51)
                            {$('#ong').html( 'более 50 шт.');}
                            else
                            {$('#ong').html( this.value + ' шт.');}">

            <output id="ong" for="rng">1 шт.</output>

            <div class="step-form-clear"></div>
        </div>

        <input type="button" name="previous" class="ftw_previous button gray" value="Назад" />
        <input type="button" name="next" class="ftw_next button orange" value="Вперёд" />

        <div class="step-form-right-panel">
            <div class="user">
                <div class="foto">
                    <img src="/img/main/step-form-user.jpg" alt="" width="80">
                </div>
                <div class="name">
                    Олег
                    <p>Эксперт по технологии ГЛОНАСС/GPS</p>
                </div>
            </div>
            <div class="name">
                <p style="padding: 0 10px;">Чем больше машин, тем более выгодное предложение мы сможем предложить Вам. </p>
            </div>
        </div>
    </fieldset>

    <fieldset>
        <div class="step-form-left-panel">
            <h2 class="fs-title">Какие задачи планируете решить?</h2>
            <h3 class="fs-subtitle">Шаг: 3 из 4</h3>

            <label class="checkbox">
                <input type="checkbox" name="options" value="Контроль местоположения и маршрута">
                <div class="checkbox__text">Контроль местоположения и маршрута;</div>
            </label>
            <label class="checkbox">
                <input type="checkbox" name="options" value="Контроль расхода топлива (место, время, объем заправок и сливов)">
                <div class="checkbox__text">Контроль расхода топлива (место, время, объем заправок и сливов);</div>
            </label>
            <label class="checkbox">
                <input type="checkbox" name="options" value="Контроль своевременности прохождения ТО">
                <div class="checkbox__text">Контроль своевременности прохождения ТО;</div>
            </label>
            <label class="checkbox">
                <input type="checkbox" name="options" value="Контроль скоростного режима">
                <div class="checkbox__text">Контроль скоростного режима;</div>
            </label>
            <label class="checkbox">
                <input type="checkbox" name="options" value="Контроль моточасов">
                <div class="checkbox__text">Контроль моточасов;</div>
            </label>
            <label class="checkbox">
                <input type="checkbox" name="options" value="Контроль стиля вождения">
                <div class="checkbox__text">Контроль стиля вождения;</div>
            </label>
            <label class="checkbox">
                <input type="checkbox" name="options" value="Решение логистических задач">
                <div class="checkbox__text">Решение логистических задач;</div>
            </label>
            <label class="checkbox">
                <input type="checkbox" name="options" value="Упрощение работы механика">
                <div class="checkbox__text">Упрощение работы механика;</div>
            </label>
            <label class="checkbox">
                <input type="checkbox" name="options" value="Необходима установка просто для соблюдения норм государства">
                <div class="checkbox__text">Необходима установка просто для соблюдения норм государства;</div>
            </label>
            <label class="checkbox">
                <input type="checkbox" name="options" value="Другое">
                <div class="checkbox__text">Другое.</div>
            </label>
        </div>

        <input type="button" name="previous" class="ftw_previous button gray" value="Назад" />
        <input type="button" name="next" class="ftw_next button orange" value="Вперёд" />

        <div class="step-form-right-panel">
            <div class="user">
                <div class="foto">
                    <img src="/img/main/step-form-user.jpg" alt="" width="80">
                </div>
                <div class="name">
                    Олег
                    <p>Эксперт по технологии ГЛОНАСС/GPS</p>
                </div>
            </div>
            <div class="name">
                <p style="padding: 0 10px;">Часть описанных задач возможно решить функционалом программного обеспечения (бесплатно),
                    часть решаемы исключительно установкой дополнительных датчиков.</p>
            </div>
        </div>
    </fieldset>

    <fieldset>
        <div class="step-form-left-panel">
            <h2 class="fs-title">Отлично! Последний шаг.</h2>
            <h3 class="fs-subtitle">Шаг 4 из 4</h3>

            <div class="ftw_box">
                Заполните форму ниже, чтобы мы могли задать Вам несколько уточняющих вопросов и сразу сориентировать по цене.
            </div>

            <input style="width: 100%;" type="text" name="name" placeholder="Имя" />
            <input style="width: 100%;" type="text" name="phone" placeholder="Телефон" />
            <textarea id="result_oprosnik" name="question" style="display: none;"></textarea>

            <input type="hidden" name="type_order" value="OPROS">
            <input type="hidden" name="direction_id" value="2">

        </div>



        <input type="button" name="previous" class="ftw_previous button gray" value="Назад" />
        <input type="submit" name="submit" class="ftw_submit button orange" value="Готово" onclick="formAjax('result_order_oprosnik','formOprosnik_controlAutopark');" />

        <div class="step-form-right-panel">
            <div class="user">
                <div class="foto">
                    <img src="/img/main/step-form-user.jpg" alt="" width="80">
                </div>
                <div class="name">
                    Олег
                    <p>Эксперт по технологии ГЛОНАСС/GPS</p>
                </div>
            </div>
            <div class="name">
                <p style="padding: 0 10px;"><strong>За уделённое время дарим Вам купон на скидку, равный 500 р. Им Вы сможете оплатить
                        часть суммы нашей с Вами сделки. Ваш промо-код "Ставтрэк ОПРОС"</strong></p>
            </div>
        </div>
    </fieldset>
</form>

<div class="message" id="result_send_order">- все поля обязательны для заполнения</div>




<script>

    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    $(".ftw_next").click(function() {
        if (animating) return false;
        animating = true;
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        next_fs.show();

        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                scale = 1 - (1 - now) * 0.2;
                left = (now * 50) + "%";
                opacity = 1 - now;
                current_fs.css({
                    'transform': 'scale(' + scale + ')',
                    'position': 'absolute'
                });
                next_fs.css({
                    'left': left,
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            }//,
            //easing: 'easeInOutBack'
        });


        // ШАГ-4: Отображаем выбранные пользователем данные
//            $("#category_tc_sel").html( "<strong>Категория ТС: </strong>" + $("input[name=radio]:checked").val() );
//            $("#count_tc_sel").html( "<strong>Количество ТС: </strong>" + $("#ong").val() );
//            $("#tasks_sel").html( "<strong>Перечень решаемых задач: </strong>" + $("input[name=options]:checked").map(
//                function () {return this.value;}).get().join("; ") );

        // ШАГ-5: Передаём все данные в Тулс
        $("#result_oprosnik").val( "Данные из пошаговой формы опроса - 'Решения для управления автопарком на базе технологии ГЛОНАСС/GPS'. | Категория ТС: " + $("input[name=radio]:checked").val() + " | " +
            "Количество ТС: " + $("#ong").val() + " | " +
            "Перечень решаемых задач: " + $("input[name=options]:checked").map(
                function () {return this.value;}).get().join("; ") );


    });

    $(".ftw_previous").click(function() {
        if (animating) return false;
        animating = true;
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        previous_fs.show();
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                scale = 0.8 + (1 - now) * 0.2;
                left = ((1 - now) * 50) + "%";
                opacity = 1 - now;
                current_fs.css({
                    'left': left
                });
                previous_fs.css({
                    'transform': 'scale(' + scale + ')',
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            }//,
            //easing: 'easeInOutBack'
        });
    });

    $(".ftw_submit").click(function() {
        return false;
    });

</script>--}}


<div id="calculator">
    <div class="container">

        <div class="calc__title title">Давайте рассчитаем эффективность внедрения наших решений?</div>
        <div class="calc__wrap">
            <div>
                <div class="calc__progress__wrapp mb-5">
                    <div class="calc__progress__step active calc_progress_step1">
                        <div class="calc__progress__number">Шаг 1 из 5</div>
                        <div class="calc__progress__line"></div>
                    </div>

                    <div class="calc__progress__step calc_progress_step2">
                        <div class="calc__progress__number">Шаг 2 из 5</div>
                        <div class="calc__progress__line"></div>
                    </div>

                    <div class="calc__progress__step calc_progress_step3">
                        <div class="calc__progress__number">Шаг 3 из 5</div>
                        <div class="calc__progress__line"></div>
                    </div>
                    <div class="calc__progress__step calc_progress_step4">
                        <div class="calc__progress__number">Шаг 4 из 5</div>
                        <div class="calc__progress__line"></div>
                    </div>
                    <div class="calc__progress__step calc_progress_step5">
                        <div class="calc__progress__number">Шаг 5 из 5</div>
                        <div class="calc__progress__line"></div>
                    </div>
                </div>

                <div class="calc_body_step1">
                    <div class="ts__row">
                        <div class="col-md-4 col-lg-3 col-sm-6 mb-3">
                            <div class="ts__checkbox">
                                <input type="radio" name="radio" checked>
                                <!--div class="ts__checkbox__box"><span></span></div-->
                                <div class="ts__checkbox__label">Грузовики</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-sm-6 mb-3">
                            <div class="ts__checkbox">
                                <input type="radio" name="radio" checked>
                                <!--div class="ts__checkbox__box"><span></span></div-->
                                <div class="ts__checkbox__label">Спец. техника</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-sm-6 mb-3">
                            <div class="ts__checkbox">
                                <div class="ts__checkbox__box"><span></span></div>
                                <div class="ts__checkbox__label">Топливозаправщики</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-sm-6 mb-3">
                            <div class="ts__checkbox">
                                <div class="ts__checkbox__box"><span></span></div>
                                <div class="ts__checkbox__label">Тракторы и с/х техника</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-sm-6 mb-3">
                            <div class="ts__checkbox">
                                <div class="ts__checkbox__box"><span></span></div>
                                <div class="ts__checkbox__label">Такси</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-sm-6 mb-3">
                            <div class="ts__checkbox">
                                <div class="ts__checkbox__box"><span></span></div>
                                <div class="ts__checkbox__label">Поезда</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-sm-6 mb-3">
                            <div class="ts__checkbox">
                                <div class="ts__checkbox__box"><span></span></div>
                                <div class="ts__checkbox__label">Легковой транспорт</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="calc_body_step2" style="display: none;">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            Количество техники (шт):
                        </div>
                        <div class="col-md-3 mb-4 mb-md-0">
                            <div class="calc__input input input_bg-blue input_normal">
                                <input type="text" class="input__wrap">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="vue-slider vue-slider-ltr" style="padding: 7px 0px; width: auto; height: 8px;">
                                <div class="vue-slider-rail">
                                    <div class="vue-slider-process" style="height: 100%; top: 0px; left: 0%; width: 0%;
                                    transition-property: width, left; transition-duration: 0.5s;"></div>
                                    <div class="vue-slider-dot" style="width: 14px; height: 14px; transform: translate(-50%, -50%);
                                    top: 50%; left: 0%; transition: left 0.5s ease 0s;">
                                        <div class="vue-slider-dot-handle"></div>
                                        <div class="vue-slider-dot-tooltip vue-slider-dot-tooltip-top vue-slider-dot-tooltip-show">
                                            <div class="vue-slider-dot-tooltip-inner vue-slider-dot-tooltip-inner-top">
                                                <span class="vue-slider-dot-tooltip-text">1</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end mt-3">
                    <!--a href="#" class="calc__btn btn btn_bg-red btn_border-red btn_animate btn_italic btn_small btn__disalbe">Далее</a-->

                </div>
            </div>



            <div class="calc__form">
                <div class="calc__form__title title">Начните экономить уже сайчас!</div>
                <form action="" method="post" class="ajax_form form__body ts__row">

                    <div class="input input_border-gray input_large col-md-3 mb-3 mb-md-0">
                        <label class="input__title" for="input-3">Ваше имя</label>
                        <input type="text" class="input__wrap" name="name" placeholder="Иван" id="input-3">
                        <div class="error_name"></div>
                    </div>

                    <div class="input input_border-gray input_large input_phone col-md-3 mb-3 mb-md-0">
                        <label class="input__title" for="input-4">телефон</label>
                        <input type="text" class="input__wrap" name="tel" placeholder="+7 (   )" maxlength="18" id="input-4">
                        <div class="error_tel"></div>
                    </div>
                    <div class="input input_border-gray input_large col-md-3 mb-3 mb-md-0">
                        <label class="input__title" for="input-5">e-mail</label>
                        <input type="text" class="input__wrap" name="email" placeholder="ivan@mail.ru" id="input-5">
                        <div class="error_email"></div>
                    </div>
                    <button type="submit" class="col-md-3 btn btn_animate btn_bg-red btn_border-red btn_italic btn_large">Получить КП</button>
                    <input type="hidden" name="kpTitle" id="kp-input">


                </form>
            </div>
        </div>



        <button id="button23">Скрыть</button>
        <div id="block444" style="color: #fff;">Этот элемент скроется</div>


    </div>
</div>








