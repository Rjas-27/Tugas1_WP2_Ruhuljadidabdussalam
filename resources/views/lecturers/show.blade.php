@extends('components.layout')
@section('title', 'Dosen/Lecturers')
<div class="container-fluid">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h2 class="m-0 text-dark">Detail Data Dosen</h2>
        </div>
    </div>
</div>
@section('content')
    <div class="box-header with-border">
        <a href="{{ route('lecturers.index') }}" class="btn btn-success btn-xs btnflat"><i class="fa fa-plus-circle"></i>
            << Kembali </a>
    </div>
    <br>
    <div class="row">
        <div class="form-group">
            <strong>NIP:</strong>
            {{ $dosen->nip }}
        </div>
        <div class="form-group">
            <strong>Nama:</strong>
            {{ $dosen->nama }}
        </div>
        <div class="form-group">
            <strong>Keilmuan:</strong>
            {{ $dosen->keilmuan }}
        </div>
    </div>
@endsection
