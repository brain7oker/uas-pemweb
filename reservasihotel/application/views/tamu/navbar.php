<nav class="navbar navbar-expand navbar-dark bg-success static-top">

    <a class="navbar-brand mr-1" href="<?php echo site_url('Welcome') ?>"><?php echo SITE_NAME ?></a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        
    </form>
    <!-- fixed-top d-flex align-items-center header-transparent -->
    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle text-white" href="<?php echo site_url('home') ?>"  role="button" >
                <i class="fas fa-home fa-fw" ></i> Home</a>
        </li>
    </ul>
     <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle text-white" href="<?php echo site_url('welcome/saran') ?>"  role="button" >
                <i class="fas fa-envelope-open -circle fa-fw"></i> KRITIK & SARAN</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle text-white" href="<?php echo site_url('login') ?>"  role="button" >
                <i class="fas fa-user-circle fa-fw " ></i> LOGIN</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle text-white" href="<?php echo site_url('register') ?>"  role="button" >
                <i class="fas fa-plus fa-fw " ></i> Register</a>
        </li>
    </ul>

</nav>