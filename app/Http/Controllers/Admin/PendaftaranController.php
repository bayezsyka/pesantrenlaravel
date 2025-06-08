<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    public function index()
    {
        $pendaftars = Pendaftaran::latest()->paginate(20);
        return view('admin.pendaftaran.index', compact('pendaftars'));
    }
}
