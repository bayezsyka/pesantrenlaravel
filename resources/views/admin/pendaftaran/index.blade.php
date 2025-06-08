@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Data Pendaftar</h1>
    <div class="overflow-x-auto bg-white shadow rounded">
        <table class="min-w-full">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="px-4 py-2">Nama</th>
                    <th class="px-4 py-2">TTL</th>
                    <th class="px-4 py-2">Asal Sekolah</th>
                    <th class="px-4 py-2">No HP</th>
                    <th class="px-4 py-2">Tanggal Daftar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pendaftars as $p)
                <tr class="border-t">
                    <td class="px-4 py-2">{{ $p->nama }}</td>
                    <td class="px-4 py-2">{{ $p->ttl }}</td>
                    <td class="px-4 py-2">{{ $p->asal_sekolah }}</td>
                    <td class="px-4 py-2">{{ $p->no_hp }}</td>
                    <td class="px-4 py-2">{{ $p->created_at->format('d M Y') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-4">{{ $pendaftars->links() }}</div>
</div>
@endsection
