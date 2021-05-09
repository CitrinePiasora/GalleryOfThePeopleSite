@extends('layouts.frontend')

@section('title')
    Password Reset
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="inner-container container">
            <div class="row">
                <div class="section-header col-md-12">
                    <h2>Reset Your Password</h2>
                </div> <!-- /.section-header -->
            </div> <!-- /.row -->
            <div class="contact-form">
                <div class="box-content col-md-12">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="contact-form-inner">
                                <form method="POST" action="{{ route('password.update') }}">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">
                                    <p>
                                        <label for="email">Email:</label>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ $email ?? old('email') }}">
                                    </p>

                                    <p>
                                        <label for="password">Password:</label>

                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </p>

                                    <p>
                                        <label for="password-confirm">Confirm Password:</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </p>

                                    <input class="mainBtn" type="submit" id="submit" value="Reset Password" />
                                </form>
                            </div> <!-- /.contact-form-inner -->
                        </div> <!-- /.col-md-7 -->
                    </div> <!-- /.row -->
                </div> <!-- /.box-content -->
            </div> <!-- /.contact-form -->
        </div> <!-- /.inner-content -->
    </div> <!-- /.content-wrapper -->
@endsection
