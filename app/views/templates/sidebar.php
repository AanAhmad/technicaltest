<?php
$nama = $_SESSION['name'];
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url; ?>" class="brand-link">
      <img src="<?=base_url?>/dist/img/r_logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Rent Car</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?= base_url; ?>" class="d-block"><?=$nama?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url; ?>/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item admin">
            <a href="<?= base_url; ?>/kendaraan" class="nav-link">
              <i class="nav-icon fas fa-car"></i>
              <p>
                Kendaraan
              </p>
            </a>
          </li>
          <li class="nav-item admin">
            <a href="<?= base_url; ?>/booking" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
               Booking
              </p>
            </a>
          </li>
          <li class="nav-item user">
            <a href="<?= base_url; ?>/order" class="nav-link">
              <i class="nav-icon fas fa-inbox"></i>
              <p>
               Order
              </p>
            </a>
          </li>
          <li class="nav-item admin">
            <a href="<?= base_url; ?>/driver" class="nav-link">
            <i class="nav-icon fas fa-id-card"></i>
              <p>
               Driver
              </p>
            </a>
          </li>
          <li class="nav-item admin">
            <a href="<?= base_url; ?>/fuel" class="nav-link">
            <i class="nav-icon fas fa-gas-pump"></i>
              <p>
               Bahan Bakar
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>