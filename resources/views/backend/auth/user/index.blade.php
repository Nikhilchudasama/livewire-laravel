@extends('backend.layouts.app')

@section('content')
    <div class="flex flex-col mt-8">

            <div class="flex justify-end mb-5">
                <a href="{{ route('admin.auth.user.create') }}"
                    class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-indigo-500 rounded shadow ripple hover:shadow-lg hover:bg-indigo-600 focus:outline-none"
                >
                    Add
                </a>
            </div>
            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div class="align-middle inline-block min-w-full overflow-hidden sm:rounded-lg border-b border-gray-200">
                    <livewire:backend.user-table></livewire:backend.user-table>
                </div>
            </div>
    </div>
@endsection
