@extends('admin.index2')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      List Data User
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">List Data User</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <div class="box-title">
                   List Data User 
              </div>
              <!-- /.box-header -->
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Ip Address</th>
                    <th>Status</th>
                    <th>Kota</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                  <tbody>                
                    <?php  $nomor =1; ?>
                    @foreach($users  as $u =>$item)
                    <tr>
                      <td>{{$nomor ; }}</td>
                      <td>{{$item->name}}</td>
                      <td>{{$item->email}}</td>
                      <td>{{$item->ip_address}}</td>
                      <td>{{$item->status}}</td>
                      <td>{{$item->nama_kota}}</td>
                      <td>
                      @foreach($item->roles as $role)
                      {{ $role->name }}
                      @endforeach
                    </td>

                      <td>
                        <a href="/delete/{{ $item->id }}" class="fa fa-trash btn btn-danger"></a>
                        <a href="/edit/{{$item->id }}" class="fa fa-pencil btn btn-warning"></a>
                        {{-- <a href="{{ route('editdata',['id' => $item->id]) }}"
                          class="btn btn-warning fa fa-edit"></a>   --}}
                      </td>                  
                    </tr>  
                    <?php $nomor++; ?>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Ip Address</th>
                    <th>Alamat</th>
                    <th>Kota</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tfoot>
                </thead>
              </table>
            </div>
          </div>
        </div>
      </div>    
</section>

  
@endsection

