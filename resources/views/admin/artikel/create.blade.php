@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Tambah Artikel</h1>
    <form method="POST" action="{{ route('artikel.store') }}" class="space-y-4">
        @csrf
        <div>
            <label class="block text-sm font-medium">Judul</label>
            <input type="text" name="judul" class="form-input w-full" required value="{{ old('judul') }}">
            @error('judul')<p class="text-red-500 text-sm">{{ $message }}</p>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium">Penulis</label>
            <input type="text" name="penulis" class="form-input w-full" required value="{{ old('penulis') }}">
        </div>
        <div>
            <label class="block text-sm font-medium">URL Gambar</label>
            <input type="text" name="gambar" class="form-input w-full" value="{{ old('gambar') }}">
        </div>
        <div>
            <label class="block text-sm font-medium">Isi</label>
            <textarea name="isi" class="form-input w-full" rows="5" required>{{ old('isi') }}</textarea>
        </div>
        <div class="text-right">
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Simpan</button>
        </div>
    </form>
</div>
@endsection
