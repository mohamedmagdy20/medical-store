<?php

use Admin\Medicalstore\Models\Cats;

require "inc/header.php";

$cate =new Cats;
$cats =$cate->getAll();
?>
<a href="<?=AURL;?>index.php" >Back</a>
<div class="pt-5 container">
<div class="text-left">
    <a class="btn btn-primary" href="<?=AURL;?>add-category.php">Add Category</a>
</div>
<table class="table  text-center ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Category Name</th>
      <th scope="col">Created At</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
      
    </tr>
  </thead>
  <tbody>
    <?php foreach($cats as $index=>$prod):?>
    <tr>
      <th scope="row"><?= $index?></th>
      <td><?= $prod['name']?></td>
      <td><?= $prod['created_ind']?></td>
      <td><a href="<?=AURL;?>handlers/deletecategory.php?id=<?=$prod['id']?>"><i class="fas fa-trash text-danger"></i></a></td>
      <td><a href="<?=AURL;?>edit-category.php?id=<?=$prod['id']?>"><i class="fas fa-edit text-primary"></i></a></td>
    
     </tr>
    <tr>
    <?php endforeach;?>
  </tbody>
</table>
</div>
<?php require "inc/footer.php";?>