<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=BASE_URL();?>assets/vendor/easy-table/style.css">
    <script src="<?=BASE_URL();?>assets/vendor/easy-table/js.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Document</title>
</head>
<body>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">

		<section class="content">
			<h1>Transaksimu</h1>
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-success btn-filter" data-target="pagado">Diterima</button>
								<button type="button" class="btn btn-warning btn-filter" data-target="pendiente">Dalam pengiriman</button>
								<button type="button" class="btn btn-danger btn-filter" data-target="cancelado">Dibatalkan</button>
								<button type="button" class="btn btn-default btn-filter" data-target="all">Lihat Semua</button>
							</div>
						</div>
						<div class="table-container">
							<table class="table table-filter">
								<tbody>
									<tr data-status="pagado">
										<td>
											<div class="ckbox">
												<input type="checkbox" id="checkbox1">
												<label for="checkbox1"></label>
											</div>
										</td>
										<td>
											<a href="javascript:;" class="star">
												<i class="glyphicon glyphicon-star"></i>
											</a>
										</td>
										<td>
											<div class="media">
												<a href="#" class="pull-left">
													<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
												</a>
												<div class="media-body">
													<span class="media-meta pull-right">Oktober 13, 2019</span>
													<h4 class="title">
														Transaksi ID = id-366
														<span class="pull-right pagado">(diterima)</span>
													</h4>
													<p class="summary">Pembelian Ikan Lele</p>
												</div>
											</div>
										</td>
									</tr>
									<tr data-status="pendiente">
										<td>
											<div class="ckbox">
												<input type="checkbox" id="checkbox3">
												<label for="checkbox3"></label>
											</div>
										</td>
										<td>
											<a href="javascript:;" class="star">
												<i class="glyphicon glyphicon-star"></i>
											</a>
										</td>
										<td>
											<div class="media">
												<a href="#" class="pull-left">
													<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
												</a>
												<div class="media-body">
													<span class="media-meta pull-right">November 13, 2019</span>
													<h4 class="title">
														Transaksi ID = trx-951
														<span class="pull-right pendiente">(dalam pengiriman)</span>
													</h4>
													<p class="summary">Ikan Blue Marlin, Sea Urchin, ..</p>
												</div>
											</div>
										</td>
									</tr>
									<tr data-status="cancelado">
										<td>
											<div class="ckbox">
												<input type="checkbox" id="checkbox2">
												<label for="checkbox2"></label>
											</div>
										</td>
										<td>
											<a href="javascript:;" class="star">
												<i class="glyphicon glyphicon-star"></i>
											</a>
										</td>
										<td>
											<div class="media">
												<a href="#" class="pull-left">
													<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
												</a>
												<div class="media-body">
													<span class="media-meta pull-right">September 13, 2019</span>
													<h4 class="title">
														Transaksi ID = trx-316
														<span class="pull-right cancelado">(dibatalkan)</span>
													</h4>
													<p class="summary">Ikan Lele, Ikan Betok, Ikan Paus</p>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="content-footer">
					<p>
						Page © - 2019 <br>
						Powered By <a href="#" target="_blank"><3</a>
					</p>
				</div>
			</div>
		</section>
		
	</div>
</div>    
</body>
</html>