@extends('frontend.body.app')
@section('content')



    <div class="header-slider-one">


@foreach($all_slider as $slider)

        <div class="header-area header-bg" style="background-image:url('admin/images/{{ $slider->photo }}');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="header-inner">
                            <!-- header inner -->
                            <h1 class="title">{{ $slider->title }}
                            </h1>
                            <span>{{ $slider->short_text }}</span>
                            <div class="btn-wrapper  desktop-left padding-top-30">
                                <a href="{{ route('todo.services') }}" class="boxed-btn reverse-color">Our Services</a>
                            </div>
                        </div>
                        <!-- //.header inner -->
                    </div>
                </div>
            </div>
        </div>

@endforeach
    </div>

    <style>

        .header-area.header-bg {
            background-color: #000;
            background-position: center;
            background-size: cover;
            position: relative;
            z-index: 0;
            height: 919px!important;
        }
    </style>

    <div class="header-bottom-area padding-bottom-110">
        <div class="container">
            <div class="header-bottom-inner style-02">
                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-header-bottom-item-02">
                            <div class="icon style-01">

                                <i class="flaticon-network"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Provide all kind of IT service</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-header-bottom-item-02">
                            <div class="icon style-03">
                                <i class="flaticon-safe"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Solutions for all security
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-header-bottom-item-02">
                            <div class="icon style-02">
                                <i class="flaticon-businessman"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Most expert peoples
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-header-bottom-item-02">
                            <div class="icon style-04">
                                <i class="flaticon-translate"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Global support for all</h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <section class="what-we-cover padding-bottom-85">
        <div class="container" >
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title desktop-center margin-bottom-55">
                        <h3 class="title">What we Do</h3>
                        <p> We can build any kind of Web Applications and at the same time we provide SEO and Web maintanence services.</p>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach($all_todo as $todo)

                <div class="col-lg-3 col-md-6 col-sm-6" >
                    <a href="{{ route('todo.services.single',$todo->id) }}">
                    <div class="single-what-we-cover-item-02 margin-bottom-30" style="height: 330px;">
                        <div class="single-what-img">
                            <img src="{{ URL::to('') }}/admin/images/todo/{{ $todo->photo }}" alt="">
                        </div>
                        <div class="icon-02 style-01">
                            <i class="{{ $todo->icon_class }}"></i>
                        </div>
                        <div class="content" style="height: 180px;">
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
                        {{--<a href="" class="boxed-btn reverse-color">Learn More</a>--}}
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
    <!-- top experince area start -->
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
                            <p style="width: 619px;">{{ $exp->quote }}</p>
                            <div class="sing-img padding-top-10">
                                <img src="frontend/assets/img/experince/sign.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- top experince area end -->
    <style>
        .experience-content-02 .sign-area p {
            font-size: 24px;
            font-weight: 500;
            max-width: 600px;
        }
    </style>
    <!-- testimonial area start  -->
    <section class="testimonial-area bg-image padding-top-110">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title desktop-center padding-bottom-20">
                        <h2 class="title">Clients Testimonial</h2>
                    </div>
                </div>
            </div>
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

    <!--=======================
    Client Section
    ========================-->
{{--    <div class="client-section padding-bottom-70 padding-top-85">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-lg-8">--}}
{{--                    <div class="section-title desktop-center padding-bottom-25">--}}
{{--                        <h3>--}}
{{--                            We have more then 20 satified client thoses work with us.--}}
{{--                        </h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="client-area">--}}
{{--                        <div class="client-active-area">--}}
{{--                            <div class="single-brand">--}}
{{--                                <a href="#"><img src="frontend/assets/img/client/01.png" alt=""></a>--}}
{{--                            </div>--}}
{{--                            <div class="single-brand">--}}
{{--                                <a href="#"><img src="frontend/assets/img/client/02.png" alt=""></a>--}}
{{--                            </div>--}}
{{--                            <div class="single-brand">--}}
{{--                                <a href="#"><img src="frontend/assets/img/client/03.png" alt=""></a>--}}
{{--                            </div>--}}
{{--                            <div class="single-brand">--}}
{{--                                <a href="#"><img src="frontend/assets/img/client/04.png" alt=""></a>--}}
{{--                            </div>--}}
{{--                            <div class="single-brand">--}}
{{--                                <a href="#"><img src="frontend/assets/img/client/01.png" alt=""></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <!-- Price Section -->
    <section class="pricing-plan-area bg-liteblue price-inner padding-bottom-120 margin-top-50 padding-top-110">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title desktop-center padding-bottom-55">
                        <!-- section title -->
                        <h2 class="title">Pricing plans for our all products</h2>
                        <p >
                            We understand that not all businesses are the same. That is why we offer a range of pricing plans for our services. Explore the options and choose the one that suits you best. We guarantee the best services at the best price.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">



                @foreach($prices as $price)
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="single-price-plan-01">
                        <!-- single price plan one -->
                        <div class="price-header">
                            <div class="name-box">
                                <h4 class="name">{{ $price->category }}</h4>
                            </div>
                            <div  class="price-wrap">
                                <span class="price">{{ $price->price }}</span><br><br><span class="month">{{ $price->price == 'Negotiable'?'':'/'.$price->type }}</span>
                            </div>
                        </div>
                        <div class="price-body">
                            <ul>
                                <li>{{ $price->lineOne }}</li>
                                <li>{{ $price->lineTwo }}</li>
                                <li>{{ $price->lineThree }}</li>
                                <li>{{ $price->lineFour }}</li>
                                <li>{{ $price->lineFive }}</li>
                            </ul>
                        </div>
                        <div class="btn-wrapper">
                            <a href="#" class="boxed-btn">Get Started</a>
                        </div>
                    </div>
                    <!-- //. single price plan one -->
                </div>

                @endforeach




            </div>
        </div>
    </section>
    <!-- Case Studies Area -->

{{--    Pricing for all of our Services--}}


{{--    <section class="pricing-plan-area bg-liteblue price-inner padding-bottom-120  padding-top-110">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-lg-8">--}}
{{--                    <div class="section-title desktop-center padding-bottom-55">--}}
{{--                        <!-- section title -->--}}
{{--                        <h2 class="title">Pricing plans for our all services</h2>--}}
{{--                        <p >--}}
{{--                            We understand that not all businesses are the same. That is why we offer a range of pricing plans for our services. Explore the options and choose the one that suits you best. We guarantee the best services at the best price.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}



{{--                @foreach($services as $price)--}}
{{--                    <div class="col-md-6 col-lg-4 col-xl-4">--}}
{{--                        <div class="single-price-plan-01">--}}
{{--                            <!-- single price plan one -->--}}
{{--                            <div class="price-header">--}}
{{--                                <div class="name-box">--}}
{{--                                    <h4 class="name">{{ $price->category }}</h4>--}}
{{--                                </div>--}}
{{--                                <div  class="price-wrap">--}}
{{--                                    <span class="price">{{ $price->price }}</span><br><br><span class="month">{{ $price->price == 'Negotiable'?'':'/'.$price->type }}</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="price-body">--}}
{{--                                <ul>--}}
{{--                                    <li>{{ $price->lineOne }}</li>--}}
{{--                                    <li>{{ $price->lineTwo }}</li>--}}
{{--                                    <li>{{ $price->lineThree }}</li>--}}
{{--                                    <li>{{ $price->lineFour }}</li>--}}
{{--                                    <li>{{ $price->lineFive }}</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="btn-wrapper">--}}
{{--                                <a href="#" class="boxed-btn">Get Started</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- //. single price plan one -->--}}
{{--                    </div>--}}

{{--                @endforeach--}}




{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    /////for our services////////--}}
    <div class="case-studies-area-02 bg-image padding-bottom-120" style="background-image: url({{ URL::to('') }}/admin/images/case/{{ $header_case->banner_image }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title white desktop-center padding-top-110 padding-bottom-50">
                        <h3 class="title">Latest completed projects</h3>
                        <p> Our project is our work which reflects your satisfaction.  </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="case-studies-masonry-wrapper">
                        <ul class="case-studies-menu">
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".cloud">Web Application</li>
                            <li data-filter=".data">Web Development</li>
                            <li data-filter=".cyber">SEO</li>
                            <li data-filter=".analytics">Web Maintenance </li>
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

    <!-- Team Section -->

    <section class="creative-team-two padding-top-110 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="section-title desktop-center padding-bottom-55">
                        <h3 class="title">Our Team</h3>
                        <p>We started our journey with these team members. It increases day by day because of your happiness.</p>
                    </div>
                </div>
            </div>
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

    <!-- Contact Section -->
    <div class="contact-section padding-top-55">
        <div class="map-wrapper">
            <div class="container-fluid p-0">
                <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact_map">
                            <div>
                                <iframe src="{{ $map_link->map }}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>




                    <div id="contactUs" class="col-md-6">
                        <div class="contact-info bg-white">

                                <div class="col-md-12">
                                    <div class="section-title">
                                        <h4 class="title">Get in touch</h4>
                                    </div>
                                </div>


                            <form action="{{ route('contact.us') }}" class="contact-page-form" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input name="name" type="text" class="form-control" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input name="email" type="email" class="form-control" placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input name="phone" type="text" class="form-control" placeholder="Your Phone">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="msg" class="form-control" cols="4" rows="4" placeholder="Message"></textarea>
                                        </div>
                                        <div class="btn-wrapper">
                                            <button type="submit"  class="boxed-btn"><span>Send Message</span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
        </div>
        </div>
    </div>
</div>

@endsection
