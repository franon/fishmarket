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
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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
          <a class="btn btn-primary" href=<?= base_url();?>seller/logout >Logout</a>
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
