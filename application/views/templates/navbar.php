<body style="background-color: #ffffff">

    <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid d-flex align-items-center">

      <a href="<?php echo base_url('dashboard') ?>" class="logo d-flex align-items-center  me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <i class="bi bi-camera"></i>
        <h1>Elta Store</h1>
      </a>

      <nav id="navbar" class="navbar me-auto">
        <ul>
          <li><a href="<?php echo base_url('kategori/pakaian_pria') ?>">Pakaian Pria</a></li>
          <li><a href="<?php echo base_url('kategori/pakaian_wanita') ?>">Pakaian Wanita</a></li>
          <li><a href="<?php echo base_url('kategori/aksesoris') ?>">Aksesoris</a></li>
          <li class="dropdown"><a href="#"><span>Pakaian Anak</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="<?php echo base_url('kategori/pakaian_anak_laki') ?>">Laki laki</a></li>
              <li><a href="<?php echo base_url('kategori/pakaian_anak_perempuan') ?>">Perempuan</a></li>
            </ul>
          </li>
          
        </ul>
      </nav><!-- .navbar -->

      <div class="header-social-links ms-auto">
        <form class="d-flex" role="search">
          <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search">
          <button type="button" style="background-color: #000000; border: none;">
            <i class="bi bi-search h2" style="color: #ffffff"></i>
          </button>
        </form>
      </div>

      

      <div class="header-social-links me-1">
        <a class="cart">
          <a href='<?php echo base_url('dashboard/detail_keranjang') ?>'>
            <i class="bi bi-cart2 h2"></i>
          </a>
          
          <span class="badge rounded-pill bg-danger">
            <?php $keranjang = $this->cart->total_items() ?>
            <?php echo ($keranjang) ?>
            <span class="visually-hidden">unread messages</span>
          </span>
        
        </a> 

        <a href="logout" class="profile">
          <!-- <i class="bi bi-person h2"></i> -->
          <i class="bi bi-box-arrow-left h2"></i>
        </a>

      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list ms-1"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>


    
    