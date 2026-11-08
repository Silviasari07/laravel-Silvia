@extends('layouts.admin.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <div class="text-muted small mb-1">
            <i class="bi bi-house-door-fill me-1"></i> / User / Tambah User
        </div>
        <h2 class="h4 mb-0 fw-bold">Tambah User</h2>
        <p class="text-muted small mb-0">Form untuk menambahkan data user baru.</p>
    </div>
    <a href="{{ route('user.index') }}" class="btn btn-dark btn-sm px-3">Kembali</a>
</div>

<div class="card border-0 shadow-sm p-4 rounded-3">
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <div class="row">
            <!-- Name -->
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold text-secondary">Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password -->
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold text-secondary">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email -->
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold text-secondary">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold text-secondary">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control">
            </div>
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-dark px-4 me-2">Simpan</button>
            <a href="{{ route('user.index') }}" class="btn btn-outline-warning px-4">Batal</a>
        </div>
    </form>
</div>
@endsection