@extends('layout.main')

@section('content')
<div class="container">
    <h1>Tambah Produk</h1>
    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group row mt-5">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Produk</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" name="nama" id="nama" placeholder="Nama Produk">
            </div>
        </div>

        <div class="form-group row mt-5">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Gambar</label>
            <div class="col-sm-10">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="gambar" id="gambar">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>
            </div>

        </div>
        <div class="form-group row mt-5">
            <label for="inputPassword3" class="col-sm-2 col-form-label" placeholder="Nama">Deskripsi</label>
            <div class="col-sm-10">
                <textarea name="desc" id="desc" cols="300" rows="10"></textarea>
            </div>
        </div>


        <div class="form-group mt-5" style="text-align: right;">
            <!-- <div class="col-sm-10"> -->
            <button type="submit" class="btn btn-primary" name="simpan">Tambah</button>
            <a href="{{route('product.index')}}" class="btn btn-danger">Kembali</a>
            <!-- </div> -->
        </div>
    </form>
</div>
@endsection
