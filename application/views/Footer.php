<!-- Footer -->
  <footer class="py-5 bg-dark">
  	<div class="container">
  		<p class="m-0 text-center text-white">Copyright &copy; Fishmarket 2019</p>
  	</div>
  	<!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src=<?= BASE_URL();?>assets/vendor/jquery/jquery.min.js></script>
  <script src=<?= BASE_URL();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js></script>

  <!-- Core plugin JavaScript-->
  <script src=<?= BASE_URL();?>assets/vendor/jquery-easing/jquery.easing.min.js></script>

  <!-- Custom scripts for all pages-->
  <script src=<?= BASE_URL();?>assets/vendor/sb-admin/js/sb-admin-2.min.js></script>

  <!-- Page level plugins -->
  <script src=<?= BASE_URL();?>assets/vendor/chart.js/Chart.min.js></script>

  <!-- Page level custom scripts -->
  <script src=<?= BASE_URL();?>assets/vendor/sb-admin/js/demo/chart-area-demo.js></script>
  <script src=<?= BASE_URL();?>assets/vendor/sb-admin/js/demo/chart-pie-demo.js></script>

<!-- Login Modal -->
<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Login to Fishmarket</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= BASE_URL();?>users/login/login" method="post">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" id="username" name="username" placeholder="Username ..">
						<small id="username" class="form-text text-muted">Input your username.</small>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Password">
					</div>
					<div class="form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">remember me</label>
					</div>
					<!-- <button type="submit" class="btn btn-primary">Login</button> -->
				</div>
				<div class="modal-footer">
					<a href="<?=BASE_URL();?>user/register"><button type="button" class="btn btn-secondary">Register</button></a>
					<button type="submit" class="btn btn-primary">Login</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a class="btn btn-primary" href=<?=BASE_URL();?>users/login/logout>Logout </a> 
			</div> 
		</div> 
	</div> 
</div>

<!-- Top Up Modal -->
<div class="modal fade" id="topupmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Top Up Saldo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form action="<?=base_url();?>homepage/topUpSaldo" method="post">
					<div class="form-group">
						<label for="saldo">Saldo</label>
						<input type="text" class="form-control" id="saldo" name="saldo" placeholder="<?=$saldo->balance;?>" disabled>
					</div>
					<div class="form-group">
						<label for="topup">topup</label>
						<input type="number" class="form-control" id="topup" name="topup" placeholder="topup">
					</div>
					<!-- <button type="submit" class="btn btn-primary">Login</button> -->
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Top Up</button>
				</div>
			</form>
      </div>
    </div>
  </div>
</div>
  </body> 
</html>