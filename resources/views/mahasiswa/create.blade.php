@extends('layouts.main')
@section('container')

  @php
    $kategori = [["jenis_kelamin" => "Laki-Laki"], ["jenis_kelamin" => "Perempuan"]]; 
  @endphp 

  <h1 class="mb-3">Tambah Data Mahasiswa</h1>

  <div class="row">
    <div class="col-xl-6">
      <form action="{{ route("store") }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="nim" class="form-label">NIM</label>
          <input type="number" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" value="{{ old("nim") }}">
          @error('nim')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old("nama") }}">
          @error('nama')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
          <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
            @foreach ($kategori as $kategori)
                @if (old('jenis_kelamin') == $kategori['jenis_kelamin'])
                    <option value="{{ $kategori['jenis_kelamin'] }}" selected>{{ $kategori['jenis_kelamin'] }}</option>
                    @else
                    <option value="{{ $kategori['jenis_kelamin'] }}">{{ $kategori['jenis_kelamin'] }}</option>
                @endif
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
          <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" value="{{ old("tgl_lahir") }}">
          @error('tgl_lahir')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="jurusan" class="form-label">Jurusan</label>
          <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" value="{{ old("jurusan") }}">
          @error('jurusan')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="fakultas" class="form-label">Fakultas</label>
          <input type="text" class="form-control @error('fakultas') is-invalid @enderror" id="fakultas" name="fakultas" value="{{ old("fakultas") }}">
          @error('fakultas')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="3">{{ old("alamat") }}</textarea>
          @error('alamat')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="row">
          <div class="col d-grid">
            <a href="{{ route("home") }}" class="btn btn-light w-full">Kembali</a>
          </div>
          <div class="col d-grid">
            <button type="submit" class="btn btn-primary" name="submit">Tambah</button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection