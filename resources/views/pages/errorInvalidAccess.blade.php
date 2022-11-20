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
    <link rel="stylesheet" href="admin/vendor/particles/particles.css">

    <!-- ***** Vendor Css Files ********** -->
    <!-- DateRange css -->



</head>
<body class="authentication">

<div id="particles-js"></div>
<div class="countdown-bg"></div>

<div class="error-screen">
    <h1>Invalid Access</h1>
    <h5>We're sorry but it looks<br/>like that you doesn't have access of this page.</h5>
    <a href="{{url("channel-manager-dashboard")}}" class="btn btn-secondary">Go back to Dashboard</a>
</div>

<!--**************************
    **************************
        **************************
                    Required JavaScript Files
        **************************
    **************************
**************************-->
<!-- Required jQuery first, then Bootstrap Bundle JS -->
<script src="admin/js/jquery.min.js"></script>
<script src="admin/js/bootstrap.bundle.min.js"></script>
<script src="admin/js/moment.js"></script>
<script src="vendor/particles/particles.min.js"></script>
<script src="vendor/particles/particles-custom-error.js"></script>

<!-- *************
    ************ Vendor Js Files *************
************* -->
<!-- Particles JS -->
<script src="admin/vendor/particles/particles.min.js"></script>
<script src="admin/vendor/particles/particles-custom-error.js"></script>

</body>

</html>
