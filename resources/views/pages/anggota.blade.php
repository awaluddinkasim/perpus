<x-layout title="Data Anggota">
    <div class="card">
        <div class="card-body">
            <x-form.modal label="Tambah" id="tambah-anggota" title="Tambah Anggota" action="{{ route('anggota.store') }}">
                <x-component.errors />

                <x-form.input label="Nomor Induk Siswa" name="nis" :required="true" />
                <x-form.input label="Nama Lengkap" name="nama" :required="true" />
                <x-form.select label="Kelas" name="kelas" :required="true">
                    <option value="X">X</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>
                </x-form.select>
                <x-form.textarea label="Alamat" name="alamat" :required="true" />
                <x-form.input label="No. HP" name="no_hp" :required="true" />
            </x-form.modal>

            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    {!! Session::get('success') !!}
                </div>
            @endif

            <x-component.datatable id="anggota">
                <x-slot:head>
                    <th>#</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                    <th>No. HP</th>
                    <th>Aksi</th>
                </x-slot:head>
                <x-slot:body>
                    @foreach ($daftarAnggota as $anggota)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $anggota->nis }}</td>
                            <td>{{ $anggota->nama }}</td>
                            <td>{{ $anggota->kelas }}</td>
                            <td>{{ $anggota->alamat }}</td>
                            <td>{{ $anggota->no_hp }}</td>
                            <td class="text-center">
                                <a href="{{ route('anggota.edit', $anggota->id) }}" class="btn btn-info btn-sm">Edit</a>
                                <form action="{{ route('anggota.destroy', $anggota->id) }}" class="d-inline"
                                    method="post">
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
