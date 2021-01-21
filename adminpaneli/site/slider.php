<?php 

$slider=$baglanti->prepare("SELECT * from slider ");
$slider->execute();
while ($slidercek=$slider->fetch(PDO::FETCH_ASSOC)) {

}
?>
		<!-- Carousel -->
		<div id="main-slide" class="carousel slide" data-ride="carousel">

			<!-- Indicators -->
			<ol class="carousel-indicators visible-lg visible-md">
				<li data-target="#main-slide" data-slide-to="0" class="active"></li>
				<li data-target="#main-slide" data-slide-to="1"></li>
				<li data-target="#main-slide" data-slide-to="2"></li>
			</ol>
			<!--/ Indicators end-->

			<!-- Carousel inner -->
			<div class="carousel-inner">
<!--ilk slider active diğerleri değil -->
<?php 

$slider=$baglanti->prepare("SELECT * from slider order by sira limit 1");
$slider->execute();
while ($slidercek=$slider->fetch(PDO::FETCH_ASSOC)) { ?>
				<div class="item active" style="background-image:url(panel/resimler/<?php echo $slidercek['resim'] ?>)">
					<div class="slider-content">
						<div class="col-md-12 text-center">
							<h2 class="slide-title animated4"><?php echo $slidercek['baslik'] ?></h2>
							<h3 class="slide-sub-title animated5"><?php echo $slidercek['aciklama'] ?></h3>
							<p>
								<a href="<?php echo $slidercek['link'] ?>" class="slider btn btn-primary border"><?php echo $slidercek['button'] ?></a>
							</p>
						</div>
					</div>
				</div>
<?php } ?>

<?php 

$slider=$baglanti->prepare("SELECT * from slider order by sira limit 1,7");
$slider->execute();
while ($slidercek=$slider->fetch(PDO::FETCH_ASSOC)) { ?>

				<div class="item" style="background-image:url(panel/resimler/<?php echo $slidercek['resim'] ?>)">
					<div class="slider-content text-right">
						<div class="col-md-12">
							<h2 class="slide-title animated6"><?php echo $slidercek['baslik'] ?></h2>
							<h3 class="slide-sub-title animated7"><?php echo $slidercek['aciklama'] ?></h3>
							
							<p>
								<a href="<?php echo $slidercek['link'] ?>" class="slider btn btn-primary border"><?php echo $slidercek['button'] ?></a>
							</p>
						</div>
					</div>
				</div>
				<!--/ Carousel item 3 end -->
<?php } ?>
			</div><!-- Carousel inner end-->

			<!-- Controllers -->
			<a class="left carousel-control" href="#main-slide" data-slide="prev">
				<span><i class="fa fa-angle-left"></i></span>
			</a>
			<a class="right carousel-control" href="#main-slide" data-slide="next">
				<span><i class="fa fa-angle-right"></i></span>
			</a>
		</div>
		<!--/ Carousel end -->
