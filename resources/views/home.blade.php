<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Cinemas Movie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: lightgray">
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
    <div class="container mt-5">
    <h3 class="text-center">Welcome to Cinemas Movie</h3>
    <div class="row justify-content-center">
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ asset('images/miracle_incell-7.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ asset('images/download (2).jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ asset('images/Mencuri_Raden_Saleh.jpeg') }}" class="card-img-top" alt="Mencuri Raden Saleh">
                <div class="card-body">
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ asset('images/download (1).jpeg') }}" class="card-img-top" alt="Gambar 1">
                <div class="card-body">
                </div>
            </div>
            </div>
        </div>
    </div>
</div>


        <div id="carouselExample" class="carousel slide mt-4" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="{{ asset('images/Beast & Belle.jpeg') }}" alt="Beast & Belle" style="display: block; margin-left: auto; margin-right: auto; width: 50%;">

                </div>
                <div class="carousel-item">
                <img src="{{ asset('images/Dua milyar_.jpeg') }}" alt="Mencuri Raden Saleh" style="display: block; margin-left: auto; margin-right: auto; width: 50%;">
                </div>
                <div class="carousel-item">
                <img src="{{ asset('images/download (6).jpeg') }}" alt="Dilan 1990" style="display: block; margin-left: auto; margin-right: auto; width: 50%;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
 

</body>
</html>
