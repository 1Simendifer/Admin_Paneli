<?php require 'header.php'; 



?>

<section>
  <div class="content">
  </div>
</section><div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Site Ayarları</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

<?php

if ($_GET['durum']=="basarili") { ?>

<h4 style="color:green; margin-left: 10px; margin-top: 10px">İşlem Başarılı</h4>

<?php
}elseif ($_GET['durum']=="hata") { ?>

<h4 style="color:red; margin-left: 10px; margin-top: 10px">İşlem Başarısız</h4>
  <?php
}

?>
              
              <form action="islem/islem.php" method="POST" enctype="multipart/form-data" role="form">
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Ad Soyad</label>
                    <input name="adsoyad" type="text" class="form-control" id="exampleInputEmail1" value="" placeholder="Adınızı ve Soyadınızı Giriniz...">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Kullanıcı Adı</label>
                    <input name="kadi" type="text" class="form-control" id="exampleInputEmail1" value="" placeholder="Kullanıcı Adınızı Giriniz...">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Şifre</label>
                    <input name="sifre" type="text" class="form-control" id="exampleInputEmail1" value="" placeholder="Şifrenizi Giriniz...">
                  </div>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="kullaniciekle" type="submit" class="btn btn-primary">Gönder</button>
                </div>
              </form>
            </div>

</div>
<?php require 'footer.php'; ?>