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
      <li class="active">Tambah Data H2H</li>
    </ol>
</section>
<section>
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="box box-danger">
              <div class="box-header with-border">
                <h3 class="box-title">Tambah Data H2H</h3>
              </div>
              <div class="box-body">                    
                <div class="row">
                  <form action="">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Id User</label>
                        <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      </div>
                      <div class="form-group">
                          <label for="">Username</label>
                          <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      </div>
                      <div class="form-group">
                          <label for="">Password</label>
                          <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      </div>
                      <div class="form-group">
                          <label for="">Key</label>
                          <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      </div>
                      <div class="form-group">
                        <label for="">Url</label>
                        <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      </div>
                    </div>
                    {{-- end col-md --}}
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Url</label>
                        <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      </div>
                      <div class="form-group">
                        <label for="">Token</label>
                        <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      </div>
    
                      <div class="form-group">
                        <label for="">Expired Token</label>
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