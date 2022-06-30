@extends('layouts.main')
@section('container')

  <div class="row">
    <div class="col">
      <h1 class="mb-3">Data Mahasiswa</h1>

      <a href="{{ route("create") }}" class="btn btn-primary">Tambah</a>
      <a href="{{ route("cetak") }}" target="_blank" class="btn btn-light ms-2">Cetak</a>

      @if (session('status'))
          <div class="alert alert-primary alert-dismissible fade show mt-3" role="alert">
              {{ session('status') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif
      <div class="table-responsive mt-4">
        <table class="table">
          <thead class="table-light">
            <tr>
              <th scope="col">NIM</th>
              <th scope="col">Nama</th>
              <th scope="col">Alamat</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Tanggal Lahir</th>
              <th scope="col">Jurusan</th>
              <th scope="col">Fakultas</th>
              <th scope="col">Aksi</th>
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
                <td>
                  <a href="{{ route('edit',['nim' => $mhs->nim ]) }}" class="btn btn-primary btn-sm">Edit</a>
                  <form action="{{ route('delete',['nim' => $mhs->nim ]) }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
    
@endsection