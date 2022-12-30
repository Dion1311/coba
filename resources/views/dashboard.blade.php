<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="Dion" content="" />
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/b0cef64d70.js" crossorigin="anonymous"></script>
        <link href="css/styles.css" rel="stylesheet" />
        <title>Dashboard Project Akhir Pemrograman Framework</title>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-light">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3 fw-bold" href="{{ url('dashboard') }}">Sistem Informasi</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

            <!-- Navbar-->
            <ul class="navbar-nav ms-auto me-3">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('pengaturan') }}">Pengaturan</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item">Keluar</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Halaman Awal</div>
                            <a class="nav-link" href="{{url('dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user-tie"></i></div>
                                Data Guru
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ url('tampil-dosen') }}">Tampilkan Data Guru</a>
                                </nav>
                            </div>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ url('input-dosen') }}">Input Data Guru</a>
                                </nav>
                            </div>
{{-- ================ --}}
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                                Data Siswa
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link " href="{{ url('tampil-mahasiswa') }}">
                                        Data Siswa
                                    </a>
                                </nav>
                            </div>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link " href="{{ url('input-mahasiswa') }}">
                                        Input Data Siswa
                                    </a>
                                </nav>
                            </div>
{{-- =============== --}}
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePagesTugas" aria-expanded="false" aria-controls="collapsePagesTugas">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-book"></i></div>
                                Data Tugas
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePagesTugas" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link " href="{{ url('tampil-tugas') }}">
                                        Data Tugas
                                    </a>
                                </nav>
                            </div>
                            <div class="collapse" id="collapsePagesTugas" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link " href="{{ url('input-tugas') }}">
                                        Input Data Tugas
                                    </a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small fw-bold">Masuk Sebagai:</div>
                        {{auth()->user()->name}}
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Resume Data </li>
                        </ol>
                        <div class="row">
                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-4 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs fw-bold text-uppercase mb-1">
                                                    Jumlah Siswa</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlah_mhs }}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fa-solid fa-user fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-4 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs fw-bold text-uppercase mb-1">
                                                    Jumlah Guru</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlah_dosen }}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fa-solid fa-user-tie fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs fw-bold text-uppercase mb-1">
                                                    Total Tugas</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlah_tugas }}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fa-solid fa-book fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Jumlah Guru Berdasarkan Tetap dan Kontrak
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Jumlah Siswa Berdasarkan Gender
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Tugas Proyek Akhir Framework - Yoannes Dion Pradvenanta G.211.20.0083</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script>
            // Set new default font family and font color to mimic Bootstrap's default styling
            Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
            Chart.defaults.global.defaultFontColor = '#292b2c';
            // Area Chart Example
            var ctx = document.getElementById("myAreaChart");
            var _ydata=JSON.parse('{!! json_encode($umurs) !!}');
            var _xdata=JSON.parse('{!! json_encode($umurCount) !!}');
            var myLineChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: _ydata,
                    datasets: [{
                    label: "Jumlah ",
                    lineTension: 0.3,
                    backgroundColor: "rgba(133,78,74,0.2)",
                    borderColor: "rgba(133,78,74,1)",
                    pointRadius: 5,
                    pointBackgroundColor: "rgba(133,78,74,1)",
                    pointBorderColor: "rgba(255,255,255,0.8)",
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(133,78,74,1)",
                    pointHitRadius: 50,
                    pointBorderWidth: 2,
                    data: _xdata,
                    }],
                },
                options: {
                scales: {
                xAxes: [{
                    // time: {
                    //   unit: 'date'
                    // },
                    gridLines: {
                    display: false
                    },
                    ticks: {
                    maxTicksLimit: 7
                    }
                }],
                yAxes: [{
                    ticks: {
                    min: 0,
                    max: {{ $jumlah_dosen }},
                    maxTicksLimit: 5
                    },
                    gridLines: {
                    color: "rgba(0, 0, 0, .125)",
                    }
                }],
                },
                legend: {
                display: false
                }
            }
            });

        </script>
        <script>
            // Set new default font family and font color to mimic Bootstrap's default styling
            Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
            Chart.defaults.global.defaultFontColor = '#292b2c';
            // Bar Chart Example
            var ctx = document.getElementById("myBarChart");
            var _ydata=JSON.parse('{!! json_encode($genders) !!}');
            var _xdata=JSON.parse('{!! json_encode($genderCount) !!}');
            var myLineChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: _ydata,
                datasets: [{
                label: "Jumlah",
                backgroundColor: "rgba(133,78,74,1)",
                borderColor: "rgba(133,78,74,1)",
                data: _xdata,
                }],
            },
            options: {
                scales: {
                xAxes: [{
                    // time: {
                    // unit: 'month'
                    // },
                    gridLines: {
                    display: true
                    },
                    ticks: {
                    maxTicksLimit: 6
                    }
                }],
                yAxes: [{
                    ticks: {
                    min: 0,
                    max: {{  $jumlah_mhs  }},
                    maxTicksLimit: 5
                    },
                    gridLines: {
                    display: true
                    }
                }],
                },
                legend: {
                display: false
                }
            }
            });

        </script>
    </body>
</html>
