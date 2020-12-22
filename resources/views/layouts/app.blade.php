<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body>
<div class="bg-gray-200 h-screen">

        <header x-data="{ isOpen: false }" class="bg-white shadow">
            <nav id="header" class="w-full z-30 py-1 bg-white shadow-lg border-b border-blue-400 px-10">
                <div class="flex flex-col md:flex-row md:justify-between md:items-center">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <a class="text-gray-800 text-xl font-bold md:text-2xl hover:text-gray-700"
                               href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>

                            <!-- Search input on desktop screen -->
                            <div class="mx-10 hidden md:block">
                                <input type="text"
                                       class="w-32 lg:w-64 px-4 py-3 leading-tight text-sm text-gray-700 bg-gray-100 rounded-md placeholder-gray-500 border border-transparent focus:outline-none focus:bg-white focus:shadow-outline focus:border-blue-400"
                                       placeholder="Search" aria-label="Search">
                            </div>
                        </div>

                        <!-- Mobile menu button -->
                        <div class="flex md:hidden">
                            <button @click="isOpen = !isOpen" type="button"
                                    class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600"
                                    aria-label="toggle menu">
                                <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                                    <path fill-rule="evenodd"
                                          d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                    <div class="md:flex items-center" :class="isOpen ? 'block' : 'hidden'">
                        <div class="flex flex-col mt-2 md:flex-row md:mt-0 md:mx-1">
                            <a class="my-1 text-sm text-gray-700 leading-5 hover:text-blue-600 hover:underline md:mx-4 md:my-0"
                               href="#">Home</a>
                            <a class="my-1 text-sm text-gray-700 leading-5 hover:text-blue-600 hover:underline md:mx-4 md:my-0"
                               href="#">Blog</a>
                            <a class="my-1 text-sm text-gray-700 leading-5 hover:text-blue-600 hover:underline md:mx-4 md:my-0"
                               href="#">Compoents</a>
                            <a class="my-1 text-sm text-gray-700 leading-5 hover:text-blue-600 hover:underline md:mx-4 md:my-0"
                               href="#">Courses</a>
                        </div>

                        <div class="flex items-center py-2 -mx-1 md:mx-0">
                            @guest
                                @if (Route::has('login'))
                                    <a class="block w-1/2 px-3 py-2 mx-1 rounded text-center text-sm bg-gray-500 font-medium text-white leading-5 hover:bg-blue-600 md:mx-2 md:w-auto"
                                       href="{{ route('login') }}">{{ __('Login') }}</a>
                                @endif
                                @if (Route::has('register'))
                                    <a class="block w-1/2 px-3 py-2 mx-1 rounded text-center text-sm bg-blue-500 font-medium text-white leading-5 hover:bg-blue-600 md:mx-0 md:w-auto"
                                       href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            @else
                                <div x-data="{ dropdownOpen: false }" class="relative">
                                    <button @click="dropdownOpen = ! dropdownOpen"
                                            class="relative block h-8 w-8 rounded-full overflow-hidden shadow focus:outline-none">
                                        {{ Auth::user()->name }}
                                        {{--                                        <img class="h-full w-full object-cover" src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=296&q=80" alt="Your avatar">--}}
                                    </button>

                                    <div x-show="dropdownOpen" @click="dropdownOpen = false"
                                         class="fixed inset-0 h-full w-full z-10"></div>

                                    <div x-show="dropdownOpen"
                                         class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl z-10">
                                        <a href="#"
                                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Profile</a>
                                        <a href="#"
                                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Products</a>
                                        <a href="{{ route('logout') }}"
                                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            @endguest
                        </div>

                        <!-- Search input on mobile screen -->
                        <div class="mt-3 md:hidden">
                            <input type="text"
                                   class="w-full px-4 py-3 leading-tight text-sm text-gray-700 bg-gray-100 rounded-md placeholder-gray-500 focus:outline-none focus:bg-white focus:shadow-outline"
                                   placeholder="Search" aria-label="Search">
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <main class="py-4">
            @yield('content')
        </main>
</div>
<!-- Scripts -->

<script src="{{ asset('js/manifest.js') }}"></script>
<script src="{{ asset('js/vendor.js') }}"></script>

<script src="{{ asset('js/app.js') }}" defer></script>
@livewireScripts

</body>
</html>
