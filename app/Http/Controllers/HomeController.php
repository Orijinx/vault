<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User_Class\Intent;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $intent=new Intent('Портфолио');
        
        return view('main.home', compact('intent'));
    }
}
