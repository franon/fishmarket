<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Lorem</h1>
<p class="mb-4">ipsum</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">       
    <a href="<?=BASE_URL();?>seller/products/tambahBarang"><button type="button" class="btn btn-warning"><i class="fas fa-plus"> </i> Jual Barang</button></a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>idfishkios</th>
            <th>Nama Penjual</th>
            <th>Kode Ikan</th>
            <th>Nama Ikan</th>
            <th>Harga Ikan</th>
            <th>Qty</th>
            <th>FODoPP</th>
            <th>Note Ikan</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>idfishkios</th>
            <th>Nama Penjual</th>
            <th>Kode Ikan</th>
            <th>Nama Ikan</th>
            <th>Harga Ikan</th>
            <th>Qty</th>
            <th>FODoPP</th>
            <th>Note Ikan</th>
            <th>Action</th>
          </tr>
        </tfoot>
        
        <?php foreach ($barang as $brg): ?>
          <tbody>
            <tr>
              <!-- <?= var_dump($brg);?> -->
            <td><?= $brg->idfishkios ?></td>
            <td><?= $brg->fishownerusername?></td>
            <td><?= $brg->fishkodeofproductsale ?></td>
            <td><?= $brg->fishgenericproductname ?></td>
            <td><?= $brg->fishregularprice ?></td>
            <td><?= $brg->fishquantity ?></td>
            <td><?= $brg->fishopendateofproductPrice ?></td>
            <td><?= $brg->fishnoteofproduct ?></td>
            <td width="250">
            <a href="<?= base_url('seller/products/ubahbarang/'.$brg->fishkodeofproductsale); ?>" class="btn btn-small text-warning">
            <i class="fas fa-pencil-alt">Ubah</i></a>
            <a href="<?= base_url('seller/products/delete/'.$brg->fishkodeofproductsale); ?>" class="btn btn-small text-danger">
            <i class="fas fa-trash">Hapus</i></a>
            </td>
            
            </tr>
          </tbody>
        <?php endforeach; ?>
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