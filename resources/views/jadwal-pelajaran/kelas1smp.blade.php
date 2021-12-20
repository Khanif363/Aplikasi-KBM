@extends('master')
@section('content')

{{-- <div class="main-panel"> --}}
    <div class="content ">
        <div class="page-inner ">
            
            <div class="">
                <div class="set">
                    <div class="card">
                        <div class="card-header text-center">
                            <div class="card-title">Jadwal Mapel Siswa 1 SMP</div>
                        </div>
                        
                    </div>
                    
                </div>

            </div>
        </div>
    </div>



    <div class="container latar">
      @if ($message = Session::get('Success'))
          <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>    
              <strong>{{ $message }}</strong>
          </div>
      @endif
    
    <div class="d-flex justify-content-center align-items-center" style="padding-bottom: 100px;">
        <div class="row text-center">
            
            <div class="col-4 jarakk d-flex justify-content-center">
                <div class="card ">
                    <div class="card-body">
                        <div class="card-sub">											
                            <strong>Senin</strong>
                        </div class="table-responsive">
                        <table class="table  table-hover  mt-3">
                            <tbody>
                                @foreach ($jadwal as $jadwals)
                                <tr>
                                  @if ($jadwals->hari_id == '1')
                                    <th scope="col">{{ $jadwals->waktu->awal }} - {{ $jadwals->waktu->akhir}}</th>
                                    <td scope="col">{{ $jadwals->user->mapel }}</td>
                                  @endif
                                </tr>    
                                @endforeach
                                
                          </tbody>
                        </table>
                    </div>
                </div>
              </div>

            <div class="col-4 jarakk d-flex justify-content-center">
              <div class="card ">
                  <div class="card-body">
                      <div class="card-sub">											
                          <strong>Selasa</strong>
                      </div class="table-responsive">
                      <table class="table  table-hover  mt-3">
                          <tbody>
                              @foreach ($jadwal as $jadwals)
                              <tr>
                                @if ($jadwals->hari_id == '2')
                                  <th scope="col">{{ $jadwals->waktu->awal }} - {{ $jadwals->waktu->akhir}}</th>
                                  <td scope="col">{{ $jadwals->user->mapel }}</td>
                                @endif
                              </tr>    
                              @endforeach
                              
                        </tbody>
                      </table>
                  </div>
              </div>
            </div>

            <div class="col-4 jarakk d-flex justify-content-center">
              <div class="card ">
                  <div class="card-body">
                      <div class="card-sub">											
                          <strong>Rabu</strong>
                      </div class="table-responsive">
                      <table class="table  table-hover  mt-3">
                          <tbody>
                              @foreach ($jadwal as $jadwals)
                              {{-- @if ($mapels->kelas->kelas == '2 SMP') --}}
                              <tr>
                                @if ($jadwals->hari_id == '3')
                                  <th scope="col">{{ $jadwals->waktu->awal }} - {{ $jadwals->waktu->akhir}}</th>
                                  <td scope="col">{{ $jadwals->user->mapel }}</td>
                                @endif
                              </tr>    
                              {{-- @endif                        --}}
                              @endforeach
                              
                        </tbody>
                      </table>
                  </div>
              </div>
          </div>

          <div class="col-4 jarakk d-flex justify-content-center">
            <div class="card ">
                <div class="card-body">
                    <div class="card-sub">											
                        <strong>Kamis</strong>
                    </div class="table-responsive">
                    <table class="table  table-hover  mt-3">
                        <tbody>
                            @foreach ($jadwal as $jadwals)
                            {{-- @if ($mapels->kelas->kelas == '2 SMP') --}}
                            <tr>
                              @if ($jadwals->hari_id == '4')
                                <th scope="col">{{ $jadwals->waktu->awal }} - {{ $jadwals->waktu->akhir}}</th>
                                <td scope="col">{{ $jadwals->user->mapel }}</td>
                              @endif
                            </tr>    
                            {{-- @endif                        --}}
                            @endforeach
                            
                      </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-4 jarakk d-flex justify-content-center">
          <div class="card ">
              <div class="card-body">
                  <div class="card-sub">											
                      <strong>Jum'at</strong>
                  </div class="table-responsive">
                  <table class="table  table-hover  mt-3">
                      <tbody>
                          @foreach ($jadwal as $jadwals)
                          {{-- @if ($mapels->kelas->kelas == '2 SMP') --}}
                          <tr>
                            @if ($jadwals->hari_id == '5')
                              <th scope="col">{{ $jadwals->waktu->awal }} - {{ $jadwals->waktu->akhir}}</th>
                              <td scope="col">{{ $jadwals->user->mapel }}</td>
                            @endif
                          </tr>    
                          {{-- @endif                        --}}
                          @endforeach
                          
                    </tbody>
                  </table>
              </div>
          </div>
      </div>

      <div class="col-4 jarakk d-flex justify-content-center">
        <div class="card ">
            <div class="card-body">
                <div class="card-sub">											
                    <strong>Sabtu</strong>
                </div class="table-responsive">
                <table class="table  table-hover  mt-3">
                    <tbody>
                        @foreach ($jadwal as $jadwals)
                        {{-- @if ($mapels->kelas->kelas == '2 SMP') --}}
                        <tr>
                          @if ($jadwals->hari_id == '6')
                            <th scope="col">{{ $jadwals->waktu->awal }} - {{ $jadwals->waktu->akhir}}</th>
                            <td scope="col">{{ $jadwals->user->mapel }}</td>
                          @endif
                        </tr>    
                        {{-- @endif                        --}}
                        @endforeach
                        
                  </tbody>
                </table>
            </div>
        </div>
    </div>
    @if (Auth::user()->role  == 'Admin'|Auth::user()->role  == 'Guru')
            <div class="container text-center">
                <a href="/tambah-jadwal" class="btn btn-success" >Tambah</a>

                {{-- <a href="/delete" class="btn btn-primary ml-3">Delete</a> --}}
            </div>
    @endif
        </div>
    </div>
</div>

@endsection
