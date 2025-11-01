<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   /**
    * Display a listing of the resource.
    */
   public function index()
   {
      $categories = Category::all();
      return view('categories.index', compact('categories'));
   }

   /**
    * Show the form for creating a new resource.
    */
   public function create()
   {
      return view('categories.create');
   }

   /**
    * Store a newly created resource in storage.
    */
   public function store(Request $request)
   {
      $request->validate([
         'name' => 'required|string|max:255',
         'description' => 'required|string',
      ], [
         'name.required' => 'Nama kategori wajib diisi.',
         'name.max' => 'Nama kategori maksimal 255 karakter.',
         'description.required' => 'Deskripsi kategori wajib diisi.',
      ]);

      Category::create($request->all());

      return redirect()->route('category.index')
         ->with('success', 'Kategori berhasil ditambahkan.');
   }

   /**
    * Display the specified resource.
    */
   public function show($id)
   {
      $category = Category::findOrFail($id);
      return view('categories.show', compact('category'));
   }

   /**
    * Show the form for editing the specified resource.
    */
   public function edit($id)
   {
      $category = Category::findOrFail($id);
      return view('categories.edit', compact('category'));
   }

   /**
    * Update the specified resource in storage.
    */
   public function update(Request $request, $id)
   {
      $request->validate([
         'name' => 'required|string|max:255',
         'description' => 'required|string',
      ], [
         'name.required' => 'Nama kategori wajib diisi.',
         'name.max' => 'Nama kategori maksimal 255 karakter.',
         'description.required' => 'Deskripsi kategori wajib diisi.',
      ]);

      $category = Category::findOrFail($id);
      $category->update($request->all());

      return redirect()->route('category.index')
         ->with('success', 'Kategori berhasil diperbarui.');
   }

   /**
    * Remove the specified resource from storage.
    */
   public function destroy($id)
   {
      $category = Category::findOrFail($id);
      $category->delete();

      return redirect()->route('category.index')
         ->with('success', 'Kategori berhasil dihapus.');
   }
}
