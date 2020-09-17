<div class="modal fade modal-base-form" id="modal_zakaz_ring" tabindex="-1" role="dialog" aria-labelledby="exampleZakazRing" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h3 class="modal-title text-center w-100" id="exampleZakazRing">
                    Обратный звонок
                </h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <form id="modal_zakaz_ring_form" class="ajax_form">
                    {{ csrf_field() }}
                    <div class="modal_text mb-4 text-center">Пожалуйста, укажите свои контактные данные и мы Вам перезвоним.</div>

                    <div class="form__input input">
                        <label class="input__title">Ваше имя</label>
                        <input type="text" class="input__wrap" name="name" placeholder="Иван">
                    </div>
                    <div class="form__input input input_phone">
                        <label class="input__title">телефон</label>
                        <input type="text" class="input__wrap" name="phone" placeholder="+7 (   )" maxlength="18">
                    </div>

                    {{--указываем тип заявки--}}
                    <input type="hidden" name="type_order" value="CALLBACK">
                    {{--указываем с какой страницы была вызвана форма--}}
                    <input type="hidden" name="url" value="{{$domain->domain}}.ros-telematika.test{{request()->getPathInfo()}}">

                    <div onclick="sendOrder('modal_zakaz_ring')"
                            class="form__btn btn btn_bg-red">ЗАКАЗАТЬ ЗВОНОК</div>
                </form>
            </div>

            <div class="modal-footer">
                <div id="result_send_order_modal_zakaz_ring" class="w-100 text-center order-message">* все поля обязательны для заполнения</div>

                <div class="popup__policy">Нажимая кнопку «Отправить», вы даете согласие на обработку персональных данных в соответствии с
                    <a class="locality modal-show"
                       data-toggle="modal"
                       data-target="#modal-policy">
                        Политикой конфиденциальности
                    </a>
                    <!--a data-fancybox="" data-src="#popup-policy" href="javascript:;">Политикой конфиденциальности</a-->
                </div>
            </div>

            <!--form class="modal-body" id="modal_zakaz_ring_form">
                <div class="row">
                    {{-- csrf_field() --}}

                    <div class="card">
                        <div class="card-body">
                            <div class="modal_text pb-2">Пожалуйста, укажите свои контактные данные и мы перезвоним в любое удобное для Вас время</div>

                            <div class="form-group">
                                <input class="form-control" type="text" name="name" placeholder="Ваше имя">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="phone" placeholder="Ваш телефон">
                            </div>

                            {{--указываем тип заявки--}}
                            <input type="hidden" name="type_order" value="CALLBACK">
                            {{--указываем с какой страницы была вызвана форма--}}
                            <input type="hidden" name="url" value="{{--$domain->domain--}}.ros-telematika.test{{--request()->getPathInfo()--}}">


                            {{--передаём название формы и direction_id--}}
                            <div class="btn btn-warning w-100" onclick="sendOrder('modal_zakaz_ring')">
                                ЗАКАЗАТЬ ЗВОНОК
                            </div>
                        </div>
                    </div>


                    <div class="card w-100">
                        <div class="card-body p-0">
                            <div class="box mb-0 politica" >
                                Отправляя свои персональные данные, Вы даёте согласие на их
                                <a class="text-secondary" target="_blank" href="/politika-konfidencialnosti">обработку</a>
                            </div>
                        </div>
                    </div>

                </div>
            </form>

            <div class="modal-footer">
                <div class="row">
                    <div id="result_send_order_modal_zakaz_ring">* все поля обязательны для заполнения</div>

                    {{--<div class="pr-3">
                    Отправляя свои персональные данные, Вы даёте согласие на их
                    <a class="text-secondary" target="_blank" href="/politika-konfidencialnosti">обработку</a>
                    </div>--}}
                </div>
            </div-->

        </div>
    </div>
</div>



