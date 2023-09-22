<x-base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{ $title }}
        </x-slot>

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <x-slot:headerFiles>
            <!--  BEGIN CUSTOM STYLE FILE  -->

            @vite(['resources/scss/light/assets/elements/custom-pagination.scss'])
            @vite(['resources/scss/light/assets/apps/blog-post.scss'])
            @vite(['resources/scss/dark/assets/elements/custom-pagination.scss'])
            @vite(['resources/scss/dark/assets/apps/blog-post.scss'])
            <!--  END CUSTOM STYLE FILE  -->
            </x-slot>
            <!-- END GLOBAL MANDATORY STYLES -->

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('complaint.index') }}">Pengaduan</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail Pengaduan</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <div class="row layout-top-spacing">

                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
                    <div class="single-post-content">
                        <div class="row ">
                            <div class="col-md-4">
                                <h4 class="mb-2"><u>Pelapor</u></h4>
                                <p>Nama :<br /> {{ $complaint->whistleblower_name }}</p>
                                <p>Jenis Kelamin :<br />
                                    {{ $complaint->whistleblower_gender == 'male' ? 'Pria' : 'Wanita' }}</p>
                                <p>{{ $complaint->whistleblower_is_year ? 'Tahun Lahir :' : 'Tanggal Lahir :' }}<br />
                                    {{ $complaint->whistleblower_is_year ? $complaint->whistleblower_year : $complaint->whistleblower_dob }}
                                </p>
                                <p>No. Telfon : <br />{{ $complaint->whistleblower->phone ?? '-' }}</p>
                                <p>Alamat : <br />{{ $complaint->whistleblower_address }}</p>
                            </div>
                            <div class="col-md-4">
                                <h4 class="mb-2"><u>Pengantin Laki - Laki</u></h4>
                                <p>Nama :<br /> {{ $complaint->groom_name }}</p>
                                <p>{{ $complaint->groom_is_year ? 'Tahun Lahir :' : 'Tanggal Lahir :' }}<br />
                                    {{ $complaint->groom_is_year ? $complaint->groom_year : $complaint->groom_dob }}
                                </p>
                                <p>No. Telfon : <br />{{ $complaint->groom_phone ?? '-' }}</p>
                                <p>Alamat : <br />{{ $complaint->groom_address }}</p>
                            </div>
                            <div class="col-md-4">
                                <h4 class="mb-2"><u>Pengantin Perempuan</u></h4>
                                <p>Nama :<br /> {{ $complaint->bride_name }}</p>
                                <p>{{ $complaint->bride_is_year ? 'Tahun Lahir :' : 'Tanggal Lahir :' }}<br />
                                    {{ $complaint->bride_is_year ? $complaint->bride_year : $complaint->bride_dob }}
                                </p>
                                <p>No. Telfon : <br />{{ $complaint->bride_phone ?? '-' }}</p>
                                <p>Alamat : <br />{{ $complaint->bride_address }}</p>
                            </div>
                            <hr class="my-4">
                            <div class="col-md-12">
                                <p>{{ $complaint->chronology ? 'Kronologi: ' : '' }} <br />
                                    {{ $complaint->chronology }}</p>
                            </div>
                        </div>

                        <p class="mt-5 text-end font-bold fs-6">
                            <strong>
                                Diajukan pada tanggal : {{ $complaint->created_at }}
                            </strong>
                        </p>
                    </div>
                </div>

            </div>

            <!--  BEGIN CUSTOM SCRIPTS FILE  -->
            <x-slot:footerFiles>

                </x-slot>
                <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
