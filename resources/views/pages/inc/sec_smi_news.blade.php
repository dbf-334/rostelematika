
{{-- Статьи СМИ о компании --}}

<div id="sec_smi_news" class="container my-5">
    <div class="w-100 text-center">
        <h2>СМИ о нас</h2>
    </div>

    <div id="carouselExampleControls" class="carousel slide" data-interval="false"> {{-- для анимации data-interval--}}
        <div class="carousel-inner">

            @php $portfolio_active=1; @endphp
            @foreach(DB::table('reviews')->where('type','3')->where('visible','=','1')->orderBy('id', 'desc')->take(4)->get() as $item)
                <div class="carousel-item
                    @php
                    if ($portfolio_active==1) { //делаем активной первую запись
                        $portfolio_active=0;
                        echo 'active';
                        }
                @endphp">
                    <div class="card portfolio-box">
                        <div class="row">
                            <div class="card portfolio__data">
                                <div class="card-body">
                                    <img src="/img/section/smi_o_nas/{{$item->img}}">
                                </div>
                            </div>
                            <div class="card portfolio__review">
                                <div class="card-body">
                                    <div class="review__text">
                                        <p>{!! $item->body !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <i class="svg-icon icon-arrow-left-gray"></i>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <i class="svg-icon icon-arrow-right-gray"></i>
        </a>
    </div>

</div>
