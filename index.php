<?php
session_start();
if (!isset($_SESSION['id_admin'])) {
 header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>Sistem Pendukung Keputusan</title>
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
 <div class="container-fluid">
  <div class="row">
   <div class="col-12">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: cyan">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#" style="color: white; font-weight: bold">SistemPendukungKeputusan</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="index.php?halaman=home" style="font-weight: bold">Beranda <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?halaman=data" style="font-weight: bold">Data Alternatif</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?halaman=penilaian" style="font-weight: bold">Penilaian</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?halaman=rangking" style="font-weight: bold">Rangking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?halaman=bobot" style="font-weight: bold">Bobot</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php" style="font-weight: bold">Logout</a>
          </li>
          <!--li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li-->
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Carilah" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
        </form>
      </div>
    </nav>  
   </div>
  </div>
  <div class="row" style="margin-top:10px">
   <div class="col-2">
   <div class="alert alert-success" style="min-height: 550px">
   Selamat datang admin. Telitilah sebelum memberi nilai!!
   </div>
   </div>
  <?php
  include "konten.php";
  ?>
  </div>
  <div class="row">
   <div class="col-12">
    <div class="d-flex justify-content-center">
     &copy;Copyright Bays <?php echo date('Y'); ?>
    </div>
   </div>
  </div>
  
 </div>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript">
 $('.carousel').carousel({
  interval: 2000
});
</script>
</html>