  <!-- body-wrapper -->

  {{-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> --}}
  {{-- CKEDITOR --}}
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bs4-summernote@0.8.10/dist/summernote-bs4.min.js"></script> --}}
    <!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="{{asset('js/editor.js')}}"></script>
    <script type='text/javascript' src='{{asset('js/jquery.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/jquery-migrate.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/scripts.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/superfish.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/hoverIntent.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/modernizr.custom.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/jquery.dlmenu.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/jquery.easing.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/jquery.fancybox.pack.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/helpers/jquery.fancybox-media.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/helpers/jquery.fancybox-thumbs.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/jquery.flexslider.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/jquery.isotope.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/gdlr-script.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/jquery.transit.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/gdlr-portfolio-script.js')}}'></script>
    <script>var ms_grabbing_curosr = 'images/grabbing.cur', ms_grab_curosr = 'images/grab.cur';</script>
    <script type="text/javascript">
        (function (url) {
            if (/(?:Chrome\/26\.0\.1410\.63 Safari\/537\.31|WordfenceTestMonBot)/.test(navigator.userAgent)) { return; }
            var addEvent = function (evt, handler) {
                if (window.addEventListener) {
                    document.addEventListener(evt, handler, false);
                } else if (window.attachEvent) {
                    document.attachEvent('on' + evt, handler);
                }
            };
            var removeEvent = function (evt, handler) {
                if (window.removeEventListener) {
                    document.removeEventListener(evt, handler, false);
                } else if (window.detachEvent) {
                    document.detachEvent('on' + evt, handler);
                }
            };
            var evts = 'contextmenu dblclick drag dragend dragenter dragleave dragover dragstart drop keydown keypress keyup mousedown mousemove mouseout mouseover mouseup mousewheel scroll'.split(' ');
            var logHuman = function () {
                if (window.wfLogHumanRan) { return; }
                window.wfLogHumanRan = true;
                var wfscr = document.createElement('script');
                wfscr.type = 'text/javascript';
                wfscr.async = true;
                wfscr.src = url + '&r=' + Math.random();
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(wfscr);
                for (var i = 0; i < evts.length; i++) {
                    removeEvent(evts[i], logHuman);
                }
            };
            for (var i = 0; i < evts.length; i++) {
                addEvent(evts[i], logHuman);
            }
        });
    </script>
    <script>
        (window.MSReady = window.MSReady || []).push(function ($) {

            "use strict";
            var masterslider_8b8a = new MasterSlider();

            // slider controls
            masterslider_8b8a.control('bullets', {
                autohide: false,
                overVideo: true,
                dir: 'h',
                align: 'bottom',
                space: 6,
                margin: 35
            });
            // slider setup
            masterslider_8b8a.setup("MS5bab48b0b8b8a", {
                width: 1140,
                height: 740,
                minHeight: 0,
                space: 0,
                start: 1,
                grabCursor: true,
                swipe: false,
                mouse: false,
                keyboard: true,
                layout: "fullwidth",
                wheel: false,
                autoplay: true,
                instantStartLayers: false,
                mobileBGVideo: false,
                loop: true,
                shuffle: false,
                preload: 0,
                heightLimit: true,
                autoHeight: false,
                smoothHeight: true,
                endPause: false,
                overPause: true,
                fillMode: "fill",
                centerControls: true,
                startOnAppear: false,
                layersMode: "center",
                autofillTarget: "",
                hideLayers: false,
                fullscreenMargin: 0,
                speed: 20,
                dir: "h",
                view: "basic"
            });

            window.masterslider_instances = window.masterslider_instances || [];
            window.masterslider_instances.push(masterslider_8b8a);
        });
    </script>
    <script type='text/javascript' src='{{asset('assets/js/masterslider.min.js')}}'></script>

        <script>
            $(document).ready(function () {
                $('.btn-modal-editProduk').on('click', function () {
                    let id = $(this).data('id');
                    let nama = $(this).data('nama');
                    let desc = $(this).data('desc');
                    let gbr = $(this).data('gambar');
                    let url = $(this).data('url');
                    let path = $(this).data('path');
                    $('.id').val(id);
                    $('.nama').val(nama);
                    $('.desc').val(desc);
                    $('.gambar').attr('src', gbr);
                    $('.produk').attr('value', path);
                    $('.url').attr('action', url);

                })
            })

            $(document).ready(function () {
                $('.btn-modal-editVisi').on('click', function () {
                    let id = $(this).data('id');
                    let idkategori = $(this).data('idkategori');
                    let url = $(this).data('url');
                    let visi = $(this).data('visi');
                    $('.visi').val(visi);
                    $('.url').attr('action',url);
                    $.ajax({
                        type:'GET',
                        url:'/target-list',
                        success:function(data, textStatus, jqXHR){
                            let code = "";
                            data.forEach(element => {
                                if(element.id == idkategori){
                                    code += `<option value="${element.id}" selected class="merek">${element.kategori} </option>`;
                                }else{
                                    code += `<option value="${element.id}" class="merek">${element.kategori}</option>`;
                                }
                            });
                            $('.code').append(code);
                        }
                    })
                })
            })

            $(document).ready(function () {
                $('.btn-modal-editTesti').on('click', function () {
                    let id = $(this).data('id');
                    let nama = $(this).data('nama');
                    let kategori = $(this).data('kategori');
                    let url = $(this).data('url');
                    let testi = $(this).data('testi');
                    $('.nama').val(nama);
                    $('.kategori').val(kategori);
                    $('.testi').val(testi);
                    $('.url').attr('action',url);
                })
            })
            $(document).ready(function () {
                $('.btn-modal-editMisi').on('click', function () {
                    let id = $(this).data('id');
                    let misi = $(this).data('misi');
                    let url = $(this).data('url');
                    $('.url').attr('action', url);
                    $('.id').val(id);
                    $('.misi').val(misi);
                })
            })

            $(document).ready(function(){
                $('.btn-news').on('click', function(){
                    let news = $('#berita').val($('.Editor-editor').html());
                    let nama = $(document).getElementById('nama');
                    console.log(news.val , nama.val);

                });
            });

            $(document).ready(function(){
                $('.btn-modal-editNews').on('click', function () {
                    let id = $(this).data('id')
                    let judul = $(this).data('judul')
                    let nama = $(this).data('nama')
                    let berita = $(this).data('berita')
                    let gambar = $(this).data('gambar')
                    let gbrlama = $(this).data('path')
                    let url = $(this).data('url')
                    $('.judul').val(judul)
                    $('.nama').val(nama)
                    $('.Editor-editor').html(berita)
                    $('.gambar').attr('src', gambar)
                    $('.gbrlama').val(gbrlama)
                    $('.url').attr('action', url)
                    console.log
                })
            })


            $(function () {
                    $('[data-toggle="tooltip"]').tooltip()
            })
        </script>

<script>
    $(document).ready(function() {
        $("#berita").Editor();

    });


</script>
