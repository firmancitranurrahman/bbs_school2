@extends('admin.index2')

@section('content')
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
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tambah Data Kota</h3>
                    </div>
                    <div class="box-body">
                        <form action="/storekota" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Kota</label>
                                <input type="text" class="form-control" name="nama_kota" placeholder="Enter city"> 
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tambah Data Prodi</h3>
                    </div>
                    <div class="box-body">
                        <form action="/storeprodi " method="Post">
                            @csrf

                            {{-- <div class="form-group">
                                <label for="exampleInputEmail1">ID</label>
                                <input type="text" class="form-control" name="name" disabled placeholder="..."> 
                            </div> --}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Prodi</label>
                                <input  type="text" class="form-control" name="nama_prodi"  placeholder="Enter Prodi.."> 
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tambah Data Jenis</h3>
                    </div>
                    <div class="box-body">
                        <form action="/storejenis" method="post">
                            @csrf
                            {{-- <div class="form-group">
                                <label for="exampleInputEmail1">ID</label>
                                <input type="text" class="form-control" name="name" disabled placeholder="..."> 
                            </div> --}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Jenis</label>
                                <input  type="text" class="form-control" name="nama"  placeholder="Enter city"> 
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tambah Data H2H</h3>
                    </div>
                    <div class="box-body">
                        <form action="/storeh2h" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="exampleInputEmail1">id_user</label>
                                <select class="form-control"name="id_user">
                                   @foreach ($user as $a)
                                         <option value="{{ $a->id }}">{{ $a->id }} - {{ $a->name }}</option>
                                   @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="enter username"> 
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="enter password"> 
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Key</label>
                                <input type="text" class="form-control" name="key"  placeholder="generate key" disabled> 
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Url</label>
                                <input type="text" class="form-control" name="url"  placeholder="generate url" disabled> 
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection