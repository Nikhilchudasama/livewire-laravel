@extends('layouts.app')

@section('content')
    <div>
        <div class="flex justify-center items-center bg-gray-200 px-6 mt-48">
            <div class="p-6 max-w-sm w-full bg-white shadow-md rounded-md">
                <div class="flex justify-center items-center">
                    <span class="text-gray-700 font-semibold text-2xl">{{ __('Verify Your Email Address') }}</span>
                </div>

                <div class="card-body">
                    @if (session('resent'))
                        <x-alerts type="success">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </x-alerts>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form  method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <div class="mt-6">
                            <button
                                type="submit"
                                class="py-2 px-4 text-center bg-indigo-600 rounded-md w-full text-white text-sm hover:bg-indigo-500">
                                {{ __('click here to request another') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
