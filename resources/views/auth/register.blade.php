@extends('layouts.app')

@section('content')
    <div>
        <div class="flex justify-center items-center bg-gray-200 px-6 mt-48">
            <div class="p-6 max-w-sm w-full bg-white shadow-md rounded-md">
                <div class="flex justify-center items-center">
                    <span class="text-gray-700 font-semibold text-2xl">{{ __('Register') }}</span>
                </div>
                <form class="mt-4" action="{{ route('register') }}" method="post">
                    @csrf
                    <x-forms.form-input
                        name="name"
                        type="text"
                        label="{{ __('Name') }}"
                        value="{{ old('name') }}"
                        required="true"
                        autocomplete="name"
                        autofocus>
                    </x-forms.form-input>

                    <x-forms.form-input
                        name="email"
                        type="email"
                        label="{{ __('E-Mail Address') }}"
                        value="{{ old('email') }}"
                        required="true"
                        autocomplete="email"
                        autofocus>
                    </x-forms.form-input>

                    <x-forms.form-input
                        name="password"
                        type="password"
                        label="{{ __('Password') }}"
                        required="true"
                        autocomplete="new-password"
                        autofocus>
                    </x-forms.form-input>


                    <x-forms.form-input
                        name="password_confirmation"
                        type="password"
                        label="{{ __('Confirm Password') }}"
                        required="true"
                        autocomplete="new-password"
                        autofocus>
                    </x-forms.form-input>

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
