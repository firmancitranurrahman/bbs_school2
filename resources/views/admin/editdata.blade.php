@extends('admin.index2')

@section('content')
<section class="content-header">
    <h1>
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Edit data</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Data User</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <form action="/update/{{$user->id}}"  method="POST" role="form">
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{ $user->name }}">
                                    @if($errors->has('name'))
                                        <div class="text-danger">
                                            {{ $errors->first('name')}}
                                        </div>
                                    @endif
     
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter email" value="{{$user->email}}">
                                </div>
                            </div>
                            {{-- <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control"name="password" placeholder="Password">
                                </div>
                            </div> --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">No Rekening</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" value="{{$user->no_rekening}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>IP Address</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-laptop"></i>
                                        </div>
                                        <input type="text" value="{{ $user->ip_address }}" class="form-control" name="ip_address" data-inputmask="'alias': 'ip'" data-mask>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->    
                            </div>
                           
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Kota</label>
                                    <select class="form-control"name="kota">
                                        @foreach($reffkota as $r)
                                        <option value="<?= $r->id?>" <?php if($r->id == $user->id ){ echo 'selected'; } ?> > <?= $r->nama_kota?> </option>
                                        @endforeach
                                    </select>                                        
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control" id="type" name="status">
                                        <option value="">Select Quantity</option>
                                        <option value="pending" {{ $user->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="actived" {{ $user->status == 'actived' ? 'selected' : '' }}>Actived</option>
                                        <option value="blocked" {{ $user->status == 'blocked' ? 'selected' : '' }}>Blocked</option>
                                    </select>
                                    
                          
                                </div>
                            </div>
                           

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Alamat</label>
                                    <div class="box-body pad">
                                        <textarea class="textarea" placeholder="Place some text here"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height:
                                        18px; border: 1px solid #dddddd; padding: 10px;" name="alamat"> {{$user->alamat}}</textarea>
                                    </div>
                                </div>
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
</section>


    
@endsection