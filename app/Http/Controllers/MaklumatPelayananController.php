<?php

namespace App\Http\Controllers;

use App\maklumat_pelayanan;
use Illuminate\Http\Request;

class MaklumatPelayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('maklumat_pelayanan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\maklumat_pelayanan  $maklumat_pelayanan
     * @return \Illuminate\Http\Response
     */
    public function show(maklumat_pelayanan $maklumat_pelayanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\maklumat_pelayanan  $maklumat_pelayanan
     * @return \Illuminate\Http\Response
     */
    public function edit(maklumat_pelayanan $maklumat_pelayanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\maklumat_pelayanan  $maklumat_pelayanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, maklumat_pelayanan $maklumat_pelayanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\maklumat_pelayanan  $maklumat_pelayanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(maklumat_pelayanan $maklumat_pelayanan)
    {
        //
    }
}
