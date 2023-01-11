<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function principal()
    {
        return view('index');
    }
    public function sobre()
    {
        return view('sobre');
    }
    public function primeiro()
    {
        return view('primeiro');
    }
    public function act()
    {
        return view('act');
    }
    public function nome()
    {
        return view('nome');
    }
}
