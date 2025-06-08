<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikel::latest()->paginate(10);
        return view('artikel.index', compact('artikels'));
    }

    public function show(Artikel $artikel)
    {
        return view('artikel.show', compact('artikel'));
    }
}
