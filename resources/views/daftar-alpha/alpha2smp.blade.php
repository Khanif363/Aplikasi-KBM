@extends('master')
@section('content')

{{-- <div class="main-panel"> --}}
    <div class="content ">
        <div class="page-inner">
            
            <div class="">
                <div class="">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Daftar Alpha kelas 2 SMP</div>
                        </div>
                        @if ($message = Session::get('Success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>    
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <div class="card-body">
                            <div class="card-sub">											
                                <strong>Siswa
                                    @if (Auth::user()->role  == 'Admin'|Auth::user()->role  == 'Guru')
                                    <a href="/tambahAlpha" class="btn btn-info" class="text-right" style="float: right;">Tambah</a>
                                    @endif
                                    {{-- <a href="" class="btn btn-primary"class="text-right" style="float: right;" >Edit</a> --}}
                                </strong>
                                
                            </div >
                            <div class="table-responsive">
                            <table class="table table-head-bg-info table-hover table-bordered-bd-info  mt-3">
                                <thead>
                                    <tr>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Senin</th>
                                        <th scope="col">Selasa</th>
                                        <th scope="col">Rabu</th>
                                        <th scope="col">Kamis</th>
                                        <th scope="col">Jum'at</th>
                                        <th scope="col">Sabtu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                       {{-- @if ($alpha)
                                           
                                       @endif
                                         --}}
                                        <td>{{ $tanggal->tanggal_awal }}<br>-<br>{{ $tanggal->tanggal_akhir }}</td>
                                        
                                            <td style="background-color: #F2FFCD">
                                                @foreach ($alpha as $alphas)
                                                @if ($alphas->users->kelas_id == '2')
                                                @if ($alphas->hari_id == '1')
                                            <h6>{{ $alphas->users->name }}</h6>
                                            @endif 
                                            @endif                                          
                                            @endforeach
                                            </td>

                                            <td style="background-color: #F2FFCD">
                                                @foreach ($alpha as $alphas)
                                                @if ($alphas->users->kelas_id == '2')
                                                @if ($alphas->hari_id == '2')
                                            <h6>{{ $alphas->users->name }}</h6>
                                            @endif 
                                            @endif                                          
                                            @endforeach
                                            </td>

                                            <td style="background-color: #F2FFCD">
                                                @foreach ($alpha as $alphas)
                                                @if ($alphas->users->kelas_id == '2')
                                                @if ($alphas->hari_id == '3')
                                            <h6>{{ $alphas->users->name }}</h6>
                                            @endif 
                                            @endif                                          
                                            @endforeach
                                            </td>

                                            <td style="background-color: #F2FFCD">
                                                @foreach ($alpha as $alphas)
                                                @if ($alphas->users->kelas_id == '2')
                                                @if ($alphas->hari_id == '4')
                                            <h6>{{ $alphas->users->name }}</h6>
                                            @endif 
                                            @endif                                          
                                            @endforeach
                                            </td>

                                            <td style="background-color: #F2FFCD">
                                                @foreach ($alpha as $alphas)
                                                @if ($alphas->users->kelas_id == '2')
                                                @if ($alphas->hari_id == '5')
                                            <h6>{{ $alphas->users->name }}</h6>
                                            @endif 
                                            @endif                                          
                                            @endforeach
                                            </td>

                                            <td style="background-color: #F2FFCD">
                                                @foreach ($alpha as $alphas)
                                                @if ($alphas->users->kelas_id == '2')
                                                @if ($alphas->hari_id == '6')
                                            <h6>{{ $alphas->users->name }}</h6>
                                            @endif 
                                            @endif                                          
                                            @endforeach
                                            </td>
                                            
                                        
                                        
                                       
                                    </tr>
                                   
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>

@endsection