@extends('layouts.master')

@section('title', 'Detail Kategori')

@section('content')
   <div class="d-flex justify-content-between align-items-center mb-4">
      <h5 class="fw-semibold mb-0">Detail Kategori</h5>
      <a href="{{ route('category.index') }}" class="btn btn-secondary">
         <i class="ti ti-arrow-left"></i> Kembali
      </a>
   </div>

   <div class="card">
      <div class="card-body">
         <div class="row mb-3">
            <div class="col-md-3 fw-semibold">ID Kategori:</div>
            <div class="col-md-9">{{ $category->id }}</div>
         </div>

         <div class="row mb-3">
            <div class="col-md-3 fw-semibold">Nama Kategori:</div>
            <div class="col-md-9">{{ $category->name }}</div>
         </div>

         <div class="row mb-3">
            <div class="col-md-3 fw-semibold">Deskripsi:</div>
            <div class="col-md-9">{{ $category->description }}</div>
         </div>

         <div class="row mb-3">
            <div class="col-md-3 fw-semibold">Dibuat Pada:</div>
            <div class="col-md-9">{{ $category->created_at->format('d M Y H:i:s') }}</div>
         </div>

         <div class="row mb-3">
            <div class="col-md-3 fw-semibold">Diperbarui Pada:</div>
            <div class="col-md-9">{{ $category->updated_at->format('d M Y H:i:s') }}</div>
         </div>

         <div class="d-flex gap-2 mt-4">
            <a href="{{ route('category.edit', $category->id) }}" class="btn btn-warning">
               <i class="ti ti-edit"></i> Ubah
            </a>
            <form action="{{ route('category.destroy', $category->id) }}" method="POST" class="d-inline"
               onsubmit="return confirm('Apakah Anda yakin ingin menghapus kategori ini?');">
               @csrf
               @method('DELETE')
               <button type="submit" class="btn btn-danger">
                  <i class="ti ti-trash"></i> Hapus
               </button>
            </form>
         </div>
      </div>
   </div>
@endsection