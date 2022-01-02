<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Aplikasi KBM</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../assets/img/icon.ico" type="image/x-icon"/>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	<!-- Fonts and icons -->
	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/atlantis.min.css">




	<style>
		.customecolor {

		/* animation: changeBackgroundColor 7s infinite;*/
		background-color: #36ffe4;
		}

		/* @keyframes changeBackgroundColor {
		0% {
			background-color: #FFFF66;
		}
		50% {
			background-color: #36ffe4;
		}
		100% {
			background-color: #FFFF66;
		}
		} */

		.lingkaran{
		width: 20px;
		height: 20px;
		background: #71F5F5;
		border-radius: 100%;
		}

		.lingkaran2{
		width: 20px;
		height: 20px;
		background: #71F5A1;
		border-radius: 100%;
		}

		.lingkaran3{
		width: 20px;
		height: 20px;
		background: #BBF571;
		border-radius: 100%;
		}

		/* FORM CONTACT  */
		.body {
		align-items: center;
		/* background-color: #000; */
		display: flex;
		justify-content: center;
		height: 100vh;
		margin-bottom: 35px;
		margin-top: 35px;
		}

		.text{
			height: 100px !important;
		}

		.form {
		background-color: #f6f6fdee;
		border-radius: 20px;
		box-sizing: border-box;
		/* height: 500px; */
		height: max-content;
		padding: 20px;
		width: 400px;
		}

		.title {
		color: rgb(41, 39, 39);
		font-family: sans-serif;
		font-size: 36px;
		font-weight: 600;
		margin-top: 30px;
		}

		.subtitle {
		color: rgb(41, 39, 39);
		font-family: sans-serif;
		font-size: 16px;
		font-weight: 600;
		margin-top: 10px;
		}

		.input-container {
		height: 50px;
		position: relative;
		width: 100%;
		}

		.ic1 {
		margin-top: 40px;
		}

		.ic2 {
		margin-top: 30px;
		}

		.input {
		background-color: white;
		border-radius: 12px;
		box-sizing: border-box; 
		border: 0;
		/* color: rgb(41, 39, 39); */
		font-size: 18px;
		height: 100%;
		outline: 0;
		padding: 4px 20px 0;
		width: 100%;
		}

		.cut {
		background-color: transparent;
		border-radius: 10px;
		height: 20px;
		left: 20px;
		position: absolute;
		top: -20px;
		transform: translateY(0);
		transition: transform 200ms;
		width: 76px;
		}

		.cut-short {
		width: 50px;
		}

		.input:focus ~ .cut,
		.input:not(:placeholder-shown) ~ .cut {
		transform: translateY(8px);
		}

		.placeholder {
		color: #7f7f8b;
		font-family: sans-serif;
		left: 20px;
		line-height: 14px;
		pointer-events: none;
		position: absolute;
		transform-origin: 0 50%;
		transition: transform 200ms, color 200ms;
		top: 20px;
		}

		.input:focus ~ .placeholder,
		.input:not(:placeholder-shown) ~ .placeholder {
		transform: translateY(-30px) translateX(10px) scale(0.75);
		}

		.input:not(:placeholder-shown) ~ .placeholder {
		color: #808097;
		}

		.input:focus ~ .placeholder {
		color: #dc2f55;
		}

		.submit {
		background-color: #08d;
		border-radius: 12px;
		border: 0;
		box-sizing: border-box;
		color: rgb(41, 39, 39);
		cursor: pointer;
		font-size: 18px;
		height: 50px;
		margin-top: 80px;
		// outline: 0;
		text-align: center;
		width: 100%;
		}

		.submit:active {
		background-color: #06b;
		}
		/* END FORM CONTACT */

		/* PROFILE */

		.padding {
			padding: 3rem !important;

		}

		.user-card-full {
			overflow: hidden
		}

		.card {
			border-radius: 5px;
			-webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
			box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
			border: none;
			margin-bottom: 30px
		}

		.m-r-0 {
			margin-right: 0px
		}

		.m-l-0 {
			margin-left: 0px
		}

		.user-card-full .user-profile {
			border-radius: 5px 0 0 5px
		}

		.bg-c-lite-green {
			background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
			background: linear-gradient(to right, #ee5a6f, #f29263)
		}

		.user-profile {
			padding: 20px 0
		}

		.card-block {
			padding: 1.25rem
		}

		.m-b-25 {
			margin-bottom: 25px
		}

		.img-radius {
			border-radius: 5px
		}

		h6 {
			font-size: 14px
		}

		.card .card-block p {
			line-height: 25px
		}

		@media only screen and (min-width: 1400px) {
			p {
				font-size: 14px
			}
		}

		.card-block {
			padding: 1.25rem
		}

		.b-b-default {
			border-bottom: 1px solid #e0e0e0
		}

		.m-b-20 {
			margin-bottom: 20px
		}

		.p-b-5 {
			padding-bottom: 5px !important
		}

		.card .card-block p {
			line-height: 25px
		}

		.m-b-10 {
			margin-bottom: 10px
		}

		.text-muted {
			color: #919aa3 !important
		}

		.b-b-default {
			border-bottom: 1px solid #e0e0e0
		}

		.f-w-600 {
			font-weight: 600
		}

		.m-b-20 {
			margin-bottom: 20px
		}

		.m-t-40 {
			margin-top: 20px
		}

		.p-b-5 {
			padding-bottom: 5px !important
		}

		.m-b-10 {
			margin-bottom: 10px
		}

		.m-t-40 {
			margin-top: 20px
		}

		.user-card-full .social-link li {
			display: inline-block
		}

		.user-card-full .social-link li a {
			font-size: 20px;
			margin: 0 10px 0 0;
			-webkit-transition: all 0.3s ease-in-out;
			transition: all 0.3s ease-in-out
		}
		/* END PROFILE */

		/* PROFILE MURID */
		@media (max-width: 600px) {
        .jarak {
            padding-top: 40px;
            padding-bottom: 100px;
        }
        .jarakk {
            padding-top: 40px;
        }
    }

    .ancor {
        text-decoration: none;
        color: black;
    }

    .card {
        border: none;
    }

    .card:hover {
        color: black;
        /* box-shadow: 5px 10px #474a4ecf; */
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .latar {
        /* background: linear-gradient(90deg, #F6F8FD 29px, transparent 1%) center, linear-gradient(#F6F8FD 29px, transparent 1%) center, #bfc5d3; */
        background-size: 30px 30px;
    }

    .gambar {
        width: 80px !important;
        padding-top: 100px;
        padding-bottom: 30px;
    }
    .scroll {
        overflow-y: hidden;
    }

    .scroll-modal {
        height: 450px;
        overflow-x: hidden;
    }
	/* END PROFILE MURID */
	
	.bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

	  .tengah{
		margin-top: 100px;
		}

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

	  /* BACKGROUND KONTEN */
	  /* @import url('https://fonts.googleapis.com/css?family=Exo:400,700');



	  /* MAPEL */
	  .mapel{
		  border-radius: 10px;
	  }
	  /* END MAPEL */

	  .circle{
    counter-reset: list-counter;
    list-style: none;
    float:left;
}
.circle li{
    margin: 1.5em 0;    
}
.circle li:before{
    content: counter(list-counter);
    counter-increment: list-counter;
    width: 1em;
    height: 1em;
    padding: .5em;
    margin-right: 0;
    border-radius: 50%;
    border: .25em solid #ccc;
    background: #000;
    color: rgb(4, 224, 253);
    font-family: arial;
    font-weight: bold;
    text-align: center;
    display: inline-block; */
    
}
	.set{
		margin-left: 0 !important;
		margin-right: 0 !important;
	}

	/* PROFILE */
	/* body{
    background:#eee;
    margin-top:20px; */
}
.img-thumbnail {
    padding: .25rem;
    background-color: #fff;
    border: 1px solid #dee2e6;
    border-radius: .25rem;
    max-width: 100%;
    height: auto;
}

.social-link {
    width: 30px;
    height: 30px;
    border: 1px solid #ddd;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #666;
    border-radius: 50%;
    transition: all 0.3s;
    font-size: 0.9rem;
}
	/* END PROFILE */

	/* .edit {
    margin: 0;
    padding-top: 40px;
    color: #2e323c;
    background: #f5f6fa;
    position: relative;
	margin-left: 0;
	margin-right: 0;
    height: 100%; */
}
.account-settings .user-profile {
    margin: 0 0 1rem 0;
    padding-bottom: 1rem;
    text-align: center;
}
.account-settings .user-profile .user-avatar {
    margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
    width: 90px;
    height: 90px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
}
.account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 400;
    color: #9fa8b9;
}
.account-settings .about {
    margin: 2rem 0 0 0;
    text-align: center;
}
.account-settings .about h5 {
    margin: 0 0 15px 0;
    color: #007ae1;
}
.account-settings .about p {
    font-size: 0.825rem;
}
.form-control {
    border: 1px solid #cfd1d8;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: .825rem;
    background: #ffffff;
    color: #2e323c;
}

.card {
    background: #ffffff;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
}

	</style>

{{-- @livewireStyles --}}
</head>
<body>

	<div class="wrapper">
		@include('landing.navbar')
	
	<div class="main-panel">
		<div class="content customecolor">
	@yield('content')
	{{-- @livewire('contact-form') --}}
		</div>

		@include('landing.footer')
	</div>
	{{-- <div class="custom-template">
		<div class="title">Settings</div>
		<div class="custom-content">
			<div class="switcher">
				<div class="switch-block">
					<h4>Logo Header</h4>
					<div class="btnSwitch">
						<button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
						<button type="button" class="selected changeLogoHeaderColor" data-color="blue"></button>
						<button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
						<button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
						<button type="button" class="changeLogoHeaderColor" data-color="green"></button>
						<button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
						<button type="button" class="changeLogoHeaderColor" data-color="red"></button>
						<button type="button" class="changeLogoHeaderColor" data-color="white"></button>
						<br/>
						<button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
						<button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
						<button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
						<button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
						<button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
						<button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
						<button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
					</div>
				</div>
				<div class="switch-block">
					<h4>Navbar Header</h4>
					<div class="btnSwitch">
						<button type="button" class="changeTopBarColor" data-color="dark"></button>
						<button type="button" class="changeTopBarColor" data-color="blue"></button>
						<button type="button" class="changeTopBarColor" data-color="purple"></button>
						<button type="button" class="changeTopBarColor" data-color="light-blue"></button>
						<button type="button" class="changeTopBarColor" data-color="green"></button>
						<button type="button" class="changeTopBarColor" data-color="orange"></button>
						<button type="button" class="changeTopBarColor" data-color="red"></button>
						<button type="button" class="changeTopBarColor" data-color="white"></button>
						<br/>
						<button type="button" class="changeTopBarColor" data-color="dark2"></button>
						<button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
						<button type="button" class="changeTopBarColor" data-color="purple2"></button>
						<button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
						<button type="button" class="changeTopBarColor" data-color="green2"></button>
						<button type="button" class="changeTopBarColor" data-color="orange2"></button>
						<button type="button" class="changeTopBarColor" data-color="red2"></button>
					</div>
				</div>
				<div class="switch-block">
					<h4>Sidebar</h4>
					<div class="btnSwitch">
						<button type="button" class="selected changeSideBarColor" data-color="white"></button>
						<button type="button" class="changeSideBarColor" data-color="dark"></button>
						<button type="button" class="changeSideBarColor" data-color="dark2"></button>
					</div>
				</div>
				<div class="switch-block">
					<h4>Background</h4>
					<div class="btnSwitch">
						<button type="button" class="changeBackgroundColor" data-color="bg2"></button>
						<button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
						<button type="button" class="changeBackgroundColor" data-color="bg3"></button>
						<button type="button" class="changeBackgroundColor" data-color="dark"></button>
					</div>
				</div>
			</div>
		</div>
		<div class="custom-toggle">
			<i class="flaticon-settings"></i>
		</div>
	</div> --}}
	<!-- End Custom template -->
	</div>
	<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="../assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="../assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="../assets/js/atlantis.min.js"></script>

	@yield('chart')
	@yield('jam')
	@yield('ck-editor')
{{-- @livewireScripts --}}
</body>