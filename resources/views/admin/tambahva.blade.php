@extends('admin.index2')
@section('content')
    <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      {{-- List Data --}}
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">List Data</li>
    </ol>
</section>
<section class="content">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">Tambah Data Virtual Acoount</h3>
          </div>
          <div class="box-body">                    
            <div class="row">
              <form action="/storeva" method="POST">
                @csrf
                <div class="col-md-6">

                  <div class="form-group">
                    <label for="">Kode</label>
                    <input type="text" name="kode"  class="form-control" placeholder="" disabled aria-describedby="helpId">
                  </div>
                  
                  <div class="form-group">
                    <label for="">No Induk</label>
                    <input type="text" name="no_induk"  class="form-control" placeholder="" aria-describedby="helpId">
                  </div>
                  @if ($errors->has('no_induk'))
                  <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                    {{$errors->first('no_induk')}}
                  </div>
                  @endif
                  <div class="form-group">
                      <label for="">Nama</label>
                      <input type="text" name="nama" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  </div>
                  @if ($errors->has('nama'))
                  <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                    {{$errors->first('nama')}}
                  </div>
                  @endif
                
                  <div class="form-group">
                    <label for="exampleInputPassword1">Prodi</label>
                    <select class="form-control"name="prodi">
                        <option value="" disabled selected>pilih prodi</option>
                        <?php foreach($reffprodi as $rp):?>
                                <option value="<?= $rp->id?>"><?= $rp->nama_prodi?></option>
                        <?php  endforeach;?>   
                    </select>                                           
                 </div>
                  
                 
                  
                  <!-- Date mm/dd/yyyy -->
                  <div class="form-group">
                    <label for="">Tahun</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" name="tahun" class="form-control" data-inputmask="'alias': 'yyyy'" data-mask>
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                  @if ($errors->has('tahun'))
                  <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                    {{$errors->first('tahun')}}
                  </div>
                  @endif

                  <div class="form-group">
                    <label for="">Status</label>
                    <select  class="form-control"name="status" >
                      <option value="belum proses" selected>Belum Proses</option>
                      <option disabled value="sedang proses">Sedang Proses</option>
                      <option disabled value="sudah proses">Sudah Proses</option>
                    </select>
                  </div>

                  
                  <div class="form-group">
                    <label for="">Reff</label>
                    <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  </div>
                </div>
                {{-- end col-md --}}
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Semester</label>
                    <select  class="form-control"name="semester" id="">
                      <option selected>Pilih Semester</option>

                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Nominal</label>
                    <input type="text" name="nominal" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  </div>

                  <div class="form-group">
                    <label for="">Nominal Bayar</label>
                    <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  </div>
                  <div class="form-group">
                    <label for="">Tanggal Bayar</label>
                    <input type="date" name="tgl_bayar" id="date-picker" class="form-control" placeholder="" aria-describedby="helpId">
                  </div>

                  <div class="form-group">
                      <label for="exampleInputPassword1"></label>
                      <select class="form-control"name="jenis">
                          <option value=""  selected>pilih jenis</option>
                          <?php foreach($reffjenis as $j):?>
                                <option value="<?= $j->id?>"><?= $j->nama ?></option>
                          <?php  endforeach;?>   
                      </select>                                           
                  </div>

                  <div class="form-group">
                    <label for="">Id</label>
                    <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  </div>

                </div>
                {{-- col-md --}}
                <div class="col-md-4">
                      <button type="submit" class="btn btn-success">Save</button>            
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection





