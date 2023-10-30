@extends('components.layout')
@section('title', 'Mahasiswa')
<div class="container-fluid">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h2 class="m-0 text-dark">Data Mahasiswa</h2>
        </div>
    </div>
</div>
@section('content')
    <div class="box-header with-border">
        <a href="/students/tambah" class="btn btn-success btn-xs btn-flat"><i class="fa faplus-circle"></i>
            Tambah Data
        </a>
    </div>
    <br>
    <div class="box-body table-responsive">
        <table class="table table-stiped table-bordered">
            <thead>
                <tr>
                    <th width="5%">No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Program Studi</th>
                    <th width="20%"><i class="fas fa-cog">Action</i></th>
                </tr>
            </thead>
            @foreach ($mhs as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nim }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->prodi }}</td>
                    <td>
                        <a href="/students/tampil/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                        <a href="/students/ubah/{{$item->id}}" class="btn btn-primary btn-sm">Edit</a>
                        <a href="/students/hapus/{{$item->id}}" class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin akan menghapus data?')">Delete</a>                            
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    {{-- {{ $mhs->links() }} --}}
@endsection
