<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sport Ave</title>

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">  
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!--bootstrap 4-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        

        <link href="/css/style3.css" rel="stylesheet">

    </head>
    
      <header id="header" class="header fixed-top">
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
          <div class="container-sm d-flex align-items-center justify-content-between">
            <a href="#" class="logo d-flex align-items-center">
              <img src="/img/logo.png" alt="">
              <span style="font-size: 30px">Sport Ave</span>
            </a>
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 ligth:bg-gray900 sm:items-center py-4 sm:pt-0 ml-auto">
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                  @if(Auth::check() && Auth::user()->admin == 1)
                     <a href="{{ url('/home') }}" class="text-sm text-dark-700 underline">Beranda</a>&emsp;
                     <a href="{{ url('admin/dashboard') }}" class="text-sm text-dark-700 underline">Dashboard</a>&emsp;
                     <a href="{{ route('boking.create') }}" class="text-sm text-dark-700 underline">Pesan Lapangan</a>&emsp;
                     <a href="/boking" class="text-sm text-dark-700 underline">Transaksi</a>&emsp;
                  @elseif(Auth::check() && Auth::user()->admin != 1)
                      <a href="{{ url('/home') }}" class="text-sm text-dark-700 underline">Beranda</a>&emsp;
                      <a href="{{ route('boking.create') }}" class="text-sm text-dark-700 underline">Pesan Lapangan</a>&emsp;
                      <a href="/boking" class="text-sm text-dark-700 underline">Transaksi</a>&emsp;
                  @else
                      <a href="{{ route('boking.create') }}" class="text-sm text-dark-700 underline">Pesan Lapangan</a>&emsp;
                      <a href="/boking" class="text-sm text-dark-700 underline">Transaksi</a>&emsp;
                      <a href="{{ route('login') }}" class="text-sm text-dark-700 underline">Log in</a>&emsp;
                      @if (Route::has('register'))
                          <a href="{{ route('register') }}" class="ml-4 text-sm text-dark-700 underline btn btn-primary btn-sm">Register</a>
                      @endif
                  @endif
                </div>
            @endif
        </div>
            
      </div>
        </nav>

</header>
<body>
  <section id="hero"  class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1>Website Penyewaan Sport Center</h1><br>
          <h4>Booking vanue tanpa harus datang ke tempat!</h4>
          <div >
            <div class="text-lg-start">
              <a href="/home" class="btn-get-started scrollto d-inline-flex text btn btn-primary btn-sm mr-auto">Get Started</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" >
        <img src="/img/sports-hero.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section>


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact ">

      <div class="container">

        <header class="section-header text-center">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </header>

        <div class="row gy-4 ">

          <div class="col-lg-12">

            <div class="row gy-4">
              <div class="col-md-3">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Alamat</h3>
                  <p>Jl. Ahmad Yani,<br>Balikpapan, Kaltim, 535022</p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Telepon</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
              </div>
              <div class="col-md-3">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email</h3>
                  <p>sportave@gmail.com</p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Jam Buka</h3>
                  <p>Setiap Hari<br>9:00AM - 24:00PM</p>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
    </section><!-- End Contact Section --><br><br>
<section>
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-5 col-md-12">
              <a href="index.html" class="logo d-flex align-items-center">
                <img src="/img/logo.png" alt="">
                <span style="font-size: 20px">Sport Ave</span>
              </a>
              <p>Situs terpercaya penyewaan lapangan sport center tanpa harus datang ke tempat!</p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
        
            
            <div class="col-lg-2 col-6">
                <h4>Contact </h4>
                <p>
                    Jl. Ahmad Yani <br>
                    Balikpapan, Kaltim 535022<br>
                    Indonesia <br><br>
                    <strong>Phone:</strong> +1 5589 55488 55<br>
                    <strong>Email:</strong> sportave@gmail.com<br>
                </p>
              </div>
    
        <div class="col-lg-3 col-md-12 text-center text-md-start">
            <h4>Maps</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.0141114578028!2d116.85934571394704!3d-1.1504103991608703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df149298f826ab5%3A0x8489d5309f45c0db!2sKalimantan%20Institute%20of%20Technology!5e0!3m2!1sen!2sid!4v1616418703295!5m2!1sen!2sid" width="500" height="250" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>
      </section>
      <br>

        <footer id="footer" class="footer">
        <div class="container text-center">
            <div class="copyright">
              &copy; Copyright <strong><span>Sport Ave</span></strong>. All Rights Reserved
            </div>
            </div>
            
        </div>
        </footer><!-- End Footer -->


  
                </div>
            </div>
        </div>
      
     <!--Template Main JS File -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a15efae848.js" crossorigin="anonymous"></script>
    <!--<script src="/js/main.js"></script>-->
  


</body>
</html>