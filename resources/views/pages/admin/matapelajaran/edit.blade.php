@extends('layouts.Admin.kerangka')
@section('content')
    <div class="row">
        <!-- Left col -->
        <div class="card">
            <div class="card-bodyy mb-3">
                <div class="col-4 mt-2 pt-1 p-0 mb-3">
                    <a href="{{ route('admin-matapelajaran') }}" class="btnnn btn-plus px-3"><span class="mx-1">
                            <li class="fa fa-undo"></li> Kembali
                        </span></a>
                </div>
                <form action="{{ url('/admin/matapelajaran/' . $dataPelajaran->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama_pelajaran">Nama Pelajaran</label>
                        <input type="text" class="form form-control" name="nama_pelajaran" id="nama_pelajaran" required
                            value="{{ old('nama_pelajaran', $dataPelajaran->nama_pelajaran) }}">
                        <input type="hidden" class="form form-control" name="nama_pelajaran_old" id="nama_pelajaran_old"
                            required value="{{ $dataPelajaran->nama_pelajaran }}">
                        @error('nama_pelajaran')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea name="description" id="editor" cols="30" rows="10" class="form form-control">{{ old('description', $dataPelajaran->description) }}</textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" name="btn_simpan" class="btn btn-primary btn-block btn-lg border-rad">
                            <li class="fa fa-save"></li> SAVE
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- right col -->
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
