@extends('layouts.frontend')

@section('title')
    Home
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="inner-container container">
            <div class="row">
                <div class="section-header col-md-12">
                    <h2>Works</h2>
                    <span>Each category is a sub-gallery</span>
                </div> <!-- /.section-header -->
            </div> <!-- /.row -->
            <div class="row">
                <div class="blog-masonry masonry-true">
                    <div class="post-masonry col-md-4 col-sm-6">
                        <div class="blog-thumb">
                            <img src="{{url('public/Image/cover/digital.jpg')}}" alt="">
                            <div class="overlay-b">
                                <div class="overlay-inner">
                                    <a href="subblog.php?category=digital" class="fa fa-link"></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-body">
                            <div class="box-content">
                                <h3 class="post-title"><a href="subblog.php?category=digital">Digital Art</a></h3>
                            </div>
                        </div>
                    </div> <!-- /.post-masonry -->
                    <div class="post-masonry col-md-4 col-sm-6">
                        <div class="blog-thumb">
                            <img src="{{url('public/Image/cover/painting.jpg')}}" alt="">
                            <div class="overlay-b">
                                <div class="overlay-inner">
                                    <a href="subblog.php?category=paintings" class="fa fa-link"></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-body">
                            <div class="box-content">
                                <h3 class="post-title"><a href="subblog.php?category=paintings">Physical Art</a></h3>
                            </div>
                        </div>
                    </div> <!-- /.post-masonry -->
                    <div class="post-masonry col-md-4 col-sm-6">
                        <div class="blog-thumb">
                            <img src="{{url('public/Image/cover/sculpture.jpg')}}" alt="">
                            <div class="overlay-b">
                                <div class="overlay-inner">
                                    <a href="subblog.php?category=sculptures" class="fa fa-link"></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-body">
                            <div class="box-content">
                                <h3 class="post-title"><a href="subblog.php?category=sculptures">Sculptures</a></h3>
                            </div>
                        </div>
                    </div> <!-- /.post-masonry -->
                    <div class="post-masonry col-md-4 col-sm-6">
                        <div class="blog-thumb">
                            <img src="{{url('public/Image/cover/photography.jpg')}}" alt="">
                            <div class="overlay-b">
                                <div class="overlay-inner">
                                    <a href="gallery/photographies" class="fa fa-link"></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-body">
                            <div class="box-content">
                                <h3 class="post-title"><a href="gallery/photographies">Photography</a></h3>
                            </div>
                        </div> 
                    </div> <!-- /.post-masonry -->
                </div> <!-- /.blog-masonry -->
            </div> <!-- /.row -->
        </div> <!-- /.inner-content -->
    </div> <!-- /.content-wrapper -->
@endsection