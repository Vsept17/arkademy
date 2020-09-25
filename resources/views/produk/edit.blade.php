@extends('layouts.master')

@section('content')
        @if(session('berhasil'))
        <div class="alert alert-success" role="alert">
            {{session('berhasil')}}
          </div>
          @endif
          <h1>Edit Data Produk</h1>
        <div class="row">
            <div class="col-lg-12">
                <form action="/produk/{{$produk->id}}/update" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Produk</label>
                    <input name="nama_produk" type="text" class="form-control" value="{{$produk->nama_produk}}">
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input name="keterangan" type="text" class="form-control" value="{{$produk->keterangan}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Harga</label>
                    <input name="harga" type="text" class="form-control"  value="{{$produk->harga}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah</label>
                    <input name="jumlah" type="text" class="form-control" value="{{$produk->jumlah}}">
                    </div>
                </div>
                    <button type="submit" class="btn btn-warning float-right">Simpan</button>              
            </form>
            </div>
        </div>
        @endsection
 

