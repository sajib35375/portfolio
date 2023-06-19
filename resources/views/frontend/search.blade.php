@extends('frontend.body.app')
@section('content')




    <section class="what-we-cover padding-bottom-85">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title desktop-center margin-bottom-55">
                        <h3 class="title">What we Do</h3>
                        <p> Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. </p>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach($all_todo as $todo)

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a href="{{ route('todo.services.single',$todo->id) }}">
                            <div class="single-what-we-cover-item-02 margin-bottom-30">
                                <div class="single-what-img">
                                    <img src="{{ URL::to('') }}/admin/images/todo/{{ $todo->photo }}" alt="">
                                </div>
                                <div class="icon-02 style-01">
                                    <i class="{{ $todo->icon_class }}"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">{{ $todo->title_one }}</h4>
                                    <p>{{ \Illuminate\Support\Str::of($todo->long_text_one)->words(10) }}</p>
                                </div>
                            </div>
                        </a>
                    </div>

                @endforeach


            </div>
        </div>
    </section>
    <!-- Global Network  -->

@if($net)
    <div class="global-network-area bg-liteblue padding-bottom-120 padding-top-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="global-content">
                        <h2 class="title">
                            {{ $net->title }}
                        </h2>
                        <p>
                            {{ $net->short_text }}
                        </p>
                        <div class="btn-wrapper padding-top-25">
                            {{--                            <a href="" class="boxed-btn reverse-color">Learn More</a>--}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="map-img">
                        <img src="{{ URL::to('') }}/admin/images/map/{{ $net->map }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
@if($exp)
    <section class="top-experience-area bg-blue">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <div class="experience-right style-01" style="background-image: url('{{ URL::to('') }}/uploads/experience/{{ $exp->photo }}');">
                        <div class="vdo-btn">

                            <a class="video-play-btn mfp-iframe" href="{{ $exp->video }}"><i
                                    class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="experience-content-02">
                        <h2 class="title">{{ $exp->title }}</h2>
                        <p>{{ $exp->short_text }}</p>
                        <div class="sign-area">
                            <p>{{ $exp->quote }}</p>
                            <div class="sing-img padding-top-10">
                                <img src="frontend/assets/img/experince/sign.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endif


    <section class="testimonial-area bg-image padding-top-110">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-carousel-area margin-top-10">
                        <div class="testimonial-carousel-02">

                            @foreach($testimonial as $testi)

                                <div class="single-testimonial-item-02">
                                    <div class="content">
                                        <div class="content-wrapper">
                                            <p class="description">{{ $testi->quote }}</p>
                                            <div class="icon">
                                                <i class="flaticon-right-quote-1"></i>
                                            </div>
                                        </div>
                                        <div class="author-details">
                                            <div class="thumb">
                                                <img src="{{ URL::to('') }}/admin/images/testimonial/{{ $testi->photo }}" alt="testimonial">
                                            </div>
                                            <div class="author-meta">
                                                <h4 class="title">{{ $testi->name }}
                                                </h4>
                                                <span class="designation">{{ $testi->designation }}, {{ $testi->organization }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            @endforeach




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial area end -->



{{--    <div class="case-studies-area-02 bg-image padding-bottom-120" style="background-image: url({{ URL::to('') }}/admin/images/case/{{ $header_case->banner_image }});">--}}

            <div class="row">
                <div class="col-lg-12">
                    <div class="case-studies-masonry-wrapper">
                        <ul class="case-studies-menu">
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".cloud">Cloud Support</li>
                            <li data-filter=".data">Data Support</li>
                            <li data-filter=".cyber">Cyber Support</li>
                            <li data-filter=".analytics">Analytics </li>
                        </ul>
                        <div class="case-studies-masonry">



                            @foreach($cases as $case)
                                <a href="{{ route('case.study.single',$case->id) }}">
                                    <div class="col-lg-3 col-md-4 col-sm-6 masonry-item {{ $case->category }}">
                                        <div class="single-case-studies-item">
                                            <div class="thumb">
                                                <img src="{{ URL::to('') }}/admin/images/case/{{ $case->image }}" alt="our work image">
                                            </div>
                                            <div class="cart-icon">
                                                +
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <section class="creative-team-two padding-top-110 ">

            <div class="row">

                @foreach($team as $data)

                    <div class="col-lg-3  col-sm-6 padding-bottom-60">
                        <div class="team-section">
                            <div class="team-img-cont">
                                <img src="{{ URL::to('') }}/admin/images/team/{{ $data->image }}" alt="">
                                <div class="social-link">
                                    <ul>
                                        <li><a href="https://www.facebook.com/codingeek.net"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://www.instagram.com/codingeeknet"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="https://www.linkedin.com/company/codingeek"><i class="fab fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-text">
                                <h4 class="title">{{ $data->name }}</h4>
                                <span>{{ $data->designation }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>

@endsection
