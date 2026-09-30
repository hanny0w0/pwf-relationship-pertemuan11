<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'title' => 'Pemrograman PHP',
            'author' => 'Budi Raharjo',
            'year' => 2024,
            'stock' => 10,
        ]);

        Book::create([
            'title' => 'Laravel untuk Pemula',
            'author' => 'Billy Ibrahim',
            'year' => 2023,
            'stock' => 7,
        ]);

        Book::create([
            'title' => 'Basis Data Relasional',
            'author' => 'Fathansyah',
            'year' => 2022,
            'stock' => 5,
        ]);

        Book::create([
            'title' => 'Algoritma dan Pemrograman',
            'author' => 'Rinaldi Munir',
            'year' => 2021,
            'stock' => 12,
        ]);

        Book::create([
            'title' => 'Pemrograman Berorientasi Objek',
            'author' => 'Eko Kurniawan',
            'year' => 2024,
            'stock' => 8,
        ]);
    }
}