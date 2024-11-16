<x-layout title="Edit Petugas">
    <div class="row">
        <div class="text-center col-md-6 d-none d-md-block">
            <img src="{{ asset('assets/images/account.svg') }}" alt="" class="w-75">
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('petugas.update', $petugas->id) }}" method="post" autocomplete="off">
                        @method('put')
                        @csrf

                        <x-component.errors />

                        <x-form.input label="Nama" name="nama" :value="$petugas->nama" :required="true" />
                        <x-form.input label="Username" name="username" :value="$petugas->username" :required="true" />
                        <x-form.input label="Ganti Password" type="password" name="password"
                            placeholder="Kosongkan jika tidak ingin mengganti password" />

                        <button class="btn btn-primary btn-block">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
