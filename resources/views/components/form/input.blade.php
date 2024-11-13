@props(['label', 'type', 'name', 'required' => false])

<div class="form-group">
    <label>{{ $label }}</label>
    <input type="{{ $type }}" class="form-control" name="{{ $name }}" id="{{ $name }}Input"
        {{ $attributes }} @if ($required) required @endif>
</div>
