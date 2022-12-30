<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Halaman Edit Data Dosen</title >
</head>
<body>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                Edit Data Dosen
            </div>
            <div class="card-body">
                <form name="update-data-mahasiswa" id="update-data-mahasiswa" method="post" action="{{url('update-dosen')}}/{{ $post->nidn }}">
                @csrf
                    <div class="form-group">
                        <label for="nidn">NIDN</label>
                        <input type="text" id="nidn" name="nidn" class="form-control @error('nidn') is-invalid @enderror""  value="{{ $post->nidn }}">
                        @error('nidn')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror""  value="{{ $post->nama }}">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group w-50">
                        <label for="umur">Umur</label>
                        <input type="number" id="umur" name="umur" class="form-control @error('umur') is-invalid @enderror"  value="{{ $post->umur }}">
                        @error('umur')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group w-50">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror" >{{ $post->jenis_kelamin }}>
                            {{-- <option value="{{ $post->jenis_kelamin }}">{{ $post->jenis_kelamin}}</option> --}}
                            <option @php
                                $gender= $post->jenis_kelamin;
                            @endphp
                            @if ($gender == 'Pria')
                                {{ 'selected' }}
                            @endif value="Pria">Pria</option>
                            <option @php
                                $gender= $post->jenis_kelamin;
                            @endphp
                            @if ($gender == 'Wanita')
                                {{ 'selected' }}
                            @endif value="Wanita">Wanita</option>
                        </select>
                        @error('jenis_kelamin')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="pendidikan_terakhir">Kelas</label>
                        <input type="text" id="pendidikan_terakhir" name="pendidikan_terakhir" class="form-control @error('pendidikan_terakhir') is-invalid @enderror"" value="{{ $post->pendidikan_terakhir }}">
                        @error('pendidikan_terakhir')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="fakultas">Jurusan</label>
                        <input type="text" id="fakultas" name="fakultas" class="form-control @error('fakultas') is-invalid @enderror""  value="{{ $post->fakultas }}">
                        @error('fakultas')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    <a class="btn btn-danger mt-2" href="{{ url('tampil-dosen') }}">Batal</a>
                </form>
            </div>
        </div>
        </div>
</body>
</html>
{{-- Mahardika Surya Kusuma G.231.21.0141 --}}
