@extends('layouts.frontend')

@section('title')
    Contact
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="inner-container container">
            <div class="row">
                <div class="section-header col-md-12">
                    <h2>Contact Us</h2>
                </div> <!-- /.section-header -->
            </div> <!-- /.row -->
            <div class="contact-form">
                <div class="box-content col-md-12">
                    <div class="row">
                        <div class="col-md-7">
                            <p>For further inquiries, you can send an email below.</p>
                            <h3 class="contact-title">Send Us Email</h3>
                            <div class="contact-form-inner">
                                <form method="post" action="#" name="contactform" id="contactform">
                                    <p>
                                        <label for="name">Your Name:</label>
                                        <input name="name" type="text" id="name">
                                    </p>
                                    <p>
                                        <label for="email">Email Address:</label>
                                        <input name="email" type="text" id="email"> 
                                    </p>
                                    <p>
                                        <label for="phone">Phone Number:</label>
                                        <input name="phone" type="text" id="phone">   
                                    </p>
                                    <p>
                                        <label for="comments">Your message:</label>
                                        <textarea name="comments" id="comments"></textarea>    
                                    </p>
                                    <input type="submit" class="mainBtn" id="submit" value="Send Message" />
                                </form>
                            </div> <!-- /.contact-form-inner -->
                            <div id="message"></div>
                        </div> <!-- /.col-md-7 -->
                        <div class="col-md-5">
                            <div class="googlemap-wrapper">
                                <div id="map_canvas" class="map-canvas"></div>
                            </div>
                        </div> <!-- /.col-md-5 -->
                    </div> <!-- /.row -->
                   </div> <!-- /.box-content -->
            </div> <!-- /.contact-form -->
        </div> <!-- /.inner-content -->
    </div> <!-- /.content-wrapper -->
        <!-- ADDED OUR TEAM START-->
    <div class="content-wrapper">
        <div class="inner-container container">
            <!-- trying to make format good-->
            <div class="row">
                <div class="section-header col-md-12">
                    <h2>Our Team</h2>
                </div> <!-- /.section-header -->
            </div> <!-- /.row -->
            <div class="our-team row">
                <div class="team-member col-md-6 col-sm-6">
                    <img src="images/team/member2.jpg" alt="">
                    <div class="box-content">
                        <h4 class="member-name">Kiagus Aqsha</h4>
                        <span>Ideator</span>
                        <p>Front-end.</p>
                        <ul class="social-network">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-dropbox"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>
                </div> <!-- /.team-member -->
                <div class="team-member col-md-6 col-sm-6">
                    <img src="images/team/member1.jpg" alt="">
                    <div class="box-content">
                        <h4 class="member-name">George Owen</h4>
                        <span>Coder</span>
                        <p>Back-end.</p>
                        <ul class="social-network">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-dropbox"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>
                </div> <!-- /.team-member -->
                <!-- ADDED TEAM MEMBER   START-->
                <div class="team-member col-md-6 col-sm-6">
                    <img src="images/team/member1.jpg" alt="">
                    <div class="box-content">
                        <h4 class="member-name">Stanly</h4>
                        <span>Coder</span>
                        <p>Back-end.</p>
                        <ul class="social-network">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-dropbox"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>
                </div> <!-- /.team-member -->
                <!--ADDED TEAM MEMBER   END-->
            </div> <!-- /.our-team -->
            <!-- trying to make format good-->
        </div> <!-- /.inner-content -->
    </div> <!-- /.content-wrapper -->
            <!-- ADDED OUR TEAM END-->
@endsection

