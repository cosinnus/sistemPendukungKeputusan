<?php
$nama =$_POST['nama'];
$alamat =$_POST['alamat'];
$no_telp =$_POST['no_telp'];
include "../koneksi.php";
$sql="insert into tbl_alternatif (nama, alamat, no_telp) 
values ('$nama','$alamat','$no_telp')";
$hasil=mysqli_query($koneksi,$sql);
//echo "$sql";
if ($hasil) {
 header("location:../index.php?halaman=data&pesan=tambah_sukses");
}else
{
 header("location:../index.php?halaman=data&pesan=tambah_gagal");
}
?>
