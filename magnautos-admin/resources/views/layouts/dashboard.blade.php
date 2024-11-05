<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.dash-header')
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    @include('components.dash-side-menu')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            @include('components.dash-topbar')
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                @yield('content')

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        @include('components.dash-footer')
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
@include('components.dash-logout-modal')

<!-- Bootstrap core JavaScript-->
<script src="{!! asset('vendor/jquery/jquery.min.js') !!}"></script>
<script src="{!! asset('vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>

<!-- Core plugin JavaScript-->
<script src="{!! asset('vendor/jquery-easing/jquery.easing.min.js') !!}"></script>

<!-- Custom scripts for all pages-->
<script src="{!! asset('js/sb-admin-2.min.js') !!}"></script>

</body>

</html>
