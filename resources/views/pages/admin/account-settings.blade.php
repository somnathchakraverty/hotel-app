@extends("layouts.admin.master")
@section("title",$title)
@section("vendor-css")
    <link rel="stylesheet" href="admin/vendor/daterange/daterange.css"/>
@endsection
@section("breadcumbs",$title)



@section("content-wrapper")
    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
            <div class="card h-100">
                <div class="card-body">
                    <div class="account-settings">
                        <div class="user-profile">
                            <div class="user-avatar">
                                @if(auth()->user()->company->company_logo)
                                    <img id = "profile_pic_id1" src="{{auth()->user()->company->company_logo}}" alt="profile-pic"/>
                                @else
                                    <img id = "profile_pic_id" src="admin/uploads/user-profile-image/dummy-user.png" alt="profile-pic"/>
                                @endif
                            </div>
                            <h5 class="user-name">{{auth()->user()->company->company_name}}</h5>
                            <h6 class="user-email">{{auth()->user()->email}}</h6>
                        </div>
                        <div class="setting-links">
                            <a href="javascript:void(0);" onclick="showTab('company_profile_tab');">
                                <i class="icon-chat"></i>
                                <span id="company_profile_tab_txt" class="tabclass"> Company Profile</span>
                            </a>
                            <a href="javascript:void(0);" onclick="showTab('contact_info_tab');" >
                                <i class="icon-date_range"></i>
                                <span id="contact_info_tab_txt" class="tabclass">  Contact Info</span>
                            </a>
                            <a href="javascript:void(0);" onclick="showTab('company_logo_tab');">
                                <i class="icon-file-text"></i>
                                <span id="company_logo_tab_txt" class="tabclass"> Company Logo </span>
                            </a>
                            <a href="javascript:void(0);" onclick="showTab('user_logo_tab');">
                                <i class="icon-file-text"></i>
                                <span id="user_logo_tab_txt"class="tabclass"> User Logo </span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12 profiletab" id="company_profile_tab" >
            <div class="card h-100">
                <div class="card-header">
                    <div class="card-title">Company Profile</div>
                </div>
                <form action={{route("update-company-profile")}} method="post" id="update-company-profile">
                    @csrf
                <div class="card-body">
                    <div class="row gutters">

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="fullName">Company Name</label>
                                <input maxlength="250" required type="text" class="form-control"  name="company_name" value="{{auth()->user()->company->company_name}}" placeholder="Company Name">
                            </div>
                            <div class="form-group">
                                <label for="website">Website URL</label>
                                <input maxlength="45" required type="url" class="form-control"  name="website_url" value="{{auth()->user()->company->website_url}}" placeholder="Website url">
                            </div>

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="eMail">Email</label>
                                <input  type="email" class="form-control" value="{{auth()->user()->email}}"  id="eMail"  disabled>
                          </div>

                            <div class="form-group">
                                <label for="eMail">Business Types</label>
                                <div>
                                    @foreach($businessTypes as $type)
                                    <div class="custom-control  custom-checkbox custom-control-inline">
                                        <input type="checkbox" @if($type->business_opted > 0) checked="checked" @endif class="custom-control-input"   disabled>
                                        <label class="custom-control-label" for="customCheck2">{{$type->business_name}}</label>

                                    </div>
                                    @endforeach
                                </div>

                            </div>

                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="text-right">
                                <input type="submit"  class="btn btn-success"  value="Update Company Profile">
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12 profiletab" style="display: none;" id="contact_info_tab" >
            <div class="card h-100">
                <div class="card-header">
                    <div class="card-title">Contact Info</div>
                </div>
                <form action={{route("update-company-profile")}} method="post" id="update-contact-info">
                    @csrf
                    @method("post")
                    <div class="card-body">
                        <div class="row gutters">

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="addRess">Contact Person Name</label>
                                    <input required  maxlength="100" type="text" class="form-control" name="contact_person_name" value="{{auth()->user()->name}}" placeholder="Enter Contact Person Name">

                                </div>
                                <div class="form-group">
                                    <label for="fullName">Contact Number</label>
                                    <input required maxlength="15" type="text" class="form-control"  name="contact_number" value="{{auth()->user()->company->contact_number}}" placeholder="Contact Number">
                                </div>


                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="fullName">Alternate Contact Number</label>
                                    <input type="text" maxlength="15" class="form-control"  name="alt_contact_number" value="{{auth()->user()->company->alt_contact_number}}" placeholder="Alt Contact Number">
                                </div>

                                <div class="form-group">
                                    <label for="website">Address</label>
                                    <textarea required class="form-control" name="company_address"  placeholder="Enter Company Address">{{auth()->user()->company->company_address}}</textarea>
                                </div>

                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="text-right">
                                    <input type="submit"  class="btn btn-success"  value="Update Contact Info">

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12 profiletab" style="display: none;" id="company_logo_tab" >
            <div class="card h-100">
                <div class="card-header">
                    <div class="card-title">Company Logo</div>
                </div>
                <form action={{route("update-company-profile")}} method="post" id="update-company-logo" enctype="multipart/form-data" >
                    @csrf
                    <div class="card-body">
                        <div class="row gutters">

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="fullName">Company Logo</label>
                                    <input type="file" accept=".jpg,.jpeg,.png"  onchange="readURL(this,'company');" required name="company_logo">
                                </div>

                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="text-right">
                                    <input type="submit"  class="btn btn-success"  value="Upload Company Logo">

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12 profiletab" style="display: none;" id="user_logo_tab" >
            <div class="card h-100">
                <div class="card-header">
                    <div class="card-title">User Logo</div>
                </div>
                <form action={{route("update-company-profile")}} method="post" id="update-user-logo" enctype="multipart/form-data" >
                    @csrf
                    <div class="card-body">
                        <div class="row gutters">

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="fullName">User Profile Pic</label>
                                    <input type="file" accept=".jpg,.jpeg,.png"  onchange="readURL(this,'user');" required name="profile_pic">
                                </div>

                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="text-right">
                                    <input type="submit"  class="btn btn-success"  value="Upload Profile Pic">

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!-- Row end -->
@endsection



<!-- dashboard vendor js -->

@section("vendor-js")
    <script>

        function showTab(id) {
            $(".profiletab").hide();
            $(".tabclass").css("color","#000000");
            $(".tabclass").css("font-weight","");
            $("#" + id).show();
            $("#" + id+"_txt").css("color","#28a745");
            $("#" + id+"_txt").css("font-weight","bold");
        }

        $("#update-company-profile").submit(function (e) {
            showLoader();
            e.preventDefault(); // avoid to execute the actual submit of the form.
            var form = $(this);
            var actionUrl = form.attr('action');
            sendData(form, actionUrl);
        });
        $("#update-contact-info").submit(function (e) {
            showLoader();
            e.preventDefault(); // avoid to execute the actual submit of the form.
            var form = $(this);
            var actionUrl = form.attr('action');
            sendData(form, actionUrl);
        });

        $("#update-company-logo").submit(function (e) {
            showLoader();
            e.preventDefault(); // avoid to execute the actual submit of the form.
            var form = $(this);
            var actionUrl = form.attr('action');
            $.ajax({
                type: "POST",
                url: actionUrl,
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    if (data.status == true) {
                        displayAlert("success", data.message);
                    } else {
                        displayAlert("error", data.message);
                    }
                    hideLoader();
                }
            });
        });
        $("#update-user-logo").submit(function (e) {
            showLoader();
            e.preventDefault(); // avoid to execute the actual submit of the form.
            var form = $(this);
            var actionUrl = form.attr('action');
            $.ajax({
                type: "POST",
                url: actionUrl,
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    if (data.status == true) {
                        displayAlert("success", data.message);
                    } else {
                        displayAlert("error", data.message);
                    }
                    hideLoader();
                }
            });
        });

        function sendData(form, actionUrl) {
            $.ajax({
                type: "POST",
                url: actionUrl,
                dataType: "json",
                data: form.serialize(),
                success: function (data) {
                    if (data.status == true) {
                        displayAlert("success", data.message);
                    } else {
                        displayAlert("error", data.message);
                    }
                    hideLoader();
                }
            });

        }
        function readURL(input,logoType) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    if(logoType == "company") {
                        $('#profile_pic_id').attr('src', e.target.result);
                        $('#profile_pic_id1').attr('src', e.target.result);
                        if ("{{auth()->user()->role_id}}" == 3) {
                            $('#profile_pic_id7').attr('src', e.target.result);
                        }
                    }
                    if(logoType == "user") {
                        if ("{{auth()->user()->role_id}}" == 3) {
                            $('#profile_pic_id2').attr('src', e.target.result);
                            $('#profile_pic_id3').attr('src', e.target.result);
                            $('#profile_pic_id4').attr('src', e.target.result);
                            $('#profile_pic_id5').attr('src', e.target.result);
                            $('#profile_pic_id6').attr('src', e.target.result);
                        }
                    }
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>
    <!-- Slimscroll JS -->
    <script src="admin/vendor/slimscroll/slimscroll.min.js"></script>
    <script src="admin/vendor/slimscroll/custom-scrollbar.js"></script>

    <!-- Daterange -->
    <script src="admin/vendor/daterange/daterange.js"></script>
    <script src="admin/vendor/daterange/custom-daterange.js"></script>

@endsection
