<?php

use Admin\Medicalstore\Models\Products;

require_once("../../App.php");


if($request->getHAS('id')){
    $id = $request->get('id');
    //print_r($id);
    $pr = new Products;
    $isdeleted = $pr->Delete($id);
   // var_dump($isdeleted);
    $session->addsesion('success','product Deleted');
    $request->Aredirect("products.php");
}

?>
