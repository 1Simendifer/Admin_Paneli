<?php require 'header.php'; 
error_reporting(0);
$ayar=$baglanti->prepare("SELECT * from ayar where id=?");
$ayar->execute(array(1));
$ayarcek=$ayar->fetch(PDO::FETCH_ASSOC);


?>

<section class="content">
  <div class="row">
  </div>
</section>  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Site Ayarları</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->




            <form action="islem/islem.php" enctype="multipart/form-data" method="POST" role="form">
              <div class="card-body">
                <input type="hidden" name="resim" value="<?php echo $ayarcek['logo'] ?>">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Varolan Resim</label>
                    <img style="width: 200px" src="resimler/logo/<?php echo $ayarcek['logo'] ?>">

                    </div>   <div class="form-group">
                    <label for="exampleInputEmail1">Değiştir</label>
                    <input name="resim" type="file" class="form-control" id="exampleInputEmail1">
                  </div>

                  <button style="float: right;" class="btn btn-success" name="logokaydet">Resmi Kaydet</button>
            </form>
            <br>
            <br>

                <form action="islem/islem.php" method="POST" role="form">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Başlık</label>
                    <input name="baslik" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $ayarcek['baslik'] ?>" placeholder="Sitenizin Başlığını Giriniz...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Açıklama</label>
                    <input name="aciklama" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $ayarcek['aciklama'] ?>" placeholder="Sitenizin Açıklamasını Giriniz...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Anahtar Kelime</label>
                    <input name="anahtar" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $ayarcek['anahtar'] ?>" placeholder="Sitenizin Anahtar Kelimesini Giriniz...">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="guncelle" type="submit" class="btn btn-success">Gönder</button>
                </div>
              </form>
            </div>
</div>
<?php require 'footer.php'; ?>