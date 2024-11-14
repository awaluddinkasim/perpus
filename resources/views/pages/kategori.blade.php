<x-layout title="Kategori">
    <div class="row">
        <div class="text-center col-md-6">
            <img src="{{ asset('assets/images/data.svg') }}" alt="" class="w-75">
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <x-form.modal label="Tambah" id="tambah-kategori" title="Tambah Kategori"
                        action="{{ route('kategori.store') }}">
                        <x-component.errors />

                        <x-form.input label="Kode" name="kode" :required="true" />
                        <x-form.input label="Nama" name="nama" :required="true" />
                    </x-form.modal>

                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            {!! Session::get('success') !!}
                        </div>
                    @endif

                    <x-component.table>
                        <x-slot:head>
                            <th>#</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th></th>
                        </x-slot:head>
                        <x-slot:body>
                            @forelse ($daftarKategori as $kategori)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $kategori->kode }}</td>
                                    <td>{{ $kategori->nama }}</td>
                                    <td class="text-center">
                                        <form action="{{ route('kategori.destroy', $kategori) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center text-muted">Tidak ada data</td>
                                </tr>
                            @endforelse
                        </x-slot:body>
                    </x-component.table>
                </div>
            </div>
        </div>
    </div>
</x-layout>
