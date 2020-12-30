@props([
    'dropdown' => false,
    'submenu' => [],
    'url' => ''
])
@php
   $active_deactive = active_class(Active::checkUriPattern($url), 'bg-gray-700 bg-opacity-75 text-gray-100 transform hover:translate-x-2', 'text-gray-400 hover:bg-gray-700 hover:bg-opacity-75 hover:text-gray-100 transform hover:translate-x-2');
   $active = active_class(Active::checkUriPattern($url), 'true', 'false');

@endphp
@if(!$dropdown)
    <a href="{{ url($url) }}"
        class="flex items-center py-3 px-6 transition-transform ease-in duration-200 {{ $active_deactive }}">
        @if(isset($icon))
            {{ $icon }}
        @else
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"/>
            </svg>
        @endif

        @if(isset($name))
            <span class="mx-3"> {{ $name }}</span>
        @else
            <span class="mx-3"> Dashboard</span>
        @endif

    </a>
@else
    <div x-data="{ open: {{$active}} }">
        <a @click="open = !open"
           class="flex justify-between items-center py-3 px-6 transition-transform ease-in duration-200 {{ $active_deactive }}">
                <span class="flex items-center">
                   @if(isset($icon))
                        {{ $icon }}
                    @else
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"/>
                        </svg>
                    @endif

                   @if(isset($name))
                       <span class="mx-3"> {{ $name }}</span>
                   @else
                       <span class="mx-3"> Dashboard</span>
                   @endif
                </span>

                <span>
                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" style="display: none;"></path>
                        <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </span>
        </a>

        <div x-show="open" class="bg-gray-800">
            @if(isset($submenu))
            {!! $submenu !!}
            @endif
        </div>
    </div>
@endif
