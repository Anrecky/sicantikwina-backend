<x-base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{ $title }}
        </x-slot>

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <x-slot:headerFiles>
            <!--  BEGIN CUSTOM STYLE FILE  -->
            <link rel="stylesheet" href="{{ asset('plugins/filepond/filepond.min.css') }}">
            <link rel="stylesheet" href="{{ asset('plugins/filepond/FilePondPluginImagePreview.min.css') }}">
            <link rel="stylesheet" href="{{ asset('plugins/tagify/tagify.css') }}">
            <link rel="stylesheet" href="{{ asset('plugins/flatpickr/flatpickr.css') }}">
            <link rel="stylesheet" href="{{ asset('plugins/noUiSlider/nouislider.min.css') }}">

            @vite(['resources/scss/light/assets/forms/switches.scss'])
            @vite(['resources/scss/light/plugins/editors/quill/quill.snow.scss'])
            @vite(['resources/scss/light/plugins/editors/quill/quill.snow.scss'])
            @vite(['resources/scss/light/plugins/tagify/custom-tagify.scss'])
            @vite(['resources/scss/light/plugins/flatpickr/custom-flatpickr.scss'])
            @vite(['resources/scss/light/assets/apps/blog-create.scss'])


            @vite(['resources/scss/dark/assets/forms/switches.scss'])
            @vite(['resources/scss/dark/plugins/editors/quill/quill.snow.scss'])
            @vite(['resources/scss/dark/plugins/editors/quill/quill.snow.scss'])
            @vite(['resources/scss/dark/plugins/tagify/custom-tagify.scss'])
            @vite(['resources/scss/dark/assets/apps/blog-create.scss'])
            @vite(['resources/scss/dark/plugins/flatpickr/custom-flatpickr.scss'])
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
                        <li class="breadcrumb-item active" aria-current="page">Ajukan Pengaduan</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <div class="row mb-4 layout-spacing layout-top-spacing">

                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

                    <div class="widget-content widget-content-area blog-create-section">
                        <form method="POST" action="{{ route('complaint.store') }}">
                            @csrf
                            <h3 class="text-decoration-underline mb-3">Data Pelapor</h3>

                            <div class="px-4">
                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" value="{{ old('wb_name') }}"
                                            name="wb_name" placeholder="Nama Pelapor">
                                        @if ($errors->get('wb_name'))
                                            <ul class='text-sm text-danger my-2'>
                                                @foreach ((array) $errors->get('wb_name') as $message)
                                                    <li>{{ _($message) }}</li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-12">

                                        <div class="form-check form-check-primary form-check-inline">
                                            <input class="form-check-input" value="0" id="wbRadioDOB"
                                                type="radio" checked name="wb_is_year">
                                            <label class="form-check-label" for="wbRadioDOB">
                                                Tanggal Lahir (Lengkap)
                                            </label>
                                        </div>
                                        <div class="form-check form-check-primary form-check-inline">
                                            <input class="form-check-input" id="wbRadioYear" value="1"
                                                type="radio" name="wb_is_year">
                                            <label class="form-check-label" for="wbRadioYear">
                                                Tahun Lahir Saja
                                            </label>
                                        </div>

                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-calendar">
                                                    <rect x="3" y="4" width="18" height="18"
                                                        rx="2" ry="2"></rect>
                                                    <line x1="16" y1="2" x2="16" y2="6">
                                                    </line>
                                                    <line x1="8" y1="2" x2="8" y2="6">
                                                    </line>
                                                    <line x1="3" y1="10" x2="21" y2="10">
                                                    </line>
                                                </svg>
                                            </span>
                                            <input id="wbDOB" value="{{ old('wb_dob') }}"
                                                class="form-control flatpickr flatpickr-input" type="text"
                                                name="wb_dob" placeholder="Pilih Tanggal Lahir..."
                                                aria-label="kalender" aria-describedby="basic-addon1">
                                            <input type="text" value="{{ old('wb_year') }}"
                                                class="form-control d-none" id="wbYear" name="wb_year"
                                                placeholder="Tahun Lahir Pelapor">
                                            @if ($errors->get('wb_dob'))
                                                <ul class='text-sm text-danger my-2'>
                                                    @foreach ((array) $errors->get('wb_dob') as $message)
                                                        <li>{{ _($message) }}</li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                            @if ($errors->get('wb_year'))
                                                <ul class='text-sm text-danger my-2'>
                                                    @foreach ((array) $errors->get('wb_year') as $message)
                                                        <li>{{ _($message) }}</li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label class="col-sm-12">Jenis Kelamin</label>
                                    <div class="col-sm-12">
                                        <div class="form-check form-check-primary form-check-inline">
                                            <input class="form-check-input" type="radio" name="wb_gender"
                                                id="form-check-radio-default-checked" value="female"
                                                @if (old('wb_gender') == 'female') checked @else checked @endif>
                                            <label class="form-check-label" for="form-check-radio-default-checked">
                                                Wanita
                                            </label>
                                        </div>
                                        <div class="form-check form-check-primary form-check-inline">
                                            <input class="form-check-input" type="radio" value="male"
                                                name="wb_gender" id="form-check-radio-default"
                                                @if (old('wb_gender') == 'male') checked @endif>
                                            <label class="form-check-label" for="form-check-radio-default">
                                                Pria
                                            </label>
                                        </div>
                                        @if ($errors->get('wb_gender'))
                                            <ul class='text-sm text-danger my-2'>
                                                @foreach ((array) $errors->get('wb_gender') as $message)
                                                    <li>{{ _($message) }}</li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-4">

                                    <div class="col-sm-12">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control" value="{{ old('wb_address') }}"
                                            name="wb_address" placeholder="Alamat Pelapor">
                                        @if ($errors->get('wb_address'))
                                            <ul class='text-sm text-danger my-2'>
                                                @foreach ((array) $errors->get('wb_address') as $message)
                                                    <li>{{ _($message) }}</li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-4">

                                    <div class="col-sm-12">
                                        <label>No. Telepon</label>
                                        <input type="text" class="form-control" value="{{ old('wb_phone') }}"
                                            name="wb_phone" placeholder="No. Telepon Pelapor">
                                        @if ($errors->get('wb_phone'))
                                            <ul class='text-sm text-danger my-2'>
                                                @foreach ((array) $errors->get('wb_phone') as $message)
                                                    <li>{{ _($message) }}</li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-4">

                                    <div class="col-sm-12">
                                        <label>Hubungan dengan terlapor</label>
                                        <input type="text" class="form-control" value="{{ old('relationship') }}"
                                            name="relationship" placeholder="Contoh: Kakak Kandung Pengantin Pria">
                                        @if ($errors->get('relationship'))
                                            <ul class='text-sm text-danger my-2'>
                                                @foreach ((array) $errors->get('relationship') as $message)
                                                    <li>{{ _($message) }}</li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <h3 class="text-decoration-underline mb-3">Data Pengantin Perempuan</h3>
                            <div class="px-4">
                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" name="bride_name"
                                            placeholder="Nama Pengantin Perempuan" value="{{ old('bride_name') }}">
                                        @if ($errors->get('bride_name'))
                                            <ul class='text-sm text-danger my-2'>
                                                @foreach ((array) $errors->get('bride_name') as $message)
                                                    <li>{{ _($message) }}</li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-12">
                                        <div class="form-check form-check-primary form-check-inline">
                                            <input class="form-check-input" value="0" id="brideRadioDOB"
                                                type="radio" checked name="bride_is_year">
                                            <label class="form-check-label" for="brideRadioDOB">
                                                Tanggal Lahir (Lengkap)
                                            </label>
                                        </div>
                                        <div class="form-check form-check-primary form-check-inline">
                                            <input class="form-check-input" id="brideRadioYear" value="1"
                                                type="radio" name="bride_is_year">
                                            <label class="form-check-label" for="brideRadioYear">
                                                Tahun Lahir Saja
                                            </label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-calendar">
                                                    <rect x="3" y="4" width="18"
                                                        height="18" rx="2" ry="2"></rect>
                                                    <line x1="16" y1="2" x2="16"
                                                        y2="6">
                                                    </line>
                                                    <line x1="8" y1="2" x2="8"
                                                        y2="6">
                                                    </line>
                                                    <line x1="3" y1="10" x2="21"
                                                        y2="10">
                                                    </line>
                                                </svg>
                                            </span>
                                            <input id="brideDOB" value="{{ old('bride_dob') }}"
                                                class="form-control flatpickr flatpickr-input" type="text"
                                                name="bride_dob" placeholder="Pilih Tanggal Lahir..."
                                                aria-label="kalender" aria-describedby="basic-addon1">
                                            <input type="text" class="form-control d-none" id="brideYear"
                                                name="bride_year" placeholder="Tahun Lahir Pelapor">
                                            @if ($errors->get('bride_dob'))
                                                <ul class='text-sm text-danger my-2'>
                                                    @foreach ((array) $errors->get('bride_dob') as $message)
                                                        <li>{{ _($message) }}</li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">

                                    <div class="col-sm-12">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control"
                                            value="{{ old('bride_address') }}" name="bride_address"
                                            placeholder="Alamat Pengantin Perempuan (jika diketahui)">
                                        @if ($errors->get('bride_address'))
                                            <ul class='text-sm text-danger my-2'>
                                                @foreach ((array) $errors->get('bride_address') as $message)
                                                    <li>{{ _($message) }}</li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-4">

                                    <div class="col-sm-12">
                                        <label>No. Telepon</label>
                                        <input type="text" class="form-control" value="{{ old('bride_phone') }}"
                                            name="bride_phone"
                                            placeholder="No. Telepon Pengantin Perempuan (jika diketahui)">
                                        @if ($errors->get('bride_phone'))
                                            <ul class='text-sm text-danger my-2'>
                                                @foreach ((array) $errors->get('bride_phone') as $message)
                                                    <li>{{ _($message) }}</li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <h3 class="text-decoration-underline mb-3">Data Pengantin Laki - Laki</h3>
                            <div class="px-4">
                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" value="{{ old('groom_name') }}"
                                            name="groom_name" placeholder="Nama Pengantin Laki - Laki">
                                        @if ($errors->get('groom_name'))
                                            <ul class='text-sm text-danger my-2'>
                                                @foreach ((array) $errors->get('groom_name') as $message)
                                                    <li>{{ _($message) }}</li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-12">
                                        <div class="form-check form-check-primary form-check-inline">
                                            <input class="form-check-input" value="0" id="groomRadioDOB"
                                                type="radio" checked name="groom_is_year">
                                            <label class="form-check-label" for="groomRadioDOB">
                                                Tanggal Lahir (Lengkap)
                                            </label>
                                        </div>
                                        <div class="form-check form-check-primary form-check-inline">
                                            <input class="form-check-input" id="groomRadioYear" value="1"
                                                type="radio" name="groom_is_year">
                                            <label class="form-check-label" for="groomRadioYear">
                                                Tahun Lahir Saja
                                            </label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-calendar">
                                                    <rect x="3" y="4" width="18"
                                                        height="18" rx="2" ry="2"></rect>
                                                    <line x1="16" y1="2" x2="16"
                                                        y2="6">
                                                    </line>
                                                    <line x1="8" y1="2" x2="8"
                                                        y2="6">
                                                    </line>
                                                    <line x1="3" y1="10" x2="21"
                                                        y2="10">
                                                    </line>
                                                </svg>
                                            </span>
                                            <input id="groomDOB" value="{{ old('groom_dob') }}"
                                                class="form-control flatpickr flatpickr-input" type="text"
                                                name="groom_dob" placeholder="Pilih Tanggal Lahir..."
                                                aria-label="kalender" aria-describedby="basic-addon1">
                                            <input type="text" class="form-control d-none" id="groomYear"
                                                name="groom_year" placeholder="Tahun Lahir Pelapor">
                                            @if ($errors->get('groom_dob'))
                                                <ul class='text-sm text-danger my-2'>
                                                    @foreach ((array) $errors->get('groom_dob') as $message)
                                                        <li>{{ _($message) }}</li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">

                                    <div class="col-sm-12">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control"
                                            value="{{ old('groom_address') }}" name="groom_address"
                                            placeholder="Alamat Pengantin Laki - Laki (jika diketahui)">
                                        @if ($errors->get('groom_address'))
                                            <ul class='text-sm text-danger my-2'>
                                                @foreach ((array) $errors->get('groom_address') as $message)
                                                    <li>{{ _($message) }}</li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-4">

                                    <div class="col-sm-12">
                                        <label>No. Telepon</label>
                                        <input type="text" class="form-control" value="{{ old('groom_phone') }}"
                                            name="groom_phone"
                                            placeholder="No. Telepon Pengantin Laki - Laki (jika diketahui)">
                                        @if ($errors->get('groom_phone'))
                                            <ul class='text-sm text-danger my-2'>
                                                @foreach ((array) $errors->get('groom_phone') as $message)
                                                    <li>{{ _($message) }}</li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <div class="row mb-4">
                                <div class="col-sm-12">
                                    <label>Kronologi</label>
                                    <textarea class="form-control" name="chronology" rows="4">{{ old('chronology') }}</textarea>
                                    @if ($errors->get('chronology'))
                                        <ul class='text-sm text-danger my-2'>
                                            @foreach ((array) $errors->get('chronology') as $message)
                                                <li>{{ _($message) }}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success btn-lg mb-2 me-4">Ajukan
                                        Pengaduan</button>
                                </div>
                            </div>
                        </form>


                    </div>

                </div>


            </div>

            <!--  BEGIN CUSTOM SCRIPTS FILE  -->
            <x-slot:footerFiles>
                <script src="{{ asset('plugins/editors/quill/quill.js') }}"></script>
                <script src="{{ asset('plugins/filepond/filepond.min.js') }}"></script>
                <script src="{{ asset('plugins/filepond/FilePondPluginFileValidateType.min.js') }}"></script>
                <script src="{{ asset('plugins/filepond/FilePondPluginImageExifOrientation.min.js') }}"></script>
                <script src="{{ asset('plugins/filepond/FilePondPluginImagePreview.min.js') }}"></script>
                <script src="{{ asset('plugins/filepond/FilePondPluginImageCrop.min.js') }}"></script>
                <script src="{{ asset('plugins/filepond/FilePondPluginImageResize.min.js') }}"></script>
                <script src="{{ asset('plugins/filepond/FilePondPluginImageTransform.min.js') }}"></script>
                <script src="{{ asset('plugins/filepond/filepondPluginFileValidateSize.min.js') }}"></script>
                <script src="{{ asset('plugins/tagify/tagify.min.js') }}"></script>
                <script type="module" src="{{asset('plugins/flatpickr/flatpickr.js')}}"></script>
                <script type="module" src="{{asset('plugins/flatpickr/custom-flatpickr.js')}}"></script>
                <script src="{{ asset('plugins/global/vendors.min.js') }}"></script>
                <script src="{{ asset('plugins/input-mask/jquery.inputmask.bundle.min.js') }}"></script>
                <script src="{{ asset('plugins/input-mask/input-mask.js') }}"></script>


                @vite(['resources/assets/js/apps/complaint-create.js'])


                </x-slot>
                <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
