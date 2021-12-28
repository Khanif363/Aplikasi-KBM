@extends('master')
@section('content')
<div class="body ">
<div class="form" style="text-decoration: none">
    <div class="title">Pengumpulan Tugas</div>
    {{-- <div class="subtitle">Teliti terlebih dahulu sebelum disubmit!</div> --}}
    <div class="input-container ic1">
      <input id="name" class="input" type="text" placeholder="Masukkan Nama Lengkap" />
      {{-- <div class="cut"></div>
      <label for="name" class="placeholder">Full Name</label> --}}
    </div>

    <div class="input-container ic2">
      <input hidden id="email" class="input" type="text" placeholder="Masukkan Email" value="{{ Auth::user()->email }}" />
      {{-- <div class="cut cut-short"></div> --}}
      {{-- <label for="email" class="placeholder">Email</> --}}
    </div>

      <div class="input-container ic2 ">
        <textarea class="form-control input text" id="mapel" class="input" type="text" placeholder="Masukkan Mapel" ></textarea>
        {{-- <div class="cut"></div>
        <label for="mapel" class="placeholder">Mapel</label> --}}
      </div>

      

    <button type="text" class="submit">submit</button>
  </div>
</div>
@endsection
