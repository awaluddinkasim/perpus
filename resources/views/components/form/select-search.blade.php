@props(['label', 'name', 'required' => false])

@pushOnce('styles')
    <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endpushOnce

@pushOnce('scripts')
    <script src="assets/plugins/select2/select2.min.js" type="text/javascript"></script>
    <script>
        $(".select2").select2({
            width: '100%'
        });
    </script>
@endpushOnce
<div class="form-group">
    <label for="{{ $name }}Input">{{ $label }}</label>
    <select class="mb-3 select2 form-control custom-select" style="width: 100%; height:36px;" name="{{ $name }}"
        id="{{ $name }}Input" @if ($required) required @endif>
        <option value="" hidden>Pilih</option>
        {{ $slot }}
    </select>
</div>
