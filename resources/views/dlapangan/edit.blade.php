@extends('admin.template')
 
@section('konten')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Lapangan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin">Home</a></li>
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
            <a class="btn btn-secondary" href="/admin/datalapangan"> Back</a>
            </div>
        </div>
    </div>

 
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<form action="{{ route('dlapangan.update',$dt->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
 
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h5><strong>Nama Lapangan:</strong></h5>
                <input type="text" name="nama" class="form-control" placeholder="nama" value="{{ $dt->nama }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h5><strong>Jenis Lapangan:</strong></h5>
                <select name="jenis_lapangan"  class="form-select form-select-sm" aria-label=".form-select-sm example" >
                    <option selected>{{ $dt->jenis_lapangan }}</option>
                    <option value="rumput">rumput</option>
                    <option value="matras">matras</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h5><strong>Harga per jam</strong></h5>
                <input type="number" name="harga" class="form-control" placeholder="Harga" value="{{ $dt->harga }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h5><strong>Foto Lapangan :</strong></h5>
                <img src="{{ asset('/img/'. $dt->foto_lapangan ) }}" heigth="50px" width="90px">
                <input type="file" name="foto_lapangan" class="form-control" placeholder="foto lapangan">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
 
</form>
@endsection