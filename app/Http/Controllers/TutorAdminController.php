<?php

namespace App\Http\Controllers;

use App\tutor_admin;
use Illuminate\Http\Request;

class TutorAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tutor_admin');
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
     * @param  \App\tutor_admin  $tutor_admin
     * @return \Illuminate\Http\Response
     */
    public function show(tutor_admin $tutor_admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tutor_admin  $tutor_admin
     * @return \Illuminate\Http\Response
     */
    public function edit(tutor_admin $tutor_admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tutor_admin  $tutor_admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tutor_admin $tutor_admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tutor_admin  $tutor_admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(tutor_admin $tutor_admin)
    {
        //
    }
}
