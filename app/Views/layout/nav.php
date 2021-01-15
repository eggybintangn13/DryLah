<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?= base_url('foto/' . session()->get('foto_user')) ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?= session()->get('nama_user') ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> <?php if (session()->get('level') == 1) {
                                                                echo 'Owner';
                                                              } elseif (session()->get('level') == 2) {
                                                                echo 'Admin';
                                                              } else {
                                                                echo 'Pelanggan';
                                                              } ?></a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <?php if (session()->get('level') == 1) { ?>
        <li>
          <a href="<?= base_url('user') ?>">
            <i class="fa fa-user"></i> <span>User</span>
          </a>
        </li>

        <!-- order owner -->
        <li>
          <a href="../widgets.html">
            <i class="fa fa-clone"></i> <span>Order</span>
          </a>

        <li>
          <a href="../widgets.html">
            <i class="fa fa-file"></i> <span>Laporan</span>
          </a>
        </li>
      <?php } ?>
      <?php if (session()->get('level') == 2) { ?>
        <!-- order admin -->
        <li>
          <a href="<?= base_url('orderadmin')?>">
            <i class="fa fa-clone"></i> <span>Order</span>
          </a>
        </li>
      <?php } ?>

      <?php if (session()->get('level') == 3) { ?>
        <!-- order user -->
        <li>
          <a href="<?= base_url('order') ?>">
            <i class="fa fa-clone"></i> <span>Order</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url('orderuser') ?>">
            <i class="fa fa-clone"></i> <span>Your Order</span>
          </a>
        </li>
      <?php } ?>


    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?= $title ?>
    </h1>
    <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol> -->
  </section>

  <!-- Main content -->
  <section class="content">