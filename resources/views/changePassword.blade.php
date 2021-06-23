@extends('layouts.utama')

@section('content')

<meta http-equiv="X-UA-Compatible" content="ie=edge">


  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/register.css">

<div class="container">
    <main class="d-flex align-items-center min-vh-100">
        <div class="container">
          <div class="card login-card">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="/img/register.png" class="login-card-img">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <div class="brand-wrapper">
                  <p class="login-card-title">Change Password User</p>

                <div class="card-body">
                    <form method="POST" action="{{ route('change.password') }}">

                        @csrf 

                         @foreach ($errors->all() as $error)

                            <p class="text-danger">{{ $error }}</p>

                         @endforeach 


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Current Password</label>

                            <div class="col-md-6">
                                <input id="password" class="form-control" type="password" name="current_password" autocomplete="current-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>

                            <div class="col-md-6">
                                <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">New Confirm Password</label>

                            <div class="col-md-6">
                                <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">

                            <div class="col-md-8 offset-md-4">

                                <button type="submit" class="btn btn-primary">

                                    Update Password

                                </button>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
@endsection