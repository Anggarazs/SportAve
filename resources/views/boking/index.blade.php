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
                    <div class="col-md-8">
                        <h5 style="text-align: center;">Transaksi Pembayaran</h5><br><br>
                        
                        @foreach($transaksi as $t)
                        <form action="{{ route('boking.show',$t->booking_id) }}">
                            <div class="form-group">
                                <label for="inputNama">Total : {{$t->total}}</label>
                                @if ($t->bukti==Null)
                                <button type="submit" class="btn btn-primary">
                                  Konfirmasi Pembayaran
                                </button>
                        
                                @else
                                <div class="badge m-1 {{($t->konfirmasi == 'Berhasil')? "badge-success": (($t->konfirmasi == "Gagal")? "badge-danger": "badge-warning")}}">
                                    {{($t->konfirmasi == 'Berhasil')? "Berhasil": (($t->konfirmasi == "Gagal")? "Gagal": "Proses")}}
                                </div>
                                @endif
                                <br>
                              </div>
                          </form>
                          @endforeach   
                             
          </div>
        </div>
      </div>
    </div>
  </main>
 
</body>
@endsection
