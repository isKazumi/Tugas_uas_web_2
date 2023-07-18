@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header bg-primary text-light fs-4 d-flex gap-3">
            <div>{{ __('Edit Data User') }}</div>
          </div>
          <div class="card-body">
            <form action="{{ route('users.update', $user->id) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="mb-3">
                <label class="form-label">Username</label>
                <input class="form-control" name="name" type="text" value="{{ $user->name }}" placeholder="Username">
              </div>
              <div class="mb-3">
                <label class="form-label">Email</label>
                <input class="form-control" name="email" type="email" value="{{ $user->email }}" placeholder="Email">
              </div>
              <div class="mb-3">
                <label class="form-label">Password</label>
                <input class="form-control" name="password" type="password" minlength="8" placeholder="Password">
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
