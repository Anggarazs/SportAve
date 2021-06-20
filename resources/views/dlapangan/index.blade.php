@extends('admin.template')
 
@section('konten')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Lapangan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Data Lapangan</li>
            </ol>
          </div><!-- /.col -->
      </div><!-- /.container-fluid -->
</div>

<div class="content">
    <div class="container-fluid">
    <div class="row mt-2 mb-3">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <a class="btn btn-success" href="{{ route('dlapangan.create') }}"> Create Lapangan</a>
            </div>
        </div>
    </div>

 
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
 
    <table class="table table-hover">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>Nama Lapangan</th>
            <th>Jenis Lapangan</th>
            <th>Harga per jam</th>
            <th>Gambar Lapangan</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        @foreach ($dt as $data)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->jenis_lapangan }}</td>
            <td>{{ $data->harga }}</td>
            <td><a href="{{ asset('img/'. $data->foto_lapangan ) }}" target="_blank" rel="noopener noreferrer">Lihat Gambar</a></td>
            <td class="text-center">
                <form action="{{ route('datalapangan.destroy',$data->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a class="btn btn-primary btn-sm" href="{{ url('/admin/editlapangan',$data->id) }}">Edit</a>
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="card-footer">
         {{ $dt->links() }}
        
    </div>

@endsection