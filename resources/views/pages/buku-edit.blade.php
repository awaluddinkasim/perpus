<x-layout title="Edit Buku">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('buku.update', $buku->id) }}" method="post" autocomplete="off">
                @method('put')
                @csrf
                <x-component.errors />

                <x-form.input label="ISBN" name="isbn" :value="$buku->isbn" :required="true" />
                <x-form.input label="Judul" name="judul" :value="$buku->judul" :required="true" />
                <x-form.input label="Penulis" name="penulis" :value="$buku->penulis" :required="true" />
                <x-form.select label="Kategori" name="kategori_id" :required="true">
                    @foreach ($daftarKategori as $kategori)
                        <option value="{{ $kategori->id }}" {{ $buku->kategori_id == $kategori->id ? 'selected' : '' }}>
                            {{ $kategori->nama }}</option>
                    @endforeach
                </x-form.select>
                <x-form.select label="Penerbit" name="penerbit_id" :required="true">
                    @foreach ($daftarPenerbit as $penerbit)
                        <option value="{{ $penerbit->id }}" {{ $buku->penerbit_id == $penerbit->id ? 'selected' : '' }}>
                            {{ $penerbit->nama }}</option>
                    @endforeach
                </x-form.select>
                <x-form.input label="Tahun Terbit" name="tahun_terbit" :value="$buku->tahun_terbit" :required="true" />
                <x-form.input label="Jumlah Halaman" name="jumlah_halaman" :value="$buku->jumlah_halaman" :required="true" />

                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            </form>
        </div>
    </div>
</x-layout>
