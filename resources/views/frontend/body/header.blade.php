@php

    $setting = App\Models\SiteSetting::find(1);


@endphp
<div class="header-style-01">
    <!-- support bar area end -->
    <nav class="navbar navbar-area nav-absolute navbar-expand-lg nav-style-01">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <div class="logo-wrapper">
                    <a href="{{ route('home.view') }}" class="logo">
                        BengalSolutions
{{--                        <img src="{{ URL::to('') }}/admin/images/logo/{{ $setting->logo }}" alt="">--}}
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bizcoxx_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
                <ul class="navbar-nav">
                    <li >
                        <a href="{{ route('home.view') }}">Home</a>

                    </li>
                    <li><a href="{{ route('about.us') }}">About</a></li>
                    <li >
                        <a href="{{ route('case.study.page') }}">Case Studies</a>

                    </li>
                    <li >
                        <a href="{{ route('todo.services') }}">Services</a>

                    </li>
{{--                    <li class="menu-item-has-children">--}}
{{--                        <a href="#">Blog</a>--}}
{{--                        <ul class="sub-menu">--}}
{{--                            <li><a href="blog.html">Blog</a></li>--}}
{{--                            <li><a href="blog-details.html">Blog Details</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                    <li><a href="{{ route('contact.us.page') }}">Contact</a></li>
                </ul>
            </div>
            <div class="nav-right-content">
                <div class="icon-part">
                    <ul>
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li id="search"><a href="#"><i class="flaticon-search-1
                                "></i></a></li>

                        <li class="cart"><a href="#"><i class="flaticon-shopping-cart"></i></a></li>

                    </ul>
                </div>
                <div class="btn-wrapper">
                    <a href="#contactUs" class="boxed-btn blank">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar area end -->
</div>

