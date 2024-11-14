<x-layout title="Dashboard">
    <div class="row">
        <div class="col-md-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="flex-row d-flex">
                        <div class="col-3 align-self-center">
                            <div class="round">
                                <i class="mdi mdi-tag-multiple"></i>
                            </div>
                        </div>
                        <div class="text-center col-9 align-self-center">
                            <div class="m-l-10 ">
                                <h5 class="mt-0 round-inner">{{ number_format($kategori) }}</h5>
                                <p class="mb-0 text-muted">Kategori</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="flex-row d-flex">
                        <div class="col-3 align-self-center">
                            <div class="round">
                                <i class="mdi mdi-domain"></i>
                            </div>
                        </div>
                        <div class="text-center col-9 align-self-center">
                            <div class="m-l-10 ">
                                <h5 class="mt-0 round-inner">{{ number_format($penerbit) }}</h5>
                                <p class="mb-0 text-muted">Penerbit</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="flex-row d-flex">
                        <div class="col-3 align-self-center">
                            <div class="round">
                                <i class="mdi mdi-book-multiple"></i>
                            </div>
                        </div>
                        <div class="text-center col-9 align-self-center">
                            <div class="m-l-10 ">
                                <h5 class="mt-0 round-inner">{{ number_format($buku) }}</h5>
                                <p class="mb-0 text-muted">Total Buku</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="flex-row d-flex">
                        <div class="col-3 align-self-center">
                            <div class="round">
                                <i class="mdi mdi-account-multiple"></i>
                            </div>
                        </div>
                        <div class="text-center col-9 align-self-center">
                            <div class="m-l-10 ">
                                <h5 class="mt-0 round-inner">{{ number_format($anggota) }}</h5>
                                <p class="mb-0 text-muted">Total Anggota</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <h4>Selamat datang di Sistem Informasi Perpustakaan SMAN 1 HU'U</h4>
                    <p>
                        Platform untuk pengelolaan data perpustakaan sekolah secara efisien. Sistem ini dirancang untuk
                        memudahkan pengelolaan data buku, anggota, dan transaksi peminjaman di perpustakaan SMAN 1 HU'U.
                        Dengan tampilan yang user-friendly, pustakawan dapat dengan mudah melakukan input data buku
                        baru, registrasi anggota perpustakaan, serta mencatat dan memantau status peminjaman buku.
                        Melalui dashboard ini, Anda dapat melihat ringkasan data penting seperti jumlah kategori buku,
                        daftar penerbit, total koleksi buku, dan jumlah anggota perpustakaan yang terdaftar. Mari
                        tingkatkan efektivitas pengelolaan perpustakaan SMAN 1 HU'U dengan sistem informasi yang
                        terstruktur dan terintegrasi.
                    </p>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/images/library.svg') }}" alt="" class="w-100">
                </div>
            </div>
        </div>
    </div>
</x-layout>
