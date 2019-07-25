@extends('admin.admin')
@section('content')

    <!-- /.card-header -->
    <!-- form start -->
<form role="form" method="POST" action="{{URL::to('/tiket/tambah/simpan')}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="card-body">
        <div class="form-group">
            <label>Nama Tiket</label>
            <input type="text" class="form-control" name="nama_tiket">
          </div>
          <label>Jumlah tiket</label>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="jumlah_tiket">
          </div>
          <label>Harga Tiket</label>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="harga_tiket">
            <div class="input-group-append">
              <span class="input-group-text">.00</span>
            </div>
          </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
 
    
@endsection