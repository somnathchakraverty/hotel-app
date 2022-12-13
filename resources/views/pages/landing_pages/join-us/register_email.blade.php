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
                            <h4 style="font-weight: bolder;" class="card-title text-center">Create Your partner
                                account</h4>
                            <h6 style="font-weight: lighter;" class="card-title text-center">Create an account to list
                                and manage your property</h6>


                            <form class="login-form mt-4"  action={{route("create-account")}} method="post" >
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Email address <span
                                                    class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input type="email" class="form-control ps-5" placeholder="Email"
                                                       name="email" required="" autocomplete="off" value="{{old("email")}}">
                                                <input type="hidden"  name="process_number" value="{{\Illuminate\Support\Facades\Crypt::encryptString(2)}}">
                                            </div>
                                        </div>

                                        @if(\Illuminate\Support\Facades\Session::has("error"))
                                            <p style="text-align: left;color:red;" class="mb-0 mt-3">
                                                <small class=" me-2">{{\Illuminate\Support\Facades\Session::get("error")}}</small></p>
                                            <p></p>
                                        @endif
                                    </div>


                                    <div class="col-md-12">
                                        <div class="d-grid">
                                            <button class="btn btn-primary">Continue <i class="uil uil-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div><!--end col-->
                            </form>
                                    <div class="col-lg-12 mt-4 text-center">
                                        <h6></h6>
                                    </div><!--end col-->
                                    <div class="mx-auto">
                                        <p style="text-align: center;" class="mb-0 mt-3"><small class="text-dark me-2">Already
                                                have an account ?</small><a href="javascript:void(0)"
                                                                            data-bs-toggle="offcanvas"
                                                                            data-bs-target="#offcanvasRight"
                                                                            aria-controls="offcanvasRight" class="">Sign
                                                in</a></p>
                                        <hr>
                                        <p style="text-align: center;" class="mb-0 mt-3"><small class="text-dark me-2">Questions about your property or the Extranet ? Check out <a href="javascript:void(0)">Partner Help</a> or ask another partner on the <a href="javascript:void(0)">Partner Forum</a> </small></p>
                                        <hr>
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
