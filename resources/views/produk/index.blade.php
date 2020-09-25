@extends('layouts.master')

@section('content')
        @if(session('berhasil'))
        <div class="alert alert-success" role="alert">
            {{session('berhasil')}}
          </div>
          @endif
        <div class="row">
            <div class="col-6">
                <h1>Daftar Produk</h1>
            </div>
            <div class="col-6">
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                    Tambah Produk
                  </button>
            </div>
            
            <table class="table table-striped">
                <tr>
                    <th>Nama Produk</th>
                    <th>Keterangan</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                </tr>
                @foreach($data_produk as $produk)
                <tr>
                    <td>{{$produk->nama_produk}}</td>
                    <td>{{$produk->keterangan}}</td>
                    <td>{{$produk->harga}}</td>
                    <td>{{$produk->jumlah}}</td>
                    <td>
                      <a href="/produk/{{$produk->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                      <a href="/produk/{{$produk->id}}/delete" class="btn btn-danger btn-sm" onClick="return confirm('Yakin data ingin dihapus?')">Hapus</a>
                    </td>
                    <td></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="/produk/create" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Produk</label>
                      <input name="nama_produk" type="text" class="form-control" >
    
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Keterangan</label>
                      <input name="keterangan" type="text" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Harga</label>
                        <input name="harga" type="text" class="form-control"  >

                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Jumlah</label>
                        <input name="jumlah" type="text" class="form-control" >
                      </div>
                    
                  
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>              
            </div>
        </form>
          </div>
        </div>
        @endsection
      


