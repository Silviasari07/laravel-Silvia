@extends('layouts.app')

@section('content')
<!-- Header & Tombol Tambah Pelanggan -->
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <h2 class="h4 fw-bold">Daftar Pelanggan</h2>
        <p class="mb-0 text-muted">Kelola seluruh informasi data pelanggan Anda di sini.</p>
    </div>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="{{ route('pelanggan.create') }}" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center text-white px-3 py-2" style="background-color: #262b40;">
            <i class="bi bi-plus-lg me-2"></i> Tambah Pelanggan
        </a>
    </div>
</div>

<!-- Pesan Sukses -->
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<!-- Tabel Pelanggan -->
<div class="card card-body border-0 shadow table-wrapper table-responsive">
    <table class="table table-hover align-items-center">
        <thead>
            <tr>
                <th class="border-0 rounded-start">FIRST NAME</th>
                <th class="border-0">LAST NAME</th>
                <th class="border-0">BIRTHDAY</th>
                <th class="border-0">GENDER</th>
                <th class="border-0">EMAIL</th>
                <th class="border-0">PHONE</th>
                <th class="border-0 rounded-end">ACTION</th>
            </tr>
        </thead>
        <tbody>
            @forelse($dataPelanggan as $item)
                <tr>
                    <td class="fw-bold">{{ $item->first_name }}</td>
                    <td>{{ $item->last_name }}</td>
                    <td>{{ $item->birthday }}</td>
                    <td>{{ $item->gender }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>
                        <!-- Perbaikan: Gunakan $item->pelanggan_id -->
                        <a href="{{ route('pelanggan.edit', $item->pelanggan_id) }}" class="btn btn-sm btn-info text-white me-1">Edit</a>
                        
                        <form action="{{ route('pelanggan.destroy', $item->pelanggan_id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center py-4 text-muted">Belum ada data pelanggan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection