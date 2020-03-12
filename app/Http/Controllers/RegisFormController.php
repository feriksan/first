<?php

namespace App\Http\Controllers;

use App\regis_form;
use App\administrasi;
use Illuminate\Http\Request;

class RegisFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_regis = administrasi::get();
        return view('form_registrasi', compact('data_regis'));
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
        $regis = new administrasi();
        $regis->username=request('username');
        $regis->password=request('password');
        $regis->email_address=request('email');
        $regis->first_name=request('nama_depan');
        $regis->surname=request('nama_belakang');
        $regis->kab=request('kabupaten');
        $regis->materi_djj=request('materi');
        $regis->nama_gelar=request('nama_gelar');
        $regis->jenis_kelamin=request('gender');
        $regis->NIP=request('nip');
        $regis->NIK=request('no_ktp');
        $regis->tempat_lahir=request('tempat_lahir');
        $regis->tanggal_lahir=request('tgl_lhr');
        $regis->pangkat_golongan=request('pangkat');
        $regis->jabatan=request('jabatan');
        $regis->mata_pelajaran_diampu=request('mapel');
        $regis->no_telp=request('no_hp');
        $regis->alamat_rumah=request('rumah');
        $regis->alamat_kantor=request('kantor');
        $regis->pendidikan_terakhir=request('pendidikan');
        $regis->unit_kerja=request('unit_kerja');
        $regis->jurusan_pendidikan_terakhir=request('jurusan');
        $regis->nama_sekolah_perguruan_tinggi=request('nama_sklh');
        $regis->tahun_kelulusan=request('lulus');
        $regis->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\regis_form  $regis_form
     * @return \Illuminate\Http\Response
     */
    public function show(regis_form $regis_form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\regis_form  $regis_form
     * @return \Illuminate\Http\Response
     */
    public function edit(regis_form $regis_form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\regis_form  $regis_form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, regis_form $regis_form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\regis_form  $regis_form
     * @return \Illuminate\Http\Response
     */
    public function destroy(regis_form $regis_form)
    {
        //
    }
}
