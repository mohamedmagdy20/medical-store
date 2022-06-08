<?php
use Admin\Medicalstore\Models\Products;

require "inc/header.php";

$product = new Products;
$prods = $product->selectAll("products.id AS prodId,cats.name AS catName, products.name AS prodName,price,pieces_no,img,created_at");
?>
<a href="<?=AURL;?>index.php" >Back</a>
<?php include "../inc/success.php"?>
<div class="pt-5 container">
  <div class="text-left">
    <a class="btn btn-primary" href="<?=AURL;?>add-products.php">Add Product</a>
  </div>
<table class="table text-center ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Name</th>
      <th scope="col">price</th>
      <th scope="col">pieces_no</th>
      <th scope="col">img</th>
      <th scope="col">Category Name</th>
      <th scope="col">created At</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <tbody>
    <?php foreach($prods as $index=>$prod):?>
    <tr>
      <th scope="row"><?= $index?></th>
      <td><?= $prod['prodName']?></td>
      <td><?= $prod['price']?></td>
      <td><?= $prod['pieces_no']?></td>
      <td><img width="100px" src="<?= URL ."uploads/".$prod['img'];?>" alt=""></td>
      <td><?= $prod['catName']?></td>
      <td><?= $prod['created_at']?></td>
      <td><a href="<?=AURL;?>handlers/delete.php?id=<?=$prod['prodId']?>"><i class="fas fa-trash text-danger"></i></a></td>
    </tr>
    <tr>
    <?php endforeach;?>
  </tbody>
</table>
</div>
<?php require "inc/footer.php";?>