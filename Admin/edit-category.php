<?php require "inc/header.php";

use Admin\Medicalstore\Models\Cats;
$c = new Cats;
if($request->getHas('id')){
    $id =$request->get('id');

}
else{
    $id =1;
}
$cate =$c->selectfromId($id,"id,name");

// print_r($cate);
// die;
?>
    <div class="container py-5">
        <div class="row">

            <div class="col-md-6 offset-md-3">
                <h3 class="mb-3">Edit Category : <?= $cate[0]['name'];?></h3>
                <div class="card">
                    <div class="card-body p-5">
                    <?php include("../inc/errors.php");?>
                        <form method="POST" action="<?= AURL . "handlers/update-category.php"?>">
                            <div class="form-group">
                                <input type="hidden" value="<?=$cate[0]['id'];?>" name="id">
                              <label>Name</label>
                              <input type="text" name="name"  value="<?=$cate[0]['name'];?>" class="form-control">
                            </div>
                            
                            <div class="text-center mt-5">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                <a class="btn btn-dark" href="<?=AURL;?>index.php">Back</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
<?php require "inc/footer.php";?>