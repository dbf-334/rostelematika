
{{-- Примеры внедрения и отзывы наших клиентов --}}

<div id="sec_reviews" class="container mb-5">
    <div class="w-100 text-center">
        <h2 class="m-0 pt-5">Благодарственные письма наших Клиентов</h2>
    </div>

    <div id="carouselExampleReviews" class="carousel slide" data-interval="false"> {{-- для анимации data-interval--}}
        <div class="carousel-inner">

            <div class="carousel-item active">
                <div class="card">
                    <div class="row">

                        @php $review_2=0; @endphp

                        @foreach(DB::table('reviews')->where('type','0')->where('visible','=','1')->orderBy('id', 'desc')->take(8)->get() as $item)
                            @php
                                if ($review_2==-1) {
                                    $review_2=0;
                                    echo '<div class="carousel-item">
                                        <div class="card">
                                        <div class="row">';
                                }
                            @endphp


                            <div class="card card-reviews border-0 text-center">
                                <a href="/reviews/{{$item->id}}.html">
                                    <div class="card-img pt-2">
                                        <img src="/img/reviews/{{$item->img}}" alt="" width="180" height="260"
                                             class="border border-secondary border-2 rounded">
                                    </div>
                                    <div class="card-body p-0 mt-3">
                                        {{$item->title}}
                                    </div>
                                </a>
                            </div>


                            @php
                                $review_2++;
                                if ($review_2==4) {
                                    $review_2=-1;
                                    echo '</div></div></div>';
                                }
                            @endphp
                        @endforeach

        </div>

        <a href="/reviews" class="btn btn_bg-gray mt-3">Все отзывы наших Клиентов</a>

        <a class="carousel-control-prev" href="#carouselExampleReviews" role="button" data-slide="prev">
            <i class="svg-icon icon-arrow-left-gray"></i>
        </a>
        <a class="carousel-control-next" href="#carouselExampleReviews" role="button" data-slide="next">
            <i class="svg-icon icon-arrow-right-gray"></i>
        </a>
    </div>

</div>
