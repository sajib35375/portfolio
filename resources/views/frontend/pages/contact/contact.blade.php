@extends('frontend.body.app')
@section('content')


    <!-- Breadcrumb Area -->
    <div class="breadcrumb-area" style="background-image:url({{ URL::to('') }}/admin/images/contact/{{ $contact->photo }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h2 class="page-title">Contact Us</h2>
                        <ul class="page-list">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Information -->
    <div class="inner-contact-section padding-top-120 padding-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="single-contact-item">
                        <div class="icon style-01">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="content">
                            <span class="title">Phone</span>
                            <p class="details">+{{ $contact->phone }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single-contact-item">
                        <div class="icon style-02">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="content">
                            <span class="title">Mobile</span>
                            <p class="details">+{{ $contact->mobile }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single-contact-item">
                        <div class="icon style-03">
                            <i class="far fa-envelope-open"></i>
                        </div>
                        <div class="content">
                            <span class="title">Send Mail</span>
                            <p class="details">{{ $contact->email }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single-contact-item">
                        <div class="icon style-04">
                            <i class="far fa-clock"></i>
                        </div>
                        <div class="content">
                            <span class="title">Office Hours
                            </span>
                            <p class="details">{{ $contact->time }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section -->
    <div class="contact-section padding-top-55">
        <div class="map-wrapper">
            <div class="container-fluid p-0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact_map">
                                <div>
                                    <iframe src="{{ $map_link->map }}" width="600" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
