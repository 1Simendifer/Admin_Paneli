<?php require 'header.php'; ?>

   <div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner3.jpg)">
      <div class="banner-text">
         <div class="container">
            <div class="row">
               <div class="col-xs-12">
                  <div class="banner-heading">
                     <h1 class="banner-title">İLETİŞİM BİLGİLERİ</h1>
                     
                  </div>
               </div><!-- Col end -->
            </div><!-- Row end -->
         </div><!-- Container end -->
      </div><!-- Banner text end -->
   </div><!-- Banner area end --> 


  <section id="main-container" class="main-container">
      <div class="container">

         <div class="row text-center">
            <h3 class="section-sub-title">BİZİMLE İLETİŞİME GEÇİN...</h3>
            <h2 class="section-title"></h2>
            
         </div><!--/ Title row end -->

         <div class="row">
            <div class="col-md-4">
               <div class="ts-service-box-bg text-center">
                  <span class="ts-service-icon icon-round">
                     <i class="fa fa-map-marker"></i>
                  </span>
                  <div class="ts-service-box-content">
                     <h4 style="text-transform: capitalize;">Adresimiz</h4>
                     <p><?php echo $ayarcek['adres'] ?></p>
                 </div>
               </div>
            </div><!-- Col 1 end -->

            <div class="col-md-4">
               <div class="ts-service-box-bg text-center">
                  <span class="ts-service-icon icon-round">
                     <i class="fa fa-envelope"></i>
                  </span>
                  <div class="ts-service-box-content">
                     <h4 style="text-transform: capitalize;">Email Bilgilerimiz</h4>
                     <p><?php echo $ayarcek['gmail'] ?></p>
                 </div>
               </div>
            </div><!-- Col 2 end -->

            <div class="col-md-4">
               <div class="ts-service-box-bg text-center">
                  <span class="ts-service-icon icon-round">
                     <i class="fa fa-phone-square"></i>
                  </span>
                  <div class="ts-service-box-content">
                     <h4 style="text-transform: capitalize;">Telefon Numaramız</h4>
                     <p><?php echo $ayarcek['telefon'] ?></p>
                 </div>
               </div>
            </div>

            <div class="gap-60"></div>
            <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d196279.019517971!2d30.404730377605865!3d39.76525880143579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cc3e08220c0e5f%3A0xbc89395938049a08!2sEski%C5%9Fehir!5e0!3m2!1str!2str!4v1610711221069!5m2!1str!2str" width="1180" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
            <div class="gap-60"></div>
         </div>
         </div>
      </div>
   </section>
	

   <?php require 'footer.php'; ?>