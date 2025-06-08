@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-2">{{ $artikel->judul }}</h1>
    <p class="text-sm text-gray-500 mb-4">{{ $artikel->penulis }} - {{ $artikel->created_at->format('d M Y') }}</p>
    <img src="{{ $artikel->gambar }}" alt="{{ $artikel->judul }}" class="mb-4">
    <div class="prose">
        {!! nl2br(e($artikel->isi)) !!}
    </div>
    <div class="mt-4">
        <a href="{{ route('artikel.index') }}" class="text-blue-600 hover:underline">&laquo; Kembali</a>
    </div>
</div>
@endsection
