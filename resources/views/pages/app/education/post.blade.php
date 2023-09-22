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

                        <li class="breadcrumb-item">
                            <a href="{{ route('education.index') }}">
                                Edukasi
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $education->title }}</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <div class="row layout-top-spacing">

                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">


                    <div class="single-post-content">

                        <div class="featured-image"
                            style='background-image: url("@if ($education->featured_image) {{ $education->featured_image }} @endif");background-size:cover;'>

                            <div class="featured-image-overlay"></div>

                            <div class="post-header">

                                <div class="post-title">
                                    <h1 class="mb-0">{{ $education->title }}</h1>
                                </div>

                            </div>

                        </div>

                        <div class="post-content">
                            {!! $education->content !!}
                        </div>


                        <div class="post-info">

                            <hr>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p>Kategori:</p>
                                    <div class="post-tags ">
                                        @foreach ($education->categories as $category)
                                            <span class="badge badge-primary mb-2">{{ $category->name }}</span>
                                        @endforeach
                                    </div>
                                </div>
                                {{-- <div>
                                    <p>Tag:</p>
                                    <div class="post-tags ">
                                        <span class="badge badge-info mb-2">Admin</span>
                                        <span class="badge badge-info mb-2">Themeforeset</span>
                                        <span class="badge badge-info mb-2">Dashboard</span>
                                        <span class="badge badge-info mb-2">Top 10</span>

                                    </div>
                                </div> --}}

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
