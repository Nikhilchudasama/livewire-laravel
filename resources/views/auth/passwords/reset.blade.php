@extends('layouts.app')

@section('content')
    <div>
        <div class="flex justify-center items-center bg-gray-200 px-6 mt-48">
            <div class="p-6 max-w-sm w-full bg-white shadow-md rounded-md">
                <div class="flex justify-center items-center">
                    <span class="text-gray-700 font-semibold text-2xl">{{ __('Reset Password') }}</span>
                </div>

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <label class="block">
                        <span class="text-gray-700 text-sm">{{ __('E-Mail Address') }}</span>
                        <input type="email"
                               name="email"
                               value="{{ $email ?? old('email') }}"
                               class="form-input mt-1 block w-full rounded-md focus:border-indigo-600 @error('name') is-invalid @enderror"
                               required autocomplete="name" autofocus>
                        @error('email')
                        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                            {{ $message }}
                        </span>
                        @enderror
                    </label>

                    <label class="block">
                        <span class="text-gray-700 text-sm">{{ __('Password') }}</span>
                        <input id="password"
                               type="password"
                               class="form-input mt-1 block w-full rounded-md focus:border-indigo-600 @error('password') is-invalid @enderror"
                               name="password"
                               required autocomplete="new-password">

                        @error('password')
                        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                            {{ $message }}
                        </span>
                        @enderror
                    </label>

                    <label class="block">
                        <span class="text-gray-700 text-sm">{{ __('Confirm Password') }}</span>
                        <input id="password-confirm"
                               type="password"
                               class="form-input mt-1 block w-full rounded-md focus:border-indigo-600"
                               name="password_confirmation"
                               required autocomplete="new-password">

                        @error('password')
                        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                            {{ $message }}
                        </span>
                        @enderror
                    </label>
                    <div class="mt-6">
                        <button
                            class="py-2 px-4 text-center bg-indigo-600 rounded-md w-full text-white text-sm hover:bg-indigo-500">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
