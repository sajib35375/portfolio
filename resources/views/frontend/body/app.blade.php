<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bengal Solutions</title>
    <!-- favicon -->
    <link rel=icon href=favicon.ico sizes="20x20" type="image/png">
    <!-- animate -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.min.css') }}">
    <!-- flaticon -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <!-- responsive Stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
{{--    toaster--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
</head>

<body>
<!-- //. search Popup -->
<div class="body-overlay" id="body-overlay"></div>
<div class="search-popup" id="search-popup">
    <form action="{{ route('search.data') }}" id="search_form" class="search-form" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" name="search" class="form-control" placeholder="Search.....">
        </div>
        <button type="submit"></button>
    </form>
</div>

@include('frontend.body.header')

@yield('content')
<!-- footer area start -->
@include('frontend.body.footer')
<!-- footer area end -->



<!-- back to top area start -->
<div class="back-to-top">
    <span class="back-top"><i class="fa fa-angle-up"></i></span>
</div>
<!-- back to top area end -->

<!-- preloader area start -->
{{--<div class="preloader" id="preloader">--}}
{{--    <div class="preloader-inner">--}}
{{--        <div class="cancel-preloader">--}}
{{--            <a href="#">Cancel Preloader</a>--}}
{{--        </div>--}}
{{--        <div class="spinner">--}}
{{--            <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">--}}
{{--                <circle class="length" fill="none" stroke-width="8" stroke-linecap="round" cx="33" cy="33" r="28">--}}
{{--                </circle>--}}
{{--            </svg>--}}
{{--            <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">--}}
{{--                <circle fill="none" stroke-width="8" stroke-linecap="round" cx="33" cy="33" r="28"></circle>--}}
{{--            </svg>--}}
{{--            <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">--}}
{{--                <circle fill="none" stroke-width="8" stroke-linecap="round" cx="33" cy="33" r="28"></circle>--}}
{{--            </svg>--}}
{{--            <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">--}}
{{--                <circle fill="none" stroke-width="8" stroke-linecap="round" cx="33" cy="33" r="28"></circle>--}}
{{--            </svg>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- preloader area end -->

<!-- jquery -->
<script src="{{ asset('frontend/assets/js/jquery-2.2.4.min.js') }}"></script>
<!-- popper -->
<script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
<!-- bootstrap -->
<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
<!-- magnific popup -->
<script src="{{ asset('frontend/assets/js/jquery.magnific-popup.js') }}"></script>
<!-- wow -->
<script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
<!-- owl carousel -->
<script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
<!-- waypoint -->
<script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
<!-- counterup -->
<script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
<!-- imageloaded -->
<script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7eALQrRUekFNQX71IBNkxUXcz-ALS-MY&callback=initMap" async defer></script>
<!-- google map active -->
<script src="{{ asset('frontend/assets/js/goolge-map-activate.js') }}"></script>
<!-- isotope -->
<script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
<!-- main js -->
<script src="{{ asset('frontend/assets/js/main.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    @if (Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type)
    {
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif
</script>

<!--cripts-->
<!--Start of Tawk.to Script-->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/6318cef054f06e12d89355a4/1gccegnui';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
<!--End of Tawk.to Script--><!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->






</body>

</html>
