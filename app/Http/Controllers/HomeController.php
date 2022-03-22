<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
<<<<<<< HEAD
    public function index()
    {
        return view('index')
=======
    public function home()
    {
        return view('home')
>>>>>>> 884bc0bcb6e10f25468050502d1dd626a64c5ecd
        ->with('title','Home');
    }
}
