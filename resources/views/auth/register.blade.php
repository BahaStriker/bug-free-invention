@extends('layouts.master')
@section('content')

<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <div class="breadcrumb-inner">
                        <h2 class="breadcrumb__title">Register</h2>
                        <ul class="breadcrumb__list">
                            <li class="active__list-item"><a href="{{ route('home') }}">home</a></li>
                            <li>Register</li>
                        </ul>
                    </div><!-- end breadcrumb-inner -->
                    <div class="text-outline">Register</div>
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end hero-area -->
<section class="form-shared">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="contact-form-action">
                    <div class="form-heading text-center">
                        <h3 class="form__title">Create an account!</h3>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @if($errors->any())
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="danger">
                            <div class="alert alert-danger alert-dismissible alert-dismissible-2"
                                data-animation="fadeOut" role="alert">
                                {{ $error }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                        <path class="heroicon-ui"
                                            d="M16.24 14.83a1 1 0 0 1-1.41 1.41L12 13.41l-2.83 2.83a1 1 0 0 1-1.41-1.41L10.59 12 7.76 9.17a1 1 0 0 1 1.41-1.41L12 10.59l2.83-2.83a1 1 0 0 1 1.41 1.41L13.41 12l2.83 2.83z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 form-group">
                                <input class="form-control" type="text" name="name" placeholder="Full name" required>
                            </div>

                            <div class="col-lg-12 col-sm-12 form-group">
                                <input class="form-control" type="email" name="email" placeholder="Email Address"
                                    required>
                            </div>

                            <div class="col-lg-12 col-sm-12 form-group">
                                <input class="form-control" type="text" name="password" placeholder="Password" required>
                            </div>

                            <div class="col-lg-12 col-sm-12 form-group">
                                <input class="form-control" type="text" name="password_confirmation"
                                    placeholder="Confirm Password" required>
                            </div>

                            <div class="col-lg-12 col-sm-12 col-xs-12 form-group">
                                <button class="theme-btn register-btn" type="submit">Register Account</button>
                            </div>

                            <div class="col-lg-12 col-sm-12 col-xs-12 account-assist">
                                <p class="account__desc">Already have an account?<a href="{{ route('login') }}">
                                        Login</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>
@endsection
