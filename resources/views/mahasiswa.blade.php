<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="mt-5">
            <h1 class="text-bold mb-4">Data Mahasiswa</h1>
            <table class="table">
                <thead>
                  <tr>
                    <tr>
                        <th>No</th>
                        <th>Nim</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                    </tr>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $mahasiswa)
                        <tr>
                            <th>{{$loop->iteration }}</th>
                            <td>{{$mahasiswa->nim}}</td>
                            <td>{{$mahasiswa->nama}}</td>
                            <td>{{$mahasiswa->alamat}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="container">
        <div class="mt-5">
            <form action="{{url('mahasiswa/create')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nim" class="form-label">Nim</label>
                    <input type="text" class="form-control" name="nim" id="nim" placeholder="Masukkan Nim">
                </div>

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="masukkan nama">
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat">
                </div>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    @include('sweetalert::alert')
</body>
</html>
