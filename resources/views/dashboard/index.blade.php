@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h2>{{ $appName }}</h2>
    <p>{{ $appDesc }}</p>

    <h3>Statistik Sistem:</h3>
    <ul>
        <li>Jumlah Buku: {{ $totalBooks }}</li>
        <li>Jumlah Member: {{ $totalMembers }}</li>
        <li>Jumlah Kategori: {{ $totalCategories }}</li>
    </ul>
@endsection