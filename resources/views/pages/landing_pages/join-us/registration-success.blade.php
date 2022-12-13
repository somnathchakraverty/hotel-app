@extends("layouts.landing_pages.master")
@section("title",$title)

@section("body")
    <!-- Hero Start -->
    <section class="bg-auth-home d-table w-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6">
                    <div class="me-lg-5">
                        <a href="{{url("/")}}"> <img src="{{asset("logo_thumbnail.png")}}"
                                                     class="img-fluid d-block mx-auto" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="card shadow rounded border-0">
                        <div class="card-body">
                            <h4 style="font-weight: bolder;" class="card-title  ">Verify your account</h4>
                            <h6 style="font-weight: lighter;" class="card-title  ">We sent you an email with a verification link to</h6>
                            <h6>{{$email}}</h6>
<br>
                            <h6 style="font-weight: lighter;" class="card-title  ">To confirm your account, follow the link in the mail we just sent.</h6>
                            <hr>
                            <div class="row">

                                    <div class="mx-auto">

                                        <p style="text-align: center;" class="mb-0 mt-3"><small class="text-dark me-2">All
                                                rights reserved.<br>Copyright 2022. OTA MALDIVES</small></p>

                                    </div>
                                </div><!--end row-->


                        </div>
                    </div>
                </div> <!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <!-- Hero End -->
@endsection


@section("script")
    <script>
        $("#href-logo-header").hide();
        $("#join-us-id").hide();
        $("#already-partner-menu-id").hide();
        $("#header-logo").hide();

    </script>
@endsection
