@extends('layouts.frontend')

@section('title')
    404 Page Not Found
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="inner-container container">
            <div class="row">
                <div class="section-header col-md-12">
                    <h2>404 - Page Not Found !</h2>
                </div> <!-- /.section-header -->
            </div> <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="box-content">
                        <div class="text-center error-page">
                            <h1>404</h1>
                            <span>Page cannot be found in this website.</span>
                            <p>Please try Navigation or Search to find what you are looking for!</p>
                            <p><a href="{{route('home')}}">&larr; Go back Home</a></p>
                        </div> <!-- /.text-center -->
                    </div> <!-- /.box-content -->
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.inner-content -->
    </div> <!-- /.content-wrapper -->
@endsection