<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
    body {
      font-size: 12px;
    }
  </style>
  <title>PWE</title>
</head>
<body>
  
  <div class="row">
    <div class="col">
      <p class="mb-3" style="font-size: 25px;">Data Mahasiswa</p>
      
      <table class="table table-bordered table-sm">
        <thead>
          <tr>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Fakultas</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($mahasiswa as $mhs)
            <tr>
              <td>{{ $mhs->nim }}</td>
              <td>{{ $mhs->nama }}</td>
              <td>{{ $mhs->alamat }}</td>
              <td>{{ $mhs->jenis_kelamin }}</td>
              <td>{{ $mhs->tgl_lahir }}</td>
              <td>{{ $mhs->jurusan }}</td>
              <td>{{ $mhs->fakultas }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <footer class="mt-5">
    <p class="mb-2">Developed by</p>
    <p style="font-size: 15px;">Adam Zein | 41820010047</p>
  </footer>
  
</body>
</html>

    
