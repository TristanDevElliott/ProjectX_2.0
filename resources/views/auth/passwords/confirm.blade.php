@extends('layouts.auth')

@section('content')

    <div class="flex justify-center items-center min-h-screen">
        <div class="w-4/12 bg-white shadow">
            <!-- Logo Start -->
            <div class="brand p-6 shadow bg-gray-300">
                <h1 class="text-4xl font-light">Project X</h1>
                <p class="font-light">Enter your predefind credentials below to login to your account.</p>
            </div>
            <!-- Logo End -->

            <!-- All The Alerts Start -->
            <div class="px-6 py-2 bg-red-500 text-white animate__animated animate__bounceInRight animate__delay-1s">
                This is an error message.
            </div>
            <!-- All The Alerts End -->

            <!-- Login Form Start -->
            <div class="p-6">
                <form action="">
                    <div class="pb-3">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" placeholder="John@example.com" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 py-2 px-4 block w-full appearance-none leading-normal">
                    </div>
                    <div class="pb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 py-2 px-4 block w-full appearance-none leading-normal">
                    </div>
                    <div class="pb-3">
                        <button class="bg-gray-700 hover:bg-gray-600 text-white py-2 px-4 w-full" type="submit">Login</button>
                    </div>
                </form>
            </div>
            <!-- Login Form End -->
        </div>
    </div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirm Password') }}</div>

                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
