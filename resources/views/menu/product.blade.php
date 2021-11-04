@extends('layout.main')

@section('content')
{{-- <div class="container"> --}}
    <div class="gdlr-page-title-wrapper header-style-1-title-wrapper">
        <div class="gdlr-page-title-overlay gdlr-parallax-wrapper-2"></div>
        <div class="gdlr-page-title-container container">
            <h1 class="gdlr-page-title">Products</h1>
            <span class="gdlr-page-caption">Berbagai Produk kami</span>
        </div>
    </div>

    <div class="container" style="padding: 80px 0">
        <div class="row align-items-center">
            <div class="col-md-10">
                <p>MARI LIHAT BEBERAPA PRODUK KAMI</p>
                <h1 style="font-weight: 900;letter-spacing: 3px">CAHAYA PRO</h1>
            </div>
            @auth
            <div class="col-md-2">
                <a href="{{url('/tambah-produk')}}" class="btn btn-primary">Tambah Produk</a>
            </div>
            @endauth

        </div>

    </div>

    <div class="container">
        <div class="row align-items-center">

                  @foreach ($product as $p)
                  <div class="col-md-6 mb-2  d-flex justify-content-center">
                    <img src="{{'storage/'.$p->gambar}}" id="gambar" style="max-width: 300px">
                  </div>
                  <div class="col-md-6  ">
                      <div class="desc align-middle" style="top:50%">
                          <h1>{{$p->nama_produk}}</h1><br>
                            <p class="text-justify" >{{$p->deskripsi}}</p> <br>

                            @auth
                            <form action="{{ route('product.destroy',$p->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                            <a href="" class="btn btn-sm btn-warning btn-modal-editProduk " data-toggle="tooltip" data-placement="top" title="Edit"  data-toggle="modal"  data-target="#editProdukModal" data-id="{{$p->id}}" data-nama="{{$p->nama_produk}}" data-gambar="{{'storage/'.$p->gambar}}" data-desc="{{$p->deskripsi}} " data-url="{{route('product.update', $p->id)}}" data-path="{{$p->gambar}}"><img src="https://img.icons8.com/material-outlined/24/000000/pencil--v3.png"/></a>
                            <button type="submit" class="btn btn-sm  btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus" onclick="return confirm('apakah anda ingin Menghapus produk ini?')"><img src="https://img.icons8.com/material-outlined/24/000000/trash--v2.png"/></button>
                        </form>
                            @endauth

                      </div>
                  </div>
                  @endforeach

        </div>
    </div>

<!-- Button trigger modal -->



{{-- </div> --}}
@endsection


@section('modal')
     <!-- Modal Edit Produk-->
  <div class="modal fade" id="editProdukModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Produk</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="" class="url" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="text" class="id" hidden>
                <div class="form-group row mt-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Produk</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg nama" name="nama" id="nama" placeholder="ID">
                    </div>
                </div>

                <div class="form-group row mt-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-10">

                        <input type="file" class="form-control produk" name="gambar" id="gambar">
                        <input type="hidden" class="produk" value="" name="gambarlama" id="">
                        <img src="" class="gambar" name="gbrlama" style="height: 150px;" alt="">
                        {{-- <div class="custom-file">

                          </div> --}}
                    </div>

                </div>
                <div class="form-group row mt-5">
                    <label for="inputPassword3" class="col-sm-2 col-form-label" placeholder="Nama">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea name="deskripsi" id="deskripsi" class="desc" cols="300" rows="10"></textarea>
                    </div>
                </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save Change</button>
        </form>

        </div>
      </div>
    </div>
  </div>
@endsection
