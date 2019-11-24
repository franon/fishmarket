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
                        <form action="<?= BASE_URL();?>checkout" method="post">
                        <?php var_dump($dataCart[0]);?>
                        <?php foreach ($dataCart as $cart => $item):?>
                            <tr>
                                <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                                <td><?=$item->namaproduct?></td>
                                <td>In stock</td>
                                <td><input class="form-control" type="text" value="<?=$item->quantity?>" /></td>
                                <td class="text-right">Rp. <?=$item->harga?></td>
                                <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                            </tr>    
                        <?php endforeach; ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Sub-Total</td>
                            <td class="text-right">Rp. 
                            <?php 
                            $harga = 0;
                            foreach ($dataCart as $cart){
                                $harga = $harga + (int)$cart->harga;
                            }
                            // var_dump($harga);
                            echo $harga;
                            ?></td>
                             
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Shipping</td>
                            <td class="text-right"><?php $shipping = 15000;?>Rp. 15000</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total </strong></td>
                            <td class="text-right"><strong>Rp.<?= $total = $harga + $shipping ?></strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <button class="btn btn-block btn-light" ><a href="<?= BASE_URL();?>">Continue Shopping</a> </button>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <button class="btn btn-lg btn-block btn-success text-uppercase"> <a href="#"></a> Checkout </button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>