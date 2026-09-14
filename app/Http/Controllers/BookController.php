<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    public function index()
    {
        $title = 'Daftar Buku';
        $description = 'Koleksi buku pada Sistem Informasi Perpustakaan.';

        $books = [
            [
                'title' => 'Pemrograman PHP',
                'author' => 'Budi Raharjo',
                'year' => 2020
            ],
            [
                'title' => 'Laravel untuk Pemula',
                'author' => 'Andi Setiawan',
                'year' => 2021
            ],
            [
                'title' => 'Basis Data',
                'author' => 'Rosa A.S.',
                'year' => 2022
            ],
            [
                'title' => 'Algoritma dan Pemrograman',
                'author' => 'Abdul Kadir',
                'year' => 2021
            ],
            [
                'title' => 'Pemrograman Berorientasi Objek',
                'author' => 'Salahuddin',
                'year' => 2023
            ]
        ];

        $stock = 7;

        return view('books.index', compact(
            'title',
            'description',
            'books',
            'stock'
        ));
    }

    public function show($id)
    {
        return view('books.show', compact('id'));
    }
}