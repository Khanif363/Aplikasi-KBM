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
                            <div class="card-title">Jadwal Evaluasi Guru</div>
                        </div>
                        <div class="card-body">
                            @foreach ($evaluasi as $evaluasis)
                            <div class="card-sub">											
                                {{-- <strong style="text-align: center">Jadwal evaluasi Guru sebagaimana telah ditentukan dan disepakati bersama,yaitu akan dilaksanakan 1 bulan sekali,setiap tanggal 2.
                                    {{-- <a href="" class="btn btn-info" class="text-right" style="float: right;">Tambah</a>
                                    <a href="" class="btn btn-primary"class="text-right" style="float: right;" >Edit</a>
                                </strong> --}}
                                <p style="text-align: center">{!! $evaluasis->evaluasi !!}</p>
                            </div>
                            @if (Auth::user()->role  == 'Admin'|Auth::user()->role  == 'Guru')
                            <a href="edit-evaluasi/{{ $evaluasis->id }}" class="btn btn-primary mr-2">Edit</a>
                            @endif
                            @endforeach
                        </div>  
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection