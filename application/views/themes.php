<?php defined('BASEPATH') OR exit('No direct script access allowed');
$user=$this->session->userdata['riset2018']['user'];?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title ?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css') ?>"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>"/>
  <script src="<?php echo base_url('assets/jquery-3.2.1.min.js');?>"></script>
  <script src="<?php echo base_url('assets/popper/popper.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap-notify.min.js');?>"></script>
  <script src="<?php echo base_url('assets/sweetalert.min.js');?>"></script>
  <script src="<?php echo base_url('assets/dataTables/jquery.dataTables.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/dataTables/dataTables.bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/select2.min.js');?>"></script>
</head>
<body class="app sidebar-mini">
  <header class="app-header"><a class="app-header__logo" href="">TSUKAMOTO</a>
    <a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>
    <ul class="app-nav">
      <!-- <li><?php echo anchor('auth/edit_user/'.$user,'<i class="fa fa-user fa-lg"></i>',array('class'=>'app-nav__item'));?></li> -->
      <li><a class="app-nav__item" href="<?php echo site_url('logout');?>"><i class="fa fa-power-off fa-lg"></i></a></li>
    </ul>
  </header>

  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" width="48px" height="48px" src="<?php echo base_url('images/logo.png') ?>" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><?php echo $user ?></p>
          <!-- <p class="app-sidebar__user-designation">Frontend Developer</p> -->
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item <?php echo activate_menu('home'); ?>" href="<?php echo site_url('home');?>">
          <i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Beranda</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
          <i class="app-menu__icon fa fa-database"></i><span class="app-menu__label">Master Data</span>
          <i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <!-- <li><a class="treeview-item <?php echo activate_menu('admin'); ?>" href="<?php echo site_url('admin') ?>"><i class="icon fa fa-circle-o"></i> Admin</a></li> -->
            <li><a class="treeview-item <?php echo activate_menu('siswa'); ?>" href="<?php echo site_url('siswa') ?>"><i class="icon fa fa-circle-o"></i> Data Siswa</a></li>
            <li><a class="treeview-item <?php echo activate_menu('penjurusan'); ?>" href="<?php echo site_url('penjurusan') ?>"><i class="icon fa fa-circle-o"></i> Penjurusan</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item <?php echo activate_menu('report'); ?>" href="<?php echo site_url('report');?>">
          <i class="app-menu__icon fa fa-print"></i><span class="app-menu__label">Report</span></a></li>
      </ul>
    </aside>
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><?php echo $title ?></h1>
        <p>Sekolah Menengah Atas</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#"><?php echo $title ?></a></li>
      </ul>
    </div>
    <?php echo $_content; ?>
  </main>
  <script src="<?php echo base_url('assets/main.js'); ?>"></script>
</body>
</html>