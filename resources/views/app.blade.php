<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Link CSS di sini -->
    <title>Booking Film</title>
</head>
<body>
    <div class="container">
        @include('component.navbar') <!-- Include navbar -->
        <div class="content">
            @yield('content') <!-- Tempat untuk konten spesifik halaman -->
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script> <!-- Link JavaScript di sini -->
</body>
</html>
