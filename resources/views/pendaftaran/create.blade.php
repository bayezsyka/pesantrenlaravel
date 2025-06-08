@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Form Pendaftaran</h1>
    @if(session('status'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">{{ session('status') }}</div>
    @endif
    <form method="POST" action="{{ route('pendaftaran.store') }}" class="space-y-4">
        @csrf
        <div>
            <label class="block text-sm font-medium">Nama</label>
            <input type="text" name="nama" class="form-input w-full" value="{{ old('nama') }}" required>
            @error('nama')<p class="text-red-500 text-sm">{{ $message }}</p>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium">TTL</label>
            <input type="text" name="ttl" class="form-input w-full" value="{{ old('ttl') }}" required>
            @error('ttl')<p class="text-red-500 text-sm">{{ $message }}</p>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium">Alamat</label>
            <textarea name="alamat" class="form-input w-full" required>{{ old('alamat') }}</textarea>
            @error('alamat')<p class="text-red-500 text-sm">{{ $message }}</p>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium">Asal Sekolah</label>
            <input type="text" name="asal_sekolah" class="form-input w-full" value="{{ old('asal_sekolah') }}" required>
            @error('asal_sekolah')<p class="text-red-500 text-sm">{{ $message }}</p>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium">No HP</label>
            <input type="text" name="no_hp" class="form-input w-full" value="{{ old('no_hp') }}" required>
            @error('no_hp')<p class="text-red-500 text-sm">{{ $message }}</p>@enderror
        </div>
        <div class="text-right">
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Kirim</button>
        </div>
    </form>
</div>
@endsection
