<?php 
require "./inc/header.php";
$carts = $cart->all();
?>
<?php require "./inc/success.php"; ?>
<div class="table container pt-5 pb-5 text-center">
        <div class="t-head row">
            <div class="head  col-md-2">Image</div>
            <div class="head  col-md-2">Name</div>
            <div class="head  col-md-2">Quentity</div>
            <div class="head  col-md-2">Price</div>
            <div class="head  col-md-2">Total</div>
            <div class="head  col-md-1">Delete</div>
        </div>
        <?php foreach($carts as $row):?>
        <div class="t-row bg-white p-3 shadow  mt-2 rounded-3 row text-center ">
            <div class="head   col-md-2"><div><img width="100px" src="<?= URL ."uploads/".$row['img'];?>" alt=""></div></div>
            <div class="head   col-md-2"><div> <?= $row['name']?></div></div>
            <div class="head   col-md-2"><div><?= $row['qty']?></div></div>
            <div class="head   col-md-2"><div>$<?= $row['price']?></div></div>
            <div class="head   col-md-2"><div>$<?= $row['price']*$row['qty']?></div></div>
            <div class="head   col-md-1"><div><a href="<?=URL;?>handlers/delete.php?id=<?=$row['id']?>"><i class="fas fa-trash text-danger"></i></a></div></div> 
        </div>
        <?php endforeach;?>
        <div class="t-row bg-white p-3 shadow  mt-2 rounded-3 row text-center">
             Total: $<?=$total?>
        </div>
    </div>
    <div class="order container  pb-5">
        <h1 class="text-center pb-3 pt-3"> Fill your info</h1>
        <?php if($session->has("errors")):?>
			<div class="alert alert-danger">
				<?php foreach($session->get("errors") as $err): ?>
					<p class="mb-0"> <?= $err;?></p>
				<?php endforeach; $session->remove("errors");?>
			</div>
		<?php endif;?>
        <form action="<?=URL;?>handlers/add-order.php" method="POST">
            <input class="form-control p-3 mb-3" type="text" name="name" placeholder="Enter Your Name">
            <input class="form-control p-3 mb-3" type="text" name="email" placeholder="Enter Your Email">
            <input class="form-control p-3 mb-3" type="text" name="address" placeholder="Enter Your Address">
            <input class="form-control p-3 mb-3" type="text" name="phone" placeholder="Enter Your Phone">
            <input type="submit" name="submit" value="Submit Order" class="btn btn-primary">
        </form>
    </div>
    <script src="./assets/bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>

</body>
</html>