@extends('layouts.app')

@section('content')
    <div>
        <div class="flex justify-center items-center bg-gray-200 px-6 mt-48">
            <div class="p-6 max-w-sm w-full bg-white shadow-md rounded-md">
                <div class="flex justify-center items-center">
                    <span class="text-gray-700 font-semibold text-2xl">{{ __('Confirm Password') }}</span>
                </div>
                {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <label class="block">
                            <span class="text-gray-700 text-sm">{{ __('Password') }}</span>
                            <input id="password"
                                   type="password"
                                   class="form-input mt-1 block w-full rounded-md focus:border-indigo-600 @error('password') is-invalid @enderror"
                                   name="password"
                                   required autocomplete="current-password">

                            @error('password')
                            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                            {{ $message }}
                        </span>
                            @enderror
                        </label>

                        <div class="flex justify-end items-end mt-4">
                            @if (Route::has('password.request'))
                                <div>
                                    <a class="block text-sm fontme text-indigo-700 hover:underline"
                                       href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                </div>
                            @endif
                        </div>

                        <div class="mt-6">
                            <button
                                type="submit"
                                class="py-2 px-4 text-center bg-indigo-600 rounded-md w-full text-white text-sm hover:bg-indigo-500">
                                {{ __('Confirm Password') }}
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
