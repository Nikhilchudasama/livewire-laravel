@props([
'label' => '',
'inline' => 'false',
'slot' => '',
])

<div {!! $attributes->merge(['class' => 'mt-4']) !!}>
    <x-form-label :label="$label" />

    <div class="@if($label) mt-2 @endif @if($inline) flex flex-wrap space-x-6 @endif">
        {!! $slot !!}
    </div>
</div>
