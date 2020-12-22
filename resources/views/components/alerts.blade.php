@props([
    'type' => 'success'
])

@php
    $bgClass = '';
    switch ($type){
        case 'success':
            $bgClass = 'bg-green-400';
            break;
        case 'danger':
            $bgClass = 'bg-red-400';
            break;
        case 'info':
            $bgClass = 'bg-blue-400';
            break;
        case 'warning':
             $bgClass = 'bg-yellow-400';
            break;
        default:
            break;
    }
@endphp

<div x-data="{ show: true }" x-show="show"
     class="flex justify-between items-center relative text-white py-3 px-3 rounded-lg {{ $bgClass }}">
    <div>
        {!! $slot !!}
    </div>
    <div>
        <button type="button" @click="show = false">
            <span class="text-2xl">&times;</span>
        </button>
    </div>
</div>
