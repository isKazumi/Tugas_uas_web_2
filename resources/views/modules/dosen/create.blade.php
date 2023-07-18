@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header bg-primary text-light fs-4 d-flex gap-3">
            <div>{{ __('Tambah Data Dosen') }}</div>
          </div>
          <div class="card-body">
            <form action="{{ route('dosen.store') }} " method="POST">
              @csrf
              <div class="mb-3">
                <label class="form-label">Nidn</label>
                <input class="form-control" name="nidn" type="text" placeholder="Nidn" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Nama Dosen</label>
                <input class="form-control" name="nama_dosen" type="text" placeholder="Nama Dosen" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Matakuliah</label>
                <select name="matkul_id" class="form-control">
                  <option selected >Pilih Matakuliah</option>
                  @foreach ($matkul as $mt)
                  <option value="{{ $mt->id }}">{{ $mt->nama_matkul }}</option>
                  @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label">Tempat Lahir</label>
                <input class="form-control" name="tempat_lahir" type="text" placeholder="Tempat Lahir" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input class="form-control" name="tgl_lahir" type="date" placeholder="Tanggal Lahir" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input class="form-control" name="alamat" type="text" placeholder="Alamat" required>
              </div>
              <button class="btn btn-primary" type="submit">Simpan</button>
              <a class="btn btn-danger" href="{{ route('dosen.index') }}">Batal</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
