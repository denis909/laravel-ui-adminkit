@php
    use Illuminate\View\ComponentAttributeBag;
@endphp

@props([
    'label' => null,
    'labelAttributes' => new ComponentAttributeBag($labelAttributes ?? []),
    'error' => null,
    'errorAttributes' => new ComponentAttributeBag($errorAttributes ?? []),
])

<div class="mb-3">
    <x-form-label :attributes="$labelAttributes">{{ $label }}</x-form-label>
    {{ $slot }}
    <x-form-error :attributes="$errorAttributes">{{ $error }}</x-form-error>
</div>