@extends('layouts.frontend')

@section('title')
    About Us
@endsection

@section('content')
        <div class="content-wrapper">
            <div class="inner-container container">
                <div class="row">
                    <div class="section-header col-md-12">
                        <h2>Our Team</h2>
                        <span>Subtitle Goes Here</span>
                    </div> <!-- /.section-header -->
                </div> <!-- /.row -->
                <div class="our-team row">
                    <div class="team-member col-md-6 col-sm-6">
                        <img src="images/team/member2.jpg" alt="">
                        <div class="box-content">
                            <h4 class="member-name">Richard Meier</h4>
                            <span>Co-Founder / Architect</span>
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
                            <h4 class="member-name">Frank Gehry</h4>
                            <span>Modern Architect</span>
                            <p>Eveniet quia molestiae autem distinctio porro illo dicta nisi pariatur officiis facilis amet! Beatae magni dolore obcaecati.</p>
                            <ul class="social-network">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-dropbox"></a></li>
                                <li><a href="#" class="fa fa-linkedin"></a></li>
                            </ul>
                        </div>
                    </div> <!-- /.team-member -->
                </div> <!-- /.our-team -->
                <div class="our-staff row">
                    <div class="intro-header col-md-3 col-sm-6">
                        <h2>Our Staff</h2>
                        <p>Integer ac rhoncus enim, et tempor nisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed gravida sit amet magna nec pretium.</p>
                    </div> <!-- /.intro-header -->
                    <div class="col-md-3 col-sm-6">
                        <div class="staff-member">
                            <img src="images/team/staff2.jpg" alt="">
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <ul class="social-network">
                                        <li><a href="#" class="fa fa-facebook"></a></li>
                                        <li><a href="#" class="fa fa-linkedin"></a></li>
                                        <li><a href="#" class="fa fa-dribbble"></a></li>
                                        <li><a href="#" class="fa fa-google-plus"></a></li>
                                    </ul>
                                    <span>Teri Belle</span>
                                </div>
                            </div>
                        </div> <!-- /.staff-member -->
                    </div> <!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="staff-member">
                            <img src="images/team/staff3.jpg" alt="">
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <ul class="social-network">
                                        <li><a href="#" class="fa fa-facebook"></a></li>
                                        <li><a href="#" class="fa fa-linkedin"></a></li>
                                        <li><a href="#" class="fa fa-dribbble"></a></li>
                                        <li><a href="#" class="fa fa-google-plus"></a></li>
                                    </ul>
                                    <span>Tawana Cherry</span>
                                </div>
                            </div>
                        </div> <!-- /.staff-member -->
                    </div> <!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="staff-member">
                            <img src="images/team/staff1.jpg" alt="">
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <ul class="social-network">
                                        <li><a href="#" class="fa fa-facebook"></a></li>
                                        <li><a href="#" class="fa fa-linkedin"></a></li>
                                        <li><a href="#" class="fa fa-dribbble"></a></li>
                                        <li><a href="#" class="fa fa-google-plus"></a></li>
                                    </ul>
                                    <span>Christina Welldone</span>
                                </div>
                            </div>
                        </div> <!-- /.staff-member -->
                    </div> <!-- /.col-md-3 -->
                </div> <!-- /.our-staff -->
            </div> <!-- /.inner-content -->
        </div> <!-- /.content-wrapper -->
@endsection
