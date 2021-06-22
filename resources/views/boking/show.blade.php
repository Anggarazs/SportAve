@extends('layouts.app')
@section('content')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaksi</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/login.css">
  </head>
  <body>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
      <div class="container">
        <div class="card ">
          <div class="row no-gutters">
            <div class="col-md-5">
              <img src="/img/login.png" alt="login" class="login-card-img">
            </div>
            <div class="col-md-7">
              <div class="card">
                <div class="card-header">

                  <h3 class="text-center">Informasi Transaksi</h3>
                </div>
              {{-- </div> --}}
              <div class="card-body">
                <body style="background-color: rgb(135, 208, 250)">
                    <div class=" justify-content-center">
                      <div class="col">
                        
                        <div class="row">
                          <div class="col-sm-4">Nama</div>
                          <div class="col-sm-8">: {{$booking->nama}} </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-4">Email</div>
                          <div class="col-sm-8">: {{$booking->email}} </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-4">Nomor Telepon</div>
                          <div class="col-sm-8">: {{$booking->nomor}} </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-4">Tanggal Pesanan</div>
                          <div class="col-sm-8">:  {{$booking->tanggal_booking}}</div>
                        </div>
                        <div class="row">
                          <div class="col-sm-4">Waktu Mulai</div>
                          <div class="col-sm-8">:  {{$booking->awal}}</div>
                        </div>
                        <div class="row">
                          <div class="col-sm-4">Waktu Selesai</div>
                          <div class="col-sm-8">:  {{$booking->akhir}}</div>
                        </div>
                        <div class="row">
                          <div class="col-sm-4">Lapangan</div>
                          <div class="col-sm-8">:  {{$booking->lapangan->nama}}</div>
                        </div>
                        <div class="row">
                          <div class="col-sm-4">Metode Pembayaran </div>
                          <div class="col-sm-8">: {{$booking->bayar}} </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-4">Total</div>
                          <div class="col-sm-8">: {{$booking->Transaksi->total}}</div>
                        </div>
                        <form action="{{ route('transaksi.update',$booking->Transaksi->id) }}" method="POST" enctype="multipart/form-data">
                        <div class="row">
                          
                          <div class="col-sm-4">Bukti Pembayaran</div>
                          <div class="col-sm-8">
                            <input type="file" name="bukti" placeholder="Foto Bukti" required>
                            
                          </div>
                        </div>
                        <br>
                        {{-- <div class="col"> --}}
                          <div class="row">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-primary btn-sm btn-block">
                              Konfirmasi Pembayaran
                            </button>
                          </div><br>
                        </form>
                        <form action="{{ route('boking.destroy',$booking->id) }}" c method="POST">
                        <div class="row">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm btn-block col" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" >
                              Cancel
                            </button>
                          </div>
                        </form>
                        {{-- </div> --}}
                        
                        
                      </div>
                    </div>
                  </div>
                </div>
              </main>
              {{-- <style>
                *{
                  border: red 1px solid !important;
                }
                </style> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> --}}
  </body>
  @endsection
  
  
