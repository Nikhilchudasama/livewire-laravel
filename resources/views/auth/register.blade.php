@extends('layouts.app')

@section('content')
    <div>
        <div class="flex justify-center items-center bg-gray-200 px-6 mt-48">
            <div class="p-6 max-w-sm w-full bg-white shadow-md rounded-md">
                <div class="flex justify-center items-center">
                    <span class="text-gray-700 font-semibold text-2xl">{{ __('Register') }}</span>
                </div>
                <form class="mt-4" action="{{ route('register') }}" method="post">

                    <label class="block">
                        <span class="text-gray-700 text-sm">{{ __('Name') }}</span>
                        <input type="text"
                               name="name"
                               value="{{ old('name') }}"
                               class="form-input mt-1 block w-full rounded-md focus:border-indigo-600 @error('name') is-invalid @enderror"
                               required autocomplete="name" autofocus>
                        @error('name')
                        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                        </span>
                        @enderror
                    </label>

                    <label class="block">
                        <span class="text-gray-700 text-sm">{{ __('E-Mail Address') }}</span>
                        <input type="email"
                               name="email"
                               class="form-input mt-1 block w-full rounded-md focus:border-indigo-600 @error('email') is-invalid @enderror"
                               required autocomplete="email" autofocus>
                        @error('email')
                        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                        </span>
                        @enderror
                    </label>

                    <label class="block mt-3">
                        <span class="text-gray-700 text-sm">{{ __('Password') }}</span>
                        <input type="password"
                               name="password"
                               class="form-input mt-1 block w-full rounded-md focus:border-indigo-600 @error('password') is-invalid @enderror"
                               required autocomplete="new-password">
                        @error('password')
                        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                        </span>
                        @enderror
                    </label>

                    <label class="block mt-3">
                        <span class="text-gray-700 text-sm">{{ __('Confirm Password') }}</span>
                        <input type="password"
                               name="password_confirmation"
                               class="form-input mt-1 block w-full rounded-md focus:border-indigo-600"
                               required autocomplete="new-password">
                    </label>

                    <div class="flex justify-end items-center mt-4">
                        @if (Route::has('password.request'))
                            <div>
                                <a class="block text-sm fontme text-indigo-700 hover:underline"
                                   href="{{ route('login') }}">{{ __('Login') }}</a>
                            </div>
                        @endif
                    </div>


                    <div class="mt-6">
                        <button
                            type="submit"
                            class="py-2 px-4 text-center bg-indigo-600 rounded-md w-full text-white text-sm hover:bg-indigo-500">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
