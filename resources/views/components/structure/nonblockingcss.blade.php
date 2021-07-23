@if(isset($href))
    <link rel="preload" href="{!! $href ?? '' !!}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{!! $href ?? '' !!}"></noscript>
@elseif(isset($slot))
    @if(is_array($slot))
        @foreach($slot as $asset_arr)
            @if(isset($asset_arr['href']))
                <link rel="preload" href="{!! $asset_arr['href'] ?? '' !!}" as="style" onload="this.onload=null;this.rel='stylesheet'">
                <noscript><link rel="stylesheet" href="{!! $asset_arr['href'] ?? '' !!}"></noscript>
            @endif
        @endforeach
    @else
        <link rel="preload" href="{!! $slot ?? '' !!}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="{!! $slot ?? '' !!}"></noscript>
    @endif
@endif