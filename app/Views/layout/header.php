<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <p class="logo">
      <b>DryLah</b>
    </p>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?= base_url('foto/'.session()->get('foto_user')) ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?= session()->get('nama_user') ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?= base_url('foto/'.session()->get('foto_user')) ?>" class="img-circle" alt="User Image">

                <p>
                  <?= session()->get('nama_user') ?> - 
                  <?= session()->get('email') ?>
                  <br> 
                  <?php if (session()->get('level') == 1) 
                  {
                    echo 'Owner';
                  }elseif (session()->get('level') == 2) {
                    echo 'Admin';
                  }else {
                    echo 'Pelanggan';
                  }?>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <!-- <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div> -->
                <div class="pull-right">
                  <a href="<?= base_url('Auth/logout')?>" class="btn btn-danger btn-flat">Keluar</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->
