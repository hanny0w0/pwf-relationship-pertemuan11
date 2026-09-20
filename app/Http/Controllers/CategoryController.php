<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = [
            'Pemrograman Web',
            'Basis Data',
            'Jaringan Komputer',
            'Sistem Informasi',
            'Kecerdasan Buatan'
        ];

        return view('categories.index', compact('categories'));
    }
}