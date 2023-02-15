@extends('admin.index2')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    List Data
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">List Data</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  
  {{-- <div class="box">
    <div class="box-body">
      <div class="row">
        <div class="col-md-3">
          <button class="btn btn-default" data-toggle="modal" data-target="#modal-default">
            tambah data log pembayaran
          </button>
        </div>
        <div class="col-md-3">
          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
             Tambah Data Reff Jenis 
          </button>
        </div>
        <div class="col-md-3">
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">
            Tambah Data Reff Kota
          </button>
        </div>
        <div class="col-md-3">
          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-warning">
            Tambah Data Reff Prodi 
          </button>
        </div>
      </div>
    </div>
  </div> --}}
  {{-- Modal Group --}}
  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Default Modal</h4>
        </div>
        <div class="modal-body">
          <p>One fine body&hellip;</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <div class="modal modal-primary fade" id="modal-primary">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Primary Modal</h4>
        </div>
        <div class="modal-body">
          <p>One fine body&hellip;</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-outline">Save changes</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  
  <div class="modal modal-warning fade" id="modal-warning">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Warning Modal</h4>
        </div>
        <div class="modal-body">
          <p>One fine body&hellip;</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-outline">Save changes</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  
  
{{-- END MODAL GROUP --}}
  
  <div class="row">
      <div class="col-md-6">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">log Pembayaran</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Rendering engine</th>
                <th>Browser</th>
                <th>Platform(s)</th>
                <th>Engine version</th>
                <th>CSS grade</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Trident</td>
                <td>Internet
                  Explorer 4.0
                </td>
                <td>Win 95+</td>
                <td> 4</td>
                <td>
                    Edit
                  </button>
                          </td>
              </tr>
              <tr>
                <td>Trident</td>
                <td>Internet
                  Explorer 5.0
                </td>
                <td>Win 95+</td>
                <td>5</td>
                <td>C</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th>Rendering engine</th>
                <th>Browser</th>
                <th>Platform(s)</th>
                <th>Engine version</th>
                <th>CSS grade</th>
              </tr>
            </tfoot>  
          </table>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Reff Jenis</h3>
          </div> 
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Action</th>
                </tr>
              </thead>
            <tbody>
              <?php $nomor=1 ?>
              @foreach ($reffjenis as $j)
              <tr>
                <td>{{ $nomor ;}}</td>
                <td>{{ $j->nama }}</td>
                <td>           
                    <a href="/deletejenis/{{ $j->id }}" class="fa fa-trash btn btn-danger"></a>
                    <a type="button" class="btn btn-info" data-toggle="modal" data-target="#edit-modal{{ $j->id }}">
                      <i class="fa fa-edit"></I>
                    </a>
                </td>        
            
                <div class="modal fade" id="edit-modal{{ $j->id }}">
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
                        <form role="form" method="post" action="/updatejenis/{{ $j->id }}">
                          @csrf
                           @method('PUT')
                          <div class="box-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Change Password</label> 
                              <input type="text" class="form-control" name="nama" placeholder="Enter password" value="{{ $j->nama }}">
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
            <tfoot>
              <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Action</th>
              </tr>
            </tfoot>  
          </table>
          </div>
        </div>
      </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Reff Kota</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example3" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Nomor </th>
              <th>Nama Kota</th>
              <th>Action</th>

            </tr>
          </thead>
          <tbody>
            <?php $nomor=1 ?>
            @foreach($reffkotas  as $r)
            <tr>
              
              <td>{{$nomor ; }}</td>
              <td>{{$r->nama_kota}}</td>
              <td>
                <a href="/deletekota/{{ $r->id }}" class="fa fa-trash btn btn-danger"></a>
                <a type="button" class=" btn btn-warning fa fa-pencil" data-toggle="modal" data-target="#edit-modal1{{ $r->id }}">
                </a>
              </td>
              <div class="modal fade" id="edit-modal1{{ $r->id }}">
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
                      <form role="form" method="post" action="/updatekota/{{ $r->id }}">
                        @csrf
                         @method('PUT')
                        <div class="box-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama Kota</label> 
                            <input type="text" class="form-control" name="nama_kota" placeholder="Enter password" value="{{ $r->nama_kota }}">
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
            <?php $nomor++; ?>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>Nomor </th>
              <th>Nama Kota</th>
            </tr>
          </tfoot>  
        </table>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Reff Prodi</h3>
        </div> 
        <div class="box-body">
          <table id="example4" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Prodi</th>
                <th>Action</th>
              </tr>
            </thead>
          <tbody>
            <?php $nomor=1?>
            @foreach ($reffprodis as $p)
            <tr>
              <td>{{ $nomor }}</td>
              <td>{{ $p->nama_prodi }}</td>
              <td> 
                <a href="/deleteprodi/{{ $p->id }}" class="fa fa-trash btn btn-danger"></a>
                <a type="button" class=" btn btn-success fa fa-pencil" data-toggle="modal" data-target="#edit-modal2{{ $p->id }}">

              </td>

              <div class="modal fade" id="edit-modal2{{ $p->id }}">
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
                      <form role="form" method="post" action="/updateprodi/{{ $p->id }}">
                        @csrf
                         @method('PUT')
                        <div class="box-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama Prodi</label> 
                            <input type="text" class="form-control" name="nama_prodi" placeholder="Enter password" value="{{ $p->nama_prodi }}">
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
            <?php $nomor++; ?>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Nama Prodi</th>
              <th>Action</th>
            </tr>
          </tfoot>  
        </table>
        </div>
      </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Log Acitivity </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example5" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Rendering engine</th>
              <th>Browser</th>
              <th>Platform(s)</th>
              <th>Engine version</th>
              <th>CSS grade</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Trident</td>
              <td>Internet
                Explorer 4.0
              </td>
              <td>Win 95+</td>
              <td> 4</td>
              <td>X</td>
            </tr>
            <tr>
              <td>Trident</td>
              <td>Internet
                Explorer 5.0
              </td>
              <td>Win 95+</td>
              <td>5</td>
              <td>C</td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <th>Rendering engine</th>
              <th>Browser</th>
              <th>Platform(s)</th>
              <th>Engine version</th>
              <th>CSS grade</th>
            </tr>
          </tfoot>  
        </table>
        </div>
      </div>
    </div>
</div>

<script>
  $(document).ready(function(){
     /**
       * for showing edit item popup
       */
  $(document).on('click', "#edit-item", function() {
    $(this).addClass('edit-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.

    var options = {
      'backdrop': 'static'
    };
    $('#edit-modal').modal(options)
  })

  // on modal show
  $('#edit-modal').on('show.bs.modal', function() {
    var el = $(".edit-item-trigger-clicked"); // See how its usefull right here? 
    var row = el.closest(".data-row");

    // get the data
    var id = el.data('item-id');
    var name = row.children(".name").text();
    var description = row.children(".description").text();

    // fill the data in the input fields
    $("#modal-input-id").val(id);
    $("#modal-input-name").val(name);
    $("#modal-input-description").val(description);

  })
   // on modal hide
   $('#edit-modal').on('hide.bs.modal', function() {
    $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
    $("#edit-form").trigger("reset");
  })

  })
</script>


</section>





@endsection


