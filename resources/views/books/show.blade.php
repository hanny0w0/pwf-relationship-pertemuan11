@extends('layouts.app')

@section('content')
    <h2>Detail Buku</h2>

    <p><strong>Judul:</strong> {{ $book->title }}</p>
    <p><strong>Penulis:</strong> {{ $book->author }}</p>
    <p><strong>Tahun Terbit:</strong> {{ $book->year }}</p>
    <p><strong>Stok:</strong> {{ $book->stock }}</p>

    <br>
    <a href="/books/{{ $book->id }}/edit">Edit</a> | 
    <a href="/books">Kembali ke Daftar Buku</a>
@endsection