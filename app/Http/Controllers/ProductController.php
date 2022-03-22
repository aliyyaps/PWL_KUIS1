<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function product()
    {
        // $data = Product::all();
        $data = Product::paginate(4);

        return view ('product',['daftar' => $data])
        ->with('title','Product');
    }
}
