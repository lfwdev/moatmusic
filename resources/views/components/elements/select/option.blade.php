<option value="{{ $val ?? '' }}"
    {{ (!isset($data)?:!is_array($data)?:'data-tokens="'.($data['tokens'] ?? '').'"') }}
    {{ (!isset($selected)?:$selected !== true?:'selected') }} >

    {!!  $slot ?? '' !!}
</option>