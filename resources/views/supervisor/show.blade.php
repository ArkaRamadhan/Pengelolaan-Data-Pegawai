@extends('layouts.main')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pegawai - XI-PPLG</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f4;
            color: #333;
        }
        .card {
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 10px;
        }
        .card-body {
            padding: 20px;
        }
        table {
            width: 100%;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f8f8f8;
        }
        .btn-primary {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>

<body style="background: #f4f6f9">
<div class="content-wrapper">
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <img src="{{ asset('storage/posts/' . $post->image) }}" class="w-100 rounded">
                        <hr>
                        <center>
                            <table border="1" style="">
                                <tr>
                                    <td><h4>NAMA</h4></td>
                                    <td><h4>: {{ $post->nama }}</h4></td>
                                </tr>
                                <tr>
                                    <td><h4>ALAMAT</h4></td>
                                    <td><h4>: {{ $post->alamat }}</h4></td>
                                </tr>
                                <tr>
                                    <td><h4>TEMPAT LAHIR</h4></td>
                                    <td><h4>: {{ $post->tempat_lahir }}</h4></td>
                                </tr>
                                <tr>
                                    <td><h4>TANGGAL LAHIR</h4></td>
                                    <td><h4>: {{ $post->tanggal_lahir }}</h4></td>
                                </tr>
                                <tr>
                                    <td><h4>GENDER</h4></td>
                                    <td><h4>: {{ $post->jenis_kelamin }}</h4></td>
                                </tr>
                                <tr>
                                    <td><h4>JABATAN</h4></td>
                                    <td><h4>: {{ $post->jabatan }}</h4></td>
                                </tr>
                                <tr>
                                    <td><h4>TANGGAL MASUK</h4></td>
                                    <td><h4>: {{ $post->tanggal_masuk }}</h4></td>
                                </tr>
                                <tr>
                                    <td><h4>JOB</h4></td>
                                    <td><h4>: {{ $post->content }}</h4></td>
                                </tr>
                            </table>
                            <a href="{{ url('supervisor/dashboard') }}" class="btn btn-primary" style="width: 100%">Kembali</a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
