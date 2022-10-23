@extends('layouts.Admin.kerangka')
@section('content')
    <style>
        .div-input {
            font: 300 1rem/1.5rem poppins, sans-serif;
            padding: 1rem 1.25rem;
            margin-top: 0.75rem;
            border-radius: 0.75rem;
            border: 1px solid #7F8487;
            color: #2a3240;
            transition: 0.3s;
        }
    </style>

    <div class="row">
        <div class="card">
            <div class="card-bodyy">
                <div class="col-4 mt-2 pt-1 p-0">
                    <a href="{{ route('admin-siswa') }}" class="btnnn btn-plus px-3"><span class="mx-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor"
                                class="pb-1 bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                            </svg> Kembali</span>
                    </a>
                </div>
                <div class="col-md-6 col-12 ms-md-3">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('admin-siswa') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Nama Siswa</label>
                                <input type="text" name="name" class="form-control form" id="name"
                                    placeholder="Masukkan nama siswa">
                            </div>
                            <div class="form-group">
                                <label>Kelas</label>
                                <select name="kelas_id" class="form-select" style="width: 100%;">
                                    <option selected disabled>-- Pilih kelas --</option>
                                    @foreach ($datakelas as $tampilkan)
                                        <option value=" {{ $tampilkan->id }} ">{{ $tampilkan->nama_kelas }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">NIS</label>
                                <input type="text" name="email" class="form-control form" id="exampleInputEmail1"
                                    placeholder="Input dengan Format: 10.2021.334@patba.com">
                            </div>
                            {{-- <div class="form-group">
            <label for="password">Password</label>
            <input type="text" name="password" class="form-control form" id="email" placeholder="Masukkan password" >
            <span onclick="togglePassword()">
              <svg style="margin-left: 0.75rem; cursor: pointer" width="20" height="14" viewBox="0 0 20 14"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path id="icon-toggle" fill-rule="evenodd" clip-rule="evenodd"
                  d="M0 7C0.555556 4.66667 3.33333 0 10 0C16.6667 0 19.4444 4.66667 20 7C19.4444 9.52778 16.6667 14 10 14C3.31853 14 0.555556 9.13889 0 7ZM10 5C8.89543 5 8 5.89543 8 7C8 8.10457 8.89543 9 10 9C11.1046 9 12 8.10457 12 7C12 6.90536 11.9934 6.81226 11.9807 6.72113C12.2792 6.89828 12.6277 7 13 7C13.3608 7 13.6993 6.90447 13.9915 6.73732C13.9971 6.82415 14 6.91174 14 7C14 9.20914 12.2091 11 10 11C7.79086 11 6 9.20914 6 7C6 4.79086 7.79086 3 10 3C10.6389 3 11.2428 3.14979 11.7786 3.41618C11.305 3.78193 11 4.35535 11 5C11 5.09464 11.0066 5.18773 11.0193 5.27887C10.7208 5.10171 10.3723 5 10 5Z"
                  fill="#7F8487" />
              </svg>
            </span>
          </div> --}}
                            <label for="password">Password</label>
                            <div class="input-group mb-3 form-group">
                                <input type="text" name="password" id="password" class="form-control"
                                    placeholder="Masukkan password" aria-label="Username" aria-describedby="basic-addon1"
                                    style="border-radius: 10px 0 0 10px !important">
                                <span class="input-group-text" id="basic-addon1" onclick="togglePassword()"
                                    style="border-radius: 0 10px 10px 0 ">
                                    <svg style=" cursor: pointer" width="20" height="14" viewBox="0 0 20 14"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path id="icon-toggle" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 7C0.555556 4.66667 3.33333 0 10 0C16.6667 0 19.4444 4.66667 20 7C19.4444 9.52778 16.6667 14 10 14C3.31853 14 0.555556 9.13889 0 7ZM10 5C8.89543 5 8 5.89543 8 7C8 8.10457 8.89543 9 10 9C11.1046 9 12 8.10457 12 7C12 6.90536 11.9934 6.81226 11.9807 6.72113C12.2792 6.89828 12.6277 7 13 7C13.3608 7 13.6993 6.90447 13.9915 6.73732C13.9971 6.82415 14 6.91174 14 7C14 9.20914 12.2091 11 10 11C7.79086 11 6 9.20914 6 7C6 4.79086 7.79086 3 10 3C10.6389 3 11.2428 3.14979 11.7786 3.41618C11.305 3.78193 11 4.35535 11 5C11 5.09464 11.0066 5.18773 11.0193 5.27887C10.7208 5.10171 10.3723 5 10 5Z"
                                            fill="#7F8487" />
                                    </svg>
                                </span>
                            </div>

                            <div class="d-md-flex justify-content-end mb-4 pb-3">
                                <button class="btnnn btn-simpan-edit px-3" type="submit"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                        class="mb-1 bi bi-check-lg" viewBox="0 0 16 16">
                                        <path
                                            d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                                    </svg> <span class="pe-1">Simpan</span></button>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
                document
                    .getElementById("icon-toggle")
                    .setAttribute("fill", "#277BC0");
            } else {
                x.type = "password";
                document
                    .getElementById("icon-toggle")
                    .setAttribute("fill", "#7F8487");
            }
        }
    </script>
@endsection
