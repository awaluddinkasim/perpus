<x-layout title="Manajemen Buku">
    <div class="card">
        <div class="card-body">
            <x-form.modal label="Tambah" id="tambah-buku" title="Tambah Buku" action="{{ route('buku.store') }}">
                <x-component.errors />

                <x-form.input label="ISBN" name="isbn" :required="true" />
                <x-form.input label="Judul" name="judul" :required="true" />
                <x-form.input label="Penulis" name="penulis" :required="true" />
                <x-form.select label="Kategori" name="kategori_id" :required="true">
                    @foreach ($daftarKategori as $kategori)
                        <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                    @endforeach
                </x-form.select>
                <x-form.select label="Penerbit" name="penerbit_id" :required="true">
                    @foreach ($daftarPenerbit as $penerbit)
                        <option value="{{ $penerbit->id }}">{{ $penerbit->nama }}</option>
                    @endforeach
                </x-form.select>
                <x-form.input label="Tahun Terbit" name="tahun_terbit" :required="true" />
                <x-form.input label="Jumlah Halaman" name="jumlah_halaman" :required="true" />
            </x-form.modal>

            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    {!! Session::get('success') !!}
                </div>
            @endif

            <x-component.datatable id="buku">
                <x-slot:head>
                    <th>#</th>
                    <th>ISBN</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Kategori</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Jumlah Halaman</th>
                    <th></th>
                </x-slot:head>
                <x-slot:body>
                    @foreach ($daftarBuku as $buku)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $buku->isbn }}</td>
                            <td>{{ $buku->judul }}</td>
                            <td>{{ $buku->penulis }}</td>
                            <td>{{ $buku->kategori->nama }}</td>
                            <td>{{ $buku->penerbit->nama }}</td>
                            <td>{{ $buku->tahun_terbit }}</td>
                            <td>{{ $buku->jumlah_halaman }}</td>
                            <td class="text-center">
                                <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-info btn-sm">Edit</a>
                                <form action="{{ route('buku.destroy', $buku->id) }}" class="d-inline" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </x-slot:body>
            </x-component.datatable>
        </div>
    </div>
</x-layout>
