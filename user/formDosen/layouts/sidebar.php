<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="polinema.png" alt="POLISURVEI Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">POLISURVEI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">
            
          </a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="index.php" class="nav-link <?php echo ($menu == 'beranda')? 'active' : '' ?>">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="profil.php" class="nav-link <?php echo ($menu == 'profil')? 'active' : '' ?>">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profil
              </p>
            </a>
          </li>          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-clipboard"></i>
              <p>
                Isi Survei
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="psdmdosen.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sistem Pengelolaan Sumber Daya Manusia</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pkdosen.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sistem Pengelolaan Keuangan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pspdosen.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sistem Pengelolaan Sarana dan Prasarana</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pkpdosen.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sistem Pengelolaan Kegiatan Penelitian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pkpmdosen.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sistem Pengelolaan Kegiatan Pengabdian kepada Masyarakat</p>
                </a>
              </li>
            </ul>        
            

    
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>