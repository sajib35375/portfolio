@extends('frontend.body.app')
@section('content')


    <div class="breadcrumb-area" style="background-image:url({{ URL::to('') }}/admin/images/case/{{ $header->image }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h2 class="page-title">Case Studies</h2>
                        <ul class="page-list">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Case Studies</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Case Studies Area -->
    <div class="case-studies-area-02 padding-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title desktop-center padding-top-110 padding-bottom-50">
                        <h3 class="title">Latest Case studies</h3>
                        <p> Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="case-studies-masonry-wrapper">
                        <ul class="case-studies-menu style-01">
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".cloud">Web Application</li>
                            <li data-filter=".data">Web Design and Development</li>
                            <li data-filter=".cyber">SEO</li>
                            <li data-filter=".analytics">Maintenance</li>
                        </ul>
                        <div class="case-studies-masonry">


                            @foreach($cases as $case)
                            <div class="col-lg-3 col-md-4 col-sm-6 masonry-item {{ $case->category }}">
                                <a href="{{ route('case.study.single',$case->id) }}">
                                <div class="single-case-studies-item">
                                    <div class="thumb">
                                        <img src="{{ URL::to('') }}/admin/images/case/{{ $case->image }}" alt="our work image">
                                    </div>
                                    <div class="cart-icon">
                                        +
                                    </div>
                                </div>
                                </a>
                            </div>
                            @endforeach



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="pricing-plan-area bg-liteblue price-inner padding-bottom-120 margin-top-50 padding-top-110">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title desktop-center padding-bottom-55">
                        <!-- section title -->
                        <h2 class="title">Pricing plans for our all products</h2>
                        <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero. Curabitur ullamcorper ultricies nisi. Nameget dui. </p>
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
    <section class="pricing-plan-area bg-liteblue price-inner padding-bottom-120 margin-top-50 padding-top-110">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title desktop-center padding-bottom-55">
                        <!-- section title -->
                        <h2 class="title">Pricing plans for our all services</h2>
                        <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero. Curabitur ullamcorper ultricies nisi. Nameget dui. </p>
                    </div>
                </div>
            </div>
            <div class="row">



                @foreach($services as $price)
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
    <!-- testimonial area start  -->
    <section class="testimonial-area bg-image-01 padding-top-120 padding-bottom-120" style="background-image:url({{ URL::to('') }}/admin/images/about/{{ $about->testimonial_img }});">
        <div class=" container ">
            <div class="row justify-content-center ">
                <div class="col-lg-8 ">
                    <div class="section-title white desktop-center padding-bottom-20 ">
                        <h2 class="title ">Clients Testimonial</h2>
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
                                            <img src="{{ URL::to('') }}/admin/images/testimonial//{{ $data->photo }}" alt="testimonial">
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
    <!-- testimonial area end -->
    <!-- Team Section -->
    <section class="creative-team-two padding-top-110 ">
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
                                <a href="#"><img src="assets/img/client/01.png" alt=""></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="assets/img/client/02.png" alt=""></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="assets/img/client/03.png" alt=""></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="assets/img/client/04.png" alt=""></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="assets/img/client/01.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
