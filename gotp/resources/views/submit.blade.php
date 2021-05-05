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
                <div class="contact-form">
                    <div class="box-content col-md-12">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="contact-form-inner">
                                    <form method="post" action="{{route('image')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <p>
                                                <label for="name">Project Name:</label>
                                                <input name="name" type="text" id="name">
                                            </p>
                                            
                                            <p>
                                                <label for="image">Image:</label>
                                                <input name="image[]" type="file" class="form-control-image" id="image" accept="image/*">
                                            </p>

                                            <p>
                                                <label for="origin">Copyright/Origin:</label>
                                                <input name="origin" type="text" id="name">
                                            </p>

                                            <p>
                                                <label for="desc">Description:</label>
                                                <textarea name="desc" id="desc"></textarea>   
                                            </p>
                                            <input type="submit" class="mainBtn" id="submit" value="upload" />
                                        </div>
                                    </form>
                                </div> <!-- /.contact-form-inner -->
                                <div id="message"></div>
                            </div> <!-- /.col-md-7 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.box-content -->
                </div> <!-- /.contact-form -->
            </div> <!-- /.inner-content -->
        </div> <!-- /.content-wrapper -->
@endsection