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

            @vite(['resources/scss/light/assets/forms/switches.scss'])
            @vite(['resources/scss/light/plugins/editors/quill/quill.snow.scss'])
            @vite(['resources/scss/light/plugins/editors/quill/quill.snow.scss'])
            @vite(['resources/scss/light/plugins/tagify/custom-tagify.scss'])
            @vite(['resources/scss/light/assets/apps/blog-create.scss'])

            @vite(['resources/scss/dark/assets/forms/switches.scss'])
            @vite(['resources/scss/dark/plugins/editors/quill/quill.snow.scss'])
            @vite(['resources/scss/dark/plugins/editors/quill/quill.snow.scss'])
            @vite(['resources/scss/dark/plugins/tagify/custom-tagify.scss'])
            @vite(['resources/scss/dark/assets/apps/blog-create.scss'])
            <link rel="stylesheet" type="text/css" href="{{ asset('plugins/tomSelect/tom-select.default.min.css') }}">
            @vite(['resources/scss/light/plugins/tomSelect/custom-tomSelect.scss'])
            @vite(['resources/scss/dark/plugins/tomSelect/custom-tomSelect.scss'])
            <style>
                .ts-control {
                    padding: 1rem !important
                }

                .ts-control>.item {
                    margin-top: 0.325rem !important;
                    margin-bottom: 0.325rem !important;
                }
            </style>
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
                        <li class="breadcrumb-item"><a href="{{ route('education.index') }}">Edukasi</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Edukasi</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->
            <form id="editForm" action="{{ route('education.update', $education) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-4 layout-spacing layout-top-spacing">

                    <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">

                        <div class="widget-content widget-content-area blog-create-section">
                            <div class="row mb-4">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="post-title"
                                        placeholder="Judul Edukasi" value="{{ $education->title }}" name="title">
                                    @if ($errors->get('title'))
                                        <ul class='text-sm text-danger'>
                                            @foreach ((array) $errors->get('title') as $message)
                                                <li>{{ _($message) }}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-sm-12">
                                    <label>Konten</label>
                                    <div id="blog-description"></div>
                                    <textarea name="content" class="d-none" id="post-content"> {!! $education->content !!}</textarea>
                                    @if ($errors->get('description'))
                                        <ul class='text-sm text-danger'>
                                            @foreach ((array) $errors->get('description') as $message)
                                                <li>{{ _($message) }}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-4">
                        <div class="widget-content widget-content-area blog-create-section">
                            <div class="row">
                                <div class="col-xxl-12 mb-4">
                                    <div class="switch form-switch-custom switch-inline form-switch-primary">

                                        <input name="is_publish"
                                            @if ($education->is_publish) checked value="1" @else value="0" @endif
                                            class="switch-input" type="checkbox" role="switch" id="showPublicly">
                                        <label class="switch-label" for="showPublicly">Dipublikasi</label>
                                        @if ($errors->get('is_publish'))
                                            <ul class='text-sm text-danger'>
                                                @foreach ((array) $errors->get('is_publish') as $message)
                                                    <li>{{ _($message) }}</li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-xxl-12 col-md-12 mb-4">
                                    <label for="category">Kategori</label>
                                    <select id="category" name="categories[]" multiple placeholder="Pilih kategori..."
                                        autocomplete="off">
                                        <option value="">Pilih kategori...</option>
                                        @foreach ($categories as $category)
                                            <option @if (in_array($category->id, $education->categories->pluck('id')->toArray())) selected @endif
                                                value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach


                                    </select>
                                </div>

                                <div class="col-xxl-12 col-md-12 mb-4">

                                    <label for="product-images">Gambar Utama</label>
                                    <div class="multiple-file-upload">

                                        <input type="file" class="filepond" name="featured_image"
                                            accept="image/png, image/jpeg, image/gif" />

                                    </div>

                                </div>

                                <div class="col-xxl-12 col-sm-4 col-12 mx-auto">
                                    <button type="submit" class="btn btn-warning w-100">Edit Edukasi</button>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </form>

            <!--  BEGIN CUSTOM SCRIPTS FILE  -->
            <x-slot:footerFiles>

                <script src="{{ asset('plugins/global/vendors.min.js') }}"></script>
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
                @vite(['resources/assets/js/apps/education-edit.js'])
                <script src="{{ asset('plugins/tomSelect/tom-select.base.js') }}"></script>


                <script type="module">
                    window.singleFile = FilePond.create(
                        document.querySelector('.filepond'), {
                            labelIdle: 'Tarik & Letakkan file gambar anda atau <span class="filepond--label-action"> Telusuri </span>',
                            imagePreviewHeight: 170,
                            imageCropAspectRatio: '16:9',
                            // imageResizeTargetWidth: 200,
                            // imageResizeTargetHeight: 200,
                            stylePanelLayout: 'compact',
                            styleLoadIndicatorPosition: 'center bottom',
                            styleProgressIndicatorPosition: 'right bottom',
                            styleButtonRemoveItemPosition: 'left bottom',
                            styleButtonProcessItemPosition: 'right bottom',
                            storeAsFile: true,
                        }
                    );
                    @if ($education->featured_image)

                    singleFile.addFiles("{{ $education->featured_image }}");
                    @endif
                    $('input[name="is_publish"]').on('change', function() {

                        var isChecked = $(this).is(':checked');
                        if (isChecked) {
                            $(this).val(1)
                        } else {
                            $(this).val(0)
                        }
                    })


                    new TomSelect("#category");
                </script>

                </x-slot>
                <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
