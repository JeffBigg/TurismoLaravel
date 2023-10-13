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
}
