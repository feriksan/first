<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PilihanDiklatController extends Controller
{
    public function index()
    {
        return view('pilihan_diklat');
    }
}
