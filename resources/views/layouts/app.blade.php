<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css">
</head>
<body class="bg-gray-200">
    <div id="app">
        <div class="min-h-screen w-full flex">
            <div class="w-1/12 bg-gray-800 shadow">

                <div class="flex justify-center items-center">
                    <!-- <a href="index.html" class="block p-3 text-gray-400 font-light">Brand</a> -->
                    <img src="assets/images/logo-white.png" alt="Logo" class="img-small" title="{{ config('app.name', 'Laravel') }}">
                </div>

                <div class="border-t-2 border-gray-700">
                    <a href="{{ url('/') }}" class="block p-3 text-gray-600 active:text-purple-600 font-light hover:text-gray-400 hover:bg-gray-700"><i class="fa fa-tachometer mr-1"></i> Dashboard</a>
                </div>

            </div>
            <div class="flex-1">
                <nav class="bg-white shadow flex">
                    <div class="block flex-grow">
                        <p class="block p-3 font-light text-gray-700 hover:text-gray-500 active:text-purple-600"><i class="fa fa-tachometer mr-1"></i> Dashboard</p>
                    </div>
                    <div>
                        <div class="dropdown">
                            <a href="#" class="block p-3 font-light text-gray-700 hover:text-gray-500 active:text-purple-600 relative active:bg-gray-800 active:text-gray-600 focus:bg-gray-800 focus:text-gray-600 hover:bg-gray-800 hover:text-gray-600"><i class="fa fa-user mr-1"></i>{{ Auth::user()->name }} <i class="fa fa-chevron-down ml-1"></i></a>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="block p-3 font-light text-gray-700 hover:text-gray-500 active:text-purple-600 relative active:bg-gray-800 active:text-gray-600 focus:bg-gray-800 focus:text-gray-600 hover:bg-gray-800 hover:text-gray-600"><i class="fa fa-user mr-1"></i>Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <!-- <div class="dropdown-menu absolute block right-0 shadow">
                                <a href="" class="block p-3 bg-white pl-5 pr-5 text-gray-700 font-light hover:bg-gray-800 hover:text-gray-600"><i class="fa fa-user mr-2"></i>DropDown Link</a>
                            </div> -->
                        </div>

                    </div>
                </nav>
                <main class="p-3">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>
</html>
