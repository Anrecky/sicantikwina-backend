<x-base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{ $title }}
        </x-slot>

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <x-slot:headerFiles>
            <!--  BEGIN CUSTOM STYLE FILE  -->
            <link rel="stylesheet" href="{{ asset('plugins/table/datatable/datatables.css') }}">
            @vite(['resources/scss/light/plugins/table/datatable/dt-global_style.scss'])
            @vite(['resources/scss/light/plugins/table/datatable/custom_dt_miscellaneous.scss'])
            @vite(['resources/scss/dark/plugins/table/datatable/dt-global_style.scss'])
            @vite(['resources/scss/dark/plugins/table/datatable/custom_dt_miscellaneous.scss'])
            @vite(['resources/scss/light/assets/components/modal.scss'])
            @vite(['resources/scss/dark/assets/components/modal.scss'])
            <link rel="stylesheet" href="{{ asset('plugins/animate/animate.css') }}">
            <!--  END CUSTOM STYLE FILE  -->
            </x-slot>
            <!-- END GLOBAL MANDATORY STYLES -->

            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalTitle">Apakah anda yakin ingin menghapus data
                                pengaduan berikut?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </button>
                        </div>
                        <div class="modal-body">

                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-light-dark" data-bs-dismiss="modal">Batalkan</button>
                            <form id="deleteForm" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade inputForm-modal" id="editModal" tabindex="-1" role="dialog"
                aria-labelledby="editLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">

                        <div class="modal-header" id="editLabel">
                            <h5 class="modal-title">Edit Kategori</b></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><svg
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg></button>
                        </div>
                        <div class="modal-body">
                            <form class="mt-0" id="editForm" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group mb-4">
                                    <label for="category-name">Nama Kategori</label>
                                    <input name="name" type="text" class="form-control border rounded"
                                        id="category-name" placeholder="Contoh: Kuliner atau Fashion atau Sport">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="category-description">Deskripsi Kategori</label>
                                    <textarea name="description" class="form-control border rounded" id="category-description" rows="3"
                                        placeholder="Contoh: Kategori ini untuk mengklasifikasi konten edukasi yang bertemakan edukasi ttg gaya hidup. (boleh dikosongkan)"></textarea>
                                </div>


                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-light-danger mt-2 mb-2 btn-no-effect"
                                data-bs-dismiss="modal">Batalkan</button>
                            <button type="submit" class="btn btn-warning mt-2 mb-2 btn-no-effect">Edit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Kategori Edukasi</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <div class="row layout-top-spacing">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-8 py-3">
                        <table id="html5-extension" class="table dt-table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Kategori</th>
                                    <th>Deskripsi Singkat</th>
                                    <th>Dibuat pada</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($educationCategories as $category)
                                    <tr>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ \Illuminate\Support\Str::words($category->description, 5, '...') }}</td>
                                        <td>{{ $category->created_at->format('d-m-Y, H:i') }} WIB</td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="dropdown-toggle" href="#" role="button"
                                                    id="dropdownMenuLink20" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-more-horizontal">
                                                        <circle cx="12" cy="12" r="1">
                                                        </circle>
                                                        <circle cx="19" cy="12" r="1">
                                                        </circle>
                                                        <circle cx="5" cy="12" r="1">
                                                        </circle>
                                                    </svg>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink20">

                                                    <a class="dropdown-item" href="javascript:void(0);"
                                                        data-bs-toggle="modal" data-bs-target="#editModal"
                                                        data-edit-url="{{ route('education-category.update', $category) }}"
                                                        data-category="{{ $category }}">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"
                                                        data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                        data-delete-url="{{ route('education-category.destroy', $category) }}"
                                                        data-category="{{ $category }}">Hapus</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <!-- Modal -->
            <div class="modal fade inputForm-modal" id="inputFormModal" tabindex="-1" role="dialog"
                aria-labelledby="inputFormModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">

                        <div class="modal-header" id="inputFormModalLabel">
                            <h5 class="modal-title">Buat Kategori Baru</b></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><svg
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-x">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg></button>
                        </div>
                        <div class="modal-body">
                            <form class="mt-0" action="{{ route('education-category.store') }}" method="POST">
                                @csrf
                                <div class="form-group mb-4">
                                    <label for="category-name">Nama Kategori</label>
                                    <input name="name" type="text" class="form-control border rounded"
                                        id="category-name" placeholder="Contoh: Kuliner atau Fashion atau Sport">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="category-description">Deskripsi Kategori</label>
                                    <textarea name="description" class="form-control border rounded" id="category-description" rows="3"
                                        placeholder="Contoh: Kategori ini untuk mengklasifikasi konten edukasi yang bertemakan edukasi ttg gaya hidup. (boleh dikosongkan)"></textarea>
                                </div>


                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-light-danger mt-2 mb-2 btn-no-effect"
                                data-bs-dismiss="modal">Batalkan</button>
                            <button type="submit" class="btn btn-success mt-2 mb-2 btn-no-effect">Buat</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--  BEGIN CUSTOM SCRIPTS FILE  -->
            <x-slot:footerFiles>

                <script src="{{ asset('plugins/global/vendors.min.js') }}"></script>
                @vite(['resources/assets/js/custom.js'])
                <script src="{{ asset('plugins/table/datatable/datatables.js') }}"></script>
                <script src="{{ asset('plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
                <script src="{{ asset('plugins/table/datatable/button-ext/jszip.min.js') }}"></script>
                <script src="{{ asset('plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
                <script src="{{ asset('plugins/table/datatable/button-ext/buttons.print.min.js') }}"></script>
                <script>
                    $(document).ready(function() {
                        var myModal = new bootstrap.Modal(document.getElementById('inputFormModal'))
                        $('#deleteModal').on('show.bs.modal', function(event) {
                            var category = $(event.relatedTarget).data('category');
                            var deleteUrl = $(event.relatedTarget).data('delete-url');

                            $(this).find(".modal-body").append(`
                        <p>Nama Kategori : ${category['name']}</p>
                        ${category['description'] ? `<p>Deskripsi Kategori : ${category['description']}</p>` : ""}

                        `);
                            $('#deleteForm').attr('action', `${deleteUrl}`);
                        });

                        $('#editModal').on('show.bs.modal', function(event) {
                            var category = $(event.relatedTarget).data('category');
                            var editUrl = $(event.relatedTarget).data('edit-url');

                            $(this).find("input[name='name']").val(category['name'])
                            $(this).find("textarea[name='description']").val(category['description'])

                            $('#editForm').attr('action', `${editUrl}`);
                        });

                        $('#html5-extension').DataTable({
                            language: {
                                url: "https://cdn.datatables.net/plug-ins/1.13.1/i18n/id.json"
                            },
                            "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
                                "<'table-responsive'tr>" +
                                "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
                            buttons: {
                                buttons: [{
                                        text: '+ Kategori Baru',
                                        className: 'btn',
                                        action: function(e, dt, node, config) {
                                            myModal.show()
                                        }
                                    },


                                ]
                            },
                            columnDefs: [{
                                orderable: false,
                                targets: 3
                            }],

                            "oLanguage": {
                                "oPaginate": {
                                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                                },
                                "sInfo": "Menampilan _PAGE_ dari _PAGES_",
                                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                                "sSearchPlaceholder": "Cari...",
                                "sLengthMenu": "Results :  _MENU_",
                            },
                            "stripeClasses": [],
                            "lengthMenu": [7, 10, 20, 50],
                            "pageLength": 10
                        });
                    })
                </script>
                </x-slot>
                <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
