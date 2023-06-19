@extends('frontend.body.app')
@section('content')



<div class="breadcrumb-area" style="background-image:url({{ URL::to('') }}/admin/images/about/{{ $about->banner_img }})">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner">
                    <h2 class="page-title">About Us</h2>
                    <ul class="page-list">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- top experince area start -->
<section class="top-experience-area padding-top-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="experience-author padding-bottom-100">
                    <div class="thumb-1">
                        <img src="{{ URL::to('') }}/admin/images/about/{{ $about->exp_img_one }}" alt="">
                    </div>
                    <div class="thumb-2">
                        <img src="{{ URL::to('') }}/admin/images/about/{{ $about->exp_img_two }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 p-0">
                <div class="experience-content-03">
                    <div class="content">
                        <h2 class="title">{{ $about->title }}</h2>
                        <p>{{ $about->short_text }}</p>
                        <div class="icon-area">
                            <div class="icon">
                                <i class="flaticon-right-quote-1"></i>
                            </div>
                            <p>{{ $about->quote }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- top experince area end -->
<div class="header-bottom-area padding-bottom-80 padding-top-80">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-header-bottom-item-02">
                    <div class="icon style-01">
                        <i class="flaticon-network"></i>
                    </div>
                    <div class="content">
                        <h4 class="title">Provide all kind of it service</h4>
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
{{--                        <a href="" class="boxed-btn reverse-color">Learn More</a>--}}
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
                <div class="experience-right style-01" style="background-image: url({{ URL::to('') }}/admin/images/about/{{ $about->exp_bgc_img }});">
                    <div class="vdo-btn">
                        <a class="video-play-btn mfp-iframe" href="{{ $exp->video }}"><i class="fas fa-play"></i></a>
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
                            <img src="{{ asset('frontend/assets/img/experince/sign.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- top experince area end -->

<!-- Team Section -->
<section class="creative-team-two padding-top-110 padding-bottom-45">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title desktop-center padding-bottom-55">
                    <h3 class="title">Our Team</h3>
                    <p> Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
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
<!--=======================
Client Section
========================-->
<div class="client-section bg-liteblue padding-bottom-70 padding-top-70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="client-area">
                    <div class="client-active-area">
                        <div class="single-brand">
                            <a href="#"><img src="frontend/assets/img/client/01.png" alt=""></a>
                        </div>
                        <div class="single-brand">
                            <a href="#"><img src="frontend/assets/img/client/02.png" alt=""></a>
                        </div>
                        <div class="single-brand">
                            <a href="#"><img src="frontend/assets/img/client/03.png" alt=""></a>
                        </div>
                        <div class="single-brand">
                            <a href="#"><img src="frontend/assets/img/client/04.png" alt=""></a>
                        </div>
                        <div class="single-brand">
                            <a href="#"><img src="frontend/assets/img/client/01.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- testimonial area start  -->
<section class="testimonial-area bg-image-01 padding-top-120 padding-bottom-120" style="background-image:url({{ URL::to('') }}/admin/images/about/{{ $about->testimonial_img }});">
    <div class=" container ">
        <div class="row justify-content-center ">
            <div class="col-lg-8 ">
                <div class="section-title white desktop-center padding-bottom-20 ">
                    <h2 class="title ">Testimonial</h2>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-12 ">
                <div class="testimonial-carousel-area margin-top-10 ">
                    <div class="testimonial-carousel ">



                        @foreach($testimonial as $data)
                        <div class="single-testimonial-item ">
                            <div class="content style-01">
                                <div class="thumb ">
                                    <img src="{{ URL::to('') }}/admin/images/about/{{ $data->photo }}" alt="testimonial">
                                </div>
                                <p class="description ">{{ $data->quote }}</p>
                                <div class="author-details ">
                                    <div class="author-meta ">
                                        <h4 class="title ">{{ $data->name }}
                                        </h4>
                                        <span class="designation ">{{ $data->designation }}</span>
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
<!-- Contact Section -->
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

                    <div class="col-md-6">
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
                                            <button type="submit" href="#" class="boxed-btn"><span>Send Message</span></button>
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
