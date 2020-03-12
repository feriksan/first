<?php

namespace App\Http\Controllers;

use App\zona_intergritas;
use Illuminate\Http\Request;

class ZonaIntergritasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('zona_intergritas');
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
     * @param  \App\zona_intergritas  $zona_intergritas
     * @return \Illuminate\Http\Response
     */
    public function show(zona_intergritas $zona_intergritas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\zona_intergritas  $zona_intergritas
     * @return \Illuminate\Http\Response
     */
    public function edit(zona_intergritas $zona_intergritas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\zona_intergritas  $zona_intergritas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, zona_intergritas $zona_intergritas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\zona_intergritas  $zona_intergritas
     * @return \Illuminate\Http\Response
     */
    public function destroy(zona_intergritas $zona_intergritas)
    {
        //
    }
}
