@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h2>Daftar Buku</h2>

    @foreach($books as $book)
        <div style="margin-bottom: 20px; padding: 10px; border: 1px solid #ddd;">
            <h3>{{ $book->title }}</h3>
            <p><strong>Penulis:</strong> {{ $book->author }}</p>
            <p><strong>Tahun:</strong> {{ $book->year }}</p>
            <p><strong>Stok:</strong> {{ $book->stock }}</p>
        </div>
    @endforeach
@endsection