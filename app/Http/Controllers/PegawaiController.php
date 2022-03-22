<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function pegawai() {
        $data = Pegawai::all();
        $data = Pegawai::paginate(4);
        return view('pegawai', ['daftar' => $data])
        ->with('title','Pegawai');
    }
}