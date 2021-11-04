<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7 ltie8 ltie9" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 ltie9" lang="en-US"><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
{{-- <html lang="en-US"> --}}
<!--<![endif]-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cahaya Pro</title>
    <link rel="icon" href="{{asset('gambar/cp.png')}}">
    {{-- <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet"> --}}
    <link rel='stylesheet' href='{{asset('css/style.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/superfish.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/component.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/font-awesome.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/jquery.fancybox.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/flexslider.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/style-responsive.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/masterslider.main.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/masterslider-custom.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/style-custom.css')}}' type='text/css' media='all' />
    <link rel="stylesheet" href="{{asset('css/editor.css')}}">
    {{-- Summernote --}}

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{asset('css/nav.css')}}"> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Raleway:300|Lato:regular|Crete+Round:regular" rel="stylesheet"
        property="stylesheet" type="text/css" media="all">



</head>

<body data-rsssl=1 class="home page-template-default page page-id-5368 _masterslider _msp_version_3.2.7">
    <div class="body-wrapper  float-menu" data-home="index.html">
       @include('layout.header')

       <div class="content-wrapper">
           @yield('content')
       </div>
        <!-- is search -->

        <!-- content wrapper -->
         <a href="{{ url('contact')}}" style="position: fixed; bottom: 15px; right: 15px; z-index: 100; box-shadow: "><img src="https://img.icons8.com/color/48/000000/whatsapp--v1.png"/></a>
       @include('layout.footer')
    </div>
    @yield('modal')
    @include('layout.js')
</body>

</html>
