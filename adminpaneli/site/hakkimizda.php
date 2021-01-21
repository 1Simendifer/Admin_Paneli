<?php require 'header.php'; 

$hakkimizda=$baglanti->prepare("SELECT * from hakkimizda where id=?");
$hakkimizda->execute(array(0));
$hakkimizdacek=$hakkimizda->fetch(PDO::FETCH_ASSOC);

?>




   <section id="main-container" class="main-container">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <h3 class="column-title"><?php echo $hakkimizdacek['baslik'] ?></h3>
               <p><?php echo $hakkimizdacek['aciklama'] ?></p>
               <blockquote><p><?php echo $hakkimizdacek['vizyon'] ?></p></blockquote>
               <blockquote><p><?php echo $hakkimizdacek['misyon'] ?></p></blockquote>

            </div><!-- Col end -->

          
         </div><!-- Content row end -->

      </div><!-- Container end -->
   </section><!-- Main container end -->

   <section id="facts" class="facts-area dark-bg">
      <div class="container">
         <div class="row">
            <div class="facts-wrapper">
               <div class="col-sm-3 ts-facts">
                  <div class="ts-facts-img">
                     <img src="images/icon-image/fact1.png" alt="" />
                  </div>
                  <div class="ts-facts-content">
                     <h2 class="ts-facts-num"><span class="counterUp"><?php echo $hakkimizdacek['yapilan'] ?></span></h2>
                     <h3 class="ts-facts-title">TOPLAM PROJE</h3>
                  </div>
               </div><!-- Col end -->

               <div class="col-sm-3 ts-facts">
                  <div class="ts-facts-img">
                     <img src="images/icon-image/fact2.png" alt="" />
                  </div>
                  <div class="ts-facts-content">
                     <h2 class="ts-facts-num"><span class="counterUp"><?php echo $hakkimizdacek['isci'] ?></span></h2>
                     <h3 class="ts-facts-title">ÇALIŞANLARIMIZ</h3>
                  </div>
               </div><!-- Col end -->

               <div class="col-sm-3 ts-facts">
                  <div class="ts-facts-img">
                     <img src="images/icon-image/fact3.png" alt="" />
                  </div>
                  <div class="ts-facts-content">
                     <h2 class="ts-facts-num"><span class="counterUp"><?php echo $hakkimizdacek['proje'] ?></span></h2>
                     <h3 class="ts-facts-title">DEVAM EDEN PROJELER</h3>
                  </div>
               </div><!-- Col end -->

               <div class="col-sm-3 ts-facts">
                  <div class="ts-facts-img">
                     <img src="images/icon-image/fact4.png" alt="" />
                  </div>
                  <div class="ts-facts-content">
                     <h2 class="ts-facts-num"><span class="counterUp"><?php echo $hakkimizdacek['sehir'] ?></span></h2>
                     <h3 class="ts-facts-title">ŞEHİR</h3>
                  </div>
               </div><!-- Col end -->

            </div> <!-- Facts end -->
         </div><!--/ Content row end -->
      </div><!--/ Container end -->
   </section><!-- Facts end -->

   <section id="ts-team" class="ts-team">
      <div class="container">
         <div class="row text-center">
            <h2 class="section-title"></h2>
            <h3 class="section-sub-title">EKİBİMİZ</h3>
         </div><!--/ Title row end -->

         <div class="row">

            <div id="team-slide" class="owl-carousel owl-theme team-slide">
               <div class="item">
                  <div class="ts-team-wrapper">
                     <div  class="team-img-wrapper">
                        <img align="center" alt="" src="images/team/resim.jpg" class="img-responsive">
                     </div>
                     <div class="ts-team-content">
                        <h3 class="ts-name"><?php echo $hakkimizdacek['baslik'] ?></h3>
                        <p class="ts-designation">13 Haziran 1998 yılında Eskişehir'de doğdum.</p>
                        
                     </div>
                  </div><!--/ Team wrapper end -->
               </div><!-- Team 1 end -->


            </div><!-- Team slide end -->

         </div><!--/ Content row end -->
      </div><!--/ Container end -->
   </section><!--/ Team end -->
	
<?php require 'footer.php'; ?>
   