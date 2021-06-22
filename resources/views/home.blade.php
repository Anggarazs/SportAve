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
            <img src="/img/1.jpg" class="d-block w-100 h-50" style="object-fit: cover;" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1><b>SportAve</b></h1>
              <p><h5>SportAve hadir sebagai solusi terbaik dalam melakukan pemesanan lapangan futsal dengan mudah dan cepat</h5></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/img/2.jpg" class="d-block w-100 h-50" style="object-fit: cover;" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1><b>SportAve</b></h1>
              <p><h5>Sempurnakan bakat anda bersama SportAve</h5></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/img/3.jpg" class="d-block w-100 h-50" style="object-fit: cover;" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1><b>SportAve</b></h1>
              <p><h5>Futsal? Ya SportAve!</h5></p>
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
      </div>
      <br>
      <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal">
        Lihat Jadwal
       </button>
       <!-- Modal -->
       <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
           <div class="modal-content">
             <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">List Booking</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div class="modal-body">
               <table class="table table-hover">
                 <tr>
                     <th width="20px" class="text-center">No</th>
                     <th>Nama Pemboking</th>
                     <th>Tanggal</th>
                     <th>Lapangan</th>
                     <th>Waktu</th>
                 </tr>
                 @foreach ($jadwal as $booking)
                 <tr>
                     <td class="text-center">{{ $loop->iteration }}</td>
                     <td>{{ $booking->nama }}</td>
                     <td>{{ $booking->tanggal_booking }}</td>
                     <td>{{ $booking->Lapangan->nama }}</td>
                     <td>{{ $booking->awal }} - {{ $booking->akhir }}</td>
                 </tr>
                 @endforeach
               </table>
             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             </div>
           </div>
         </div>
       </div>
      <br><br>      <h3>DAFTAR LAPANGAN SPORTAVE</h3> <br>
            <div class="card-deck">
            @foreach ($datalapangans as $datalapangan)
                <div class="card">
                    <img src="{{ asset('/img/'. $datalapangan->foto_lapangan ) }}">  
                    <div class="card-body">
                        <h5 class="card-title">{{ $datalapangan->nama }}</h5>
                        <p class="card-text">
                          Jenis Lapngan : {{ $datalapangan->jenis_lapangan }}<br>
                          Harga per Jam : {{ $datalapangan->harga }}
                        
                      </p>
                        <a href="/boking/create" class="btn btn-outline-primary btn-block">Booking Sekarang</a>
                    </div>
                </div>
              @endforeach
            </div>
            <div class="card-footer">
                {{ $datalapangans->links() }}
                
            </div>


        </div>
</div>


@endsection
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


