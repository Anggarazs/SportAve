<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

@extends('layouts.app')
   
@section('content')

<div class="container">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" >
          <div class="carousel-item active">
            <img src="/img/futsal.jpeg" class="d-block w-100 h-50" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/img/futsal.jpeg" class="d-block w-100 h-50" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/img/futsal.jpeg" class="d-block w-100 h-50" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div><br><br><br><br>
      <h3>DAFTAR LAPANGAN SPORTAVE</h3> <br>
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src= "/img/futsal.jpeg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Lapangan Futsal</h5>
                        <p class="card-text">Lapangan futsal ini bla bla</p>
                        <a href="#" class="cutton btn-primary">Booking Sekarang</a>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top" src= "/img/bl tangkis lap.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Lapangan Bulu Tangkis</h5>
                        <p class="card-text">Lapangan bulu tangkis ini bla bla</p>
                        <a href="#" class="cutton btn-primary">Booking Sekarang</a>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top" src= "/img/tenis lap.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Tenis Lapangan</h5>
                        <p class="card-text">Tenis lapangan ini bla bla</p>
                        <a href="#" class="cutton btn-primary">Booking Sekarang</a>
                    </div>
                </div>

            </div>

        </div>
</div>
<div class="container">
    <center>
    <div class="copyright">
      &copy; Copyright <strong><span>Sport Ave</span></strong>. All Rights Reserved
    </div>
    </center>
</div>
@endsection

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

