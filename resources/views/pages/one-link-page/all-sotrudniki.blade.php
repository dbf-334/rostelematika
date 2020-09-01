@extends('layouts.base')
@inject('units', 'App\Models\Units')


@section('to_header')
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sections.css') }}" rel="stylesheet">

@endsection



@section('content')
    <div class="page-index">
        <div class="container">

            {{--указатель нахождения на странице--}}
            <div class="w-100 text-center my_hr2 pt-2">
                <a href="/" class="badge badge-warning">Карта помещений</a>
                {{--<a href="#" class="modal-show badge badge-warning" data-toggle="modal" data-target="#modal_work_group">{{ $category->name }}</a>--}}
                <span class="badge badge-pill badge-light">{{ $page->h1 }}</span>
            </div>

            {{--Список всех сотрудников компании--}}
            <div class="w-100 pt-4" style="overflow: auto;">
                <h2>Список всех сотрудников ☺</h2>

                @php $i=0; @endphp
                @foreach($units::where('active','=',1)->get() as $units)
                    @php $i++; @endphp
                    <div class="float-left mr-4 mt-2">
                        <span class="badge badge-pill badge-warning">@php echo $i; @endphp</span>
                        <span class="badge badge-pill badge-light">{{ $units->fio }}</span>
                    </div>
                @endforeach
            </div>


            {{--список всех сотрудников (размещаем на карте)--}}
            <div class="mt-5 map">
                @php $i=0; @endphp
                @foreach($units::where('active','=',1)->get() as $units)

                    @php $i++; @endphp

                    <div class="wp_box bg-light text-dark" style="left: {{ $units->left }}px; top: {{ $units->top }}px">
                        {{--определяем цвет шапки окна в зависимости от "половой принадлежности" сотрудника--}}
                        @if ($units->pol == 'ж')
                            <div class="wp_head bg-danger">
                                @else
                                    <div class="wp_head bg-info">
                                        @endif

                                        <div class="wp_logo">
                                            {{--значок с порядковым номером--}}
                                            <div class="wp_pivot badge badge-pill badge-warning" style="left: {{ $units->left }}px; top: {{ $units->top }}px;">
                                                @php echo $i; @endphp
                                            </div>
                                        </div>
                                        <div class="wp_hole">
                                            <div></div>
                                        </div>
                                        {{--<div class="wp_id">--}}
                                        {{--<div>ID: {{ $units->id }}</div>--}}
                                        {{--</div>--}}

                                    </div>

                                    <div class="wp_body">
                                        <div class="wp_body_left ">
                                            <div class="wp_foto ">
                                                <img class="img-fluid" src="/files/foto_user/{{ $units->img }}" alt="" width="90" height="120">
                                            </div>
                                        </div>

                                        <div class="wp_body_right ">
                                            <div class="wp_name ">
                                                {{ $units->fio }}
                                                <div class="dropdown-divider mb-0"></div>
                                            </div>
                                            <strong>Должность:</strong>
                                            <br>
                                            {{ $units->doljnost }}<br>

                                            @if ( $units->birthday != null)
                                                <strong>Дата рождения:</strong>
                                                <br>
                                                @php echo date('d-m-Y',strtotime( $units->birthday )); @endphp
                                                @php echo '('.(date('Y')-date('Y',strtotime( $units->birthday ))).' лет)'; @endphp
                                            @endif

                                            @if ($units->comment != null)
                                                {!! $units->comment !!}
                                            @endif

                                            @if ( ( $units->id_bitrix != NULL ) || ( $units->id_bitrix != 0 ) )
                                                <a class="btn btn-secondary btn-sm mt-3" target="_blank" href="https://portal.stavtrack.ru/company/personal/user/{{ $units->id_bitrix }}/">Подробно...</a>
                                            @endif
                                            {{--menu-item-link--}}
                                        </div>
                                    </div>

                            </div>

                            @endforeach

                    </div>

        </div>
    </div>
@endsection