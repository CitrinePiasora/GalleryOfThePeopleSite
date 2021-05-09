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
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf

                                    <p>
                                        <label for="email">{{ __('E-Mail Address') }}</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    </p>
                                    
                                    @error('email')
                                        <label></label>
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <input class="mainBtn" type="submit" id="submit" value="Send Password Reset Link" />
                                </form>
                            </div> <!-- /.contact-form-inner -->
                        </div> <!-- /.col-md-7 -->
                    </div> <!-- /.row -->
                </div> <!-- /.box-content -->
            </div> <!-- /.contact-form -->
        </div> <!-- /.inner-content -->
    </div> <!-- /.content-wrapper -->
@endsection
