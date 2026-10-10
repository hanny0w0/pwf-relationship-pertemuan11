<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // READ (Tampilkan Semua Buku)
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    // CREATE (Tampilkan Form Tambah Buku)
    public function create()
    {
        return view('books.create');
    }

    // STORE (Simpan Data Baru ke Database)
    public function store(Request $request)
    {
        Book::create([
            'title'  => $request->title,
            'author' => $request->author,
            'year'   => $request->year,
            'stock'  => $request->stock,
        ]);

        return redirect()->route('books.index');
    }

    // SHOW (Tampilkan Detail Buku)
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    // EDIT (Tampilkan Form Edit Buku)
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    // UPDATE (Simpan Perubahan Data ke Database)
    public function update(Request $request, Book $book)
    {
        $book->update([
            'title'  => $request->title,
            'author' => $request->author,
            'year'   => $request->year,
            'stock'  => $request->stock,
        ]);

        return redirect()->route('books.index');
    }

    // DESTROY (Hapus Buku dari Database)
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index');
    }
}