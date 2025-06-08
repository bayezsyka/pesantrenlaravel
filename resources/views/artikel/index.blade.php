@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Daftar Artikel</h1>
    <div class="grid gap-4">
        @foreach($artikels as $artikel)
            <div class="p-4 border rounded">
                <h2 class="text-xl font-semibold">
                    <a href="{{ route('artikel.show', $artikel) }}" class="text-blue-600 hover:underline">
                        {{ $artikel->judul }}
                    </a>
                </h2>
                <p class="text-sm text-gray-500">{{ $artikel->penulis }} - {{ $artikel->created_at->format('d M Y') }}</p>
            </div>
        @endforeach
    </div>
    <div class="mt-4">
        {{ $artikels->links() }}
    </div>
</div>
@endsection
