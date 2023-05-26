<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
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
        <div class=" mb-3 mt-5">
            <a href="" class="btn btn-outline-primary">Lihat Data Pasien</a>
            <a href="{{ route('dashboard.create') }}" class="btn btn-primary">Add Rumah Sakit</a>
        </div>
        @endauth

        @guest
        <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
        <a class="btn btn-info" href="{{ route('register') }}">Register</a>
        @endguest

        
        @if($message = Session::get('success'))

        <p class="alert alert-success">{{ $message }}</p>

        @endif

        <table class="table table-striped" style="width:100%" id="example">
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
                    <input type="hidden" class="DeleteUsr_val" value="{{$item->id_rs}}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_rumah_sakit }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->telepon }}</td>
                    <td>
                        <!-- <a class="btn btn-outline-primary" href="{{ url('/dashboard/'.$item->id_rs) }}">Detail</a> -->

                        <!-- Button trigger modal Detail -->
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#ButtonDetail{{$item->id_rs}}">
                            Detail
                        </button>
                        <!-- Modal Detail-->
                        <div class="modal fade" id="ButtonDetail{{$item->id_rs}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Data Rumah Sakit</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <!-- <input type="text" class="form-control" id="e_id" name="id" value="{{$item->id_rs}}" /> -->
                                            <fieldset disabled>
                                                <div class="mb-3">
                                                    <label for="disabledTextInput" class="form-label">Nama Rumah Sakit</label>
                                                    <input type="text" id="disabledTextInput" id="e_name" class="form-control" value="{{$item->nama_rumah_sakit}}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="disabledSelect" class="form-label">Alamat</label>
                                                    <input type="text" id="disabledTextInput" class="form-control" value="{{$item->alamat}}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="disabledSelect" class="form-label">Email</label>
                                                    <input type="text" id="disabledTextInput" class="form-control" value="{{$item->email}}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="disabledSelect" class="form-label">Telepon</label>
                                                    <input type="text" id="disabledTextInput" class="form-control" value="{{$item->telepon}}">
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <a class="btn btn-primary" href="{{ url('/dashboard/'.$item->id_rs) }}">Edit</a> -->

                        <!-- Button trigger modal Update-->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ButtonEdit{{$item->id_rs}}">
                            Edit
                        </button>
                        <!-- Modal Update-->
                        <div class="modal fade" id="ButtonEdit{{$item->id_rs}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Rumah Sakit</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('dashboard.update', $item->id_rs) }}" method="POST" enctype="multipart/form-data">
                                            <!-- <input type="text" class="form-control" id="e_id" name="id" value="{{$item->id_rs}}" /> -->
                                            @csrf
                                            @method('PUT')
                                            <div class="mb-3">
                                                <label for="InputName" class="form-label">Nama Rumah Sakit</label>
                                                <input type="text" name="nama_rumah_sakit" class="form-control" value="{{$item->nama_rumah_sakit}}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="InputAlamat" class="form-label">Alamat</label>
                                                <input type="text" name="alamat" class="form-control" value="{{$item->alamat}}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="InputEmail" class="form-label">Email</label>
                                                <input type="email" name="email" class="form-control" value="{{$item->email}}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="InputTelepon" class="form-label">Telepon</label>
                                                <input type="text" name="telepon" class="form-control" value="{{$item->telepon}}">
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <button type="button" class="btn btn-danger DeleteData">DELETE</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        let table = new DataTable('#example');
    </script>

    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });

            $(`.DeleteData`).click(function(e) {
                e.preventDefault();

                var id_rs = $(this).closest("tr").find(`.DeleteUsr_val`).val();
                // alert(id_rs);
                Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    })
                    .then((willDelete) => {
                        if (willDelete.isConfirmed) {
                            var data = {
                                "_token": $('input[name=_token]').val(),
                                "id": id_rs,
                            };
                            $.ajax({
                                type: "DELETE",
                                url: `/dashboard/`+id_rs,
                                data: data,
                                success: function(response) {
                                    Swal.fire(
                                            'Deleted!',
                                            'Your file has been deleted.',
                                            'success'
                                        )
                                        .then((result) => {
                                            location.reload();
                                        });
                                }
                            });
                        }
                    });
            });
        });
    </script>
</body>

</html>