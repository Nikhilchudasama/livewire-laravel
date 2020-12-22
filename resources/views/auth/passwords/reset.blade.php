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

                    <x-forms.form-input
                        name="email"
                        type="email"
                        value="{{ $email ?? old('email') }}"
                        label="{{ __('E-Mail Address') }}"
                        required="true"
                        autocomplete="email"
                        autofocus>
                    </x-forms.form-input>

                    <x-forms.form-input
                        name="password"
                        type="password"
                        label="{{ __('Password') }}"
                        required="true"
                        autocomplete="new-password">
                    </x-forms.form-input>

                    <x-forms.form-input
                        name="password_confirmation"
                        type="password"
                        label="{{ __('Confirm Password') }}"
                        required="true"
                        autocomplete="new-password">
                    </x-forms.form-input>

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
