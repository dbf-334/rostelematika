
{{-- Форма захвата - Получить коммерческое предложение --}}

<div id="sec_commerce" class="row">
    <div class="container mt-2 mb-5">
        <div>
            <h2 class="pb-3">Получить коммерческое предложение</h2>
        </div>

        <form id="sec_compred_form" class="ajax_form kp__form">
            {{ csrf_field() }}

            <div class="ts__row">
                <div class="col-xl-8">
                    <div class="kp__row ts__row">
                        <div class="col-lg-3 col-md-6 mb-2">
                            <div class="kp__input input input_border-gray input_large">
                                <input type="text" class="input__wrap" name="name" placeholder="Ваше имя">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-2">
                            <div class="kp__input input input_border-gray input_large input_phone">
                                <input type="text" class="input__wrap" name="phone" placeholder="Телефон" maxlength="18">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-2">
                            <div class="kp__input input input_border-gray input_large">
                                <input type="text" class="input__wrap" name="email" placeholder="E-mail">
                            </div>
                        </div>

                        {{--указываем тип заявки--}}
                        <input type="hidden" name="type_order" value="COMPRED">
                        {{--комментарий к заявке--}}
                        <input type="hidden" name="comment" value="{{ $page->h1 }}">
                        {{--указываем с какой страницы была вызвана форма--}}
                        <input type="hidden" name="url" value="{{$domain->domain}}.ros-telematika.test{{request()->getPathInfo()}}">

                        <div class="col-lg-3 col-md-6">
                            <div onclick="sendOrder('sec_compred')"
                             class="kp__btn kp__input btn btn_bg-red btn_border-red btn_italic btn_large">Отправить</div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="mt-3 row h-auto i-mid">
                <div id="result_send_order_sec_compred" class="w-100 text-left">* все поля обязательны для заполнения</div>
                <div class="form__policy policy">
                    Нажимая кнопку «Отправить», вы даете согласие на обработку персональных данных в соответствии с
                    <a class="locality modal-show"
                       data-toggle="modal"
                       data-target="#modal-policy">
                        Политикой конфиденциальности
                    </a>
                </div>
            </div>

        </form>


    </div>
</div>

