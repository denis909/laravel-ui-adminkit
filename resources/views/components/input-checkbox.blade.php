@props([
    'value' => null
])
<input {{ $attributes->merge([
    'type' => 'checkbox',
    'class' => 'form-check-input',
    'checked' => $value == 1,
    'value' => 1
]) }} >