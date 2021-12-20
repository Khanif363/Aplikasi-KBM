@extends('master')
@section('content')
<div class="row container mt-5 mb-5 justify-content-center align-items-center">
    <div class="form">
        <form action="/potong" method="POST">
        @csrf
{{-- 
    <div hidden class="form-group form-show-notify row">
        <div class="col-3  text-right">
            <label>Tanggal :</label>
        </div>
        <div class="col-3">												
            <input value="" type="text" style="border-radius: 8px !important" name="tanggal" class="form-control input-fixed" placeholder="1">
          
        </div>
    </div> --}}
    @if ($message = Session::get('Success'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>    
          <strong>{{ $message }}</strong>
      </div>
    @endif
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group form-show-notify row">
        <div class="col-lg-3 col-md-3 col-sm-4 text-right">
            <label>Nama :</label>
        </div>
        <div class="col-3">												
            <select class=" form-control input-fixed" style="border-radius: 8px !important" name="name">
                <option value="">-- Pilih Nama --</option>
                @foreach ($user as $users)
                <option value="{{ $users->id }}" >{{ $users->name }}</option>
                @endforeach                                                                                                                        
            </select>
            
            <div class="invalid-feedback" style="width: 300px !important;" role="alert">
                <strong></strong>
            </div>
            
        </div>
    </div>
    @error('gaji')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group form-show-notify row">
        <div class="col-3  text-right">
            <label>Gaji Awal :</label>
        </div>
        <div class="col-3">												
            <input value="" type="text" style="border-radius: 8px !important" name="gaji" class="form-control input-fixed">
        </div>
    </div>
    @error('potongan')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group form-show-notify row">
        <div class="col-3  text-right">
            <label>Potongan :</label>
        </div>
        <div class="col-3">												
            <input value="" type="text" style="border-radius: 8px !important" name="potongan" class="form-control input-fixed">
        </div>
    </div>

        <div class="text-center">
            <button id="displayNotif" style="border-radius: 8px !important" type="submit" class="btn btn-primary">Save Data</button>
        </div>
    </form>
</div>


</div>
@endsection