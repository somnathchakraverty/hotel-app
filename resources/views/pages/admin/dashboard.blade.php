@extends("layouts.admin.master")
@section("title",$title)
@section("vendor-css")
    <link rel="stylesheet" href="admin/vendor/daterange/daterange.css"/>
    <link rel="stylesheet" href="admin/vendor/jqcloud/jqcloud.css"/>
@endsection
@section("breadcumbs","Dashboard")

@section("content-wrapper")
    <!-- Row starts -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Goals</div>
                </div>
                <div class="card-body">

                    <!-- Row starts -->
                    <div class="row gutters">
                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="goal-card">
                                <h5>Revenue</h5>
                                <p class="percentage">85%</p>
                                <div class="progress progress-dot">
                                    <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h4>50.7M</h4>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="goal-card">
                                <h5>Spend</h5>
                                <p class="percentage">75%</p>
                                <div class="progress progress-dot">
                                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h4>28.5M</h4>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="goal-card">
                                <h5>Orders</h5>
                                <p class="percentage">107%</p>
                                <div class="progress progress-dot">
                                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="107" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h4>30M</h4>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="goal-card">
                                <h5>Customers</h5>
                                <p class="percentage">93%</p>
                                <div class="progress progress-dot">
                                    <div class="progress-bar" role="progressbar" style="width: 93%" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h4>700K</h4>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="goal-card">
                                <h5>Conversions</h5>
                                <p class="percentage">90%</p>
                                <div class="progress progress-dot">
                                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h4>650K</h4>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="goal-card">
                                <h5>Earnings</h5>
                                <p class="percentage">99%</p>
                                <div class="progress progress-dot">
                                    <div class="progress-bar" role="progressbar" style="width: 99%" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h4>75M</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Row ends -->

                </div>
            </div>
        </div>
    </div>
    <!-- Row ends -->

    <!-- Row starts -->
    <div class="row gutters">
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="card h-350">
                <div class="card-header">
                    <div class="card-title">Orders, Visits, and Revenue By Channel</div>
                </div>
                <div class="card-body">
                    <div id="orders-visits"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-6 col-sm-6 col-12">
                    <div class="overview-box h-167">
                        <h4>Overview</h4>
                        <p>Q4 finished strong in terms of sales and orders, with revenue at 150% of goal.</p>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-6 col-sm-6 col-12">
                    <div class="overview-box orange h-167">
                        <h4>Trend</h4>
                        <p>Most of the sales spike was driven by search and social in December. Apple category had the most sales.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="card h-250">
                <div class="card-header">
                    <div class="card-title">By Device</div>
                </div>
                <div class="card-body">
                    <div id="by-device"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="card h-250">
                <div class="card-header">
                    <div class="card-title">By Customer Type</div>
                </div>
                <div class="card-body">
                    <div id="by-customer-type"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="card h-250">
                <div class="card-header">
                    <div class="card-title">By Channel</div>
                </div>
                <div class="card-body pb-0 pt-0">
                    <div id="by-channel"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row ends -->

    <!-- Row starts -->
    <div class="row gutters">
        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card h-320">
                <div class="card-header">
                    <div class="card-title">Top Keywords</div>
                </div>
                <div class="card-body d-flex">
                    <div id="my_favorite_latin_words" class="w-100"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card h-320">
                <div class="card-header">
                    <div class="card-title">Overall Ratings</div>
                </div>
                <div class="card-body">
                    <div class="user-ratings">
                        <div class="total-ratings">
                            <h2>4.5</h2>
                            <div class="rating-stars">
                                <div id="rate1" style="cursor: pointer; width: 100px;"><img
                                        src="admin/img/star-on.png" alt="1" title="bad">&nbsp;<img
                                        src="admin/img/star-on.png" alt="2" title="poor">&nbsp;<img
                                        src="admin/img/star-on.png" alt="3" title="regular">&nbsp;<img
                                        src="admin/img/star-on.png" alt="4" title="good">&nbsp;<img
                                        src="admin/img/star-off.png" alt="5" title="gorgeous"><input
                                        type="hidden" name="score" value="4"></div>
                            </div>
                        </div>
                        <div class="ratings-list-container">
                            <div class="ratings-list">
                                <div class="rating-level">5.0</div>
                                <div class="rating-stars">
                                    <div class="rateA" style="cursor: pointer; width: 100px;"><img
                                            src="admin/img/star-on.png" alt="1" title="bad">&nbsp;<img
                                            src="admin/img/star-on.png" alt="2" title="poor">&nbsp;<img
                                            src="admin/img/star-on.png" alt="3" title="regular">&nbsp;<img
                                            src="admin/img/star-on.png" alt="4" title="good">&nbsp;<img
                                            src="admin/img/star-on.png" alt="5" title="gorgeous"><input
                                            type="hidden" name="score" value="5"></div>
                                </div>
                                <div class="total">
                                    8,500 <span class="percentage">65%</span>
                                </div>
                            </div>
                            <div class="ratings-list">
                                <div class="rating-level">4.0</div>
                                <div class="rating-stars">
                                    <div class="rateB" style="cursor: pointer; width: 100px;"><img
                                            src="admin/img/star-on.png" alt="1" title="bad">&nbsp;<img
                                            src="admin/img/star-on.png" alt="2" title="poor">&nbsp;<img
                                            src="admin/img/star-on.png" alt="3" title="regular">&nbsp;<img
                                            src="admin/img/star-on.png" alt="4" title="good">&nbsp;<img
                                            src="admin/img/star-off.png" alt="5" title="gorgeous"><input
                                            type="hidden" name="score" value="4"></div>
                                </div>
                                <div class="total">
                                    5,900 <span class="percentage">20%</span>
                                </div>
                            </div>
                            <div class="ratings-list">
                                <div class="rating-level">3.0</div>
                                <div class="rating-stars">
                                    <div class="rateC" style="cursor: pointer; width: 100px;"><img
                                            src="admin/img/star-on.png" alt="1" title="bad">&nbsp;<img
                                            src="admin/img/star-on.png" alt="2" title="poor">&nbsp;<img
                                            src="admin/img/star-on.png" alt="3" title="regular">&nbsp;<img
                                            src="admin/img/star-off.png" alt="4" title="good">&nbsp;<img
                                            src="admin/img/star-off.png" alt="5" title="gorgeous"><input
                                            type="hidden" name="score" value="3"></div>
                                </div>
                                <div class="total">
                                    1,200 <span class="percentage">17%</span>
                                </div>
                            </div>
                            <div class="ratings-list">
                                <div class="rating-level">2.0</div>
                                <div class="rating-stars">
                                    <div class="rateD" style="cursor: pointer; width: 100px;"><img
                                            src="admin/img/star-on.png" alt="1" title="bad">&nbsp;<img
                                            src="admin/img/star-on.png" alt="2" title="poor">&nbsp;<img
                                            src="admin/img/star-off.png" alt="3" title="regular">&nbsp;<img
                                            src="admin/img/star-off.png" alt="4" title="good">&nbsp;<img
                                            src="admin/img/star-off.png" alt="5" title="gorgeous"><input
                                            type="hidden" name="score" value="2"></div>
                                </div>
                                <div class="total">
                                    180 <span class="percentage">.5%</span>
                                </div>
                            </div>
                            <div class="ratings-list">
                                <div class="rating-level">1.0</div>
                                <div class="rating-stars">
                                    <div class="rateE" style="cursor: pointer; width: 100px;"><img
                                            src="admin/img/star-on.png" alt="1" title="bad">&nbsp;<img
                                            src="admin/img/star-off.png" alt="2" title="poor">&nbsp;<img
                                            src="admin/img/star-off.png" alt="3" title="regular">&nbsp;<img
                                            src="admin/img/star-off.png" alt="4" title="good">&nbsp;<img
                                            src="admin/img/star-off.png" alt="5" title="gorgeous"><input
                                            type="hidden" name="score" value="1"></div>
                                </div>
                                <div class="total">
                                    15 <span class="percentage">.3%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card h-320">
                <div class="card-header">
                    <div class="card-title">Sales by Location</div>
                </div>
                <div class="card-body">
                    <div id="us-map3" class="chart-height-sm"></div>
                    <!-- Row starts -->
                    <div class="row gutters">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="info-stats3 shade-two-a">
                                <h6>California</h6>
                                <h3>$10M</h3>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="info-stats3 shade-two-b">
                                <h6>Texas</h6>
                                <h3>$7M</h3>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="info-stats3 shade-two-b">
                                <h6>Indiana</h6>
                                <h3>$3M</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Row end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Row ends -->
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
@endsection
