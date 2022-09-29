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
                <form action="/admin/matapelajaran" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama_pelajaran">Nama Pelajaran</label>
                        <input type="text" class="form form-control" name="nama_pelajaran" id="nama_pelajaran" required value="{{ old('nama_pelajaran') }}">
                        @error('nama_pelajaran')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea name="description" id="editor" cols="30" rows="10" class="form form-control">{{ old('description') }}</textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" name="btn_simpan" class="btn btn-primary btn-block btn-lg border-rad" ><li class="fa fa-save"></li> SAVE</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- right col -->
    </div>
    <script type="text/javascript">
        CKEDITOR.replace('editor');
    </script>
@endsection
