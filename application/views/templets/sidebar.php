<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('css/margo.css') ?>" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-14,5">
                    <i><img src="img/margo.jpg" alt="" width=35px></i>
                </div>
                <div class="sidebar-brand-text mx-1">MBS JT FAMILIA</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - My Profile -->
            <li class="nav-item">
                <a class="nav-link" href="<?php base_url('blank.html') ?> ">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dhasboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Tentang Mahasiswa
            </div>
            <!-- Nav Item - Info Mahasiswa -->
            <li class="nav-item">
                <a class="nav-link" href="/page/mahasiswa">
                    <i class="fas fa-user"></i>
                    <span>Info Mahasiswa</span></a>
            </li>

            <!-- Nav Item - Jadwal Semester 20212 -->
            <li class="nav-item">

                <a class="nav-link" href="/page/semester">
                    <i class="fas fa-user-edit"></i>
                    <span>Jadwal Semester 2021</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Logout -->
            <li class="nav-item">

                <a class="nav-link" href="/page/login">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>