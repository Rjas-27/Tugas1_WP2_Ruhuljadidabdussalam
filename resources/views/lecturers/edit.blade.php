@extends('components.layout')
@section('title', 'Dosen/Lecturers')
<div class="container-fluid">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h2 class="m-0 text-dark">Ubah Data Dosen</h2>
        </div>
    </div>
</div>
@section('content')
    <div class="box-header with-border">
        <a href="{{ route('lecturers.index') }}" class="btn btn-success btn-xs btn-flat">
            <i class="fa fa-plus-circle"></i>
            << Kembali </a>
    </div>
    <br>
    <form action="{{ route('lecturers.update', [$dosen->id]) }}" method="POST">
        @method('put')
        @csrf
        <div class="row">
            <div class="form-group">
                <strong>NIM:</strong>
                {{-- input text nip dibuat hidden untuk proses post request di controller --}}
                <input type="text" name="nip" class="form-control" value="{{ $dosen->nip }}" hidden>
                {{-- input text yang hanya untuk tampilan saja, disabled dan tanpa nama --}}
                <input type="text" class="form-control" value="{{ $dosen->nip }}" disabled readonly>
            </div>
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control" value="{{ $dosen->nama }}">
            </div>
            <div class="form-group">
                <strong>Keilmuan:</strong>
                <input type="text" name="keilmuan" class="form-control" value="{{ $dosen->keilmuan }}">
            </div>
            <div>
                <br>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
@endsection
