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
                    <label for="exampleInputEmail1">Başlık</label>
                    <input name="baslik" type="text" class="form-control" id="exampleInputEmail1" value="" placeholder="Başlık Bilgilerinizi Giriniz...">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Açıklama</label>
                    <input name="aciklama" type="text" class="form-control" id="exampleInputEmail1" value="" placeholder="Açıklama Bilgilerinizi Giriniz...">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Link</label>
                    <input name="link" type="text" class="form-control" id="exampleInputEmail1" value="" placeholder="Link Bilgilerinizi Giriniz...">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Buton İsmi</label>
                    <input name="button" type="text" class="form-control" id="exampleInputEmail1" value="" placeholder="Buton İsmini Giriniz...">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Resim</label>
                    <input name="resim" type="file" class="form-control" id="exampleInputEmail1" value="" placeholder="Resim Bilgilerinizi Giriniz...">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Sıra</label>
                    <input name="sira" type="text" class="form-control" id="exampleInputEmail1" value="" placeholder="Sıra Bilgilerinizi Giriniz...">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="sliderekle" type="submit" class="btn btn-primary">Gönder</button>
                </div>
              </form>
            </div>

</div>
<?php require 'footer.php'; ?>