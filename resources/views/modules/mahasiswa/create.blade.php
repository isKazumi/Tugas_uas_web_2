@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header bg-primary text-light fs-4 d-flex gap-3">
            <div>{{ __('Tambah Data Mahasiswa') }}</div>
          </div>
          <div class="card-body">
            <form action="{{ route('mahasiswa.store') }} " method="POST">
              @csrf
              <div class="mb-3">
                <label class="form-label">Npm</label>
                <input class="form-control" name="npm" type="text" placeholder="Npm" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Nama</label>
                <input class="form-control" name="nama" type="text" placeholder="Nama" required>
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
                <label class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin">
                  <option value="L">Laki-Laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input class="form-control" name="alamat" type="text" placeholder="Alamat" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Telpon</label>
                <input class="form-control" name="telp" type="tel" placeholder="No.Telpon" required>
              </div>
              <button class="btn btn-primary" type="submit">Simpan</button>
              <a class="btn btn-danger" href="{{ route('mahasiswa.index') }}">Batal</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
