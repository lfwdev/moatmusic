@component('components.elements.select.bootstrapSelect',[
            'data' => [
               'group' => 'select-artist-grp',
               'label' => __('Artists'),
               'live-search' => true,
            ],
            'id' => 'select-artist',
            'name' => 'artist_id',
            'required' => true,
            'selected' => $selected ?? null,
            'options' => $artists
       ])
@endcomponent
