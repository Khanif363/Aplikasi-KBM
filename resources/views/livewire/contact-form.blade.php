{{-- @extends('master')
@section('content') --}}
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
<div style="margin-top: 50px">
<form wire:submit.prevent="contactFormSubmit" method="POST">
    @csrf

    <div class="body customecolor">
      
<div class="form" style="text-decoration: none">
    <div class="title">Tugas & Pertanyaan</div>
    @if (session()->has('message'))
      <div class="alert alert-success">
          {{ session('message') }}
      </div>
      @endif
    {{-- <div class="subtitle">Teliti terlebih dahulu sebelum disubmit!</div> --}}

    {{-- <div class="input-container ic2">
      <input id="kelas" class="input" type="text" placeholder=" " />
      <div class="cut"></div>
      <label for="kelas" class="placeholder">Kelas</label>
    </div> --}}

    @error('name')
        <p class="alert alert-success alert-block">{{ $message }}</p>
    @enderror
    {{-- <div class="input-container ic1">
      <input wire:model="name" name="name" id="name" class="input" type="text"  name="name" value="{{ old('name') }}" placeholder="Masukkan Nama Lengkap" />
      {{-- <div class="cut"></div>
      <label for="name" class="placeholder">Full Name</label> --}}
    </div> --}}
    <div class="input-container ic1">
      <select wire:model="name" name="name" id="name" class="input" type="text"  name="name" value="{{ old('name') }}" placeholder="Masukkan Nama Lengkap">
        <option value="">-- Nama Lengkap --</option>
        @foreach ($name as $names)
        <option value="{{ $names->name }}" >{{ $names->name }}</option>                                                            
        <option value="{{ $names->name }}" >{{ $names->name }}</option>
        <option value="{{ $names->name }}" >{{ $names->name }}</option>
        @endforeach                                                            
        {{-- <option value="tambah" >Kamis</option> --}}
    </select>
    {{-- <div class="cut"></div>
      <label for="kelas" class="placeholder">Kelas</label> --}}
    </div>

    @error('kelas')
        <p class="alert alert-success alert-block">{{ $message }}</p>
    @enderror
    <div class="input-container ic1">
      <select wire:model="kelas" class="input" type="text">
        <option value="">-- Pilih Kelas --</option>
        <option value="1 SMP" >1 SMP</option>                                                            
        <option value="2 SMP" >2 SMP</option>
        <option value="3 SMP" >3 SMP</option>                                                            
        {{-- <option value="tambah" >Kamis</option> --}}
    </select>
    {{-- <div class="cut"></div>
      <label for="kelas" class="placeholder">Kelas</label> --}}
    </div>

    @error('mapel')
        <p class="alert alert-success alert-block">{{ $message }}</p>
    @enderror
    {{-- <div class="input-container ic1">
      <input wire:model="mapel" name="mapel" id="mapel" class="input" type="text" value="{{ old('mapel') }}" placeholder="Masukkan Mapel" />
    </div> --}}
    <div class="input-container ic1">
      <select wire:model="mapel" name="mapel" id="mapel" class="input" type="text" value="{{ old('mapel') }}" placeholder="Masukkan Mapel">
        <option value="">-- Nama Lengkap --</option>
        @foreach ($mapel as $mapels)
        <option value="{{ $mapels->mapel }}" >{{ $mapels->mapel }}</option>                                                            
        <option value="{{ $mapels->mapel }}" >{{ $mapels->mapel }}</option>
        <option value="{{ $mapels->mapel }}" >{{ $mapels->mapel }}</option>
        @endforeach                                                            
        {{-- <option value="tambah" >Kamis</option> --}}
    </select>
    {{-- <div class="cut"></div>
      <label for="kelas" class="placeholder">Kelas</label> --}}
    </div>

    @error('kategori')
        <p class="alert alert-success alert-block">{{ $message }}</p>
    @enderror
    <div class="input-container ic1">
      <select wire:model="kategori" name="kategori" class="input" type="text">
        <option value="">-- Pilih Kategori --</option>
        <option value="Pertanyaan" >Pertanyaan</option>                                                            
        <option value="Tugas" >Tugas</option>
        {{-- <option value="3 SMP" >3 SMP</option>                                                             --}}
        {{-- <option value="tambah" >Kamis</option> --}}
    </select>
    </div>

    @error('email')
        <p class="alert alert-success alert-block">{{ $message }}</p>
    @enderror
    <div class="input-container ic2">
      <input wire:model="email" id="email" class="input" type="text"  name="email"  placeholder="Masukkan Email" />
      {{-- <div class="cut cut-short"></div>
      <label for="email" class="placeholder">Email</> --}}
    </div>
    {{-- <div class="input-container ic2">
        <input id="mapel" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="mapel" class="placeholder">Mapel</label>
      </div> --}}
      @error('comment')
        <p class="alert alert-success alert-block">{{ $message }}</p>
    @enderror
      <div class="input-container ic2 ">
        <textarea wire:model="comment" name="comment" class="form-control input text" id="mapel" class="input" type="text" placeholder="Masukkan Pesan" >{{ old('comment') }}</textarea>
        {{-- <div class="cut"></div>
        <label for="comment" class="placeholder">Comment</label> --}}
      </div>
      {{-- <div class="input-container ic2">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          Dropdown button
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </div>
      </div> --}}
      

    <button type="submit" class="submit">submit</button>
  </div>
</div>
</form>
</div>
{{-- @endsection --}}