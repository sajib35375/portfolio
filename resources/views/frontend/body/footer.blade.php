@php

    $setting = App\Models\SiteSetting::find(1);


@endphp




<footer class="footer-area">
    <div class="footer-top padding-top-90 padding-bottom-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget widget">
                        <div class="about_us_widget">
                            <a href="index.html" class="footer-logo"><img src="{{ URL::to('') }}/admin/images/logo/{{ $setting->logo }}" alt=""></a>
                            <p>{{ $setting->footer_text }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget widget ">
                        <h4 class="widget-title">Contact us</h4>
                        <ul class="contact_info_list">
                            <li class="single-info-item">
                                <div class="icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="details">
                                    {{ $setting->address }}
                                </div>
                            </li>
                            <li class="single-info-item">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="details">
                                    +{{ $setting->phone }}
                                </div>
                            </li>
                            <li class="single-info-item">
                                <div class="icon">
                                    <i class="fas fa-envelope-open"></i>
                                </div>
                                <div class="details">
                                    {{ $setting->email }}
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget widget widget_nav_menu">
                        <h4 class="widget-title">Usefull Links</h4>
                        <div class="widget-ul-wrapper">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Services</a></li>
                            </ul>
                            <ul class="second-ul">
                                <li><a href="#">Case Studies</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Portfolio</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget widget widget_nav_menu">
                        <h4 class="widget-title">Services</h4>
                        <ul>
                            <li><a href="#">Cyber Security</a></li>
                            <li><a href="#">Data manegment
                                </a></li>
                            <li><a href="#">Analytics</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-item">
                        <div class="copyright-area-inner">
                            &copy; Copyright 2020 BengalSolutions All rights reserved.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
