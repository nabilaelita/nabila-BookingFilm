<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Cinema - SantriKoding.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('cinemas.update', $cinema->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">IMAGE</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                                
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">TITLE</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $cinema->title) }}" placeholder="Masukkan Judul Cinema">
                                
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">DESCRIPTION</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="5" placeholder="Masukkan Deskripsi Cinema">{{ old('description', $cinema->description) }}</textarea>
                                
                                @error('description')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">BOOKING DATE</label>
                                <input type="date" class="form-control @error('booking_date') is-invalid @enderror" name="booking_date" value="{{ old('booking_date', $cinema->booking_date) }}">
                                
                                @error('booking_date')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">DURATION</label>
                                <input type="text" class="form-control @error('duration') is-invalid @enderror" name="duration" value="{{ old('duration', $cinema->duration) }}" placeholder="Masukkan Durasi Cinema">
                                
                                @error('duration')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">GENRE</label>
                                <select class="form-control @error('genre') is-invalid @enderror" name="genre">
                                    <option value="">Pilih Genre</option>
                                    <option value="fantasi" {{ (old('genre', $cinema->genre) == 'fantasi') ? 'selected' : '' }}>Fantasi</option>
                                    <option value="action" {{ (old('genre', $cinema->genre) == 'action') ? 'selected' : '' }}>Action</option>
                                    <option value="horor" {{ (old('genre', $cinema->genre) == 'horor') ? 'selected' : '' }}>Horor</option>
                                    <option value="romance" {{ (old('genre', $cinema->genre) == 'romance') ? 'selected' : '' }}>Romance</option>
                                    <option value="keluarga" {{ (old('genre', $cinema->genre) == 'keluarga') ? 'selected' : '' }}>Keluarga</option>
                                </select>
                                
                                @error('genre')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">AVAILABLE SEATS</label>
                                        <input type="number" class="form-control @error('available_seats') is-invalid @enderror" name="available_seats" value="{{ old('available_seats', $cinema->available_seats) }}" placeholder="Masukkan Jumlah Kursi Tersedia">
                                        
                                        @error('available_seats')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">TICKET PRICE</label>
                                        <input type="number" class="form-control @error('harga_tiket') is-invalid @enderror" name="harga_tiket" value="{{ old('harga_tiket', $cinema->harga_tiket) }}" placeholder="Masukkan Harga Tiket">
                                        
                                        @error('harga_tiket')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-md btn-primary me-3">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
</body>
</html>
