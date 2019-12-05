<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Lorem</h1>
<p class="mb-4">ipsum</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
    <!-- <a href="#"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#kirimBarang"><i class="fas fa-plus"> </i> Kirim Barang</button></a> -->
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID Transaksi</th>
            <th>Nama Customer</th>
            <th>Tindakan</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>ID Transaksi</th>
            <th>Nama Customer</th>
            <th>Tindakan</th>
          </tr>
        </tfoot>
        <tbody>
            <?php foreach ($idInvoices as $key => $value): ?>
                <tr>
                    <td><?=$value->idtransaksi;?></td>
                    <td><?=$value->namacustomer;?></td>
                    <td><a href="<?=BASE_URL();?>seller/invoices/detailInvoices/<?=$value->idtransaksi;?>"><button type="button" class="btn btn-outline-success"> Lihat Detail</button></a>
                    <a href="#"><button type="button" class="btn btn-outline-danger"> Tolak Pesanan</button></a>
                    </td>
                </tr>
                <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<script>
  let URL = 'http://localhost/fishmarket/seller/api/barang';
  $.get(URL,{
    "id" : "<?=$_SESSION['admin_username']?>",
    "key-auth": "fm-5"
    },function(data){
    console.log(data);
  });

</script>