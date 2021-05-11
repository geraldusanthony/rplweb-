@extends('layouts.layout')
@section('content')
<br>
      <ul class="left">
        <h1>Data Mahasiswa</h1> 
      </ul>
    <br>
<div class="container">
  @if(session('sukses'))
      <div class="alert alert-success" role="alert">
       {{session('sukses')}}
      </div>
  @endif
    <div class="row">
        <div class="col-6">
             <!-- Button trigger modal -->
             <ul class="right">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Tambah Data
             </button>
             
            </ul>
        </div>
        <br>
        <table class="table">
          <tr>
               <th>Nim</th>
               <th>Nama</th> 
               <th>Semester</th>
               <th>Tahun Ajaran</th> 
               <th>Email</th>
               <th>Password</th>
              </tr>
          @foreach ($data_mahasiswa as $mahasiswa)
              <tr>
                  <td>{{$mahasiswa->nim}}</td>
                  <td>{{$mahasiswa->nama}}</td> 
                  <td>{{$mahasiswa->semester}}</td> 
                  <td>{{$mahasiswa->tahun}}</td> 
                  <td>{{$mahasiswa->email}}</td>
                  <td>{{$mahasiswa->password}}</td>
                </tr>
          @endforeach
          
    </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5> 
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
        <form action="/mahasiswa/create" method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <label for="exampleInputEmail1">Nim</label> 
            <input name="nim"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nim">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nama</label> 
            <input name="nama"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
         </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Semester</label>
            <select class="selectpicker form-control">
                <option>Ganjil</option>
                <option>Genap</option>
            </select>
          </div>
           <div class="form-group">
              <label for="exampleInputEmail1">Tahun Ajaran</label>
              <input name="tahun"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
           </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Email</label>
            <textarea name="email"class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Password</label>
            <input id="password" type="password" class="form-control" name="password" required>
          </div>
      </div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@endsection 