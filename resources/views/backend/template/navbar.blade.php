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

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('dashboard/exhibitor') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Data Exhibitor</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('exhibitor_form-a') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Form A</span></a>
    </li>

</ul>
