@extends('layouts.frontend')

@section('title')
    Login
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="inner-container container">
            <div class="row">
                <div class="section-header col-md-12">
                    <h2>Login Page</h2>
                </div> <!-- /.section-header -->
            </div> <!-- /.row -->
            <div class="contact-form">
                <div class="box-content col-md-12">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="contact-form-inner">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
            
                                    <p>
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        
                                        
                                    </p>
            
                                    <p>
                                        <label for="password">Password</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    </p>

                                    <p>
                                        <label></label>
                                        <span class="label label1" for="remember">
                                            Remember Me
                                        </span>
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>        
                                    </p>
                                    
                                    <p>
                                        @error('email')
                                            <label></label>
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </p>

                                    <p>
                                        @error('password')
                                            <label></label>
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </p>

                                    <input class="mainBtn" type="submit" id="submit" value="Login" />
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            &nbsp;{{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </form>
                            </div> <!-- /.contact-form-inner -->
                        </div> <!-- /.col-md-7 -->
                    </div> <!-- /.row -->
                </div> <!-- /.box-content -->
            </div> <!-- /.contact-form -->
        </div> <!-- /.inner-content -->
    </div> <!-- /.content-wrapper -->
@endsection