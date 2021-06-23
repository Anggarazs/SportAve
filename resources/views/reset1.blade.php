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
                      <a href="{{ url('/home') }}" class="text-sm text-dark-700 underline">Beranda</a>&emsp;
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
        <div class="row row-centered">
          <div class="col-md-4 col-centered">
            <div class="card">
              <div class="card-body">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                  <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg>
                <h3>Alamat</h3>
                <p>Jl. Ahmad Yani,<br>Balikpapan, Kaltim, 535022</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                </svg>
                <h3>Telepon</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
              </div>
            </div>
          </div>
        </div>
        <br><br><br>

        <div class="row row-centered">
          <div class="col-md-4 col-centered">
            <div class="card">
              <div class="card-body">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                </svg>
                <h3>Email</h3>
                <p>sportave@gmail.com</p><br>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                </svg>
                <h3>Jam Buka</h3>
                <p>Setiap Hari<br>8:00AM - 05:00PM</p>
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