<!-- LOGIN PAGE -->
@extends('layouts.app')
@section('title', 'Login')
@vite(['resources/css/auth/login.css'])
@section('content')

    <div id="login-container">

        <h1 id="login-title">Login</h1>

        <form action="{{ route('login') }}" method="POST" id="login-form">
            @csrf

            <div class="form-group">
                <label>Email</label>
                <input class="login-email" type="email" name="email">
                @error('email')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label>Password</label>
                <input class="login-pw" type="password" name="password">
                @error('password')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <button id="login-button">Login</button>

        </form>

        <p class="auth-switch">
            Don't have an account?
            <a href="{{ route('register') }}">Register</a>
        </p>
    </div>

@endsection
