<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sport Ave</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
          <!-- Favicons -->
        <link href="/img/favicon.png" rel="icon">
        <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="/vendor/aos/aos.css" rel="stylesheet">
        <link href="/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="/css/style1.css" rel="stylesheet">

    </head>
    <body>
      <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
          <a href="#" class="logo d-flex align-items-center">
            <img src="/img/logo.png" alt="">
            <span>Sport Ave</span>
          </a>
      <div class="relative flex items-top justify-center min-h-screen bg-gray-100 ligth:bg-gray-900 sm:items-center py-4 sm:pt-0">
          @if (Route::has('login'))
              <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                <a href="{{ route('boking.create') }}" class="text-sm text-dark-700 underline">Pesan Lapangan</a>&emsp;
                <a href="#" class="text-sm text-dark-700 underline">Transaksi</a>&emsp;
                  @if(Auth::check() && Auth::user()->admin == 1)
                     <a href="{{ url('admin/dashboard') }}" class="text-sm text-dark-700 underline">Dashboard</a>
                  @elseif(Auth::check() && Auth::user()->admin != 1)
                      <a href="{{ url('/home') }}" class="text-sm text-dark-700 underline">Lihat Lapangan</a>&emsp;
                  @else
                      <a href="{{ route('login') }}" class="text-sm text-dark-700 underline">Log in</a>&emsp;
                      @if (Route::has('register'))
                          <a href="{{ route('register') }}" class="ml-4 text-sm text-dark-700 underline btn btn-primary btn-sm">Register</a>
                      @endif
                  @endif
              </div>
          @endif
      </div>
      <i class="bi bi-list mobile-nav-toggle"></i>     
    </div>
</header>

 

  <main id="main">

  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Website Penyewaan Sport Center</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Booking vanue tanpa harus datang ke tempat!</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="/home" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="/img/sports-hero.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Alamat</h3>
                  <p>Jl. Ahmad Yani,<br>Balikpapan, Kaltim, 535022</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Telepon</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email</h3>
                  <p>sportave@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Jam Buka</h3>
                  <p>Setiap Hari<br>8:00AM - 05:00PM</p>
                </div>
              </div>
            </div>

          </div>


          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

    <footer id="footer" class="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
              <a href="index.html" class="logo d-flex align-items-center">
                <img src="/img/logo.png" alt="">
                <span>Sport Ave</span>
              </a>
              <p>Situs terpercaya penyewaan lapangan sport center tanpa harus datang ke tempat!</p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
              </div>
            </div>
        
            
            <div class="col-lg-2 col-6 footer-links">
                <h4>Contact </h4>
                <p>
                    Jl. Ahmad Yani <br>
                    Balikpapan, Kaltim 535022<br>
                    Indonesia <br><br>
                    <strong>Phone:</strong> +1 5589 55488 55<br>
                    <strong>Email:</strong> sportave@gmail.com<br>
                </p>
              </div>
    
        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Maps</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.0141114578028!2d116.85934571394704!3d-1.1504103991608703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df149298f826ab5%3A0x8489d5309f45c0db!2sKalimantan%20Institute%20of%20Technology!5e0!3m2!1sen!2sid!4v1616418703295!5m2!1sen!2sid" width="500" height="250" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
            

        </div>


        <div class="container">
            <div class="copyright">
              &copy; Copyright <strong><span>Sport Ave</span></strong>. All Rights Reserved
            </div>
            </div>
            
        </div>
        </footer><!-- End Footer -->


  
                </div>
            </div>
        </div>
      
    <!-- Vendor JS Files -->
    <script src="/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="/vendor/aos/aos.js"></script>
    <script src="/vendor/php-email-form/validate.js"></script>
    <script src="/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/vendor/purecounter/purecounter.js"></script>
    <script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/vendor/glightbox/js/glightbox.min.js"></script>
  
    <!-- Template Main JS File -->
    <script src="/js/main.js"></script>
  


</body>
</html>