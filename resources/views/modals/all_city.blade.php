

{{--модальное окно выбора городов--}}
<div class="modal fade modal-base-form" id="modal_all_city" tabindex="-1" role="dialog" aria-labelledby="exampleAllCity" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h3 class="modal-title text-center w-100" id="exampleAllCity">Выберите Ваш город<br> для перехода</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                @foreach(\App\Models\Domain::orderBy('name', 'asc')->get() as $domain_item)
                    <a class="btn btn-outline-primary mt-3"
                       href="//{{$domain_item->domain}}.ros-telematika.ru{{request()->getPathInfo()}}">
                        {{$domain_item->name}}
                    </a>
                @endforeach
            </div>

        </div>
    </div>
</div>

