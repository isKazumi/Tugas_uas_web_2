@extends('layouts.app')

@push('css')
  <link href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" rel="stylesheet">
@endpush

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header bg-primary text-light fs-4 d-flex gap-3">
            <div>{{ __('Matakuliah') }}</div>
            <div><a class="btn btn-outline-warning text-light" href="{{ route('matkul.create') }}">Tambah Matakuliah</a>
            </div>
          </div>
          <div class="card-body">
            <table class="display" id="dataTable" style="width: 100%">
              <thead>
                <th>No.</th>
                <th>KD Matkul</th>
                <th>Nama Matakuliah</th>
                <th>SKS</th>
                <th>Action</th>
              </thead>
              @php
                $no = 1;
              @endphp
              <tbody>
                @foreach ($matkul as $matkul)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $matkul->kd_matkul }}</td>
                    <td>{{ $matkul->nama_matkul }}</td>
                    <td>{{ $matkul->sks }}</td>
                    <td>
                      <form class="d-flex gap-2" action="{{ route('matkul.destroy', $matkul->id) }}" method="post">
                        <a class="btn btn-outline-warning" href="{{ route('matkul.edit', $matkul->id) }}">Edit</a>
                        @method('delete')
                        @csrf
                        <button class="btn btn-outline-danger" type="submit">Hapus</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@push('js')
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>

  <script>
    new DataTable('#dataTable');
  </script>
@endpush
