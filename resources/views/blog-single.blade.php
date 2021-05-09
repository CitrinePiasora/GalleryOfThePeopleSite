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
                <div class="project-infos col-md-12">
                    <div class="box-content">
                        <h2 class="project-title">{{$data['title']}}</h2>
                        
                            <blockquote>
                                {{$data['desc']}}
                            </blockquote>

                        <ul class="project-meta">
                            <li><i class="fa fa-folder-open"></i><a href="{{route('subgalleries', $data['route'])}}">{{$data['db']}}</a></li>
                            <li><i class="fa fa-calendar-o"></i>{{$data['date']}}</li>
                            <li><i class="fa fa-users"></i>{{$data['by']}}</li>
                        </ul>
                    </div> <!-- /.box-content -->
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.inner-content -->
    </div> <!-- /.content-wrapper -->
@endsection