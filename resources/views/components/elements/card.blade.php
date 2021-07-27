<div class="card border border-dark rounded shadow-sm">
    {{ $slot ?? '' }}
    @if(isset($body))
        <a href="{!! $link ?? '' !!}">
            <div class="card-body">
                {!! $body ?? '' !!}
            </div>
        </a>
    @endif
    @if(isset($footer))
        <div class="card-footer">
            {!! $footer ?? '' !!}
        </div>
    @endif
</div>