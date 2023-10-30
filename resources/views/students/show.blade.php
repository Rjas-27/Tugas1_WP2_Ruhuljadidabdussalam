@extends('components.layout')
@section('title', 'Mahasiswa')
<div class="container-fluid">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h2 class="m-0 text-dark">Detail Data Mahasiswa</h2>
        </div>
    </div>
</div>
@section('content')
    <div class="box-header with-border">
        <a href="/students" class="btn btn-success btn-xs btn-flat"><i class="fa fa-pluscircle"></i>
            << Kembali </a>
    </div>
    <br>
    <div class="row">
        <div class="form-group">
            <strong>NIM:</strong>
            {{ $mhs->nim }}
        </div>
        <div class="form-group">
            <strong>Nama:</strong>
            {{ $mhs->nama }}
        </div>
        <div class="form-group">
            <strong>Program Studi:</strong>
            {{ $mhs->prodi }}
        </div>
    </div>
@endsection
