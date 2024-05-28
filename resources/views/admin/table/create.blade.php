@extends('layouts.main')

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

    <body>

        <div class="content-wrapper">

            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow-sm rounded">
                            <div class="card-body">
                                <form action="{{ url('admin/table/store') }}" method="POST">

                                    @csrf

                                    <div class="row">

                                        <div class="col">
                                            <div class="form-group">
                                                <label class="font-weight-bold">name</label>
                                                <input type="text"
                                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                                    value="{{ old('name') }}" placeholder="Masukkan Judul Post">

                                                <!-- error message untuk title -->
                                                @error('name')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold">Email</label>
                                            <input type="text" class="form-control @error('email') is-invalid @enderror"
                                                name="email" value="{{ old('email') }}"
                                                placeholder="Masukkan Judul Post">

                                            <!-- error message untuk title -->
                                            @error('email')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                    </div>


                                    <div class="form-group">
                                        <label class="font-weight-bold">Password</label>
                                        <input type="text" class="form-control @error('password') is-invalid @enderror"
                                            name="password" value="{{ old('password') }}" placeholder="Masukkan Judul Post">

                                        <!-- error message untuk title -->
                                        @error('password')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">Password Confirmation</label>
                                        <input type="text"
                                            class="form-control @error('password_confirm') is-invalid @enderror"
                                            name="password_confirm" value="{{ old('password_confirm') }}"
                                            placeholder="Masukkan Judul Post">

                                        <!-- error message untuk title -->
                                        @error('password_confirm')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">Usertype</label>
                                        <input type="text" class="form-control @error('usertype') is-invalid @enderror"
                                            name="usertype" value="{{ old('usertype') }}" placeholder="Masukkan Judul Post">

                                        <!-- error message untuk title -->
                                        @error('usertype')
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
