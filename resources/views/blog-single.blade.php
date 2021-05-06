@extends('layouts.frontend')

@section('title')
    Gallery
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="inner-container container">
            <div class="row">
                <div class="section-header col-md-12">
                    <h2>{{$data['db']}}</h2>
                </div> <!-- /.section-header -->
            </div> <!-- /.row -->
            <div class="row">
                <div class="blog-image col-md-12">
                    <img src="{{asset($data['image'])}}">
                </div> <!-- /.blog-image -->
                <div class="blog-info col-md-12">
                    <div class="box-content">
                        <h2 class="blog-title">{{$data['title']}}</h2>
                        <span class="blog-meta">Uploaded: {{$data['date']}}</span>
                        <p>Artwork By: {{$data['by']}}</p>
                        
                            <blockquote>
                                {{$data['desc']}}
                            </blockquote>
                    </div> <!-- /.box-content -->
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.inner-content -->
    </div> <!-- /.content-wrapper -->
@endsection