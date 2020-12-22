@props([
    'label' => '',
    'name' => '',
    'value' => '',
    'multiple' => 'false',
    'options' => [],
])

<div class="mt-4">
    <label class="block">
        <x-form-label :label="$label"/>

        <select
            name="{{ $name }}"
            @if($multiple)
            multiple
            @endif

            {!! $attributes->merge([
                'class' => ($label ? 'mt-1' : '') . ' block w-full'
            ]) !!}>
            @forelse($options as $key => $option)
                <option value="{{ $key }}" @if($name == $key) selected="selected" @endif>
                    {{ $option }}
                </option>
            @empty
                {!! $slot !!}
            @endforelse
        </select>
    </label>

    <x-form-errors :name="$name"/>
</div>
