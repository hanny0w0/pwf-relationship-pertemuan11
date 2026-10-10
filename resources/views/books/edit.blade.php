@extends('layouts.app')

@section('content')
    <h2>Edit Buku</h2>

    <form action="/books/{{ $book->id }}" method="POST">
        @csrf
        @method('PUT')

        <p>
            <label>Judul Buku:</label><br>
            <input type="text" name="title" value="{{ $book->title }}" required>
        </p>

        <p>
            <label>Penulis:</label><br>
            <input type="text" name="author" value="{{ $book->author }}" required>
        </p>

        <p>
            <label>Tahun Terbit:</label><br>
            <input type="number" name="year" value="{{ $book->year }}" required>
        </p>

        <p>
            <label>Stok:</label><br>
            <input type="number" name="stock" value="{{ $book->stock }}" required>
        </p>

        <button type="submit">Update Buku</button>
        <a href="/books">Batal</a>
    </form>
@endsection