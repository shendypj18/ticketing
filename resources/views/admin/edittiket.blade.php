@extends('admin.admin')
@section('content')


@foreach($tiket as $tiket)
<form role="form" method="POST" action="tiket/update/{{$tiket->id_tiket}}">
    <input type="hidden" name="_token" {{ csrf_field() }}>
      <div class="card-body">
        <div class="form-group">
            <label>Nama Tiket</label>
        <input type="text" class="form-control" name="nama_tiket" value="{{$tiket->nama_tiket}}">
          </div>
          <label>Jumlah tiket</label>
          <div class="input-group mb-3">
          <input type="text" class="form-control" name="jumlah_tiket" value="{{$tiket->jumlah_tiket}}">
          </div>
          <label>Harga Tiket</label>
          <div class="input-group mb-3">
          <input type="text" class="form-control" name="harga_tiket" value="{{$tiket->harga_tiket}}">
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
    @endforeach

@endsection