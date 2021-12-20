
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Landing Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="Bizland/img/favicon.png" rel="icon">
  <link href="Bizland/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="Bizland/vendor/aos/aos.css" rel="stylesheet">
  <link href="Bizland/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Bizland/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="Bizland/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="Bizland/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="Bizland/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="Bizland/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v3.7.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      {{-- <h1 class="logo"><a href="index.html">KBM<span>.</span></a></h1> --}}
      <a href="/home" class="logo">
      <img src="{{ asset('atlantis/assets/img/Logo-KBM.png') }}" alt="navbar brand" width="95%" class="navbar-brand">
      </a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="Bizland/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
          {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> --}}
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Selamat datang di <span>Aplikasi KBM</span></h1>
      <h2>Beragam fitur yang menarik bisa anda gunakan sesuka anda.</h2>
      <div class="d-flex">
        {{-- <a href="" class="btn-get-started scrollto">Mulai</a> --}}
        @guest
        {{-- <a class="nav-link anchor" aria-current="page" href=""><i class="fas fa-search"></i> Cari</a> --}}
        <a href="{{route('login')}}" class="btn-get-started scrollto">Login</a>
        <a href="{{route('register')}}" class="btn-get-started scrollto ms-2">Register</a>
        @else
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        @endguest
        {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> --}}
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Jadwal Mapel</a></h4>
              <p class="description">Anda bisa melihat jadwal mapel dalam 1 tombol.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Daftar Alpha</a></h4>
              <p class="description">Daftar siswa yang alpha bisa dilihat oleh guru maupun siswa itu sendiri.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Pengiriman Tugas & pertanyaan</a></h4>
              <p class="description">Jika anda ingin mengirimkan tugas atau sekedar mengirirm pertanyaan,kami telah menyiapkan fiturnya dalam aplikasi.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Peraturan KBM</a></h4>
              <p class="description">Baris peraturan bisa anda lihat dengan text yang sangat mudah untuk dipahami.</p>
            </div>
          </div>
          <h3></h3><br>
          <h6 class="container text-center">Dan masih banyak lagi fitur-fitur menarik yang bisa anda gunakan.</h6>
        </div>
        
      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang</h2>
          <h3>Tentang<span> Aplikasi ini</span></h3>
          <p></p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="Bizland/img/data.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>Fungsi-fungsi yang didapat:</h3>
            <p class="fst-italic">
              Beberapa fungsi yang didapatkan oleh siswa dan guru
            </p>
            <ul>
              <li>
                <i class="bx bx-store-alt"></i>
                <div>
                  <h5>Kemudahan dalam proses pengiriman</h5>
                  <p>Seperti mengirim tugas ataupun mengirim pesan pertanyaan</p>
                </div>
              </li>
              <li>
                <i class="bx bx-images"></i>
                <div>
                  <h5>Kemudahan dalam proses pendataan</h5>
                  <p>Baik pendataan siswa maupun file sekolah itu sendiri</p>
                </div>
              </li>
            </ul>
            <p>
              Dengan kemudahan-kemudahan yang ditawarkan diatas,kami harap anda puas dengan apa yang kami berikan kepada anda.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{ $jumlahsiswa }}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Siswa</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{ $jumlahguru }}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Guru</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{ $jumlahadmin }}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Admin</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontak</h2>
          <h3><span>Hubungi kami melalui</span></h3>
          <p></p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Alamat</h3>
              <p>Jl. Raya Dayeuh, Sukanegara, Kec. Jonggol, Kabupaten Bogor, Jawa Barat 16830</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p>idnboardingschool@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>No. Telp</h3>
              <p>085327051062</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            {{-- <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe> --}}
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.971446210669!2d107.03597311417886!3d-6.525289995280123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69bc6e5be3d9bd%3A0x6b9881dabd801476!2sSMK%20IDN%20Boarding%20School!5e0!3m2!1sid!2sid!4v1639448193351!5m2!1sid!2sid"  frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>KBM Club</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Designed by <a href="https://bootstrapmade.com/">MyProject</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="Bizland/vendor/purecounter/purecounter.js"></script>
  <script src="Bizland/vendor/aos/aos.js"></script>
  <script src="Bizland/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="Bizland/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="Bizland/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="Bizland/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="Bizland/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="Bizland/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="Bizland/js/main.js"></script>

</body>

</html>