<x-base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{ $title }}
        </x-slot>

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <x-slot:headerFiles>
            <!--  BEGIN CUSTOM STYLE FILE  -->
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

                        <li class="breadcrumb-item active" aria-current="page">Edukasi</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <div class="row layout-top-spacing">
                <div class="col-lg-3 col-md-3 col-sm-3 mb-4">
                    <div class="d-flex justify-items-start">
                        <input id="t-text" type="text" name="txt" placeholder="Cari Edukasi..."
                            class="form-control" required="">
                        <button class="btn btn-primary w-50 ms-2">Cari</button>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-3 mb-4 ms-auto">
                    <select id="categoryFilter" class="form-select form-select px-2"
                        aria-label="Default select example">
                        <option value="" selected>Semua Kategori</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->name }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-3 mb-4">
                    <select class="form-select form-select px-2" id="sortFilter" aria-label="Default select example">
                        <option value="" selected>Urutkan</option>
                        <option value="terbaru">Terbaru</option>
                        <option value="populer">Populer</option>
                    </select>
                </div>
            </div>

            <div class="row">
                @forelse ($educations as $item)
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                        <a href="{{ route('education.show', $item) }}" class="card style-2 mb-md-0 mb-4">
                            @if ($item->featured_image)
                                <img src="{{ $item->featured_image }}" class="card-img-top" alt="...">
                            @endif
                            <div class="card-body px-0 pb-0">
                                <h5 class="card-title mb-3">{{ $item->title }}</h5>
                                {!! strip_tags(\Illuminate\Support\Str::words($item->content, 5, '...')) !!}
                                <p class="small @if ($item->content) mt-3 @endif">
                                    {{ $item->created_at->format('d-m-Y, H:i:s ') }} WIB
                                </p>
                            </div>
                        </a>
                    </div>
                @empty
                    <h5 class="my-4">Data tidak ditemukan...</h5>
                @endforelse

            </div>

            {{ $educations->links() }}

            <!--  BEGIN CUSTOM SCRIPTS FILE  -->
            <x-slot:footerFiles>
                <script src="{{ asset('plugins/global/vendors.min.js') }}"></script>
                <script>
                    $('#categoryFilter').on('change', function() {
                        const url = new URL(location.href);
                        url.searchParams.set('kategori', $(this).val());

                        window.location.replace(url);
                    })
                    $('#sortFilter').on('change', function() {
                        const url = new URL(location.href);
                        url.searchParams.set('urutkan', $(this).val());

                        window.location.replace(url);
                    })

                    function getParameterByName(name, url) {
                        if (!url) url = window.location.href;
                        name = name.replace(/[\[\]]/g, "\\$&");
                        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                            results = regex.exec(url);
                        if (!results) return null;
                        if (!results[2]) return '';
                        return decodeURIComponent(results[2].replace(/\+/g, " "));
                    }
                    var categoryQueryString = getParameterByName("kategori");
                    if (categoryQueryString) {
                        $('#categoryFilter').val(categoryQueryString)
                    }

                    var sortQueryString = getParameterByName("urutkan");
                    if (sortQueryString) {
                        $('#sortFilter').val(sortQueryString)
                    }
                    // console.log(sortQueryString)
                    // if (!categoryQueryString && !sortQueryString) {
                    //     var uri = window.location.href.toString();
                    //     if (uri.indexOf("?") > 0) {
                    //         var clean_uri = uri.substring(0, uri.indexOf("?"));
                    //         window.history.replaceState({}, document.title, clean_uri);
                    //     }
                    // }
                </script>
                </x-slot>
                <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
