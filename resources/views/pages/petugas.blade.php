<x-layout title="Petugas">
    <div class="card">
        <div class="card-body">
            <x-form.modal label="Tambah" id="tambah-petugas" title="Tambah Petugas" action="{{ route('petugas.store') }}">
                <x-component.errors />

                <x-form.input label="Nama" name="nama" :required="true" />
                <x-form.input label="Username" name="username" :required="true" />
                <x-form.input label="Password" type="password" name="password" :required="true" />
            </x-form.modal>

            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    {!! Session::get('success') !!}
                </div>
            @endif

            <x-component.datatable id="petugas">
                <x-slot:head>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th></th>
                </x-slot:head>
                <x-slot:body>
                    @foreach ($daftarPetugas as $petugas)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $petugas->nama }}</td>
                            <td>{{ $petugas->username }}</td>
                            <td class="text-center">
                                <a href="{{ route('petugas.edit', $petugas->id) }}" class="btn btn-info btn-sm">Edit</a>
                                <form action="{{ route('petugas.destroy', $petugas->id) }}" class="d-inline"
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
