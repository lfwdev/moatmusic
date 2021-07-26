{{-- breadcrumb.blade | usage:
    @include('m.bv4.breadcrumb', [
        'breadcrumbId' => '', // This breadcrumb's unique ID (OPTIONAL)
        'breadcrumbClass' => '', // Classes from any css file included within the head tag (OPTIONAL)
        'breadcrumbStyle' => '', // Any raw css (OPTIONAL)
        'itemList' => [ // All links as items in array (REQUIRED)
            0 => [
                'name' => '', // (REQUIRED)
                'link' => '', // (OPTIONAL)
                'class' => '', // (OPTIONAL)
                'active' => false, // BOOL (OPTIONAL)
            ],
        ]
    ])
--}}
<nav aria-label="breadcrumb">
    <ol id="{{ $breadcrumbId ?? '' }}" class="breadcrumb bg-transparent {{ $breadcrumbClass ?? '' }}" style="{{ $breadcrumbStyle ?? '' }}">
        @if(is_array($itemList))
            @foreach($itemList as $list => $item)
                @php (isset($item['active'])?:($item['active'] = false))
                <li class="breadcrumb-item {{ $item['class'] ?? '' }} {{ (!($item['active'] === true) ? '' : 'active')  }}"
                        {{ (!($item['active'] === true) ? '' : 'aria-current=page')  }}>
                   @if(isset($item['link']) && ($item['active'] !== true))
                        <a href="{{ $item['link'] ?? '' }}">
                            {{ $item['name'] ?? '' }}
                        </a>
                   @else
                        {{ $item['name'] ?? '' }}
                   @endif
                </li>
            @endforeach
        @endif
    </ol>
</nav>