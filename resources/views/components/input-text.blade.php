@props([
    'name' => null,
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

<input type="{{ $type }}" name="{{ $name }}" {{ $attributes->merge(['class' => 'form-control']) }} />  