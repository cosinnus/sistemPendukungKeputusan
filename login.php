<!DOCTYPE html>
<html>
<head>
 <title>Login</title>
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 <style type="text/css">
  .login{
   min-height: 250px;
   background-color: mediumseagreen;
   margin: 20px;
  }
 </style>
</head>
<body>
<div class="container">
 <div class="row d-flex justify-content-center">
  <div class="col-5">
   <div class="login border border-dark rounded">
    <form action="aksi_login.php" method="POST">
     <table style="margin: 10px; width: 90%" cellpadding="1" border="0">
      <h3 align="center" style="margin: 10px">LOGIN dulu</h3>
      <tr>
       <td>Username</td>
       <td>:</td>
       <td>
          <div class="form-group">
            <input class="form-control" type="text" name="username" placeholder="Isilah username Anda">
          </div>
       </td>
      </tr>
      <tr>
       <td>Password</td>
       <td>:</td>
       <td><input class="form-control" type="password" name="password" placeholder="password jangan salah"></td>
      </tr>
      <tr>
       <td></td>
       <td></td><br>
       <td><br>       
         <input class="btn btn-primary" type="submit" name="" value="LOGIN">
         <input class="btn btn-warning" type="reset" name="" value="Ulangi">
       </td>
      </tr>
     </table>
    </form>
   </div>
  </div>
 </div>
</div>
</body>
<script type="text/javascript" src="js/bootstrap.js"></script>
</html>