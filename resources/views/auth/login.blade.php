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
            @error('email')
                <div class="px-6 py-2 bg-red-500 text-white animate__animated animate__bounceInRight animate__delay-1s">
                    {{ $message }}
                </div>
            @enderror

            @error('password')
                <div class="px-6 py-2 bg-red-500 text-white animate__animated animate__bounceInRight animate__delay-1s">
                    {{ $message }}
                </div>
            @enderror
            <!-- All The Alerts End -->

            <!-- Login Form Start -->
            <div class="p-6">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="pb-3">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" placeholder="John@example.com" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 py-2 px-4 block w-full appearance-none leading-normal @error('email') is-invalid @enderror" value="{{ old('email') }}">
                    </div>
                    <div class="pb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 py-2 px-4 block w-full appearance-none leading-normal @error('password') is-invalid @enderror">
                    </div>
                    <div class="pb-3">
                        <!-- Checkbox Start -->
                        <label class="md:w-2/3 block" for="remember">
                            <input class="mr-2 leading-tight" type="checkbox" name="remember" id="remember">
                            <span class="text-sm">Remember Me</span>
                        </label>
                        <!-- Checkbox End -->
                    </div>
                    <div class="pb-3">
                        <button class="bg-gray-700 hover:bg-gray-600 text-white py-2 px-4 w-full" type="submit">Login</button>
                    </div>
                    <div class="pb-3">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
            <!-- Login Form End -->
        </div>
    </div>
@endsection
