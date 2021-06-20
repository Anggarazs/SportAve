@extends('layouts.app')
@section('content')

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Booking Vanue</title>
    <body style="background-color: rgb(135, 208, 250)">
      <div class="container" >
        <div class="row justify-content-center">
          <div class="col-md-8">
              <h5 style="text-align: center;">BUAT PESANANMU SEKARANG</h5><br><br>
              @if ($message = Session::get('danger'))
              <div class="alert alert-danger">
                  <p>{{ $message }}</p>
              </div>
              @endif
              <form action="{{route('boking.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                      <label for="inputNama">Masukkan Nama</label>
                      <input type="text" class="form-control" name="nama" id="inputNama" value=" {{ Auth::user()->name }}" required>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail">Masukkan Email</label>
                        <input type="email" class="form-control"  name="email"  id="inputEmail" value=" {{ Auth::user()->email }}" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputNomor">Nomor HP/Telepon</label>
                        <input type="text" class="form-control" name="nomor" id="inputNomor" placeholder="Masukkan Nomor Telepon" required>
                      </div>
                    </div>
                  <div class="form-group">
                      <label for="inputTanggal">Tanggal Pesanan</label>
                      <input type="date" class="form-control" name="tanggal_booking" id="inputTanggal" placeholder="Masukkan Tanggal Pesan" required>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputMulai">Waktu Mulai</label>
                        <select name="awal" id="inputBayar" class="form-control" required>
                          <option selected value="">Pilih...</option>
                          <option value="09:00">09:00</option>
                          <option value="10:00">10:00</option>
                          <option value="11:00">11:00</option>
                          <option value="12:00">12:00</option>
                          <option value="13:00">13:00</option>
                          <option value="14:00">14:00</option>
                          <option value="15:00">15:00</option>
                          <option value="16:00">16:00</option>
                          <option value="17:00">17:00</option>
                          <option value="18:00">18:00</option>
                          <option value="19:00">19:00</option>
                          <option value="20:00">20:00</option>
                          <option value="21:00">21:00</option>
                          <option value="22:00">22:00</option>
                          <option value="23:00">23:00</option>
                          <option value="24:00">24:00</option>
                        </select>
                        </select>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputSelesai">Waktu Selesai</label>
                        <select name="akhir" id="inputBayar" class="form-control" required>
                          <option selected value="">Pilih...</option>
                          <option value="09:00">09:00</option>
                          <option value="10:00">10:00</option>
                          <option value="11:00">11:00</option>
                          <option value="12:00">12:00</option>
                          <option value="13:00">13:00</option>
                          <option value="14:00">14:00</option>
                          <option value="15:00">15:00</option>
                          <option value="16:00">16:00</option>
                          <option value="17:00">17:00</option>
                          <option value="18:00">18:00</option>
                          <option value="19:00">19:00</option>
                          <option value="20:00">20:00</option>
                          <option value="21:00">21:00</option>
                          <option value="22:00">22:00</option>
                          <option value="23:00">23:00</option>
                          <option value="24:00">24:00</option>
                        </select>
                        </select>
                      </div>
                      
                  
                  <div class="form-group col-md-6">
                      <label for="inputBayar">Pilih Lapangan</label>
                      <select name="data_lapangan_id" id="inputBayar" class="form-control" required>
                        <option selected value="">Pilih Lapangan...</option>
                        @foreach ($lapangan as $namal)
                            <option value="{{$namal->id}}">{{ $namal->nama }}</option>
                        @endforeach
                      </select>
                  </div>
                  <div class="form-group col-md-6">
                      <label for="inputBayar">Pilih Pemabayaran</label>
                      <select name="bayar" id="inputBayar" class="form-control" required>
                        <option selected value="">Pilih Pembayaran...</option>
                        <option value="BNI">BNI / 7783726</option>
                        <option value="BRI">BRI / 958473627</option>
                        <option value="Dana">Dana / 08238575495049</option>
                      </select>
                  </div>
                  <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#exampleModal">
                   Lihat Jadwal
                  </button>
                  <button type="submit"  class="btn btn-primary btn-block">Pesan Sekarang</button>
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
                </div>
                </div>
              </form>
          </div>
        </div>
      </div>
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"></script>
</body>
@endsection