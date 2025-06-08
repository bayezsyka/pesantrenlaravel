<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikel::latest()->paginate(10);
        return view('admin.artikel.index', compact('artikels'));
    }

    public function create()
    {
        return view('admin.artikel.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:100',
            'gambar' => 'nullable|string',
            'isi' => 'required',
        ]);
        Artikel::create($data);
        return redirect()->route('dashboard.artikel.index')->with('status', 'Artikel created');
    }

    public function edit(Artikel $artikel)
    {
        return view('admin.artikel.edit', compact('artikel'));
    }

    public function update(Request $request, Artikel $artikel)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:100',
            'gambar' => 'nullable|string',
            'isi' => 'required',
        ]);
        $artikel->update($data);
        return redirect()->route('dashboard.artikel.index')->with('status', 'Artikel updated');
    }

    public function destroy(Artikel $artikel)
    {
        $artikel->delete();
        return redirect()->route('dashboard.artikel.index')->with('status', 'Artikel deleted');
    }
}
