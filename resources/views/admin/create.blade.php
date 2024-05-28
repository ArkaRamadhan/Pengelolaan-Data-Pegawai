@extends('layouts.main');


@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tambah Data Post - SantriKoding.com</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body  style="background-color: #f4f6f9">

        <div class="content-wrapper">
            <div class="container mt-5 mb-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow-sm rounded">
                            <div class="card-body">
                                <form action="{{ url('admin/store') }}" method="POST" enctype="multipart/form-data">

                                    @csrf

                                    <div class="form-group">
                                        <label class="font-weight-bold">GAMBAR</label>
                                        <input type="file" class="form-control @error('image') is-invalid @enderror"
                                            name="image">

                                        <!-- error message untuk title -->
                                        @error('image')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="row">

                                        <div class="col">
                                            <div class="form-group">
                                                <label class="font-weight-bold">nama</label>
                                                <input type="text"
                                                    class="form-control @error('nama') is-invalid @enderror" name="nama"
                                                    value="{{ old('nama') }}" placeholder="Masukkan Judul Post">

                                                <!-- error message untuk title -->
                                                @error('nama')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-group">
                                                <label class="font-weight-bold">Jenis Kelamin</label>
                                                <select class="form-select @error('jenis_kelamin') is-invalid @enderror"
                                                    aria-label="Default select example" name="jenis_kelamin"
                                                    value="{{ old('jenis_kelamin') }}">
                                                    <option selected>Pilih jenis kelamin</option>
                                                    <option value="laki-laki" name="laki-laki">laki-laki</option>
                                                    <option value="perempuan" name="perempuan">perempuan</option>
                                                </select>

                                                <!-- error message untuk title -->
                                                @error('jenis_kelamin')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>


                                    <div class="form-group">
                                        <label class="font-weight-bold">alamat</label>
                                        <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                            name="alamat" value="{{ old('alamat') }}" placeholder="Masukkan Judul Post">

                                        <!-- error message untuk title -->
                                        @error('alamat')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">tempat lahir</label>
                                        <input type="text"
                                            class="form-control @error('tempat_lahir') is-invalid @enderror"
                                            name="tempat_lahir" value="{{ old('tempat_lahir') }}"
                                            placeholder="Masukkan Judul Post">

                                        <!-- error message untuk title -->
                                        @error('tempat_lahir')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="row">

                                        <div class="col">
                                            <div class="form-group">
                                                <label class="font-weight-bold">tanggal lahir</label>
                                                <input type="date"
                                                    class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                                    name="tanggal_lahir" value="{{ old('tanggal_lahir') }}"
                                                    placeholder="Masukkan Judul Post">

                                                <!-- error message untuk title -->
                                                @error('tanggal_lahir')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-group">
                                                <label class="font-weight-bold">tanggal masuk</label>
                                                <input type="date"
                                                    class="form-control @error('tanggal_masuk') is-invalid @enderror"
                                                    name="tanggal_masuk" value="{{ old('tanggal_masuk') }}"
                                                    placeholder="Masukkan Judul Post">

                                                <!-- error message untuk title -->
                                                @error('tanggal_masuk')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>



                                    <div class="form-group">
                                        <label class="font-weight-bold">jabatan</label>
                                        <input type="text" class="form-control @error('jabatan') is-invalid @enderror"
                                            name="jabatan" value="{{ old('jabatan') }}" placeholder="Masukkan Judul Post">

                                        <!-- error message untuk title -->
                                        @error('jabatan')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label class="font-weight-bold">JOB</label>
                                        <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5"
                                            placeholder="Masukkan Konten Post">{{ old('content') }}</textarea>

                                        <!-- error message untuk content -->
                                        @error('content')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                    <button type="reset" class="btn btn-md btn-warning">RESET</button>
                                    <a href="{{ url('admin/dashboard') }}" class="btn btn-md btn-success">KEMBALI</a>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            CKEDITOR.editorConfig = function(config) {
                // Mengatur autoParagraph menjadi false
                config.autoParagraph = false;
            };
        </script>
        <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('content');
        </script>
    </body>

    </html>
@endsection
