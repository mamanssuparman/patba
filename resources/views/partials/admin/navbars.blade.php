<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item border-rad">
            <a href="{{ route('admin-dashboard') }}" class="nav-link {{ Request::is('admin/dashboard*')?'active':'' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link {{ Request::is('admin/matapelajaran*') ? 'active' : '' }}">

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class=" mb-1 nav-icon bi bi-journal-text" viewBox="0 0 16 16">
                    <path
                        d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                    <path
                        d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                    <path
                        d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                </svg>
                <p>
                    Data Soal
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview ">
                <li class="nav-item">
                    <a href="{{ route('admin-matapelajaran') }}" class="nav-link {{ Request::is('admin/matapelajaran*') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Mata Pelajaran</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin-soal') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Soal</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="importsoal.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Import Soal</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="detailmapel.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Daftar Soal</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link ">

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="mb-1 bi bi-people-fill nav-icon" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    <path fill-rule="evenodd"
                        d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                </svg>

                <p>
                    Data Siswa
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview ">
                <li class="nav-item">
                    <a href="{{ route('admin-kelas') }}" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Kelas</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="datasiswa.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Siswa</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="importdatasiswa.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Import Data Siswa</p>
                    </a>
                </li>

            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link ">

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="mb-1 nav-icon bi bi-pencil-square" viewBox="0 0 16 16">
                    <path
                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                    <path fill-rule="evenodd"
                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                </svg>

                <p>
                    Data Tes
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview ">
                <li class="nav-item">
                    <a href="tambahtes.html" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Tambah Tes</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="daftartes.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Daftar Tes</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="hasiltes.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Hasil Tes</p>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</nav>
