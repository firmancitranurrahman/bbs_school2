@extends('admin.index2')
@section('content')
<section class="content-header">
    <h1>
      Role And Permissions
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Role And Permissions</li>
    </ol>
</section>
<section class="content">
    <div class="container-fluid"> 
      <div class="row">
        <div class="col-md-6">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">List Data Permissions</h3><br><br>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-success">
                        tambah data 
                    </button>
                    <div class="modal modal-success fade" id="modal-success">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">Success Modal</h4>
                            </div>             
                            <div class="modal-body">
                            <form action="/storepermission" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for=""></label>
                                    <input class="form-control" name="name" type="text">
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-outline">Save changes</button>
                            </div>
                         </form>

                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Action</th>
                        </thead>
                        <?php $nomor=1 ; ?>
                        @foreach ($permission as $p)
                            
                        <tbody>
                            <tr>
                                <td>{{ $nomor  }}</td>
                                <td>{{ $p->name }}</td>
                                <td>
                                    <a href="/deletepermission/{{ $p->id }}" class="fa fa-trash btn btn-danger"></a>
                                    <button type="button" class=" btn btn-warning fa fa-pencil" data-toggle="modal" data-target="#edit-modal1{{ $p->id }}"></button>
                                </td>
                                                  
                                <div class="modal fade" id="edit-modal1{{ $p->id }}">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title" align="center"><b>Edit User</b></h4>
                                      </div>
                                      <div class="modal-body">
                                        {{-- {{ dd($j->id) }} --}}
                                        <form role="form" method="post" action="/updatepermission/{{ $p->id }}">
                                          @csrf
                                          @method('PUT')
                                          <div class="box-body">
                                            <div class="form-group">
                                              <label for="exampleInputEmail1">Name Permssion</label> 
                                              <input type="text" class="form-control" name="name" placeholder="Enter password" value="{{ $p->name }}">
                                            </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>                  
                            </tr>
                            <?php $nomor++ ;?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box box-danger">
                <div class="box-header">
                    <h3 class="box-title">List Data Role</h3>
                </div>
                <div class="box-body">
                   <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                           <?php $nomor= 1 ;?> 
                           @foreach ($role as $r)
                            <tr>
                                <td>{{ $nomor ;}}</td>
                                <td>{{ $r->name }}</td>
                                <td>
                                  <button type="button" class=" btn btn-warning fa fa-pencil" data-toggle="modal" data-target="#edit-modal2{{ $r->id }}"></button>
                                </td>
                                                  
                                <div class="modal fade" id="edit-modal2{{ $r->id }}">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title" align="center"><b>Controlling Permission</b></h4>
                                      </div>
                                      <div class="modal-body">
                                        {{-- {{ dd($j->id) }} --}}
                                        <form role="form" method="post" action="/givePermission/{{ $r->id }}">
                                          @csrf
                                          <div class="box-body">
                                            <div class="form-group">
                                              <label for="exampleInputEmail1">Nama Prodi</label> 
                                              <input type="text" hidden class="form-control" name="name" placeholder="Enter password" value="{{ $r->name }}">
                                            </div>
                                            
                                            <div class="form-group">
                                              <label for="">Permissions</label>
                                              
                                              <select class="form-control" name="permission" id="permission">
                                                @foreach ($permission as $p)
                                                 <option value="{{ $p->name }}">{{ $p->name }}</option>
                                                @endforeach
                                              </select>
                                            </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                          </div>
                                        </form>
                                        {{-- {{ $r->id }} --}}
                                        
                                          <h4>Permission : </h4>
                                          @if($r->permissions)
                                              @foreach ($r->permissions as $rp)
                                              <form action="/revokePermission/ {{ $rp->id }}" method="post">
                                                @csrf
                                                @method('delete')
                                                      <button type="submit" class="btn btn-danger">{{ $rp->name }}</button>
                                              </form>  
                                              @endforeach
                                          @endif
                                        
                                      </div>
                                    </div>
                                  </div>
                                </div>          
                            </tr>
                            @endforeach
                            <?php $nomor++ ;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
     </div> 
     {{-- row --}}
    </div>

    
</section>
    
@endsection





  