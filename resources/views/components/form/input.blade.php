@props(['label', 'type' => 'text', 'name', 'required' => false])

<div class="form-group">
    <label for="{{ $name }}Input">{{ $label }}</label>
    <input type="{{ $type }}" class="form-control" name="{{ $name }}" id="{{ $name }}Input"
        {{ $attributes }} @if ($required) required @endif>
</div>
