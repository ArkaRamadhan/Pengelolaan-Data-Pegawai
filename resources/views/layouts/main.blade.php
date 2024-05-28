<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/summernote/summernote-bs4.min.css') }}">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
    <style>
        .logout:hover {
            font-size: large;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('lte/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo"
                height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="margin-top: -24px">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->


            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{ asset('lte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Arkha</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar" style="z-index: -1; position:absolute">
                <!-- Sidebar user panel (optional) -->
                {{-- <a href="#" class="d-block">Alexander Pierce</a> --}}

                <!-- Collect the nav links, forms, and other content for toggling -->
                <ul class="nav navbar-nav navbar-right" style="position: relative; margin-left:30px">
                    <li class="dropdown" style="margin-top: 1rem">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            style="margin-left: -30px; font-size:0.8rem;"><i class="fa fa-user"></i>
                            {{ Auth::user()->email }} </a>
                        <ul class="dropdown-menu" style="position:absolute; z-index:1000000;">
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('logout') }}" style="color: rgb(54, 49, 49); margin-left:10px"
                                    onMouseOver="this.style.color='red'"><i class="fa fa-power-off logout"></i> Log
                                    Out</a></li>
                        </ul>
                    </li>
                </ul>

                <hr style="background-color: #6c757d; margin-top:1rem;">


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    @if (Auth::user()->usertype == 'admin')
                                        <li class="nav-item">
                                            <a href="{{ url('admin/dashboard') }}" class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Dashboard</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('admin/table/dashboard') }}" class="nav-link  {{ Request::is('admin/table/dashboard') ? 'active' : '' }}">
                                              <i class="far fa-circle nav-icon"></i>
                                              <p>Table User</p>
                                            </a>
                                          </li>
                                        <li class="nav-item">
                                            <a href="{{ url('admin/pegawai') }}" class="nav-link  {{ Request::is('admin/pegawai') ? 'active' : '' }}">
                                              <i class="far fa-circle nav-icon"></i>
                                              <p>Table Pegawai</p>
                                            </a>
                                          </li>
                                        @elseif(Auth::user()->usertype == 'supervisor')
                                        <li class="nav-item">
                                            <a href="{{ url('supervisor/dashboard') }}" class="nav-link  {{ Request::is('supervisor/dashboard') ? 'active' : '' }}">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Dashboard</p>
                                            </a>
                                        </li>
                                          <li class="nav-item">
                                            <a href="{{ url('supervisor/pegawai') }}" class="nav-link  {{ Request::is('supervisor/pegawai') ? 'active' : '' }}">
                                              <i class="far fa-circle nav-icon"></i>
                                              <p>Table Pegawai</p>
                                            </a>
                                          </li>
                                        @elseif(Auth::user()->usertype == 'user')
                                        <li class="nav-item">
                                            <a href="{{ url('dashboard') }}" class="nav-link  {{ Request::is('dashboard') ? 'active' : '' }}">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Dashboard</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('supervisor/pegawai') }}" class="nav-link  {{ Request::is('supervisor/pegawai') ? 'active' : '' }}">
                                              <i class="far fa-circle nav-icon"></i>
                                              <p>Table Pegawai</p>
                                            </a>
                                          </li>
                                        <li class="nav-item">
                                            <a href="{{ url('tabel_user') }}" class="nav-link  {{ Request::is('tabel_user') ? 'active' : '' }}">
                                              <i class="far fa-circle nav-icon"></i>
                                              <p>Table User</p>
                                            </a>
                                          </li>
                                    @endif
                                </li>
                            </ul>
                        </li>
                </nav>

                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        @yield('content')
        <!-- Content Wrapper. Contains page content -->

        <!-- /.content-wrapper -->



        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('lte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('lte/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('lte/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('lte/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('lte/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('lte/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('lte/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('lte/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('lte/dist/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('lte/dist/js/pages/dashboard.js') }}"></script>

    <!-- jQuery -->
    <script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('lte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('lte/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('lte/dist/js/demo.js') }}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('lte/plugins/chart.js/Chart.bundle.js') }}"></script>
    <script src="{{ asset('lte/plugins/chart.js/Chart.bundle.min.js') }}"></script>


    <!-- ChartJS -->
    <script src="{{ asset('lte/plugins/chart.js/Chart.min.js') }}"></script>


    <!-- Page specific script -->
    @if (Auth::user()->usertype == 'user')
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    @endif
    @if (Auth::user()->usertype == 'admin')
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis" ]
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
    @endif
    @if (Auth::user()->usertype == 'supervisor')
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
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
    @endif

    <script>
        // Mencari elemen dropdown
        var dropdownToggle = document.querySelector('.dropdown-toggle');

        // Menambahkan event listener untuk saat klik pada elemen dropdown
        dropdownToggle.addEventListener('click', function(event) {
            // Mencegah perilaku default dari link
            event.preventDefault();

            // Mengambil dropdown-menu terkait
            var dropdownMenu = dropdownToggle.nextElementSibling;

            // Memeriksa apakah dropdown-menu sedang ditampilkan
            var isShown = dropdownMenu.classList.contains('show');

            // Menutup semua dropdown-menu yang sedang terbuka
            var allDropdowns = document.querySelectorAll('.dropdown-menu');
            allDropdowns.forEach(function(menu) {
                menu.classList.remove('show');
            });

            // Toggle dropdown-menu
            if (!isShown) {
                dropdownMenu.classList.add('show');
            }
        });

        // Menutup dropdown saat klik di luar dropdown-menu
        window.addEventListener('click', function(event) {
            var targetElement = event.target;

            // Memeriksa apakah target klik berada dalam dropdown-menu
            var isInsideDropdown = targetElement.closest('.dropdown');

            // Jika tidak ada dalam dropdown, tutup semua dropdown-menu
            if (!isInsideDropdown) {
                var allDropdowns = document.querySelectorAll('.dropdown-menu');
                allDropdowns.forEach(function(menu) {
                    menu.classList.remove('show');
                });
            }
        });
    </script>

    <script>
        $(function() {
            var salesChartCanvas = document.getElementById('revenue-chart-canvas').getContext('2d')
            // $('#revenue-chart').get(0).getContext('2d');

            var salesChartData = {
                labels: ['Laki-laki', 'Perempuan'],
                datasets: [{
                    label: 'Jenis Kelamin',
                    backgroundColor: ['rgba(60,141,188,0.9)',
                    'rgba(255,105,180,0.9)'], // Pink untuk Perempuan
                    borderColor: ['rgba(60,141,188,0.8)',
                    'rgba(255,105,180,0.8)'], // Pink untuk Perempuan
                    pointRadius: false,
                    pointColor: ['#3b8bba', 'rgba(255,105,180,1)'], // Pink untuk Perempuan
                    pointStrokeColor: ['rgba(60,141,188,1)',
                    'rgba(255,105,180,1)'], // Pink untuk Perempuan
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: ['rgba(60,141,188,1)',
                    'rgba(255,105,180,1)'], // Pink untuk Perempuan
                    data: [{{ $maleCount }}, {{ $femaleCount }}]
                }]
            };

            var salesChartOptions = {
                maintainAspectRatio: false,
                responsive: true,
                legend: {
                    display: true
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            display: false
                        }
                    }],
                    yAxes: [{
                        gridLines: {
                            display: false
                        }
                    }]
                }
            };

            // This will get the first returned node in the jQuery collection.
            // eslint-disable-next-line no-unused-vars
            var salesChart = new Chart(salesChartCanvas, { // lgtm[js/unused-local-variable]
                type: 'line',
                data: salesChartData,
                options: salesChartOptions
            })

            // Donut Chart
            var pieChartCanvas = $('#sales-chart-canvas').get(0).getContext('2d')
            var pieData = {
                labels: ['Laki-laki', 'Perempuan'],
                datasets: [{
                    label: 'Jenis Kelamin',
                    backgroundColor: ['rgba(60,141,188,0.9)', 'rgba(255,105,180,0.9)'], // Pink untuk Perempuan
                    borderColor: ['rgba(60,141,188,0.8)', 'rgba(255,105,180,0.8)'], // Pink untuk Perempuan
                    pointRadius: false,
                    pointColor: ['#3b8bba', 'rgba(255,105,180,1)'], // Pink untuk Perempuan
                    pointStrokeColor: ['rgba(60,141,188,1)', 'rgba(255,105,180,1)'], // Pink untuk Perempuan
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: ['rgba(60,141,188,1)', 'rgba(255,105,180,1)'], // Pink untuk Perempuan
                    data: [{{ $maleCount }}, {{ $femaleCount }}]
                }]
            }
            var pieOptions = {
                legend: {
                    display: true
                },
                maintainAspectRatio: false,
                responsive: true
            }
            // Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
            // eslint-disable-next-line no-unused-vars
            var pieChart = new Chart(pieChartCanvas, { // lgtm[js/unused-local-variable]
                type: 'doughnut',
                data: pieData,
                options: pieOptions
            })
        })
    </script>
</body>

</html>
