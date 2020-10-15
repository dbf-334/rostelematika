
{{-- Показываем определенное кол-во оборудования в выбраной категории товаров, включая лидеров продаж --}}
{{-- Пример вызова блока @include('pages.inc.oborud_count',[ 'type'=>'Курсоуказатель', 'count'=>2 ]) --}}

<div class="oborudovanie container pb-5">
    <div class="row h-auto">
        {{-- указываем число выводимых записей по умолчанию, если переменная не указана --}}
        @php if (!isset($count)) { $count=4; } @endphp

        @foreach(DB::table('equipment')->where('type','=',$type)->orderBy('lider', 'desc')->orderBy('id', 'desc')->take($count)->get() as $item)

            <div class="card">
                @if ($item->lider === 1)
                    <span class="lider"></span>
                @endif

                <a href="/oborudovanie/{{$item->url}}">
                    <div class="card-img">
                        <img src="/img/oborudovanie/{{$item->img}}" alt="">
                    </div>
                    <div class="card-body">
                        <div>{{$item->type}}</div>
                        <div>{{$item->model}}</div>
                    </div>
                    <div class="card-footer">
                        <a href="/oborudovanie/{{$item->url}}"
                           class="catalog__btn btn btn_border-gray btn_hover-bg-blue btn_small btn_italic">Подробнее</a>
                        <a class="catalog__btn btn btn_bg-red btn_border-red btn_italic btn_small"
                           data-theme="{{$item->type}} {{$item->model}}"
                           data-toggle="modal"
                           data-target="#modal_compred">
                            Купить
                        </a>
                    </div>
                </a>
            </div>

        @endforeach
    </div>
</div>
