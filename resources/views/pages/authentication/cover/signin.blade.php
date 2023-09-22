<x-base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{ $title }}
        </x-slot>

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <x-slot:headerFiles>
            <!--  BEGIN CUSTOM STYLE FILE  -->
            @vite(['resources/scss/light/assets/authentication/auth-cover.scss'])
            @vite(['resources/scss/dark/assets/authentication/auth-cover.scss'])
            <!--  END CUSTOM STYLE FILE  -->
            </x-slot>
            <!-- END GLOBAL MANDATORY STYLES -->

            <div class="auth-container d-flex">

                <div class="container mx-auto align-self-center">
                    @if (session('status'))
                        <div class='font-medium text-sm text-green-600 dark:text-green-400 mb-4'>
                            {{ $status }}
                        </div>
                    @endif

                    <div class="row">

                        <div
                            class="col-6 d-lg-flex d-none h-100 my-auto top-0 start-0 text-center justify-content-center flex-column">
                            <div class="auth-cover-bg-image"></div>
                            <div class="auth-overlay"></div>

                            <div class="auth-cover">

                                <div class="position-relative">

                                    <img src="{{ Vite::asset('resources/images/sicantikwina.png') }}" alt="auth-img">

                                    <h2 class="mt-5 text-white font-weight-bolder px-2">LOGIN ADMIN SICANTIKWINA</h2>
                                    {{-- <p class="text-white px-2">It is easy to setup with great customer experience. Start
                                        your 7-day free trial</p> --}}
                                </div>

                            </div>

                        </div>

                        <div
                            class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center ms-lg-auto me-lg-0 mx-auto">
                            <div class="card">
                                <div class="card-body">

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12 mb-3">

                                                <h2>Login</h2>
                                                <p>Masukkan email dan password anda untuk login</p>

                                            </div>

                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">{{ __('Email') }}</label>
                                                    <input id="email" type="email" class="form-control"
                                                        name="email" value="{{ old('email') }}" required autofocus>
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
                                                <div class="mb-4">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input id="password" type="password" class="form-control"
                                                        name="password" required autocomplete="current-password">
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
                                                    <div class="form-check form-check-primary form-check-inline">
                                                        <input class="form-check-input me-3" type="checkbox"
                                                            id="remember_me" name="remember">
                                                        <label for="remember_me" class="form-check-label"
                                                            for="remember_me">
                                                            Ingat saya
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="mb-4">
                                                    <button class="btn btn-secondary w-100">SIGN IN</button>
                                                </div>
                                            </div>

                                            {{-- <div class="col-12">
                                                <div class="text-center">
                                                    <p class="mb-0">Dont't have an account ? <a
                                                            href="javascript:void(0);" class="text-warning">Sign Up</a>
                                                    </p>
                                                </div>
                                            </div> --}}

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
