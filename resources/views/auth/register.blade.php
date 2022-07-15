@extends('layouts.app')

@section('content')

<body class="vertical-layout vertical-menu 1-column auth-page navbar-static layout-dark blank-page" data-menu="vertical-menu" data-col="1-column">
    <div class="wrapper">
        <div class="main-panel">
            <div class="main-content">
                <div class="content-overlay"></div>
                <div class="content-wrapper">
                    <section id="login" class="auth-height">
                        <div class="row full-height-vh m-0">
                            <div class="col-12 d-flex align-items-center justify-content-center">
                                <div class="card overflow-hidden">
                                    <div class="card-content">
                                        <div class="card-body auth-img">
                                            <div class="row m-0">
                                                <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center auth-img-bg p-3">
                                                    <img src="{{asset('accueil/app-assets/img/gallery/register.png')}}" alt="" class="img-fluid" width="300" height="230">
                                                </div>
                                                <div class="col-lg-6 col-12 px-4 py-3">
                                                    <h4 class="mb-2 card-title">Login</h4>
                                                    <p>Welcome back, please login to your account.</p>
													<form method="POST" action="{{ route('register') }}">
                                                    @csrf
                                                       
														<input id="name" type="text" class="form-control mb-3" placeholder="Username" name="name" >
                                                        <input id="email" type="email" class="form-control mb-3" placeholder="Email" name="email" >
														<input id="password" type="password" class="form-control mb-2" type="password" placeholder="Password">
                                                        <input type="password-confirm" type="password" class="form-control mb-2" placeholder="Password" name="password_confirmation">

														<div class="d-sm-flex justify-content-between mb-3 font-small-2">
															<div class="remember-me mb-2 mb-sm-0">
																<div class="checkbox auth-checkbox">
																	<input type="checkbox" id="auth-ligin">
																	<label for="auth-ligin"><span>Remember Me</span></label>
																</div>
															</div>
															<a href="auth-forgot-password.html">Forgot Password?</a>
														</div>
														<div class="d-flex justify-content-between flex-sm-row flex-column">
															<button type="submit" class="btn bg-light-primary mb-2 mb-sm-0">Register</button>
<!-- 															<input type="submit" value="Log In"class="btn btn-primary" >
 -->
														</div>
														<hr>
														<div class="d-flex justify-content-between align-items-center">
															<h6 class="text-primary m-0">Or Login With</h6>
															<div class="login-options">
																<a class="btn btn-sm btn-social-icon btn-facebook mr-1"><span class="fa fa-facebook"></span></a>
																<a class="btn btn-sm btn-social-icon btn-twitter mr-1"><span class="fa fa-twitter"></span></a>
															</div>
														</div>
													</form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div> 


<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
