@props([
    'label' => '',
    'name' => '',
    'value' => '',
])
<div class="mt-4">
    <label class="block">
        <x-form-label :label="$label" />

        <textarea
            name="{{ $name }}"

            {!! $attributes->merge(['class' => 'block w-full ' . ($label ? 'mt-1' : '')]) !!}
        >
        {!! $value !!}
        </textarea>
    </label>

    <x-form-errors :name="$name" />
</div>
