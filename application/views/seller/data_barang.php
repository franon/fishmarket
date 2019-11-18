<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6><br>

        
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
            <!-- <a href="" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a> -->
            <!-- <a onclick="deleteConfirm('<?= base_url('seller/products/delete/'.$brg->fishkodeofproductsale); ?>')" 
            href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a> -->
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