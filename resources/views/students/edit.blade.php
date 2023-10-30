@extends('components.layout')
@section('title', 'Mahasiswa')
<div class="container-fluid">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h2 class="m-0 text-dark">Ubah Data Mahasiswa</h2>
        </div>
    </div>
</div>
@section('content')
    <div class="box-header with-border">
        <a href="/students" class="btn btn-success btn-xs btn-flat"><i class="fa fa-pluscircle"></i>
            << Kembali </a>
    </div>
    <br>
    <form action="/students/perbarui/{{ $mhs->id }}" method="POST">
        @method('put')
        @csrf
        <div class="row">
            <div class="form-group">
                <strong>NIM:</strong>
                {{-- input text nim dibuat hidden untuk proses post request di controller --}}
                <input type="text" name="nim" class="form-control" value="{{ $mhs->nim }}" hidden>
                {{-- input text yang hanya untuk tampilan saja, disabled dan tanpa nama --}}
                <input type="text" class="form-control" value="{{ $mhs->nim }}" disabled readonly>
            </div>
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control" value="{{ $mhs->nama }}">
            </div>
            <div class="form-group">
                <strong>Program Studi:</strong>
                <select name="prodi" class="form-control">
                    <option value="Sistem Informasi" {{ old('prodi', $mhs->prodi) ==
                    'Sistem 
                    Informasi'
                        ? 'selected'
                        : '' }}>
                        Sistem Informasi</option>
                    <option value="Teknologi Komputer"
                        {{ old('prodi', $mhs->prodi) ==
                        'Teknologi 
                        Komputer'
                            ? 'selected'
                            : '' }}>Teknologi Komputer</option>
                    <option value="Sistem Informasi Akuntansi"
                        {{ old('prodi', $mhs->prodi) == 'Sistem Informasi Akuntansi' ? 'selected' : '' }}>Sistem Informasi
                        Akuntansi</option>
                </select>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
@endsection
