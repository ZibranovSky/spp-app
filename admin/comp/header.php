<?php require 'fungsi/fungsi.php'; ?>

    <?php foreach (summon_admin() as $adm): ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Icon -->
    <link rel="icon" type="image/png" href="<?=url()?>images/logo_spp_64x64.png">
    <!-- Title Page-->
    <title><?=$judul;?></title>

    <!-- Fontfaces CSS-->
    <link href="<?=url()?>css/font-face.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?=url()?>vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- <?=url()?>Vendor CSS-->
    <link href="<?=url()?>vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?=url()?>css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <div class="img-cir">
                             <a href="#">
                            <?= gambar("logo_spp.png", "50") ?>
                        </a>
                        </div>
                        <!-- Bulan -->
                       <h1 class="ml-4" style="color: green;"><?=bulan_sekarang("white")?></h1>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li class="has-sub">
                                <a href="index.php">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard
                                    <span class="bot-line"></span>
                                </a>
                               
                            </li>
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fa fa-compass" aria-hidden="true"></i>
                                    <span class="bot-line"></span>Data Master</a>

                                               <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="?m=siswa">Data Siswa <span class="bot-line"></span></a>
                                    </li>
                                    <li>
                                        <a href="?m=kelas">Data Kelas <span class="bot-line"></span></a>
                                    </li>
                                    <li>
                                        <a href="?m=prodi">Program Studi <span class="bot-line"></span></a>
                                    </li>
                                    <li>
                                        <a href="?m=tapel">Tahun Pelajaran <span class="bot-line"></span></a>
                                    </li>
                                    <li>
                                        <a href="?m=jenis_bayar">Data Jenis Pembayaran <span class="bot-line"></span></a>
                                    </li>
                                    <li>
                               
                                </ul>
                            </li>
                  
                            <li class="has-sub">
                                <a href="?m=bayar">
                                    <i class="fa fa-credit-card" aria-hidden="true"></i>
                                    <span class="bot-line"></span>Pembayaran</a>
                               
                            </li>
                            <li class="has-sub">
                                <a href="#">
                                  <i class="fa fa-book" aria-hidden="true"></i>
                                    <span class="bot-line"></span>Laporan</a>
                                      <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="?m=tagihan">Tagihan<span class="bot-line"></span></a>
                                    </li>
                              
                                    
                               
                                </ul>
                            </li>
         
                        </ul>
                    </div>
                    <div class="header__tool">
                       
                       
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <div class="img-cir">
                                                   <?=gambar("admin_logoZ.jpg", "64");?>
                                               </div>
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#"><?=$adm['nama'];?></a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                               <div class="img-cir">
                                                   <?=gambar("admin_logoZ.jpg", "64");?>
                                               </div>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#"><?=$adm['nama'];?></a>
                                            </h5>
                                          
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                       <div class="account-dropdown__item">
                                    <a href="?m=admin&s=akun">
                                        <i class="zmdi zmdi-account"></i>Akun</a>
                                </div>
                                        <!-- <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Pengaturan</a>
                                        </div> -->
                                      
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="fungsi/logout.php">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <div class="img-cir">
                             <a class="logo" href="index.html">
                           <?= gambar("logo_spp_64x64.png", "60")?>
                        </a>
                        </div>
                       
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                      
                        <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard
                                    <span class="bot-line"></span>
                                </a>
                               
                            </li>

                  <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Data Master</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                               <li>
                                        <a href="?m=siswa">Data Siswa</a>
                                    </li>
                                    <li>
                                        <a href="?m=tapel">Tahun Pelajaran</a>
                                    </li>
                                    <li>
                                        <a href="?m=prodi">Program Studi</a>
                                    </li>
                                   
                                    <li>
                                        <a href="?m=kelas">Data Kelas</a>
                                    </li>
                                    <li>
                                        <a href="?m=jenis_bayar">Data Jenis Pembayaran</a>
                                    </li>
                            </ul>
                        </li>

                          <li class="has-sub">
                                <a href="?m=bayar">
                                    <i class="fa fa-credit-card" aria-hidden="true"></i>
                                    <span class="bot-line"></span>Pembayaran</a>
                               
                            </li>
                           
                  <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Laporan</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                               <li>
                                        <a href="?m=tagihan">Tagihan</a>
                                    </li>
                                  
                            </ul>
                        </li>
                      
                    </ul>
                </div>
            </nav>
        </header>
        <div class="sub-header-mobile-2 d-block d-lg-none">
            <div class="header__tool">
               

                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <div class="img-cir">
                                <?=gambar("logo_spp_64x64.png", "120")?>
                            </div>
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#"><?=$adm['nama'];?></a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                      <div class="img-cir">
                                          <?=gambar("logo_spp_64x64.png", "120")?>
                                      </div>  
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#"><?=$adm['nama'];?></a>
                                    </h5>
                               
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="?m=admin&s=akun">
                                        <i class="zmdi zmdi-account"></i>Account</a>
                                </div>
                               <!--  <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                </div> -->
                                
                            </div>
                            <div class="account-dropdown__footer">
                                <a href="fungsi/logout.php">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  <?php endforeach; ?>
        <!-- END HEADER MOBILE -->