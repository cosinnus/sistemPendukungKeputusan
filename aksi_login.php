<?php
include "koneksi.php";
$username=$_POST['username'];
$password=$_POST['password'];
$hasil=mysqli_query($koneksi,"SELECT * FROM tbl_admin WHERE username = '$username' AND password = '$password'");
$row=mysqli_fetch_array($hasil);
if ($row['id_admin']<>"") {
 session_start();
 $_SESSION['id_admin']=$row['id_admin'];
 $_SESSION['nama']=$row['nama'];
 header("location:index.php");
}else{
 header("location:login.php?pesan=gagal_login");
}
?>
