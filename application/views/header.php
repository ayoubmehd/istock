<?php

  if($this->uri->segment(1) == '')
    $pageTitle = 'Home';
  elseif($this->uri->segment(2) == '')
    $pageTitle = $this->uri->segment(1);
  else $pageTitle = str_replace($this->uri->segment(1), 'c', '') . ' - ' . $this->uri->segment(2);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets') ?>/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url('assets') ?>/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    <?php echo $pageTitle ?>
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url('assets') ?>/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url('assets') ?>/demo/demo.css" rel="stylesheet" />
  <!-- CSS Custom Table -->
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/my-custom.css" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?php echo base_url('assets') ?>/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="<?php echo base_url('index.php') ?>" class="simple-text logo-normal">
          IStock
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item <?php echo ($this->uri->segment(1)=='') ? 'active' : '' ?> ">
            <a class="nav-link" href="<?php echo base_url('index.php') ?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item <?php echo ($this->uri->segment(1)=='Clientc') ? 'active' : '' ?>  ">
            <a class="nav-link" href="<?php echo base_url('index.php/Clientc') ?>">
              <i class="material-icons">person</i>
              <p>Clients</p>
            </a>
          </li>
          <li class="nav-item <?php echo ($this->uri->segment(1)=='Fournisseurc') ? 'active' : '' ?>  ">
            <a class="nav-link" href="<?php echo base_url('index.php/Fournisseurc') ?>">
              <i class="material-icons">content_paste</i>
              <p>Fornisserurs</p>
            </a>
          </li>
          <li class="nav-item <?php echo ($this->uri->segment(1)=='Produitc') ? 'active' : '' ?> ">
            <a class="nav-link" href="<?php echo base_url('index.php/Produitc') ?>">
              <i class="material-icons">library_books</i>
              <p>Produit</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Table List</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <a class="nav-link" href="<?php echo base_url('index.php') ?>">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <?php if($this->session->userdata('user')['username']): ?>
                  <a class="dropdown-item" href="#"><?php echo $this->session->userdata('user')['username'] ?></a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo base_url('index.php/User/Logout') ?>">Log out</a>
                  <?php else: ?>
                    <a class="dropdown-item" href="<?php echo base_url('index.php/User/Login') ?>">Login</a>
                  <?php endif; ?>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->