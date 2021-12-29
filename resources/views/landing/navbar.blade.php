<div class="main-header mt-0">
	<!-- Logo Header -->
	<div class="logo-header" data-background-color="blue">
		
		<a href="/home" class="logo">
			<img src="{{ asset('atlantis/assets/img/Logo-KBM.png') }}" alt="navbar brand" width="50%" class="navbar-brand">
		</a>
		<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon">
				<i class="icon-menu"></i>
			</span>
		</button>
		<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
		<div class="nav-toggle">
			<button class="btn btn-toggle toggle-sidebar">
				<i class="icon-menu"></i>
			</button>
		</div>
	</div>
	<!-- End Logo Header -->

	<!-- Navbar Header -->
	<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
		
		<div class="container-fluid">
			{{-- <div class="collapse" id="search-nav">	
				 <form class="navbar-left navbar-form nav-search mr-md-3">
					<div class="input-group">
						<div class="input-group-prepend">
							<button type="submit" class="btn btn-search pr-1">
								<i class="fa fa-search search-icon"></i>
							</button>
						</div>
						<input type="text" placeholder="Search ..." class="form-control">
					</div>
				</form>
			</div> --}}
			<div class="container text-center">
			<h1 id="jam" class="text-light"></h1>
			</div>
			<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
				{{-- <h5 id="jam" class="text-center"></h5> --}}
				<li class="nav-item dropdown hidden-caret">
					<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
						<div class="avatar-sm">
							@if (Auth::user()->name  == '')
							<img src="https://ui-avatars.com/api/?name={{ Auth::user()->username }}" alt="..."  class="avatar-img rounded-circle foto-profile">
							@elseif (Auth::user()->name  != '')
							<img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" alt="..."  class="avatar-img rounded-circle foto-profile">
							@endif						
						</div>
					</a>
					<ul class="dropdown-menu dropdown-user animated fadeIn">
						<div class="dropdown-user-scroll scrollbar-outer">
							<li>
								<div class="user-box">
									<div class="avatar-lg">
										@if (Auth::user()->name  == '')
										<img src="https://ui-avatars.com/api/?name={{ Auth::user()->username }}" alt="..."  class="avatar-img rounded-circle foto-profile">
										@elseif (Auth::user()->name  != '')
										<img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" alt="..."  class="avatar-img rounded-circle foto-profile">
										@endif									
									</div>
									<div class="u-text">
										<h4>{{ Auth::user()->name }}</h4>
										<p class="text-muted">{{ Auth::user()->email }}</p><a href="/profile-pribadi/{{ Auth::user()->name }}" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
									</div>
								</div>
							</li>
							<li>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="/profile-pribadi/{{ Auth::user()->name }}">My Profile</a>
								{{-- <a class="dropdown-item" href="#">My Balance</a> --}}
								{{-- <a class="dropdown-item" href="#">Inbox</a> --}}
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="/edit-profile/{{ Auth::user()->name }}">Account Setting</a>
								<div class="dropdown-divider"></div>
								{{-- <a class="dropdown-item" href="{{ Route('logout') }}">Logout</a> --}}
								<a class="dropdown-item" href="{{ route('landing') }}"
										onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
											{{ __('Keluar') }}
										</a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
											@csrf
										</form>
							</li>
						</div>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<!-- End Navbar -->
</div>

<!-- Sidebar -->
<div class="sidebar sidebar-style-2">			
	<div class="sidebar-wrapper scrollbar scrollbar-inner">
		<div class="sidebar-content">
			<div class="user">
				<div class="avatar-sm float-left mr-2">
					@if (Auth::user()->name  == '')
					<img src="https://ui-avatars.com/api/?name={{ Auth::user()->username }}" alt="..."  class="avatar-img rounded-circle foto-profile">
					@elseif (Auth::user()->name  != '')
					<img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" alt="..."  class="avatar-img rounded-circle foto-profile">
					@endif							</div>
				<div class="info">
					<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
						<span>
							{{ Auth::user()->name }}
							<span class="user-level">{{ Auth::user()->role }}</span>
							<span class="caret"></span>
						</span>
					</a>
					<div class="clearfix"></div>

					<div class="collapse in" id="collapseExample">
						<ul class="nav">
							<li>
								<a href="/profile-pribadi/{{ Auth::user()->name }}">
									<span class="link-collapse">My Profile</span>
								</a>
							</li>
							<li>
								<a href="/edit-profile/{{ Auth::user()->name }}">
									<span class="link-collapse">Edit Profile</span>
								</a>
							</li>
							{{-- <li>
								<a href="#settings">
									<span class="link-collapse">Settings</span>
								</a>
							</li> --}}
						</ul>
					</div>
				</div>
			</div>
			<ul class="nav nav-primary">
				<li class="nav-item active">
					<a href="/daftarmapel/1smp" type="button" class="btn">
						<i class="fas fa-calendar-alt"></i>
						<p>Daftar Mapel</p>
					</a>
				</li>
			</ul>
			@if (Auth::user()->kelas_id  == '1')
			<ul class="nav nav-primary">
				<li class="nav-item active">
					<a href="/jadwal-1smp" type="button" class="btn">
						<i class="fas fa-list-alt"></i>
						<p>Jadwal Mapel</p>
						{{-- <span class="caret"></span> --}}
					</a>
				</li>
			</ul>
			@endif
			@if (Auth::user()->kelas_id  == '2')
			<ul class="nav nav-primary">
				<li class="nav-item active">
					<a href="/jadwal-2smp" type="button" class="btn">
						<i class="fas fa-list-alt"></i>
						<p>Jadwal Mapel</p>
						{{-- <span class="caret"></span> --}}
					</a>
				</li>
			</ul>
			@endif
			@if (Auth::user()->kelas_id  == '3')
			<ul class="nav nav-primary">
				<li class="nav-item active">
					<a href="/jadwal-3smp" type="button" class="btn">
						<i class="fas fa-list-alt"></i>
						<p>Jadwal Mapel</p>
						{{-- <span class="caret"></span> --}}
					</a>
				</li>
			</ul>
			@endif
			@if (Auth::user()->role  == 'Admin'|Auth::user()->role  == 'Guru')
			<ul class="nav nav-primary">
				<li class="nav-item active">
					<a data-toggle="collapse" href="#mapel" class="collapsed" aria-expanded="false">
						<i class="fas fa-calendar-alt"></i>
						<p>Jadwal Mapel</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="mapel">
						<ul class="nav nav-collapse">
							<li>
								<a href="/jadwal-1smp">
									<span class="sub-item">Kelas 1 SMP</span>
								</a>
							</li>
							<li>
								<a href="/jadwal-2smp">
									<span class="sub-item">Kelas 2 SMP</span>
								</a>
							</li>
							<li>
								<a href="/jadwal-3smp">
									<span class="sub-item">Kelas 3 SMP</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
			</ul>
			@endif
			@if (Auth::user()->kelas_id  == '1')
			<ul class="nav nav-primary">
				<li class="nav-item active">
					<a href="/alpha-1smp" type="button" class="btn">
						<i class="fas fa-list-alt"></i>
						<p>Daftar Alpha</p>
						{{-- <span class="caret"></span> --}}
					</a>
				</li>
			</ul>
			@endif
			@if (Auth::user()->kelas_id  == '2')
			<ul class="nav nav-primary">
				<li class="nav-item active">
					<a href="/alpha-2smp" type="button" class="btn">
						<i class="fas fa-list-alt"></i>
						<p>Daftar Alpha</p>
						{{-- <span class="caret"></span> --}}
					</a>
				</li>
			</ul>
			@endif
			@if (Auth::user()->kelas_id  == '3')
			<ul class="nav nav-primary">
				<li class="nav-item active">
					<a href="/alpha-3smp" type="button" class="btn">
						<i class="fas fa-list-alt"></i>
						<p>Daftar Alpha</p>
						{{-- <span class="caret"></span> --}}
					</a>
				</li>
			</ul>
			@endif
			@if (Auth::user()->role  == 'Admin'|Auth::user()->role  == 'Guru')
			<ul class="nav nav-primary">
				<li class="nav-item active">
					<a data-toggle="collapse" href="#alpha" class="collapsed" aria-expanded="false">
						<i class="fas fa-clipboard-list"></i>
						<p>Daftar Alpha</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="alpha">
						<ul class="nav nav-collapse">
							<li>
								<a href="/alpha-1smp">
									<span class="sub-item">Kelas 1 SMP</span>
								</a>
							</li>
							<li>
								<a href="/alpha-2smp">
									<span class="sub-item">Kelas 2 SMP</span>
								</a>
							</li>
							<li>
								<a href="/alpha-3smp">
									<span class="sub-item">Kelas 3 SMP</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
			</ul>
			@endif
			@if (Auth::user()->role  == 'Admin'|Auth::user()->role  == 'Guru')
			<ul class="nav nav-primary">
				<li class="nav-item active">
					<a data-toggle="collapse" href="#terimatugas" class="collapsed" aria-expanded="false">
						<i class="fas fa-list-alt"></i>
						<p>Tugas & Pertanyaan</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="terimatugas">
						<ul class="nav nav-collapse">
							<li>
								<a href="/pesan-1smp">
									<span class="sub-item">Kelas 1 SMP</span>
								</a>
							</li>
							<li>
								<a href="/pesan-2smp">
									<span class="sub-item">Kelas 2 SMP</span>
								</a>
							</li>
							<li>
								<a href="/pesan-3smp">
									<span class="sub-item">Kelas 3 SMP</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
			</ul>
			@endif
			@if (Auth::user()->role  == 'Admin'|Auth::user()->role  == 'Siswa')
			<ul class="nav nav-primary">
				<li class="nav-item active">
					<a href="/kirim-tugas" type="button" class="btn">
						<i class="fas fa-list-alt"></i>
						<p>Kirim tugas & Pertanyaan</p>
						{{-- <span class="caret"></span> --}}
					</a>
				</li>
			</ul>
			@endif
			@if (Auth::user()->role  == 'Admin'|Auth::user()->role  == 'Guru')
			<ul class="nav nav-primary">
				<li class="nav-item active">
					<a href="/potongan-gaji" type="button" class="btn">
						<i class="fas fa-cut"></i>
						<p>Pemotongan gaji guru</p>
						{{-- <span class="caret"></span> --}}
					</a>
				</li>
			</ul>
			@endif
			@if (Auth::user()->role  == 'Admin'|Auth::user()->role  == 'Guru')
			<ul class="nav nav-primary">
				<li class="nav-item active">
					<a href="/evaluasi" type="button" class="btn">
						<i class="fas fa-calendar-alt"></i>
						<p>Jadwal evaluasi Guru</p>
						{{-- <span class="caret"></span> --}}
					</a>
				</li>
			</ul>
			@endif
			@if (Auth::user()->role  == 'Admin'|Auth::user()->role  == 'Guru')
			<ul class="nav nav-primary">
				<li class="nav-item active">
					<a data-toggle="collapse" href="#profilemurid" class="collapsed" aria-expanded="false">
						<i class="fas fa-user-alt"></i>
						<p>Profile Murid</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="profilemurid">
						<ul class="nav nav-collapse">
							<li>
								<a href="/profile-1smp">
									<span class="sub-item">Kelas 1 SMP</span>
								</a>
							</li>
							<li>
								<a href="/profile-2smp">
									<span class="sub-item">Kelas 2 SMP</span>
								</a>
							</li>
							<li>
								<a href="/profile-3smp">
									<span class="sub-item">Kelas 3 SMP</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
			</ul>
			@endif
			@if (Auth::user()->role  == 'Admin'|Auth::user()->role  == 'Siswa')
			<ul class="nav nav-primary">
				<li class="nav-item active">
					<a href="/peraturan" type="button" class="btn">
						<i class="fas fa-exclamation-circle"></i>
							<p>Peraturan</p>
						{{-- <span class="caret"></span> --}}
					</a>
				</li>
			</ul>
			@endif
			@if (Auth::user()->role  == 'Admin')
			<ul class="nav nav-primary">
				<li class="nav-item active">
					<a href="/tambah-user" type="button" class="btn">
						<i class="fas fa-users"></i>
						<p>Kelola user</p>
						{{-- <span class="caret"></span> --}}
					</a>
				</li>
			</ul>
			@endif
		</div>
	</div>
</div>
@section('jam')
<script type="text/javascript">
    window.onload = function() { jam(); }
   
    function jam() {
     var e = document.getElementById('jam'),
     d = new Date(), h, m, s;
     h = d.getHours();
     m = set(d.getMinutes());
     s = set(d.getSeconds());
   
     e.innerHTML = h +':'+ m +':'+ s;
   
     setTimeout('jam()', 1000);
    }
   
    function set(e) {
     e = e < 10 ? '0'+ e : e;
     return e;
    }
   </script>
<!-- End Sidebar -->
@endsection