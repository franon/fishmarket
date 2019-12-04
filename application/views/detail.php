<!-- Page Content -->
<div class="col-lg-9  ">

	<div class="card mt-4">
		<img class="card-img-top img-fluid" src="<?= BASE_URL();?>assets/img/detail/salmon.jpg" alt="">
		<div class="card-body">
			<h3 class="card-title"><?=$ikan->fishgenericproductname?></h3>
			<h4>Rp. <?=$ikan->fishregularprice?></h4>
			<i class="fas fa-fighter-jet"></i>
			<p class="card-text"><?=$ikan->fishnoteofproduct?>.</p>
			<span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
			4.0 stars
			<a href=" <?= BASE_URL();?>cart/addToCart/<?=$ikan->fishkodeofproductsale?>"><i class="fas fa-cart-plus"></i>add
				to cart</a>
		</div>
		<div class="card-body">
			<h5> <strong><?=$seller->kiosname?></strong></h5>
		</div>

	</div>
	<!-- /.card -->

	<div class="card card-outline-secondary my-4">
		<div class="card-header">
			Product Reviews
		</div>
		<div class="card-body">
			<p>Mantap</p>
			<small class="text-muted">Posted by Testing on 3/10/19</small>
			<hr>
			<p>tekstur yang sangat sesuai</p>
			<small class="text-muted">Posted by Andi on 25/10/19</small>
			<hr>
			<p>hehe</p>
			<small class="text-muted">Posted by Jake on 29/10/19</small>
			<hr>
			<a href="#" class="btn btn-success">Leave a Review</a>
		</div>
	</div>
	<!-- /.card -->

</div>
<!-- /.col-lg-9 -->

</div>

</div>
<!-- /.container -->