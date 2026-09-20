<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $appName = 'Sistem Informasi Perpustakaan Sederhana';
        $appDesc = 'Aplikasi pengelolaan koleksi buku, kategori, dan keanggotaan perpustakaan.';
        $totalBooks = 5;
        $totalMembers = 5;
        $totalCategories = 5;

        return view('dashboard.index', compact('appName', 'appDesc', 'totalBooks', 'totalMembers', 'totalCategories'));
    }
}