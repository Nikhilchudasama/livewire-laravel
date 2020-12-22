@props([
'type' => 'checkbox',
'label' => '',
'name' => '',
'value' => '',
'checked' => false,
])

<div class="flex flex-col">
    <label class="flex items-center">
        <input {!! $attributes !!}
               type="checkbox"
               value="{{ $value }}"
               name="{{ $name }}"
               @if($checked)
               checked="checked"
                @endif
        />

        <span class="ml-2">{{ $label }}</span>
    </label>

    <x-forms.form-errors :name="$name" />
</div>
