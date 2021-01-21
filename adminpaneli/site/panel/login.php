<?php
error_reporting(0);
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Paneli Giriş</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body style="background-color: white" class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a style="color: black" href="../../index2.html"><b>Admin</b>Panel</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div style="background-color: white" class="card-body login-card-body">
      <p style="color: blue" class="login-box-msg"></p>

      <?php if($_GET['durum']=="cikis") {
        ?> <h3 style="font-size: 20px">Çıkış Baraşılı...</h3>
      <?php } ?>

      <?php if($_GET['durum']=="izinsiz") {
        ?> <h3 style="font-size: 20px">İzinsiz Giriş. Lütfen Bilgilerinizi Giriniz...</h3>
      <?php } ?>

      <?php if($_GET['durum']=="hata") {
        ?> <h3 style="font-size: 20px">Hatalı Giriş. Lütfen Bilgilerinizi Kontrol Ediniz...</h3>
      <?php } ?>

      <form action="islem/islem.php" method="post">
        <div class="input-group mb-3">
          <input name="gmail" maxlength="40" type="email" class="form-control" placeholder="Email" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="sifre" type="password" class="form-control" placeholder="Şifre" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button name="kullanicigiris" style="width: 320px" type="submit" class="btn btn-info btn-block">Giriş Yap</button>
          </div>
        </div>
      </form>

      
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
