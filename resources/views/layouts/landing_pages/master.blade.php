<!doctype html>
<html lang="en" dir="ltr">


 <head>
    <meta charset="utf-8" />
    <title>OTA Maldives | @yield("title")</title>


    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset("logo_thumbnail.png")}}" />

    <!-- Css -->
    <link href="{{asset("landing_pages/assets/libs/tiny-slider/tiny-slider.css")}}" rel="stylesheet">
    <link href="{{asset("landing_pages/assets/libs/tobii/css/tobii.min.css")}}" rel="stylesheet">
    <link href="{{asset("landing_pages/assets/libs/js-datepicker/datepicker.min.css")}}" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{asset("landing_pages/assets/css/bootstrap.min.css")}}" id="bootstrap-style" class="theme-opt" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset("landing_pages/assets/css/icons.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("landing_pages/assets/libs/%40iconscout/unicons/css/line.css")}}" type="text/css" rel="stylesheet" />
    <!-- Style Css-->
    <link href="{{asset("landing_pages/assets/css/style.min.css")}}" id="color-opt" class="theme-opt" rel="stylesheet" type="text/css" />
    <link href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/css/intlTelInput.css"   rel="stylesheet" type="text/css" />
@yield("css")
</head>

<body>
<!-- Loader -->
<!-- <div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div> -->
<!-- Loader -->


<!-- Navbar Start -->
@include("pages.landing_pages.header")

<!--end header-->
<!-- Navbar End -->

@yield("body")








<!--Note: Cookies Js including in plugins.init.js (path like; js/plugins.init.js) and Cookies css including in _helper.scss (path like; scss/_helper.scss)-->
<!-- Cookies End -->


<!-- Offcanvas Start -->
<div class="offcanvas offcanvas-end shadow border-0" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">

    <div class="offcanvas-body p-4">
        <div class="row">
            <div class="col-12">
                <img src="{{asset("landing_pages/assets/images/contact.svg")}}" class="img-fluid d-block mx-auto" alt="">
                <div class="card border-0 mt-4" style="z-index: 1">
                    <div class="card-body p-0">
                        <h4 class="card-title text-center">Login</h4>
                        <form class="login-form mt-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <i data-feather="user" class="fea icon-sm icons"></i>
                                            <input type="email" class="form-control ps-5" placeholder="Email" name="email" required="">
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Password <span class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <i data-feather="key" class="fea icon-sm icons"></i>
                                            <input type="password" class="form-control ps-5" placeholder="Password" required="">
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-12">
                                    <div class="d-flex justify-content-between">
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                                            </div>
                                        </div>
                                        <p class="forgot-pass mb-0"><a href="" class="text-dark fw-bold">Forgot password ?</a></p>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-12 mb-0">
                                    <div class="d-grid">
                                        <button class="btn btn-primary">Sign in</button>
                                    </div>
                                </div><!--end col-->

                                <div class="col-12 text-center">
                                    <p class="mb-0 mt-3"><small class="text-dark me-2">Don't have an account ?</small> <a href="" class="text-dark fw-bold">Sign Up</a></p>
                                </div><!--end col-->
                            </div><!--end row-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="offcanvas-footer p-4 border-top text-center">
        <ul class="list-unstyled social-icon social mb-0">
            <li class="list-inline-item mb-0"><a href="" target="_blank" class="rounded"><i class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a></li>
            <li class="list-inline-item mb-0"><a href="" target="_blank" class="rounded"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
            <li class="list-inline-item mb-0"><a href="" target="_blank" class="rounded"><i class="uil uil-behance align-middle" title="behance"></i></a></li>
            <li class="list-inline-item mb-0"><a href="" target="_blank" class="rounded"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
            <li class="list-inline-item mb-0"><a href="" target="_blank" class="rounded"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
            <li class="list-inline-item mb-0"><a href="" target="_blank" class="rounded"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
            <li class="list-inline-item mb-0"><a href="" class="rounded"><i class="uil uil-envelope align-middle" title="email"></i></a></li>
            <li class="list-inline-item mb-0"><a href="" target="_blank" class="rounded"><i class="uil uil-globe align-middle" title="website"></i></a></li>
        </ul><!--end icon-->
    </div>
</div>
<!-- Offcanvas End -->
<!-- Switcher Start -->


<div class="offcanvas offcanvas-start shadow border-0" tabindex="-1" id="switcher-sidebar" aria-labelledby="offcanvasLeftLabel">
    <div class="offcanvas-header p-4 border-bottom">
        <h5 id="offcanvasLeftLabel" class="mb-0">
            <img src="{{asset("landing_pages/assets/images/logo-dark.png")}}" height="24" class="light-version" alt="">
            <img src="{{asset("landing_pages/assets/images/logo-light.png")}}" height="24" class="dark-version" alt="">
        </h5>
        <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas" aria-label="Close"><i class="uil uil-times fs-4"></i></button>
    </div>
    <div class="offcanvas-body p-4 pb-0">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h6 class="fw-bold">Select your color</h6>
                    <ul class="pattern mb-0 mt-3">
                        <li>
                            <a class="color-list rounded color1" href="javascript: void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Primary" onclick="setColorPrimary()"></a>
                        </li>
                        <li>
                            <a class="color-list rounded color2" href="javascript: void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Green" onclick="setColor('green')"></a>
                        </li>
                        <li>
                            <a class="color-list rounded color3" href="javascript: void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Yellow" onclick="setColor('yellow')"></a>
                        </li>
                    </ul>
                </div>
                <div class="text-center mt-4 pt-4 border-top">
                    <h6 class="fw-bold">Theme Options</h6>

                    <ul class="text-center style-switcher list-unstyled mt-4">
                        <li class="d-grid"><a href="javascript:void(0)" class="rtl-version t-rtl-light" onclick="setTheme('style-rtl')"><img src="{{asset("landing_pages/assets/images/demos/rtl.png")}}" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">RTL Version</span></a></li>
                        <li class="d-grid"><a href="javascript:void(0)" class="ltr-version t-ltr-light" onclick="setTheme('style')"><img src="{{asset("landing_pages/assets/images/demos/ltr.png")}}" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">LTR Version</span></a></li>
                        <li class="d-grid"><a href="javascript:void(0)" class="dark-rtl-version t-rtl-dark" onclick="setTheme('style-dark-rtl')"><img src="{{asset("landing_pages/assets/images/demos/dark-rtl.png")}}" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">RTL Version</span></a></li>
                        <li class="d-grid"><a href="javascript:void(0)" class="dark-ltr-version t-ltr-dark" onclick="setTheme('style-dark')"><img src="{{asset("landing_pages/assets/images/demos/dark.png")}}" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">LTR Version</span></a></li>
                        <li class="d-grid"><a href="javascript:void(0)" class="dark-version t-dark mt-4" onclick="setTheme('style-dark')"><img src="{{asset("landing_pages/assets/images/demos/dark.png")}}" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">Dark Version</span></a></li>
                        <li class="d-grid"><a href="javascript:void(0)" class="light-version t-light mt-4" onclick="setTheme('style')"><img src="{{asset("landing_pages/assets/images/demos/ltr.png")}}" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">Light Version</span></a></li>
                        <li class="d-grid"><a href="" target="_blank" class="mt-4"><img src="{{asset("landing_pages/assets/images/demos/admin.png")}}" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">Admin Dashboard</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="offcanvas-footer p-4 border-top text-center">
        <ul class="list-unstyled social-icon social mb-0">
            <li class="list-inline-item mb-0"><a href="https://1.envato.market/landrick" target="_blank" class="rounded"><i class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a></li>
            <li class="list-inline-item mb-0"><a href="https://dribbble.com/shreethemes" target="_blank" class="rounded"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
            <li class="list-inline-item mb-0"><a href="https://www.behance.net/shreethemes" target="_blank" class="rounded"><i class="uil uil-behance align-middle" title="behance"></i></a></li>
            <li class="list-inline-item mb-0"><a href="https://www.facebook.com/shreethemes" target="_blank" class="rounded"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
            <li class="list-inline-item mb-0"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="rounded"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
            <li class="list-inline-item mb-0"><a href="https://twitter.com/shreethemes" target="_blank" class="rounded"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
            <li class="list-inline-item mb-0"><a href="mailto:support@shreethemes.in" class="rounded"><i class="uil uil-envelope align-middle" title="email"></i></a></li>
            <li class="list-inline-item mb-0"><a href="https://shreethemes.in/" target="_blank" class="rounded"><i class="uil uil-globe align-middle" title="website"></i></a></li>
        </ul>
    </div>
</div>
<!-- Switcher End -->

<!-- Back to top -->
<a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up" class="fea icon-sm icons align-middle"></i></a>
<!-- Back to top -->

<!-- javascript -->
<!-- JAVASCRIPT -->
<script src="{{asset("landing_pages/assets/libs/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- SLIDER -->
<script src="{{asset("landing_pages/assets/libs/tiny-slider/min/tiny-slider.js")}}"></script>
<!-- Lightbox -->
<script src="{{asset("landing_pages/assets/libs/tobii/js/tobii.min.js")}}"></script>
<!-- Datepicker -->
<script src="{{asset("landing_pages/assets/libs/js-datepicker/datepicker.min.js")}}"></script>
<!-- Main Js -->
<script src="{{asset("landing_pages/assets/libs/feather-icons/feather.min.js")}}"></script>
<script src="{{asset("landing_pages/assets/js/plugins.init.js")}}"></script><!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
<script src="{{asset("landing_pages/assets/js/app.js")}}"></script>
<script src="{{asset("admin/js/jquery.min.js")}}"></script>
<script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script>
    $(function(){
        $(".numbers").keypress(function (e) {
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                $("#errmsg").html("Number Only").stop().show().fadeOut("slow");
                return false;
            }
        });
    });
</script>

        <!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
@yield("script")
</body>

 </html>
