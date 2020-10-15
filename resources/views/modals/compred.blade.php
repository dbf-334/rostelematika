<div class="modal fade modal-base-form" id="modal_compred" tabindex="-1" role="dialog" aria-labelledby="exampleCompred" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h3 class="modal-title text-center w-100" id="exampleCompred">
                    Получить коммерческое предложение на
                    <span class="modal-title-theme"></span>
                </h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <form id="modal_compred_form" class="ajax_form">
                    {{ csrf_field() }}
                    <div class="modal_text mb-4 text-center">Пожалуйста, укажите свои контактные данные и мы свяжемся с Вами.</div>

                    <div class="form__input input">
                        <label class="input__title">Ваше имя</label>
                        <input type="text" class="input__wrap" name="name" placeholder="Иван">
                    </div>
                    <div class="form__input input input_phone">
                        <label class="input__title">Телефон</label>
                        <input type="text" class="input__wrap" name="phone" placeholder="Телефон" maxlength="18">
                    </div>
                    <div class="form__input input">
                        <label class="input__title">E-mail</label>
                        <input type="text" class="input__wrap" name="email" placeholder="E-mail">
                    </div>

                    {{--указываем тип заявки--}}
                    <input type="hidden" name="type_order" value="COMPRED">
                    {{--комментарий к заявке, подставляем тематику КП из атрибута data-theme кнопки вызова формы
                    в класс modal-title-theme--}}
                    <input type="hidden" name="comment" value="" class="modal-title-theme">
                    {{--указываем с какой страницы была вызвана форма--}}
                    <input type="hidden" name="url" value="{{$domain->domain}}.ros-telematika.test{{request()->getPathInfo()}}">

                    <div onclick="sendOrder('modal_compred')"
                         class="form__btn btn btn_bg-red">Получить</div>
                </form>
            </div>

            <div class="modal-footer">
                <div id="result_send_order_modal_compred" class="w-100 text-center order-message">* все поля обязательны для заполнения</div>

                <div class="popup__policy">Нажимая кнопку «Получить», вы даете согласие на обработку персональных данных в соответствии с
                    <a class="locality modal-show"
                       data-toggle="modal"
                       data-target="#modal-policy">
                        Политикой конфиденциальности
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>



