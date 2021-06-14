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
            <div id="app">
                <entry></entry>
            </div>
        </div> <!-- /.inner-content -->
    </div> <!-- /.content-wrapper -->
@endsection