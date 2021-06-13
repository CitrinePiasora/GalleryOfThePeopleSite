<header class="site-header container-fluid">
    <div class="top-header">
        <div class="logo col-md-6 col-sm-6">
            <h1><a href="{{route('home')}}"><em>GalleryOf</em>ThePeople</a></h1>
        </div> <!-- /.logo -->
        <div class="social-top col-md-6 col-sm-6">
            @if (Auth::check())
                <form class="form-inline" action="{{route('uploader')}}" id="upload">
                    <input class="mainBtn" type="submit" value="logout" form="logout"/>
                    <input class="mainBtn" type="submit" value="upload"/>
                </form>
            @else
                @if (Request::is('login'))
                    <form class="form-inline" action="{{route('uploader')}}" id="upload">
                        <input class="mainBtn" type="submit" value="need an account?" form="register"/>
                    </form>
                @else
                    <form class="form-inline" action="{{route('uploader')}}" id="upload">
                        <input class="mainBtn" type="submit" value="login" form="login"/>
                        <input class="mainBtn" type="submit" value="need an account?" form="register"/>
                    </form>
                @endif
            @endif
            
            <form class="form-inline" action="{{route('login')}}" id="login"></form>
            <form class="form-inline" action="{{route('logout') }}" id="logout"></form>
            <form class="form-inline" action="{{route('register') }}" id="register"></form>
        </div> <!-- /.social-top -->
    </div> <!-- /.top-header -->
    <div class="main-header">
        <div class="row">
            <div class="main-header-left col-md-3 col-sm-6 col-xs-8">
                <a id="search-icon" class="btn-left fa fa-search" href="#search-overlay"></a>
                <div id="search-overlay">
                    <a href="#search-overlay" class="close-search"><i class="fa fa-times-circle"></i></a>
                    <div class="search-form-holder">
                        <h2>Type keywords and hit enter</h2>
                        <form id="search-form" action="#">
                            <input type="search" name="s" placeholder="" autocomplete="off" />
                        </form>
                    </div>
                </div><!-- #search-overlay -->
                </div> <!-- /.main-header-left -->
            <div class="menu-wrapper col-md-9 col-sm-6 col-xs-4">
                <a href="#" class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></a>
                <ul class="sf-menu hidden-xs hidden-sm">
                    <li class="{{ Request::is('home') ? 'active' : '' }}"><a href="{{route('home')}}">Home</a></li>
                    <li class="{{ Request::is('gallery/*') ? 'active' : '' }}"><a>Artwork</a>
                        <ul>
                            <li><a href="{{url('gallery/paintings')}}">Physical Art</a></li>
                            <li><a href="{{url('gallery/sculptures')}}">Sculptures</a></li>
                            <li><a href="{{url('gallery/photography')}}">Photography</a></li>
                            <li><a href="{{url('gallery/digital')}}">Digital Art</a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div> <!-- /.menu-wrapper -->
        </div> <!-- /.row -->
    </div> <!-- /.main-header -->
</header> <!-- /.site-header -->