@extends('master')
@section('content')

{{-- <div class="main-panel"> --}}
    <div class="content ">
        <div class="page-inner">
            {{-- <div class="page-header ">
                <h4 class="page-title">Tables</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Tables</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Basic Tables</a>
                    </li>
                </ul>
            </div> --}}
            <div class="">
                <div class="">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Edit Peraturan</div>
                        </div>
                        <form action="/edit-peraturan/{{ $peraturan->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                            <div class="card-body">
                                <textarea name="peraturan" class="form-control input text" class="input" type="text" placeholder="Masukkan Peraturan" >{{ old('peraturan') }}</textarea>
                            </div> 
                            <button class="btn btn-primary" type="submit">Simpan</button> 
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection