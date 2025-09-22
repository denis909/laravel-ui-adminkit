@if ($message = session('status'))
    <x-alert-success message="{{ $message }}" />
@endif

@if ($message = Session::get('success'))
    <x-alert-success message="{{ $message }}" />
@endif

@if ($message = Session::get('error'))
    <x-alert-error message="{{ $message }}" />
@endif