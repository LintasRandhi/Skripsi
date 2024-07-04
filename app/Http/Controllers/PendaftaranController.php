<?php

namespace App\Http\Controllers;
use App\Models\Pendaftaran;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {

        return view('pendaftaran');
    }
    public function store(Request $request)
        {
           $validated = $request->validate([
                'tanggal' => 'required|date',
                'nama' => 'required|string',
                'sekolah' => 'required|string',
                'nama_sekolah' => 'nullable|string',
                'kelas_sekolah'=> 'nullable|string',
                'tanggal_lahir' => 'required|date',
                'tanggal_mulai' => 'required|date',
                'level' => 'required|string',
                'pilih_les' => 'required|string',
                'hari' => 'nullable|string',
                'jam' => 'nullable|string',
                'nama_orang_tua' => 'required|string',
                'alamat' => 'required|string',
                'no_handphone' => 'required|string',
                'info_robotickidz' => 'nullable|string',
                'instagram' => 'nullable|string',
            ]);
    
            // Redirect or respond as needed
            return view('auth.login');
    }

}