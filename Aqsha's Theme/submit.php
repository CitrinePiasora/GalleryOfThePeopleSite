<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>GOTP - Submission</title><!-- changed Artcore to Gallery of the People--><!-- Changed Contact Us to About Us-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,400italic,300italic,300,500,500italic,700,900">
        <!--
        Artcore Template
		http://www.templatemo.com/preview/templatemo_423_artcore
        -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/templatemo-misc.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <section id="pageloader">
            <div class="loader-item fa fa-spin colored-border"></div>
        </section> <!-- /#pageloader -->

        <header class="site-header container-fluid">
            <div class="top-header">
                <div class="logo col-md-6 col-sm-6">
                    <h1><a href="blog.php"><em>GalleryOf</em>ThePeople</a></h1>
                </div> <!-- /.logo -->
                <div class="social-top col-md-6 col-sm-6">
                    <ul>
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-linkedin"></a></li>
                        <li><a href="#" class="fa fa-google-plus"></a></li>
                        <li><a href="#" class="fa fa-flickr"></a></li>
                        <li><a href="#" class="fa fa-rss"></a></li>
                    </ul>
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
                            <li><a href="blog.php">Home</a></li>
                            <li><a href="#">Artworks</a><!-- changed Projects to Artworks-->
                                <ul>
                                    <li><a href="projects-2.php">Paintings</a></li>
                                    <li><a href="projects-3.php">Sculptures</a></li>
                                    <li><a href="project-details.php">Photography</a></li>
                                    <!-- ADDED ANOTHER LIST   START-->
                                    <li><a href="project-details.php">Digital Art</a></li>
                                    <!-- ADDED ANOTHER LIST   START-->
                                </ul>
                            </li>
                            <li><a href="#">About Us</a>
                                <ul>
                                    <li><a href="our-team.php">Who We Are</a></li>

                                </ul>
                            </li>
                            <li class="active"><a href="contact.php">Contact</a></li>
                        </ul>
                    </div> <!-- /.menu-wrapper -->
                </div> <!-- /.row -->
            </div> <!-- /.main-header -->
            <div id="responsive-menu">
                <ul>
                    <li><a href="blog.php">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="#">Projects</a>
                        <ul>
                            <li><a href="projects-2.php">Two Columns</a></li>
                            <li><a href="projects-3.php">Three Columns</a></li>
                            <li><a href="project-details.php">Project Single</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Blog</a>
                        <ul>
                            <li><a href="blog.php">Blog Masonry</a></li>
                            <li><a href="blog-single.php">Post Single</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Pages</a>
                        <ul>
                            <li><a href="our-team.php">Our Team</a></li>
                            <li><a href="archives.php">Archives</a></li>
                            <li><a href="grids.php">Columns</a></li>
                            <li><a href="404.php">404 Page</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </header> <!-- /.site-header -->

        <div class="content-wrapper">
            <div class="inner-container container">
                <div class="row">
                    <div class="section-header col-md-12">
                        <h2>Submission Form</h2>
                    </div> <!-- /.section-header -->
                </div> <!-- /.row -->
                <div class="contact-form">
                    <div class="box-content col-md-12">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="contact-form-inner">
                                    <form method="post" action="#" name="contactform" id="contactform">
                                        <p>
                                            <label for="name">Project Name:</label>
                                            <input name="name" type="text" id="name">
                                        </p>
                                        <p>
                                            <label for="email">Project File:</label>
                                            <input name="email" type="file" id="email"> 
                                        </p>
										<p>
                                            <label for="name">Copyright/Origin:</label>
                                            <input name="name" type="text" id="name">
                                        </p>
										<p>
                                            <label for="comments">Description:</label>
                                            <textarea name="comments" id="comments"></textarea>    
                                        </p>
                                        <input type="submit" class="mainBtn" id="submit" value="Submit" />
                                    </form>
                                </div> <!-- /.contact-form-inner -->
                                <div id="message"></div>
                            </div> <!-- /.col-md-7 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.box-content -->
                </div> <!-- /.contact-form -->
            </div> <!-- /.inner-content -->
        </div> <!-- /.content-wrapper -->
        <!-- ADDED OUR TEAM START-->

        <!-- ADDED OUR TEAM END-->

        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Map -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>
        
        <!-- Google Map Init-->
        <script type="text/javascript">
            jQuery(function($){
                $('#map_canvas').gmap3({
                    marker:{
                        address: '40.717599,-74.005136' 
                    },
                        map:{
                        options:{
                        zoom: 17,
                        scrollwheel: false,
                        streetViewControl : true
                        }
                    }
                });
            });
        </script>

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
