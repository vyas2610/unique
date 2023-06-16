@extends('layouts.app')

@section('title', 'Login | ' . $site->title)

@section('content')
<!-- Content -->

<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Register -->
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-2">Welcome to {{ $site->title }}! 👋</h4>
                    <p class="mb-4">Please sign-in to your account.</p>

                    <x-alert />

                    <!-- <form id="formAuthentication" class="mb-3" action="index.html" method="POST"> -->
                    {{ Form::open(['url' => route('login')]) }}
                    <div class="mb-3">
                        {{ Form::label('login', 'Username', ['class' => 'form-label']) }}
                        {{ Form::text('login', null, ['class' => 'form-control', 'placeholder' => 'Enter your username', 'autofocus' => true]) }}
                    </div>
                    <div class="mb-3 form-password-toggle">
                        <div class="d-flex justify-content-between">
                            {{ Form::label('password', 'Password', ['class' => 'form-label']) }}
                            <!-- <a href="auth-forgot-password-basic.html">
                      <small>Forgot Password?</small>
                    </a> -->
                        </div>
                        <div class="input-group input-group-merge">
                            {{ Form::password('password', ['class' => 'form-control', 'placeholder' => '&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;']) }}
                            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" name="rememberMe" type="checkbox" id="remember-me" value="1" />
                            <label class="form-check-label" for="remember-me"> Remember Me </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
            <!-- /Register -->
        </div>
    </div>
</div>

<!-- / Content -->
@endsection