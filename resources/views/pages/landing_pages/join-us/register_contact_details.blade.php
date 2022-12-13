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
                            <h4 style="font-weight: bolder;" class="card-title  ">Contact Details</h4>
                            <h6 style="font-weight: lighter;" class="card-title  ">Your full name and phone number are needed
                                to ensure the security of your OTA MALDIVES account</h6>


                            <form class="login-form mt-4"  action={{route("create-account")}} method="post" id="create-account-form" >
                                @csrf
                                <input type="hidden"  name="process_number" value="{{\Illuminate\Support\Facades\Crypt::encryptString(3)}}">
                                <input type="hidden"  name="efghiu" value="{{$email}}">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">First name <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input autocomplete="off"  maxlength="20" minlength="3" type="text" class="form-control ps-5" placeholder="First Name" name="first_name" required="">
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Last name <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user-check" class="fea icon-sm icons"></i>
                                                <input autocomplete="off" maxlength="20" minlength="3" type="text" class="form-control ps-5" placeholder="Last Name" name="last_name" required="">
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Phone number <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input  autocomplete="off"  autocomplete="off" pattern="[0-9]*" style="width:400px;" name="phone" class="form-control numbers" maxlength="15" type="text"  id="phone" required=""/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="d-grid">
                                            <button class="btn btn-primary">Next <i class="uil uil-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-12 mt-4 text-center">
                                        <h6></h6>
                                    </div><!--end col-->
                                    <div class="mx-auto">

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


        var input = document.querySelector("#phone");
        var phone_number = window.intlTelInput(input, {
            // show dial codes too
            separateDialCode: true,
            hiddenInput: "contact_number",
            utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
        });


        $("#create-account-form").submit(function() {
            var full_number = phone_number.getNumber(intlTelInputUtils.numberFormat.E164);

        });
    </script>

@endsection
