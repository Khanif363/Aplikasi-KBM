@extends('master')
@section('content')
<div class="row container mt-5 mb-5 justify-content-center align-items-center">
    <div class="form">
        <form action="/tambah/alpha" method="POST">
        @csrf
        @if ($message = Session::get('Success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>    
                <strong>{{ $message }}</strong>
            </div>
        @endif
    <div hidden class="form-group form-show-notify row">
        <div class="col-3  text-right">
            <label>Tanggal :</label>
        </div>
        <div class="col-3">												
            <input value="" type="text" style="border-radius: 8px !important" name="tanggal" class="form-control input-fixed" placeholder="1">
          
        </div>
    </div>
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group form-show-notify row">
        <div class="col-lg-3 col-md-3 col-sm-4 text-right">
            <label>Nama :</label>
        </div>
        <div class="col-3">												
            <select class=" form-control input-fixed" style="border-radius: 8px !important" name="name" class="@error('name') is-invalid @enderror">
                <option value="">-- Pilih Nama --</option>
                @foreach ($user as $users)
                <option value="{{ $users->id }}" >{{ $users->name }}</option>
                @endforeach                                                                                                                        
                {{-- <option value="tambah" >Kamis</option> --}}
            </select>
            
            <div class="invalid-feedback" style="width: 300px !important;" role="alert">
                <strong></strong>
            </div>
            
        </div>
    </div>

    {{-- <div class="form-group form-show-notify row">
        <div class="col-lg-3 col-md-3 col-sm-4 text-right">
            <label>Kelas :</label>
        </div>
        <div class="col-3">												
            <select class=" form-control input-fixed" style="border-radius: 8px !important" name="status">
                <option value="">-- Pilih Kelas --</option>
                @foreach ($kelas as $kelass)
                    <option value="{{ $kelass->id }}" >{{ $kelass->kelas }}</option>
                @endforeach
                                                                                                                                       
             <option value="tambah" >Kamis</option>
            </select>
            
            <div class="invalid-feedback" style="width: 300px !important;" role="alert">
                <strong></strong>
            </div>
            
        </div>
    </div> --}}
    @error('hari')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group form-show-notify row">
        <div class="col-lg-3 col-md-3 col-sm-4 text-right">
            <label>Hari :</label>
        </div>
        <div class="col-3">												
            <select class=" form-control input-fixed" style="border-radius: 8px !important" name="hari" class="@error('hari') is-invalid @enderror">
                <option value="">-- Pilih Hari --</option>
                @foreach ($hari as $haris)
                    <option value="{{ $haris->id }}" >{{ $haris->hari }}</option>
                @endforeach
                                                                            
            </select>
            
            <div class="invalid-feedback" style="width: 300px !important;" role="alert">
                <strong></strong>
            </div>
            
        </div>
    </div>
    @error('keterangan')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group form-show-notify row">
        <div class="col-3  text-right">
            <label>Keterangan :</label>
        </div>
        <div class="col-3">												
            <input value="" type="text" style="border-radius: 8px !important" name="keterangan" class="form-control input-fixed" class="@error('keterangan') is-invalid @enderror">
          
        </div>
    </div>

        <div class="text-center">
                    <button id="displayNotif" style="border-radius: 8px !important" type="submit" class="btn btn-primary">Save Data</button>
        </div>
    </form>
</div>


</div>
@endsection