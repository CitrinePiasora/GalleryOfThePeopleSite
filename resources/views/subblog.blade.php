@extends('layouts.frontend')

@section('title')
    Gallery
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="inner-container container">
            <div class="row">
                <div class="section-header col-md-12">
                    <h2>{{$images->getTable()}}</h2>
                </div> <!-- /.section-header -->
            </div> <!-- /.row -->
            <div class="row">
                @foreach($images::all() as $image)
                    <div class="post-masonry col-md-4 col-sm-6">
                        <div class="blog-thumb">
                            <img src="{{asset($image->path)}}">
                            <div class="overlay-b">
                                <div class="overlay-inner">
                                    <a href="{{route('entry', [$images->getTable(), $image->title, $image->id])}}" class="fa fa-link"></a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.post-masonry -->
                @endforeach
                </div> <!-- /.blog-masonry -->
            </div> <!-- /.row -->
        </div> <!-- /.inner-content -->
    </div> <!-- /.content-wrapper -->
@endsection