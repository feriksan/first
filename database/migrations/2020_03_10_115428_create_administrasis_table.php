<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrasis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('password');
            $table->string('email_address');
            $table->string('first_name');
            $table->string('surname');
            $table->string('kab');
            $table->string('materi_djj');
            $table->string('nama_gelar');
            $table->string('jenis_kelamin');
            $table->string('NIP');
            $table->string('NIK');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('pangkat_golongan');
            $table->string('jabatan');
            $table->string('mata_pelajaran_diampu');
            $table->integer('no_telp');
            $table->string('alamat_rumah');
            $table->string('alamat_kantor');
            $table->string('pendidikan_terakhir');
            $table->string('jurusan_pendidikan_terakhir');
            $table->string('nama_sekolah_perguruan_tinggi');
            $table->string('tahun_kelulusan');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administrasis');
    }
}
