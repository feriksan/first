@extends('layout.navbar')
@section('isi')

<div class="container">
    	<div class="row">
        	<div class="col-lg-6 col-md-12 mt-4">
            	<h4 class="span-title"><span>Buat Username dan Password</span></h4>
            </div>
        </div>
        <form action="/datastore" method="GET">
        <div class="row">
        	<div class="col-lg-6 col-md-12">
            	<div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" />
				</div>
				<div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" />
                </div>  
            </div>
        </div>
        
        <div class="row">
        	<div class="col-lg-6 col-md-12 mt-4">
            	<h4 class="span-title"><span>Detail Lengkap</span></h4>
            </div>
        </div>
        
        <div class="row">
        	<div class="col-lg-6 col-md-12">
            	<div class="form-group">
                    <label for="email">Alamat Email:</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan email" />
				</div>
				<div class="form-group">
                    <label for="email">Konfirmasi Email:</label>
                    <input type="text" class="form-control" id="email" name="re_email"laceholder="Masukkan email kembali" />
                </div>
                <div class="form-group">
                    <label for="email">Nama Depan:</label>
                    <input type="text" class="form-control" id="nama-dpn" name="nama_depan" placeholder="Masukkan nama depan" />
                </div> 
                <div class="form-group">
                    <label for="email">Nama Belakang:</label>
                    <input type="text" class="form-control" id="nama-blkg" name="nama_belakang" placeholder="Masukkan nama belakang" />
                </div>  
                <div class="form-group">
                    <label for="kabupaten">Kab./Kota Unit Kerja:</label>
                    <select class="form-control" id="kabupaten" name="kabupaten">
                    	<option>Pilih Kabupaten / Kota:</option>
                        <option value="kab lebak">kab lebak</option>
                        <option value="kota cilegon">kota cilegon</option>
                        <option value="kota tanggerang">kota tanggerang</option>
                        <option value="kab tanggerang">kab tanggerang</option>
                        <option value="kota tanggerang selatan">kota tanggerang selatan</option>
                        <option value="kota serang">kota serang</option>
                        <option value="kab serang">kab serang</option>
                        <option value="kab pandegelang">kab pandegelang</option>
                    </select>
                </div>
            </div>
        </div>
        
        <div class="row">
        	<div class="col-lg-6 col-md-12 mt-4">
            	<h4 class="span-title"><span>Identitas Peserta Diklat</span></h4>
            </div>
        </div>
        
        <div class="row">
        	<div class="col-lg-6 col-md-12">
            	<div class="form-group">
                    <label for="materi">Materi DJJ yang Dipilih:</label>
                    <select class="form-control" id="materi" name="materi">
                    	<option>Pilih Materi:</option>
                        <option value="Pelatihan Penelitian Tindakan Kelas Melalui E-Learning bagi Guru Mts/Pendidikan Agama SMP">Pelatihan Penelitian Tindakan Kelas Melalui E-Learning bagi Guru Mts/Pendidikan Agama SMP</option>
                        <option value="Pelatihan Penelitian Tindakan Kepegawaian (PTKp) Melalui E-Learning bagi Pengawas Madrasah/Pendidikan Agama (Khusus PNS)">Pelatihan Penelitian Tindakan Kepegawaian (PTKp) Melalui E-Learning bagi Pengawas Madrasah/Pendidikan Agama (Khusus PNS)</option>
                        <option value="Pelatihan PKG dan PKB Melalui E-Learning bagi Guru ML/Ppendidikan Agama SD (PNS)">Pelatihan PKG dan PKB Melalui E-Learning bagi Guru ML/Ppendidikan Agama SD (PNS)</option>
                        <option value="Pelatihan PKG dan PKB Melalui E-Learning bagi Guru Mts/Pendidikan Agama SMP (Khusus PNS)">Pelatihan PKG dan PKB Melalui E-Learning bagi Guru Mts/Pendidikan Agama SMP (Khusus PNS)</option>
                        <option value="Pelatihan PKG dan PKB Melalui E-Learning bagi Guru MA/Pendidikan Agama SMA (Khusus PNS)">Pelatihan PKG dan PKB Melalui E-Learning bagi Guru MA/Pendidikan Agama SMA (Khusus PNS)</option>
                        <option value="Pelatihan Publikasi Ilmiah Melalui E-Learning bagi Guru Mts/Pendidikan Agama SMP (Khusus PNS)">Pelatihan Publikasi Ilmiah Melalui E-Learning bagi Guru Mts/Pendidikan Agama SMP (Khusus PNS)</option>
                    </select>
                </div>
            	<div class="form-group">
                    <label for="nama_lkp">Nama Lengkap (Nama + Gelar):</label>
                    <input type="text" class="form-control" id="nama_lkp" name="nama_gelar" placeholder="Masukkan nama lengkap + gelar anda" />
				</div>
				<div class="form-group">
                    <label for="gender">Jenis Kelamin:</label>
                    <select class="form-control" id="gender" name="gender">
                    	<option>Pilih Jenis Kelamin:</option>
                        <option value="Laki-Laki">Laki - Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nip">NIP:</label>
                    <input type="text" class="form-control" id="nip" name="nip" placeholder="Masukkan NIP anda" />
                </div> 
                <div class="form-group">
                    <label for="no_ktp">No KTP / NIK:</label>
                    <input type="text" class="form-control" id="no_ktp" name="no_ktp" placeholder="Masukkan no KTP atau NIK anda" />
                </div> 
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir:</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan tempat lahir anda" />
                </div>
                <div class="form-group">
                    <label for="tgl_lhr">Tanggal Lahir:</label>
                    <input type="date" name="tgl_lhr" class="form-control" id="tgl_lhr" />
                </div>
                <div class="form-group">
                    <label for="pangkat">Pangkat:</label>
                    <select class="form-control" id="pangkat" name="pangkat">
                    	<option>Pilih Pangkat:</option>
                        <option value="-Non PNS">-Non PNS</option>
                        <option value="Pengatur Muda -II/a">Pengatur Muda -II/a</option>
                        <option value="Pengatur Muda Tk.l -II/b">Pengatur Muda Tk.l -II/b</option>
                        <option value="Pengatur -II/c">Pengatur -II/c</option>
                        <option value="Pengatur Tk.l -II/d">Pengatur Tk.l -II/d</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Jabatan">Jabatan:</label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukkan jabatan anda" />
                </div>
                <div class="form-group">
                    <label for="matpel">Mata Pelajaran yang Diampu (Khusus Guru):</label>
                    <select class="form-control" id="matpel" name="mapel">
                    	<option>Pilih Pangkat:</option>
                        <option value="-NON Guru">-NON Guru</option>
                        <option value="Administrasi">Administrasi</option>
                        <option value="Akidah Akhlak">Akidah Akhlak</option>
                        <option value="AL-Qur'an">AL-Qur'an</option>
                        <option value="an Hadist">An Hadist</option>
                        <option value="Antropologi">Antropologi</option>
                        <option value="Bahasa Arab">Bahasa Arab</option>
                        <option value="Bahasa Inggris">Bahasa Inggris</option>
                        <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                        <option value="Bahasa Jepang">Bahasa Jepang</option>
                        <option value="Bahasa Jerman">Bahasa Jerman</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tempat_tugas">Tempat Tugas:</label>
                    <input type="text" class="form-control" id="tempat_tugas" name="tempat_tugas" placeholder="Masukkan tempat tugas anda" />
                </div>
                <div class="form-group">
                    <label for="unit_kerja">Unit Kerja:</label>
                    <select class="form-control" id="unit_kerja" name="unit_kerja">
                    	<option>Pilih Unit Kerja:</option>
                        <option>Kementrian A</option>
                        <option>Kemebtrian B</option>
                        <option>Kementrian C</option>
                        <option>Kementrian D</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="no_hp">No Telp / HP:</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukkan nomor telepon anda" />
                </div>
                <div class="form-group">
                    <label for="rumah">Alamat Rumah:</label>
                    <input type="text" class="form-control" id="rumah" name="rumah" placeholder="Masukkan alamat rumah anda" />
                </div>
                <div class="form-group">
                    <label for="kantor">Alamat Kantor:</label>
                    <input type="text" class="form-control" id="kantor" name="kantor" placeholder="Masukkan alamat kantor anda" />
                </div>
                <div class="form-group">
                    <label for="hp_kantor">No HP Kantor:</label>
                    <input type="text" class="form-control" id="hp_kantor" name="hp_kantor" placeholder="Masukkan nomor telepon kantor anda" />
                </div>
                <div class="form-group">
                    <label for="pendidikan">Pendidikan Terakhir:</label>
                    <select class="form-control" id="pendidikan" name="pendidikan">
                    	<option>Pilih Pendidikan Terakhir:</option>
                        <option value="SLTP/Mts">SLTP/Mts</option>
                        <option value="SLTA/MA/SMK">SLTA/MA/SMK</option>
                        <option value="D.I">D.I</option>
                        <option value="D.II">D.II</option>
                        <option value="D.III">D.III</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="hurusan">Jurusan Terakhir Pendidikan:</label>
                    <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Masukkan jurusan terakhir pendidikan anda" />
                </div>
                <div class="form-group">
                    <label for="nama_sklh">Nama Sekolah/Perguruan Tinggi:</label>
                    <input type="text" class="form-control" id="nama_sklh" name="nama_sklh" placeholder="Masukkan nama sekolah ? perguruan tinggi anda" />
                </div>
                <div class="form-group">
                    <label for="pendidikan">Tahun Kelulusan:</label>
                    <select class="form-control" id="pendidikan" name="lulus">
                        <option>Pilih Tahun Kelulusan:</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                    </select>
                </div>
                <div class="form-group text-center mt-3">
                    <input type="submit" name"submit" value="Kirim" class="btn btn-info mr-5"  />
                    <input type="reset" name"reset" value="Reset" class="btn btn-danger"  />
                </div>
                
            </div>
            
        </div>
        </form>
    </div>    
@endsection
