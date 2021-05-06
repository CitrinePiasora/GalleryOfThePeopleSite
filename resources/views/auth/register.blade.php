@extends('layouts.frontend')

@section('title')
    Login
@endsection

@section('content')
        <div class="content-wrapper">
            <div class="inner-container container">
                <div class="row">
                    <div class="section-header col-md-12">
                        <h2>Registration Page</h2>
                    </div> <!-- /.section-header -->
                </div> <!-- /.row -->
                <div class="contact-form">
                    <div class="box-content col-md-12">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="contact-form-inner">
                                    <form method="POST" action="{{route('register')}}">
                                        @csrf
                                        <p>
                                            <label for="name">Name:</label>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        </p>
                                        
                                        <p>
                                            <label for="email">Email:</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        </p>

										<p>
                                            <label for="password">Password:</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        </p>

                                        <p>
                                            <label for="password-confirm">Confirm Password:</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </p>

                                        @error('name')
                                            <label></label>
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        @error('email')
                                            <label></label>
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        @error('password')
                                            <label></label>
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <input type="submit" class="mainBtn" id="submit" value="Register" />
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