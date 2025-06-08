<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function create()
    {
        return view('pendaftaran.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:100',
            'ttl' => 'required|string|max:100',
            'alamat' => 'required|string',
            'asal_sekolah' => 'required|string|max:100',
            'no_hp' => 'required|string|max:20',
        ]);
        Pendaftaran::create($data);
        return redirect()->route('pendaftaran.create')->with('status', 'Pendaftaran berhasil');
    }
}
