@php
    $label ??= null;
    $type ??= 'text';
    $class ??= null;
    $name ??= '';
    $value ??= '';
@endphp
<div @class(['form-group',$class])>
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="{{ $type }}" >
</div>