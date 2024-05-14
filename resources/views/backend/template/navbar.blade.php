<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('dashboard') }}">
        <div class="">
            <img src="{{ asset('images/Logo Kryia-03.png') }}" class="h-10" alt="Logo Kriya Indonesia">
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">


    <li class="nav-item">
        <a class="nav-link {{ request()->is('dashboard') ? 'font-bold text-white' : '' }}"
            href="{{ url('dashboard') }}">
            <i class="fas fa-qrcode"></i>
            <span>Scan Barcode</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Nav Item - Charts -->

    <li class="nav-item">
        <a class="nav-link {{ request()->is('dashboard/exhibitor') || request()->is('dashboard/exhibitor/*') ? 'font-bold text-white' : '' }}"
            href="{{ url('dashboard/exhibitor') }}">
            <i class="fas fa-table"></i>
            <span>Data Exhibitor</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('dashboard/exhibitor_form_a*') ? 'font-bold text-white' : '' }}"
            href="{{ url('dashboard/exhibitor_form_a') }}">
            <i class="far fa-calendar-check"></i>
            <span>Data Exhibitor (Form-A)</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('dashboard/contact') ? 'font-bold text-white' : '' }}"
            href="{{ url('dashboard/contact') }}">
            <i class="far fa-address-card"></i>
            <span>Data Contact</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('dashboard/data_registration') ? 'font-bold text-white' : '' }}"
            href="{{ url('dashboard/data_registration') }}">
            <table>
                <tr>
                    <td>
                        <i class="fas fa-users"></i>
                    </td>
                    <td>
                        <span>Data Registrasi Pengunjung</span>
                    </td>
                </tr>
            </table>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('dashboard/data_admin') ? 'font-bold text-white' : '' }}"
            href="{{ url('dashboard/data_admin') }}">
            <i class="fas fa-user-cog"></i>
            <span>Data Admin</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('exhibitor_form-a') }}" target="_blank">
            <i class="fas fa-align-left"></i>
            <span>Form A</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('dashboard/settings') ? 'font-bold text-white' : '' }}"
            href="{{ url('dashboard/settings') }}">
            <i class="fas fa-cogs"></i>
            <span>Website Settings</span>
        </a>
    </li>

</ul>
