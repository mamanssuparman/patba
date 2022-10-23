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
    <script src="/admin/ckeditor4/ckeditor.js"></script>

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
            <img class="animation__shake" src="/admin/dist/img/logosmk.png" alt="logosmk" height="85"
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

            <div class="nav-item dropdown d-flex">
                <div class="nav-link text-dark pe-0">
                    Administrator
                </div>
                <a class="nav-link pt-1" data-toggle="dropdown" href="#">
                    <img src="/admin/img/profile.jpg" alt="profile" width="32" height="32" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <li class="dropdown-item"><a href="#" class="text-dark">Profile</a></li>
                    <li class="dropdown-item"><a href="#" class="text-dark">About PATBA</a></li>
                    <div class="dropdown-divider"></div>
                    <li><button class="dropdown-item" data-toggle="modal" data-target="#exampleModal">Sign out</button></li>
                </div>
            </div>

        </nav>
        <!-- /.navbar -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content"  style="border-radius: 12px;">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                  <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Keluar dari aplikasi PATBA?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btnnn btn-cancel" data-dismiss="modal">Batal</button>
                  <button type="button" class="btnnn btn-simpan">Ya, keluar</button>
                </div>
              </div>
            </div>
        </div>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="/admin/img/logosmk.png" alt="AdminLTE Logo" class="brand-image"
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
