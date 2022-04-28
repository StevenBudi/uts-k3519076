<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <img src="<?=base_url("img/logo-nvidia.png")?>" style="width: 150px;">
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- <li class="nav-item">
        <a class="nav-link" href="/index">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li> -->

    <li class="nav-item <?= $path == 'produk' ? 'active' : ''?>">
        <a class="nav-link" href="/product">
            <i class="fas fa-fw fa-table"></i>
            <span>Products</span></a>
    </li>

    <li class="nav-item <?= $path == 'user' ? 'driver' : ''?>">
        <a class="nav-link" href="/driver">
            <i class="fas fa-fw fa-table"></i>
            <span>Drivers</span></a>
    </li>

    <li class="nav-item <?= $path == 'user' ? 'teknologi' : ''?>">
        <a class="nav-link" href="/technology">
            <i class="fas fa-fw fa-table"></i>
            <span>Technologies</span></a>
    </li>

    <li class="nav-item <?= $path == 'user' ? 'contact' : ''?>">
        <a class="nav-link" href="/contact">
            <i class="fas fa-fw fa-table"></i>
            <span>Contact</span></a>
    </li>

    <li class="nav-item <?= $path == 'user' ? 'about' : ''?>">
        <a class="nav-link" href="/about">
            <i class="fas fa-fw fa-table"></i>
            <span>About Us</span></a>
    </li>

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->