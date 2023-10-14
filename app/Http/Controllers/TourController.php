<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        return view('turismo.index');
    }
    public function showlaguna()
    {
        return view('turismo.showlaguna');
    }
    public function belladurmiente()
    {
        return view('turismo.belladurmiente');
    }
    public function cuevalechuza()
    {
        return view('turismo.cuevalechuza');
    }
    public function huanucopampa()
    {
        return view('turismo.huanucopampa');
    }
    public function kotosh()
    {
        return view('turismo.kotosh');
    }
    public function cordillera()
    {
        return view('turismo.cordillera');
    }
}
