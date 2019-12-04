<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Product</th>
                            <th scope="col">Available</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- ====================AWAL FORM============================ -->
                        <form action="<?= BASE_URL();?>checkout/item" method="post">

                        <!-- ID product -->
                        <?php if (isset($dataCart[0])) {?>
                            <?php foreach ($dataCart as $cart => $item):?>
                                <tr>
                                <input type="hidden" name="idCart[]" value="<?=$item->idcart?>">
                                <input type="hidden" name="idfishowner[]" value="<?=$item->idfishowner?>">
                                <td><img src="https://dummyimage.com/50x50/55595c/fff" /></td>
                                
                                <!-- nama product -->
                                <td><?=$item->namaproduct?></td>
                                <!-- <input type="hidden" name="cart[<?= $cart; ?>]['namaproduct']" value="<?=$item->namaproduct?>"> -->
                                <input type="hidden" name="namaProduct[]" value="<?=$item->namaproduct?>">

                                <!-- kwantitas product -->
                                <td>In stock</td>
                                <td><input class="form-control" type="text" name="quantity[]" value="<?=$item->quantity?>" /></td>

                                <!-- harga product -->
                                <td class="text-right">Rp. <?=$item->harga?></td>
                                <input type="hidden" name="harga[]" value="<?=$item->harga?>">

                                <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                            </tr>    
                        <?php endforeach; ?>

                        <!-- Sub Totalnya dari Calculate semua barang di Cart-->
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Sub-Total</td>
                            <td class="text-right">Rp. 
                            <?php 
                            $subTotal = 0;
                            foreach ($dataCart as $cart){
                                $subTotal = $subTotal + (int)$cart->harga;
                            }
                            echo $subTotal;
                            ?></td>
                            <input type="hidden" name="subTotal" value="<?=$subTotal?>">
                             
                        </tr>

                        <!-- Shipping -->
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Shipping</td>
                            <td class="text-right">Rp. <?php $shipping = 15000; echo $shipping;?></td>
                            <input type="hidden" name="shipping" value="<?= $shipping?>">
                        </tr>

                        <!-- Total harga sudah sama shipping -->
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total </strong></td>
                            <td class="text-right"><strong>Rp.<?php $totalHarga = $subTotal + $shipping; echo $totalHarga; ?></strong></td>
                            <input type="hidden" name="totalHarga" value="<?=$totalHarga?>">
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <!-- Lanjut Shopping -->
                <div class="col-sm-12  col-md-6">
                    <button class="btn btn-block btn-light" ><a href="<?= BASE_URL();?>">Continue Shopping</a> </button>
                </div>
                <!-- Checkout Barang -->
                <div class="col-sm-12 col-md-6 text-right">
                    <button type="submit" name="checkout" class="btn btn-lg btn-block btn-success text-uppercase">Checkout </button>
                </div>
            </div>
            <?php }elseif(empty($_SESSION['idcustomer'])){ ?>
                <?php
                echo "uwu";
                ?>
            <?php }else{ ?>
                <?= "NULL"; ?>
            <?php } ?>
            </form>
            <!-- ====================AKHIR FORM============================ -->
        </div>
    </div>
</div>