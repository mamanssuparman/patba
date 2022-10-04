@extends('layouts.Admin.kerangka')
@section('content')
  
  <div class="row">
    <div class="card">
      <div class="card-bodyy mb-3">
        <div class="col-4 mt-2 pt-1 p-0 mb-4">
          <a href="{{ route('admin-kelas') }}" class="btnnn btn-plus px-3"><span class="mx-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="pb-1 bi bi-arrow-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
            </svg> Kembali</span>
          </a>
        </div>
        <div class="col-md-6 col-12 ms-md-3">
          <form action="{{ url('/admin/kelas/' . $dataKelas->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mt-md-2 mb-md-4">
              <label for="nama_kelas">Nama Kelas</label>
              <input type="text" class="form-control" name="nama_kelas" id="nama_kelas" placeholder="Masukkan nama kelas" autocomplete="off" value="{{ old('nama_kelas', $dataKelas->nama_kelas) }}" required>
              <input type="hidden" class="form-control" name="nama_kelas_old" id="nama_kelas_old" value="{{ $dataKelas->nama_kelas }}" required>
              @error('nama_kelas')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="d-md-flex justify-content-end mb-4 pb-3">
              <button class="btnnn btn-simpan-edit px-3" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mb-1 bi bi-check-lg" viewBox="0 0 16 16">
                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
              </svg> <span class="pe-1">Simpan</span></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection