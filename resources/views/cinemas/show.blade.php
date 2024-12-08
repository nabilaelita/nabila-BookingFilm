<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Cinema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <img src="{{ asset('/storage/cinemas/'.$cinema->image) }}" class="rounded" style="width: 100%">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h3>{{ $cinema->title }}</h3>
                        <hr/>
                        <p><strong>Booking Date:</strong> {{ $cinema->booking_date }}</p>
                        <p><strong>Duration:</strong> {{ $cinema->duration }}</p>
                        <p><strong>Genre:</strong> {{ ucfirst($cinema->genre) }}</p>
                        <p><strong>Harga Tiket:</strong> Rp {{ number_format($cinema->harga_tiket, 2, ',', '.') }}</p> <!-- Menampilkan harga tiket -->
                        <hr/>
                        <code>
                            <p>{!! $cinema->description !!}</p>
                        </code>
                        <hr/>
                        <p>Available Seats: {{ $cinema->available_seats }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
