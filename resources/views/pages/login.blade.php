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

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-bodyy mb-3 p-0">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login Admin</h1>
                                </div>
                                @if (session()->has('error'))
                                    <div class="alert alert-warning alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-hidden="true">&times;</button>
                                        {{ session('error') }}
                                    </div>
                                @endif
                                <form class="user" method="POST" action="{{ route('auth-admin') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user"
                                            id="exampleInputEmail" placeholder="username" name="email"
                                            value="{{ old('email') }}" required>
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="password" name="password"
                                            value="{{ old('password') }}" required>
                                        @error('password')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <button class="btn bg-green btn-user btn-block border-rad btn-lg" type="submit">
                                        <li class="fa fa-lock"></li>
                                        Login
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                Icon atau Animasi
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
