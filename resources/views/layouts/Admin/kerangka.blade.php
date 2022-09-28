<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    <link rel="stylesheet" type="text/css" href="/admin/dist/css/datatables.min.css" />


    <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">

    <link href="/admin/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/admin/dist/css/adminlte.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/admin/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/admin/plugins/summernote/summernote-bs4.min.css">

    <style>
        .border-rad {
            border-radius: 20px;
        }
    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
                width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light ">


            <ul class="navbar-nav float-left">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>


            <h5 class="mt-2" style="position: relative; margin-left: auto; margin-right: auto;"> <b> PATBA SMKN 3
                    BANJAR </b></h5>
            <!-- </div>     -->

            <div class="user-panel pb-1 d-flex">
                <div class="info">
                    <a href="#" class="d-block">Administrator</a>
                </div>
                <div class="image">
                    <img src="#" class="img-circle elevation-2 " alt="Image"
                        style="object-fit: cover; max-height: 32px;">
                </div>
            </div>

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="logosmk.png" alt="AdminLTE Logo" class="brand-image"
                    style="opacity: .8; margin-top: 2px; margin-bottom: 2px;">
                <span class="brand-text font-weight-light">PATBA</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                @include('partials.admin.navbars')
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h4 class="h4 my-1"><b>{{ $mainbreadcrumb }}</b></h4>
                            <strong>{{ $breadcrumb1 }}</strong> &rsaquo; {{ $breadcrumb2 }}
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid px-md-3 justify-content-center">
                    @yield('content')
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer text-center">
            <strong>&copy; Tim RPL SMK Negeri 3 Banjar 2022.</strong>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="/admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/admin/dist/js/adminlte.js"></script>

    <script type="text/javascript" src="/admin/dist/js/datatables.js"></script>
    {{-- <script>
        $(document).ready(function() {
            $('.dataTable').DataTable();
        });
    </script> --}}
    @yield('js')
</body>

</html>
