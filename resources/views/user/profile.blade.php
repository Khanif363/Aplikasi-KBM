@extends('master')
@section('content')

<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-8 col-md-12">
                <div class="card user-card-full card-responsive card-center" style="width: 100%">
                    <div class="row m-l-0 m-r-0">
                        
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-wprofile.htmlhite">
                                <div class="m-b-25"> 
                                    {{-- <img src="https://drive.google.com/file/d/1OXqqex5dvdIvO2bbV5RCploV4xfJ3tJu/view?usp=sharing" class="img-radius" alt="User-Profile-Image">  --}}
                                    @if ($profile->name != '')
                                    <img src="https://ui-avatars.com/api/?name={{ $profile->name }}" alt="..."  class=" rounded-circle foto-profile" rounded-circle alt="User-Profile-Image">
                                    {{-- @elseif (Auth::user()->name  != '')
                                    <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" alt="..."  class=" rounded-circle foto-profile" rounded-circle alt="User-Profile-Image"> --}}
                                    @endif
                                </div>
                                <h6 class="f-w-600">{{ $profile->name }}</h6>
                                
                                <p>{{ $profile->role }} {{ $profile->kelas->kelas }}</p><i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">NISN</p>
                                        <h6 class="text-muted f-w-400">{{ $profile->nisn }}</h6>
                                    </div>

                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="text-muted f-w-400">{{ $profile->email }}</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Phone</p>
                                        <h6 class="text-muted f-w-400">{{ $profile->number_phone }}</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Kota</p>
                                        <h6 class="text-muted f-w-400">{{ $profile->address }}</h6>
                                    </div>
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Kelahiran</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Tanggal</p>
                                        <h6 class="text-muted f-w-400">@if ($profile->tanggal_lahir != ''){{ $profile->tanggal_lahir->translatedFormat('l, d F Y')}}@endif</h6>
                                        {{-- format('dddd, D MMMM Y')}} --}}
                                    </div>
                                </div>
                                {{-- <ul class="social-link list-unstyled m-t-40 m-b-10">
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                </ul> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection