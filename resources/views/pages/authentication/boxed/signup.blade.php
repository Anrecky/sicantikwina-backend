<x-base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{ $title }}
        </x-slot>

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <x-slot:headerFiles>
            <!--  BEGIN CUSTOM STYLE FILE  -->
            @vite(['resources/scss/light/assets/authentication/auth-boxed.scss'])
            @vite(['resources/scss/dark/assets/authentication/auth-boxed.scss'])
            <!--  END CUSTOM STYLE FILE  -->
            </x-slot>
            <!-- END GLOBAL MANDATORY STYLES -->

            <div class="auth-container d-flex">

                <div class="container mx-auto align-self-center">

                    <div class="row">

                        <div
                            class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
                            <div class="card mt-3 mb-3">
                                <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12 mb-3">

                                                <h2>Pendaftaran</h2>
                                                <p>Masukkan email dan password untuk mendaftar</p>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Nama</label>
                                                    <input name="name" id="name" value="{{ old('name') }}"
                                                        required autofocus type="text"
                                                        class="form-control add-billing-address-input">
                                                    @if ($errors->get('name'))
                                                        <ul class='text-sm text-danger'>
                                                            @foreach ((array) $errors->get('name') as $message)
                                                                <li>{{ $message }}</li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" id="email" name="email" required
                                                        value="{{ old('email') }}" class="form-control">
                                                    @if ($errors->get('email'))
                                                        <ul class='text-sm text-danger'>
                                                            @foreach ((array) $errors->get('email') as $message)
                                                                <li>{{ $message }}</li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input type="password" id="password" name="password" required
                                                        autocomplete="new-password" class="form-control">
                                                    @if ($errors->get('password'))
                                                        <ul class='text-sm text-danger'>
                                                            @foreach ((array) $errors->get('password') as $message)
                                                                <li>{{ $message }}</li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="password_confirmation" class="form-label">Konfirmasi
                                                        Password</label>
                                                    <input type="password" id="password_confirmation"
                                                        name="password_confirmation" required class="form-control">
                                                    @if ($errors->get('password_confirmation'))
                                                        <ul class='text-sm text-danger'>
                                                            @foreach ((array) $errors->get('password_confirmation') as $message)
                                                                <li>{{ $message }}</li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="mb-4">
                                                    <button class="btn btn-secondary w-100">SIGN UP</button>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <!--  BEGIN CUSTOM SCRIPTS FILE  -->
            <x-slot:footerFiles>

                </x-slot>
                <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
