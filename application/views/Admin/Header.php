<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../bootstrap/css/adminlte.min.css">
    <link rel="stylesheet" href="../bootstrap/datatables-bs4/css/dataTables.bootstrap4.css">
    <title><?=$Halaman?></title>
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand bg-primary">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link text-light" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
              </li>
          </ul>
          <ul class="navbar-nav ml-auto">
              <a class="nav-link" href="<?=base_url('IDE/AdminSignOut')?>"> 
                  <i class="fas fa-user-lock text-light"><span class="text-light"> Logout</span></i>
              </a>
          </ul>
      </nav>
      <!-- /.navbar -->
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="" class="brand-link bg-primary">
        <img src="../img/Admin.png"
          alt="Logo"
          class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-bold">Dashboard</span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">      
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="<?=base_url("Admin/Surveyor")?>" class="nav-link <?php if ($Halaman == "Surveyor") { echo "active";} ?>">
              <i class="nav-icon fas fa-user-circle"></i>
              <p><b>Surveyor</b></p> 
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url("Admin/SurveiEkraf")?>" class="nav-link <?php if ($Halaman == "Survei Ekraf") { echo "active";} ?>">
              <i class="nav-icon fas fa-tasks"></i>
              <p><b>Survei Ekraf</b></p> 
              </a>
            </li>
          </ul>
        </nav>
        </div>
      </aside> 