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
                        <div
                            class="bg-green-200 px-6 py-4 mx-2 my-4 rounded-md text-lg flex items-center mx-auto"
                        >
                            <svg
                                viewBox="0 0 24 24"
                                class="text-green-600 w-5 h-5 sm:w-5 sm:h-5 mr-3"
                            >
                                <path
                                    fill="currentColor"
                                    d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z"
                                ></path>
                            </svg>
                            <span class="text-green-800"> {{ __('A fresh verification link has been sent to your email address.') }} </span>
                        </div>
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
