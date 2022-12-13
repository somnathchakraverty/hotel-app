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
                            <h4 style="font-weight: bolder;" class="card-title  ">Create Password</h4>
                            <h6 style="font-weight: lighter;" class="card-title  ">Use a minimum of 10 characters, including uppercase letters, lowercase letters, and numbers.</h6>


                            <form class="login-form mt-4"  action={{route("create-account")}} method="post"   >
                                @csrf
                                <input type="hidden"  name="process_number" value="{{\Illuminate\Support\Facades\Crypt::encryptString(4)}}">
                                <input type="hidden"  name="w3hi" value="{{$email}}">
                                <input type="hidden"  name="t5dfr" value="{{$first_name}}">
                                <input type="hidden"  name="L3hi" value="{{$last_name}}">
                                <input type="hidden"  name="pyt6" value="{{$contact_number}}">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Password <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input minlength="10" maxlength="20" type="password" value="{{old("password")}}" class="form-control ps-5" placeholder="Password" required="" name="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Confirm Password <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input minlength="10" maxlength="20"value="{{old("confirm_password")}}" type="password" class="form-control ps-5" placeholder="Confirm Password" name="confirm_password" required="">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        @if(\Illuminate\Support\Facades\Session::has("error"))
                                            <p style="text-align: left;color:red;" class="mb-0 mt-3">
                                                <small class=" me-2">{{\Illuminate\Support\Facades\Session::get("error")}}</small></p>
                                            <p></p>
                                        @endif
                                        @if ($errors->any())
                                            <ul>
                                            @foreach ($errors->all() as $error)

                                                    <li style="color: red;">{{$error}}</li>

                                            @endforeach
                                            </ul>
                                        @endif
                                    </div>
                                    <div class="col-md-12">
                                        <div class="d-grid">
                                            <button class="btn btn-primary">Create Account
                                            </button>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-12 mt-4 text-center">
                                        <h6></h6>
                                    </div><!--end col-->
                                    <div class="mx-auto">
                                        <hr>
                                        <p style="text-align: center;" class="mb-0 mt-3"><small class="text-dark me-2">
                                                By signing in or creating an account, you agree with our <a href="javascript:void(0)">Terms & Conditions</a> and <a href="javascript:void(0)">Privacy Statement</a>
                                            </small></p>
                                        <hr>
                                        <p style="text-align: center;" class="mb-0 mt-3"><small class="text-dark me-2">All
                                                rights reserved.<br>Copyright 2022. OTA MALDIVES</small></p>

                                    </div>
                                </div><!--end row-->
                            </form>

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
        $(".toggle-password").click(function() {

            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>
@endsection
