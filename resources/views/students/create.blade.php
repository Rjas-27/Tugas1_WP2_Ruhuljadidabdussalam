@extends('components.layout')
@section('title', 'Mahasiswa')
<div class="container-fluid">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h2 class="m-0 text-dark">Tambah Data Mahasiswa</h2>
        </div>
    </div>
</div>
@section('content')
    <div class="box-header with-border">
        <a href="/students" class="btn btn-success btn-xs btn-flat"><i class="fa fa-pluscircle"></i>
            << Kembali </a>
    </div>
    <br>
    <form action="/students/simpan" method="POST">
        @csrf
        <div class="row">
            <div class="form-group">
                <strong>NIM:</strong>
                <input type="text" name="nim" class="form-control" value="{{ old('nim') }}">
            </div>
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
            </div>
            <div class="form-group">
                <strong>Program Studi:</strong>
                <select name="prodi" class="form-control">
                    <option value="" default>-- Choose --</option>
                    <option value="Sistem Informasi" {{ old('prodi') == 'Sistem Informasi' ? 'selected' : '' }}>Sistem
                        Informasi</option>
                    <option value="Sistem Informasi Akuntansi"
                        {{ old('prodi') ==
                        "Sistem 
                        Informasi Akuntansi"
                            ? 'selected'
                            : '' }}>Sistem Informasi Akuntansi
                    </option>
                    <option value="Teknologi Komputer" {{ old('prodi') == 'Teknologi Komputer' ? 'selected' : '' }}>Teknologi
                        Komputer</option>
                </select>
            </div>
            <div>
                <br>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
@endsection
