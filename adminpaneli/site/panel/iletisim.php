<?php require 'header.php'; 

$ayar=$baglanti->prepare("SELECT * from ayar where id=?");
$ayar->execute(array(1));
$ayarcek=$ayar->fetch(PDO::FETCH_ASSOC);

?>

<section>
  <div class="content">
  </div>
</section><div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">İletişim Ayarları</h3>
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
              
              <form action="islem/islem.php" method="POST" role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">E-mail</label>
                    <input name="gmail" type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $ayarcek['gmail'] ?>" placeholder="E-mail Adresinizi Giriniz...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Telefon</label>
                    <input name="telefon" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $ayarcek['telefon'] ?>" placeholder="Telefon Bilgilerinizi Giriniz...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Adres</label>
                    <input name="adres" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $ayarcek['adres'] ?>" placeholder="Adres Bilgilerinizi Giriniz...">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="iguncelle" type="submit" class="btn btn-primary">Gönder</button>
                </div>
              </form>
            </div>

</div>
<?php require 'footer.php'; ?>