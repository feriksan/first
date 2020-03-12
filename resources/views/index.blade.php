@extends('layout.navbar')
@section('isi')
<div class="d-flex" id="wrapper">
    @section('sidebar')
        
    @endsection
        <div class="container-fluid">
            <h1 class="mt-4">Selamat Datang<br>
            Diklat Jarak Jauh Pergunu<br>
        Balai Diklat PP Pergunu Jakarta</h1>
            <p>Lorem Ipsum</p>
          </div>
      </div>
    
    
    <div class="modal fade" id="login" role="dialog">
        <div class="modal-dialog">
        
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Login</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="usr">Username:</label>
                        <input type="text" class="form-control" id="username">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="password">
                    </div>            
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
          
        </div>
    </div>    
@endsection
