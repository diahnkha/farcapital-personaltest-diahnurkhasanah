<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendonor;

class PetugasController extends Controller
{
    public function index()
    {
        return view('petugas.dashboard');
    }
    public function listpendonor()
    {
        return view('petugas.listpendonor', [
            'pendonors' => Pendonor::all(),
            'status_kelayakan' => Pendonor::pluck('status_kelayakan')
        ]);
    }

    public function detailpendonor(Pendonor $pendonor)
    {
        return view('petugas.detailpendonor',['pendonor' => $pendonor]);
    }
}
