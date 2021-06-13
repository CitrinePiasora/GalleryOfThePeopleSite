<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>@yield('title') | The Gallery Of The People</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,400italic,300italic,300,500,500italic,700,900">
    <!--
    Artcore Template
    http://www.templatemo.com/preview/templatemo_423_artcore
    -->
    <link rel="stylesheet" href="{{url('public/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('public/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{url('public/css/animate.css')}}">
    <link rel="stylesheet" href="{{url('public/css/templatemo-misc.css')}}">
    <link rel="stylesheet" href="{{url('public/css/templatemo-style.css')}}">
    <script src="{{url('public/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->

    <section id="pageloader">
        <div class="loader-item fa fa-spin colored-border"></div>
    </section> <!-- /#pageloader -->

    @include('layouts.inc.navbar')

    <div class="content">
        @yield('content')
    </div>

    <script src="{{url('public/js/vendor/jquery-1.11.0.min.js')}}"></script>
    <script>window.jQuery || document.write('<script src="public/js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="{{url('public/js/plugins.js')}}"></script>
    <script src="{{url('public/js/main.js')}}"></script>

    <!-- Preloader -->
    <script type="text/javascript">
        //<![CDATA[
        $(window).load(function() { // makes sure the whole site is loaded
            $('.loader-item').fadeOut(); // will first fade out the loading animation
                $('#pageloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
            $('body').delay(350).css({'overflow-y':'visible'});
        })
        //]]>
    </script>
</body>
</html>