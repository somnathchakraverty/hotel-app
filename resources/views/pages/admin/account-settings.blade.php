@extends("layouts.admin.master")
@section("title",$title)
@section("vendor-css")
    <link rel="stylesheet" href="admin/vendor/daterange/daterange.css"/>
@endsection
@section("breadcumbs","Account Settings")



@section("content-wrapper")
    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
            <div class="card h-100">
                <div class="card-body">
                    <div class="account-settings">
                        <div class="user-profile">
                            <div class="user-avatar">
                                <img src="img/user.png" alt="Wafi Admin" />
                            </div>
                            <h5 class="user-name">{{auth()->user()->company->company_name}}</h5>
                            <h6 class="user-email">{{auth()->user()->email}}</h6>
                        </div>
                        <div class="setting-links">
                            <a href="javascript:void(0);" onclick="showTab('company_profile_tab');">
                                <i class="icon-chat"></i>
                                Company Profile
                            </a>
                            <a href="javascript:void(0);" onclick="showTab('contact_info_tab');" >
                                <i class="icon-date_range"></i>
                                Contact Info
                            </a>
                            <a href="javascript:void(0);" onclick="showTab('company_logo_tab');">
                                <i class="icon-file-text"></i>
                                Company Logo
                            </a>
                            <a href="javascript:void(0);" onclick="showTab('user_logo_tab');">
                                <i class="icon-file-text"></i>
                                User Logo
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
                <form action={{route("update-company-profile")}} method="post">
                    @csrf
                <div class="card-body">
                    <div class="row gutters">

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="fullName">Company Name</label>
                                <input type="text" class="form-control"  name="company_name" value="{{auth()->user()->company->company_name}}" placeholder="Company Name">
                            </div>
                            <div class="form-group">
                                <label for="website">Website URL</label>
                                <input type="url" class="form-control"  name="website_url" value="{{auth()->user()->company->website_url}}" placeholder="Website url">
                            </div>

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="eMail">Email</label>
                                <input type="email" class="form-control" value="{{auth()->user()->email}}"  id="eMail"  disabled>
                          </div>

                            <div class="form-group">
                                <label for="eMail">Business Types</label>

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
                <form action={{route("update-company-profile")}} method="post">
                    @csrf
                    @method("post")
                    <div class="card-body">
                        <div class="row gutters">

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="addRess">Contact Person Name</label>
                                    <input type="text" class="form-control" name="contact_person_name" value="{{auth()->user()->name}}" placeholder="Enter Contact Person Name">

                                </div>
                                <div class="form-group">
                                    <label for="fullName">Contact Number</label>
                                    <input type="text" class="form-control"  name="contact_number" value="{{auth()->user()->company->contact_number}}" placeholder="Company Name">
                                </div>


                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="fullName">Alternate Contact Number</label>
                                    <input type="text" class="form-control"  name="alt_contact_number" value="{{auth()->user()->company->alt_contact_number}}" placeholder="Company Name">
                                </div>

                                <div class="form-group">
                                    <label for="website">Address</label>
                                    <input type="url" class="form-control" name="company_address" value="{{auth()->user()->company->comany_address}}" placeholder="Enter Company Address">
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
                <form>
                    <div class="card-body">
                        <div class="row gutters">

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="fullName">Company Name</label>
                                    <input type="text" class="form-control" id="fullName" value="{{auth()->user()->company->company_name}}" placeholder="Company Name">
                                </div>
                                <div class="form-group">
                                    <label for="addRess">Contact Person Name</label>
                                    <input type="text" class="form-control" value="{{auth()->user()->name}}" placeholder="Enter Contact Person Name">

                                </div>

                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="eMail">Email</label>
                                    <input type="email" class="form-control" value="{{auth()->user()->email}}"  id="eMail"  disabled>
                                </div>

                                <div class="form-group">
                                    <label for="website">Website URL</label>
                                    <input type="url" class="form-control" value="{{auth()->user()->company->website_url}}" placeholder="Website url">
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
        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12 profiletab" style="display: none;" id="user_logo_tab" >
            <div class="card h-100">
                <div class="card-header">
                    <div class="card-title">User Logo</div>
                </div>
                <form>
                    <div class="card-body">
                        <div class="row gutters">

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="fullName">Company Name</label>
                                    <input type="text" class="form-control" id="fullName" value="{{auth()->user()->company->company_name}}" placeholder="Company Name">
                                </div>
                                <div class="form-group">
                                    <label for="addRess">Contact Person Name</label>
                                    <input type="text" class="form-control" value="{{auth()->user()->name}}" placeholder="Enter Contact Person Name">

                                </div>

                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="eMail">Email</label>
                                    <input type="email" class="form-control" value="{{auth()->user()->email}}"  id="eMail"  disabled>
                                </div>

                                <div class="form-group">
                                    <label for="website">Website URL</label>
                                    <input type="url" class="form-control" value="{{auth()->user()->company->website_url}}" placeholder="Website url">
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

    </div>
    <!-- Row end -->
@endsection



<!-- dashboard vendor js -->

@section("vendor-js")
    <script>

        function showTab(id){
            $(".profiletab").hide();
            $("#"+id).show();
        }

    </script>
    <!-- Slimscroll JS -->
    <script src="admin/vendor/slimscroll/slimscroll.min.js"></script>
    <script src="admin/vendor/slimscroll/custom-scrollbar.js"></script>

    <!-- Daterange -->
    <script src="admin/vendor/daterange/daterange.js"></script>
    <script src="admin/vendor/daterange/custom-daterange.js"></script>

@endsection
