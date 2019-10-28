<!-- Footer -->
<footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Tambah Data Modal -->
<!-- Modal -->
<div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?php BASE_URL('seller/product/add'); ?>" method="post" enctype="multipart/form-data" >
      
      <div class="form-group">
								<label for="idfishkios">ID Fish Kios*</label>
                <input class="form-control <?php echo form_error('idfishkios') ? 'is-invalid':'' ?>" 
                type="text" name="idfishkios" placeholder="Id fish kiosmu.." />
								<div class="invalid-feedback">
									<?php echo form_error('idfishkios') ?>
								</div>
      </div>
      <div class="form-group">
								<label for="fishkodeofproductsale">Kode Ikan*</label>
                <input class="form-control <?php echo form_error('fishkodeofproductsale') ? 'is-invalid':'' ?>" 
                type="text" name="fishkodeofproductsale" placeholder="kode ikan.." />
								<div class="invalid-feedback">
									<?php echo form_error('fishkodeofproductsale') ?>
								</div>
      </div>
      <div class="form-group">
								<label for="fishgenericproductname">Nama Ikan*</label>
                <input class="form-control <?php echo form_error('fishgenericproductname') ? 'is-invalid':'' ?>" 
                type="text" name="fishgenericproductname" placeholder="Nama Ikan.." />
								<div class="invalid-feedback">
									<?php echo form_error('fishgenericproductname') ?>
								</div>
      </div>
      <div class="form-group">
								<label for="fishregularprice">Harga Ikan*</label>
                <input class="form-control <?php echo form_error('fishregularprice') ? 'is-invalid':'' ?>" 
                type="text" name="fishregularprice" placeholder="Harga? " />
								<div class="invalid-feedback">
									<?php echo form_error('fishregularprice') ?>
								</div>
      </div>
      <div class="form-group">
								<label for="fishquantity">Quantity*</label>
                <input class="form-control <?php echo form_error('fishquantity') ? 'is-invalid':'' ?>" 
                type="text" name="fishquantity" placeholder="Berapa ikan ya?.." />
								<div class="invalid-feedback">
									<?php echo form_error('fishquantity') ?>
								</div>
      </div>
      <div class="form-group">
								<label for="fishopendateofproductPrice">Tanggal Ikan*</label>
                <input class="form-control <?php echo form_error('fishopendateofproductPrice') ? 'is-invalid':'' ?>" 
                type="text" name="fishopendateofproductPrice" placeholder="Automatic Sistem. YYYY-MM-DD" />
								<div class="invalid-feedback">
									<?php echo form_error('fishopendateofproductPrice') ?>
								</div>
      </div>
      <div class="form-group">
								<label for="fishnoteofproduct">Penjelasan Ikan*</label>
                <input class="form-control <?php echo form_error('fishnoteofproduct') ? 'is-invalid':'' ?>" 
                type="text" name="fishnoteofproduct" placeholder="Jelaskan tentang ikanmu.." />
								<div class="invalid-feedback">
									<?php echo form_error('fishnoteofproduct') ?>
								</div>
			</div>
      <!-- Submit Button -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit!</button>
      </div>
      <!-- End of submit Button -->
      </form>
      </div>
    </div>
  </div>
</div>


  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <a class="btn btn-primary" href=<?= base_url();?>seller/dashboard/logout >Logout</a>
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

  <!-- Page level plugins -->
  <script src=<?= BASE_URL();?>assets/vendor/chart.js/Chart.min.js></script>

  <!-- Page level custom scripts -->
  <script src=<?= BASE_URL();?>assets/vendor/sb-admin/js/demo/chart-area-demo.js></script>
  <script src=<?= BASE_URL();?>assets/vendor/sb-admin/js/demo/chart-pie-demo.js></script>

</body>

</html>
