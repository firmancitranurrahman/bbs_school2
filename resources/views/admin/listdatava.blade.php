@extends('admin.index2')

@section('content')
    <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">List Data User</li>
    </ol>
</section>
<section class="content">
    <div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="box">
                <div class="box-header">
                    <div class="box-title">
                        List Data Virtual Account
                    </div>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-hover table-responsive">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode VA</th>
                                <th>No Induk</th>
                                <th>Nama</th>
                                <th>Tahun</th>
                                <th>Semester</th>
                                <th>Status</th>

                                <th>Tanggal</th>
                                <th>Prodi</th>
                                <th>Nominal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $nomer=1 ;?>
                            @foreach ($va as $v)
                              
                            <tr>
                                <td>{{ $nomer }}</td>
                                <td>{{ $v->kode }}</td>

                                <td>{{ $v->no_induk }}</td>
                                
                                <td>{{ $v->nama }}</td>
                                <td>{{ $v->tahun }}</td>
                                <td>{{ $v->semester }}</td>
                                <td>{{ $v->status }}</td>

                                <td>{{ $v->tgl_bayar }}</td>
                                <td>{{ $v->nama_prodi }}</td>

                                <td> @currency($v->nominal)</td>
                                <td>
                                    <a href="/deleteva/{{ $v->id }}" class="fa fa-trash btn btn-danger"></a>
                                    <a href="/editva/{{$v->id }}" class="fa fa-pencil btn btn-warning"></a>

                                </td>
                            </tr>
                            <?php $nomer++ ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection