<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        // 5 Buku dengan Judul, Penulis, dan Tahun Terbit
        $books = [
            ['title' => 'Pemrograman PHP', 'author' => 'Budi Raharjo', 'year' => 2020],
            ['title' => 'Laravel untuk Pemula', 'author' => 'Billy Ibrahim', 'year' => 2022],
            ['title' => 'Basis Data Relasional', 'author' => 'Fathansyah', 'year' => 2019],
            ['title' => 'Algoritma dan Pemrograman', 'author' => 'Rinaldi Munir', 'year' => 2021],
            ['title' => 'Pemrograman Berorientasi Objek', 'author' => 'Eko Kurniawan', 'year' => 2023],
        ];

        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        return view('books.show', compact('id'));
    }
}