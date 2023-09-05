<aside class="main-sidebar sidebar-dark-primary elevation-4">
<a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">UIN HOTEL</span>
    </a>
<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                  <img src="template/images/<?php echo $_SESSION['images']; ?>" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                  <a href="#" class="d-block"><?php echo $_SESSION['nama']; ?></a>
                </div>
              </div>
          <li class="nav-header">MAIN NAVIGATION</li>
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Dashoard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Check In / Out
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?module=transaksi/checkin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Check In</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?module=transaksi/checkout" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Check Out</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?module=transaksi/checkin-list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Guest In-House</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Room Services
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?module=transaksi/pesan-layanan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Order Services</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?module=kamar/kamar-kotor" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Room Cleaning</p>
                </a>
              </li>
            </ul>
          </li>
          <?php if($_SESSION['batasan']<=3) { ?>
          <li class="nav-header">HOTEL ADMINISTRATION</li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Rooms
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?module=kamar/kamar-list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Rooms</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?module=kamar/tipe-list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Room Types</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Services
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?module=layanan/layanan-list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Services</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?module=layanan/kategori-list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Service Types</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="?module=tamu/tamu-list" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Guest Book
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="?module=user/user-list" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                User Manager
              </p>
            </a>
          </li>
          <?php if($_SESSION['batasan']==1) { ?>
          <li class="nav-item">
            <a href="?module=perusahaan/perusahaan" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Company
              </p>
            </a>
          </li>
          <?php } } ?>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Reports
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?module=laporan/transaksi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Room Transactions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?module=laporan/transaksi-layanan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Service Transactions</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Export To Excell
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="template/module/export/transaksi_checkout.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CheckIn/Out Transactions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="template/module/export/transaksi_layanan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Service Transactions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="template/module/export/layanan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Services</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="template/module/export/tamu.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Guest</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
</aside>