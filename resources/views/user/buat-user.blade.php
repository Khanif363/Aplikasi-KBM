@extends('master')
@section('content')
{{-- <div class=" "> --}}
  <div class="container mt-5 mb-5" style="max-width: 80%">
    <div class="card h-100">
    <div class="card-body">
      <form action="/tambah" method="POST">
        @csrf
        @if ($message = Session::get('Success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>    
                <strong>{{ $message }}</strong>
            </div>
        @endif
      <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <h6 class="mb-2 text-primary">Tambah User</h6>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
          <div class="form-group">
            @error('name')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="fullName">Nama Lengkap</label>
            <input name="name" type="text" class="form-control" id="fullName" placeholder="Masukkan Nama Lengkap">
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
          <div class="form-group">
            @error('email')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label >Email</label>
            <input name="email" type="email" class="form-control" placeholder="Masukkan Email">
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="form-group">
              @error('role')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <label for="role">Role</label>
              <select name="role" class="form-control" type="text">
                <option value="">-- Pilih Role --</option>
                @foreach ($role as $roles)
                <option value="{{ $roles->role }}" >{{ $roles->role }}</option>                                                                                                                       
                @endforeach
            </select>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="form-group">
              @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <label >Password</label>
              <input name="password" type="password" class="form-control"  placeholder="Masukkan Password">
            </div>
        </div>

      {{-- <div class="row gutters"> --}}
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="text-right">
            {{-- <button type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button> --}}
            <button type="submit" id="submit" class="btn btn-primary">Buat</button>
          </div>
        </div>
      {{-- </div> --}}
    </div>
  </form>
  </div>
  </div>
  </div>
{{-- </div> --}}
@endsection