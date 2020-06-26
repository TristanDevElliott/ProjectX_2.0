@extends('layouts.auth')

@section('content')
    <div class="flex justify-center items-center min-h-screen">
        <div class="w-4/12 bg-white shadow">
            <!-- Logo Start -->
            <div class="brand p-6 shadow bg-gray-300">
                <h1 class="text-4xl font-light">Project X</h1>
                <p class="font-light">Enter your correct details below to register your account today.</p>
            </div>
            <!-- Logo End -->

            <!-- All The Alerts Start -->
            @error('name')
                <div class="px-6 py-2 bg-red-500 text-white animate__animated animate__bounceInRight animate__delay-1s">
                    {{ $message }}
                </div>
            @enderror
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

            <!-- Register Form Start -->
            <div class="p-6">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="pb-3">
                        <label for="name">Username</label>
                        <input type="text" name="name" id="name" placeholder="John Doe" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 py-2 px-4 block w-full appearance-none leading-normal @error('name') is-invalid @enderror">
                    </div>
                    <div class="pb-3">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" placeholder="John@example.com" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 py-2 px-4 block w-full appearance-none leading-normal @error('email') is-invalid @enderror">
                    </div>
                    <div class="pb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 py-2 px-4 block w-full appearance-none leading-normal @error('password') is-invalid @enderror">
                    </div>
                    <div class="pb-6">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 py-2 px-4 block w-full appearance-none leading-normal">
                    </div>
                    <div class="pb-3">
                        <button class="bg-gray-700 hover:bg-gray-600 text-white py-2 px-4 w-full" type="submit">Login</button>
                    </div>
                </form>
            </div>
            <!-- Register Form End -->
        </div>
    </div>
@endsection
