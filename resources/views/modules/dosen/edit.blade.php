@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header bg-primary text-light fs-4 d-flex gap-3">
            <div>{{ __('Edit Data Dosen') }}</div>
          </div>
          <div class="card-body">
            <form action="{{ route('dosen.update', $dosen->id) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="mb-3">
                <label class="form-label">Nidn</label>
                <input class="form-control" name="nidn" type="text" value="{{ $dosen->nidn }}" placeholder="Nidn"
                  required>
              </div>
              <div class="mb-3">
                <label class="form-label">Nama</label>
                <input class="form-control" name="nama_dosen" type="text" value="{{ $dosen->nama_dosen }}"
                  placeholder="Nama Dosen" required>
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
                <input class="form-control" name="tempat_lahir" type="text" value="{{ $dosen->tempat_lahir }}"
                  placeholder="Tempat Lahir" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input class="form-control" name="tgl_lahir" type="date" value="{{ $dosen->tgl_lahir }}"
                  placeholder="Tanggal Lahir" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input class="form-control" name="alamat" type="text" value="{{ $dosen->alamat }}"
                  placeholder="Alamat" required>
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
