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
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="/img/login.png" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <body style="background-color: rgb(135, 208, 250)">
                <div class="container" >
                  <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card-header">
                        <h5 style="text-align: center;">Transaksi Pembayaran</h5></div>
                        
                        
                        @foreach($transaksi as $t)
                        <form action="{{ route('boking.show',$t->booking_id) }}" style="max-width: none">
                          <div class="form-group">
                              <label for="inputNama" class="d-block p-2 bg-secondary text-white">Total Harga : Rp. {{$t->total}}</label>
                            @if ($t->bukti==Null)
                              <button type="submit" class="btn btn-primary btn-block">
                                Konfirmasi Pembayaran
                              </button>
                          </div>
                            @else
                            {{-- <div class="badge m-1 {{($t->konfirmasi == 'Berhasil')? "alert alert-success": (($t->konfirmasi == "Gagal")? "badge-danger": "badge-warning")}}">
                                {{($t->konfirmasi == 'Berhasil')? "berhasil": (($t->konfirmasi == "Gagal")? "Gagal": "Proses")}}
                            </div> --}}
                              <div class="{{($t->konfirmasi == 'Berhasil')? "alert alert-success": (($t->konfirmasi == "Gagal")? "alert alert-danger": "alert alert-warning")}}" role="alert">
                                <h4 class="alert-heading">{{($t->konfirmasi == 'Berhasil')? "Transaksi Berhasil": (($t->konfirmasi == "Gagal")? "Transaksi Gagal": "Proses")}}</h4>
                                <p class="text-justify">
                                    {{($t->konfirmasi == 'Berhasil')?
                                      "Proses transaksi disetujui oleh admin SportAve. Tunjukkan hasil transaksi ini kepada admin sebagai bukti bahwa anda telah melakukan tahap akhir dari pembayaran. Terima Kasih!" :
                                    (($t->konfirmasi == "Gagal")?
                                      "Proses transaksi tidak dapat disetujui oleh admin SportAve karena terdapat data yang tidak semestinya. Silahkan lakukan booking ulang lapangan " : 
                                      "Transaksi sedang di proses, silahkan tunggu hasil keputusan admin selanjutnya.")}}
                                </p>
                              </div>
                            @endif
                        </form>
                        @endforeach
                             
          </div>
        </div>
      </div>
    </div>
  </main>
 
</body>
@endsection
