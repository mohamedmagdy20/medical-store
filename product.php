<?php
require "./inc/header.php";
use Admin\Medicalstore\Models\Products;
?>
<?php
if($request->getHas('id')){
    $id = $request->get('id');
}
else{
    $id =2;
}
$product = new Products;
$prods =$product->selectfromId($id,"description,products.name AS prodname,products.id AS prodId,price,img,pieces_no,cats.name AS catName");
?>
<section class="prod container">
    <div class="row">
        <div class="col-md-6">
            <div class="img-contain text-center bg-white p-5 shadow p-3 mb-5 rounded-3">
                <img class="" src="<?= URL;?>uploads/<?=$prods[0]['img'];?>" alt="">
            </div>
        </div>
        <div class="col-md-6">
        <div class="productsdesc">
                <p class="text-primary"><?= $prods[0]['catName']?></p>
                <h1><?= $prods[0]['prodname']?></h1>
                <p  class="text-primary"><?= $prods[0]['description']?></p>
                <h2>$<?= $prods[0]['price']?></h2>
                <form class="pt-4" action="<?= URL;?>handlers/add-cart.php" method="POST">
                    <div class="pb-4 counter d-flex">
                        <h4>Quantity: </h4>
                        <input type="number" name="qty" pattern="[0-9]*" value="1" class="form-control">
                    </div>
                    <input type="hidden" name="name" value="<?= $prods[0]['prodname']?>">
                    <input type="hidden" name="id" value="<?= $prods[0]['prodId']?>">
                    <input type="hidden" name="price" value="<?= $prods[0]['price']?>">
                    <input type="hidden" name="img" value="<?= $prods[0]['img']?>">
                    <button name="submit" class="btn btn-primary">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php require "./inc/footer.php"; ?>