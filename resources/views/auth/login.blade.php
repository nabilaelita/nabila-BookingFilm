<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Cinemas Movie</title>
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
    @if(Auth::check())
        <li class="nav-item">
            <a class="nav-link" href="{{ route('cinemas.index') }}">List Movie</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('cinemas.create') }}">Add Movie</a>
        </li>
        <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="nav-link btn btn-link" style="color: inherit; text-decoration: none;">Logout</button>
            </form>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Admin</a>
        </li>
    @endif
</ul>
        </div>
    </div>
</nav>

<!-- End of Navbar -->

<!-- Login Form -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <h3 class="text-center my-4">Admin Login</h3>
                    <hr>
                    <form action="{{ route('login.post') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        <div class="form-group d-grid">
                            <button type="submit" class="btn btn-success">Login</button>
                        </div>
                    </form>

                    <!-- Link to Register -->
                    <div class="text-center mt-3">
                        <p>Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a></p>
                    </div>
                    <div class="container mt-5">
    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif
    ...
</div>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>
