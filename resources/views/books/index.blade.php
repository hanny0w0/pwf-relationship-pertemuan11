@extends('layouts.app')

@section('content')
    <h2>Daftar Buku</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="/books/create">+ Tambah Buku Baru</a>
    <br><br>

    @foreach ($books as $book)
        <div>
            <h3>{{ $book->title }}</h3>
            <p>Penulis: {{ $book->author }}</p>
            <p>Kategori: {{ $book->category?->name ?? 'Belum ada kategori' }}</p>
            <p>Tahun: {{ $book->year }} | Stok: {{ $book->stock }}</p>
            
            <p>
                <a href="/books/{{ $book->id }}">Detail</a> | 
                <a href="/books/{{ $book->id }}/edit">Edit</a> | 
                <form action="/books/{{ $book->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </p>
            <hr>
        </div>
    @endforeach
@endsection