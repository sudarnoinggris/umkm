<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('') ?>">
        <div class="sidebar-brand-icon rotate-n-0">
            <i><img src="<?= base_url() . 'assets/img/lambang.png' ?>" height="35" width="35"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Anggota UMKM</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php if ($title == 'Dashboard') echo 'active'; ?>">
        <a class="nav-link" href="<?= base_url('dashboard') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        MASTER DATA
    </div>



    <li class="nav-item <?php if ($title == 'Profil') echo 'active'; ?>">
        <a class="nav-link" href="<?= base_url('profil') ?>">
            <i class="fas fa-users"></i>
            <span>Profil Usaha</span></a>
    </li>
    <li class="nav-item <?php if ($title == 'Anggota') echo 'active'; ?>">
        <a class="nav-link" href="<?= base_url('anggota') ?>">
            <i class="fas fa-calendar"></i>
            <span>Anggota UMKM</span></a>
    </li>
    <li class="nav-item <?php if ($title == 'Logout') echo 'active'; ?>">
        <a class="nav-link" href="<?= base_url('login/logout') ?>" role="button" target="_blank">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>






</ul>
<!-- End of Sidebar -->