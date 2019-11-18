<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo (SITE_NAME) . " - " . ucfirst($this->uri->segment(1)) ?></title>

    <!-- Custom fonts for this template-->
    <link href=<?= BASE_URL(); ?>assets/vendor/fontawesome-free/css/all.min.css rel="stylesheet" type="text/css">
    <link href=<?= BASE_URL(); ?>assets/vendor/font-google.css rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href=<?= BASE_URL(); ?>assets/vendor/sb-admin/css/sb-admin-2.min.css rel="stylesheet">

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
                                        <h1 class="h4 text-gray-900 mb-4">список!</h1>
                                    </div>

                                    <form class="user" action="<?= BASE_URL(); ?>seller/dashboard/register" method="post">

                                        <div class="form-group">
                                            <input type="text" name="fishowneremail" id="fishowneremail" class="form-control form-control-user" placeholder="testing@gmail.com...">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="fishownerfullname" id="fishownerfullname" class="form-control form-control-user" placeholder="Mr. Gyan">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="fishownerusername" class="form-control form-control-user" id="fishownerusername" placeholder="username...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="fishownerpassword" class="form-control form-control-user" id="fishownerpassword" placeholder="Password">
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">Regist Now!</button>
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
                                        <a class="small" href="<?= BASE_URL(); ?>seller/dashboard/Login">Have an account? Login Now!</a>
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