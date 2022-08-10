<?php
include "koneksi.php";
$sql="select * from tbl_alternatif where id_alternatif='$_GET[id_alternatif]'";
$hasil=mysqli_query($koneksi,$sql);
$row=mysqli_fetch_array($hasil);
?>
<div class="col-10">
 <h3>Edit Alternatif</h3>
 <form action="alternatif/aksi_edit_alternatif.php" method="POST">
   <div class="form-group row">
     <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
     <div class="col-sm-10">
     <input type="hidden" name="id_alternatif" value="<?php echo $row['id_alternatif'] ?>">
       <input type="text"  class="form-control" name="nama" value="<?php echo $row['nama'] ?>">
     </div>
   </div>
   <div class="form-group row">
     <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
     <div class="col-sm-10">
       <input type="text" class="form-control" name="alamat" value="<?php echo $row['alamat'] ?>">
     </div>
   </div>
   <div class="form-group row">
     <label for="inputPassword" class="col-sm-2 col-form-label">No. Telp</label>
     <div class="col-sm-10">
       <input type="number" class="form-control" name="no_telp" value="<?php echo $row['no_telp'] ?>">
     </div>
   </div>
   <div class="form-group row">
     <label for="inputPassword" class="col-sm-2 col-form-label"></label>
     <div class="col-sm-10">
       <input type="submit" class="btn btn-success" value="Simpan">
     </div>
   </div>
 </form>
</div>