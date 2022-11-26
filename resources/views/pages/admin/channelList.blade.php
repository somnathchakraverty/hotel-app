@extends("layouts.admin.master")
@section("title",$title)
@section("vendor-css")
    <link rel="stylesheet" href="admin/vendor/daterange/daterange.css"/>
    <link rel="stylesheet" href="admin/vendor/jqcloud/jqcloud.css"/>
@endsection
@section("breadcumbs","Manage Channels")

@section("content-wrapper")



    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr>

                                <th>Company Logo</th>
                                <th>Channel Partner Name</th>
                                <th>Company Name</th>
                                <th>EmailId</th>
                                <th>Opted Business Types</th>
                                <th>Registered On</th>
                                <th>Account Status</th>
                                <th>Activate/Deactivate Account</th>
                                <th>Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($channel_lists as $list):
                            $userId = Crypt::encryptString($list->id);

                            ?>
                            <tr>

                                <td> <img  src="{{$list->company->company_logo}}"  height="100px;" alt=""/>        </td>
                                <td><?= $list->name ?></td>
                                <td><?= $list->name ?></td>
                                <td><?= $list->email ?></td>
                                <td><?php
                                    $businessTypesArray = [];
                                    foreach ($list->businessTypes as $businessType):
                                        $businessTypeDetail = getBusinessTypeName($businessType->business_type_id);
                                        if ($businessTypeDetail) {
                                            array_push($businessTypesArray, $businessTypeDetail["business_name"]);
                                        }
                                    endforeach;
                                    if (count($businessTypesArray) > 0) {
                                        echo implode(",", $businessTypesArray);
                                    }
                                    $businessTypesArray = [];
                                    ?></td>
                                <td>  {{ date('jS M, Y',strtotime($list->created_at)) }} </td>
                                <td><span id="{{$userId}}_span"
                                    <?= $list->account_status == 1 ? 'class="badge badge-success"> Active' : 'class="badge badge-danger"> InActive' ?></span>
                                    <div class="spinner-border spinner-border-sm" id="{{$userId}}_span_div" style="display: none;">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </td>
                                <td>
                                    <button <?php
                                            if($list->account_status == 1){ echo "style='display:none;'"; }  ?> id="{{$userId}}_btn_act" onclick="updateUserAccountStatus('{{$userId}}',1);"
                                            type="button" class="btn btn-outline-primary">Activate
                                    </button>

                                    <button id="{{$userId}}_btn_deact" <?php
                                    if($list->account_status == 0){ echo "style='display:none;'"; }
                                    ?>
                                    onclick="updateUserAccountStatus('{{$userId}}',0);" type="button"
                                            class="btn btn-outline-secondary">Deactivate
                                    </button>

                                    <div class="spinner-border spinner-border-sm" id="{{$userId}}_btn_div" style="display: none;">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </td>
                                <td class="text-success"><a href="{{route("edit-channel-details",["ChannelId"=>Crypt::encryptString($list->id)])}}" class="text-success"><i class="icon-edit1 nav-icon"></i> Edit Details</a></td>
                            </tr>
                            <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Row end -->

@endsection



<!-- dashboard vendor js -->

@section("vendor-js")
    <!-- Slimscroll JS -->
    <script src="admin/vendor/slimscroll/slimscroll.min.js"></script>
    <script src="admin/vendor/slimscroll/custom-scrollbar.js"></script>

    <!-- Daterange -->
    <script src="admin/vendor/daterange/daterange.js"></script>
    <script src="admin/vendor/daterange/custom-daterange.js"></script>

    <!-- Rating JS -->
    {{--<script src="admin/vendor/rating/raty.js"></script>--}}
    <script src="admin/vendor/rating/raty-custom.js"></script>

    <!-- jQcloud Keywords -->
    <script src="admin/vendor/jqcloud/jqcloud-1.0.4.min.js"></script>
    <script src="admin/vendor/jqcloud/custom-jqcloud.js"></script>

    <!-- Apex Charts -->
    <script src="admin/vendor/apex/apexcharts.min.js"></script>
    <script src="admin/vendor/apex/ecommerce-dashboard/by-device.js"></script>
    <script src="admin/vendor/apex/ecommerce-dashboard/by-customer-type.js"></script>
    <script src="admin/vendor/apex/ecommerce-dashboard/by-channel.js"></script>
    <script src="admin/vendor/apex/ecommerce-dashboard/orders-visits-bouncerate.js"></script>

    <!-- jVector Maps -->
    <script src="admin/vendor/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="admin/vendor/jvectormap/usa.js"></script>
    <script src="admin/vendor/jvectormap/custom/map-usa3.js"></script>
    <script>
        function updateUserAccountStatus(userId, status) {
            var span = userId + "_span";
            var spanDiv = userId + "_span_div";
            var btnDiv = userId + "_btn_div";
            var btnAct = userId + "_btn_act";
            var btnDeAct = userId + "_btn_deact";
            $("#" + spanDiv).show();
            $("#" + btnDiv).show();
            $("#" + btnAct).hide();
            $("#" + btnDeAct).hide();
            $.ajax({
                type: "POST",
                url: "{{route("change-user-account-status")}}",
                data:{"user_id":userId,"_token":"{{csrf_token()}}"},
                dataType:'JSON',
                success: function (data) {
                    $("#" + spanDiv).hide();
                    $("#" + btnDiv).hide();
                    if (data.status) {
                        if(status == 1){
                            $("#" + btnDeAct).show();
                            $("#"+"_span").text("Active");
                            $("#"+"_span").removeClass("badge-danger");
                            $("#"+"_span").addClass("badge-success");
                        }else if(status == 0){
                            $("#" + btnAct).show();
                            $("#"+span).text("InActive");
                            $("#"+span).addClass("badge-danger");
                            $("#"+span).removeClass("badge-success");
                        }

                    }
                }
            });

        }
    </script>
@endsection
