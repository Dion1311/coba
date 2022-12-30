<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b0cef64d70.js" crossorigin="anonymous"></script>
    <link href="css/styles.css" rel="stylesheet" />
    <title>Data Siswa</title>
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
                    <div class="small fw-bold">Masuk Sebagai</div>
                    {{auth()->user()->name}}
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container mt-5">
                    @if(session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if(session('status-deleted'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('status-deleted') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                    <div class="card">
                        <div class="card-header text-center font-weight-bold">
                            Daftar Data Siswa
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr class="table-primary">
                                        <th class=" text-center">NISN</th>
                                        <th class=" text-center">Nama</th>
                                        <th class=" text-center">Umur</th>
                                        <th class=" text-center">Jenis Kelamin</th>
                                        <th class=" text-center">Alamat</th>
                                        <th class=" text-center">Kelas</th>
                                        <th class=" text-center">Jurusan</th>
                                        <th class=" text-center" colspan=2>Aksi</th>
                                    </tr>
                                </thead>
                                @foreach($data as $isi)
                                <tr style="width: 10%">
                                    <td class="table-info text-center">
                                        {{ $isi -> nim }}
                                    </td>
                                    <td class="table-info text-center" style="width: 20%">
                                        {{ $isi -> nama }}
                                    </td>
                                    <td class="table-info text-center" style="width: 5%">
                                        {{ $isi -> umur }}
                                    </td>
                                    </td>
                                    <td class="table-info text-center" style="width: 15%">
                                        {{ $isi -> jenis_kelamin }}
                                    </td>
                                    <td class="table-info text-center" style="width: 15%">
                                        {{ $isi -> alamat }}
                                    </td>
                                    <td class="table-info text-center" style="width: 10%">
                                        {{ $isi -> kelas }}
                                    </td>
                                    <td class="table-info text-center" style="width: 10%">
                                        {{ $isi -> jurusan }}
                                    </td>
                                    <td class="table-info text-center" style="width: 5%">
                                        <a href="{{ url('delete-mahasiswa')}}/{{ $isi->nim }}">
                                            <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                        </a>
                                    </td>
                                    <td class="table-info text-center" style="width: 5%">
                                        <a href="{{url('edit-mahasiswa')}}/{{$isi->nim}}">
                                            <button type="submit" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                </table>
                        </div>
                    </div>
                    </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted"></div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script> --}}
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
