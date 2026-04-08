@extends('admin.layouts.app')

@section('content')
<div class="card">
    @hasSection('card-header')
        <div class="card-header">
            {{--
            <h5 class="card-title mb-0">Empty card</h5>
            --}}
            @yield('card-header')
        </div>
    @endif
    <div class="card-body">
        @yield('card-body')
    </div>
</div>
@endsection