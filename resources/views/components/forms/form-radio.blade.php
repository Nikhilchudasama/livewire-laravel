@props([
'label' => '',
'name' => '',
'value' => '',
'checked' => false,
])

<div>
    <label class="inline-flex items-center">
        <input {!! $attributes !!}
                type="radio"
                name="{{ $name }}"
                value="{{ $value }}"
                @if($checked)
                checked="checked"
                @endif
        />

        <span class="ml-2">{{ $label }}</span>
    </label>

    <x-form-errors :name="$name"/>
</div>
