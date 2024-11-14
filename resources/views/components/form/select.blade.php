@props(['label', 'name', 'required' => false])

<div class="form-group">
    <label for="{{ $name }}Input">{{ $label }}</label>
    <select class="form-control" name="{{ $name }}" id="{{ $name }}Input"
        @if ($required) required @endif>
        <option value="" hidden>Pilih</option>
        {{ $slot }}
    </select>
</div>
