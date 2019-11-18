<div class="container-fluid">

    <!--  
*/============Rute===============/*
idfishkios
fishkodeofproductsale
fishgenericproductname
fishregulerprice
fishquantity
fishopendateofproductprice
fishnoteofproduct
*/=======Close-Rute=============/*
-->

    <form action="<?=BASE_URL();?>seller/products/ubahBarang/<?=$dataIkan->fishkodeofproductsale?>" method="post">
        <div class="form-group">
            <label for="idfishkios">ID KIOS</label>
            <input type="hidden" class="form-control" name="idfishkios" placeholder="<?=$dataIkan->idfishkios?>">
            <input type="text" class="form-control" name="idfishkios" placeholder="<?=$dataIkan->idfishkios?>"disabled>
        </div>

        <div class="form-group">
            <label for="fishkodeofproductsale">Kode Ikan</label>
            <input type="hidden" class="form-control" name="fishkodeofproductsale" id="fishkodeofproductsale" value="<?=$dataIkan->fishkodeofproductsale?>">
            <input type="text" class="form-control" name="fishkodeofproductsale" id="fishkodeofproductsale" value="<?=$dataIkan->fishkodeofproductsale?>" disabled>
        </div>

        <div class="form-group">
            <label for="fishgenericproductname">Nama Ikan*</label>
            <input class="form-control <?php echo form_error('fishgenericproductname') ? 'is-invalid' : '' ?>" type="text" name="fishgenericproductname" value="<?=$dataIkan->fishgenericproductname?>"/>
        </div>


        <div class="form-group">
            <label for="fishregularprice">Harga</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">IDR</span>
                </div>
                <input class="form-control <?php echo form_error('fishregularprice') ? 'is-invalid' : '' ?>" type="text" name="fishregularprice" value="<?=$dataIkan->fishregularprice?> " />
                <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="fishquantity">Quantity</label>
            <div class="input-group mb-3">
                <input class="form-control <?php echo form_error('fishquantity') ? 'is-invalid' : '' ?>" type="text" name="fishquantity" value="<?=$dataIkan->fishquantity?>" />
                <div class="input-group-append">
                    <span class="input-group-text">Buah</span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="fishopendateofproductPrice">Tanggal Ikan</label>
            <input class="form-control <?php echo form_error('fishopendateofproductPrice') ? 'is-invalid' : '' ?>" type="hidden" name="fishopendateofproductPrice" value="<?=$dataIkan->fishopendateofproductPrice?>"/>
            <input class="form-control <?php echo form_error('fishopendateofproductPrice') ? 'is-invalid' : '' ?>" type="text" name="fishopendateofproductPrice" value="<?=$dataIkan->fishopendateofproductPrice?>" disabled/>
        </div>

        <div class="form-group">
            <label for="fishnoteofproduct">Detail Ikan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" id="fishnoteofproduct" name="fishnoteofproduct" value=""><?=$dataIkan->fishnoteofproduct?></textarea>
        </div>

        <button type="submit" class="btn btn-success" name="submit">Jual Barang</button>

    </form>

</div>