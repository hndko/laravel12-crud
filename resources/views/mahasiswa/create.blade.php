@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                {{ $pages }}
                <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
            </div>
            <form action="{{ route('mahasiswa.store') }}" method="POST">
                @csrf

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" id="name" autocomplete="off"
                                value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nim" id="nim" autocomplete="off"
                                value="{{ old('nim') }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" id="email" autocomplete="off"
                                value="{{ old('email') }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="no_telpon" class="col-sm-2 col-form-label">No Telpon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="no_telpon" id="no_telpon" autocomplete="off"
                                value="{{ old('no_telpon') }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="alamat" id="alamat" autocomplete="off"
                                value="{{ old('alamat') }}">
                        </div>
                    </div>
                    <div class="mb-3 text-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
