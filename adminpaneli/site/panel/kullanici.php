<?php require 'header.php'; ?>

<section>
  <div class="content">
  </div>
</section>        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 style="font-size: 30px;font-weight: bold" class="card-title">Kullanıcı Düzenleme İşlemleri</h3>
                  <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  </div>
                </div>
              </div>

              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Adı-Soyadı</th>
                      <th>Kullanıcı Adı</th>
                      <th>Şifre</th>
                      <th style="float:right;"><a href="kullaniciekle.php"><button style="width: 145px" class="btn btn-primary">Kullanıcı Ekle</button></a></th>
                    </tr>
                  </thead>
                  <tbody>


<?php 

$kullanici=$baglanti->prepare("SELECT * from kullanici ");
$kullanici->execute();
while ($kullanicicek=$kullanici->fetch(PDO::FETCH_ASSOC)) {


?>


                    <tr>
                      <td><?php echo $kullanicicek['adsoyad']?></td>
                      <td><?php echo $kullanicicek['kadi']?></td>
                      <td><?php echo $kullanicicek['sifre']?></td>
                      <td style="float:right;">
                      <form action="islem/islem.php" method="POST">        
                        <input type="hidden" name="id" value="<?php echo $kullanicicek['id'] ?>">
                        <button name="kullanicisil" class="btn btn-danger">Sil</button>
                      </form>
                      </td>

                      
                    </tr>
<?php } ?>
                  </tbody>
                  <?php if ($_GET['durum']=="kullanicivar") { ?>

                  <h4 style="color: red; margin-left: 20px" >Kullanıcı Zaten Kayıtlı...</h4>

                <?php } ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

</div>
<?php require 'footer.php'; ?>