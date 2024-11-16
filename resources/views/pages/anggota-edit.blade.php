<x-layout title="Edit Anggota">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('anggota.update', $anggota->id) }}" method="post" autocomplete="off">
                @method('put')
                @csrf

                <x-component.errors />

                <x-form.input label="Nomor Induk Siswa" name="nis" :value="$anggota->nis" :required="true" />
                <x-form.input label="Nama Lengkap" name="nama" :value="$anggota->nama" :required="true" />
                <x-form.select label="Kelas" name="kelas" :value="$anggota->kelas" :required="true">
                    <option value="X" {{ $anggota->kelas == 'X' ? 'selected' : '' }}>X</option>
                    <option value="XI" {{ $anggota->kelas == 'XI' ? 'selected' : '' }}>XI</option>
                    <option value="XII" {{ $anggota->kelas == 'XII' ? 'selected' : '' }}>XII</option>
                </x-form.select>
                <x-form.textarea label="Alamat" name="alamat"
                    :required="true">{{ $anggota->alamat }}</x-form.textarea>
                <x-form.input label="No. HP" name="no_hp" :value="$anggota->no_hp" :required="true" />

                <button class="btn btn-primary btn-block">Simpan</button>
            </form>
        </div>
    </div>
</x-layout>
