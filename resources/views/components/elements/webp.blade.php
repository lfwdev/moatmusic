{{--
@include('m.webp',
['webp' => '',
'or' => '',
'class' => '',
'style' => '',
'w' => '',
'h' => '',
'alt' => '',
'aria' => ''])
--}}
<picture>
    @if(isset($webp))
        <source srcset="{{ $webp ?? '' }}" type="image/webp"
                style="{{{ isset($w) ? 'width:'.$w.';' : '100%' }}} {{{ isset($w) ? 'height:'.$w.';' : 'auto' }}} {{ $style ?? '' }}">
    @endif
    @if(isset($or))
        <img role="img" src="{{ $or ?? '' }}"
             class="{{ $class ?? '' }}"
             alt="{{ $alt ?? ($aria ?? '') }}"
             width="{{ $w ?? '100%' }}"
             height="{{ $h ?? 'auto' }}"
             style="{{ $style ?? '' }}"
             aria-label="{{ $aria ?? ($alt ?? '') }}">
    @endif
</picture>