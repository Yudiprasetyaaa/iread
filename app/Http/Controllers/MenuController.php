<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function beranda()
    {
        return view('home');
    }
    public function novel()
    {
        return view('nvl');
    }
    public function cergam()
    {
        return view('crgm');
    }
    public function komik()
    {
        return view('kmk');
    }
    public function ensiklopedi()
    {
        return view('ensi');
    }
    public function antologi()
    {
        return view('antl');
    }
    public function biografi()
    {
        return view('bio');
    }
    public function aboutus()
    {
        return view('prfl');
    }
}
