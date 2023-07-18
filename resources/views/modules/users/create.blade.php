@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header bg-primary text-light fs-4 d-flex gap-3">
            <div>{{ __('Tambah User') }}</div>
          </div>
          <div class="card-body">
            <form action="{{ route('users.store') }} " method="POST">
              @csrf
              <div class="mb-3">
                <label class="form-label">Usernme</label>
                <input class="form-control" name="name" type="text" placeholder="Username" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Email</label>
                <input class="form-control" name="email" type="email" placeholder="Email">
              </div>
              <div class="mb-3">
                <label class="form-label">Password</label>
                <input class="form-control" name="password" type="password" minlength="8" placeholder="password">
              </div>
              <button class="btn btn-primary" type="submit">Simpan</button>
              <a class="btn btn-danger" href="{{ route('users.index') }}">Batal</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
