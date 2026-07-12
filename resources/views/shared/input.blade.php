@php
    $label ??= null;
    $type ??= 'text';
    $class ??= null;
    $name ??= '';
    $value ??= '';
@endphp
@if ($type=='textarea')
<div @class(['form-group',$class])>
    <label for="{{ $name }}">{{ $label }}</label>
    <textarea id="{{ $name }}" type="{{ $type }}" name="{{ $name }}">{{ $value }}</textarea>
</div>
@else
<div @class(['form-group',$class])>
    <label for="{{ $name }}">{{ $label }}</label>
    <input id={{ $name }} type="{{ $type }}" value="{{ $value }}" name="{{ $name }}">
</div>
@endif
@error($name)
    <div>{{ $message }}</div>
@enderror