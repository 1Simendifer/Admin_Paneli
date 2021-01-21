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
                <h3 class="card-title">Sosyal Medya Ayarları</h3>
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
                    <label for="exampleInputEmail1">İnstagram</label>
                    <input name="instagram" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $ayarcek['instagram'] ?>" placeholder="İnstagram Adresinizi Giriniz...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Youtube</label>
                    <input name="youtube" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $ayarcek['youtube'] ?>" placeholder="Youtube Adresinizi Giriniz...">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="sguncelle" type="submit" class="btn btn-primary">Gönder</button>
                </div>
              </form>
            </div>

</div>
<?php require 'footer.php'; ?>