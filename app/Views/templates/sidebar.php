<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fab fa-codepen"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Disporapar Kubu Raya</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
        </a>
    </li>

    <?php if(in_groups('admin')) : ?>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            User Management
        </div>

        <!-- Nav Item - User List -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('userlist') ?>">
                <i class="fas fa-users"></i>
                    <span>User List</span>
            </a>
        </li>
    <?php endif; ?>

    <!-- Divider -->
        
    <hr class="sidebar-divider">
    <!-- Heading -->
    
    <div class="sidebar-heading">
        User Profile 
    </div>

    <!-- Nav Item - User Profile  -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user') ?>">
            <i class="fas fa-user"></i>
            <span>My Profile</span>
        </a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-user-edit"></i>    
                <span>Edit Profile</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Articel Management
    </div>

    <!-- Nav Item - Articel Management -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/b-berita') ?>">
            <i class="far fa-newspaper"></i>
                <span>Berita</span>
        </a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('artikel') ?>">
            <i class="fas fa-file-alt"></i>
                <span>Artikel</span>
        </a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('event') ?>">
            <i class="fas fa-calendar"></i>    
                <span>Event</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/b-category') ?>">
            <i class="far fa-newspaper"></i>
                <span>Kategori</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('logout') ?>">
            <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
        </a> 
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    

</ul>