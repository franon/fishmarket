<!-- content -->

<div class="col-lg-9">

	<div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<img class="d-block img-fluid" src="<?=BASE_URL();?>assets/img/slider/slide-1.jpg" alt="First slide">
			</div>
			<div class="carousel-item">
				<img class="d-block img-fluid" src="<?=BASE_URL();?>assets/img/slider/slide-2.jpg" alt="Second slide">
			</div>
			<div class="carousel-item">
				<img class="d-block img-fluid" src="<?=BASE_URL();?>assets/img/slider/slide-3.jpg" alt="Third slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<div class="row">

		<div class="col-lg-4 col-md-6 mb-4">
			<div class="card h-100">
				<a href="#"><img class="card-img-top" src="<?= BASE_URL();?>assets/img/catfish.jpg" alt=""></a>
				<div class="card-body">
					<h4 class="card-title">
						<a href="#">Ikan Lele</a>
					</h4>
					<h5>Rp. 23.000</h5>
					<p class="card-text"> Ini Ikan lele</p>
				</div>
				<div class="card-footer">
					<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-md-6 mb-4">
			<div class="card h-100">
				<a href="<?= BASE_URL();?>homepage/detail"><img class="card-img-top"
						src="<?= BASE_URL();?>assets/img/salmon.jpg" alt=""></a>
				<div class="card-body">
					<h4 class="card-title">
						<a href="<?= BASE_URL();?>homepage/detail">Salmon</a>
					</h4>
					<h5>Rp. 477.000</h5>
					<p class="card-text">ini ikan salmon</p>
				</div>
				<div class="card-footer">
					<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-md-6 mb-4">
			<div class="card h-100">
				<a href="#"><img class="card-img-top" src="<?= BASE_URL();?>assets/img/tuna.jpg" alt=""></a>
				<div class="card-body">
					<h4 class="card-title">
						<a href="#">Ikan Tuna</a>
					</h4>
					<h5>Rp. 50.000</h5>
					<p class="card-text">Ikan tuna mantap</p>
				</div>
				<div class="card-footer">
					<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-md-6 mb-4">
			<div class="card h-100">
				<a href="#"><img class="card-img-top" src="<?= BASE_URL();?>assets/img/bulu_babi.jpg" alt=""></a>
				<div class="card-body">
					<h4 class="card-title">
						<a href="#">Sea Urchins</a>
					</h4>
					<h5>Rp. 10.000</h5>
					<p class="card-text">ini bulu babi</p>
				</div>
				<div class="card-footer">
					<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-md-6 mb-4">
			<div class="card h-100">
				<a href="#"><img class="card-img-top" src="<?= BASE_URL();?>assets/img/sardines.jpg" alt=""></a>
				<div class="card-body">
					<h4 class="card-title">
						<a href="#">Ikan Sardines</a>
					</h4>
					<h5>Rp.20.000</h5>
					<p class="card-text">Ikan sardineeee</p>
				</div>
				<div class="card-footer">
					<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-md-6 mb-4">
			<div class="card h-100">
				<a href="#"><img class="card-img-top" src="<?= BASE_URL();?>assets/img/crab.jpg" alt=""></a>
				<div class="card-body">
					<h4 class="card-title">
						<a href="#">Tuan Crab</a>
					</h4>
					<h5>Rp. 125000</h5>
					<p class="card-text">Fresh dan mantap. <small>bikini bottom</small> </p>
				</div>
				<div class="card-footer">
					<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
				</div>
			</div>
		</div>
		<?php foreach ($item as $nmrIkan => $ikan):?>
		<div class="col-lg-4 col-md-6 mb-4">
			<div class="card h-100">
				<a href="<?=BASE_URL();?>detail/item/<?=$ikan->fishkodeofproductsale?>"><img class="card-img-top"
						src="<?= BASE_URL();?>assets/img/crab.jpg" alt=""></a>
				<div class="card-body">
					<h4 class="card-title">
						<a
							href="<?=BASE_URL();?>detail/item/<?=$ikan->fishkodeofproductsale?>"><?=$ikan->fishgenericproductname?></a>
					</h4>
					<h5><?=$ikan->fishregularprice?></h5>
					<p class="card-text"><?=$ikan->fishnoteofproduct?>. <small>bikini bottom</small> </p>
				</div>
				<div class="card-footer">
					<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
				</div>
			</div>
		</div>
		<?php endforeach;?>
	</div>
	<!-- /.row -->

</div>
<!-- /.col-lg-9 -->

</div>
<!-- /.row -->

</div>
<!-- /.container -->
