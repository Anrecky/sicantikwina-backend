{{--

/**
*
* Created a new component <x-menu.vertical-menu/>.
*
*/

--}}


<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">

        <div class="navbar-nav theme-brand flex-row  text-center">
            <div class="nav-logo">
                <div class="nav-item theme-logo">
                    <a href="{{ route('dashboard') }}">
                        <img src="{{ Vite::asset('resources/images/logo.svg') }}" class="navbar-logo logo-dark"
                            alt="logo">
                        <img src="{{ Vite::asset('resources/images/logo2.svg') }}" class="navbar-logo logo-light"
                            alt="logo">
                    </a>
                </div>
                <div class="nav-item theme-text">
                    <a href="{{ route('dashboard') }}" class="nav-link"> SICANTIKWINA </a>
                </div>
            </div>
            <div class="nav-item sidebar-toggle">
                <div class="btn-toggle sidebarCollapse">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-chevrons-left">
                        <polyline points="11 17 6 12 11 7"></polyline>
                        <polyline points="18 17 13 12 18 7"></polyline>
                    </svg>
                </div>
            </div>
        </div>
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu {{ Route::is('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" aria-expanded="false" class="dropdown-toggle">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>


            <li class="menu menu-heading">
                <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-minus">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg><span>APLIKASI</span></div>
            </li>

            <li class="menu {{ Request::routeIs('calendar') ? 'active' : '' }}">
                <a href="{{ getRouterValue() }}/app/calendar" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-calendar">
                            <rect x="3" y="4" width="18" height="18" rx="2"
                                ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                        <span>Kalender</span>
                    </div>
                </a>
            </li>

            <li class="menu {{ Request::routeIs('chat') ? 'active' : '' }}">
                <a href="{{ getRouterValue() }}/app/chat" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-message-square">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg>
                        <span>Chat</span>
                    </div>
                </a>
            </li>

            <li class="menu {{ Request::routeIs('mailbox') ? 'active' : '' }}">
                <a href="{{ getRouterValue() }}/app/mailbox" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-mail">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                            </path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        <span>Kotak Surat</span>
                    </div>
                </a>
            </li>

            <li class="menu {{ Request::routeIs('todolist') ? 'active' : '' }}">
                <a href="{{ getRouterValue() }}/app/todo-list" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-edit">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                        </svg>
                        <span>Todo List</span>
                    </div>
                </a>
            </li>

            <li class="menu {{ Request::routeIs('notes') ? 'active' : '' }}">
                <a href="{{ getRouterValue() }}/app/notes" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-book">
                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                        </svg>
                        <span>Catatan</span>
                    </div>
                </a>
            </li>

            <li class="menu {{ Request::routeIs('scrumboard') ? 'active' : '' }}">
                <a href="{{ getRouterValue() }}/app/scrumboard" aria-expanded="false" class="dropdown-toggle">
                    <div class="">

                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-clipboard">
                            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                            <rect x="8" y="2" width="8" height="4" rx="1"
                                ry="1"></rect>
                        </svg>
                        <span>Papan Scrum</span>
                    </div>
                </a>
            </li>

            <li class="menu {{ Request::routeIs('contacts') ? 'active' : '' }}">
                <a href="{{ getRouterValue() }}/app/contacts" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-map-pin">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <span>Kontak</span>
                    </div>
                </a>
            </li>
            <li
                class="menu {{ Request::is('admin/edukasi/*') || Request::is('admin/edukasi') || Request::is('admin/kategori-edukasi') ? 'active' : '' }}">
                <a href="#education" data-bs-toggle="collapse"
                    aria-expanded="{{ Request::is('admin/edukasi/*') || Request::is('admin/edukasi') || Request::is('admin/kategori-edukasi') ? 'true' : 'false' }}"
                    class="dropdown-toggle">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-pen-tool">
                            <path d="M12 19l7-7 3 3-7 7-3-3z"></path>
                            <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path>
                            <path d="M2 2l7.586 7.586"></path>
                            <circle cx="11" cy="11" r="2"></circle>
                        </svg>
                        <span>Edukasi</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ Request::is('admin/edukasi/*') || Request::is('admin/edukasi') || Request::is('admin/kategori-edukasi') ? 'show' : '' }}"
                    id="education" data-bs-parent="#accordionExample">
                    <li
                        class="{{ Route::is('education.index') && !Request::query('tampilan') == 'tabel' ? 'active' : '' }}">
                        <a href="{{ route('education.index') }}"> Kisi </a>
                    </li>
                    <li class="{{ Request::query('tampilan') == 'tabel' ? 'active' : '' }}">
                        <a href="{{ route('education.index', ['tampilan' => 'tabel']) }}"> Tabel </a>
                    </li>
                    <li class="{{ Route::is('education-category.index') ? 'active' : '' }}">
                        <a href="{{ route('education-category.index') }}"> Kategori </a>
                    </li>
                    <li class="{{ Route::is('education.create') ? 'active' : '' }}">
                        <a href="{{ route('education.create') }}"> Buat Baru </a>
                    </li>
                </ul>
            </li>
            <li class="menu {{ Request::is('admin/pengaduan/*') || Request::is('admin/pengaduan') ? 'active' : '' }}">
                <a href="#complaint" data-bs-toggle="collapse"
                    aria-expanded="{{ Request::is('admin/pengaduan/*') || Request::is('admin/pengaduan') ? 'true' : 'false' }}"
                    class="dropdown-toggle">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-alert-triangle">
                            <path
                                d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
                            </path>
                            <line x1="12" y1="9" x2="12" y2="13"></line>
                            <line x1="12" y1="17" x2="12.01" y2="17"></line>
                        </svg>
                        <span>Pengaduan</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ Request::is('admin/pengaduan/*') || Request::is('admin/pengaduan') ? 'show' : '' }}"
                    id="complaint" data-bs-parent="#accordionExample">
                    <li class="{{ Route::is('complaint.index') ? 'active' : '' }}">
                        <a href="{{ route('complaint.index') }}">Tabel</a>
                    </li>
                    <li class="{{ Route::is('complaint.create') ? 'active' : '' }}">
                        <a href="{{ route('complaint.create') }}">Buat baru</a>
                    </li>
                </ul>
            </li>

            <li class="menu {{ Request::is('*/app/information/*') ? 'active' : '' }}">
                <a href="#information" data-bs-toggle="collapse"
                    aria-expanded="{{ Request::is('*/app/information/*') ? 'true' : 'false' }}"
                    class="dropdown-toggle">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-info">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="16" x2="12" y2="12"></line>
                            <line x1="12" y1="8" x2="12.01" y2="8"></line>
                        </svg>
                        <span>Informasi</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ Request::is('*/app/information/*') ? 'show' : '' }}"
                    id="information" data-bs-parent="#accordionExample">
                    <li class="{{ Request::routeIs('blog-grid') ? 'active' : '' }}">
                        <a href="app/blog/grid"> Grid </a>
                    </li>
                    <li class="{{ Request::routeIs('blog-list') ? 'active' : '' }}">
                        <a href="app/blog/list"> List </a>
                    </li>
                    <li class="{{ Request::routeIs('blog-post') ? 'active' : '' }}">
                        <a href="app/blog/post"> Post </a>
                    </li>
                    <li class="{{ Request::routeIs('blog-create') ? 'active' : '' }}">
                        <a href="app/blog/create"> Create </a>
                    </li>
                    <li class="{{ Request::routeIs('blog-edit') ? 'active' : '' }}">
                        <a href="app/blog/edit"> Edit </a>
                    </li>
                </ul>
            </li>
            <li class="menu {{ Request::routeIs('user') ? 'active' : '' }}">
                <a href="app/contacts" aria-expanded="false" class="dropdown-toggle">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-user">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        <span>Pengguna</span>
                    </div>
                </a>
            </li>


        </ul>

    </nav>

</div>
