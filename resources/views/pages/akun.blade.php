<x-layout title="Akun">
    <div class="row">
        <div class="text-center col-md-6 d-none d-md-block">
            <img src="{{ asset('assets/images/account.svg') }}" alt="" class="w-75">
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('akun.update') }}" method="post" autocomplete="off">
                        @method('put')
                        @csrf

                        @if (Session::has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                {!! Session::get('success') !!}
                            </div>
                        @endif

                        <x-component.errors />

                        <x-form.input label="Nama" name="nama" :value="auth()->user()->nama" :required="true" />
                        <x-form.input label="Username" name="username" :value="auth()->user()->username" :required="true" />
                        <x-form.input label="Ganti Password" type="password" name="password"
                            placeholder="Kosongkan jika tidak ingin mengganti password" />

                        <button class="btn btn-primary btn-block">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
