@extends('master')
@section('content')
{{-- <div class=" "> --}}
  <div class="container mt-5 mb-5" style="max-width: 80%">
    <div class="card h-100">
    <div class="card-body">
      <form action="/edit/{{ Auth::user()->name }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <h6 class="mb-2 text-primary">Edit Profil Pribadi</h6>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
          <div class="form-group">
            
            <label for="fullName">Nama Lengkap</label>
            <input name="name" type="text" class="form-control" id="fullName" placeholder="Masukkan Nama Lengkap" value="{{ Auth::user()->name }}">
          </div>
        </div>
        @if (Auth::user()->role == 'Siswa')
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
          <div class="form-group">
            <label>Nisn</label>
            <input name="nisn" type="text" class="form-control"  placeholder="Masukkan NISN" value="{{ Auth::user()->nisn }}">
          </div>
        </div>
        @endif
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
          <div class="form-group">
            <label for="date">Tanggal Lahir</label>
            <input name="tanggal_lahir" type="date" class="form-control" id="date" placeholder="yyyy-mm-dd" value="{{ Auth::user()->tanggal_lahir }}">
          </div>
        </div>
        @if (Auth::user()->role == 'Siswa')
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
          <div class="form-group">
            <label for="date">Kelas</label>
            <select name="kelas" aria-valuemax="{{ Auth::user()->kelas }}" class="form-control" type="text">
              <option></option>
              @foreach ($kelas as $kelass)
              <option value="{{ $kelass->id }}" >{{ $kelass->kelas }}</option>                                                                                                                       
              @endforeach
          </select>
          </div>
        </div>
        @endif
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
          <div class="form-group">
            <label for="adress">Alamat</label>
            <input name="address" type="text" class="form-control" id="address" placeholder="Masukkan Alamat" value="{{ Auth::user()->address }}">
          </div>
        </div>
        {{-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
          <div class="form-group">
            <label for="eMail">Email</label>
            <input name="email" type="text" class="form-control" id="eMail" placeholder="Masukkan Email">
          </div>
        </div> --}}
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
          <div class="form-group">
            <label for="phone">Phone</label>
            <input name="number_phone" type="text" class="form-control" id="phone" placeholder="Masukkan Nomor Telpon" value="{{ Auth::user()->number_phone }}">
          </div>
        </div>
        @if (Auth::user()->role == 'Guru')
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
          <div class="form-group">
            <label>Mapel</label>
            <input name="mapel" type="text" class="form-control"  placeholder="Masukkan Mapel" value="{{ Auth::user()->mapel }}">
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
          <div class="form-group">
            <label>Pendidikan</label>
            <input name="pendidikan" type="text" class="form-control"  placeholder="Masukkan Status Pendidikan" value="{{ Auth::user()->pendidikan }}">
          </div>
        </div>
        @endif
        {{-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
          <div class="form-group">
            <label for="image">Gambar</label>
            <input name="image" type="file" class="form-control" id="image" placeholder="Masukkan Image">
          </div>
        </div> --}}
      
      {{-- <div class="row gutters"> --}}
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="text-right">
            {{-- <button type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button> --}}
            <button type="submit" id="submit" class="btn btn-primary">Update</button>
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