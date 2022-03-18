<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function supplier() {
        $data = Supplier::all();
        // $data = Pegawai::paginate(1);
        return view('supplier', ['daftar' => $data])
        ->with('title','Supplier');
    }
}