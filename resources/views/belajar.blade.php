@extends('layout.navbar')
@section('isi')
<div class="d-flex" id="wrapper">
        <div class="container-fluid">
            <h1 class="mt-4">Belajar</h1>
            <div class="form-group">
                        <label for="kabupaten">Course categories:</label>
                        <select class="form-control" id="online_course">
                            <option>Course categories:</option>
                            <option>DJJ Online BDK</option>
                            <option>DJJ Online BDK / Simulasi Pembelajaran</option>
                        </select>
            </div>
            <div class="form-group">
                        <label for="email">Search courses:</label>
                        <input type="text" class="form-control" id="search"/>
                    </div>
                    <div class="form-group text-center mt-3">
                        <input type="Search" name"submit" value="cari" class="btn btn-info mr-5"  />
                    </div>
          </div>
      </div>    
@endsection
