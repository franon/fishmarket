<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= SITE_NAME."-".ucfirst($this->uri->segment(1)); ?></title>

  <!-- Bootstrap core CSS -->
  <link href="<?=BASE_URL();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?=BASE_URL();?>assets/vendor/css/shop-homepage.css" rel="stylesheet">
  
  <!-- Custom fonts for this template-->
  <link href=<?= BASE_URL();?>assets/vendor/fontawesome-free/css/all.min.css rel="stylesheet" type="text/css">
  <link href=<?= BASE_URL();?>assets/vendor/font-google.css rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href=<?= BASE_URL();?>assets/vendor/sb-admin/css/sb-admin-2.min.css rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?= BASE_URL(); ?>"><?=SITE_NAME?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <!-- Topbar Search -->
       <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Cari ..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
      <!-- end topbar search -->
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow">
						<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-dollar-sign"></i><?= isset($_SESSION['idcustomercoin']) ? $saldo->balance : '0';?>
						</a>
						<!-- Dropdown - Saldo Info -->
						<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
							<a class="dropdown-item" href="#">
								<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
								Top Up Saldo
							</a>
						</div>
					</li>
          <li class="nav-item">
            <!-- abaikan -->
            <a class="btn btn-success btn-sm ml-3" href="<?= BASE_URL();?>cart">
                    <i class="fa fa-shopping-cart"></i> Cart
                    <span class="badge badge-light">3</span>
                </a>
            <!-- end of abaikan -->
        </li>
           <!-- Nav Item - User Information -->
          <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$nama?></span>
                <!-- <img class="img-profile rounded-circle" src="#"> -->
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
        </ul>
      </div>
    </div>
  </nav>