@extends('master')
@section('content')
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <form action="/tambah/mapel/" method="POST">
        @csrf
    
        <div class="body customecolor">
          
    <div class="form" style="text-decoration: none">
        <div class="title">Pengumpulan Tugas</div>
        @if (session()->has('message'))
          <div class="alert alert-success">
              {{ session('message') }}
          </div>
          @endif

        <div class="input-container ic1">
            <select name="mapel" class="input" type="text">
              <option value="">-- Pilih Mapel --</option>
              @foreach ($user as $users)
              <option value="{{ $users->id }}" >{{ $users->mapel }}</option>                                                                                                                       
              @endforeach
          </select>
          {{-- <div class="cut"></div>
            <label for="kelas" class="placeholder">Kelas</label> --}}
        </div>

        {{-- <div class="input-container ic1">
            <select name="guru" class="input" type="text">
              <option value="">-- Pilih Guru --</option>
              @foreach ($user as $users)
              <option value="{{ $users->id }}" >{{ $users->name }}</option>                                                                                                                     
              @endforeach
          </select>
        </div> --}}

        <div class="input-container ic1">
          <select name="kelas" class="input" type="text">
            <option value="">-- Pilih Kelas --</option>
            @foreach ($kelas as $kelass)
            <option value="{{ $kelass->id }}" >{{ $kelass->kelas }}</option>                                                                                                                 
            @endforeach
        </select>
        {{-- <div class="cut"></div>
          <label for="kelas" class="placeholder">Kelas</label> --}}
        </div>
    
        {{-- <div class="input-container ic1">
          <input name="mapel" class="input" type="text" />
          <div class="cut"></div>
          <label for="mapel" class="placeholder">Mapel</label>
        </div> --}}
        <button type="submit" class="submit">submit</button>
      </div>
    </div>
    </form>
    @endsection