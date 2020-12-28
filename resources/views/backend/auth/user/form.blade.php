<x-forms.form-input
    name="name"
    type="text"
    label="{{ __('Name') }}"
    value="{{ old('name', $user->name) }}"
    required="true">
</x-forms.form-input>

@if(!$user->id)

<x-forms.form-input
    name="email"
    type="email"
    label="{{ __('E-Mail Address') }}"
    value="{{ old('email') }}"
    required="true">
</x-forms.form-input>

<x-forms.form-input
    name="password"
    type="password"
    label="{{ __('Password') }}"
    required="true"
    autocomplete="new-password">
</x-forms.form-input>

<x-forms.form-input
    name="password_confirmation"
    type="password"
    label="{{ __('Confirm Password') }}"
    required="true"
    autocomplete="new-password">
</x-forms.form-input>

@endif

