@php
    $label ??= null;
    $class ??= null;
    $name ??= '';
    $value ??= null;
@endphp
<div @class(['form-group', $class])>
    <label for="{{ $name }}">{{ $label }}</label>
    <select name="{{ $name }}" id="{{ $name }}">
        @foreach ($category as $k => $v)
            <option @selected($value==$k) value="{{ $k }}">{{ $v }}</option>
        @endforeach
    </select>
     @error($name)
    <div>
        {{ $message }}
    </div>
    @enderror
</div>