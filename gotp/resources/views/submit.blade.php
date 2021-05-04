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
                                    <form method="post" action="#" name="contactform" id="contactform">
                                        <p>
                                            <label for="name">Project Name:</label>
                                            <input name="name" type="text" id="name">
                                        </p>
                                        <p>
                                            <label for="email">Project File:</label>
                                            <input name="email" type="file" id="email"> 
                                        </p>
										<p>
                                            <label for="name">Copyright/Origin:</label>
                                            <input name="name" type="text" id="name">
                                        </p>
										<p>
                                            <label for="comments">Description:</label>
                                            <textarea name="comments" id="comments"></textarea>    
                                        </p>
                                        <input type="submit" class="mainBtn" id="submit" value="Submit" />
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