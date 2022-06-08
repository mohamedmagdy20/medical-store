<?php

use Admin\Medicalstore\Models\Cats;

require_once("../../App.php");


if($request->getHAS('id')){
    $id = $request->get('id');
    //print_r($id);
    $pr = new Cats;
    $isdeleted = $pr->Delete($id);
    var_dump($isdeleted);
    $session->addsesion('success','product Deleted');
    $request->Aredirect("category.php");
}
