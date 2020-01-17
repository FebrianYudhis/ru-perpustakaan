<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $judul;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?= base_url();?>assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/metisMenu.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/typography.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/default-css.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/styles.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/responsive.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/datatables.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/clock.css">
    
    <!-- modernizr css -->
    <script src="<?= base_url();?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="body-bg">
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <div class="horizontal-main-wrapper">
        <div class="mainheader-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="<?= base_url();?>"><img src="<?= base_url();?>assets/images/icon/logo.jpg" alt="logo"></a>
                        </div>
                    </div>

                    <div class="col-md-9 clearfix text-right">
                        <div class="clearfix d-md-inline-block d-block">
                            <div class="user-profile m-0">
                                <img class="avatar user-thumb" src="<?= base_url();?>assets/images/author/avatar.png" alt="avatar">
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown"> 
                                    <?php
                                        $this->db->where('id_petugas',$this->session->userdata('id_petugas'));
                                        $petugas = $this->db->get('petugas')->row_array();
                                        echo $petugas['nama_petugas'];
                                    ?>
                                <i class="fa fa-angle-down"></i></h4>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="<?= base_url();?>kelola/profil">Profile</a>
                                    <a class="dropdown-item" href="<?= base_url();?>login/keluar">Keluar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-area header-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9  d-none d-lg-block">
                        <div class="horizontal-menu">
                            <nav>
                                <ul id="nav_menu">
                                    <li <?php if($aktif=='Dashboard'){echo 'class="active"';}?>>
                                        <a href="javascript:void(0)"><i class="ti-dashboard"></i><span>Dashboard</span></a>
                                        <ul class="submenu">
                                            <li><a href="<?= base_url();?>">Menu Utama</a></li>
                                        </ul>
                                    </li>
                                    <li <?php if($aktif=='Mahasiswa'){echo 'class="active"';}?>>
                                        <a href="javascript:void(0)"><i class="fa fa-user"></i>
                                            <span>Data Mahasiswa</span></a>
                                        <ul class="submenu">
                                            <li><a href="<?= base_url();?>kelola/lihatmahasiswa">Lihat Data Mahasiswa</a></li>
                                            <li><a href="<?= base_url();?>kelola/tambahmahasiswa">Tambah Data Mahasiswa</a></li>
                                        </ul>
                                    </li>
                                    <li <?php if($aktif=='Kategori'){echo 'class="active"';}?>>
                                        <a href="javascript:void(0)"><i class="fa fa-bookmark"></i>
                                            <span>Data Kategori</span></a>
                                        <ul class="submenu">
                                            <li><a href="<?= base_url();?>kelola/lihatkategori">Lihat Data Kategori</a></li>
                                            <li><a href="<?= base_url();?>kelola/tambahkategori">Tambah Data Kategori</a></li>
                                        </ul>
                                    </li>
                                    <li <?php if($aktif=='Buku'){echo 'class="active"';}?>>
                                        <a href="javascript:void(0)"><i class="fa fa-book"></i>
                                            <span>Data Buku</span></a>
                                        <ul class="submenu">
                                            <li><a href="<?= base_url();?>kelola/lihatbuku">Lihat Data Buku</a></li>
                                            <li><a href="<?= base_url();?>kelola/tambahbuku">Tambah Data Buku</a></li>
                                        </ul>
                                    </li>
                                    <li <?php if($aktif=='Pinjam'){echo 'class="active"';}?>>
                                        <a href="javascript:void(0)"><i class="fa fa-envelope"></i>
                                            <span>Data Peminjaman</span></a>
                                        <ul class="submenu">
                                            <li><a href="<?= base_url();?>kelola/lihatpeminjaman">Lihat Data Peminjaman</a></li>
                                            <li><a href="<?= base_url();?>kelola/tambahpeminjaman">Tambah Data Peminjaman</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12 d-block d-lg-none">
                        <div id="mobile_menu"></div>
                    </div>
                </div>
            </div>
        </div>