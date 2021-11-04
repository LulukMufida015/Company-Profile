@extends('layout.main')

@section('content')
<div class="container" >
    <h1>Tambah Visi & Misi</h1>
    <form action="{{route('target.store')}}" method="POST">
        @csrf

        <div class="form-group row mt-5">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Target</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" name="kategori" id="kategori" placeholder="Target">
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


