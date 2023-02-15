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
            <!-- general form elements -->
            <div class="box box-primary">
                
                <div class="box-header with-border">
                    <h3 class="box-title">Tambah Data User</h3>
                </div>
                <div class="box-body">

                    <div class="row">
                        <form action="/store"  method="POST" role="form">
                            @csrf

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter name"> 
                                </div>
                                @if($errors->has('name'))
                                    {{-- <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                                        {{$errors->first('name')}}
                                    </div> --}}
                                    <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h4><i class="icon fa fa-check"></i> Alert!</h4>
                                        {{$errors->first('name')}}
                                      </div>
                                @endif

                                <div class="form-group">
                                    <label for="">Role</label>
                                    <select class="form-control" name="role_id" id="">
                                        @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
    
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                                </div>
                                @if($errors->has('email'))
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                                        {{$errors->first('email')}}
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control"name="password" placeholder="Password">                                   
                                </div>
                                @if($errors->has('password'))
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                                        {{$errors->first('password')}}
                                    </div>
                                @endif 
                            </div>
                           
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">No Rekening</label>
                                    <input type="text" name="no_rekening" class="form-control" placeholder="Password">
                                </div>
                                @if($errors->has('no_rekening'))
                                        {{-- <div class="text-danger">
                                        {{ $errors->first('name')}}
                                    </div> --}}
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                                        {{$errors->first('no_rekening')}}
                                    </div>
                                @endif
                            
                                    <div class="form-group">
                                        <label>IP Address</label>
                        
                                        <div class="input-group">
                                          <div class="input-group-addon">
                                            <i class="fa fa-laptop"></i>
                                          </div>
                                          <input type="text" class="form-control" name="ip_address" data-inputmask="'alias': 'ip'" data-mask>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                      <!-- /.form group -->    
                                    @if($errors->has('ip_address'))
                                        {{-- <div class="text-danger">
                                            {{ $errors->first('name')}}
                                        </div> --}}
                                        <div class="alert alert-danger alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                                            {{$errors->first('ip_address')}}
                                        </div>
                                    @endif

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Kota</label>
                                    <select class="form-control select2"  name="kota">
                                        <option value="" disabled selected>pilih kota</option>
                                        <?php foreach($reffkota as $rk):?>
                                                <option value="<?= $rk->id?>"><?= $rk->nama_kota?></option>
                                        <?php  endforeach;?>   
                                    </select>                                           
                                </div>
                                @if($errors->has('kota'))
                                    {{-- <div class="text-danger">
                                        {{ $errors->first('name')}}
                                    </div> --}}
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                                        {{$errors->first('kota')}}
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status"  class="form-control">
                                        <option value="pending" selected>Pending</option>
                                        <option value="actived">Actived</option>
                                        <option value="blocked">Blocked</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Alamat</label>
                                    <div class="box-body pad">
                                        <textarea class="textarea" placeholder="Place some text here"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height:
                                        18px; border: 1px solid #dddddd; padding: 10px;" name="alamat"></textarea>
                                    </div>
                                </div>
                                @if($errors->has('alamat'))
                                        {{-- <div class="text-danger">
                                            {{ $errors->first('name')}}
                                        </div> --}}
                                        <div class="alert alert-danger alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                                            {{$errors->first('alamat')}}
                                        </div>
                                    @endif
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button  type="submit" class="btn btn-success">Simpan</button>
                                </div>
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