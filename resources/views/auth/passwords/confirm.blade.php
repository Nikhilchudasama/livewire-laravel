@extends('layouts.app')

@section('content')
    <div>
        <div class="flex justify-center items-center bg-gray-200 px-6 mt-48">
            <div class="p-6 max-w-sm w-full bg-white shadow-md rounded-md">
                <div class="flex justify-center items-center">
                    <span class="text-gray-700 font-semibold text-2xl">{{ __('Confirm Password') }}</span>
                </div>
                <x-alerts type="info">
                    {{ __('Please confirm your password before continuing.') }}
                </x-alerts>

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <x-forms.form-input
                            name="password"
                            type="password"
                            label="{{ __('Password') }}"
                            required="true"
                            autocomplete="current-password"
                        >
                        </x-forms.form-input>

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
