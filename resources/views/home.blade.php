@extends('layouts.app')

@section('content')
<div class="container mx-auto box-content">

    <div class="min-w-0 p-4 text-white bg-purple-600 rounded-lg shadow-xs">
        <h4 class="mb-4 font-semibold">
            {{ __('Dashboard') }}
        </h4>
        <p>
            {{ __('You are logged in!') }}
        </p>
    </div>
</div>
@endsection
