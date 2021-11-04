<footer class="footer-wrapper">
    <div class="footer-container container ">
        <div class="row d-flex justify-content-between">

        {{-- <div class="footer-column three columns" id="footer-widget-1">
            <div id="text-5" class="widget widget_text gdlr-item gdlr-widget">
                <h3 class="gdlr-widget-title">About Us</h3>
                <div class="clear"></div>
                <div class="textwidget">
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        Morbi leo risus, porta.</p>
                    <p><img src="upload/logo-light.png" style="width: 150px;" alt="" /></p>
                </div>
            </div>
        </div>
        <div class="footer-column three columns" id="footer-widget-2">
            <div id="recent-posts-5" class="widget widget_recent_entries gdlr-item gdlr-widget">
                <h3 class="gdlr-widget-title">Recent Posts</h3>
                <div class="clear"></div>
                <ul>
                    <li>
                        <a href="#">Sem Porta Mollis Parturi</a>
                    </li>
                    <li>
                        <a href="#">Nullam Lorem Mattis Purus</a>
                    </li>
                    <li>
                        <a href="#">Nibh Sem Sit Ullamcorper</a>
                    </li>
                    <li>
                        <a href="#">Donec luctus imperdiet</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-column three columns" id="footer-widget-3">
            <div id="gdlr-recent-portfolio2-widget-6"
                class="widget widget_gdlr-recent-portfolio2-widget gdlr-item gdlr-widget">
                <h3 class="gdlr-widget-title">Recent Works</h3>
                <div class="clear"></div>
                <div class="gdlr-recent-port2-widget">
                    <div class="recent-port-widget-thumbnail">
                        <a href="#"><img src="upload/shutterstock_244487860-150x150.jpg" alt="" width="150"
                                height="150" /></a>
                    </div>
                    <div class="recent-port-widget-thumbnail">
                        <a href="#"><img src="upload/shutterstock_179829281-150x150.jpg" alt="" width="150"
                                height="150" /></a>
                    </div>
                    <div class="recent-port-widget-thumbnail">
                        <a href="#"><img src="upload/shutterstock_166099589-150x150.jpg" alt="" width="150"
                                height="150" /></a>
                    </div>
                    <div class="recent-port-widget-thumbnail">
                        <a href="#"><img src="upload/photodune-6191983-kitchen-m-150x150.jpg" alt="" width="150"
                                height="150" /></a>
                    </div>
                    <div class="recent-port-widget-thumbnail">
                        <a href="#"><img src="upload/shutterstock_21271114-150x150.jpg" alt="" width="150"
                                height="150" /></a>
                    </div>
                    <div class="recent-port-widget-thumbnail">
                        <a href="#"><img src="upload/shutterstock_125357699-150x150.jpg" alt="" width="150"
                                height="150" /></a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div> --}}
        <div class="col-md-7 d-flex justify-content-center ">
            <img src="{{asset('gambar/SSBR.png')}}" style="width: 600px;padding-bottom: 35px;" alt="">
        </div>
        <div class="footer-column col-md-4" id="footer-widget-4">
            <div id="text-9" class="widget widget_text gdlr-item gdlr-widget">
                <h3 class="gdlr-widget-title">Contact Info</h3>
                <div class="clear"></div>
                <div class="textwidget">

                    <span class="clear"></span><span class="gdlr-space"
                    style="margin-top: 10px; display: block;"></span>

                    <img src="https://img.icons8.com/ios/25/FFFFFF/worldwide-location.png" class="ml-2"/>
                    &nbsp;Address: Dsn. Boro Ureg-Ureg RT 06 RW 06, Ds. Asrikaton, Kec. Pakis, Kab. Malang

                    <span class="clear"></span><span class="gdlr-space"
                        style="margin-top: 10px; display: block;"></span>

                        <img src="https://img.icons8.com/ios-filled/21/FFFFFF/phone.png"/>
                        +62 852-3610-1109


                    <span class="clear"></span><span class="gdlr-space"
                        style="margin-top: 10px; display: block;"></span>

                        <img src="https://img.icons8.com/ios/21/FFFFFF/gmail--v2.png" />
                        &nbsp;cahaya.pro213@gmail.com

                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>

    </div>

    <div class="copyright-wrapper">
        <div class="copyright-container container" align="center">


            Copyright 2021&copy;MRXTech, All Right Reserved

            {{-- <div class="copyright-right"> --}}
             {{-- </div> --}}
            <div class="clear"></div>
        </div>
    </div>
</footer>

<!-- Button trigger modal -->




  {{-- Input Target Modal --}}
  <div class="modal fade" id="inputTargetModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Misi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <h1>Tambah Visi</h1>
            <form action="{{route('target.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group row mt-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Target</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" name="kategori" id="kategori" placeholder="Target">
                    </div>
                </div>

                <div class="form-group mt-5" style="text-align: right;">
                    <!-- <div class="col-sm-10"> -->
                    <button type="submit" class="btn btn-primary" name="simpan">Edit</button>
                    <a href="{{route('product.index')}}" class="btn btn-danger">Kembali</a>
                    <!-- </div> -->
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>

  {{-- Input misi Modal --}}
  <div class="modal fade" id="tambahMisiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Misi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <h1>Tambah Misi</h1>
            <form action="{{route('misi.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group row mt-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Misi</label>
                    <div class="col-sm-10">
                        <textarea name="misi" id="misi" class="form-control" cols="30" rows="10"></textarea>
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



