
<?php    

include 'header.php';
require 'slider.php';

?>
<br>
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
                     <h3 class="ts-facts-title">Toplam proje</h3>
                  </div>
               </div><!-- Col end -->

               <div class="col-sm-3 ts-facts">
                  <div class="ts-facts-img">
                     <img src="images/icon-image/fact2.png" alt="" />
                  </div>
                  <div class="ts-facts-content">
                     <h2 class="ts-facts-num"><span class="counterUp"><?php echo $hakkimizdacek['isci'] ?></span></h2>
                     <h3 class="ts-facts-title">Çalışanlarımız</h3>
                  </div>
               </div><!-- Col end -->

               <div class="col-sm-3 ts-facts">
                  <div class="ts-facts-img">
                     <img src="images/icon-image/fact3.png" alt="" />
                  </div>
                  <div class="ts-facts-content">
                     <h2 class="ts-facts-num"><span class="counterUp"><?php echo $hakkimizdacek['proje'] ?></span></h2>
                     <h3 class="ts-facts-title">Devam Eden Projeler</h3>
                  </div>
               </div><!-- Col end -->

               <div class="col-sm-3 ts-facts">
                  <div class="ts-facts-img">
                     <img src="images/icon-image/fact4.png" alt="" />
                  </div>
                  <div class="ts-facts-content">
                     <h2 class="ts-facts-num"><span class="counterUp"><?php echo $hakkimizdacek['sehir'] ?></span></h2>
                     <h3 class="ts-facts-title">Şehir</h3>
                  </div>
               </div><!-- Col end -->

            </div> <!-- Facts end -->
         </div><!--/ Content row end -->
      </div><!--/ Container end -->
   </section><!-- Facts end -->

		<section id="news" class="news">
			<div class="container">
				<div class="row text-center">
					<h2 class="section-title">SİTE</h2>
					<h3 class="section-sub-title">HAKKINDA</h3>
				</div>
				<!--/ Title row end -->

				<div class="row">
					<div class="col-md-4 col-xs-12">
						<div class="latest-post">
							<div class="latest-post-media">
								
							</div>
							<div class="post-body">
								<h4 class="post-title">
									<a>SİTEMİZ SUNUCU TABANLI PROGRAMLAMA DERSİ İÇİN HAZIRLANMIŞTIR.</a>
								</h4>
								<div class="latest-post-meta">
									<span class="post-item-date">
										<i class="fa fa-clock-o"></i> OCAK 1, 2021
									</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-xs-12">
						<div class="latest-post">
							<div class="latest-post-media">
							</div>
							<div class="post-body">
								<h4 class="post-title">
									<a >SİTEMİZİN AMACI ADMİN PANELİNİN KULLANIMININ GÖSTERİLMESİDİR.</a>
								</h4>
								<div class="latest-post-meta">
									<span class="post-item-date">
										<i class="fa fa-clock-o"></i> OCAK 1, 2021
									</span>
								</div>
							</div>
						</div><!-- Latest post end -->
					</div><!-- 2nd post col end -->

					<div class="col-md-4 col-xs-12">
						<div class="latest-post">
							<div class="latest-post-media">
							</div>
							<div class="post-body">
								<h4 class="post-title">
									<a >DERSİN YÜRÜTÜCÜSÜ: DOÇ. DR. İSMAİL KIRBAŞ</a>
								</h4>
								<div class="latest-post-meta">
									<span class="post-item-date">
										<i class="fa fa-clock-o"></i> OCAK 1, 2021
									</span>
								</div>
							</div>
						</div><!-- Latest post end -->
					</div><!-- 3rd post col end -->
				</div>
				<!--/ Content row end -->

				<div class="general-btn text-center">
					<a >ADMİN PANELİNE GİRİŞ İÇİN AŞAĞIDAKİ BUTONU KULLANABİLİRSİNİZ...</a>
					<br></br>
					<a class="btn btn-primary" href="panel/login.php">ADMİN PANELİ GİRİŞ</a>
				</div>

			</div>
			<!--/ Container end -->
		</section>

<br>
		<section class="subscribe no-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-12 col-xs-12">
						<div class="subscribe-call-to-acton">
							<h3>DESTEK İÇİN</h3>
							<h4><?php echo $ayarcek['telefon'] ?></h4>
						</div>
					</div><!-- Col end -->

					<div class="col-md-8 col-sm-12 col-xs-12">
						<div class="ts-newsletter">
							<div class="newsletter-introtext">
								<h4>ADRESİMİZ</h4>
								<p><?php echo $ayarcek['adres'] ?></p>
							</div>

							<div class="newsletter-form">
								<form action="#" method="post">
									
								</form>
							</div>
						</div><!-- Newsletter end -->
					</div><!-- Col end -->

				</div><!-- Content row end -->
			</div>
			<!--/ Container end -->
		</section>
		<!--/ News end -->


		<!--/ News end -->

<?php require_once 'footer.php'; ?>