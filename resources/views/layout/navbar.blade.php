<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link href="css/css.simple-sidebar" rel="stylesheet">

<title>Diklat Pergunu</title>
<style>
body {
  overflow-x: hidden;
}

#sidebar-wrapper {
  min-height: 100vh;
  margin-left: -15rem;
  -webkit-transition: margin .25s ease-out;
  -moz-transition: margin .25s ease-out;
  -o-transition: margin .25s ease-out;
  transition: margin .25s ease-out;
}

#sidebar-wrapper .sidebar-heading {
  padding: 0.875rem 1.25rem;
  font-size: 1.2rem;
}

#sidebar-wrapper .list-group {
  width: 15rem;
}

#page-content-wrapper {
  min-width: 100vw;
}

#wrapper.toggled #sidebar-wrapper {
  margin-left: 0;
}

@media (min-width: 768px) {
  #sidebar-wrapper {
    margin-left: 0;
  }

  #page-content-wrapper {
    min-width: 0;
    width: 100%;
  }

  #wrapper.toggled #sidebar-wrapper {
    margin-left: -15rem;
  }
}
</style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
       <!-- <img src="146725003457747572a3bd6.jpg" style="width: 10%"> -->
	<div class="container">
		<button class="navbar-toggler" type="button" data-toggle="dropdown" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        	<ul class="navbar-nav mr-auto">
                <li class="nav-item">
                	<a class="nav-link" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                	<a class="nav-link" href="zona">Zona Integritas</a>
                </li>
                <li class="nav-item">
                	<a class="nav-link" href="maklumat">Maklumat Pelayanan</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">DJJ</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="latar_belakang">Latar Belakang</a>
                        <a class="dropdown-item" href="tujuan">Tujuan</a>
                        <a class="dropdown-item" href="pilihan_diklat">Pilihan Diklat</a>
                        <a class="dropdown-item" href="kegiatan_diklat">Kegiatan Diklat</a>
                        <a class="dropdown-item" href="sertifikasi">Sertifikasi</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Registrasi</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="telaga-waja-rafting.html">Panduan</a>
                        <a class="dropdown-item" href="form">Registrasi DJJ</a>
                    </div>
                </li>
                <li class="nav-item">
                	<a class="nav-link" href="belajar">Belajar</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Panduan</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="telaga-waja-rafting.html">Panduan</a>
                        <a class="dropdown-item" href="ayung-rafting.html">Tujuan Panduan</a>
                    </div>
                </li>
                <li class="nav-item">
                	<a class="nav-link" href="tutor">Tutor Admin</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
              	<li class="nav-item mr-1">
                    <a class="nav-link" href="#modalSearch" data-toggle="modal" data-target="#login">Login</a>
				</li>
              	<li class="nav-item mr-1">
              		<a href="#" class="btn btn-light">Sign Up</a>
             	</li>
           </ul>
        </div>
  </div>
</nav>
@section('sidebar')
@show




<div class="d-flex" id="wrapper">
<div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading">Diklat Pergunu</div>
    <div class="list-group list-group-flush">


        <div class="panel-group">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" href="#collapse1">Dasboard</a>
                </h4>
              </div>
              <div id="collapse1" class="panel-collapse collapse">
                <ul class="list-group">

                    
                        <h6 class="panel-title">
                          <a data-toggle="collapse" href="#collapse1">Collapsible list group</a>
                        </h6>
                      
                      <div id="collapse1" class="panel-collapse collapse">
                        <ul class="list-group">
                          <li class="list-group-item">One</li>
                          <li class="list-group-item">Two</li>
                          <li class="list-group-item">Three</li>
                        </ul>
                      </div>



                  {{-- <li class="list-group-item">One</li>
                  <li class="list-group-item">Two</li>
                  <li class="list-group-item">Three</li> --}}
                </ul>
              </div>
            </div>
          </div>
        


      <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Sambutan</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Sosial Media</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Support Calls</a>
      <div class="sidebar-heading">Navigation</div>
      <a href="#" class="list-group-item list-group-item-action bg-light">My Course</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Course</a>
      <div class="sidebar-heading">Administration</div>
      <a href="#" class="list-group-item list-group-item-action bg-light">My Profile Setting</a>
    </div>
  </div>
@section('isi')
@show