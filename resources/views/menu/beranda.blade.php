@extends('layout.main')

@section('content')

    <div class="gdlr-content">

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('gambar/carousel1.png')}}" class="d-block w-100" style="max-height: 100%;" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{asset('gambar/carousel2.png')}}" class="d-block w-100" style="max-height: 100%;" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{asset('gambar/carousel3.png')}}" class="d-block w-100" style="maxheight: 100%;" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        <!-- Above Sidebar Section-->


        <!-- Sidebar With Content Section-->
        <div class="with-sidebar-wrapper">

            <section id="content-section-3">
                <div class="gdlr-color-wrapper  gdlr-show-all gdlr-skin-stunning-text-small"
                    style="background-color: #36bddb; padding-top: 55px; padding-bottom: 34px; ">
                    <div class="container">
                        <div class="gdlr-stunning-item-ux gdlr-ux">
                            <div class="gdlr-item gdlr-stunning-item gdlr-button-on gdlr-stunning-small-left">
                                <h2 class="stunning-item-title">Untuk Info Lebih Lanjut Hubungi Kami</h2><a
                                    class="stunning-item-button gdlr-button small" href="{{url('/contact')}}"
                                    target="_blank" style="text-decoration: none">Contact US</a>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </section>
            <section id="content-section-4">

                <div class="gdlr-color-wrapper  gdlr-show-all no-skin"
                    style="background-color: #ffffff; padding-top: 70px; padding-bottom: 20px; ">
                    <div class="container-fluid">
                        <div class="one-fifth column"></div>
                        <div class="three-fifth columns">
                            <div class="gdlr-testimonial-item-wrapper" style="margin-bottom: 40px;">
                                <div class="gdlr-item-title-wrapper gdlr-item  gdlr-center gdlr-medium ">
                                    <div class="gdlr-item-title-container container">
                                        <div class="gdlr-item-title-head">
                                            <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">
                                                Produk Kami</h3>

                                        </div>
                                    </div>
                                </div>


                                <div class="gdlr-item gdlr-testimonial-item carousel large plain-style">
                                    <div class="gdlr-ux gdlr-testimonial-ux">
                                        <div class="flexslider" data-type="carousel"
                                            data-nav-container="gdlr-testimonial-item" data-columns="1">
                                            <ul class="slides">
                                                @foreach ($product as $p)
                                                <li class="testimonial-item">
                                                    <div class="row align-items-center justify-content-between">
                                                        <div class="col-md-4 mb-2  d-flex justify-content-center">
                                                            <img src="{{'storage/'.$p->gambar}}" id="gambar" style="width: 200px">
                                                        </div>
                                                          <div class="col-md-7 align-middle">
                                                                  <h1>{{$p->nama_produk}}</h1><br>
                                                                    <p class="text-justify" >{{$p->deskripsi}}</p> <br>

                                                                    @auth
                                                                    <form action="{{ route('product.destroy',$p->id) }}" method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                    <a href="" class="btn btn-sm btn-warning btn-modal-editProduk " data-toggle="tooltip" data-placement="top" title="Edit"  data-toggle="modal"  data-target="#editProdukModal" data-id="{{$p->id}}" data-nama="{{$p->nama_produk}}" data-gambar="{{'storage/'.$p->gambar}}" data-desc="{{$p->deskripsi}} " data-url="{{route('product.update', $p->id)}}" data-path="{{$p->gambar}}"><img src="https://img.icons8.com/material-outlined/24/000000/pencil--v3.png"/></a>
                                                                    <button type="submit" class="btn btn-sm  btn-danger"  data-toggle="tooltip" data-placement="top" title="Hapus" onclick="return confirm('apakah anda ingin Menghapus produk ini?')"><img src="https://img.icons8.com/material-outlined/24/000000/trash--v2.png"/></button>
                                                                </form>
                                                                    @endauth

                                                          </div>
                                                    </div>


                                                </li>
                                             @endforeach

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-item-title-nav gdlr-nav-container  gdlr-center gdlr-large" style="margin:0px">
                                    <i class="icon-angle-left gdlr-flex-prev"></i>
                                    <i class="icon-angle-right gdlr-flex-next"></i>
                                </div>
                                <div class="d-flex justify-content-center mt-4">
                                    <a href="{{route('product.index')}}" class="btn btn-primary" >Detail Produk</a>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        @auth
                        <div class="d-flex  justify-content-center">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputTestiModal">
                                Tambah Testi
                            </button>
                        </div>
                        @endauth
                    </div>
                </div>
                <div class="clear"></div>
            </section>

            <section id="content-section-6">
                <div class="gdlr-full-size-wrapper gdlr-show-all gdlr-skin-dark-skin"
                    style="padding-top: 45px; padding-bottom: 0px;  background-color: #2f2f2f; ">
                    <div class="gdlr-item-title-wrapper gdlr-item  gdlr-center gdlr-medium ">
                        <div class="gdlr-item-title-container container">
                            <div class="gdlr-item-title-head">
                                <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">Kerja Kami</h3>
                                {{-- <a class="gdlr-item-title-link " href="#">Lihat Galeri Kerja</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item-wrapper type-modern-portfolio-no-space" data-ajax="#">
                        <div class="portfolio-item-holder gdlr-item-no-space gdlr-portfolio-column-3">
                            <div class="gdlr-isotope" data-type="portfolio" data-layout="fitRows">
                                <div class="clear"></div>
                                <div class="four columns">
                                    <div class="gdlr-item gdlr-portfolio-item gdlr-modern-portfolio">
                                        <div class="gdlr-ux gdlr-modern-portfolio-ux">
                                            <div class="portfolio-thumbnail gdlr-image"><img
                                                    src="{{asset('gambar/img1.jpeg')}}" alt=""
                                                    width="700" height="400" /><span
                                                    class="portfolio-overlay">&nbsp;</span>
                                                <div class="portfolio-overlay-content">
                                                    <h3 class="portfolio-title">
                                                        CAHAYA PRO</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="four columns">
                                    <div class="gdlr-item gdlr-portfolio-item gdlr-modern-portfolio">
                                        <div class="gdlr-ux gdlr-modern-portfolio-ux">
                                            <div class="portfolio-thumbnail gdlr-image"><img
                                                    src="{{asset('gambar/img2.jpeg')}}" alt=""
                                                    width="700" height="400" /><span
                                                    class="portfolio-overlay">&nbsp;</span>
                                                <div class="portfolio-overlay-content">
                                                    <h3 class="portfolio-title">CAHAYA PRO</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="four columns">
                                    <div class="gdlr-item gdlr-portfolio-item gdlr-modern-portfolio">
                                        <div class="gdlr-ux gdlr-modern-portfolio-ux">
                                            <div class="portfolio-thumbnail gdlr-image"><img
                                                    src="{{asset('gambar/img3.jpeg')}}" alt=""
                                                    width="700" height="400" /><span
                                                    class="portfolio-overlay">&nbsp;</span>
                                                <div class="portfolio-overlay-content">
                                                    <h3 class="portfolio-title">
                                                        CAHAYA PRO</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="four columns">
                                    <div class="gdlr-item gdlr-portfolio-item gdlr-modern-portfolio">
                                        <div class="gdlr-ux gdlr-modern-portfolio-ux">
                                            <div class="portfolio-thumbnail gdlr-image"><img
                                                    src="{{asset('gambar/img4.jpeg')}}" alt=""
                                                    width="700" height="400" /><span
                                                    class="portfolio-overlay">&nbsp;</span>
                                                <div class="portfolio-overlay-content">
                                                    <h3 class="portfolio-title">CAHAYA PRO</h3>
                                                    <div class="gdlr-portfolio-info">

                                                        <div class="clear">

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="four columns">
                                    <div class="gdlr-item gdlr-portfolio-item gdlr-modern-portfolio">
                                        <div class="gdlr-ux gdlr-modern-portfolio-ux">
                                            <div class="portfolio-thumbnail gdlr-image"><img
                                                    src="{{asset('gambar/img3.jpeg')}}" alt=""
                                                    width="700" height="400" /><span
                                                    class="portfolio-overlay">&nbsp;</span>
                                                <div class="portfolio-overlay-content">
                                                    <h3 class="portfolio-title">CAHAYA PRO</h3>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="four columns">
                                    <div class="gdlr-item gdlr-portfolio-item gdlr-modern-portfolio">
                                        <div class="gdlr-ux gdlr-modern-portfolio-ux">
                                            <div class="portfolio-thumbnail gdlr-image"><img
                                                    src="{{asset('gambar/img6.jpeg')}}" alt=""
                                                    width="700" height="400" /><span
                                                    class="portfolio-overlay">&nbsp;</span>
                                                <div class="portfolio-overlay-content">
                                                    <h3 class="portfolio-title">CAHAYA PRO</h3>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </section>
            <section id="content-section-7">
                <div class="gdlr-color-wrapper  gdlr-show-all no-skin"
                    style="background-color: #ffffff; padding-top: 75px; padding-bottom: 50px; ">
                    <div class="container">
                        <div class="container">
                            <h1 align="center" class="mb-5">Sejarah Singkat</h1>

                            <p style="text-align: justify">
                                Perusahaan ini merupakan perusahaan pendistribusian Rokok. Nama Perusahaan ini adalah <b>PT Sehat Selalu Banyak Rejeki</b>, berada di Dusun Boro Ureg-ureg RT 06 RW 06, Desa Astrikaton, Kecamatan Pakis, Kabupaten Malang.
                                Didirikan pada tahun 2020 oleh <b>Mochammad Abdul Wahab</b>. Pekerja dari perusahaan ini sejumlah 30 orang.
                            </p>
                        </div>

                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </section>

            <section id="content-section-9">
                <div class="gdlr-parallax-wrapper gdlr-background-image gdlr-show-all gdlr-skin-dark-skin"
                    id="gdlr-parallax-wrapper-3" data-bgspeed="0"
                    style="background-image: url('{{asset('upload/rokok3.jpg')}}'); padding-top: 80px; padding-bottom: 65px; ">
                    <div class="container">
                        <div class="six columns">
                            <div class="gdlr-item-title-wrapper gdlr-item  gdlr-left gdlr-large ">
                                <div class="gdlr-item-title-container container">
                                    <div class="gdlr-item-title-head">
                                        <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">Visi Perusahaan
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-item gdlr-content-item">
                                @foreach ($vimi as $v)
                                <h3>{{$v->target->kategori}}</h3>
                                <p>{{$v->visi}}</p>
                                @auth
                                <form action="{{route('vimi.destroy',$v->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus" onclick="return confirm('Apakah anda yakin ingin menghapus ini?')"><img src="https://img.icons8.com/material-outlined/24/000000/trash--v2.png"/></button>
                                <a href="" class="btn btn-sm btn-warning btn-modal-editVisi" data-toggle="tooltip" data-placement="top" title="Edit"  data-toggle="modal" data-id="{{$v->id}}" data-url="{{route('vimi.update', $v->id)}}"  data-idkategori="{{$v->target->id}}" data-kategori="{{$v->target->kategori}}" data-visi="{{$v->visi}}" data-target="#editVisiModal"><img src="https://img.icons8.com/material-outlined/24/000000/pencil--v3.png"/></a>
                                </form>
                                <br>
                                @endauth

                            @endforeach
                                {{-- <p>
                                    <a href="upload/wood-vision-sig.png"><img
                                            class="alignnone size-full wp-image-5420"
                                            src="upload/wood-vision-sig.png" alt="wood-vision-sig" width="197"
                                            height="34" /></a>
                                </p> --}}
                                <p><strong>Paul Heizenberg</strong>
                                    <br /> CEO of Total Factory
                                </p>
                            </div>
                        </div>
                        <div class="six columns"></div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </section>
            <section id="content-section-10">
                <div class="gdlr-color-wrapper  gdlr-show-all no-skin"
                    style="background-color: #f7f7f7; padding-top: 70px; padding-bottom: 10px; ">
                    <div class="container">
                        <div
                            class="gdlr-item-title-wrapper gdlr-item  gdlr-nav-container gdlr-left gdlr-medium ">
                            <div class="gdlr-item-title-container container">
                                <div class="gdlr-item-title-head">
                                    <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">Recent News
                                    </h3><a class="gdlr-item-title-link" href="{{route('news.index')}}">Read All News</a><span
                                        class="gdlr-nav-title"><i class="icon-angle-left gdlr-flex-prev"></i><i
                                            class="icon-angle-right gdlr-flex-next"></i></span>
                                </div>
                            </div>
                            <!-- Button trigger modal -->
                            @auth
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputNewsModal">
                                Tambah Berita
                            </button>
                            @endauth



                        </div>
                        <div class="blog-item-wrapper">
                            <div class="blog-item-holder">
                                <div class="gdlr-blog-carousel-item gdlr-item">
                                    <div class="flexslider" data-type="carousel"
                                        data-nav-container="blog-item-wrapper" data-columns="3">
                                        <ul class="slides">

                                            @foreach ($news as $n)
                                            <li class="gdlr-item gdlr-blog-grid gdlr-skin-box">
                                                <article id="post-2255"
                                                    class="post-2255 post type-post status-publish format-standard has-post-thumbnail hentry category-post-slider tag-blog tag-life-style">
                                                    <div class="gdlr-standard-style">
                                                        <div class="gdlr-blog-thumbnail">
                                                            <a href="#"> <img src="{{'storage/'. $n->gambar}}"alt="" width="400" height="300" /></a>
                                                        </div>

                                                        <div class="gdlr-blog-grid-content">
                                                            <header class="post-header">
                                                                <div class="gdlr-blog-info">
                                                                    <div
                                                                        class="blog-info blog-date gdlr-skin-info">
                                                                        <span class="gdlr-sep">/</span><a
                                                                            href="#">{{$n->created_at->format('d F Y')}}</a>
                                                                    </div>
                                                                    <div
                                                                        class="blog-info blog-author gdlr-skin-info">
                                                                        <span class="gdlr-sep">/</span>By <a
                                                                            href="#" title="Posts by John Doe"
                                                                            rel="author">{{$n->nama}}</a>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                </div>

                                                                <h3 class="gdlr-blog-title"><a href="#">{{$n->judul}}</a></h3>
                                                                <div class="clear"></div>
                                                            </header>
                                                            <!-- entry-header -->

                                                            <div class="gdlr-blog-content">{!!Str::limit($n->berita, 200, '...')!!}
                                                                <div class="clear"></div><a href="{{route('news.show', $n->idnews )}}"
                                                                    class="excerpt-read-more">Read More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <!-- #post -->
                                            </li>
                                            @endforeach
                                            {{-- <li class="gdlr-item gdlr-blog-grid gdlr-skin-box">
                                                <article id="post-2254"
                                                    class="post-2254 post type-post status-publish format-standard has-post-thumbnail hentry category-post-slider tag-blog tag-life-style">
                                                    <div class="gdlr-standard-style">
                                                        <div class="gdlr-blog-thumbnail">
                                                            <a href="#"> <img
                                                                    src="{{asset('gambar/img1.jpeg')}}"
                                                                    alt="" width="400" height="300" /></a>
                                                        </div>

                                                        <div class="gdlr-blog-grid-content">
                                                            <header class="post-header">
                                                                <div class="gdlr-blog-info">
                                                                    <div
                                                                        class="blog-info blog-date gdlr-skin-info">
                                                                        <span class="gdlr-sep">/</span><a
                                                                            href="#">21 Mar 2014</a>
                                                                    </div>
                                                                    <div
                                                                        class="blog-info blog-author gdlr-skin-info">
                                                                        <span class="gdlr-sep">/</span>By <a
                                                                            href="#" title="Posts by John Doe"
                                                                            rel="author">John Doe</a>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                </div>

                                                                <h3 class="gdlr-blog-title"><a href="#">Nullam
                                                                        Lorem Mattis Purus</a></h3>
                                                                <div class="clear"></div>
                                                            </header>
                                                            <!-- entry-header -->

                                                            <div class="gdlr-blog-content">Lorem ipsum dolor sit
                                                                amet, consectetur adipisici elit, sed eiusmod
                                                                tempor incidunt ut labore et dolore magna
                                                                aliqua. Idque Caesaris facere voluntate liceret:
                                                                sese habere....
                                                                <div class="clear"></div><a href="#"
                                                                    class="excerpt-read-more">Read More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <!-- #post -->
                                            </li>
                                            <li class="gdlr-item gdlr-blog-grid gdlr-skin-box">
                                                <article id="post-2249"
                                                    class="post-2249 post type-post status-publish format-standard has-post-thumbnail hentry category-post-slider tag-blog tag-life-style">
                                                    <div class="gdlr-standard-style">
                                                        <div class="gdlr-blog-thumbnail">
                                                            <a href="#"> <img
                                                                    src="{{asset('gambar/img1.jpeg')}}"
                                                                    alt="" width="400" height="300" /></a>
                                                        </div>

                                                        <div class="gdlr-blog-grid-content">
                                                            <header class="post-header">
                                                                <div class="gdlr-blog-info">
                                                                    <div
                                                                        class="blog-info blog-date gdlr-skin-info">
                                                                        <span class="gdlr-sep">/</span><a
                                                                            href="#">21 Mar 2014</a>
                                                                    </div>
                                                                    <div
                                                                        class="blog-info blog-author gdlr-skin-info">
                                                                        <span class="gdlr-sep">/</span>By <a
                                                                            href="#" title="Posts by John Doe"
                                                                            rel="author">John Doe</a>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                </div>

                                                                <h3 class="gdlr-blog-title"><a href="#">Nibh Sem
                                                                        Sit Ullamcorper</a></h3>
                                                                <div class="clear"></div>
                                                            </header>
                                                            <!-- entry-header -->

                                                            <div class="gdlr-blog-content">Lorem ipsum dolor sit
                                                                amet, consectetur adipisici elit, sed eiusmod
                                                                tempor incidunt ut labore et dolore magna
                                                                aliqua. Idque Caesaris facere voluntate liceret:
                                                                sese habere....
                                                                <div class="clear"></div><a href="#"
                                                                    class="excerpt-read-more">Read More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <!-- #post -->
                                            </li>
                                            <li class="gdlr-item gdlr-blog-grid gdlr-skin-box">
                                                <article id="post-852"
                                                    class="post-852 post type-post status-publish format-standard has-post-thumbnail hentry category-fit-row tag-blog tag-life-style">
                                                    <div class="gdlr-standard-style">
                                                        <div class="gdlr-blog-thumbnail">
                                                            <a href="#"> <img
                                                                    src="{{asset('gambar/img1.jpeg')}}"
                                                                    alt="" width="400" height="300" /></a>
                                                        </div>

                                                        <div class="gdlr-blog-grid-content">
                                                            <header class="post-header">
                                                                <div class="gdlr-blog-info">
                                                                    <div
                                                                        class="blog-info blog-date gdlr-skin-info">
                                                                        <span class="gdlr-sep">/</span><a
                                                                            href="#">03 Dec 2013</a>
                                                                    </div>
                                                                    <div
                                                                        class="blog-info blog-author gdlr-skin-info">
                                                                        <span class="gdlr-sep">/</span>By <a
                                                                            href="#" title="Posts by John Doe"
                                                                            rel="author">John Doe</a>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                </div>

                                                                <h3 class="gdlr-blog-title"><a href="#">Donec
                                                                        luctus imperdiet</a></h3>
                                                                <div class="clear"></div>
                                                            </header>
                                                            <!-- entry-header -->

                                                            <div class="gdlr-blog-content">Lorem ipsum dolor sit
                                                                amet, consectetur adipisici elit, sed eiusmod
                                                                tempor incidunt ut labore et dolore magna
                                                                aliqua. Idque Caesaris facere voluntate liceret:
                                                                sese habere....
                                                                <div class="clear"></div><a href="#"
                                                                    class="excerpt-read-more">Read More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <!-- #post -->
                                            </li>
                                            <li class="gdlr-item gdlr-blog-grid gdlr-skin-box">
                                                <article id="post-862"
                                                    class="post-862 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-fit-row tag-blog tag-link tag-news">
                                                    <div class="gdlr-standard-style">
                                                        <div class="gdlr-blog-thumbnail">
                                                            <a href="#"> <img
                                                                    src="upload/shutterstock_21271114-400x300.jpg"
                                                                    alt="" width="400" height="300" /></a>
                                                        </div>

                                                        <div class="gdlr-blog-grid-content">
                                                            <header class="post-header">
                                                                <div class="gdlr-blog-info">
                                                                    <div
                                                                        class="blog-info blog-date gdlr-skin-info">
                                                                        <span class="gdlr-sep">/</span><a
                                                                            href="#">03 Dec 2013</a>
                                                                    </div>
                                                                    <div
                                                                        class="blog-info blog-author gdlr-skin-info">
                                                                        <span class="gdlr-sep">/</span>By <a
                                                                            href="#" title="Posts by John Doe"
                                                                            rel="author">John Doe</a>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                </div>

                                                                <h3 class="gdlr-blog-title"><a href="#">Magna
                                                                        pars studiorum</a></h3>
                                                                <div class="clear"></div>
                                                            </header>
                                                            <!-- entry-header -->

                                                            <div class="gdlr-blog-content">Lorem ipsum dolor sit
                                                                amet, consectetur adipisici elit, sed eiusmod
                                                                tempor incidunt ut labore et dolore magna
                                                                aliqua. Idque Caesaris facere voluntate liceret:
                                                                sese habere....
                                                                <div class="clear"></div><a href="#"
                                                                    class="excerpt-read-more">Read More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <!-- #post -->
                                            </li>
                                            <li class="gdlr-item gdlr-blog-grid gdlr-skin-box">
                                                <article id="post-859"
                                                    class="post-859 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-fit-row">
                                                    <div class="gdlr-standard-style">
                                                        <div class="gdlr-blog-thumbnail">
                                                            <a href="#"> <img
                                                                    src="upload/shutterstock_64706734-400x300.jpg"
                                                                    alt="" width="400" height="300" /></a>
                                                        </div>

                                                        <div class="gdlr-blog-grid-content">
                                                            <header class="post-header">
                                                                <div class="gdlr-blog-info">
                                                                    <div
                                                                        class="blog-info blog-date gdlr-skin-info">
                                                                        <span class="gdlr-sep">/</span><a
                                                                            href="#">03 Dec 2013</a>
                                                                    </div>
                                                                    <div
                                                                        class="blog-info blog-author gdlr-skin-info">
                                                                        <span class="gdlr-sep">/</span>By <a
                                                                            href="#" title="Posts by John Doe"
                                                                            rel="author">John Doe</a>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                </div>

                                                                <h3 class="gdlr-blog-title"><a href="#">Sedial
                                                                        eiusmod tempor</a></h3>
                                                                <div class="clear"></div>
                                                            </header>
                                                            <!-- entry-header -->

                                                            <div class="gdlr-blog-content">Lorem ipsum dolor sit
                                                                amet, consectetur adipisici elit, sed eiusmod
                                                                tempor incidunt ut labore et dolore magna
                                                                aliqua. Idque Caesaris facere voluntate liceret:
                                                                sese habere....
                                                                <div class="clear"></div><a href="#"
                                                                    class="excerpt-read-more">Read More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <!-- #post -->
                                            </li> --}}
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </section>
            <section id="content-section-11">
                <div class="gdlr-color-wrapper  gdlr-show-all no-skin"
                    style="background-color: #ffffff; padding-top: 70px; padding-bottom: 20px; ">
                    <div class="container">
                        <div class="one-fifth column"></div>
                        <div class="three-fifth columns">
                            <div class="gdlr-testimonial-item-wrapper" style="margin-bottom: 40px;">
                                <div class="gdlr-item-title-wrapper gdlr-item  gdlr-center gdlr-medium ">
                                    <div class="gdlr-item-title-container container">
                                        <div class="gdlr-item-title-head">
                                            <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">
                                                Testimonial</h3>

                                        </div>
                                    </div>
                                </div>


                                <div class="gdlr-item gdlr-testimonial-item carousel large plain-style">
                                    <div class="gdlr-ux gdlr-testimonial-ux">
                                        <div class="flexslider" data-type="carousel"
                                            data-nav-container="gdlr-testimonial-item" data-columns="1">
                                            <ul class="slides">
                                             @foreach ($test as $t)
                                                <li class="testimonial-item">
                                                    <div class="testimonial-content gdlr-skin-content">
                                                        <p>{{$t->testi}}</p>
                                                    </div>
                                                    <div class="testimonial-info"><span
                                                            class="testimonial-author gdlr-skin-link-color">{{$t->nama}}<span>, </span></span><span
                                                            class="testimonial-position gdlr-skin-info">{{$t->kategori}}</span></div>
                                                            @auth
                                                            <form action="{{route('testi.destroy', $t->id)}}" method="POST" >
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus" onclick="return confirm('Apakah anda yakin ingin Menghapus ini?')"><img src="https://img.icons8.com/material-outlined/24/000000/trash--v2.png"/></button>
                                                                <a href="" class="btn btn-sm btn-warning btn-modal-editTesti" data-toggle="tooltip" data-placement="top" title="Edit"  data-toggle="modal" data-id="{{$t->id}}" data-url="{{route('testi.update', $t->id)}}"  data-kategori="{{$t->kategori}}" data-testi="{{$t->testi}}" data-nama="{{$t->nama}}" data-target="#editTestiModal"><img src="https://img.icons8.com/material-outlined/24/000000/pencil--v3.png"/></a>
                                                            </form>
                                                            @endauth
                                                </li>
                                             @endforeach

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-item-title-nav gdlr-nav-container  gdlr-center gdlr-large"><i
                                        class="icon-angle-left gdlr-flex-prev"></i><i
                                        class="icon-angle-right gdlr-flex-next"></i></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        @auth
                        <div class="d-flex  justify-content-center">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputTestiModal">
                                Tambah Testi
                            </button>
                        </div>
                        @endauth
                    </div>
                </div>
                <div class="clear"></div>
            </section>
            <section id="content-section-12">
                <div class="gdlr-color-wrapper  gdlr-show-all no-skin"
                    style="background-color: #ffffff;  border-top: 2px solid #e9e9e9; padding-top: 50px; padding-bottom: 15px; ">
                    <div class="container">
                        <div class="gdlr-banner-item-wrapper">
                            <div class="gdlr-banner-images gdlr-item">
                                <div class="flexslider" data-pausetime="7000" data-slidespeed="600"
                                    data-effect="fade" data-columns="5" data-type="carousel"
                                    data-nav-container="gdlr-banner-images">
                                    <ul class="slides">
                                        <li><img src="{{asset('gambar/mrx.png')}}" alt="" style="max-width: 120px" />
                                        </li>
                                        <li><img src="{{asset('gambar/cahayapro.png')}}" alt="" style="max-width: 120px" />
                                        </li>
                                        <li><img src="https://img.icons8.com/color/60/000000/bootstrap.png"/>
                                        </li>
                                        <li><img src="https://img.icons8.com/fluency/60/000000/laravel.png"/>
                                        </li>
                                        <li><img src="https://img.icons8.com/fluency/60/000000/stackoverflow.png"/>
                                        </li>
                                        <li>
                                            <img src="https://img.icons8.com/color/60/000000/javascript.png"/>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </section>
            {{-- <section id="content-section-13">
                <div class="gdlr-color-wrapper  gdlr-show-all gdlr-skin-service-half"
                    style="background-color: #313131; padding-top: 75px; padding-bottom: 52px; ">
                    <div class="container">
                        <div class="gdlr-item-title-wrapper gdlr-item  gdlr-left gdlr-large ">
                            <div class="gdlr-item-title-container container">
                                <div class="gdlr-item-title-head">
                                    <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">Get Social</h3>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-item gdlr-content-item">
                            <p>Donec ullamcorper nulla non metus auctor fringilla. Integer posuere erat a ante
                                venenatis dapibus posuere velit aliquet. Nulla vitae elit libero, a pharetra
                                augue. Nulla vitae elit libero, a pharetra augue. Cum sociis natoque penatibus
                                et magnis dis parturient montes, nascetur ridiculus mus.  Donec id elit non mi
                                porta gravida at eget metus. Donec id elit non mi porta gravida at eget metus.
                                Vestibulum id ligula porta felis euismod semper.</p>
                            <span class="clear"></span><span class="gdlr-space"
                                style="margin-top: 35px; display: block;"></span>

                            <span class="gdlr-icon-shortcode">
                                <a href="#" target="blank">
                                    <i class="gdlr-icon fa fa-facebook"
                                        style="vertical-align: middle; color: #36bddb; font-size: 24px; "></i>
                                </a>
                                <span class="gdlr-icon-inline-text"
                                    style="font-weight: bold; text-transform: uppercase; margin-left: 6px; color: #ffffff; padding-right: 33px; font-size: 13px; ">Facebook</span>
                            </span>
                            <span class="gdlr-icon-shortcode">
                                <a href="#" target="blank">
                                    <i class="gdlr-icon fa fa-twitter"
                                        style="vertical-align: middle; color: #36bddb; font-size: 24px; "></i>
                                </a>
                                <span class="gdlr-icon-inline-text"
                                    style="font-weight: bold; text-transform: uppercase; margin-left: 6px; color: #ffffff; padding-right: 33px; font-size: 13px; ">Twitter</span>
                            </span>
                            <span class="gdlr-icon-shortcode">
                                <a href="#" target="blank">
                                    <i class="gdlr-icon fa fa-instagram"
                                        style="vertical-align: middle; color: #36bddb; font-size: 24px; "></i>
                                </a>
                                <span class="gdlr-icon-inline-text"
                                    style="font-weight: bold; text-transform: uppercase; margin-left: 6px; color: #ffffff; padding-right: 33px; font-size: 13px; ">Instagram</span>
                            </span>
                            <span class="gdlr-icon-shortcode">
                                <a href="#" target="blank">
                                    <i class="gdlr-icon fa fa-google-plus"
                                        style="vertical-align: middle; color: #36bddb; font-size: 24px; "></i>
                                </a>
                                <span class="gdlr-icon-inline-text"
                                    style="font-weight: bold; text-transform: uppercase; margin-left: 6px; color: #ffffff; padding-right: 33px; font-size: 13px; ">Google
                                    Plus</span>
                            </span>
                            <span class="gdlr-icon-shortcode">
                                <a href="#" target="blank">
                                    <i class="gdlr-icon fa fa-pinterest"
                                        style="vertical-align: middle; color: #36bddb; font-size: 24px; "></i>
                                </a>
                                <span class="gdlr-icon-inline-text"
                                    style="font-weight: bold; text-transform: uppercase; margin-left: 6px; color: #ffffff; padding-right: 33px; font-size: 13px; ">Pinterest</span>
                            </span>
                            <span class="gdlr-icon-shortcode">
                                <a href="#" target="blank">
                                    <i class="gdlr-icon fa fa-vimeo"
                                        style="vertical-align: middle; color: #36bddb; font-size: 24px; "></i>
                                </a>
                                <span class="gdlr-icon-inline-text"
                                    style="font-weight: bold; text-transform: uppercase; margin-left: 6px; color: #ffffff; padding-right: 33px; font-size: 13px; ">Vimeo</span>
                            </span>
                        </div>
                        <div class="clear"></div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </section> --}}
        </div>
        <!-- Below Sidebar Section-->

    </div>
    <!-- gdlr-content -->
    <div class="clear"></div>

@endsection


@section('modal')
     <!-- Modal -->
  <div class="modal fade" id="inputNewsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('news.store')}}" method="POST"  enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="exampleFormControlInput1">Penulis</label>
                  <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Judul</label>
                  <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Gambar</label>
                  <input type="file" class="form-control custom-file" name="gambar" id="gambar">
                </div>

                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Kolom Berita</label>
                  <textarea class="form-control" name="berita" id="berita" rows="3"></textarea>
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


  <div class="modal fade" id="inputTestiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('testi.store')}}" method="POST" >
                @csrf
                <div class="form-group">
                  <label for="exampleFormControlInput1">Nama</label>
                  <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Kategori</label>
                  <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Kategori" required>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Testimoni</label>
                  <textarea class="form-control" name="testi" id="testi" rows="3" placeholder="Testi" required></textarea>
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

  <div class="modal fade" id="editTestiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="" class="url" method="POST" >
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label for="exampleFormControlInput1">Nama</label>
                  <input type="text" class="form-control nama" name="nama" id="nama" placeholder="Nama" required>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Kategori</label>
                  <input type="text" class="form-control kategori" name="kategori" id="kategori" placeholder="Kategori" required>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Testimoni</label>
                  <textarea class="form-control testi" name="testi" id="testi" rows="3" placeholder="Testi" required></textarea>
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


  {{-- Edit Produk Modal --}}
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

{{-- Edit Visi Modal --}}
  <div class="modal fade" id="editVisiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Visi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <h1>Edit Visi</h1>
            <form action="" class="url" method="POST" >
                @csrf
                @method('PUT')
                <div class="form-group row mt-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Target</label>
                    <div class="col-sm-10">
                        <select class="custom-select code" name="idtarget" id="idtarget">

                          </select>
                    </div>
                </div>
                <div class="form-group row mt-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Visi</label>
                    <div class="col-sm-10">
                        {{-- <input type="text" class="form-control form-control-lg" name="kategori" id="kategori" placeholder="Target"> --}}
                        <textarea name="visi"  id="visi" class="form-control visi" cols="30" rows="10"></textarea>
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
      </div>
    </div>
</div>
@endsection
