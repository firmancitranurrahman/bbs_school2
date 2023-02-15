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
      <li class="active">Edit Data VA</li>
    </ol>
</section>
<section class="content">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">Edit Data Virtual Acoount</h3>
          </div>
          <div class="box-body">                    
            <div class="row">
              <form action="/updateva/{{$va->id  }}" method="POST">
                @csrf
                {{ method_field('PUT') }}
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">No Induk</label>
                    <input type="text" name="no_induk"  class="form-control" placeholder="" aria-describedby="helpId" value="{{ $va->no_induk }}">
                    @if($errors->has('no_induk'))
                        <div class="text-danger">
                            {{ $errors->first('no_induk')}}
                        </div>
                    @endif
                  </div>

                  <div class="form-group">
                      <label for="">Nama</label>
                      <input type="text" name="nama" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $va->nama }}">
                      @if($errors->has('no_induk'))
                        <div class="text-danger">
                            {{ $errors->first('no_induk')}}
                        </div>
                      @endif  
                  </div>
                 <div class="form-group">
                    <label for="exampleInputPassword1">Prodi</label>
                    <select class="form-control"name="prodi">
                        <option value="" disabled selected>pilih prodi</option>
                        <?php foreach($reffprodi as $rp):?>
                                <option value="<?= $rp->id?>" <?php if($rp->id == $va->id ){ echo 'selected'; } ?> > <?= $rp->nama_prodi?> </option>
                        <?php  endforeach;?>   
                    </select>                                           
                  </div>
                  <div class="form-group">
                      <label for="">Jenis</label>
                      <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  </div>
                  <div class="form-group">
                    <label for="">Tahun</label>
                    <input type="text" name="tahun" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $va->tahun }}">
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
                      <option value="1"{{ $va->semester == '1' ? 'selected' : '' }}>1</option>
                      <option value="2"{{ $va->semester == '2' ? 'selected' : '' }}>2</option>
                      <option value="3"{{ $va->semester == '3' ? 'selected' : '' }}>3</option>
                      <option value="4"{{ $va->semester == '4' ? 'selected' : '' }}>4</option>
                      <option value="5"{{ $va->semester == '5' ? 'selected' : '' }}>5</option>
                      <option value="6"{{ $va->semester == '6' ? 'selected' : '' }}>6</option>
                      <option value="7"{{ $va->semester == '7' ? 'selected' : '' }}>7</option>
                      <option value="8"{{ $va->semester == '8' ? 'selected' : '' }}>8</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Nominal</label>
                    <input type="text" name="nominal" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $va->nominal }}">
                  </div>

                  <div class="form-group">
                    <label for="">Nominal Bayar</label>
                    <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  </div>

                  <div class="form-group">
                      <label for="">Status</label>
                      <select  class="form-control"name="status" id="">
                        <option disabled value="belum  proses"{{ $va->status == 'belum  proses' ? 'selected' : '' }}>Belum Proses</option>
                        <option value="sedang proses"{{ $va->status == 'sedang proses' ? 'selected' : '' }}>Sedang Proses</option>
                        <option value="sudah  proses"{{ $va->status == 'sudah  proses' ? 'selected' : '' }}>Sudah Proses</option>
                      </select>
                  </div>
               

                  <div class="form-group">
                    <label for="">Tanggal Bayar</label>
                    <input type="date" name="tgl_bayar" id="date-picker" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $va -> tgl_bayar }}">
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





