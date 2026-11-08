@extends('layouts.admin.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <div class="text-muted small mb-1">
            <i class="bi bi-house-door-fill me-1"></i> / User
        </div>
        <h2 class="h4 mb-0 fw-bold">Data User</h2>
        <p class="text-muted small mb-0">List data seluruh user</p>
    </div>
    <a href="{{ route('user.create') }}" class="btn btn-success px-3 shadow-sm font-weight-bold">Tambah User</a>
</div>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
    </div>
@endif

<div class="card border-0 shadow-sm rounded-3">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table align-middle mb-0">
                <thead class="bg-light">
                    <tr class="text-muted small fw-bold">
                        <th class="border-0 px-4 py-3">NAME</th>
                        <th class="border-0 py-3">EMAIL</th>
                        <th class="border-0 py-3">PASSWORD</th>
                        <th class="border-0 py-3 text-end px-4">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($dataUser as $item)
                        <tr class="border-top">
                            <td class="px-4 py-3 fw-bold">{{ $item->name }}</td>
                            <td class="py-3 text-muted">{{ $item->email }}</td>
                            <td class="py-3 text-muted small text-truncate" style="max-width: 280px;">{{ $item->password }}</td>
                            <td class="py-3 text-end px-4">
                                <a href="{{ route('user.edit', $item->id) }}" class="btn btn-primary btn-sm px-3 me-1">
                                    <i class="bi bi-pencil-square me-1"></i> Edit
                                </a>
                                <form action="{{ route('user.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm px-3" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                        <i class="bi bi-trash-fill me-1"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr class="border-top">
                            <td colspan="4" class="text-center py-4 text-muted">Belum ada data user. Klik <b>Tambah User</b> di kanan atas.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection