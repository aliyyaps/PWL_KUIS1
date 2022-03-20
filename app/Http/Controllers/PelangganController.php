<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
class PelangganController extends Controller
{
    public function pelanggan() {
        $data2 = Pelanggan::all();
        $data2 = Pelanggan::paginate(4);

        return view ('pelanggan',['pelanggan' => $data2])
        ->with('title','Pelanggan');
    }
}
