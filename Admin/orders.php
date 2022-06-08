<?php

use Admin\Medicalstore\Models\Orders;
use Admin\Medicalstore\Models\Orders_details;

require "inc/header.php";
$ord = new Orders;
$orders = $ord->selectAll("orders.name,orders.address,orders.email,orders.phone,orders.created_at,SUM(order_details.qty* products.price) AS total,products.name AS prodName,img");
$order_details = [];
$OrderDetails = new Orders_details;
foreach ($orders as $order) {
  // $details = [];
  // $details = $OrderDetails->selectAll("orders.name,orders.address,orders.email,orders.phone,orders.created_at,SUM(order_details.qty* products.price) AS total,products.name AS prodName,img");
  // $details = "SELECT products.name, products.img FROM order_details INNER JOIN products ON products.id = order_details.products_id  "
  // array_push($order_details, $details);
}
// echo"<pre>";
// print_r($orders);
?>
<a href="<?= AURL; ?>index.php">Back</a>
<div class="pt-5">
  <table class="table container text-center ">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">Total</th>

        <th scope="col">Order Name</th>
        <th scope="col">Order img</th>

      </tr>
    </thead>
    <tbody>
      <?php foreach ($orders as $index => $prod) : ?>
        <tr>
          <th scope="row"><?= $index ?></th>
          <td><?= $prod['name'] ?></td>
          <td><?= $prod['phone'] ?></td>
          <td><?= $prod['email'] ?></td>
          <td><?= $prod['address'] ?></td>
          <td><?= $prod['total'] ?></td>
          <td><?= $prod['prodName'] ?></td>
          <td>
            <!-- <img width="100px" src="<?= URL . "uploads/" . $prod['img']; ?>" alt=""> -->
            <?php foreach ($orders as $index => $prod) : ?>
            <?php endforeach; ?>

          </td>

        </tr>
        <tr>
        <?php endforeach; ?>
    </tbody>
  </table>
</div>
<?php require "inc/footer.php"; ?>