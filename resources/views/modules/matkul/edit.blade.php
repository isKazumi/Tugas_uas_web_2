@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header bg-primary text-light fs-4 d-flex gap-3">
            <div>{{ __('Edit Data Matakuliah') }}</div>
          </div>
          <div class="card-body">
            <form action="{{ route('matkul.update', $matkul->id) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="mb-3">
                <label class="form-label">KD Matakuliah</label>
                <input class="form-control" name="kd_matkul" type="text" value="{{ $matkul->kd_matkul }}"
                  placeholder="KD_Matkul" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Nama Matakuliah</label>
                <input class="form-control" name="nama_matkul" type="text" value="{{ $matkul->nama_matkul }}"
                  placeholder="Nama Matakuliah" required>
              </div>
              <div class="mb-3">
                <label class="form-label">SKS</label>
                <input class="form-control" name="sks" type="text" value="{{ $matkul->sks }}" placeholder="SKS"
                  required>
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
