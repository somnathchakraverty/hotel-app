@extends("layouts.landing_pages.master")
@section("title",$title)

@section("body")
    <!-- Hero Start -->
    <section class="home-slider position-relative">
        <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <div class="bg-home bg-animation-left d-flex align-items-center" style="background-image:url('{{asset("landing_pages/assets/images/hotel/bg01.jpg")}}')">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-7">
                                    <div class="title-heading position-relative mt-4" style="z-index: 1;">
                                        <h1 class="heading mb-3">Enjoy Better Holidays With OTA Maldives.</h1>
                                        <p class="para-desc">List anything on <b>OTA Maldives</b>
                                        </p>
                                        <div class="mt-4 pt-2">
                                            <a href="{{url("join-us")}}" class="btn btn-primary"> Register with us <i class="uil uil-arrow-right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="3000">
                    <div class="bg-home bg-animation-left d-flex align-items-center" style="background-image:url('{{asset("landing_pages/assets/images/hotel/bg02.jpg")}}')">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-7">
                                    <div class="title-heading position-relative mt-4" style="z-index: 1;">
                                        <h1 class="heading mb-3">Create your own listing</h1>
                                        <p class="para-desc">Registration is free and can take as little as 15 minutes to complete – get started today.</p>
                                        <div class="mt-4 pt-2">
                                            <a href="{{url("join-us")}}" class="btn btn-primary"> Get Started <i class="uil uil-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="3000"  >
                    <div class="bg-home bg-animation-left d-flex align-items-center" style="background-image:url('{{asset("landing_pages/assets/images/hotel/bg03.jpg")}}')">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-7">
                                    <div class="title-heading position-relative mt-4" style="z-index: 1;">
                                        <h1 class="heading mb-3">Already a Partner?</h1>
                                        <p class="para-desc"></p>
                                        <div class="mt-4 pt-2">
                                            <a href="" class="btn btn-primary"><i class="uil uil-home"></i> Sign in</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </section><!--end section-->
    <!-- Hero End -->
@endsection
