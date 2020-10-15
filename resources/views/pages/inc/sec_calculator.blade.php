
<div id="calculator">
    <div class="container">

        <div class="calc__title title">Давайте рассчитаем эффективность внедрения наших решений?</div>

        <div class="calc__wrap">
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



                <!-- Первая форма -->
                <div class="calc_body_step1">
                    <div class="ts__row">
                        <div class="col-md-4 col-lg-3 col-sm-6 mb-3">
                            <div class="ts__checkbox">
                                <input type="radio" name="calc_check_amount" id="calc_step1_r1" value="0" checked>
                                <label for="calc_step1_r1" class="ts__checkbox__label">Грузовики</label>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-sm-6 mb-3">
                            <div class="ts__checkbox">
                                <input type="radio" name="calc_check_amount" id="calc_step1_r2" value="1">
                                <label for="calc_step1_r2" class="ts__checkbox__label">Спец. техника</label>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-sm-6 mb-3">
                            <div class="ts__checkbox">
                                <input type="radio" name="calc_check_amount" id="calc_step1_r3" value="2">
                                <label for="calc_step1_r3" class="ts__checkbox__label">Топливозаправщики</label>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-sm-6 mb-3">
                            <div class="ts__checkbox">
                                <input type="radio" name="calc_check_amount" id="calc_step1_r4" value="3">
                                <label for="calc_step1_r4" class="ts__checkbox__label">Тракторы и с/х техника</label>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-sm-6 mb-3">
                            <div class="ts__checkbox">
                                <input type="radio" name="calc_check_amount" id="calc_step1_r5" value="4">
                                <label for="calc_step1_r5" class="ts__checkbox__label">Такси</label>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-sm-6 mb-3">
                            <div class="ts__checkbox">
                                <input type="radio" name="calc_check_amount" id="calc_step1_r6" value="5">
                                <label for="calc_step1_r6" class="ts__checkbox__label">Поезда</label>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-sm-6 mb-3">
                            <div class="ts__checkbox">
                                <input type="radio" name="calc_check_amount" id="calc_step1_r7" value="6">
                                <label for="calc_step1_r7" class="ts__checkbox__label">Легковой транспорт</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Вторая форма -->
                <div class="calc_body_step2" style="display: none;">
                    <div class="ts__row align-items-center">
                        <div class="col-md-3">
                            Количество техники (шт):
                        </div>

                        <div class="col-md-3 mb-4 mb-md-0">
                            <input type="text" class="calc__input calc_step2_count" min="1" max="1000" value="1">
                        </div>

                        <div class="col-md-4">
                            <div class="slidecontainer">
                                <div class="slider-dot-inner calc_step2_inner vue-slider-dot-tooltip-inner">
                                    <span class="slider-dot-text calc_step2_text">1</span>
                                </div>
                                <input type="range" min="1" max="1000" value="1" class="slider calc_step2_range">
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Третья форма -->
                <div class="calc_body_step3" style="display: none;">
                    <div class="ts__row align-items-center">
                        <div class="col-md-3">
                            Пробег в месяц, км:
                        </div>

                        <div class="col-md-3 mb-4 mb-md-0">
                            <input type="text" class="calc__input calc_step3_count" value="100">
                        </div>

                        <div class="col-md-4">
                            <div class="slidecontainer">
                                <div class="slider-dot-inner calc_step3_inner vue-slider-dot-tooltip-inner">
                                    <span class="slider-dot-text calc_step3_text">100</span>
                                </div>
                                <input type="range" min="100" max="100000" value="100" class="slider calc_step3_range">
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Четвертая форма -->
                <div class="calc_body_step4" style="display: none;">
                    <div class="ts__row align-items-center">
                        <div class="col-md-3">
                            Стоимость литра топлива, руб:
                        </div>

                        <div class="col-md-3 mb-4 mb-md-0">
                            <input type="text" class="calc__input calc_step4_count" value="10">
                        </div>

                        <div class="col-md-4">
                            <div class="slidecontainer">
                                <div class="slider-dot-inner calc_step4_inner vue-slider-dot-tooltip-inner">
                                    <span class="slider-dot-text calc_step4_text">10</span>
                                </div>
                                <input type="range" min="10" max="100" value="10" class="slider calc_step4_range">
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Пятая форма/Результат -->
                <div class="calc_body_step5" style="display: none;">
                    <div class="ts__row align-items-center">

                        <div class="ts__row">
                            <div class="col-md-4 col-lg-3 col-sm-6 mb-3">
                                <div class="ts__checkbox">
                                    <input type="radio" name="calc_check_tarif" id="calc_step5_r1" value="0" checked>
                                    <label for="calc_step5_r1" class="ts__checkbox__label">Тариф
                                        <span class="calc_check_tarif_text">Базовый 250 р</span></label>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3 col-sm-6 mb-3">
                                <div class="ts__checkbox">
                                    <input type="radio" name="calc_check_tarif" id="calc_step5_r2" value="1">
                                    <label for="calc_step5_r2" class="ts__checkbox__label">Тариф
                                        <span class="calc_check_tarif_text">Стандарт 350 р</span></label>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3 col-sm-6 mb-3">
                                <div class="ts__checkbox">
                                    <input type="radio" name="calc_check_tarif" id="calc_step5_r3" value="2">
                                    <label for="calc_step5_r3" class="ts__checkbox__label">Тариф
                                        <span class="calc_check_tarif_text">Премиум 450 р</span></label>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3 col-sm-6 mb-3">
                                <div class="ts__checkbox">
                                    <input type="radio" name="calc_check_tarif" id="calc_step5_r4" value="3">
                                    <label for="calc_step5_r4" class="ts__checkbox__label">Тариф
                                        <span class="calc_check_tarif_text">VIP 550 р</span></label>
                                </div>
                            </div>
                        </div>

                        <div class="calc_line my_hr1 pb-4"></div>

                        <div class="ts__row">
                            <div class="col-md-6">
                                <div class="ts__row mt-2 mb-2">
                                    <div class="col-6">Экономия за месяц: </div>
                                    <div class="col-6 calc_rez_month"></div>
                                </div>
                                <div class="ts__row mt-2 mb-2">
                                    <div class="col-6">Экономия за год: </div>
                                    <div class="col-6 calc_rez_year"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ts__row mt-2 mb-2">
                                    <div class="col-6">Стоимость обслуживания: </div>
                                    <div class="col-6 calc_rez_service"></div>
                                </div>
                                <div class="ts__row mt-2 mb-2">
                                    <div class="col-6">Стоимость решения с контролем топлива от: </div>
                                    <div class="col-6 calc_rez_total"></div>
                                </div>
                                <div class="ts__row mt-2 mb-2 calc_nofuel_flag">
                                    <div class="col-6">Стоимость решения без контроля топлива от: </div>
                                    <div class="col-6 calc_rez_total_nofuel"></div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>


                <div class="justify-content-end mt-3">
                    <button id="calc_btn_back" class="calc__btn mr-auto btn btn_bg-gray">Назад</button>
                    <button id="calc_btn_next" class="calc__btn btn btn_bg-red btn_animate">Далее</button>
                </div>


                <!-- Пятая форма/Результат - форма отправки -->
                <div class="calc_body_step5" style="display: none;">
                    <div class="calc_line my_hr1 py-3"></div>

                    <div class="calc__form">
                        <div class="calc__form__title title">Начните экономить уже сайчас!</div>
                        <form id="calculator_form" class="ajax_form form__body ts__row">
                            {{ csrf_field() }}
                            <div class="form__input input col-md-3 mb-3 mb-md-0">
                                <label class="input__title">Ваше имя</label>
                                <input type="text" class="input__wrap" name="name" placeholder="Иван">
                            </div>
                            <div class="form__input input col-md-3 mb-3 mb-md-0">
                                <label class="input__title">телефон</label>
                                <input type="text" class="input__wrap" name="phone" placeholder="Телефон" maxlength="18">
                            </div>
                            <div class="form__input input col-md-3 mb-3 mb-md-0">
                                <label class="input__title">E-mail</label>
                                <input type="text" class="input__wrap" name="email" placeholder="E-mail">
                            </div>

                            {{--указываем тип заявки--}}
                            <input type="hidden" name="type_order" value="COMPRED">
                            {{--комментарий к заявке--}}
                            <textarea style="display:none;" name="comment" class="calc_rez_comment"></textarea>
                            {{--указываем с какой страницы была вызвана форма--}}
                            <input type="hidden" name="url" value="{{$domain->domain}}.ros-telematika.test{{request()->getPathInfo()}}">

                            <div class="form__input input col-md-3 mb-3 mb-md-0">
                                <div onclick="calcSendOrder('calculator')"
                                     class="form__btn btn btn_bg-red btn_large btn_animate">Получить КП</div>
                            </div>
                        </form>

                        <div class="form__foot">
                            <div class="form__policy policy">
                                <div id="result_send_order_calculator" class="result_send_order"></div>

                                Нажимая кнопку «Получить КП», вы даете согласие на обработку персональных данных в соответствии с
                                <a class="locality modal-show"
                                   data-toggle="modal"
                                   data-target="#modal-policy">Политикой конфиденциальности</a>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>








