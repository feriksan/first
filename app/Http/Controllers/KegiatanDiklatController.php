<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KegiatanDiklatController extends Controller
{
    public function index()
    {
        return view('kegiatan_diklat');
    }
}
