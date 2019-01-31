<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function inicio() {
    	return view('formulario');
    }

    public function confirmacion() {
    	return view('confirmacion');
    }
}
