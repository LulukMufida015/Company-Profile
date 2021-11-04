@extends('layout.main')


@section('content')
<div class="container">
    <h1 align="center" style="font-weight: 700; letter-spacing: 3px" class="mb-3">UPDATED NEWS</h1>
    @foreach ($news as $n)
    <div class="card w-100 p-2 mb-3 cl">
        <div class="card-body row">
            <div class="col-md-5 d-flex justify-content-center">
                <img src="{{'storage/'.$n->gambar}}" style="max-height: 250px;border-radius: 5px" alt="">
            </div>
            <div class="col-md-7">
                <h3 class="card-title">{{$n->judul}}</h3>
                <p class="card-text">{!! Str::limit($n->berita , 200, '...')!!}</p>
                <a href="{{route('news.show', $n->idnews)}}" class="btn btn-primary mb-1" data-toggle="tooltip" data-placement="top" title="Detail" ><img src="https://img.icons8.com/material-outlined/20/FFFFFF/link--v2.png"/></a>
                @auth
                <form action="{{route('news.destroy',$n->idnews)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="" class="btn btn-warning btn-modal-editNews" data-toggle="tooltip" data-placement="top" title="Edit"data-toggle="modal" data-url="{{ route('news.update' , $n->idnews)}}" data-id="{{$n->idnews}}" data-judul="{{$n->judul}}" data-gambar="{{'storage/'. $n->gambar}}" data-path={{$n->gambar}} data-berita="{{$n->berita}}" data-nama="{{$n->nama}}" data-target="#editNewsModal">
                        <img src="https://img.icons8.com/material-outlined/20/FFFFFF/pencil--v3.png"/>
                    </a>
                    <button href="" type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><img src="https://img.icons8.com/material-outlined/20/FFFFFF/trash--v2.png"/></button>
                </form>
                @endauth

                {{-- <a href=""></a> --}}
            </div>

        </div>
      </div>
    @endforeach

</div>
@endsection

@section('modal')
<div class="modal fade" id="editNewsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="" class="url" method="POST"  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label for="exampleFormControlInput1">Penulis</label>
                  <input type="text" class="form-control nama" name="nama" id="nama" placeholder="Nama">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Judul</label>
                  <input type="text" class="form-control judul" name="judul" id="judul" placeholder="Judul">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Gambar</label>
                  <input type="file" class="form-control custom-file " name="gambar" id="gambar">
                  <input type="text" class="gbrlama" name="gbrlama" hidden>
                  <img src="" class="gambar" style="height: 150px" alt="">
                </div>

                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Kolom Berita</label>
                  <textarea class="form-control berita" name="berita" id="berita" rows="3"></textarea>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-news">Save changes</button>
                  </div>
              </form>
        </div>

      </div>
    </div>
  </div>
@endsection
