<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('/style/style.css') }}" />
    <title>Halaman Login</title>
</head>
<body>
    <section class="vh-100">
        @if(session('status'))
            <div class="alert alert-warning alert-dismissible fade show  text-center" role="alert">
                {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(session('status-error'))
        <div class="alert alert-danger alert-dismissible fade show position-absolute top-0 start-50" role="alert">
            {{ session('status-error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img
                    src="assets/img/login.jpg"
                    class="img-fluid"
                    alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form action="{{ url('login') }}" method="post">
                        @csrf
                        <h2><center>Sistem Informasi Sekolah</center></h2>
                        <br>
                        {{-- <h1 class="h3 mb-3 fw-normal">Selamat Datang</h1> --}}
                        <div class="form-outline mb-4">
                            <input type="text" name="username" class="form-control form-control-lg" id="form1Example13" placeholder="Nama Pengguna">
                            {{-- <label class="form-label" for="form1Example13">Username</label> --}}
                        </div>
                        <div class="form-outline mb-4">
                            <input type="password" name="password" class="form-control form-control-lg" id="floatingPassword" placeholder="Kata Sandi">
                            {{-- <label class="form-label" for="floatingPassword">Password</label> --}}
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="form1Example3" name="remember"/>
                            <label class="form-check-label" for="form1Example3"> Simpan Kata Sandi </label>
                        </div>
                        {{-- <div class="checkbox mb-3">
                            <label>
                            <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div> --}}
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk</button>
                    </form>
                    <br>
                    <p>Belum Mempunyai Akun?</p>
                    <a class="w-100 btn btn-lg btn-success" href="{{ url('registrasi') }}">Daftar</a>
                </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
