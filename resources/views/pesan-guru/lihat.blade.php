@extends('master')
@section('content')

{{-- <div class="main-panel"> --}}
    <div class="content ">
        <div class="page-inner ">
            
            <div class="">
                <div class="">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">{{ $pesan->kategori }}</div>
                        </div>
                        <div class="card-body">
                            <div class="card-sub">											
                                {{-- <strong>Siswa 1 SMP
                                </strong>   --}}
                                <h5>Nama: {{ $pesan->nama }}</h5>
                                <h5>Kelas: {{ $pesan->kelas }}</h5>
                                <h5>Mapel: {{ $pesan->mapel }}</h5>
                                <h5>Email: {{ $pesan->email }}</h5>
                                <h5>Pesan: {{ $pesan->message }}</h5>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
@endsection