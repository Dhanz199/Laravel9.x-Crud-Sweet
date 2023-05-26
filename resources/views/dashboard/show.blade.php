<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            background-color: white;
        }

        ;
    </style>

</head>

<body>
    <div class="container">
        <h1>Selamat Datang</h1>
        @yield('content')
        @yield('index')
        @auth
        <p>Welcome <b>{{ Auth::user()->name }}</b></p>
        <!-- <a class="btn btn-primary" href="{{ route('password') }}">Change Password</a> -->
        <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
        @endauth
        @guest
        <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
        <a class="btn btn-info" href="{{ route('register') }}">Register</a>
        @endguest

        <div class="mb-3 mt-5">
            <h1>{{ $data->nama_rumah_sakit }}</h1>
            <p>
                <b>Id Rumah Sakit</b> {{ $data->id_rs }}
            </p>
            <h1>{{ $data->alamat }}</h1>
            <p>
                <b>Id Rumah Sakit</b> {{ $data->id_rs }}
            </p>
            <a href="" class="btn btn-primary">Add Rumah Sakit</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Rumah Sakit</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $key => $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_rumah_sakit }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->telepon }}</td>
                    <td>
                        <a class="btn btn-outline-primary" href="{{ url('/dashboard/'.$item->id_rs) }}">Detail</a>
                        <a  class="btn btn-primary" href="{{ url('/dashboard/'.$item->id_rs) }}">Edit</a>
                        <button class="btn btn-danger btn-delete" data-id="{{ $item->id_rs }}">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        
        <div class="mb-3 mt-5">
            <a href="" class="btn btn-outline-primary">Lihat Data Pasien</a>
        </div>
    </div>





</body>
<script src="{{ asset('js/app.js') }}"></script>

</html>