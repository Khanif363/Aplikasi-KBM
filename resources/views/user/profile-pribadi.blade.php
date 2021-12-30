@extends('master')
@section('content')

<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-8 col-md-12">
                @if ($message = Session::get('Success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div class="card user-card-full" style="max-width: 100%">
                    <div class="row m-l-0 m-r-0">
                        
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-wprofile.htmlhite">
                                <div class="m-b-25"> 
                                    {{-- <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image">  --}}
                                    @if (Auth::user()->name  == '')
                                    <img src="https://ui-avatars.com/api/?name={{ Auth::user()->username }}" alt="..."  class=" rounded-circle foto-profile" rounded-circle alt="User-Profile-Image">
                                    @elseif (Auth::user()->name  != '')
                                    <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" alt="..."  class=" rounded-circle foto-profile" rounded-circle alt="User-Profile-Image">
                                    @endif
                                </div>
                                <h6 class="f-w-600">{{ Auth::user()->name }}</h6>
                                
                                <p>{{ Auth::user()->role }}
                                @if (Auth::user()->role == 'Siswa')
                                @if (Auth::user()->kelas_id != '')
                                {{ Auth::user()->kelas->kelas}}</p><i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                @endif
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                <div class="row">
                                    @if (Auth::user()->role == 'Siswa')
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">NISN</p>
                                        <h6 class="text-muted f-w-400">{{ Auth::user()->nisn }}</h6>
                                    </div>
                                    @endif
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="text-muted f-w-400">{{ Auth::user()->email }}</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Phone</p>
                                        <h6 class="text-muted f-w-400">{{ Auth::user()->number_phone }}</h6>
                                    </div>
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Kelahiran</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Kota</p>
                                        <h6 class="text-muted f-w-400">{{ Auth::user()->address }}</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Tanggal</p>
                                        <h6 class="text-muted f-w-400">{{ Auth::user()->tanggal_lahir }}</h6>
                                    </div>
                                </div>
                                @if (Auth::user()->role == 'Guru')
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Guru</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Mapel</p>
                                        <h6 class="text-muted f-w-400">{{ Auth::user()->mapel }}</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Pendidikan</p>
                                        <h6 class="text-muted f-w-400">{{ Auth::user()->pendidikan }}</h6>
                                    </div>
                                </div>
                                @endif
                                <ul class="social-link list-unstyled m-t-40 m-b-10">
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection