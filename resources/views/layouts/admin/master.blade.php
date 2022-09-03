<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="">
    <meta name="author" content="SomnathChakraverty">
    <link rel="shortcut icon" href="admin/img/fav.png" />

    <!-- Title -->
    <title>Admin - @yield("title")</title>
    <!-- ************* Common Css Files ************* -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="admin/css/bootstrap.min.css">
    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="admin/fonts/style.css">
    <!-- Main css -->
    <link rel="stylesheet" href="admin/css/main.css">

    <!-- ***** Vendor Css Files ********** -->
    <!-- DateRange css -->
    @yield("vendor-css")


</head>
<body>

<!-- Loading starts -->
<div id="loading-wrapper">
    <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Loading ends -->

<!-- **** Header section start ****** -->

<!-- Header start -->
@include("pages.admin.header")
<!-- Header end -->

<!-- Screen overlay start -->
<div class="screen-overlay"></div>
<!-- Screen overlay end -->

<!-- Quicklinks box start -->
@include("pages.admin.quick-links")
<!-- Quicklinks box end -->

<!-- Quick settings start -->
@include("pages.admin.quick-settings")
<!-- Quick settings end -->

<!-- *************
    ************ Header section end *************
************* -->

<!-- Container fluid start -->
<div class="container-fluid">

    <!-- Navigation start -->
        @include("pages.admin.navbar")
    <!-- Navigation end -->

    <!-- *************
        ************ Main container start *************
    ************* -->
    <div class="main-container">

        <!-- Page header start -->
        <div class="page-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">@yield("breadcumbs")</li>
            </ol>

            <ul class="app-actions">
                <li>
                    <a href="#" id="">
                        <span class="range-text">{{ date('jS F,l,Y h:i:s A')}}</span>
                        {{-- <i class="icon-chevron-down"></i>--}}
                    </a>
                </li>
                <li>
                    @yield("print")
                  {{--  <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Print">
                        <i class="icon-print"></i>
                    </a>--}}
                </li>
                <li>
                    @yield("download-csv")
                    {{--<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download CSV">
                        <i class="icon-cloud_download"></i>
                    </a>--}}
                </li>
            </ul>
        </div>
        <!-- Page header end -->

        <!-- Content wrapper start -->
        <div class="content-wrapper">

          @yield("content-wrapper")

        </div>
        <!-- Content wrapper end -->

    </div>
    <!-- *************
        ************ Main container end *************
    ************* -->

    <!-- Footer start -->
    <footer class="main-footer">© Somu's Team 2022</footer>
    <!-- Footer end -->

</div>
<!-- Container fluid end -->

<!-- *** Required JavaScript Files ********* -->
<!-- Required jQuery first, then Bootstrap Bundle JS -->
<script src="admin/js/jquery.min.js"></script>
<script src="admin/js/bootstrap.bundle.min.js"></script>
<script src="admin/js/moment.js"></script>


<!-- **** Vendor Js Files ******** -->
@yield("vendor-js")
<!-- Main Js Required -->
<script src="admin/js/main.js"></script>

</body>

</html>
