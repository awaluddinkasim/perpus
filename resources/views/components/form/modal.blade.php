<x-component.modal id="{{ $id }}" title="{{ $title }}" label="{{ $label }}">
    <form action="{{ $action }}" method="post" autocomplete="off">
        @csrf
        <div class="modal-body">
            {{ $slot }}
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary waves-effect waves-light">Tambah</button>
        </div>
    </form>
</x-component.modal>
