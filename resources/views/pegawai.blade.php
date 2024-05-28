@extends('layouts.main');


@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Table Pegawai</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tabel Pegawai</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->



                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DataTable with default features</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Tempat Lahir</th>
                                    <th>tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jabatan</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Content</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($posts as $post)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td class="text-center">
                                            <img src="{{ asset('/storage/posts/' . $post->image) }}" class="rounded"
                                                style="width: 90px">
                                        </td>
                                        <td>{{ $post->nama }}</td>
                                        <td>{{ $post->alamat }}</td>
                                        <td>{{ $post->tempat_lahir }}</td>
                                        <td>{{ $post->tanggal_lahir }}</td>
                                        <td>{{ $post->jenis_kelamin }}</td>
                                        <td>{{ $post->jabatan }}</td>
                                        <td>{{ $post->tanggal_masuk }}</td>
                                        <td>{{ $post->content }}</td>

                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data Post belum Tersedia.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                        {{-- {{ $users->links() }} --}}
                    </div>
                    <!-- /.card-body -->
                </div>
                <footer class="main-footer" style="width: 100%;margin-left:0.5px;position: relative; margin-top:11rem;">
                    <strong>Copyright &copy; 2024 <a href="mailto:arkaramadhan1933@gmail.com">Arkha Ramadhan</a>.</strong>
                    All rights reserved.
                    <div class="float-right d-none d-sm inline-block">
                        <b>Version</b> 3.2.0
                    </div>
                </footer>

                <script>
                    $(function() {
                        $("#example1").DataTable({
                            "responsive": true,
                            "lengthChange": false,
                            "autoWidth": false,
                            "buttons": ["copy", "csv", "excel", "pdf", "print", ]
                        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                        $('#example2').DataTable({
                            "paging": true,
                            "lengthChange": false,
                            "searching": false,
                            "ordering": true,
                            "info": false,
                            "autoWidth": false,
                            "responsive": true,
                        });
                    });
                </script>
            @endsection

