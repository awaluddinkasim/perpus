<x-layout title="Peminjaman">
    <div class="card">
        <div class="card-body">
            <x-form.modal label="Tambah" id="tambah-peminjaman" title="Tambah Peminjaman"
                action="{{ route('peminjaman.store') }}">
                <x-component.errors />

                <x-form.select-search label="Anggota" name="anggota_id" :required="true">
                    @foreach ($daftarAnggota as $anggota)
                        <option value="{{ $anggota->id }}">{{ $anggota->nis }} - {{ $anggota->nama }}</option>
                    @endforeach
                </x-form.select-search>
                <x-form.select-search label="Buku" name="buku_id" :required="true">
                    @foreach ($daftarBuku as $buku)
                        <option value="{{ $buku->id }}">{{ $buku->judul }}</option>
                    @endforeach
                </x-form.select-search>
                <x-form.input label="Tanggal Pinjam" type="date" name="tanggal_pinjam" :required="true" />
                <x-form.textarea label="Keterangan" name="keterangan"></x-form.textarea>
            </x-form.modal>

            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    {!! Session::get('success') !!}
                </div>
            @endif

            <x-component.datatable id="peminjaman">
                <x-slot:head>
                    <th>#</th>
                    <th>Buku</th>
                    <th>Peminjam</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                    <th>Petugas</th>
                    <th></th>
                </x-slot:head>
                <x-slot:body>
                    @foreach ($daftarPeminjaman as $peminjaman)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $peminjaman->buku->judul }}</td>
                            <td>{{ $peminjaman->anggota->nama }}</td>
                            <td>{{ Carbon\Carbon::parse($peminjaman->tanggal_pinjam)->isoFormat('DD MMMM YYYY') }}</td>
                            <td>
                                {{ $peminjaman->tanggal_kembali ? Carbon\Carbon::parse($peminjaman->tanggal_kembali)->isoFormat('DD MMMM YYYY') : '-' }}
                            </td>
                            <td>
                                {{ $peminjaman->status }}
                            </td>
                            <td>{{ $peminjaman->petugas }}</td>
                            <td class="text-center">
                                <a href="{{ route('peminjaman.show', $peminjaman->id) }}"
                                    class="btn btn-info btn-sm">Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </x-slot:body>
            </x-component.datatable>
        </div>
    </div>
</x-layout>
