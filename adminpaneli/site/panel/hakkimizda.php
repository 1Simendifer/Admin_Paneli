<?php require 'header.php'; 

$hakkimizda=$baglanti->prepare("SELECT * from hakkimizda where id=?");
$hakkimizda->execute(array(0));
$hakkimizdacek=$hakkimizda->fetch(PDO::FETCH_ASSOC);


?>

<section class="content">
  <div class="row">
  </div>
</section>  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Hakkımızda Ayarları</h3>
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
                    <label for="exampleInputEmail1">Başlık</label>
                    <input name="baslik" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $hakkimizdacek['baslik'] ?>" placeholder="Sitenizin Başlığını Giriniz...">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Açıklama</label>
                    <input name="aciklama" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $hakkimizdacek['aciklama'] ?>" placeholder="Sitenizin Açıklamasını Giriniz...">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Vizyon</label>
                    <input name="vizyon" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $hakkimizdacek['vizyon'] ?>" placeholder="Sitenizin Anahtar Kelimesini Giriniz...">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Misyon</label>
                    <input name="misyon" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $hakkimizdacek['misyon'] ?>" placeholder="Sitenizin Başlığını Giriniz...">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Yapılan Projeler</label>
                    <input name="yapilan" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $hakkimizdacek['yapilan'] ?>" placeholder="Sitenizin Başlığını Giriniz...">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Çalışan Sayısı</label>
                    <input name="isci" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $hakkimizdacek['isci'] ?>" placeholder="Sitenizin Başlığını Giriniz...">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Şehirler</label>
                    <input name="sehir" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $hakkimizdacek['sehir'] ?>" placeholder="Sitenizin Başlığını Giriniz...">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Projeler</label>
                    <input name="proje" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $hakkimizdacek['proje'] ?>" placeholder="Sitenizin Başlığını Giriniz...">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="hguncelle" type="submit" class="btn btn-success">Gönder</button>
                </div>
              </form>
            </div>
</div>
<?php require 'footer.php'; ?>