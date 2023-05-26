@extends('app')
@section('content')
<div class="row justify-content-around mx-auto p-5">
    <div class="col-12">
        <div class="row justify-content-around mx-auto p-5">
            <img src="{{ asset('img/logo-login.jpg') }}" alt="Deskripsi Gambar" 
            style="width: 300px;">
        </div>
    </div>
    <div class="col-4">
        <div class="card-body">
            <h5 class="card-title text-center">@section('content')</h5>
            @if(session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
            @endif
            @if($errors->any())
            @foreach($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
            @endif
            <form action="{{ route('login.action') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputUsername1" class="form-label">Username <span class="text-danger">*</span></label>
                    <input type="username" name="username" placeholder="Ketikkan Username Anda...." class="form-control" value="{{ old('username') }}" id="exampleInputUsername1" aria-describedby="usernameHelp">
                    <div id="usernameHelp" class="form-text">Silahkan Login dengan menggunakan username</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password <span class="text-danger">*</span></label>
                    <input type="password" name="password" placeholder="Ketikkan Password Anda...." class="form-control" id="exampleInputPassword1">
                </div>

                <div class="container">
                    <div class="row justify-content-between">

                        <div class="d-grid gap-1">
                            <button class="btn btn-outline-primary">Login</button>

                        </div>

                        <!-- <div class="col-md-3 offset-md-4"> 
                                        <button type="button" class="btn btn-outline-primary">Register</button>
                                    </div> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection