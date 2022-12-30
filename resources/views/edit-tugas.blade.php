<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Edit Tugas</title>
</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                Edit Data Tugas
            </div>
            <div class="card-body">
                <form name="update-data-mahasiswa" id="update-data-mahasiswa" method="post" action="{{url('update-tugas')}}/{{ $post->id }}">
                @csrf
                    <div class="form-group">
                        <label for="tugas">Tugas</label>
                        <input type="text" id="tugas" name="tugas" class="form-control @error('tugas') is-invalid @enderror""  value="{{ $post->tugas }}">
                        @error('tugas')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggal_pemberian">Pemberian Tugas</label>
                        <input type="date" id="tanggal_pemberian" name="tanggal_pemberian" class="form-control @error('tanggal_pemberian') is-invalid @enderror""  value="{{ $post->tanggal_pemberian }}">
                        @error('tanggal_pemberian')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="deadline">Deadline</label>
                        <input type="date" id="deadline" name="deadline" class="form-control @error('deadline') is-invalid @enderror""  value="{{ $post->deadline }}">
                        @error('deadline')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="dosen" class="mb-2 mt-1">Dosen</label>
                        <select class="form-control @error('dosen') is-invalid @enderror" id="position-option" name="id_dosen">
                            @foreach ($dosen as $item)
                                <option value="{{ $item->nidn }}" {{ $post->dosen_id == $item->nidn? 'selected' : null }}{{ old('id_dosen')==$item->nidn? 'selected':null }}>{{ $item->nama }}</option>
                            @endforeach
                        </select>
                        @error('dosen')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- <div class="form-group">
                        <label for="dosen">Dosen</label>
                        <input type="text" id="dosen" name="dosen" class="form-control @error('dosen') is-invalid @enderror"" value="{{ $post->dosen }}">
                        @error('dosen')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div> --}}
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" id="keterangan" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror"" value="{{ $post->keterangan }}">
                        @error('keterangan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    <a class="btn btn-danger mt-2" href="{{ url('tampil-tugas') }}">Batal</a>
                </form>
            </div>
        </div>
        </div>
</body>
</html>
