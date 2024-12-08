<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Cinemas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: lightgray">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cinemas Movie</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cinemas.home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cinemas.index') }}">List Movie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of Navbar -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Choose Your Favorite Cinema</h3>
                    <h5 class="text-center"><a href="#">Cinema.com</a></h5>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('cinemas.create') }}" class="btn btn-md btn-success mb-3">ADD CINEMA</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">IMAGE</th>
                                    <th scope="col">TITLE</th>
                                    <th scope="col">BOOKING DATE</th>
                                    <th scope="col">DURATION</th>
                                    <th scope="col">GENRE</th>
                                    <th scope="col">AVAILABLE SEATS</th>
                                    <th scope="col">HARGA TIKET</th> <!-- Tambahkan header untuk harga tiket -->
                                    <th scope="col" style="width: 20%">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($cinemas as $cinema)
                                    <tr>
                                        <td class="text-center">
                                            <img src="{{ asset('/storage/cinemas/'.$cinema->image) }}" class="rounded" style="width: 150px">
                                        </td>
                                        <td>{{ $cinema->title }}</td>
                                        <td>{{ $cinema->booking_date }}</td>
                                        <td>{{ $cinema->duration }}</td>
                                        <td>{{ ucfirst($cinema->genre) }}</td>
                                        <td>{{ $cinema->available_seats }}</td>
                                        <td>{{ number_format($cinema->harga_tiket, 2) }}</td> <!-- Menampilkan harga tiket -->
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('cinemas.destroy', $cinema->id) }}" method="POST">
                                                <a href="{{ route('cinemas.show', $cinema->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                                <a href="{{ route('cinemas.edit', $cinema->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center alert alert-danger"> <!-- Sesuaikan colspan -->
                                            Data Cinemas belum Tersedia.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $cinemas->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>
