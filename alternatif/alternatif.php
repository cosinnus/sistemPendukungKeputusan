<?php
include "koneksi.php";
$slq="select * from tbl_alternatif";
$hasil=mysqli_query($koneksi,$slq);
?>
<div class="col-10">
 <a href="index.php?halaman=tambah_data">
 <input style="float: left;" type="button" class="btn btn-primary" value="Tambah" name="" style="margin-bottom:5px ">
 </a>
 <h3 style="float: left;"> &nbsp;Tabel Data Alternatif</h3>
 <table class="table table-bordered">
  <thead>   
   <tr style="font-weight: bold">
    <td width="5%">No.</td>
    <td width="30%">Nama</td>
    <td width="35%">Alamat</td>
    <td width="15%">No. Telp</td>
    <td width="15%">Aksi</td>
   </tr>
  </thead>
  <tbody>
   <?php
   $no=1;
   while ($row=mysqli_fetch_array($hasil)) {
   ?>
   <tr>
    <td><?php echo $no++?></td>
    <td><?php echo $row['nama']?></td>
    <td><?php echo $row['alamat']?></td>
    <td><?php echo $row['no_telp']?></td>
    <td>
     <a href="index.php?halaman=edit_data&id_alternatif=<?php echo $row['id_alternatif'] ?>">
     <input type="button" value="Edit" class="btn btn-warning" name="">
     </a>
     <a onclick="return confirm('Kamu Yakin?')" href="alternatif/aksi_hapus_alternatif.php?id_alternatif=<?php echo $row['id_alternatif'] ?>">
     <input type="button" value="Hapus" class="btn btn-danger" name="">
     </a>
    </td>
   </tr>
   <?php
   }
   ?>
  </tbody>
 </table>
</div>
