@extends('layouts.master')

@section('title', 'Tampil Kategori')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <a href="{{ route('category.create') }}" class="btn btn-primary">
            <i class="ti ti-plus"></i> Tambah Kategori
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Kategori</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="{{ route('category.show', $category->id) }}" class="btn btn-sm btn-info"
                                    title="Lihat Detail">
                                    <i class="ti ti-eye"></i>
                                </a>
                                <a href="{{ route('category.edit', $category->id) }}" class="btn btn-sm btn-warning"
                                    title="Ubah">
                                    <i class="ti ti-edit"></i>
                                </a>
                                <form action="{{ route('category.destroy', $category->id) }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus kategori ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" title="Hapus">
                                        <i class="ti ti-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Belum ada data kategori. Silakan tambah kategori baru!</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection