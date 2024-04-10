@extends('layouts.guest')

@section('page-title')
{{ __('Dashboard') }}
@endsection

@section('content')
<script src="{{ asset('assets/static/js/initTheme.js') }}"></script>
<div id="auth">

<div class="row h-100">
<div class="col-lg-5 col-12">
    <div id="auth-left">
        <div class="auth-logo">
            <a href="{{ url('/') }}"><img src="{{ asset('assets/logo.png') }}" alt="Logo"></a>
        </div>
        <h1 class="auth-title">Log in.</h1>
        <!--
            <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>
        -->

        <form method="POST" action="{{ route('login') }}">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-group position-relative has-icon-left mb-4">
                <input type="email" class="form-control form-control-xl" placeholder="Email" name="email" required autofocus>
                <div class="form-control-icon">
                    <i class="bi bi-envelope"></i>
                </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
                <input type="password" class="form-control form-control-xl" placeholder="Password" name="password" required>
                <div class="form-control-icon">
                    <i class="bi bi-shield-lock"></i>
                </div>
            </div>
            <div class="form-check form-check-lg d-flex align-items-end">
                <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault" name="remember">
                <label class="form-check-label text-gray-600" for="flexCheckDefault">
                    Keep me logged in
                </label>
            </div>
            <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
        </form>
        <div class="text-center mt-5 text-lg fs-4">
            <p class="text-gray-600">Don't have an account? <a href="{{ route('register') }}" class="font-bold">Sign up</a>.</p>
            <p><a class="font-bold" href="{{ route('password.request') }}">Forgot password?</a>.</p>
        </div>
    </div>
</div>
<div class="col-lg-7 d-none d-lg-block">
    <div id="auth-right">
    </div>
</div>
</div>

</div>

@endsection
