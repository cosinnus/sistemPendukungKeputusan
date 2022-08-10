<?php
include "koneksi.php";
$slq="select `db_spk`.`tbl_alternatif`.`id_alternatif` AS `id_alternatif`,`db_spk`.`tbl_alternatif`.`nama` AS `nama`,`db_spk`.`tbl_nilai`.`c1` AS `c1`,`db_spk`.`tbl_nilai`.`c2` AS `c2`,`db_spk`.`tbl_nilai`.`c3` AS `c3`,`db_spk`.`tbl_nilai`.`c4` AS `c4`,`db_spk`.`tbl_nilai`.`id_nilai` AS `id_nilai` from (`db_spk`.`tbl_alternatif` left join `db_spk`.`tbl_nilai` on((`db_spk`.`tbl_alternatif`.`id_alternatif` = `db_spk`.`tbl_nilai`.`id_alternatif`)))";
$hasil=mysqli_query($koneksi,$slq);
?>
<div class="col-10">
 <?php
 if (isset($_GET['pesan'])) {
 ?>
 <div class="alert alert-info alert-dismissible fade show" role="alert">
   <strong>Pesan : </strong> Nilai berhasil diperbarui.
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div> 
 <?php
 }
 ?>
 <h3 style="float: left;"> &nbsp;Tabel Penilaian Alternatif</h3>
 <table class="table table-bordered">
  <thead>   
   <tr style="font-weight: bold">
    <td width="5%">No.</td>
    <td width="18%">Nama</td>
    <td width="13%">C1</td>
    <td width="13%">C2</td>
    <td width="13%">C3</td>
    <td width="13%">C4</td>
    
   </tr>
  </thead>
  <tbody>
   <?php
   $no=1;
   $i=0;
   while ($row=mysqli_fetch_array($hasil)) { 
   ?>
   <tr>
    <td><?php echo $no++?></td>
    <td><?php echo $row['nama']?></td>
    <form action="penilaian/aksi_penilaian.php" method="POST">
    <td>
     <input type="hidden" value="<?php echo $row['id_alternatif'] ?>" name="id_alternatif<?php echo $i;?>">
     <input type="hidden" value="<?php echo $row['id_nilai'] ?>" name="id_nilai<?php echo $i;?>">
     <input required="" class="form-control" type="text" value="<?php echo $row['c1']?>" name="c1<?php echo $i;?>">
    </td>
    <td><input required="" class="form-control" type="text" value="<?php echo $row['c2']?>" name="c2<?php echo $i;?>"></td>
    <td><input required="" class="form-control" type="text" value="<?php echo $row['c3']?>" name="c3<?php echo $i;?>"></td>
    <td><input required="" class="form-control" type="text" value="<?php echo $row['c4']?>" name="c4<?php echo $i;?>"></td>    
   </tr>
   <?php
   $i++;
   }
   ?>
   <tr>
    <td colspan="6">
     <input type="hidden" name="jumlah" value="<?php echo $i?>">
     <input type="submit" value="simpan" class="btn btn-success" name="simpan">
    </td>
   </tr>
   </form>
  </tbody>
 </table>
</div>