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
                <div class="form-group">
                    <label for="pilih_mapel">Pilih Mata Pelajaran</label>
                    <select name="pilih_mapel" id="pilih_mapel" class="form form-control filter">
                        <option value="">-- Pilih Mata Pelajaran --</option>
                        @foreach ($datamapel as $mapel)
                            <option value="{{ $mapel->id }}">{{ $mapel->nama_pelajaran }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <!-- right col -->
    </div>
    <div class="row">
        <div class="card">
            <div class="card-header">
                Soal Untuk Mata Pelajaran :
            </div>
            <div class="card-bodyy">
                <div class="form-group">
                    <label for="soal">Soal</label>
                    <textarea name="soal" id="editor" cols="30" rows="10" class="form form-control">{{ old('soal') }}</textarea>
                </div>
                <div class="form-group">
                    <button type="button" name="btn_simpan" class="btn btn-primary btn-lg btn-block border-rad">
                        <li class="fa fa-save"></li> SAVE
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="card">
            <div class="card-header">
                Daftar Soal Untuk :
            </div>
            <div class="card-bodyy">
                <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Soal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
        CKEDITOR.replace('editor', options);
    </script>
@endsection
@section('js')
    <script>
        let pilih_mapel = $('#pilih_mapel').val()
        // List Data Table
       const table = $('#table').DataTable({
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
                url: "{{ url('') }}/soal/data/",
                type: "POST",
                data:function(res){
                    res.pilih_mapel = pilih_mapel
                }
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
                        return row.soal
                    }
                },
                {
                    "targets": 2,
                    "sortable": false,
                    "render": function(data, type, row, meta) {
                        return `
                    <a href="{{ url('/admin/soal/`+ row.id + `/edit') }}" class="btn btn-primary btn-sm" title="Detail Soal"><li class="fa fa-list"></li></a>
                    <form method="POST" action="{{ url('/admin/soal/`+row.id+`') }}" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin akan menghapus data tersebut.?, Jika di hapus maka seluruh data Ujian akan ikut terhapus.!')" type="submit"><li class="fa fa-trash"></li></button>
                    </form>
                    `
                    }
                }
            ]
        });
        // Filter Mata Pelajaran
    </script>
    <script>
         $('.filter').on('change', function() {
            pilih_mapel = $('#pilih_mapel').val()
            console.log(pilih_mapel)
            table.ajax.reload(null, false)
        })
    </script>
@endsection
