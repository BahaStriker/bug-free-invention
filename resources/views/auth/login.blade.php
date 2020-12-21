@extends('layouts.master')
@section('content')
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <div class="breadcrumb-inner">
                        <h2 class="breadcrumb__title">login.</h2>
                        <ul class="breadcrumb__list">
                            <li class="active__list-item"><a href="{{ route('home') }}">home</a></li>
                            <li>login</li>
                        </ul>
                    </div>
                    <div class="text-outline">login</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="form-shared">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="contact-form-action">
                    <div class="form-heading text-center">
                        <h3 class="form__title">Login to your account!</h3>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
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
                                <input class="form-control" type="email" name="email" placeholder="Email">
                            </div>

                            <div class="col-lg-12 col-sm-12 form-group">
                                <input class="form-control" type="password" name="password" placeholder="Password">
                            </div>

                            <div class="col-lg-12 col-sm-12 col-xs-12 form-condition">
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="chb1" name="remember" />
                                    <label for="chb1">Remember Me</label>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12 col-xs-12 form-group">
                                <button class="theme-btn login-btn" type="submit">Login now</button>
                            </div>

                            <div class="col-lg-12 col-sm-12 col-xs-12 account-assist">
                                <p class="account__desc">Not a member?<a href="{{ route('register') }}"> Register</a></p>
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
