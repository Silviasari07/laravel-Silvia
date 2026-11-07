@extends('layouts.app')

@section('content')
<!-- Breadcrumb -->
<nav aria-label="breadcrumb" class="d-none d-md-inline-block mb-2">
    <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent mb-0">
        <li class="breadcrumb-item"><a href="{{ route('pelanggan.index') }}" class="text-secondary text-decoration-none">Pelanggan</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Pelanggan</li>
    </ol>
</nav>

<!-- Header & Tombol Kembali -->
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mb-3">
    <div>
        <h2 class="h4 fw-bold">Edit Pelanggan</h2>
        <p class="mb-0 text-muted">Form untuk memperbaharui data pelanggan.</p>
    </div>
    <div>
        <a href="{{ route('pelanggan.index') }}" class="btn btn-dark text-white px-3 shadow-sm">Kembali</a>
    </div>
</div>

<!-- Display Error Global -->
@if ($errors->any())
    <div class="alert alert-danger mb-3">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Form Card Edit -->
<div class="card card-body border-0 shadow mb-4">
    <form action="{{ route('pelanggan.update', $dataPelanggan->pelanggan_id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="row g-3">
            <div class="col-md-4">
                <label for="first_name" class="form-label fw-semibold">First name</label>
                <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ old('first_name', $dataPelanggan->first_name) }}">
                @error('first_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="birthday" class="form-label fw-semibold">Birthday</label>
                <input type="date" class="form-control @error('birthday') is-invalid @enderror" id="birthday" name="birthday" value="{{ old('birthday', $dataPelanggan->birthday) }}">
                @error('birthday')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="email" class="form-label fw-semibold">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $dataPelanggan->email) }}">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="last_name" class="form-label fw-semibold">Last name</label>
                <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" value="{{ old('last_name', $dataPelanggan->last_name) }}">
                @error('last_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="gender" class="form-label fw-semibold">Gender</label>
                <select class="form-select @error('gender') is-invalid @enderror" id="gender" name="gender">
                    <option value="" disabled>-- Pilih --</option>
                    <option value="Male" {{ old('gender', $dataPelanggan->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ old('gender', $dataPelanggan->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                </select>
                @error('gender')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="phone" class="form-label fw-semibold">Phone</label>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone', $dataPelanggan->phone) }}">
                @error('phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="d-flex justify-content-end mt-4">
            <button type="submit" class="btn btn-primary me-2">Simpan Perubahan</button>
            <a href="{{ route('pelanggan.index') }}" class="btn btn-outline-warning">Batal</a>
        </div>
    </form>
</div>
@endsection