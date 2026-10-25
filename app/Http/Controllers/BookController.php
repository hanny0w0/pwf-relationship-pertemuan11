<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Category;

class BookController extends Controller
{
    // READ (Tampilkan Semua Buku)
    public function index()
    {
        $books = Book::with('category')->get();
        return view('books.index', compact('books'));
    }

    // CREATE (Tampilkan Form Tambah Buku)
    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('books.create', compact('categories'));
    }

    // STORE (Simpan Data Baru ke Database dengan Validasi Baru)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'author'      => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id', // Tambahan validasi kategori
            'year'        => 'required|integer|min:1900|max:' . date('Y'),
            'stock'       => 'required|integer|min:0',
            'price'       => 'required|numeric|min:1000',
            'isbn'        => 'required|numeric|digits:13|unique:books,isbn',
        ]);

        Book::create($validated);

        return redirect()->route('books.index')->with('success', 'Data buku berhasil ditambahkan.');
    }

    // SHOW (Tampilkan Detail Buku)
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    // EDIT (Tampilkan Form Edit Buku)
    public function edit(Book $book)
    {
        $categories = Category::orderBy('name')->get();
        return view('books.edit', compact('book', 'categories'));
    }

    // UPDATE (Simpan Perubahan Data ke Database dengan Validasi)
    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'author'      => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id', // Tambahan validasi kategori
            'year'        => 'required|integer|min:1900|max:' . date('Y'),
            'stock'       => 'required|integer|min:0',
            'price'       => 'required|numeric|min:1000',
            'isbn'        => 'required|numeric|digits:13|unique:books,isbn,' . $book->id,
        ]);

        $book->update($validated);

        return redirect()->route('books.index')->with('success', 'Data buku berhasil diperbarui.');
    }

    // DESTROY (Hapus Buku dari Database)
    public function destroy(Book $book)
    {
        $book->delete();
        
        return redirect()->route('books.index')->with('success', 'Data buku berhasil dihapus.');
    }
}