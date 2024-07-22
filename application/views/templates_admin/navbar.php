<body style="background-color: #ffffff">

    <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid d-flex align-items-center">

      <a href="<?php echo base_url('admin/dashboard_admin') ?>" class="logo d-flex align-items-center  me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <i class="bi bi-camera"></i>
        <h1>Admin Elta</h1>
      </a>

      <nav id="navbar" class="navbar me-auto">
        <ul>
          <li><a href="<?php echo base_url('admin/data_barang') ?>">Data Barang</a></li>
          <li><a href="<?php echo base_url('admin/invoices') ?>">Invoices</a></li>
        </ul>
      </nav>

      <div class="header-social-links me-1">
        

        <a href="auth/logout" class="profile">
          <!-- <i class="bi bi-person h2"></i> -->
          <i class="bi bi-box-arrow-left h2"></i>
        </a>

      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list ms-1"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>


    
    