@extends('backend.layouts.app')

@section('content')
    <div class="block">
        <div class="p-6 w-full bg-white shadow-md rounded-md">
            <div class="block">
                <span class="text-gray-700 font-semibold text-2xl">{{ __('User') }}</span>
                <a
                    href="{{ route('admin.auth.user.index') }}"
                    class="flex float-right px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-indigo-500 rounded shadow ripple hover:shadow-lg hover:bg-indigo-600 focus:outline-none "
                >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                         class="h-6 w-6 mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z"/>
                    </svg>
                    Back
                </a>
            </div>


            <form class="mt-4" action="{{ route('admin.auth.user.update',['user' => $user]) }}" method="post">
                @csrf
                @method('PUT')
                @include('backend.auth.user.form')
                <div class="mt-6">
                    <button
                        type="submit"
                        class="px-6 py-2 text-center bg-indigo-600 rounded-md text-white text-sm hover:bg-indigo-500">
                        {{ __('Save') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
