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
            <form action="{{ route('nilai.store') }}" method="POST">
              @csrf
              <div class="mb-3 from-group">
                <label class="form-label">Mahasiswa</label>
                <select class="form-control" name="mahasiswa_id" required>
                  <option disabled selected>Pilih Mahasiswa</option>
                  @foreach ($mahasiswa as $mhs)
                    <option value="{{ $mhs->id }}">{{ $mhs->nama }}</option>
                  @endforeach
                </select>
              </div>
              <div class="mb-3 from-group">
                <label class="form-label">Matakuliah</label>
                <select class="form-control" name="matkul_id" required>
                  <option disabled selected>Pilih Matakuliah</option>
                  @foreach ($matkul as $mt)
                    <option value="{{ $mt->id }}">{{ $mt->nama_matkul }}</option>
                  @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label">Nilai</label>
                <input class="form-control" name="nilai" type="text" placeholder="nilai" required">
              </div>
              <button class="btn btn-primary" type="submit">Simpan</button>
              <a class="btn btn-danger" href="{{ route('nilai.index') }}">Batal</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
