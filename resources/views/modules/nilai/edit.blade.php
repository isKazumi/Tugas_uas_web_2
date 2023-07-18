@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header bg-primary text-light fs-4 d-flex gap-3">
            <div>{{ __('Edit Nilai') }}</div>
          </div>
          <div class="card-body">
            <form action="{{ route('nilai.update', $nilai->id) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="mb-3 from-group">
                <label class="form-label">Nama Mahasiswa</label>
                <select class="form-control" name="mahasiswa">
                  <option disabled selected>Pilih Mahasiswa</option>
                  @foreach ($mahasiswa as $mhs)
                    <option value="{{ $mhs->id }}" {{ $mhs->id === $nilai->mahasiswa->id ? 'selected' : '' }}>
                      {{ $mhs->nama }}</option>
                  @endforeach
                </select>
              </div>
              <div class="mb-3 from-group">
                <label class="form-label">Matakuliah</label>
                <select class="form-control" name="nama_matkul">
                  <option disabled selected>Pilih Matakuliah</option>
                  @foreach ($dosen as $mt)
                    <option value="{{ $mt->matkul->id }}" {{ $mt->matkul->id === $nilai->dosen->matkul->id ? 'selected' : '' }}>
                      {{ $mt->matkul->nama_matkul }}</option>
                  @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label">Nilai</label>
                <input class="form-control" value="{{ $nilai->nilai }}" name="nilai" type="text" placeholder="nilai" required>
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
