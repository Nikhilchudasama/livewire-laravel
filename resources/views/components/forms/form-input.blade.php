@props([
    'type' => 'hidden',
    'label' => '',
    'name' => '',
    'value' => '',
    'error_class' => 'focus:border-indigo-600'
])
@error('name')
    @php
      $error_class = 'border-red-400';
    @endphp
@enderror

<div class="@if($type === 'hidden') hidden @else mt-4 @endif">
    <label class="block">
        <x-forms.form-label :label="$label" />

        <input {!! $attributes->merge([
            'class' => 'block w-full rounded-md form-input ' . ($label ? 'mt-1' : '').' '.$error_class
        ]) !!}
               name="{{ $name }}"
               value="{{ $value }}"

               type="{{ $type }}" />
    </label>

    <x-forms.form-errors :name="$name" />
</div>
