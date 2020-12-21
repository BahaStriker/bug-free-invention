@extends('layouts.master')
@section('content')
<section class="error-area text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="error-content">
                    <img src="{{ asset('assets/images/404-img.png') }}" alt="error image">
                    <h3 class="error-title">Oops! Page not found.</h3>
                    <p class="error-desc">
                        The page you are looking for might have been removed,
                        had its name changed, or is temporarily unavailable. <br>
                    </p>
                    <a href="{{ route('home') }}" class="theme-btn">
                        <i class="fa fa-angle-left"></i> back to home
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
