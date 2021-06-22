@extends('layouts.frontend')

@section('title')
    {{$flag['title']}}
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="inner-container container">
            <div class="row">
                <div class="section-header col-md-12">
                    <h2>{{$flag['header']}}</h2>
                </div> <!-- /.section-header -->
            </div> <!-- /.row -->
            <div id="app">
                <formdata v-bind:userid="'{{Auth::user()->id}}'" v-bind:editor="'{{$flag['editor']}}'" v-bind:entryid="'{{$flag['id']}}'" v-bind:cat="'{{$flag['cat']}}'"></formdata>
            </div>
        </div> <!-- /.inner-content -->
    </div> <!-- /.content-wrapper -->

    <script src="{{asset('public/js/app.js')}}"></script>
@endsection