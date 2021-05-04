@extends('layouts.frontend')

@section('title')
    Gallery
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="inner-container container">
            <div class="row">
                <div class="section-header col-md-12">
                    <h2>Works</h2>
                </div> <!-- /.section-header -->
            </div> <!-- /.row -->
            <div class="row">
                @forelse($images as $image)
                    <div class="post-masonry col-md-4 col-sm-6">
                        <div class="blog-thumb">
                            <img src="{{asset($image->image)}}" alt="">
                            <div class="overlay-b">
                                <div class="overlay-inner">
                                    <a href="test" class="fa fa-link"></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-body">
                            <div class="box-content">
                            </div>
                        </div>
                    </div> <!-- /.post-masonry -->
                @endforelse
                </div> <!-- /.blog-masonry -->
            </div> <!-- /.row -->
        </div> <!-- /.inner-content -->
    </div> <!-- /.content-wrapper -->
@endsection