{{--

 --}}
<div class="p-0 w-100">
    {{-- LABEL --}}
    @if((isset($label)))
         <label for="{{($id ?? $id = 's'.date('ymdhis').rand(10,99) )}}">{!! $label !!}</label>
    @endif
    <div class="bootstrapselect {{ $wrapperClass ?? '' }}">
        {{-- Select --}}
        <select class="selectpicker w-100 {{ $class ?? '' }}"
                id="{{ $id ?? $id = 's'.date('ymdhis').rand(10,99) }}"
                name="{{ $name ?? $id ?? '' }}"
                {{-- data attributes --}}
                @if(isset($data))
                @if(is_array($data))
                data-group="{{ $data['group'] ?? '' }}"
                data-label="{{ $data['label'] ?? '' }}"
                data-live-search="{{ $data['live-search'] ?? 'true' }}"
                data-live-search-style="{{ $data['live-search-style'] ?? 'startsWith' }}"
                @else
                data-live-search="true"
                data-live-search-style="startsWith"
                @endif
                @else
                data-live-search="true"
                data-live-search-style="startsWith"
                @endif
                tabindex="-1" aria-hidden="true">
            {{-- Options --}}
            {!! $slot ?? '' !!}
            {{-- Generated through loop --}}
            @if(isset($options))
                @if(is_array($options))
                    @foreach($options as $opt)
                        @component('components.elements.select.option',[
                            'val' => ($opt->id ?? ''),
                            'data' => ['tokens' => ($opt->name ?? '')],
                            'selected' => ($opt->id == $selected ? true : null),
                            ])
                            {{-- option slot/label/text --}}
                            {!! $opt->name ?? '' !!}
                        @endcomponent
                    @endforeach
                @endif
            @endif
            {{-- ./Options --}}
        </select>
        {{-- ./Select --}}
    </div>
</div>