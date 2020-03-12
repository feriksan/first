<?php

namespace App\Http\Controllers;

use App\belajar;
use Illuminate\Http\Request;

class BelajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('belajar');
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
     * @param  \App\belajar  $belajar
     * @return \Illuminate\Http\Response
     */
    public function show(belajar $belajar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\belajar  $belajar
     * @return \Illuminate\Http\Response
     */
    public function edit(belajar $belajar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\belajar  $belajar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, belajar $belajar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\belajar  $belajar
     * @return \Illuminate\Http\Response
     */
    public function destroy(belajar $belajar)
    {
        //
    }
}
