
{{-- главный слайдер + форма захвата --}}

<div class="main-slide" style="background-image: url(/img/main/{{$img_slide}});">
    <div class="container">

        <div class="card text-box pt-5">
            <div class="card-body">
                <h1 class="text-dark">{{ $page->h1 }} {{$domain->postfix3}}</h1>
            </div>
        </div>

        <div class="card text-box text-box-opis">
            <div class="card-body">
                <ul>
                    @foreach($text_slide as $item)
                        <li>
                            <i class="svg-icon icon-tick"></i>
                            {{$item}}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="card seven-days">
            бесплатно на 7 дней
        </div>

        <div class="card slide-form">
            <div class="card-body">

                <form id="test_drive_form" class="form__body row h-auto">
                    {{ csrf_field() }}
                    <div class="form__input input input_border-gray input_large">
                        <label class="input__title">Ваше имя</label>
                        <input type="text" class="input__wrap" name="name" placeholder="Иван">
                    </div>
                    <div class="form__input input input_border-gray input_large input_phone">
                        <label class="input__title">телефон</label>
                        <input type="text" class="input__wrap" name="phone" placeholder="Телефон" maxlength="18">
                    </div>

                    {{--указываем тип заявки--}}
                    <input type="hidden" name="type_order" value="TESTDRIVE">
                    {{--комментарий к заявке--}}
                    <input type="hidden" name="comment" value="{{ $page->h1 }}">
                    {{--указываем с какой страницы была вызвана форма--}}
                    <input type="hidden" name="url" value="{{$domain->domain}}.ros-telematika.test{{request()->getPathInfo()}}">

                    <div onclick="sendOrder('test_drive')"
                         class="form__btn btn btn_bg-red btn_animate">Попробовать</div>
                </form>

                <div class="card-footer">
                    <div id="result_send_order_test_drive" class="result_send_order"></div>
                    Нажимая кнопку «Попробовать», вы даете согласие на обработку персональных данных в соответствии с
                    <a class="locality modal-show"
                       data-toggle="modal"
                       data-target="#modal-policy">Политикой конфиденциальности</a>
                </div>

            </div>
        </div>


    </div>
</div>



