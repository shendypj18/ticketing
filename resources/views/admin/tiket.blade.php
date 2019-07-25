@extends('admin.admin')
@section('content')
<div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Tiket</h3>
            </div>
            <div class="card-body pad table-responsive">
            <a href="{{URL::to('tiket/tambah')}}" class="btn btn-primary">Tambah Data</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Tiket</th>
                  <th>Jumlah Tiket</th>
                  <th>Harga Tiket</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($tiket as $data)
                <tr>
                  <td>{{$data->nama_tiket}}</td>
                  <td>{{$data->jumlah_tiket}}</td>
                  <td>{{$data->harga_tiket}}</td>
                <td> <a href="tiket/edit/{{$data->id_tiket}}" class="btn-sm btn-info">Edit</a>
                     <a href="tiket/{{$data->id_tiket}}" class="btn-sm btn-danger">Hapus</a></td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>

    
         
@endsection
