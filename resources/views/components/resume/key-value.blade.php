@props(['key' => '', 'value' => '', 'style' => 'column'])

<dl class="key-value type-{{ $key }} {{$style}}">
    <dt>{{ $key }}</dt>
    <dd>{!! $value !!}</dd>
</dl>
