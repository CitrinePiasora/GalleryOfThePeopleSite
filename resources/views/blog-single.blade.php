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
            @if (Auth::check())
                <div id="app">
                    <entry v-bind:art="'{{$data['art']}}'" v-bind:category="'{{$data['db']}}'" v-bind:userid="'{{Auth::user()->id}}'"></entry>
                </div>
            @else
                <div id="app">
                    <entry v-bind:art="'{{$data['art']}}'" v-bind:category="'{{$data['db']}}'" v-bind:userid="'0'"></entry>
                </div>
            @endif
        </div> <!-- /.inner-content -->
    </div> <!-- /.content-wrapper -->

    <script src="{{asset('public/js/app.js')}}"></script>
@endsection