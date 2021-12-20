@extends('master')
@section('content')

{{-- <div class="main-panel"> --}}
    <div class="content ">
        <div class="page-inner ">
            
            <div class="">
                <div class="">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Pesan & Pertanyaan</div>
                        </div>
                        <div class="card-body">
                            <div class="card-sub">											
                                <strong>Siswa 2 SMP
                                </strong>  
                            </div>
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Mapel</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($pesan as $pesans)
                                    
                                  <tr>
                                    {{-- @if ($pesans->kelas == '2 SMP') --}}
                                    <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $pesans->nama }}</td>
                                    <td>{{ $pesans->mapel }}</td>
                                    <td>{{ $pesans->kategori }}</td>
                                    <td><a href="/lihat/{{ $pesans->id }}" class="btn btn-primary">Detail</a></td>
                                    {{-- @endif --}}
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
@endsection