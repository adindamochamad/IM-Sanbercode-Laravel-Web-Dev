@extends('layouts.master')

@section('title', 'Ubah Kategori')

@section('content')
   <div class="d-flex justify-content-between align-items-center mb-4">
      <h5 class="fw-semibold mb-0">Ubah Data Kategori</h5>
      <a href="{{ route('category.index') }}" class="btn btn-secondary">
         <i class="ti ti-arrow-left"></i> Kembali
      </a>
   </div>

   <form action="{{ route('category.update', $category->id) }}" method="POST">
      @csrf
      @method('PUT')

      <div class="mb-3">
         <label for="name" class="form-label">Nama Kategori <span class="text-danger">*</span></label>
         <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
            value="{{ old('name', $category->name) }}" required placeholder="Masukkan nama kategori">
         @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
         @enderror
      </div>

      <div class="mb-3">
         <label for="description" class="form-label">Deskripsi <span class="text-danger">*</span></label>
         <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
            rows="4" required
            placeholder="Masukkan deskripsi kategori">{{ old('description', $category->description) }}</textarea>
         @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
         @enderror
      </div>

      <div class="d-flex gap-2">
         <button type="submit" class="btn btn-primary">
            <i class="ti ti-device-floppy"></i> Perbarui
         </button>
         <a href="{{ route('category.index') }}" class="btn btn-secondary">
            <i class="ti ti-x"></i> Batal
         </a>
      </div>
   </form>
@endsection