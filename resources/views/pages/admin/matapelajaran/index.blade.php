@extends('layouts.Admin.kerangka')
@section('content')
    <div class="row">

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ session('success') }}
            </div>
        @endif
        <!-- Left col -->
        <div class="card">
            <div class="card-bodyy mb-3">
                <div class="col-4 mt-2 pt-1 p-0 mb-3">
                    <a href="{{ '/admin/matapelajaran/create' }}" class="btnnn btn-plus px-3"><svg
                            xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="mb-1 bi bi-plus-lg" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                        </svg> <span class="mx-1">Mata Pelajaran</span></a>
                </div>

                <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Mata Pelajaran</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>

            </div>
        </div>
        <!-- right col -->
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
                url: "{{ route('datapelajaran') }}",
                type: "POST",
            },
            columnDefs: [{
                    targets: '_all',
                    visible: true
                },
                {
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
                        return row.nama_pelajaran
                    }
                },
                {
                    "targets": 2,
                    "sortable": false,
                    "render": function(data, type, row, meta) {
                        return `
                    <a href="{{ url('/admin/matapelajaran/`+ row.id + `/edit') }}" class="btn btn-primary btn-sm"><li class="fa fa-edit"></li></a>
                    <form method="POST" action="{{ url('/admin/matapelajaran/`+row.id+`') }}" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin akan menghapus data tersebut.?, Jika di hapus maka seluruh data Ujian akan ikut terhapus.!')" type="submit"><li class="fa fa-trash"></li></button>
                    </form>
                    `
                    }
                }
            ]
        });
    </script>
@endsection
