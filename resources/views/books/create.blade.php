@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <h2>Tambah Buku Baru</h2>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <!-- Input Judul Buku -->
        <div>
            <label for="title">Judul Buku</label>
            <input 
                type="text" 
                name="title" 
                id="title"
                value="{{ old('title') }}"
            >
            @error('title')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <!-- Input Penulis -->
        <div>
            <label for="author">Penulis</label>
            <input 
                type="text" 
                name="author" 
                id="author"
                value="{{ old('author') }}"
            >
            @error('author')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <!-- Input Kategori -->
        <div>
            <label for="category_id">Kategori</label>
            <select name="category_id" id="category_id">
                <option value="">Pilih kategori</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <!-- Input ISBN (Aturan Tambahan) -->
        <div>
            <label for="isbn">ISBN (13 Digit)</label>
            <input 
                type="text" 
                name="isbn" 
                id="isbn"
                value="{{ old('isbn') }}"
            >
            @error('isbn')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <!-- Input Harga Buku (Aturan Tambahan) -->
        <div>
            <label for="price">Harga Buku (Rp)</label>
            <input 
                type="number" 
                name="price" 
                id="price"
                value="{{ old('price') }}"
            >
            @error('price')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <!-- Input Tahun Terbit -->
        <div>
            <label for="year">Tahun Terbit</label>
            <input 
                type="number" 
                name="year" 
                id="year"
                value="{{ old('year') }}"
            >
            @error('year')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <!-- Input Stok -->
        <div>
            <label for="stock">Stok Buku</label>
            <input 
                type="number" 
                name="stock" 
                id="stock"
                value="{{ old('stock') }}"
            >
            @error('stock')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Simpan Buku</button>
    </form>
@endsection