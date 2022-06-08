<?php

use Admin\Medicalstore\Models\Cats;
use Admin\Medicalstore\Models\Orders;
use Admin\Medicalstore\Models\Products;

require "inc/header.php";

$cats= new Cats;
$prod =new Products;
$or = new Orders;

$cats_count =  $cats->getCount();
$prod_count = $prod->getCount();
$or_count = $or->getCount();
?>
<?php include "../inc/success.php"?>
<div class="container pt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="product mb-3 card bg-primary text-center">
                <p class="fs-4 text-white">Products</p>
                <p class="text-white"><?=$prod_count?></p>
               <a class="btn btn-secondary" href="<?=AURL;?>products.php">Show</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="product mb-3 card bg-danger text-center">
                <p class="fs-4 text-white">Category</p>
                <p class="text-white"> <?=$cats_count?></p>
               <a class="btn btn-secondary" href="<?=AURL;?>category.php">Show</a>
            </div>
        </div><div class="col-md-4">
            <div class="product mb-3 card bg-warning text-center">
                <p class="fs-4 text-white">Orders</p>
                <p class="text-white"><?=$or_count?></p>
               <a class="btn btn-secondary" href="<?=AURL;?>orders.php">Show</a>
            </div>
        </div>
    </div>
</div>
<?php require "inc/footer.php";?>
