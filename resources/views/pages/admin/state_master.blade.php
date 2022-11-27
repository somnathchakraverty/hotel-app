@extends("layouts.admin.master")
@section("title",$title)
@section("vendor-css")
    <link rel="stylesheet" href="admin/vendor/datatables/dataTables.bs4.css"/>
    <link rel="stylesheet" href="admin/vendor/datatables/dataTables.bs4.css"/>
    <link rel="stylesheet" href="admin/vendor/datatables/dataTables.bs4-custom.css"/>
    <link rel="stylesheet" href="admin/vendor/datatables/buttons.bs.css"/>
@endsection
@section("breadcumbs","State Master")

@section("content-wrapper")

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <div class="table-container">
                <div class="t-header">State Master</div>
                <div class="table-responsive">
                    <table id="basicExample" class="table custom-table" data-page-length='10'>
                        <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Country Name</th>
                            <th>State Name</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php $i= 1 ?>
                        @foreach($states as $value)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$value->country_name}}</td>
                                <td>{{$value->state_name}}</td>
                                <td>
                                    @if($value->status == 1 )
                                        <span class="badge badge-success"> Active </span>
                                    @elseif($value->status == 0)
                                        <span class="badge badge-danger"> InActive </span>
                                    @endif
                                </td>
                                <td class="text-success"><a href="" class="text-success"><i class="icon-edit1 nav-icon"></i> Edit Details</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
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

    <!-- Data Tables -->
    <script src="admin/vendor/datatables/dataTables.min.js"></script>
    <script src="admin/vendor/datatables/dataTables.bootstrap.min.js"></script>

    <!-- Custom Data tables -->
    <script src="admin/vendor/datatables/custom/custom-datatables.js"></script>
    <script src="admin/vendor/datatables/custom/fixedHeader.js"></script>

    <!-- Download / CSV / Copy / Print -->
    <script src="admin/vendor/datatables/buttons.min.js"></script>
    <script src="admin/vendor/datatables/jszip.min.js"></script>
    <script src="admin/vendor/datatables/pdfmake.min.js"></script>
    <script src="admin/vendor/datatables/vfs_fonts.js"></script>
    <script src="admin/vendor/datatables/html5.min.js"></script>
    <script src="admin/vendor/datatables/buttons.print.min.js"></script>

@endsection
