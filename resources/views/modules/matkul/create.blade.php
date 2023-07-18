@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header bg-primary text-light fs-4 d-flex gap-3">
            <div>{{ __('Tambah Matakuliah') }}</div>
          </div>
          <div class="card-body">
            <form action="{{ route('matkul.store') }} " method="POST">
              @csrf
              <div class="mb-3">
                <label class="form-label">KD_Matkul</label>
                <input class="form-control" name="kd_matkul" type="text" maxlength="5" placeholder="Kd Matkul"
                  required>
              </div>
              <div class="mb-3">
                <label class="form-label">Nama Matakuliah</label>
                <input class="form-control" name="nama_matkul" type="text" placeholder="Nama Matkul" required>
              </div>
              <div class="mb-3">
                <label class="form-label">SKS</label>
                <input class="form-control" name="sks" type="text" placeholder="SKS" required>
              </div>
              <button class="btn btn-primary" type="submit">Simpan</button>
              <a class="btn btn-danger" href="{{ route('matkul.index') }}">Batal</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
