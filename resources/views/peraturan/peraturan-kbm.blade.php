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
                        @if ($message = Session::get('Success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>    
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <div class="card-header">
                            <div class="card-title">Peraturan-peraturan ketika KBM</div>
                        </div>
                        <div class="card-body">
                            @foreach ($peraturan as $peraturans)
                            <div class="card-sub">											
                                <strong style="text-align: center">Peraturan
                                    {{-- <a href="" class="btn btn-info" class="text-right" style="float: right;">Tambah</a> --}}
                                {{-- <a href="edit-peraturan/{{ $peraturans->id }}" class="btn btn-primary"class="text-right" style="float: right;" >Edit</a> --}}
                                </strong>
                                
                                {{-- <p>
                                    1. Memberikan sambutan salam kepada guru yang baru memasuki kelas.<br>
                                    2. Selalu menggunakan seragam dengan benar dan rapi.<br>
                                    3. Mendengarkan dengan baik apa yang guru sampaikan.<br>
                                    3. Dilarang meninggalkan kelas sebelum diizinkan oleh guru.<br>
                                    4. Dilarang merokok,pacaran dan hal-hal sebagainya yang dilarang dalam islam.<br>
                                    5. Mengerjakan tugas yang diberikan oleh guru tepat pada waktunya.
                                </p> --}}
                                <p>{{ $peraturans->peraturan }}</p>
                                {{-- {!! $peraturans->peraturan !!} --}}
                                
                            </div>
                            @if (Auth::user()->role  == 'Admin'|Auth::user()->role  == 'Guru')
                            <a href="edit-peraturan/{{ $peraturans->id }}" class="btn btn-primary mr-2">Edit</a>
                            @endif
                            @endforeach
                            <a href="/peraturan/cetak_pdf" class="btn btn-primary">Cetak PDF</a>
                        </div>  
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection