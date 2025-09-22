@foreach($errors->all() as $key => $err)
    <x-alert-error>{{ $err }}</x-alert-error>
@endforeach