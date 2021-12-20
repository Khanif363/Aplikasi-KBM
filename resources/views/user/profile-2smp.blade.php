
@extends('master')
@section('content')
<div class="container py-5">
  <div class=" mb-4">
    <div class="">
      <h5 class="display-4 font-weight-light text-center">Daftar Kelas 2 SMP</h5>
      {{-- <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> --}}
    </div>
  </div>

  <div class="row text-center">
    @foreach ($profile as $profiles)

    <!-- Team item-->
    <div class="col-xl-3 col-sm-6 mb-5">
      <div class="bg-white rounded shadow-sm py-5 px-4">
        {{-- <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"> --}}
        @if (Auth::user()->name  == '')
          <img src="https://ui-avatars.com/api/?name={{ $profiles->username }}" alt="..."  width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          @elseif (Auth::user()->name  != '')
          <img src="https://ui-avatars.com/api/?name={{ $profiles->name }}" alt="..."  width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
        @endif
        <h5 class="mb-0">{{ $profiles->name }}</h5><span class="small text-uppercase text-muted">{{ $profiles->address }}</span>
        <ul class="social mb-0 list-inline mt-3">
          
        </ul>
        <a href="/profile/{{ $profiles->id }}" class="btn btn-primary">Detail</a>
      </div>
    </div>
    @endforeach
  </div>
</div>
    @endsection