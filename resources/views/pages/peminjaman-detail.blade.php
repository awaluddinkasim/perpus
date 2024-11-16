<x-layout title="Detail Peminjaman">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="m-2 card-title">Detail Peminjam</h5>
                </div>
                <div class="card-body">
                    <h5>Nomor Induk Siswa</h5>
                    <p>{{ $peminjaman->anggota->nis }}</p>
                    <h5>Nama Siswa</h5>
                    <p>{{ $peminjaman->anggota->nama }}</p>
                    <h5>Kelas</h5>
                    <p>{{ $peminjaman->anggota->kelas }}</p>
                    <h5>Alamat</h5>
                    <p>{{ $peminjaman->anggota->alamat }}</p>
                    <h5>No HP</h5>
                    <p>{{ $peminjaman->anggota->no_hp }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="m-0 card-title">Detail Buku</h5>
                        @if (!$peminjaman->tanggal_kembali)
                            <x-form.modal label="Kembalikan" id="kembalikan-buku" title="Kembalikan Buku"
                                action="{{ route('peminjaman.update', $peminjaman->id) }}" method="put"
                                :use_margin="false">
                                <x-form.input label="Tanggal Kembali" type="date" name="tanggal_kembali"
                                    :required="true" />
                                <x-form.textarea label="Keterangan"
                                    name="keterangan">{{ $peminjaman->keterangan }}</x-form.textarea>
                            </x-form.modal>
                        @else
                            <button type="button" class="btn btn-primary waves-effect waves-light" disabled>
                                Sudah Kembali
                            </button>
                        @endif
                    </div>
                </div>
                <div class="card-body">
                    <h5>ISBN Buku</h5>
                    <p>{{ $peminjaman->buku->isbn }}</p>
                    <h5>Judul Buku</h5>
                    <p>{{ $peminjaman->buku->judul }}</p>
                    <h5>Kategori</h5>
                    <p>{{ $peminjaman->buku->kategori->nama }}</p>
                    <h5>Penerbit</h5>
                    <p>{{ $peminjaman->buku->penerbit->nama }}</p>
                    <h5>Tahun Terbit</h5>
                    <p>{{ $peminjaman->buku->tahun_terbit }}</p>
                    <h5>Tanggal Pinjam</h5>
                    <p>{{ Carbon\Carbon::parse($peminjaman->tanggal_pinjam)->isoFormat('DD MMMM YYYY') }}</p>
                    @if ($peminjaman->tanggal_kembali)
                        <h5>Tanggal Kembali</h5>
                        <p>{{ Carbon\Carbon::parse($peminjaman->tanggal_kembali)->isoFormat('DD MMMM YYYY') }}</p>
                    @endif
                    <h5>Keterangan</h5>
                    <p>{{ $peminjaman->keterangan ?? '-' }}</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>
