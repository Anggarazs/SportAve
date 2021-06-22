@extends('admin.template')
 
@section('konten')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Booking</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Data Booking</li>
            </ol>
          </div><!-- /.col -->
      </div><!-- /.container-fluid -->
</div>

<div class="content">
    <div class="container-fluid">

 
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
 
    
        {{-- {{dd($Booking[1]->Transaksi->bukti)}} --}}
    <table class="table table-hover">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>Nama Pemboking</th>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th>Total</th>
            <th>Bukti Transfer</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        @foreach ($Booking as $pesan)
        <tr>
            <td class="text-center">{{ $loop->iteration }}</td>
            <td>{{ $pesan->nama }}</td>
            <td>{{ $pesan->tanggal_booking }}</td>
            <td>{{ $pesan->awal }} - {{ $pesan->akhir }}</td>
            <td>{{ $pesan->Transaksi->total }}</td>
            <td>
              <a href="{{ asset('bukti/'. $pesan->Transaksi->bukti) }}" target="_blank" rel="noopener noreferrer">Lihat Gambar</a>
            </td>
            <td class="text-center">
              <div class="row">
                <div class="col">
                  @if ($pesan->Transaksi->konfirmasi=='Proses')
                  <form action="{{ route('transaksi-konfirmasi.update',$pesan->Transaksi->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="konfirmasi" value="Berhasil">
                    <button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('Apakah Anda yakin ingin Konfirmasi data ini?')">Konfirmasi</button>
                  </form>
                </div>
                <div class="col">
                  <form action="{{ route('transaksi-konfirmasi.update',$pesan->Transaksi->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="konfirmasi" value="Gagal">
                    <button type="submit" class="btn btn-warning btn-sm" onclick="return confirm('Apakah Anda yakin ingin membatalkan data ini?')">Tolak</button>
                  </form>  
                </div>
                @endif     
                <div class="col">
                  <form action="{{ route('boking.destroy',$pesan->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                  </form>
                </div>
              </div>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="card-footer">
{{ $Booking->links() }}
        
    </div>

@endsection