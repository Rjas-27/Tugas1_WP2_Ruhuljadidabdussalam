@extends('components.layout')
@section('title', 'Dosen')
<div class="container-fluid">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h2 class="m-0 text-dark">Data Dosen</h2>
        </div>
    </div>
</div>
@section('content')
    <div class="box-header with-border">
        <a href="{{ route('lecturers.create') }}" class="btn btn-success btn-xs btnflat"><i class="fa fa-plus-circle"></i>
            Tambah Data
        </a>
    </div>
    <br>
    <div class="box-body table-responsive">
        <table class="table table-stiped table-bordered">
            <thead>
                <tr>
                    <th width="5%">No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Keilmuan</th>
                    <th width="20%"><i class="fas fa-cog">Action</i></th>
                </tr>
            </thead>
            @foreach ($dosen as $item)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $item->nip }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->keilmuan }}</td>
                    <td>
                        <a href="{{ route('lecturers.show', [$item->id]) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('lecturers.edit', [$item->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form class="d-inline" action="{{ route('lecturers.destroy', [$item->id]) }}" method="POST"
                            onsubmit="return confirm('Yakin hapus data?')">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    {{ $dosen->links() }}
@endsection
