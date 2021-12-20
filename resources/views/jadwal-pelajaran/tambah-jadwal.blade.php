@extends('master')
@section('content')
<div class="row container mt-5 mb-5 justify-content-center align-items-center">
    <div class="form">
        @if ($message = Session::get('Success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>    
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <form action="/buat" method="POST">
            @csrf
            @error('mapel')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        <div class="form-group form-show-notify row">
            <div class="col-lg-3 col-md-3 col-sm-4 text-right">
                <label>Mapel :</label>
            </div>
            <div class="col-3">												
                <select class="form-control input-fixed" style="border-radius: 8px !important" name="mapel" class="@error('user_id') is-invalid @enderror">
                    <option value="">-- Pilih Mapel --</option>   
                     @foreach($user as $users)
                     <option value="{{$users->id}}">{{$users->mapel}}</option>
                     @endforeach
                </select>
            </div>
        </div>
        @error('waktu')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    <div class="form-group form-show-notify row">
        <div class="col-lg-3 col-md-3 col-sm-4 text-right">
            <label>Waktu :</label>
        </div>
        {{-- @error('waktu_id')
            <div class="invalid-feedback" style="width: 300px !important;" role="alert">
                <strong>{{ $message }}</strong>
            </div>
            @enderror --}}
        <div class="col-3">												
            <select class=" form-control input-fixed" style="border-radius: 8px !important" name="waktu">
                <option value="">-- Pilih Waktu --</option>
                @foreach ($waktu as $waktus)
                <option value="{{ $waktus->id }}" >{{ $waktus->awal }} - {{ $waktus->akhir }}</option>
                @endforeach
            </select>
            
            <div class="invalid-feedback" style="width: 300px !important;" role="alert">
                <strong></strong>
            </div>
            
        </div>
    </div>
    @error('kelas')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group form-show-notify row">
        <div class="col-lg-3 col-md-3 col-sm-4 text-right">
            <label>Kelas :</label>
        </div>
        <div class="col-3">												
            <select class=" form-control input-fixed" style="border-radius: 8px !important" name="kelas">
                <option value="">-- Pilih Kelas --</option>
                @foreach ($kelas as $kelass)
                <option value="{{ $kelass->id }}" >{{ $kelass->kelas }}</option>
                @endforeach
            </select>
            
            <div class="invalid-feedback" style="width: 300px !important;" role="alert">
                <strong></strong>
            </div>
            
        </div>
    </div>
        @error('hari')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    <div class="form-group form-show-notify row">
        <div class="col-lg-3 col-md-3 col-sm-4 text-right">
            <label>Hari :</label>
        </div>
        <div class="col-3">												
            <select class=" form-control input-fixed" style="border-radius: 8px !important" name="hari">
                <option value="">-- Pilih Hari --</option>
                @foreach ($hari as $haris)
                <option value="{{ $haris->id }}">{{ $haris->hari }}</option> 
                @endforeach                                                           
            </select>
            
            <div class="invalid-feedback" style="width: 300px !important;" role="alert">
                <strong></strong>
            </div>
            
        </div>
    </div>

        <div class="text-center">
            <button id="displayNotif" style="border-radius: 8px !important" type="submit" class="btn btn-primary">Buat Jadwal</button>
        </div>
    </form>
</div>


</div>
@endsection