@extends('layouts.app')

@section('title', $title)

@section('content')

    <h2>{{ $title }}</h2>

    <p>{{ $description }}</p>

    @if($stock > 0)
        <p>Stok tersedia: {{ $stock }}</p>
    @else
        <p>Stok habis.</p>
    @endif

    <h2>Daftar Buku</h2>

    <ul>
        @foreach($books as $book)
            <li>
                <strong>{{ $book['title'] }}</strong>
                - {{ $book['author'] }}
                - {{ $book['year'] }}
            </li>
        @endforeach
    </ul>

@endsection