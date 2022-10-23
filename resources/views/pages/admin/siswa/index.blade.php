@extends('layouts.Admin.kerangka')
@section('content')
    <div class="row">

        @if (session()->has('success'))
            <div class="alert alert-sukses alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <div class="card-bodyy mb-3">
                <div class="col-4 mt-2 pt-1 p-0 mb-3">
                    <a href="{{ '/admin/siswa/create' }}" class="btnnn btn-plus px-3"><svg xmlns="http://www.w3.org/2000/svg"
                            width="20" height="20" fill="currentColor" class="mb-1 bi bi-plus-lg"
                            viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                        </svg><span class="mx-1">Siswa</span></a>
                </div>

                <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th class="pb-2">Option</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>

            </div>
        </div>

    </div>
@endsection
@section('js')
    <script>
        $('#table').DataTable({
            "pageLength": 100,
            "lengthMenu": [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100, 'semua']
            ],
            "bLengthChange": true,
            "bFilter": true,
            "bInfo": true,
            "processing": true,
            "bServerSide": true,
            ajax: {
                url: "{{ route('dataSiswa') }}",
                type: "POST",
            },
            columnDefs: [{
                    targets: '_all',
                    visible: true
                },
                {
                    // var no = $_POST['start']
                    "targets": 0,
                    "class": "text-nowrap",
                    "render": function(data, type, row, meta) {
                        return row.id
                    }
                },
                {
                    "targets": 1,
                    "class": "text-nowrap",
                    "render": function(data, type, row, meta) {
                        return row.name
                    }
                },
                {
                    "targets": 2,
                    "class": "text-nowrap",
                    "render": function(data, type, row, meta) {
                        return row.nama_kelas
                    }
                },
                {
                    "targets": 3,
                    "sortable": false,
                    "class": "py-0 pt-1 text-center",
                    "render": function(data, type, row, meta) {
                        return `
                      <button type="button" class="btnnn btn-opsi" data-toggle="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="my-1 bi bi-three-dots" viewBox="0 0 16 16">
                          <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                        </svg>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <a href="{{ url('/admin/siswa/`+ row.id + `/edit') }}" class="text-dark"><li class="dropdown-item edit-opsi"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mb-1 bi bi-pen" viewBox="0 0 16 16">
                          <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                        </svg> <span class="ps-2">Edit</span></li></a>
                        <form method="POST" action="{{ url('/admin/siswa/`+row.id+`') }}" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button class="ps-0 dropdown-item py-0" onclick="return confirm('Apakah Anda yakin? data akan terhapus secara permanen!')"><li class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mb-1 bi bi-trash3" viewBox="0 0 16 16">
                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                          </svg> <span class="ps-2">Hapus</span></li></button>
                        </form>
                        <form method="POST" action="{{ url('/admin/siswa/resetpassword ') }}" class="d-inline">
                          @csrf
                        <input type="hidden" name="idsiswa" id="" value="` + row.id + `">
                          <button class="ps-0 dropdown-item py-0" onclick="return confirm('Apakah Anda yakin akan reset password data tersebut?')"><li class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                        <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
                        <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                        </svg> <span class="ps-2">Reset Password</span></li></button>
                        </form>
                      </ul>
                      `
                    }
                }
            ]
        });
    </script>
@endsection
