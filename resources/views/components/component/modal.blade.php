<button type="button" class="mb-3 btn btn-primary waves-effect waves-light" data-toggle="modal"
    data-target="#{{ $id }}">
    {{ $label }}
</button>

<!-- sample modal content -->
<div id="{{ $id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="mt-0 modal-title" id="myModalLabel">{{ $title }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            {{ $slot }}
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
