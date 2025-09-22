@props([
    'name',
    'type' => 'text'
])

@php
if ($errors->has($name))
{
    $attributes = $attributes->merge([
        'class' => 'is-invalid'
    ]);
}
@endphp

<input name="{{ $name }}" {{ $attributes->merge(['class' => 'form-control']) }} />  