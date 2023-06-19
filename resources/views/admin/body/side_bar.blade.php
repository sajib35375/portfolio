
@php

    $route = \Illuminate\Support\Facades\Route::current()->getName();


@endphp
<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a href="index.html">
                    <!-- logo for regular state and mobile devices -->
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/logo-dark.png') }}" alt="">
                        <h3><b>Bengal Solutions</b> Admin</h3>
                    </div>
                </a>
            </div>
        </div>

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">

            <li>
                <a href="{{ asset('dashboard') }}">
                    <i data-feather="pie-chart"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="message-circle"></i>
                    <span>Slider</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $route=='slider.view' ? 'active' : '' }}"><a href="{{ route('slider.view') }}"><i class="ti-more"></i>All Slider</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="mail"></i> <span>What We can Do</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $route=='todo.view' ? 'active' : '' }}"><a href="{{ route('todo.view') }}"><i class="ti-more"></i>To Do</a></li>
                    <li class="{{ $route=='todo.header.image' ? 'active' : '' }}"><a href="{{ route('todo.header.image') }}"><i class="ti-more"></i>To Do Header Image</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>Global Network</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $route=='global.net' ? 'active' : '' }}"><a href="{{ route('global.net') }}"><i class="ti-more"></i>Network</a></li>

                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i data-feather="grid"></i>
                    <span>Experience</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $route=='exp.view' ? 'active' : '' }}"><a href="{{ route('exp.view') }}"><i class="ti-more"></i>Experience of Tech</a></li>

                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="credit-card"></i>
                    <span>Client Testimonial</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $route=='client.test' ? 'active' : '' }}"><a href="{{ route('client.test') }}"><i class="ti-more"></i>Testimonial</a></li>

                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="hard-drive"></i>
                    <span>Pricing Plan</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $route=='pricing.product.show' ? 'active' : '' }}"><a href="{{ route('pricing.product.show') }}"><i class="ti-more"></i>Products</a></li>
                    <li class="{{ $route=='service.show' ? 'active' : '' }}"><a href="{{ route('service.show') }}"><i class="ti-more"></i>Services</a></li>

                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="package"></i>
                    <span>Case Study</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $route=='case.study' ? 'active' : '' }}"><a href="{{ route('case.study') }}"><i class="ti-more"></i>case study view</a></li>
                    <li class="{{ $route=='case.study.image' ? 'active' : '' }}"><a href="{{ route('case.study.image') }}"><i class="ti-more"></i>case study Header image</a></li>
                    <li class="{{ $route=='header.image.view' ? 'active' : '' }}"><a href="{{ route('header.image.view') }}"><i class="ti-more"></i>case study Background image</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="edit-2"></i>
                    <span>Team</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $route=='team.view'?'active':'' }}"><a href="{{ route('team.view') }}"><i class="ti-more"></i>Team Members</a></li>

                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="inbox"></i>
                    <span>Map View</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $route=='map.view'?'active':'' }}"><a href="{{ route('map.view') }}"><i class="ti-more"></i>Map</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i data-feather="server"></i>
                    <span>About</span>
                    <span class="pull-right-container">
<i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $route=='about.view'?'active':'' }}"><a href="{{ route('about.view') }}"><i class="ti-more"></i>About Us</a></li>
                    <li class="{{ $route=='about.testimonials'?'active':'' }}"><a href="{{ route('about.testimonials') }}"><i class="ti-more"></i>About Testimonials</a></li>


                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="pie-chart"></i>
                    <span>Contacts</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $route=='update.contact.view'?'active':'' }}"><a href="{{ route('update.contact.view') }}"><i class="ti-more"></i>Update Contact Info</a></li>

                </ul>
            </li>



            <li class="{{ $route=='site.setting'?'active':'' }}">
                <a href="{{ route('site.setting') }}">
                    <i data-feather="lock"></i>
                    <span>Site Setting</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
            </li>

            <li class="{{ $route=='contact.mail'?'active':'' }}">
                <a href="{{ route('contact.mail') }}">
                    <i data-feather="lock"></i>
                    <span>Contact Mail List</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
            </li>

            <li class="{{ $route=='appoint.mail'?'active':'' }}">
                <a href="{{ route('appoint.mail') }}">
                    <i data-feather="lock"></i>
                    <span>Appointment Mail List</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
            </li>

            <li class="">
                <a target="_blank" href="https://dashboard.tawk.to/#/admin/6318cef054f06e12d89355a4/chat-widget">
                    <i data-feather="lock"></i>
                    <span>Chat Application</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
            </li>

        </ul>
    </section>

    <div class="sidebar-footer">
        <!-- item-->
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
        <!-- item-->
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
    </div>
</aside>
