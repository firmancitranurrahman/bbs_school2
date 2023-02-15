@extends('admin.index2')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      List Data H2H
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
                   List Data H2H 
              </div>
              <!-- /.box-header -->
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Key</th>
                    <th>Url</th>
                    <th>Token</th>
                    <th>Expired Token</th>
                    <th>Action</th>
                  </tr>
                  <tbody>                
                    <?php  $nomor =1; ?>
                    @foreach($h2h  as $h)
                    <tr>
                      <td>{{$nomor ; }}</td>
                      <td>{{$h->username}}</td>
                      <td>{{$h->key}}</td>
                      <td>{{ $h->url }}</td>
                      <td>#</td>
                      <td>X</td>                  
                      <td>
                        {{-- <a href="/delete/{{ $->id }}" class="fa fa-trash btn btn-danger"></a> --}}
                        {{-- <a href="/edit/{{$item->id }}" class="fa fa-pencil btn btn-warning"></a> --}}
                        {{-- <a href="{{ route('editdata',['id' => $item->id]) }}"
                          class="btn btn-warning fa fa-edit"></a>   --}}
                          hapus | 
                          edit
                      </td>                  
                    </tr>  
                    <?php $nomor++; ?>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <th>No</th>
                    <th>Username</th>
                    <th>Key</th>
                    <th>Url</th>
                    <th>Token</th>
                    <th>Expired Token</th>
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

