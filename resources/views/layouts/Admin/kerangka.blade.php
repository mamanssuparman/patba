<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

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
                    <img src="pasfotoelfan-removebg-preview.png" class="img-circle elevation-2 " alt="User Image"
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
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item border-rad">
                            <a href="index.html" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link ">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class=" mb-1 nav-icon bi bi-journal-text" viewBox="0 0 16 16">
                                    <path
                                        d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                                    <path
                                        d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                    <path
                                        d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                                </svg>
                                <p>
                                    Data Soal
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview ">
                                <li class="nav-item">
                                    <a href="matapelajaran.html" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Mata Pelajaran</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="datasoal.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Soal</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="importsoal.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Import Soal</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="detailmapel.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Daftar Soal</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="mb-1 bi bi-people-fill nav-icon" viewBox="0 0 16 16">
                                    <path
                                        d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    <path fill-rule="evenodd"
                                        d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                                </svg>

                                <p>
                                    Data Siswa
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview ">
                                <li class="nav-item">
                                    <a href="kelasindex.html" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Kelas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="datasiswa.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Siswa</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="importdatasiswa.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Import Data Siswa</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="mb-1 nav-icon bi bi-pencil-square"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd"
                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>

                                <p>
                                    Data Tes
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview ">
                                <li class="nav-item">
                                    <a href="tambahtes.html" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tambah Tes</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="daftartes.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Daftar Tes</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="hasiltes.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Hasil Tes</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
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
                            <h4 class="h4 my-1"><b>Mata Pelajaran</b></h4>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid px-md-3 justify-content-center">
                    <!-- Small boxes (Stat box) -->

                    <!-- /.row -->

                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <div class="card">
                            <div class="card-bodyy mb-3">
                                <div class="col-4 mt-2 pt-1 p-0 mb-3">
                                    <a href="/App/SlicingAdminArea/addpelajaran.html" class="btnnn btn-plus px-3"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="mb-1 bi bi-plus-lg" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                                        </svg> <span class="mx-1">Mata Pelajaran</span></a>
                                </div>

                                <table class="dataTable table table-bordered mt-3">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Mata Pelajaran</th>
                                            <th>Kelas</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Bahasa Indonesia</td>
                                            <td>XII RPL</td>
                                            <td class="pb-0 pt-1 text-center">
                                                <!-- <div class=" dropstart"> -->
                                                <button type="button" class="btnnn btn-opsi "
                                                    data-toggle="dropdown">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                        height="18" fill="currentColor"
                                                        class="my-1 bi bi-three-dots" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                                    </svg>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <a href="/App/SlicingAdminArea/editpelajaran.html"
                                                        class="text-dark">
                                                        <li class="dropdown-item edit-opsi"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="mb-1 bi bi-pen" viewBox="0 0 16 16">
                                                                <path
                                                                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                                            </svg> <span class="ps-2">Edit</span></li>
                                                    </a>
                                                    <a onclick="return confirm('Apakah Anda yakin? data akan terhapus secara permanen!')"
                                                        role="button" class="text-dark">
                                                        <li class="dropdown-item"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="mb-1 bi bi-trash3" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                                            </svg> <span class="ps-2">Hapus</span></li>
                                                    </a>
                                                </ul>
                                                <!-- </div> -->
                                                <!-- <a href="/App/SlicingAdminArea/editpelajaran.html" class="mt-1 btnn btn-sm btn-opsi m-0"></a> -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Bahasa Inggris</td>
                                            <td>XII AKL</td>
                                            <td class="pb-0 pt-1 text-center">
                                                <button type="button" class="btnnn btn-opsi "
                                                    data-toggle="dropdown">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                        height="18" fill="currentColor"
                                                        class="my-1 bi bi-three-dots" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                                    </svg>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <a href="/App/SlicingAdminArea/editpelajaran.html"
                                                        class="text-dark">
                                                        <li class="dropdown-item edit-opsi"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="mb-1 bi bi-pen" viewBox="0 0 16 16">
                                                                <path
                                                                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                                            </svg> <span class="ps-2">Edit</span></li>
                                                    </a>
                                                    <a onclick="return confirm('Apakah Anda yakin? data akan terhapus secara permanen!')"
                                                        role="button" class="text-dark">
                                                        <li class="dropdown-item"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="mb-1 bi bi-trash3" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                                            </svg> <span class="ps-2">Hapus</span></li>
                                                    </a>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Bahasa Jepang</td>
                                            <td>XII RPL</td>
                                            <td class="pb-0 pt-1 text-center">
                                                <button type="button" class="btnnn btn-opsi "
                                                    data-toggle="dropdown">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                        height="18" fill="currentColor"
                                                        class="my-1 bi bi-three-dots" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                                    </svg>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <a href="/App/SlicingAdminArea/editpelajaran.html"
                                                        class="text-dark">
                                                        <li class="dropdown-item edit-opsi"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="mb-1 bi bi-pen" viewBox="0 0 16 16">
                                                                <path
                                                                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                                            </svg> <span class="ps-2">Edit</span></li>
                                                    </a>
                                                    <a onclick="return confirm('Apakah Anda yakin? data akan terhapus secara permanen!')"
                                                        role="button" class="text-dark">
                                                        <li class="dropdown-item"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="mb-1 bi bi-trash3" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                                            </svg> <span class="ps-2">Hapus</span></li>
                                                    </a>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <!-- right col -->
                    </div>
                    <!-- /.row (main row) -->
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
    <script>
        $(document).ready(function() {
            $('.dataTable').DataTable();
        });
    </script>
</body>

</html>
