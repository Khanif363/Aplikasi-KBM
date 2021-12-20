@extends('master')
@section('content')

{{-- <div class="main-panel"> --}}
    <div class="content ">
        <div class="page-inner ">
            <div class="">
                <div class="">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Potongan Gaji Guru</div>
                        </div>
                        @if ($message = Session::get('Success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif
                        <div class="card-body">
                            <div class="card-sub">											
                                <strong>Potongan gaji bulan ini.
                                    <a href="/tambah-potongan" class="btn btn-info" class="text-right" style="float: right;">Tambah</a>
                                    {{-- <a href="" class="btn btn-primary"class="text-right" style="float: right;" >Edit</a> --}}
                                </strong>
                            </div class="">
                            <div class="table-responsive">
                            <table class="table table-head-bg-info table-hover table-bordered-bd-info  mt-3 ">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Gaji Asli</th>
                                        <th scope="col">Potongan</th>
                                        <th scope="col">Total Gaji</th>

                                    </tr>
                                </thead>
                               <tbody>
                                 @php
                                   $i = 1;
                                 @endphp
                                 @foreach ($potongan as $potongans)
                                   
                                 
                                   <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $potongans->user->name }}</td>
                                        <td>{{ $potongans->gaji }}</td>
                                        <td>{{ $potongans->potongan }}</td>
                                        <td>{{ $potongans->gaji - $potongans->potongan }}</td>
                                   </tr>
                                   @endforeach
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