<header class="gdlr-header-wrapper header-style-1-wrapper gdlr-header-no-top-bar">
    <!-- top navigation -->
    <div id="gdlr-header-substitute"></div>
    <div class="gdlr-header-inner header-inner-header-style-1">
        <div class="gdlr-header-container container">
            <div class="gdlr-header-inner-overlay"></div>

            <!-- logo -->
            <div class="gdlr-logo">
                <div class="gdlr-logo-inner">
                    <a href="index.html">
                        <img src="{{asset('gambar/cahayapro.png')}}" alt="" width="100"  style="height: 50px" />

                    </a>
                </div>
                <div class="gdlr-responsive-navigation dl-menuwrapper" id="gdlr-responsive-navigation">
                    <button class="dl-trigger">Open Menu</button>
                    <ul id="menu-main-menu" class="dl-menu gdlr-main-mobile-menu">
                        <li class="menu-item menu-item-home current-menu-item "><a href="{{url('/beranda')}}">Home</a>
                        </li>
                        <li class="menu-item menu-item-has-children menu-item-30"><a href="{{route('product.index')}}">Product</a></li>
                        <li class="menu-item menu-item-has-children"><a href="{{route('profile.index')}}">Profile</a></li>
                        <li class="menu-item menu-item-has-children"><a href="{{route('news.index')}}">news</a></li>
                        <li class="menu-item menu-item-has-children"><a href="{{url('contact')}}">Contact</a></li>
                        @auth
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            </div>
                        </li>
                        @endauth
                        {{-- <li class="menu-item menu-item-has-children"><a href="typography.html">Shortcodes</a>
                            <ul class="dl-submenu">
                                <li id="menu-item-10" class="menu-item menu-item-has-children menu-item-10"><a
                                        href="#">Shortcode Set 1</a>
                                    <ul class="dl-submenu">
                                        <li class="menu-item"><a
                                                href="accordiontoggle-box.html">Accordion/Toggle Box</a></li>
                                        <li class="menu-item"><a href="audio-shortcode.html">Audio Shortcode</a>
                                        </li>
                                        <li class="menu-item"><a href="button.html">Button</a></li>
                                        <li class="menu-item"><a href="column-shortcode.html">Column
                                                Shortcode</a></li>
                                        <li class="menu-item"><a href="divider.html">Divider</a></li>
                                        <li class="menu-item"><a href="gallery-shortcode.html">Gallery
                                                Shortcode</a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-11" class="menu-item menu-item-has-children menu-item-11"><a
                                        href="#">Shortcode Set 2</a>
                                    <ul class="dl-submenu">
                                        <li class="menu-item"><a href="heading-tag.html">Heading Tag</a></li>
                                        <li class="menu-item"><a href="icons-icon-boxes.html">icons &#038; icon
                                                boxes</a></li>
                                        <li class="menu-item"><a href="lightbox-frames.html">Lightbox &#038;
                                                Frames</a></li>
                                        <li class="menu-item"><a href="notification-boxes.html">Notification
                                                Boxes</a></li>
                                        <li class="menu-item"><a href="personnel.html">Personnel</a></li>
                                        <li class="menu-item"><a href="post-slider.html">Post Slider</a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-12" class="menu-item menu-item-has-children menu-item-12"><a
                                        href="#">Shortcode Set 3</a>
                                    <ul class="dl-submenu">
                                        <li class="menu-item"><a href="price-table.html">Price Table</a></li>
                                        <li class="menu-item"><a href="process.html">Process</a></li>
                                        <li class="menu-item"><a href="progress-circle.html">Progress Circle</a>
                                        </li>
                                        <li class="menu-item"><a href="skills.html">Skills</a></li>
                                        <li class="menu-item"><a href="slider-shortcode.html">Slider
                                                Shortcode</a></li>
                                        <li class="menu-item"><a href="space.html">Space</a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-13" class="menu-item menu-item-has-children menu-item-13"><a
                                        href="#">Shortcode Set 4</a>
                                    <ul class="dl-submenu">
                                        <li class="menu-item"><a href="styled-box.html">Styled Box</a></li>
                                        <li class="menu-item"><a href="stunning-text.html">Stunning Text</a>
                                        </li>
                                        <li class="menu-item"><a href="table.html">Table</a></li>
                                        <li class="menu-item"><a href="tabs.html">Tabs</a></li>
                                        <li class="menu-item"><a href="testimonial-2.html">Testimonial &#038;
                                                Quote</a></li>
                                        <li class="menu-item"><a href="typography.html">Typography</a></li>
                                        <li class="menu-item"><a href="video.html">Video</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li> --}}
                    </ul>
                </div>
            </div>

            <!-- navigation -->
            <div class="gdlr-navigation-wrapper">
                <nav class="gdlr-navigation" id="gdlr-main-navigation">
                    <ul id="menu-main-menu-1" class="sf-menu gdlr-main-menu">
                        <li class="menu-item menu-item-home {{ Request::segment(1) === 'beranda' ? 'current-menu-item ' : null }}   gdlr-normal-menu"><a href="{{url('/beranda')}}">Home</a></li>
                        <li class="menu-item menu-item-has-children  {{ Request::segment(1) === 'product' ? 'current-menu-item ' : null }}  gdlr-normal-menu"><a href="{{route('product.index')}}" class="sf-with-ul-pre">Product</a></li>
                        <li class="menu-item menu-item-has-children  {{ Request::segment(1) === 'profile' ? 'current-menu-item ' : null }}  gdlr-normal-menu"><a href="{{route('profile.index')}}" class="sf-with-ul-pre">Profile</a></li>
                        <li class="menu-item menu-item-has-children  {{ Request::segment(1) === 'news' ? 'current-menu-item ' : null }}  gdlr-normal-menu"><a href="{{route('news.index')}}">news</a></li>
                        <li class="menu-item menu-item-has-children  {{ Request::segment(1) === 'contact' ? 'current-menu-item ' : null }} gdlr-normal-menu"><a href="{{url('contact')}}" class="sf-with-ul-pre" target="_blank">Contact</a></li>
                        {{-- <li>{{ Auth::user()->name }}</li> --}}
                        @auth
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            </div>
                        </li>
                        @endauth

                        {{-- <li
                            class="menu-item menu-item-has-childrenmenu-item menu-item-has-children gdlr-mega-menu">
                            <a href="typography.html" class="sf-with-ul-pre">{{ Auth::user()->name }}<</a>
                            <div class="sf-mega">
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-has-children menu-item-10"
                                        data-column="three columns" data-size="1/4"><a href="#"
                                            class="sf-with-ul-pre">Shortcode Set 1</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a
                                                    href="accordiontoggle-box.html">Accordion/Toggle Box</a>
                                            </li>
                                            <li class="menu-item"><a href="audio-shortcode.html">Audio
                                                    Shortcode</a></li>
                                            <li class="menu-item"><a href="button.html">Button</a></li>
                                            <li class="menu-item"><a href="column-shortcode.html">Column
                                                    Shortcode</a></li>
                                            <li class="menu-item"><a href="divider.html">Divider</a></li>
                                            <li class="menu-item"><a href="gallery-shortcode.html">Gallery
                                                    Shortcode</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children menu-item-11"
                                        data-column="three columns" data-size="1/4"><a href="#"
                                            class="sf-with-ul-pre">Shortcode Set 2</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="heading-tag.html">Heading Tag</a>
                                            </li>
                                            <li class="menu-item"><a href="icons-icon-boxes.html">icons &#038;
                                                    icon boxes</a></li>
                                            <li class="menu-item"><a href="lightbox-frames.html">Lightbox &#038;
                                                    Frames</a></li>
                                            <li class="menu-item"><a href="notification-boxes.html">Notification
                                                    Boxes</a></li>
                                            <li class="menu-item"><a href="personnel.html">Personnel</a></li>
                                            <li class="menu-item"><a href="post-slider.html">Post Slider</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children menu-item-12"
                                        data-column="three columns" data-size="1/4"><a href="#"
                                            class="sf-with-ul-pre">Shortcode Set 3</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="price-table.html">Price Table</a>
                                            </li>
                                            <li class="menu-item"><a href="process.html">Process</a></li>
                                            <li class="menu-item"><a href="progress-circle.html">Progress
                                                    Circle</a></li>
                                            <li class="menu-item"><a href="skills.html">Skills</a></li>
                                            <li class="menu-item"><a href="slider-shortcode.html">Slider
                                                    Shortcode</a></li>
                                            <li class="menu-item"><a href="space.html">Space</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children menu-item-13"
                                        data-column="three columns" data-size="1/4"><a href="#"
                                            class="sf-with-ul-pre">Shortcode Set 4</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="styled-box.html">Styled Box</a></li>
                                            <li class="menu-item"><a href="stunning-text.html">Stunning Text</a>
                                            </li>
                                            <li class="menu-item"><a href="table.html">Table</a></li>
                                            <li class="menu-item"><a href="tabs.html">Tabs</a></li>
                                            <li class="menu-item"><a href="testimonial-2.html">Testimonial
                                                    &#038; Quote</a></li>
                                            <li class="menu-item"><a href="typography.html">Typography</a></li>
                                            <li class="menu-item"><a href="video.html">Video</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li> --}}
                    </ul>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</header>

{{-- <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="navigate" style="padding-left:100px" >
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
        </div>
      </nav>
</div> --}}
