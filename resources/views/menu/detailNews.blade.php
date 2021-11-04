@extends('layout.main')

@section('content')
<div class="container">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              {{-- <img src="{{'storage/'. $news->gambar}}" alt=""> --}}
            <img class="d-block w-100" src="{{ 'http://127.0.0.1:8000/storage/'.$news->gambar}}" alt="First slide">
          </div>
        </div>
      </div>

      <section>
          <h3>{{$news->judul}}</h3>
          <p>21 Mar 2014 / {{$news->nama}}</p>
        {{-- <img src="{{'public/storage/' . $news->gambar }}" alt=""> --}}
          <p> {!!$news->berita!!}</p>
      </section>
</div>
@endsection
