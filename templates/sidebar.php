<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Manajemen Inventaris</title>
   <link rel="stylesheet" href="assets/css/custom.css">
   <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
   <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
   <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
</head>

<body id="page-top">

   <!-- Page Wrapper -->
   <div id="wrapper">

      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
         <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
            <div class="sidebar-brand-icon">
               <i class="fas fa-laptop"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Inventaris Kantor</div>
         </a>
         <hr class="sidebar-divider my-0">

         <!-- Menu -->
         <li class="nav-item">
            <a class="nav-link" href="index.php">
               <i class="fas fa-fw fa-tachometer-alt"></i>
               <span>Dashboard</span></a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="kategori.php">
               <i class="fas fa-fw fa-tags"></i>
               <span>Kategori</span></a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="barang.php">
               <i class="fas fa-fw fa-box"></i>
               <span>Barang</span></a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="pengambilan.php">
               <i class="fas fa-fw fa-clipboard-list"></i>
               <span>Pengambilan</span></a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="user.php">
               <i class="fas fa-fw fa-user"></i>
               <span>User</span></a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="log.php">
               <i class="fas fa-fw fa-history"></i>
               <span>Log Aktivitas</span></a>
         </li>
      </ul>
   </div>