@extends('components.layout')
@section('title', 'Dosen/Lecturers')
<div class="container-fluid">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h2 class="m-0 text-dark">Tambah Data Dosen</h2>
        </div>
    </div>
</div>
@section('content')
    <div class="box-header with-border">
        <a href="/students" class="btn btn-success btn-xs btn-flat"><i class="fa fa-pluscircle"></i>
            << Kembali </a>
    </div>
    <br>
    <form action="{{ route('lecturers.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="form-group">
                <strong>NIP:</strong>
                <input type="text" name="nip" class="form-control" value="{{ old('nip') }}">
            </div>
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
            </div>
            <div class="form-group">
                <strong>Keilmuan:</strong>
                <input type="text" name="keilmuan" class="form-control" value="{{ old('keilmuan') }}"
                    placeholder="contoh : Ilmu Komputer">
            </div>
            <div>
                <br>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
@endsection
