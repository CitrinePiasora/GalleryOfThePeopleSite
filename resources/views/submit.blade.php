@extends('layouts.frontend')

@section('title')
    Upload
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="inner-container container">
            <div class="row">
                <div class="section-header col-md-12">
                    <h2>Submission Form</h2>
                </div> <!-- /.section-header -->
            </div> <!-- /.row -->
            <div id="app">
                <formdata :userID="'{{Auth::user()->id}}'"></formdata>
            </div>
        </div> <!-- /.inner-content -->
    </div> <!-- /.content-wrapper -->

    <script src="{{asset('public/js/app.js')}}"></script>
@endsection