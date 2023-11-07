@extends('layouts.index')

@section('content')
<div class="container mt-4">
    <h2>Tambah Mahasiswa</h2>
    <form method="POST" action="{{ url('mahasiswa') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" required>
        </div>

        <div class="form-group">
            <label for="NIM">NIM:</label>
            <input type="text" name="NIM" id="NIM" class="form-control" placeholder="Masukkan NIM" required>
        </div>

        <div class="form-group">
            <label for="Jurusan">Jurusan:</label>
            <input type="text" name="Jurusan" id="Jurusan" class="form-control" placeholder="Masukkan Jurusan" required>
        </div>

        <div class="form-group">
            <label for="Alamat">Alamat:</label>
            <input type="text" name="Alamat" id="Alamat" class="form-control" placeholder="Masukkan Alamat" required>
        </div>

        <div class="form-group">
            <label for="Gender">Gender:</label>
            <input type="text" name="Gender" id="Gender" class="form-control" placeholder="Masukkan Gender" required>
        </div>

        <div class="form-group">
            <label for="Agama">Agama:</label>
            <input type="text" name="Agama" id="Agama" class="form-control" placeholder="Masukkan Agama" required>
        </div>

        <button type="submit" class="btn btn-primary">SIMPAN</button>
    </form>
</div>
@endsection
