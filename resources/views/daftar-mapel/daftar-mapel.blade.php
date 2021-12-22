@extends('master')
@section('content')

{{-- <div class="main-panel"> --}}
    <div class="content ">
        <div class="page-inner ">
            
            <div class="">
                <div class="set">
                    <div class="card">
                        <div class="card-header text-center">
                            <div class="card-title">Daftar Mapel Siswa</div>
                        </div>
                        
                    </div>
                    
                </div>

            </div>
        </div>
    </div>



    <div class="container latar">
        
    
    <div class="d-flex justify-content-center align-items-center" style="padding-bottom: 100px;">
        <div class="row text-center">
            
            <div class="col jarakk d-flex justify-content-center">
                <div class="card ">
                    <div class="card-body">
                        <div class="card-sub">											
                            <strong>Kelas 1 SMP</strong>
                        </div class="table-responsive">
                        <table class="table  table-hover  mt-3">
                            <tbody>
                                @foreach ($jadwal1 as $jadwals)
                                <tr>
                                    <th scope="col">{{ $jadwals->user->mapel }}</th>
                                    <td scope="col">Bpk. {{ $jadwals->user->name }}</td>
                                    
                                </tr>                         
                                @endforeach
                                
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
    
            <div class="col jarakk d-flex justify-content-center">
                <div class="card ">
                    <div class="card-body">
                        <div class="card-sub">											
                            <strong>Kelas 2 SMP</strong>
                        </div class="table-responsive">
                        <table class="table  table-hover  mt-3">
                            <tbody>
                                @foreach ($jadwal2 as $jadwals)
                                <tr>
                                    <th scope="col">{{ $jadwals->user->mapel }}</th>
                                    <td scope="col">Bpk. {{ $jadwals->user->name }}</td>
                                    
                                </tr>                       
                                @endforeach
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
    
            <div class="col jarakk d-flex justify-content-center">
                <div class="card ">
                    <div class="card-body">
                        <div class="card-sub">											
                            <strong>Kelas 3 SMP</strong>
                        </div>
                        <div class="table-responsive">
                        <table class="table  table-hover  mt-3">
                            <tbody>
                                @foreach ($jadwal3 as $jadwals)
                                <tr>
                                    <th scope="col">{{ $jadwals->user->mapel }}</th>
                                    <td scope="col">Bpk. {{ $jadwals->user->name }}</td>
                                    
                                </tr>                       
                                @endforeach
                          </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
            {{-- @if (Auth::user()->role  == 'Admin'|Auth::user()->role  == 'Guru')
                <div class="container text-center">
                <a href="/tambah/mapel" class="btn btn-success" >Tambah</a>
                </div>
            @endif --}}
            
        </div>
    </div>
</div>

@endsection





{{-- 
<div class="body awal ">
    <div class="form">
        <ul class="circle">
            @foreach ($mapel as $mapels)
            
            <li><h5>{{ $mapels->mapel->mapel }}<p>{{ $mapels->name }}</p></h5></li>

            @endforeach
            
          </ul>
          
         
    </div>
</div> --}}