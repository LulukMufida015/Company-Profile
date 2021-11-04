@extends('layout.main')

@section('content')
<div class="container">
    <h1>Tambah Visi</h1>
    <form action="{{route('vimi.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group input-group mb-3 row">
            <label for="inputPassword3" class="col-sm-2 col-form-label" placeholder="Nama">Target Visi</label>
            <div class="col-sm-10 input-group-prepend">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputTargetModal">
                    Tambah Target
                  </button>
                {{-- <a class="btn btn-primary" href="{{route('target.create')}}" type="button">Tambah Target</a> --}}
                <select class="custom-select" name="idtarget" id="idtarget">
                  <option>Choose...</option>
                  @foreach ($target as $t)
                      <option value="{{$t->id}}">{{$t->kategori}}</option>
                  @endforeach
                </select>
            </div>
          </div>

        <div class="form-group row mt-5">
            <label for="inputPassword3" class="col-sm-2 col-form-label" placeholder="Nama">Visi</label>
            <div class="col-sm-10">
                <textarea name="visi" id="visi" cols="300" rows="10"></textarea>
            </div>
        </div>

        {{-- <div class="form-group row mt-5">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Misi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" name="nama" id="nama" placeholder="Nama Produk">
            </div>
        </div> --}}


        <div class="form-group mt-5" style="text-align: right;">
            <!-- <div class="col-sm-10"> -->
            <button type="submit" class="btn btn-primary" name="simpan">Tambah</button>
            <a href="{{route('product.index')}}" class="btn btn-danger">Kembali</a>
            <!-- </div> -->
        </div>
    </form>
</div>


{{-- @include('admin.inputTarget') --}}
@endsection
