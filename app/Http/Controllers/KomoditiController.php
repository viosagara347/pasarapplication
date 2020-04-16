<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Komoditi;

class KomoditiController extends Controller
{
    //
    public function index()
    {
    	$komoditi = Komoditi::all();
    	return view('komoditi', ['komoditi' => $komoditi]);
    }

    public function tambah()
    {
    	return view('komoditi_tambah');
    }
}
