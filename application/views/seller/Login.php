<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo (SITE_NAME) ." - ". ucfirst($this->uri->segment(1)) ?></title>

  <!-- Custom fonts for this template-->
  <link href=<?= BASE_URL();?>assets/vendor/fontawesome-free/css/all.min.css rel="stylesheet" type="text/css">
  <link href=<?= BASE_URL();?>assets/vendor/font-google.css rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href=<?= BASE_URL();?>assets/vendor/sb-admin/css/sb-admin-2.min.css rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>

                  <!-- <form action="<?= BASE_URL();?>seller/login" method="post">

<label for="username">Username</label> <br>
<input type="text" name="username" id="username" placeholder="username"><br><br>

<label for="password">Password</label> <br>
<input type="password" name="password" id="password" placeholder="password"><br><br>

<button type="submit">Login</button> -->
                  <form class="user" action="<?= BASE_URL();?>seller/login" method="post">
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user" id="inlineFormInputGroupUsername" placeholder="username">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                    <hr>
                    <a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.html">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src=<?= BASE_URL();?>assets/vendor/jquery/jquery.min.js></script>
  <script src=<?= BASE_URL();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js></script>

  <!-- Core plugin JavaScript-->
  <script src=<?= BASE_URL();?>assets/vendor/jquery-easing/jquery.easing.min.js></script>

  <!-- Custom scripts for all pages-->
  <script src=<?= BASE_URL();?>assets/vendor/sb-admin/js/sb-admin-2.min.js></script>

</body>

</html>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo (SITE_NAME) ." - ". ucfirst($this->uri->segment(1)) ?></title>
</head>
<body>
<h1>Halaman Seller</h1>    
<?php
if(isset($_SESSION["authenticated"])){
    var_dump($_SESSION['authenticated']);
        var_dump('session milik', $_SESSION['nama']);
        }else{
            echo "gk ada session";
        }

if($this->session->flashdata('message')){
    echo ($this->session->flashdata('message'));
    
} ?>

<form action="<?= BASE_URL();?>seller/login" method="post">

<label for="username">Username</label> <br>
<input type="text" name="username" id="username" placeholder="username"><br><br>

<label for="password">Password</label> <br>
<input type="password" name="password" id="password" placeholder="password"><br><br>

<button type="submit">Login</button>

</form>
</body>
</html> -->