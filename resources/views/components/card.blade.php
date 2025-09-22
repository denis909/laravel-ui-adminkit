<div class="card">
    @if($header ?? null)
        <div class="card-header">
            {{--
            <h5 class="card-title mb-0">Empty card</h5>
            --}}
            {{ $header }}
        </div>
    @endif
    <div class="card-body">
        {{ $slot }}
    </div>
</div>