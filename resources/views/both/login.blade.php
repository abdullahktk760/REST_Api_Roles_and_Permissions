@extends('layouts/fullLayoutMaster')

@section('title', 'Login Page')

@section('page-style')
    {{-- Page Css files --}}
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/pages/authentication.css')) }}">
@endsection

@section('content')
    <div class="auth-wrapper auth-basic px-2">
        <div class="auth-inner my-2">
            <!-- Login basic -->
            <div class="card mb-0">
                <div class="card-body">
                        <h2 class="brand-text text-primary ms-1 mb-3">Roles & Permissions 👋</h2>
                        @auth
                            <p class="card-text mb-2">You are already login please go to dashboard or logout</p>
                        @else
                            <p class="card-text mb-2">Please sign-in to your account and start the adventure</p>
                        @endauth

                        @auth
                            <a href="{{ url('/dashboard') }}" class="btn btn-primary w-100" tabindex="4">Dashboard</a>
                            <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                @csrf
                                <button class="btn btn-primary w-100 mt-2">
                                    Logout
                                </button>
                            </form>
                        @else

                        <form class="auth-login-form mt-2" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-1">
                                <label for="login-email" class="form-label">Email</label>
                                <input type="email" name="email" required autofocus autocomplete="username"
                                    class="form-control" id="login" placeholder="Enter your email"
                                    aria-describedby="login-email" tabindex="1" autofocus />
                            </div>
                            <div class="mb-1">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="login-password">Password</label>
                                    <a href="{{ url('auth/forgot-password-basic') }}">
                                        <small>Forgot Password?</small>
                                    </a>
                                </div>
                                <div class="input-group input-group-merge form-password-toggle">
                                    <input id="password" type="password" name="password" required autofocus autocomplete="password"
                                        class="form-control form-control-merge" tabindex="2"
                                        placeholder="Enter your password"
                                        aria-describedby="login-password"/>
                                    <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                </div>
                                @if ($errors->has('email') || $errors->has('password'))
                                    <div class="alert alert-danger" role="alert">
                                        Given email or password is incorrect.
                                    </div>
                                @endif
                                {{-- @if ($errors->has('password'))
                                    {{ $errors->get('password') }}
                                @endif --}}
                            </div>
                            <div class="mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember-me" tabindex="3" />
                                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                                </div>
                            </div>
                            <button class="btn btn-primary w-100" tabindex="4">Sign in</button>
                        </form>

                        <p class="text-center mt-2">
                            <span>New on our platform?</span>
                            <a href="{{ url('auth/register-basic') }}">
                                <span>Create an account</span>
                            </a>
                        </p>

                        <div class="divider my-2">
                            <div class="divider-text">or</div>
                        </div>

                        <div class="auth-footer-btn d-flex justify-content-center">
                            <a href="#" class="btn btn-facebook">
                                <i data-feather="facebook"></i>
                            </a>
                            <a href="#" class="btn btn-twitter white">
                                <i data-feather="twitter"></i>
                            </a>
                            <a href="#" class="btn btn-google">
                                <i data-feather="mail"></i>
                            </a>
                            <a href="#" class="btn btn-github">
                                <i data-feather="github"></i>
                            </a>
                        </div>
                    @endauth
                </div>
            </div>
            <!-- /Login basic -->
        </div>
    </div>
@endsection

@section('vendor-script')
    <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset(mix('js/scripts/pages/auth-login.js')) }}"></script>
@endsection
