
{{-- Показываем всё оборудование в выбраной категории товаров --}}
{{-- Пример вызова блока @include('pages.inc.oborud_all',[ 'type'=>'Курсоуказатель' ]) --}}

<div class="oborudovanie container pb-5">
    <div class="row h-auto">

        {{-- сперва показываем лидеров продаж, потом остальную продукцию --}}
        @foreach(DB::table('equipment')->where('type','=',$type)->orderBy('lider', 'desc')->orderBy('id', 'desc')->get() as $item)

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
