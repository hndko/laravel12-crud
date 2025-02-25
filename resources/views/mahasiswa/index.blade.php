@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                {{ $pages }}
                <a href="{{ route('mahasiswa.create') }}" class="btn btn-secondary btn-sm">Tambah Data</a>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="d-flex justify-content-end">
                    <form action="{{ route('mahasiswa.index') }}" method="GET" class="d-inline">
                        <input type="text" name="search" placeholder="Search..." class="form-control form-control-sm">
                    </form>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>NIM</th>
                            <th>Email</th>
                            <th>No Telpon</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mahasiswa as $row)
                            <tr>
                                <td>{{ ($mahasiswa->currentPage() - 1) * $mahasiswa->perPage() + $loop->iteration }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->nim }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->no_telpon }}</td>
                                <td>{{ $row->alamat }}</td>
                                <td>
                                    <a href="{{ route('mahasiswa.edit', $row->id) }}"
                                        class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('mahasiswa.destroy', $row->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">Tidak ada data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $mahasiswa->links('vendor.pagination.custom') }}
            </div>
        </div>
    </div>
@endsection
