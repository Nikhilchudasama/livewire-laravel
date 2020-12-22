@extends('layouts.app')

@section('content')
    <div>
        <div class="flex justify-center items-center bg-gray-200 px-6 mt-48">
            <div class="p-6 max-w-sm w-full bg-white shadow-md rounded-md">
                <div class="flex justify-center items-center">
                    <span class="text-gray-700 font-semibold text-2xl">{{ __('Reset Password') }}</span>
                </div>

                @if (session('status'))
                    <x-alerts type="success">
                        {{ session('status') }}
                    </x-alerts>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <x-forms.form-input
                        name="email"
                        type="email"
                        label="{{ __('E-Mail Address') }}"
                        value="{{ old('email') }}"
                        required="true"
                        autocomplete="email"
                        autofocus>
                    </x-forms.form-input>

                    <div class="mt-6">
                        <button
                            type="submit"
                            class="py-2 px-4 text-center bg-indigo-600 rounded-md w-full text-white text-sm hover:bg-indigo-500">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
