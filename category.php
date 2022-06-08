<?php
require "./inc/header.php";

use Admin\Medicalstore\Models\Cats;
use Admin\Medicalstore\Models\Products;

if($request->getHAS('id')){
    $id =$request->get('id');
}
else{
    $id =2;
}
$product = new Products;
$cate = new Cats;
$cat= $cate->selectfromId($id,"name");
$prods = $product->selectWhere("cat_id = $id");
?>
<section class="products pt-5 pb-5">
    <h1 class="text-center pt-3 pb-3"><?= $cat[0]['name'];?></h1>
    <div class="container">
        <div class="row ">
            <?php foreach($prods as $prod):?>
            <div class=" col-md-4">
                <a class="link text-decoration-none text-dark" href="<?= URL;?>product.php?id=<?= $prod['id'];?>">
                <div class="text-center bg-white p-5 shadow p-3 mb-5 rounded-3">
                <div class="product-img  d-flex flex-column align-items-center justify-content-center">
                    <img  class= "scale img-fluid" src="<?= URL ."uploads/".$prod['img'];?>" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title"><?= $prod['name']?></h5>
                      <p class="card-text">$<?=$prod['price']?></p>
                     </div>    
                     </div>
                     </a>  
            </div>
            <?php endforeach;?> 
    </div>
</section>

<?php require "./inc/footer.php";?>