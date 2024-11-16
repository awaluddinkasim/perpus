@props(['label', 'type' => 'text', 'name', 'value' => null, 'required' => false])

<div class="form-group">
    <label for="{{ $name }}Input">{{ $label }}</label>
    <input type="{{ $type }}" class="form-control" name="{{ $name }}" id="{{ $name }}Input"
        value="{{ $value }}" {{ $attributes }} @if ($required) required @endif>
</div>
