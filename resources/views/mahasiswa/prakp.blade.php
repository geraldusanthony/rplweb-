@extends('layouts.layout')
@section('content')
<br>
      <ul class="left">
        <h1>Pengajuan Surat Pra KP</h1> 
      </ul>
    <br>
    <div class="row">
        <div class="col-6">
             <!-- Button trigger modal -->
             <ul class="right">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Ajukan Form 
             </button>
             
            </ul>
        </div>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                   <form class="well form-horizontal">
                      <fieldset>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Nim</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class=""></i></span><input id="" name="" placeholder="" class="form-control" required="true" value="" type="text"></div>
                            </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nik</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class=""></i></span><input id="" name="" placeholder="" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Semester</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class=""></i></span>
                                  <select class="selectpicker form-control">
                                     <option>Ganjil</option>
                                     <option>Genap</option>
                                  </select>
                               </div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Tahun</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class=""></i></span><input id="" name="" placeholder="" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Status PraKP</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class=""></i></span><input id="" name="" placeholder="" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Tools</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class=""></i></span><input id="" name="" placeholder="" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Spesifikasi</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class=""></i></span><input id="" name="" placeholder="" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Penguji</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class=""></i></span><input id="" name="" placeholder="" class="form-control" required="true" value="" type="text"></div>
                            </div>
                            </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Ruang</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class=""></i></span><input id="" name="" placeholder="" class="form-control" required="true" value="" type="text"></div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-4 control-label">Lembaga</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class=""></i></span><input id="" name="" placeholder="" class="form-control" required="true" value="" type="text"></div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-4 control-label">Pimpinan</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class=""></i></span><input id="" name="" placeholder="" class="form-control" required="true" value="" type="text"></div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-4 control-label">Alamat</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class=""></i></span><input id="" name="" placeholder="" class="form-control" required="true" value="" type="text"></div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-4 control-label">No Telfon</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class=""></i></span><input id="" name="" placeholder="" class="form-control" required="true" value="" type="text"></div>
                            </div>
                            </div>
                            </div>
                         </div>
                        </div>
                      </fieldset>
                   </form>
                </td>
             </tr>
          </tbody>
       </table>
    </div>
    @endsection 