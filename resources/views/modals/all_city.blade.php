{{--иньекция для выборки данных из БД--}}
@inject('tbl_domain', 'App\Models\Domain')

<style>
    /*корректировка стилей для данного модального окна*/
    #modal-all-city .modal-dialog {
        max-width: 27rem;
    }
    #modal-all-city .modal-dialog .modal-content {
        background-image: none;
    }
    #modal-all-city .modal-dialog .modal-content .modal-body {
        background-color: #f2f2f2;
    }
</style>


{{--модальное окно выбора городов--}}
<div class="modal fade modal-base-form" id="modal-all-city" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="width: 50rem;">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title w-100 text-center" id="exampleModalLabel">Выберите Ваш город для перехода</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-line">
                <div class="box1"></div>
                <div class="box2"></div>
            </div>

            <div class="modal-body p-3">
                {{--<h3 class="w-100 text-center">Выберите Ваш город для перехода</h3>--}}
                @foreach($tbl_domain::orderBy('name', 'asc')->get() as $city_item)
                    <a class="btn btn-outline-danger mt-3 mr-2"
                       href="//{{$city_item->domain}}.ros-telematika.test{{request()->getPathInfo()}}">{{$city_item->name}}</a>
                @endforeach
            </div>

        </div>
    </div>
</div>

