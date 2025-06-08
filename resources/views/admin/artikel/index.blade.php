@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Kelola Artikel</h1>
        <a href="{{ route('artikel.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded">Tambah</a>
    </div>
    <div class="overflow-x-auto bg-white shadow rounded">
        <table class="min-w-full">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="px-4 py-2">Judul</th>
                    <th class="px-4 py-2">Penulis</th>
                    <th class="px-4 py-2">Tanggal</th>
                    <th class="px-4 py-2 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($artikels as $a)
                <tr class="border-t">
                    <td class="px-4 py-2">{{ $a->judul }}</td>
                    <td class="px-4 py-2">{{ $a->penulis }}</td>
                    <td class="px-4 py-2">{{ $a->created_at->format('d M Y') }}</td>
                    <td class="px-4 py-2 text-right space-x-2">
                        <a href="{{ route('artikel.edit',$a) }}" class="text-blue-600">Edit</a>
                        <form action="{{ route('artikel.destroy',$a) }}" method="POST" class="inline" onsubmit="return confirm('Hapus?')">
                            @csrf @method('DELETE')
                            <button class="text-red-600">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-4">{{ $artikels->links() }}</div>
</div>
@endsection
