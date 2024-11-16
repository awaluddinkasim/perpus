@props(['label', 'name', 'rows' => 3, 'required' => false])

<div class="form-group">
    <label for="{{ $name }}Input">{{ $label }}</label>
    <textarea class="form-control" name="{{ $name }}" id="{{ $name }}Input" {{ $attributes }}
        rows="{{ $rows }}" @if ($required) required @endif>{{ $slot }}</textarea>
</div>
